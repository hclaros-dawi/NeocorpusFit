<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias')->insert([

            //menús
            ['nombre' => 'Mediterráneo'],
            ['nombre' => 'Vegano'],
            ['nombre' => 'Clásico'],
            ['nombre' => 'Plan rápido'],
            ['nombre' => 'Alto en proteína'],

            //suplementos
            ['nombre' => 'Proteínas'],
            ['nombre' => 'Creatinas'],
            ['nombre' => 'Vitaminas y minerales'],
            ['nombre' => 'Pre-entrenos'],
            ['nombre' => 'Aminoácidos'],

            //canastas
            ['nombre' => 'Canasta mediterránea'],
            ['nombre' => 'Canasta vegana'],
            ['nombre' => 'Canasta de casa'],
            ['nombre' => 'Canasta express'],
            ['nombre' => 'Canasta proteica'],

            //recetas
            ['nombre' => 'Mediterránea'],
            ['nombre' => 'Vegana'],
            ['nombre' => 'Clásica'],
            ['nombre' => 'Express'],
            ['nombre' => 'Proteica'],
        ]);
    }
}
