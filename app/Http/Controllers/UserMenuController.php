<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Receta;
use App\Models\Categoria;
use App\Models\RecetaMenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserMenuController extends Controller
{
    public function show(Categoria $categoria, Request $request)
    {
        $user = Auth::user();

        $menuPersonalizado = Menu::where('categoria_id', $categoria->id_categoria)
            ->where('user_id', $user->id)
            ->first();

        if (!$menuPersonalizado) {
            $menu = Menu::where('categoria_id', $categoria->id_categoria)
                ->whereNull('user_id')
                ->first();
        } else {
            $menu = $menuPersonalizado;
        }

        if (!$menu) {
            return redirect()->route('pages.menus.index')->with('error', 'No hay menú disponible para esta categoría.');
        }

        $recetas = Receta::with(['ingredientes', 'pasos'])->get();

        $numeroADia = [
            '1' => 'lunes',
            '2' => 'martes',
            '3' => 'miércoles',
            '4' => 'jueves',
            '5' => 'viernes',
            '6' => 'sábado',
            '7' => 'domingo'
        ];

        $tiposComida = ['Desayuno', 'Comida', 'Cena', 'Snack'];
        $tabla = [];
        $totalCalorias = 0;
        $totalProteinas = 0;

        foreach ($numeroADia as $nombreDia) {
            foreach ($tiposComida as $tipo) {
                $tabla[$nombreDia][$tipo] = null;
            }
        }

        $recetaMenus = RecetaMenu::where('id_menu', $menu->id_menu)->get();

        foreach ($recetaMenus as $relacion) {
            $diaNombre = $numeroADia[$relacion->dia_semana] ?? null;
            $tipoComida = $relacion->tipo_comida;

            if ($diaNombre && in_array($tipoComida, $tiposComida)) {
                $receta = $recetas->firstWhere('id_receta', $relacion->id_receta);
                if ($receta) {
                    $calorias = $receta->total_calorias ?? 0;
                    $proteinas = $receta->total_proteinas ?? 0;

                    $totalCalorias += $calorias;
                    $totalProteinas += $proteinas;

                    $tabla[$diaNombre][$tipoComida] = [
                        'receta' => $receta,
                        'enlace' => $relacion->enlace_receta,
                        'calorias' => $calorias,
                        'proteinas' => $proteinas,
                    ];
                }
            }
        }

        $modo = 'ver';

        return view('pages.menus.show-copy', compact(
            'categoria',
            'tabla',
            'menu',
            'totalCalorias',
            'totalProteinas',
            'recetas',
            'modo'
        ));
    }

    public function edit(Menu $menu, Request $request)
    {
        $user = Auth::user();
        $menuOriginal = $menu;

        if ($menu->user_id === null || $menu->user_id !== $user->id) {
            $categoriaId = $menu->categoria_id;

            $menuPersonalizado = Menu::where('categoria_id', $categoriaId)
                ->where('user_id', $user->id)
                ->first();

            if (!$menuPersonalizado) {
                if ($menu->user_id !== null && $menu->user_id !== $user->id) {
                    $menuOriginal = Menu::where('categoria_id', $categoriaId)
                        ->whereNull('user_id')
                        ->first();

                    if (!$menuOriginal) {
                        return redirect()->back()->with('error', 'No se encontró el menú original para esta categoría.');
                    }
                }

                DB::beginTransaction();
                try {
                    $menuPersonalizado = $menuOriginal->replicate();
                    $menuPersonalizado->user_id = $user->id;
                    $menuPersonalizado->nombre = $menuOriginal->nombre . ' (Personalizado)';
                    $menuPersonalizado->save();

                    $relacionesOriginales = RecetaMenu::where('id_menu', $menuOriginal->id_menu)->get();

                    foreach ($relacionesOriginales as $relacion) {
                        RecetaMenu::create([
                            'id_menu' => $menuPersonalizado->id_menu,
                            'id_receta' => $relacion->id_receta,
                            'dia_semana' => $relacion->dia_semana,
                            'tipo_comida' => $relacion->tipo_comida,
                            'orden' => $relacion->orden,
                            'enlace_receta' => $relacion->enlace_receta,
                        ]);
                    }

                    DB::commit();
                } catch (\Exception $e) {
                    DB::rollBack();
                    return redirect()->back()->with('error', 'Error al crear tu menú personalizado: ' . $e->getMessage());
                }
            }

            return redirect()->route('user.menus.edit', ['menu' => $menuPersonalizado->id_menu]);
        }

        $recetas = Receta::with(['ingredientes', 'pasos'])->get();

        $diasSemana = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];
        $tiposComida = ['Desayuno', 'Comida', 'Cena', 'Snack'];

        $tabla = [];
        $totalCalorias = 0;
        $totalProteinas = 0;

        foreach ($diasSemana as $dia) {
            foreach ($tiposComida as $tipo) {
                $tabla[$dia][$tipo] = null;
            }
        }

        $recetaMenus = RecetaMenu::where('id_menu', $menu->id_menu)->get();

        foreach ($recetaMenus as $relacion) {
            $diaNombre = $diasSemana[$relacion->dia_semana - 1] ?? null;
            $tipoComida = $relacion->tipo_comida;

            if ($diaNombre && in_array($tipoComida, $tiposComida)) {
                $receta = $recetas->firstWhere('id_receta', $relacion->id_receta);
                if ($receta) {
                    $tabla[$diaNombre][$tipoComida] = [
                        'receta' => $receta,
                        'calorias' => $receta->total_calorias ?? 0,
                        'proteinas' => $receta->total_proteinas ?? 0,
                    ];

                    $totalCalorias += $receta->total_calorias ?? 0;
                    $totalProteinas += $receta->total_proteinas ?? 0;
                }
            }
        }

        $categoria = $menu->categoria;
        $modo = 'editar';

        return view('pages.menus.show-copy', compact(
            'categoria',
            'menu',
            'tabla',
            'recetas',
            'totalCalorias',
            'totalProteinas',
            'modo'
        ));
    }

    public function update(Request $request, Menu $menu)
    {
        $user = Auth::user();

        if ($menu->user_id === null || $menu->user_id !== $user->id) {
            $menuPersonalizado = Menu::where('categoria_id', $menu->categoria_id)
                ->where('user_id', $user->id)
                ->first();

            if ($menuPersonalizado) {
                return redirect()->route('user.menus.update', ['menu' => $menuPersonalizado->id_menu])
                    ->withInput();
            } else {
                return redirect()->route('user.menus.edit', ['menu' => $menu->id_menu]);
            }
        }

        if ($menu->user_id !== $user->id) {
            return redirect()->back()->with('error', 'No tienes permiso para actualizar este menú.');
        }

        $request->validate([
            'tabla' => 'required|array',
        ]);

        $tabla = $request->input('tabla');
        $diaMap = [
            'lunes' => 1,
            'martes' => 2,
            'miércoles' => 3,
            'jueves' => 4,
            'viernes' => 5,
            'sábado' => 6,
            'domingo' => 7
        ];

        DB::beginTransaction();
        try {
            RecetaMenu::where('id_menu', $menu->id_menu)->delete();

            foreach ($tabla as $dia => $comidas) {
                $diaNumero = $diaMap[$dia] ?? null;
                if (!$diaNumero) continue;

                $orden = 1;

                foreach ($comidas as $tipo => $id_receta) {
                    if ($id_receta) {
                        RecetaMenu::create([
                            'id_menu' => $menu->id_menu,
                            'id_receta' => $id_receta,
                            'dia_semana' => $diaNumero,
                            'tipo_comida' => $tipo,
                            'orden' => $orden++,
                            'enlace_receta' => null,
                        ]);
                    }
                }
            }

            DB::commit();

            return redirect()->route('user.area', ['menu_updated' => 'true']);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Error al actualizar el menú: ' . $e->getMessage());
        }
    }
}
