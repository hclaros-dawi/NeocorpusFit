<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VeganoMenuSeeder extends Seeder
{
    public function run(): void
    {
        $menuId = DB::table('menus')->where('nombre', 'Vegano')->value('id_menu');

        if (!$menuId) {
            $this->command->warn('El menú "Vegano" no fue encontrado.');
            return;
        }

        DB::table('receta_menu')->where('id_menu', $menuId)->delete();

        $recetas = DB::table('recetas')->pluck('id_receta', 'nombre');

        $data = [
            'desayuno' => [
                'Lunes' => ['Avena cocida con leche vegetal y frutas'],
                'Martes' => ['Tostadas integrales'],
                'Miércoles' => ['Smoothie de plátano y frutos rojos'],
                'Jueves' => ['Yogur vegetal con granola'],
                'Viernes' => ['Pudding de chía con leche vegetal'],
                'Sábado' => ['Panqueques veganos'],
                'Domingo' => ['Batido de proteína vegana'],
            ],
            'comida' => [
                'Lunes' => ['Curry de garbanzos'],
                'Martes' => ['Tofu con arroz y brócoli'],
                'Miércoles' => ['Chili vegano'],
                'Jueves' => ['Buda bowl'],
                'Viernes' => ['Lasaña de vegetales'],
                'Sábado' => ['Guiso de lentejas'],
                'Domingo' => ['Lentejas con arroz'],
            ],
            'cena' => [
                'Lunes' => ['Ensalada de quinoa con vegetales asados'],
                'Martes' => ['Hamburguesas veganas caseras'],
                'Miércoles' => ['Salteado de tofu y vegetales'],
                'Jueves' => ['Sopa de calabaza'],
                'Viernes' => ['Wraps de lechuga con garbanzos'],
                'Sábado' => ['Tarta de verduras'],
                'Domingo' => ['Pasta integral con pesto de albahaca y nueces'],
            ],
            'snack' => [
                'Lunes' => ['Hummus con zanahorias'],
                'Martes' => ['Frutas variadas'],
                'Miércoles' => ['Barritas de cereal veganas'],
                'Jueves' => ['Fruta + Almendras'],
                'Viernes' => ['Chips de garbanzo'],
                'Sábado' => ['Galletas veganas'],
                'Domingo' => ['Chocolate amargo'],
            ],
        ];

        $diaMap = [
            'Lunes' => 1,
            'Martes' => 2,
            'Miércoles' => 3,
            'Jueves' => 4,
            'Viernes' => 5,
            'Sábado' => 6,
            'Domingo' => 7,
        ];

        foreach ($data as $tipoComida => $dias) {
            foreach ($dias as $diaNombre => $recetasDelDia) {
                $diaSemana = $diaMap[$diaNombre] ?? null;
                if (!$diaSemana) continue;

                foreach ($recetasDelDia as $orden => $recetaNombre) {
                    $recetaId = $recetas[$recetaNombre] ?? null;
                    if (!$recetaId) {
                        $this->command->warn("Receta '$recetaNombre' no encontrada.");
                        continue;
                    }

                    DB::table('receta_menu')->insert([
                        'id_menu' => $menuId,
                        'id_receta' => $recetaId,
                        'orden' => $orden + 1,
                        'dia_semana' => $diaSemana,
                        'tipo_comida' => ucfirst($tipoComida),
                        'enlace_receta' => null,
                    ]);
                }
            }
        }

        $this->command->info('Recetas del menú Vegano se han reinicializado correctamente.');
    }
}
