<?php

namespace App\Http\Controllers;

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
        $categoria = Categoria::find($id_categoria); //busca categoria según el id que le han pasado

        if (!$categoria) { 
            return redirect()->route('pages.menus.index')->with('error', 'Categoría no encontrada');
        }

        //trae los menú con sus recetas y estas con sus ingredientes y pasos
        $menus = Menu::with([
            'recetas.ingredientes',
            'recetas.pasos'
        ])
            ->where('categoria_id', $categoria->id_categoria) //para la esa categoria
            ->whereNull('user_id') //menús que no tengan usuario
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

        foreach ($numeroADia as $diaNumero => $nombreDia) { //su clave es diaNum y su valor es nombreDia
            foreach ($tiposComida as $tipo) {
                $tabla[$nombreDia][$tipo] = null; //se inicializa una tabla para cada tipo de comida y día
            }
        }

        foreach ($menus as $menuItem) { 
            foreach ($menuItem->recetas as $receta) { //para cada menú se obtiene su receta 
                $diaNumero = $receta->pivot->dia_semana; //de cada receta se obtiene su dia
                $diaNombre = $numeroADia[(string)$diaNumero] ?? null; //se obtiene día semana y lo convierte a nombre
                $tipoComidaOriginal = $receta->pivot->tipo_comida; 

                if ($diaNombre && in_array($tipoComidaOriginal, $tiposComida)) { //verifica si existen
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
}
