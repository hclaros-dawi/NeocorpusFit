<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetaMenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = DB::table('menus')->pluck('id_menu', 'nombre');
        $recetas = DB::table('recetas')->pluck('id_receta', 'nombre');

        $data = [
            'Mediterráneo' => [
                'desayuno' => [
                    'Lunes' => ['Avena con frutos'],
                    'Martes' => ['Yogur con nueces'],
                    'Miércoles' => ['Pan integral con aceite de oliva'],
                    'Jueves' => ['Yogur natural con chía'],
                    'Viernes' => ['Smoothie de frutas'],
                    'Sábado' => ['Avena y semillas'],
                    'Domingo' => ['Tostadas integrales'],
                ],
                'comida' => [
                    'Lunes' => ['Salmón con quinoa'],
                    'Martes' => ['Pasta integral con verduras'],
                    'Miércoles' => ['Pollo al limón'],
                    'Jueves' => ['Pollo asado con batatas'],
                    'Viernes' => ['Verduras grilladas'],
                    'Sábado' => ['Pasta con pesto'],
                    'Domingo' => ['Arroz integral con verduras'],
                ],
                'cena' => [
                    'Lunes' => ['Lentejas mediterráneas'],
                    'Martes' => ['Pescado al horno con papas'],
                    'Miércoles' => ['Pollo con ensalada de rúcula'],
                    'Jueves' => ['Omelette con espinacas'],
                    'Viernes' => ['Sopa de lentejas'],
                    'Sábado' => ['Ensalada de garbanzos'],
                    'Domingo' => ['Tortilla de espinaca y queso feta'],
                ],
                'snack' => [
                    'Lunes' => ['Fruta + Almendras'],
                    'Martes' => ['Queso bajo en grasa'],
                    'Miércoles' => ['Hummus con zanahorias'],
                    'Jueves' => ['Yogur griego con miel'],
                    'Viernes' => ['Pan de centeno con aguacate'],
                    'Sábado' => ['Frutas variadas'],
                    'Domingo' => ['Ensalada griega'],
                ],    
            ],

            'Vegano' => [
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
            ],

            'Clásico' => [
                'desayuno' => [
                    'Lunes' => ['Tostadas con mermelada'],
                    'Martes' => ['Yogur con cereal'],
                    'Miércoles' => ['Pan con manteca y café'],
                    'Jueves' => ['Huevos revueltos con pan'],
                    'Viernes' => ['Yogur bebible'],
                    'Sábado' => ['Avena cocida con canela'],
                    'Domingo' => ['Mate con galletas'],
                ],
                'comida' => [
                    'Lunes' => ['Milanesas al horno'],
                    'Martes' => ['Guiso de lentejas'],
                    'Miércoles' => ['Pastel de papas'],
                    'Jueves' => ['Arroz con pollo'],
                    'Viernes' => ['Fideos con salsa roja'],
                    'Sábado' => ['Bife con papas'],
                    'Domingo' => ['Asado con ensalada'],
                ],
                'cena' => [
                    'Lunes' => ['Tarta de verduras'],
                    'Martes' => ['Ensalada césar'],
                    'Miércoles' => ['Empanadas de carne'],
                    'Jueves' => ['Empanadas de verdura'],
                    'Viernes' => ['Panqueques caseros'],
                    'Sábado' => ['Helado casero'],
                    'Domingo' => ['Alfajor casero'],
                ],
                'snack' => [
                    'Lunes' => ['Pan con queso'],
                    'Martes' => ['Galletas de arroz'],
                    'Miércoles' => ['Mate con galletas'],
                    'Jueves' => ['Yogur bebible'],
                    'Viernes' => ['Helado casero'],
                    'Sábado' => ['Alfajor casero'],
                    'Domingo' => ['Panqueques caseros'],
                ], 
            ],

            'Alto en proteína' => [
                'desayuno' => [
                    'Lunes' => ['Avena con clara de huevo'],
                    'Martes' => ['Omelette + batido proteico'],
                    'Miércoles' => ['Yogur griego + almendras'],
                    'Jueves' => ['Queso cottage + fruta'],
                    'Viernes' => ['Pan integral + claras revueltas'],
                    'Sábado' => ['Muffin de avena y claras'],
                    'Domingo' => ['Yogur proteico'],
                ],
                'comida' => [
                    'Lunes' => ['Pollo con arroz integral'],
                    'Martes' => ['Tacos de pavo'],
                    'Miércoles' => ['Pasta con atún'],
                    'Jueves' => ['Bife magro con verduras'],
                    'Viernes' => ['Ensalada proteica'],
                    'Sábado' => ['Pollo grillado con quinoa'],
                    'Domingo' => ['Pasta con carne molida'],
                ],
                'cena' => [
                    'Lunes' => ['Salmón con verduras'],
                    'Martes' => ['Tofu salteado + quinoa'],
                    'Miércoles' => ['Lentejas con huevo cocido'],
                    'Jueves' => ['Pescado blanco con puré'],
                    'Viernes' => ['Hamburguesa de pavo'],
                    'Sábado' => ['Ensalada de legumbres'],
                    'Domingo' => ['Tortilla con jamón y queso'],
                ],
                'snack' => [
                    'Lunes' => ['Smoothie con proteína'],
                    'Martes' => ['Huevo duro + nueces'],
                    'Miércoles' => ['Tostadas + mantequilla de maní'],
                    'Jueves' => ['Barra proteica'],
                    'Viernes' => ['Batido + banana'],
                    'Sábado' => ['Hummus + tostadas'],
                    'Domingo' => ['Bife con papas'],
                ], 
            ],

            'Plan rápido' => [
                'desayuno' => [
                    'Lunes' => ['Avena instantánea'],
                    'Martes' => ['Yogur con granola'],
                    'Miércoles' => ['Smoothie de banana'],
                    'Jueves' => ['Muffin y café'],
                    'Viernes' => ['Galletas integrales'],
                    'Sábado' => ['Yogur bebible'],
                    'Domingo' => ['Omelette de microondas'],
                ],
                'comida' => [
                    'Lunes' => ['Wrap de atún'],
                    'Martes' => ['Sándwich de pollo'],
                    'Miércoles' => ['Ensalada de atún'],
                    'Jueves' => ['Hamburguesa vegetariana'],
                    'Viernes' => ['Arroz con verduras'],
                    'Sábado' => ['Wrap de jamón y queso'],
                    'Domingo' => ['Ensalada de pasta fría'],
                ],
                'cena' => [
                    'Lunes' => ['Pollo grillado con ensalada'],
                    'Martes' => ['Lentejas con arroz'],
                    'Miércoles' => ['Ensalada de huevo'],
                    'Jueves' => ['Pollo al horno y batatas'],
                    'Viernes' => ['Omelette con queso'],
                    'Sábado' => ['Sopa express + tostadas'],
                    'Domingo' => ['Sandwich integral'],
                ],
                'snack' => [
                    'Lunes' => ['Barrita de cereal'],
                    'Martes' => ['Pan con mantequilla de maní'],
                    'Miércoles' => ['Fruta picada'],
                    'Jueves' => ['Mix de frutos secos'],
                    'Viernes' => ['Gelatina light'],
                    'Sábado' => ['Helado de yogur'],
                    'Domingo' => ['Tostadas con aguacate'],
                ], 
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

        foreach ($data as $menuNombre => $tiposComida) {
            $menuId = $menus[$menuNombre] ?? null;
            if (!$menuId) continue;  // Si no se encuentra el menú, continuar con el siguiente

            foreach ($tiposComida as $tipoComida => $dias) {
                foreach ($dias as $diaNombre => $recetasDelDia) {
                    $diaSemana = $diaMap[$diaNombre] ?? null;
                    if (!$diaSemana) continue; // Si no se encuentra el día, continuar con el siguiente

                     foreach ($recetasDelDia as $orden => $recetaNombre) {
                        $recetaId = $recetas[$recetaNombre] ?? null;
                        if (!$recetaId) continue; // Si no se encuentra la receta, continuar con la siguiente

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
        }
    }
}
