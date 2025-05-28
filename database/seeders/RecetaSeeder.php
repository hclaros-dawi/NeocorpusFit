<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetaSeeder extends Seeder
{
    public function run(): void
    {
        $mediterranea = DB::table('categorias')->where('nombre', 'Mediterránea')->value('id_categoria');
        $vegano = DB::table('categorias')->where('nombre', 'Vegana')->value('id_categoria');
        $clasicos = DB::table('categorias')->where('nombre', 'Clásica')->value('id_categoria');
        $rapido = DB::table('categorias')->where('nombre', 'Express')->value('id_categoria');
        $proteinas = DB::table('categorias')->where('nombre', 'Proteica')->value('id_categoria');

        // Verificar que las categorías existan antes de insertar recetas
        if (!$mediterranea || !$vegano || !$clasicos || !$rapido || !$proteinas) {
            return;
        }

        DB::table('recetas')->insert([

            //::::::::::::::MEDITERRÁNEO
            //*******DESAYUNO*********/
            ['nombre' => 'Avena con frutos', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469743895_79e28f0fae.jpg'],
            ['nombre' => 'Yogur con nueces', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470817739_ec7a4129b2.jpg'],
            ['nombre' => 'Pan integral con aceite de oliva', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470888958_aa3d149078.jpg'],
            ['nombre' => 'Yogur natural con chía', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470982560_4fc5e9f62e.jpg'],
            ['nombre' => 'Smoothie de frutas', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470893593_14fcfb6d02.jpg'],
            ['nombre' => 'Avena y semillas', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470989555_88ec0764f6.jpg'],
            ['nombre' => 'Tostadas integrales', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470904488_249b2bb304.jpg'],

            //*******COMIDA*********/
            ['nombre' => 'Salmón con quinoa', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 30, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469454196_7d465b21a3.jpg'],
            ['nombre' => 'Pasta integral con verduras', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 25, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54468614272_fc2f0d8675.jpg'],
            ['nombre' => 'Pollo al limón', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 25, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469782807_1ce7f9d304.jpg'],
            ['nombre' => 'Pollo asado con batatas', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 45, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54470828874_44090ce3e4.jpg'],
            ['nombre' => 'Verduras grilladas', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469789907_af7e066b01.jpg'],
            ['nombre' => 'Pasta con pesto', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470992670_4c69ba4697.jpg'],
            ['nombre' => 'Arroz integral con verduras', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 25, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470639636_8f937c56ef.jpg'],

            //*******CENA*********/
            ['nombre' => 'Lentejas mediterráneas', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 35, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469647454_32906091df.jpg'],
            ['nombre' => 'Pescado al horno con papas', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 40, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54470633596_62720b40c6_z.jpg'],
            ['nombre' => 'Pollo con ensalada de rúcula', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470993810_a73341b40d.jpg'],
            ['nombre' => 'Omelette con espinacas', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 15, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470995300_80d32fa8fe.jpg'],
            ['nombre' => 'Sopa de lentejas', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 40, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469800037_6b36ce7c35_z.jpg'],
            ['nombre' => 'Ensalada de garbanzos', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 15, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470833429_dfc1c856bd.jpg'],
            ['nombre' => 'Tortilla de espinaca y queso feta', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54478431202_42082fc2ae.jpg'],

            //*******SNACK*********/
            ['nombre' => 'Fruta + Almendras', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470624676_a040c18632_z.jpg'],
            ['nombre' => 'Queso bajo en grasa', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470892828_dd5429b804.jpg'],
            ['nombre' => 'Hummus con zanahorias', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470987615_4acfb76d54.jpg'],
            ['nombre' => 'Yogur griego con miel', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470634186_a81b883c8b.jpg'],
            ['nombre' => 'Pan de centeno con aguacate', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470634846_b3015f915b.jpg'],
            ['nombre' => 'Frutas variadas', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470841654_acf1bebef3_z.jpg'],
            ['nombre' => 'Ensalada griega', 'categoria_id' => $mediterranea, 'tiempo_preparacion' => 15, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54468617097_a43518cf41.jpg'],

            //::::::::::::::VEGANO
            //*******DESAYUNO*********/
            ['nombre' => 'Avena cocida con leche vegetal y frutas', 'categoria_id' => $vegano, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54485477570_abea92f420.jpg'],
            ['nombre' => 'Tostadas integrales', 'categoria_id' => $vegano, 'tiempo_preparacion' => 6, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470904488_249b2bb304.jpg'],
            ['nombre' => 'Smoothie de plátano y frutos rojos', 'categoria_id' => $vegano, 'tiempo_preparacion' => 8, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54485400703_2a18aac65e.jpg'],
            ['nombre' => 'Yogur vegetal con granola', 'categoria_id' => $vegano, 'tiempo_preparacion' => 4, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54484278622_19616000ce.jpg'],
            ['nombre' => 'Pudding de chía con leche vegetal', 'categoria_id' => $vegano, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54484278992_7d21db7530.jpg'],
            ['nombre' => 'Panqueques veganos', 'categoria_id' => $vegano, 'tiempo_preparacion' => 25, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54485478800_3fd44117c2_z.jpg'],
            ['nombre' => 'Batido de proteína vegana', 'categoria_id' => $vegano, 'tiempo_preparacion' => 6, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54484279402_f2422af380_z.jpg'],

            //*******COMIDA*********/
            ['nombre' => 'Curry de garbanzos', 'categoria_id' => $vegano, 'tiempo_preparacion' => 30, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469711118_91844283c9.jpg'],
            ['nombre' => 'Tofu con arroz y brócoli', 'categoria_id' => $vegano, 'tiempo_preparacion' => 25, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469701078_5889806a0c.jpg'],
            ['nombre' => 'Chili vegano', 'categoria_id' => $vegano, 'tiempo_preparacion' => 35, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54468550642_f3a684ee8b.jpg'],
            ['nombre' => 'Buda bowl', 'categoria_id' => $vegano, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469610169_fd193ce366.jpg'],
            ['nombre' => 'Lasaña de vegetales', 'categoria_id' => $vegano, 'tiempo_preparacion' => 40, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469654708_841aac89ae.jpg'],
            ['nombre' => 'Guiso de lentejas', 'categoria_id' => $vegano, 'tiempo_preparacion' => 45, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469743770_411e1a7d02.jpg'],
            ['nombre' => 'Lentejas con arroz', 'categoria_id' => $vegano, 'tiempo_preparacion' => 25, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469388426_df8df0f01c_w.jpg'],

            //*******CENA*********/
            ['nombre' => 'Ensalada de quinoa con vegetales asados', 'categoria_id' => $vegano, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54485322604_bc3137db84.jpg'],
            ['nombre' => 'Hamburguesas veganas caseras', 'categoria_id' => $vegano, 'tiempo_preparacion' => 35, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54473175155_c07e5b87de_z.jpg'],
            ['nombre' => 'Salteado de tofu y vegetales', 'categoria_id' => $vegano, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54485327734_444ee67789.jpg'],
            ['nombre' => 'Sopa de calabaza', 'categoria_id' => $vegano, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54485504115_b840af3dfe_z.jpg'],
            ['nombre' => 'Wraps de lechuga con garbanzos', 'categoria_id' => $vegano, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54485329714_e1108644ce_z.jpg'],
            ['nombre' => 'Pasta integral con pesto de albahaca y nueces', 'categoria_id' => $vegano, 'tiempo_preparacion' => 35, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54484290177_3224e600e8_z.jpg'],
            ['nombre' => 'Tarta de verduras', 'categoria_id' => $vegano, 'tiempo_preparacion' => 45, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54485414408_e5a94af8cb_z.jpg'],

            //*******SNACK*********/
            ['nombre' => 'Hummus con zanahorias', 'categoria_id' => $vegano, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470987615_4acfb76d54.jpg'],
            ['nombre' => 'Frutas variadas', 'categoria_id' => $vegano, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470841654_acf1bebef3_z.jpg'],
            ['nombre' => 'Barritas de cereal veganas', 'categoria_id' => $vegano, 'tiempo_preparacion' => 30, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54485334024_b18cc5c179_z.jpg'],
            ['nombre' => 'Fruta + Almendras', 'categoria_id' => $vegano, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470624676_a040c18632_z.jpg'],
            ['nombre' => 'Chips de garbanzo', 'categoria_id' => $vegano, 'tiempo_preparacion' => 25, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54485494015_aab83d849a_z.jpg'],
            ['nombre' => 'Galletas veganas', 'categoria_id' => $vegano, 'tiempo_preparacion' => 40, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54485494730_be1c024094_z.jpg'],
            ['nombre' => 'Chocolate amargo', 'categoria_id' => $vegano, 'tiempo_preparacion' => 2, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54485495615_3a636d8c81_z.jpg'],

            // CLÁSICO
            //*******DESAYUNO*********/
            ['nombre' => 'Tostadas con mermelada', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472063529_141685b5e4.jpg'],
            ['nombre' => 'Yogur con cereal', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 3, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471864431_5f208730ab.jpg'],
            ['nombre' => 'Pan con manteca y café', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472070129_77d0921435.jpg'],
            ['nombre' => 'Huevos revueltos con pan', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472138478_61253d86d1.jpg'],
            ['nombre' => 'Yogur bebible', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 1, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471870376_5c997523b3.jpg'],
            ['nombre' => 'Avena cocida con canela', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 15, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472073679_45eebf50b7.jpg'],
            ['nombre' => 'Mate con galletas', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472076969_c03c8e96a6.jpg'],

            //*******COMIDA*********/
            ['nombre' => 'Milanesas al horno', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 30, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469743785_6e88f586ee_n.jpg'],
            ['nombre' => 'Guiso de lentejas', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 45, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469743770_411e1a7d02.jpg'],
            ['nombre' => 'Pastel de papas', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 50, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469587244_ca4a794db0_z.jpg'],
            ['nombre' => 'Arroz con pollo', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 30, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469388631_8b0a2ba99c.jpg'],
            ['nombre' => 'Fideos con salsa roja', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 25, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472065549_91dfd12d16.jpg'],
            ['nombre' => 'Bife con papas', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 40, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54471032547_c7c55a637e.jpg'],
            ['nombre' => 'Asado con ensalada', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 90, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54472144788_9fbdd70c29.jpg'],

            //*******CENA*********/
            ['nombre' => 'Tarta de verduras', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 45, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469654613_a084ef456e.jpg'],
            ['nombre' => 'Ensalada césar', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471872206_6174d456b7.jpg'],
            ['nombre' => 'Empanadas de carne', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 45, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54472228215_2f4c073857.jpg'],
            ['nombre' => 'Empanadas de verdura', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 45, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54471876511_736893c838.jpg'],
            ['nombre' => 'Panqueques caseros', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 30, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472144148_ded7048a2f.jpg'],
            ['nombre' => 'Helado casero', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 240, 'dificultad' => 'Alta', 'imagen_url' => 'https://live.staticflickr.com/65535/54471877101_6a331a44d4.jpg'],
            ['nombre' => 'Alfajor casero', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 60, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54472141523_261ef22c62.jpg'],

            //*******SNACK*********/
            ['nombre' => 'Pan con queso', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472226115_0ae75edf0a.jpg'],
            ['nombre' => 'Galletas de arroz', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 1, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472234330_5cacfdc1b6.jpg'],
            ['nombre' => 'Mate con galletas', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472076969_c03c8e96a6.jpg'],
            ['nombre' => 'Yogur bebible', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 1, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471870376_5c997523b3.jpg'],
            ['nombre' => 'Helado casero', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 240, 'dificultad' => 'Alta', 'imagen_url' => 'https://live.staticflickr.com/65535/54471877101_6a331a44d4.jpg'],
            ['nombre' => 'Alfajor casero', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 60, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54472141523_261ef22c62.jpg'],
            ['nombre' => 'Panqueques caseros', 'categoria_id' => $clasicos, 'tiempo_preparacion' => 30, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472144148_ded7048a2f.jpg'],

            // ALTO EN PROTEÍNAS
            //*******DESAYUNO*********/
            ['nombre' => 'Avena con clara de huevo', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472253668_135a4dcacd.jpg'],
            ['nombre' => 'Omelette + batido proteico', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 15, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472250233_829897d028.jpg'],
            ['nombre' => 'Yogur griego + almendras', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471143012_e66f561c01.jpg'],
            ['nombre' => 'Queso cottage + fruta', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471986116_bee8020f10_n.jpg'],
            ['nombre' => 'Pan integral + claras revueltas', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471154332_2c190b109c.jpg'],
            ['nombre' => 'Muffin de avena y claras', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 25, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54472015726_9c7d3f008f.jpg'],
            ['nombre' => 'Yogur proteico', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 3, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472217464_bb7dcb958a.jpg'],

            //*******COMIDA*********/
            ['nombre' => 'Pollo con arroz integral', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 30, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469743625_8a7d151103_z.jpg'],
            ['nombre' => 'Tacos de pavo', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 25, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469388326_ea849dfa3b.jpg'],
            ['nombre' => 'Pasta con atún', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469388406_a1599daf47_n.jpg'],
            ['nombre' => 'Bife magro con verduras', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 35, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54469587419_6363d7775d.jpg'],
            ['nombre' => 'Ensalada proteica', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 15, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54468568002_e75753c98d.jpg'],
            ['nombre' => 'Pollo grillado con quinoa', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 25, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54472259278_d6286f53d4.jpg'],
            ['nombre' => 'Pasta con carne molida', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 25, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54472290133_b4a139c4c4.jpg'],

            //*******CENA*********/
            ['nombre' => 'Salmón con verduras', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 25, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54471981731_e7fbb47fc8.jpg'],
            ['nombre' => 'Tofu salteado + quinoa', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 20, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54472346890_6ab136e9e0.jpg'],
            ['nombre' => 'Lentejas con huevo cocido', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 25, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54471996446_f3292ac432.jpg'],
            ['nombre' => 'Pescado blanco con puré', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 30, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54471157642_09d163e4b1.jpg'],
            ['nombre' => 'Hamburguesa de pavo', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 20, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54472016381_60673cc5e1.jpg'],
            ['nombre' => 'Ensalada de legumbres', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 15, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472021141_9966eb130f.jpg'],
            ['nombre' => 'Tortilla con jamón y queso', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472378190_18f63204fd.jpg'],

            //*******SNACK*********/
            ['nombre' => 'Smoothie con proteína', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 7, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472346220_d6e5db067e.jpg'],
            ['nombre' => 'Huevo duro + nueces', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471988841_afafa0d253.jpg'],
            ['nombre' => 'Tostadas + mantequilla de maní', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472348730_ed201b260f.jpg'],
            ['nombre' => 'Barra proteica', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472193349_730dd36759.jpg'],
            ['nombre' => 'Batido + banana', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472287063_fe95a378b6.jpg'],
            ['nombre' => 'Hummus + tostadas', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472021686_e5117af5f3.jpg'],
            ['nombre' => 'Bife con papas', 'categoria_id' => $proteinas, 'tiempo_preparacion' => 30, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54471032547_c7c55a637e.jpg'],

            // EXPRESS
            //*******DESAYUNO*********/
            ['nombre' => 'Avena instantánea', 'categoria_id' => $rapido, 'tiempo_preparacion' => 3, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54473024924_d0121db615_z.jpg'],
            ['nombre' => 'Yogur con granola', 'categoria_id' => $rapido, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54473010179_707cfa77ed.jpg'],
            ['nombre' => 'Smoothie de banana', 'categoria_id' => $rapido, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54473088613_1a36e10a9c_z.jpg'],
            ['nombre' => 'Muffin y café', 'categoria_id' => $rapido, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54473022864_394f93df08_z.jpg'],
            ['nombre' => 'Galletas integrales', 'categoria_id' => $rapido, 'tiempo_preparacion' => 1, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472822746_3dd57c302f.jpg'],
            ['nombre' => 'Yogur bebible', 'categoria_id' => $rapido, 'tiempo_preparacion' => 1, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471870376_5c997523b3.jpg'],
            ['nombre' => 'Omelette de microondas', 'categoria_id' => $rapido, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472836781_bbed820104.jpg'],

            //*******COMIDA*********/
            ['nombre' => 'Wrap de atún', 'categoria_id' => $rapido, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469388321_db9aff64be.jpg'],
            ['nombre' => 'Sándwich de pollo', 'categoria_id' => $rapido, 'tiempo_preparacion' => 15, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54468550347_0c87d149be.jpg'],
            ['nombre' => 'Ensalada de atún', 'categoria_id' => $rapido, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469388591_b59c5f7120.jpg'],
            ['nombre' => 'Hamburguesa vegetariana', 'categoria_id' => $rapido, 'tiempo_preparacion' => 15, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54473175155_c07e5b87de_z.jpg'],
            ['nombre' => 'Arroz con verduras', 'categoria_id' => $rapido, 'tiempo_preparacion' => 20, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54473019109_448a859b9d.jpg'],
            ['nombre' => 'Wrap de jamón y queso', 'categoria_id' => $rapido, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54473183615_72025bdda8.jpg'],
            ['nombre' => 'Ensalada de pasta fría', 'categoria_id' => $rapido, 'tiempo_preparacion' => 15, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54471982227_2cda65a317.jpg'],

            //*******CENA*********/
            ['nombre' => 'Pollo grillado con ensalada', 'categoria_id' => $rapido, 'tiempo_preparacion' => 20, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469587164_81acfac560.jpg'],
            ['nombre' => 'Lentejas con arroz', 'categoria_id' => $rapido, 'tiempo_preparacion' => 25, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54469388426_df8df0f01c_w.jpg'],
            ['nombre' => 'Ensalada de huevo', 'categoria_id' => $rapido, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54473174585_c374345cb0.jpg'],
            ['nombre' => 'Pollo al horno y batatas', 'categoria_id' => $rapido, 'tiempo_preparacion' => 25, 'dificultad' => 'Media', 'imagen_url' => 'https://live.staticflickr.com/65535/54470828874_44090ce3e4.jpg'],
            ['nombre' => 'Omelette con queso', 'categoria_id' => $rapido, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471979232_bf60a6584e.jpg'],
            ['nombre' => 'Sopa express + tostadas', 'categoria_id' => $rapido, 'tiempo_preparacion' => 10, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54473097928_8947e88489.jpg'],
            ['nombre' => 'Sandwich integral', 'categoria_id' => $rapido, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54473100393_66abfb9f0e.jpg'],

            //*******SNACK*********/
            ['nombre' => 'Barrita de cereal', 'categoria_id' => $rapido, 'tiempo_preparacion' => 1, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54471969097_2e8757b78e.jpg'],
            ['nombre' => 'Pan con mantequilla de maní', 'categoria_id' => $rapido, 'tiempo_preparacion' => 3, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472348730_ed201b260f.jpg'],
            ['nombre' => 'Fruta picada', 'categoria_id' => $rapido, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54473088088_d3bf169539_w.jpg'],
            ['nombre' => 'Mix de frutos secos', 'categoria_id' => $rapido, 'tiempo_preparacion' => 1, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472849086_b777520f2c.jpg'],
            ['nombre' => 'Gelatina light', 'categoria_id' => $rapido, 'tiempo_preparacion' => 1, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54473192360_1b58d7e605.jpg'],
            ['nombre' => 'Helado de yogur', 'categoria_id' => $rapido, 'tiempo_preparacion' => 2, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54472838826_8ed2cffec9.jpg'],
            ['nombre' => 'Tostadas con aguacate', 'categoria_id' => $rapido, 'tiempo_preparacion' => 5, 'dificultad' => 'Fácil', 'imagen_url' => 'https://live.staticflickr.com/65535/54470634846_b3015f915b.jpg'],
        ]);
    }
}
