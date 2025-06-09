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
    //muestra menú personal para categoría especif.
    public function show(Categoria $categoria, Request $request)
    {
        $user = Auth::user(); //obtiene usuario logueado

        //busca menú personal para esa categoria
        $menuPersonalizado = Menu::where('categoria_id', $categoria->id_categoria)
            ->where('user_id', $user->id)
            ->first();

        //si no tiene, busca por la categoria del menú original
        if (!$menuPersonalizado) {
            $menu = Menu::where('categoria_id', $categoria->id_categoria)
                ->whereNull('user_id')
                ->first();
        } else {
            $menu = $menuPersonalizado; //si hay, lo asigna a menu
        }

        if (!$menu) { //si no hay menú personal, lanza error
            return redirect()->route('pages.menus.index')->with('error', 'No hay menú disponible para esta categoría.');
        }

        //carga todas las recetas con sus ingredientes y pasos
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

        //crea una tabla que organiza los días de la semana y tipos de comida
        foreach ($numeroADia as $nombreDia) {
            foreach ($tiposComida as $tipo) {
                $tabla[$nombreDia][$tipo] = null;
            }
        }

        $recetaMenus = RecetaMenu::where('id_menu', $menu->id_menu)->get(); //busca recetas asociadas a ese menú

        foreach ($recetaMenus as $relacion) { //para cada receta de ese menú
            $diaNombre = $numeroADia[$relacion->dia_semana] ?? null; //obtiene el dia_semana de esa receta
            $tipoComida = $relacion->tipo_comida; //obtiene el tipo_comida de esa receta

            if ($diaNombre && in_array($tipoComida, $tiposComida)) { //verifica que dia y tipo sean válidos
                $receta = $recetas->firstWhere('id_receta', $relacion->id_receta); //busca receta que corresponda con ese id
                if ($receta) {
                    //obtiene total calorias y proteínas de esa receta
                    $calorias = $receta->total_calorias ?? 0;
                    $proteinas = $receta->total_proteinas ?? 0;

                    //las suma al total del menú
                    $totalCalorias += $calorias;
                    $totalProteinas += $proteinas;

                    //guarda esa receta en la tabla
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

        //si menú es genérico o pertenece a otro usuario
        if ($menu->user_id === null || $menu->user_id !== $user->id) {
            $categoriaId = $menu->categoria_id;

            //busca si hay menú personal para esa categoria 
            $menuPersonalizado = Menu::where('categoria_id', $categoriaId)
                ->where('user_id', $user->id)
                ->first();

            if (!$menuPersonalizado) {
                //si no hay menú personal, se busca un menú genérico o con usuario para esa categoria
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
                    //si no hay copia, la crea
                    $menuPersonalizado = $menuOriginal->replicate();
                    $menuPersonalizado->user_id = $user->id;
                    $menuPersonalizado->nombre = $menuOriginal->nombre . ' (Personalizado)';
                    $menuPersonalizado->save();

                    $relacionesOriginales = RecetaMenu::where('id_menu', $menuOriginal->id_menu)->get();

                    //para que nuevo menú tenga las mismas recetas y demás (pivote) que el original 
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

        //pero si ya es tu menú, simplemente carga todo
        //carga como array todos los id de recetas del menú en específico
        $recetasAsociadas = RecetaMenu::where('id_menu', $menu->id_menu)
            ->pluck('id_receta')
            ->toArray();

        //carga los ingredientes y pasos de las recetas cuyo id coincida con el array de id de recetasAsoc
        $recetas = Receta::with(['ingredientes', 'pasos'])
            ->whereIn('id_receta', $recetasAsociadas)
            ->get();


        $diasSemana = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];
        $tiposComida = ['Desayuno', 'Comida', 'Cena', 'Snack'];

        $tabla = [];
        $totalCalorias = 0;
        $totalProteinas = 0;

        //se prepara una tabla que se llenará con las recetas
        foreach ($diasSemana as $dia) {
            foreach ($tiposComida as $tipo) {
                $tabla[$dia][$tipo] = null;
            }
        }

        //busca las recetas asociadas a ese menú
        $recetaMenus = RecetaMenu::where('id_menu', $menu->id_menu)->get();

        foreach ($recetaMenus as $relacion) { //para cada una de esas recetas
            $diaNombre = $diasSemana[$relacion->dia_semana - 1] ?? null; //-1 para posición array
            $tipoComida = $relacion->tipo_comida; //tipo_comida de esa receta 

            if ($diaNombre && in_array($tipoComida, $tiposComida)) { //verifica que existan
                //busca entre todas las recetas la que coincida con ese id de receta para ese menú
                $receta = $recetas->firstWhere('id_receta', $relacion->id_receta);
                if ($receta) {
                    $tabla[$diaNombre][$tipoComida] = [
                        'receta' => $receta,
                        'calorias' => $receta->total_calorias ?? 0,
                        'proteinas' => $receta->total_proteinas ?? 0,
                    ];

                    //suma los totales de las recetas a los del menú
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

    //actualiza menú personalizado
    public function update(Request $request, Menu $menu)
    {
        $user = Auth::user();

        //si menú no tien usuario o pertenece a otro usuario
        if ($menu->user_id === null || $menu->user_id !== $user->id) {
            //busca si el usuario tiene menú personal en esa categoría
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

        //si no le pertenece el menú, no lo puede editar
        if ($menu->user_id !== $user->id) {
            return redirect()->back()->with('error', 'No tienes permiso para actualizar este menú.');
        }

        //verifica que la request sea la tabla y que sea array
        $request->validate([
            'tabla' => 'required|array',
        ]);

        $tabla = $request->input('tabla'); //obtiene el input tabla de la request (menú personalizado a editar)
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
            //borra todas las recetas asociadas a ese menú
            RecetaMenu::where('id_menu', $menu->id_menu)->delete();

            foreach ($tabla as $dia => $comidas) {
                $diaNumero = $diaMap[$dia] ?? null; //convierte el nombre del día a número
                if (!$diaNumero) continue;

                $orden = 1; //inicializa orden

                //recorre los tipos de comida y sus recetas para ese día
                foreach ($comidas as $tipo => $id_receta) {
                    if ($id_receta) { //si ha seleccionado una receta
                        RecetaMenu::create([ //crea nueva relación con ese menú
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
