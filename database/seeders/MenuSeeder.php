<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Categoria;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $mediterraneo = Categoria::where('nombre', 'Mediterráneo')->first();
        $vegano = Categoria::where('nombre', 'Vegano')->first();
        $clasico = Categoria::where('nombre', 'Clásico')->first();
        $express = Categoria::where('nombre', 'Plan rápido')->first();
        $proteico = Categoria::where('nombre', 'Alto en proteína')->first();

        Menu::create([
            'nombre' => 'Mediterráneo',
            'calorias' => 600,
            'proteinas' => 105,
            'categoria_id' => $mediterraneo->id_categoria,
        ]);

        Menu::create([
            'nombre' => 'Vegano',
            'calorias' => 1600,
            'proteinas' => 95,
            'categoria_id' => $vegano->id_categoria,
        ]);

        Menu::create([
            'nombre' => 'Clásico',
            'calorias' => 1800,
            'proteinas' => 100,
            'categoria_id' => $clasico->id_categoria,
        ]);

        Menu::create([
            'nombre' => 'Alto en proteína',
            'calorias' => 2000,
            'proteinas' => 130,
            'categoria_id' => $proteico->id_categoria,
        ]);

        Menu::create([
            'nombre' => 'Plan rápido',
            'calorias' => 1800,
            'proteinas' => 95,
            'categoria_id' => $express->id_categoria,
        ]);
    }
}