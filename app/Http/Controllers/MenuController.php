<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Categoria;

class MenuController extends Controller
{
    public function index()
    {
        $categoriasMenus = Categoria::whereBetween('id_categoria', [1, 5])->get();
        return view('pages.menus.index', compact('categoriasMenus'));
    }

    public function show($id_categoria)
    {
        $categoria = Categoria::find($id_categoria);

        if (!$categoria) {
            return redirect()->route('pages.menus.index')->with('error', 'Categoría no encontrada');
        }

        $menus = Menu::with([
            'recetas.ingredientes',
            'recetas.pasos'
        ])
            ->where('categoria_id', $categoria->id_categoria)
            ->whereNull('user_id')
            ->get();

        $menu = $menus->first();

        $numeroADia = [
            '1' => 'lunes',
            '2' => 'martes',
            '3' => 'miércoles',
            '4' => 'jueves',
            '5' => 'viernes',
            '6' => 'sábado',
            '7' => 'domingo',
        ];

        $tiposComida = ['Desayuno', 'Comida', 'Cena', 'Snack'];

        $tabla = [];
        $totalCalorias = 0;
        $totalProteinas = 0;

        foreach ($numeroADia as $diaNumero => $nombreDia) {
            foreach ($tiposComida as $tipo) {
                $tabla[$nombreDia][$tipo] = null;
            }
        }

        foreach ($menus as $menuItem) {
            foreach ($menuItem->recetas as $receta) {
                $diaNumero = $receta->pivot->dia_semana;
                $diaNombre = $numeroADia[(string)$diaNumero] ?? null;
                $tipoComidaOriginal = $receta->pivot->tipo_comida;

                if ($diaNombre && in_array($tipoComidaOriginal, $tiposComida)) {
                    $calorias = $receta->total_calorias ?? 0;
                    $proteinas = $receta->total_proteinas ?? 0;

                    $totalCalorias += $calorias;
                    $totalProteinas += $proteinas;

                    $tabla[$diaNombre][$tipoComidaOriginal] = [
                        'receta' => $receta,
                        'enlace' => $receta->pivot->enlace_receta,
                        'calorias' => $calorias,
                        'proteinas' => $proteinas,
                    ];
                }
            }
        }

        return view('pages.menus.show', compact('categoria', 'tabla', 'menus', 'menu', 'totalCalorias', 'totalProteinas'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Menu::create($data);

        return back()->with('success', 'Menú guardado correctamente.');
    }
}
