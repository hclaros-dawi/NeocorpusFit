<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Categoria;
use App\Models\Canasta;

class CanastaSeeder extends Seeder
{
    public function run(): void
    {
        $mediterraneoMenu = Menu::where('nombre', 'Mediterráneo')->first();
        $veganoMenu = Menu::where('nombre', 'Vegano')->first();
        $clasicoMenu = Menu::where('nombre', 'Clásico')->first();
        $expressMenu = Menu::where('nombre', 'Plan rápido')->first();
        $proteicoMenu = Menu::where('nombre', 'Alto en proteína')->first();

        $catMediterranea = Categoria::where('nombre', 'Canasta mediterránea')->first();
        $catVegana = Categoria::where('nombre', 'Canasta vegana')->first();
        $catClasica = Categoria::where('nombre', 'Canasta de casa')->first();
        $catExpress = Categoria::where('nombre', 'Canasta express')->first();
        $catProteica = Categoria::where('nombre', 'Canasta proteica')->first();

        Canasta::create([
            'nombre' => 'Canasta Mediterránea',
            'menu_id' => $mediterraneoMenu->id_menu,
            'categoria_id' => $catMediterranea->id_categoria
        ]);

        Canasta::create([
            'nombre' => 'Canasta Vegana',
            'menu_id' => $veganoMenu->id_menu,
            'categoria_id' => $catVegana->id_categoria
        ]);

        Canasta::create([
            'nombre' => 'Canasta de Casa',
            'menu_id' => $clasicoMenu->id_menu,
            'categoria_id' => $catClasica->id_categoria
        ]);

        Canasta::create([
            'nombre' => 'Canasta Express',
            'menu_id' => $expressMenu->id_menu,
            'categoria_id' => $catExpress->id_categoria
        ]);

        Canasta::create([
            'nombre' => 'Canasta Proteica',
            'menu_id' => $proteicoMenu->id_menu,
            'categoria_id' => $catProteica->id_categoria
        ]);
    }
}


