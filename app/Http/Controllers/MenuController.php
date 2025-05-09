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
    
  
        $menus = Menu::with(['recetas' => function ($query) {
            
        }])->where('categoria_id', $categoria->id_categoria)->get();
    
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
         foreach ($numeroADia as $diaNumero => $nombreDia) {  
            foreach ($tiposComida as $tipo) {
                $tabla[$nombreDia][$tipo] = null;
            }
        }
    
        foreach ($menus as $menu) {
            foreach ($menu->recetas as $receta) {
                $diaNumero = $receta->pivot->dia_semana;
                $diaNombre = $numeroADia[(string)$diaNumero] ?? null;  
                
    
                $tipoComidaOriginal = $receta->pivot->tipo_comida;  
        
                 if ($diaNombre && in_array($tipoComidaOriginal, $tiposComida)) {
                     $tabla[$diaNombre][$tipoComidaOriginal] = [
                        'nombre' => $receta->nombre,
                        'enlace' => $receta->pivot->enlace_receta,
                        'calorias' => $menu->calorias, 
                        'proteinas' => $menu->proteinas,
                    ];
                }
            }
        }
    
        return view('pages.menus.show', compact('categoria', 'tabla'));
    }   
    
}

