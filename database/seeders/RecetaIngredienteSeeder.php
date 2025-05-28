<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetaIngredienteSeeder extends Seeder
{

    public function run(): void
    {
        $recetas = DB::table('recetas')->pluck('id_receta', 'nombre');
        $ingredientes = DB::table('ingredientes')->pluck('id_ingrediente', 'nombre');

        $data = [
            //::::::::::::::MEDITERRÁNEO
            //*******DESAYUNO*********/
            //1. Avena con frutos
            'Avena con frutos' => [
                ['nombre' => 'Avena', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 1, 'unidad_medida' => 'g'],
                ['nombre' => 'Frutos rojos', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //2. Yogur con nueces
            'Yogur con nueces' => [
                ['nombre' => 'Yogur natural', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Nueces', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //3. Pan integral con aceite de oliva
            'Pan integral con aceite de oliva' => [
                ['nombre' => 'Pan integral', 'cantidad' => 2, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceite de oliva', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],
            //4. Yogur natural con chía
            'Yogur natural con chía' => [
                ['nombre' => 'Yogur natural', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Chía', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],
            //5. Smoothie de frutas
            'Smoothie de frutas' => [
                ['nombre' => 'Banana', 'cantidad' => 1, 'unidad_medida' => 'g'],
                ['nombre' => 'Frutos rojos', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 150, 'unidad_medida' => 'g'],
            ],
            //6. Avena y semillas
            'Avena y semillas' => [
                ['nombre' => 'Avena', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Chía', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],
            //7. Tostadas integrales
            'Tostadas integrales' => [
                ['nombre' => 'Pan integral', 'cantidad' => 2, 'unidad_medida' => 'g'],
                ['nombre' => 'Aguacate', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],

            //*******COMIDA*********/
            //1. Salmón con quinoa
            'Salmón con quinoa' => [
                ['nombre' => 'Filete de salmón', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Quinoa', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Limón', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 5, 'unidad_medida' => 'g'],
            ],
            //2. Pasta integral con verduras
            'Pasta integral con verduras' => [
                ['nombre' => 'Pasta integral', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Zucchini', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Pimientos', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 5, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceite de oliva', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //3. Pollo al limón
            'Pollo al limón' => [
                ['nombre' => 'Pollo', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Limón', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Orégano', 'cantidad' => 2, 'unidad_medida' => 'g'],
            ],
            //4. Pollo asado con batatas
            'Pollo asado con batatas' => [
                ['nombre' => 'Pollo', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Batata', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 5, 'unidad_medida' => 'g'],
                ['nombre' => 'Orégano', 'cantidad' => 2, 'unidad_medida' => 'g'],
            ],
            //5. Verduras grilladas
            'Verduras grilladas' => [
                ['nombre' => 'Berenjena', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Zucchini', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Pimientos', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //6. Pasta con pesto
            'Pasta con pesto' => [
                ['nombre' => 'Pasta integral', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Albahaca', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceite de oliva', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Piñones', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Queso parmesano', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],
            //7. Arroz integral con verduras
            'Arroz integral con verduras' => [
                ['nombre' => 'Arroz integral', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Vegetales mixtos', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],

            //*******CENA*********/
            //1. Lentejas mediterráneas
            'Lentejas mediterráneas' => [
                ['nombre' => 'Lentejas cocidas', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Laurel', 'cantidad' => 1, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 5, 'unidad_medida' => 'g'],
            ],
            //2. Pescado al horno con papas
            'Pescado al horno con papas' => [
                ['nombre' => 'Pescado', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Papa', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 5, 'unidad_medida' => 'g'],
            ],
            //3. Pollo con ensalada de rúcula 
            'Pollo con ensalada de rúcula' => [
                ['nombre' => 'Pollo', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Rúcula', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceite de oliva', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //4. Omelette con espinacas
            'Omelette con espinacas' => [
                ['nombre' => 'Huevo', 'cantidad' => 120, 'unidad_medida' => 'g'],
                ['nombre' => 'Espinaca', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //5. Sopa de lentejas
            'Sopa de lentejas' => [
                ['nombre' => 'Lentejas cocidas', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 5, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //6. Ensalada de garbanzos
            'Ensalada de garbanzos' => [
                ['nombre' => 'Garbanzos', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Pepino', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //7. Tortilla de espinaca y queso feta
            'Tortilla de espinaca y queso feta' => [
                ['nombre' => 'Huevo', 'cantidad' => 120, 'unidad_medida' => 'g'],
                ['nombre' => 'Espinaca', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Queso feta', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceite de oliva', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],

            //*******SNACK*********/
            //1. Fruta + Almendras
            'Fruta + Almendras' => [
                ['nombre' => 'Manzana', 'cantidad' => 1, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 1, 'unidad_medida' => 'g'],
                ['nombre' => 'Almendras', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //2. Queso bajo en grasa
            'Queso bajo en grasa' => [
                ['nombre' => 'Queso bajo en grasa', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceitunas negras', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],
            //3. Hummus con zanahorias
            'Hummus con zanahorias' => [
                ['nombre' => 'Hummus', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Zanahoria', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //4. Yogur griego con miel
            'Yogur griego con miel' => [
                ['nombre' => 'Yogur griego', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Miel', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],
            //5. Pan de centeno con aguacate
            'Pan de centeno con aguacate' => [
                ['nombre' => 'Pan de centeno', 'cantidad' => 1, 'unidad_medida' => 'g'],
                ['nombre' => 'Aguacate', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //6. Frutas variadas
            'Frutas variadas' => [
                ['nombre' => 'Banana', 'cantidad' => 1, 'unidad_medida' => 'g'],
                ['nombre' => 'Frutos rojos', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Manzana', 'cantidad' => 1, 'unidad_medida' => 'g'],
                ['nombre' => 'Naranja', 'cantidad' => 1, 'unidad_medida' => 'g'],
                ['nombre' => 'Mango', 'cantidad' => 1, 'unidad_medida' => 'g'],
            ],
            // 7. Ensalada griega
            'Ensalada griega' => [
                ['nombre' => 'Pepino', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceitunas negras', 'cantidad' => 20, 'unidad_medida' => 'g'],
                ['nombre' => 'Queso feta', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceite de oliva', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Orégano', 'cantidad' => 2, 'unidad_medida' => 'g'],
            ],

            //::::::::::::::VEGANO
            //*******DESAYUNO*********/
            //1. Avena cocida con leche vegetal y frutas 
            'Avena cocida con leche vegetal y frutas' => [
                ['nombre' => 'Avena', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Frutos rojos', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //2. Tostadas integrales
            'Tostadas integrales' => [
                ['nombre' => 'Pan integral', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Aguacate', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //3. Smoothie de plátano y frutos rojos
            'Smoothie de plátano y frutos rojos' => [
                ['nombre' => 'Banana', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Frutos rojos', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
            ],
            //4. Yogur vegetal con granola
            'Yogur vegetal con granola' => [
                ['nombre' => 'Yogur vegetal', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Granola', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //5. Pudding de chía con leche vegetal
            'Pudding de chía con leche vegetal' => [
                ['nombre' => 'Chía', 'cantidad' => 15, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
            ],
            //6. Panqueques veganos
            'Panqueques veganos' => [
                ['nombre' => 'Harina integral', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //7. Batido de proteína vegana
            'Batido de proteína vegana' => [
                ['nombre' => 'Proteína en polvo', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Mantequilla de maní', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],

            //*******COMIDA*********/
            //1. Curry de garbanzos
            'Curry de garbanzos' => [
                ['nombre' => 'Garbanzos', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Curry en polvo', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche de coco', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],
            //2. Tofu con arroz y brócoli
            'Tofu con arroz y brócoli' => [
                ['nombre' => 'Tofu', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Brócoli', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Arroz integral', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //3. Chili vegano
            'Chili vegano' => [
                ['nombre' => 'Cebolla', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Frijoles negros', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Pimientos', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //4. Buda bowl
            'Buda bowl' => [
                ['nombre' => 'Aguacate', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Garbanzos', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Quinoa', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Hummus', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //5. Lasaña de vegetales
            'Lasaña de vegetales' => [
                ['nombre' => 'Zucchini', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Berenjena', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Láminas de lasaña', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Bechamel vegana', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //6. Guiso de lentejas
            'Guiso de lentejas' => [
                ['nombre' => 'Lentejas cocidas', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Papa', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Zanahoria', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Pimentón', 'cantidad' => 5, 'unidad_medida' => 'g'],
            ],
            //7.Lentejas con arroz
            'Lentejas con arroz' => [
                ['nombre' => 'Lentejas cocidas', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Arroz blanco', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],

            //*******CENA*********/
            //1. Ensalada de quinoa con vegetales asados
            'Ensalada de quinoa con vegetales asados' => [
                ['nombre' => 'Quinoa', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Zucchini', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Berenjena', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Pimientos', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceite de oliva', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],
            //2. Hamburguesas veganas caseras
            'Hamburguesas veganas caseras' => [
                ['nombre' => 'Lentejas cocidas', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Avena', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Zanahoria', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 5, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //3. Salteado de tofu y vegetales
            'Salteado de tofu y vegetales' => [
                ['nombre' => 'Tofu', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Brócoli', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Zanahoria', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Salsa de soja', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 5, 'unidad_medida' => 'g'],
            ],
            //4. Sopa de calabaza
            'Sopa de calabaza' => [
                ['nombre' => 'Calabaza', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 5, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //5. Wraps de lechuga con garbanzos
            'Wraps de lechuga con garbanzos' => [
                ['nombre' => 'Lechuga', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Garbanzos', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Zanahoria', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Tahini', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //6. Tarta de verduras
            'Tarta de verduras' => [
                ['nombre' => 'Espinaca', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Zanahoria', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Masa para tarta', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //7. Pasta integral con pesto de albahaca y nueces
            'Pasta integral con pesto de albahaca y nueces' => [
                ['nombre' => 'Pasta integral', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Albahaca', 'cantidad' => 5, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceite de oliva', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Nueces', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],

            //*******SNACK*********/
            //1. Hummus con zanahorias
            'Hummus con zanahorias' => [
                ['nombre' => 'Hummus', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Zanahoria', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //2. Frutas variadas
            'Frutas variadas' => [
                ['nombre' => 'Banana', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Frutos rojos', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Manzana', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Naranja', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Mango', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //3. Barritas de cereal veganas
            'Barritas de cereal veganas' => [
                ['nombre' => 'Avena', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Dátiles', 'cantidad' => 20, 'unidad_medida' => 'g'],
                ['nombre' => 'Mantequilla de maní', 'cantidad' => 20, 'unidad_medida' => 'g'],
                ['nombre' => 'Semillas', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //4. Fruta + Almendras
            'Fruta + Almendras' => [
                ['nombre' => 'Manzana', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Almendras', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //5. Chips de garbanzo
            'Chips de garbanzo' => [
                ['nombre' => 'Garbanzos', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Aceite de oliva', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Pimentón', 'cantidad' => 5, 'unidad_medida' => 'g'],
            ],
            //6. Galletas veganas
            'Galletas veganas' => [
                ['nombre' => 'Harina integral', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //7. Chocolate amargo
            'Chocolate amargo' => [
                ['nombre' => 'Chocolate amargo', 'cantidad' => 20, 'unidad_medida' => 'g']
            ],

            //::::::::::::::CLÁSICO
            //*******DESAYUNO*********/
            //1. Tostadas con mermelada
            'Tostadas con mermelada' => [
                ['nombre' => 'Pan integral', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Mermelada', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //2. Yogur con cereal
            'Yogur con cereal' => [
                ['nombre' => 'Yogur natural', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Cereal', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //3. Pan con manteca y café
            'Pan con manteca y café' => [
                ['nombre' => 'Pan integral', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Manteca', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Café', 'cantidad' => 200, 'unidad_medida' => 'g'],
            ],
            //4. Huevos revueltos con pan
            'Huevos revueltos con pan' => [
                ['nombre' => 'Pan integral', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
            ],
            //5. Yogur bebible
            'Yogur bebible' => [
                ['nombre' => 'Yogur bebible', 'cantidad' => 200, 'unidad_medida' => 'g'],
            ],
            //6. Avena cocida con canela
            'Avena cocida con canela' => [
                ['nombre' => 'Avena', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Canela', 'cantidad' => 2, 'unidad_medida' => 'g'],
            ],
            //7. Mate con galletas
            'Mate con galletas' => [
                ['nombre' => 'Yerba mate', 'cantidad' => 20, 'unidad_medida' => 'g'],
                ['nombre' => 'Galletas dulces', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],

            //*******COMIDA*********/
            //1. Milanesas al horno
            'Milanesas al horno' => [
                ['nombre' => 'Carne para milanesa', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Pan rallado', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //2. Guiso de lentejas
            'Guiso de lentejas' => [
                ['nombre' => 'Lentejas cocidas', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Papa', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Zanahoria', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Pimentón', 'cantidad' => 5, 'unidad_medida' => 'g'],
            ],
            //3. Pastel de papas
            'Pastel de papas' => [
                ['nombre' => 'Carne picada', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Puré de papas', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //4. Arroz con pollo
            'Arroz con pollo' => [
                ['nombre' => 'Pollo', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Arroz blanco', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Pimientos', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //5. Fideos con salsa roja
            'Fideos con salsa roja' => [
                ['nombre' => 'Pasta', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Ajo', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //6. Bife con papas
            'Bife con papas' => [
                ['nombre' => 'Bife magro', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Papa', 'cantidad' => 150, 'unidad_medida' => 'g'],
            ],
            //7. Asado con ensalada
            'Asado con ensalada' => [
                ['nombre' => 'Carne para asado', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Vegetales mixtos', 'cantidad' => 150, 'unidad_medida' => 'g'],
            ],

            //*******CENA*********/
            //1. Tarta de verduras
            'Tarta de verduras' => [
                ['nombre' => 'Espinaca', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Zanahoria', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Masa para tarta', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //2. Ensalada césar
            'Ensalada césar' => [
                ['nombre' => 'Lechuga', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Pechuga de pollo', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Crutones', 'cantidad' => 20, 'unidad_medida' => 'g'],
                ['nombre' => 'Salsa César', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //3. Empanadas de carne
            'Empanadas de carne' => [
                ['nombre' => 'Masa para empanadas', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Carne picada', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //4. Empanadas de verdura
            'Empanadas de verdura' => [
                ['nombre' => 'Masa para empanadas', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Espinaca', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //5. Panqueques caseros
            'Panqueques caseros' => [
                ['nombre' => 'Harina', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Dulce de leche', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //6. Helado casero
            'Helado casero' => [
                ['nombre' => 'Frutas congeladas', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Yogur natural', 'cantidad' => 150, 'unidad_medida' => 'g'],
            ],
            //7. Alfajor casero
            'Alfajor casero' => [
                ['nombre' => 'Harina', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Dulce de leche', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Coco rallado', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],

            //*******SNACK*********/
            //1. Pan con queso
            'Pan con queso' => [
                ['nombre' => 'Pan integral', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Queso bajo en grasa', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //2. Galletas de arroz
            'Galletas de arroz' => [
                ['nombre' => 'Galletas de arroz', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //3. Mate con galletas
            'Mate con galletas' => [
                ['nombre' => 'Yerba mate', 'cantidad' => 20, 'unidad_medida' => 'g'],
                ['nombre' => 'Galletas dulces', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //4. Yogur bebible
            'Yogur bebible' => [
                ['nombre' => 'Yogur bebible', 'cantidad' => 200, 'unidad_medida' => 'g'],
            ],
            //5. Helado casero
            'Helado casero' => [
                ['nombre' => 'Frutas congeladas', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Yogur natural', 'cantidad' => 150, 'unidad_medida' => 'g'],
            ],
            //6. Alfajor casero
            'Alfajor casero' => [
                ['nombre' => 'Harina', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 55, 'unidad_medida' => 'g'],
                ['nombre' => 'Dulce de leche', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Coco rallado', 'cantidad' => 15, 'unidad_medida' => 'g'],
            ],
            //7. Panqueques caseros
            'Panqueques caseros' => [
                ['nombre' => 'Harina', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Dulce de leche', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],

            //::::::::::::::ALTO EN PROTEÍNAS
            //*******DESAYUNO*********/
            //1. Avena con clara de huevo
            'Avena con clara de huevo' => [
                ['nombre' => 'Avena', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
            ],
            //2. Omelette + batido proteico
            'Omelette + batido proteico' => [
                ['nombre' => 'Huevo', 'cantidad' => 120, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Proteína en polvo', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //3. Yogur griego + almendras
            'Yogur griego + almendras' => [
                ['nombre' => 'Yogur griego', 'cantidad' => 170, 'unidad_medida' => 'g'],
                ['nombre' => 'Almendras', 'cantidad' => 15, 'unidad_medida' => 'g'],
            ],
            //4. Queso cottage + fruta
            'Queso cottage + fruta' => [
                ['nombre' => 'Queso cottage', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Mango', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Manzana', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //5. Pan integral + claras revueltas
            'Pan integral + claras revueltas' => [
                ['nombre' => 'Pan integral', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 120, 'unidad_medida' => 'g'],
            ],
            //6. Muffin de avena y claras
            'Muffin de avena y claras' => [
                ['nombre' => 'Avena', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 120, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //7. Yogur proteico
            'Yogur proteico' => [
                ['nombre' => 'Yogur proteico', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Cereal', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Mango', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Manzana', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //*******COMIDA*********/
            //1. Pollo con arroz integral
            'Pollo con arroz integral' => [
                ['nombre' => 'Ajo', 'cantidad' => 5, 'unidad_medida' => 'g'],
                ['nombre' => 'Arroz integral', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Pollo', 'cantidad' => 150, 'unidad_medida' => 'g'],
            ],
            //2. Tacos de pavo
            'Tacos de pavo' => [
                ['nombre' => 'Carne molida de pavo', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Tortilla de maíz', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Lechuga', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Aguacate', 'cantidad' => 40, 'unidad_medida' => 'g'],
            ],
            //3. Pasta con atún
            'Pasta con atún' => [
                ['nombre' => 'Pasta integral', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Atún enlatado', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Vegetales mixtos', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //4. Bife magro con verduras
            'Bife magro con verduras' => [
                ['nombre' => 'Bife magro', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Vegetales mixtos', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //5. Ensalada proteica
            'Ensalada proteica' => [
                ['nombre' => 'Huevo', 'cantidad' => 120, 'unidad_medida' => 'g'],
                ['nombre' => 'Garbanzos', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Lechuga', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //6. Pollo grillado con quinoa
            'Pollo grillado con quinoa' => [
                ['nombre' => 'Pechuga de pollo', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Quinoa', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //7. Pasta con carne molida
            'Pasta con carne molida' => [
                ['nombre' => 'Pasta integral', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Carne molida de pavo', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Salsa de tomate', 'cantidad' => 60, 'unidad_medida' => 'g'],
            ],

            //*******CENA*********/
            //1. Salmón con verduras
            'Salmón con verduras' => [
                ['nombre' => 'Filete de salmón', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Limón', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Brócoli', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Calabaza', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //2. Tofu salteado + quinoa
            'Tofu salteado + quinoa' => [
                ['nombre' => 'Tofu', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Quinoa', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Vegetales mixtos', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Salsa de soja', 'cantidad' => 15, 'unidad_medida' => 'g'],
            ],
            //3. Lentejas con huevo cocido
            'Lentejas con huevo cocido' => [
                ['nombre' => 'Lentejas cocidas', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
            ],
            //4. Pescado blanco con puré
            'Pescado blanco con puré' => [
                ['nombre' => 'Pescado', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Puré de papas', 'cantidad' => 150, 'unidad_medida' => 'g'],
            ],
            //5. Hamburguesa de pavo
            'Hamburguesa de pavo' => [
                ['nombre' => 'Carne molida de pavo', 'cantidad' => 120, 'unidad_medida' => 'g'],
                ['nombre' => 'Vegetales mixtos', 'cantidad' => 80, 'unidad_medida' => 'g'],
            ],
            //6. Ensalada de legumbres
            'Ensalada de legumbres' => [
                ['nombre' => 'Garbanzos', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Lentejas cocidas', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //7. Tortilla con jamón y queso
            'Tortilla con jamón y queso' => [
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Jamón', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Queso bajo en grasa', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],

            //*******SNACK*********/
            //1. Smoothie con proteína
            'Smoothie con proteína' => [
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Proteína en polvo', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Semillas', 'cantidad' => 10, 'unidad_medida' => 'g'],
            ],
            //2. Huevo duro + nueces
            'Huevo duro + nueces' => [
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Nueces', 'cantidad' => 15, 'unidad_medida' => 'g'],
            ],
            //3. Tostadas + mantequilla de maní
            'Tostadas + mantequilla de maní' => [
                ['nombre' => 'Pan integral', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Mantequilla de maní', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //4. Barra proteica
            'Barra proteica' => [
                ['nombre' => 'Avena', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Proteína en polvo', 'cantidad' => 25, 'unidad_medida' => 'g'],
                ['nombre' => 'Mantequilla de maní', 'cantidad' => 15, 'unidad_medida' => 'g'],
                ['nombre' => 'Dátiles', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //5. Batido + banana
            'Batido + banana' => [
                ['nombre' => 'Proteína en polvo', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //6. Hummus + tostadas
            'Hummus + tostadas' => [
                ['nombre' => 'Pan integral', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Hummus', 'cantidad' => 40, 'unidad_medida' => 'g'],
            ],
            //7. Bife con papas
            'Bife con papas' => [
                ['nombre' => 'Bife magro', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Papa', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],

            //::::::::::::::EXPRESS
            //*******DESAYUNO*********/
            //1. Avena instantánea
            'Avena instantánea' => [
                ['nombre' => 'Avena', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
            ],
            //2. Yogur con granola
            'Yogur con granola' => [
                ['nombre' => 'Yogur natural', 'cantidad' => 150, 'unidad_medida' => 'g'],
                ['nombre' => 'Granola', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //3. Smoothie de banana
            'Smoothie de banana' => [
                ['nombre' => 'Leche', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //4. Muffin y café
            'Muffin y café' => [
                ['nombre' => 'Muffins', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Café', 'cantidad' => 200, 'unidad_medida' => 'g'],
            ],
            //5. Galletas integrales
            'Galletas integrales' => [
                ['nombre' => 'Galletas integrales', 'cantidad' => 40, 'unidad_medida' => 'g'],
            ],
            //6. Yogur bebible
            'Yogur bebible' => [
                ['nombre' => 'Yogur bebible', 'cantidad' => 130, 'unidad_medida' => 'g'],
            ],
            //7. Omelette de microondas
            'Omelette de microondas' => [
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
            ],
            //*******COMIDA*********/
            //1. Wrap de atún
            'Wrap de atún' => [
                ['nombre' => 'Atún enlatado', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Zanahoria', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Aguacate', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Tortilla de maíz', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //2. Sándwich de pollo
            'Sándwich de pollo' => [
                ['nombre' => 'Pan integral', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Pollo', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Lechuga', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //3. Ensalada de atún
            'Ensalada de atún' => [
                ['nombre' => 'Atún enlatado', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Cebolla', 'cantidad' => 20, 'unidad_medida' => 'g'],
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
            ],
            //4. Hamburguesa vegetariana
            'Hamburguesa vegetariana' => [
                ['nombre' => 'Hamburguesas vegetarianas', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Pan integral', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Vegetales mixtos', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //5. Arroz con verduras
            'Arroz con verduras' => [
                ['nombre' => 'Arroz blanco', 'cantidad' => 120, 'unidad_medida' => 'g'],
                ['nombre' => 'Vegetales mixtos', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //6. Wrap de jamón y queso
            'Wrap de jamón y queso' => [
                ['nombre' => 'Tortilla de maíz', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Jamón', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Queso bajo en grasa', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //7. Ensalada de pasta fría
            'Ensalada de pasta fría' => [
                ['nombre' => 'Pasta', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Vegetales mixtos', 'cantidad' => 80, 'unidad_medida' => 'g'],
            ],

            //*******CENA*********/
            //1. Pollo grillado con ensalada
            'Pollo grillado con ensalada' => [
                ['nombre' => 'Pechuga de pollo', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 40, 'unidad_medida' => 'g'],
                ['nombre' => 'Lechuga', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //2. Lentejas con arroz
            'Lentejas con arroz' => [
                ['nombre' => 'Lentejas cocidas', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Arroz blanco', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //3. Ensalada de huevo
            'Ensalada de huevo' => [
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Mayonesa', 'cantidad' => 10, 'unidad_medida' => 'g'],
                ['nombre' => 'Perejil', 'cantidad' => 5, 'unidad_medida' => 'g'],
            ],
            //4. Pollo al horno y batatas
            'Pollo al horno y batatas' => [
                ['nombre' => 'Pollo', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Batata', 'cantidad' => 150, 'unidad_medida' => 'g'],
            ],
            //5. Omelette con queso
            'Omelette con queso' => [
                ['nombre' => 'Huevo', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Queso bajo en grasa', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //6. Sopa express + tostadas
            'Sopa express + tostadas' => [
                ['nombre' => 'Sopa instantánea', 'cantidad' => 200, 'unidad_medida' => 'g'],
                ['nombre' => 'Pan integral', 'cantidad' => 60, 'unidad_medida' => 'g'],
            ],
            //7. Sandwich integral
            'Sandwich integral' => [
                ['nombre' => 'Pollo', 'cantidad' => 80, 'unidad_medida' => 'g'],
                ['nombre' => 'Lechuga', 'cantidad' => 20, 'unidad_medida' => 'g'],
                ['nombre' => 'Tomate', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Queso bajo en grasa', 'cantidad' => 30, 'unidad_medida' => 'g'],
                ['nombre' => 'Pan integral', 'cantidad' => 60, 'unidad_medida' => 'g'],
            ],

            //*******SNACK*********/
            //1. Barrita de cereal
            'Barrita de cereal' => [
                ['nombre' => 'Barritas de cereal', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //2. Pan con mantequilla de maní
            'Pan con mantequilla de maní' => [
                ['nombre' => 'Pan integral', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Mantequilla de maní', 'cantidad' => 20, 'unidad_medida' => 'g'],
            ],
            //3. Fruta picada
            'Fruta picada' => [
                ['nombre' => 'Mango', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Manzana', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Banana', 'cantidad' => 50, 'unidad_medida' => 'g'],
                ['nombre' => 'Naranja', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
            //4. Mix de frutos secos
            'Mix de frutos secos' => [
                ['nombre' => 'Frutos secos variados', 'cantidad' => 30, 'unidad_medida' => 'g'],
            ],
            //5. Gelatina light
            'Gelatina light' => [
                ['nombre' => 'Gelatina light', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //6. Helado de yogur
            'Helado de yogur' => [
                ['nombre' => 'Frutas congeladas', 'cantidad' => 100, 'unidad_medida' => 'g'],
                ['nombre' => 'Yogur natural', 'cantidad' => 100, 'unidad_medida' => 'g'],
            ],
            //7. Tostadas con aguacate
            'Tostadas con aguacate' => [
                ['nombre' => 'Pan integral', 'cantidad' => 60, 'unidad_medida' => 'g'],
                ['nombre' => 'Aguacate', 'cantidad' => 50, 'unidad_medida' => 'g'],
            ],
        ];

        foreach ($data as $nombreReceta => $ingredientesReceta) {
            $idReceta = $recetas[$nombreReceta] ?? null;
            if (!$idReceta) continue;

            foreach ($ingredientesReceta as $item) {
                $idIngrediente = $ingredientes[$item['nombre']] ?? null;
                if (!$idIngrediente) continue;

                DB::table('receta_ingrediente')->insert([
                    'id_receta' => $idReceta,
                    'id_ingrediente' => $idIngrediente,
                    'cantidad' => $item['cantidad'],
                    'unidad_medida' => $item['unidad_medida'],
                ]);
            }
        }
    }
}
