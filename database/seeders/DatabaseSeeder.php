<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategoriaSeeder::class,
            IngredienteSeeder::class,
            SuplementoSeeder::class,
            RecetaSeeder::class,
            MenuSeeder::class,
            CanastaSeeder::class,
            RecetaIngredienteSeeder::class,
            RecetaMenuSeeder::class,
            CanastaIngredienteSeeder::class,
            PasoRecetaSeeder::class,
         ]);
    }
}
