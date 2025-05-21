<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasoRecetaSeeder extends Seeder
{

    public function run(): void
    {
       //::::::::::::::MEDITERRÁNEO
       //*******DESAYUNO*********/       
       $avenaConFrutos = DB::table('recetas')->where('nombre', 'Avena con frutos')->value('id_receta');
       $yogurConNueces = DB::table('recetas')->where('nombre', 'Yogur con nueces')->value('id_receta');
       $panIntegralConAceite = DB::table('recetas')->where('nombre', 'Pan integral con aceite de oliva')->value('id_receta');
       $yogurNaturalConChia = DB::table('recetas')->where('nombre', 'Yogur natural con chía')->value('id_receta');
       $smoothieDeFrutas = DB::table('recetas')->where('nombre', 'Smoothie de frutas')->value('id_receta');
       $avenaYSemillas = DB::table('recetas')->where('nombre', 'Avena y semillas')->value('id_receta');
       $tostadasIntegrales = DB::table('recetas')->where('nombre', 'Tostadas integrales')->value('id_receta');
       
       //*******COMIDA*********/
       $salmonConQuinoa = DB::table('recetas')->where('nombre', 'Salmón con quinoa')->value('id_receta');
       $pastaIntegralConVerduras = DB::table('recetas')->where('nombre', 'Pasta integral con verduras')->value('id_receta');
       $polloAlLimón = DB::table('recetas')->where('nombre', 'Pollo al limón')->value('id_receta');
       $polloAsadoConBatatas = DB::table('recetas')->where('nombre', 'Pollo asado con batatas')->value('id_receta');
       $verdurasGrilladas = DB::table('recetas')->where('nombre', 'Verduras grilladas')->value('id_receta');
       $pastaConPesto = DB::table('recetas')->where('nombre', 'Pasta con pesto')->value('id_receta');
       $arrozIntegralConVerduras = DB::table('recetas')->where('nombre', 'Arroz integral con verduras')->value('id_receta');
       
       //*******CENA*********/
       $lentejasMediterraneas = DB::table('recetas')->where('nombre', 'Lentejas mediterráneas')->value('id_receta');
       $pescadoAlHornoConPapas = DB::table('recetas')->where('nombre', 'Pescado al horno con papas')->value('id_receta');
       $polloConEnsaladaDeRucula = DB::table('recetas')->where('nombre', 'Pollo con ensalada de rúcula')->value('id_receta');
       $omeletteConEspinacas = DB::table('recetas')->where('nombre', 'Omelette con espinacas')->value('id_receta');
       $sopaDeLentejas = DB::table('recetas')->where('nombre', 'Sopa de lentejas')->value('id_receta');
       $ensaladaDeGarbanzos = DB::table('recetas')->where('nombre', 'Ensalada de garbanzos')->value('id_receta');
       $tortillaEspinacaQuesoFeta = DB::table('recetas')->where('nombre', 'Tortilla de espinaca y queso feta')->value('id_receta');
       
       //*******SNACK*********/
       $frutaAlmendras = DB::table('recetas')->where('nombre', 'Fruta + Almendras')->value('id_receta');
       $quesoBajoEnGrasa = DB::table('recetas')->where('nombre', 'Queso bajo en grasa')->value('id_receta');
       $hummusConZanahorias = DB::table('recetas')->where('nombre', 'Hummus con zanahorias')->value('id_receta');
       $yogurGriegoConMiel = DB::table('recetas')->where('nombre', 'Yogur griego con miel')->value('id_receta');
       $panCentenoAguacate = DB::table('recetas')->where('nombre', 'Pan de centeno con aguacate')->value('id_receta');
       $frutasVariadas = DB::table('recetas')->where('nombre', 'Frutas variadas')->value('id_receta');
       $ensaladaGriega = DB::table('recetas')->where('nombre', 'Ensalada griega')->value('id_receta');

        //::::::::::::::VEGANO
        //*******DESAYUNO*********/
        $avenaConLecheVegetalYFrutas = DB::table('recetas')->where('nombre', 'Avena cocida con leche vegetal y frutas')->value('id_receta');
        $tostadasIntegralesVeganas = DB::table('recetas')->where('nombre', 'Tostadas integrales')->value('id_receta');
        $smoothiePlatanoFrutosRojos = DB::table('recetas')->where('nombre', 'Smoothie de plátano y frutos rojos')->value('id_receta');
        $yogurVegetalGranola = DB::table('recetas')->where('nombre', 'Yogur vegetal con granola')->value('id_receta');
        $puddingChiaLecheVegetal = DB::table('recetas')->where('nombre', 'Pudding de chía con leche vegetal')->value('id_receta');
        $panquequesVeganos = DB::table('recetas')->where('nombre', 'Panqueques veganos')->value('id_receta');
        $batidoProteinaVegana = DB::table('recetas')->where('nombre', 'Batido de proteína vegana')->value('id_receta');

        //*******COMIDA*********/
        $curryGarbanzos = DB::table('recetas')->where('nombre', 'Curry de garbanzos')->value('id_receta');
        $tofuArrozBrocoli = DB::table('recetas')->where('nombre', 'Tofu con arroz y brócoli')->value('id_receta');
        $chiliVegano = DB::table('recetas')->where('nombre', 'Chili vegano')->value('id_receta');
        $budaBowl = DB::table('recetas')->where('nombre', 'Buda bowl')->value('id_receta');
        $lasagnaVegetales = DB::table('recetas')->where('nombre', 'Lasaña de vegetales')->value('id_receta');
        $guisoDeLentejas = DB::table('recetas')->where('nombre', 'Guiso de lentejas')->value('id_receta');
        $lentejasArroz = DB::table('recetas')->where('nombre', 'Lentejas con arroz')->value('id_receta');

        //*******CENA*********/
        $ensaladaQuinoa = DB::table('recetas')->where('nombre', 'Ensalada de quinoa con vegetales asados')->value('id_receta');
        $hamburguesasVeganas = DB::table('recetas')->where('nombre', 'Hamburguesas veganas caseras')->value('id_receta');
        $salteadoTofu = DB::table('recetas')->where('nombre', 'Salteado de tofu y vegetales')->value('id_receta');
        $sopaCalabaza = DB::table('recetas')->where('nombre', 'Sopa de calabaza')->value('id_receta');
        $wrapsGarbanzos = DB::table('recetas')->where('nombre', 'Wraps de lechuga con garbanzos')->value('id_receta');
        $pastaPestoNueces = DB::table('recetas')->where('nombre', 'Pasta integral con pesto de albahaca y nueces')->value('id_receta');
        $tartaDeVerduras = DB::table('recetas')->where('nombre', 'Tarta de verduras')->value('id_receta');
                
        //*******SNACK*********/
        $hummusZanahorias = DB::table('recetas')->where('nombre', 'Hummus con zanahorias')->value('id_receta');
        $frutasVariadasVeganas = DB::table('recetas')->where('nombre', 'Frutas variadas')->value('id_receta');
        $barritasCereal = DB::table('recetas')->where('nombre', 'Barritas de cereal veganas')->value('id_receta');
        $frutaAlmendrasVeganas = DB::table('recetas')->where('nombre', 'Fruta + Almendras')->value('id_receta');
        $chipsGarbanzo = DB::table('recetas')->where('nombre', 'Chips de garbanzo')->value('id_receta');
        $galletasVeganas = DB::table('recetas')->where('nombre', 'Galletas veganas')->value('id_receta');
        $chocolateAmargo = DB::table('recetas')->where('nombre', 'Chocolate amargo')->value('id_receta');

        //::::::::::::::CLÁSICO
        //*******DESAYUNO*********/
        $tostadasConMermelada = DB::table('recetas')->where('nombre', 'Tostadas con mermelada')->value('id_receta');
        $yogurConCereal = DB::table('recetas')->where('nombre', 'Yogur con cereal')->value('id_receta');
        $panConMantecaYCafe = DB::table('recetas')->where('nombre', 'Pan con manteca y café')->value('id_receta');
        $huevosRevueltosConPan = DB::table('recetas')->where('nombre', 'Huevos revueltos con pan')->value('id_receta');
        $yogurBebible = DB::table('recetas')->where('nombre', 'Yogur bebible')->value('id_receta');
        $avenaConCanela = DB::table('recetas')->where('nombre', 'Avena cocida con canela')->value('id_receta');
        $mateConGalletas = DB::table('recetas')->where('nombre', 'Mate con galletas')->value('id_receta');

        //*******COMIDA*********/
        $milanesasAlHorno = DB::table('recetas')->where('nombre', 'Milanesas al horno')->value('id_receta');
        $guisoLentejas = DB::table('recetas')->where('nombre', 'Guiso de lentejas')->value('id_receta');
        $pastelDePapas = DB::table('recetas')->where('nombre', 'Pastel de papas')->value('id_receta');
        $arrozConPollo = DB::table('recetas')->where('nombre', 'Arroz con pollo')->value('id_receta');
        $fideosConSalsaRoja = DB::table('recetas')->where('nombre', 'Fideos con salsa roja')->value('id_receta');
        $bifeConPapas = DB::table('recetas')->where('nombre', 'Bife con papas')->value('id_receta');
        $asadoConEnsalada = DB::table('recetas')->where('nombre', 'Asado con ensalada')->value('id_receta');

        //*******CENA*********/
        $tartaVerduras = DB::table('recetas')->where('nombre', 'Tarta de verduras')->value('id_receta');
        $ensaladaCesar = DB::table('recetas')->where('nombre', 'Ensalada césar')->value('id_receta');
        $empanadasDeCarne = DB::table('recetas')->where('nombre', 'Empanadas de carne')->value('id_receta');
        $empanadasDeVerdura = DB::table('recetas')->where('nombre', 'Empanadas de verdura')->value('id_receta');
        $panquequesCaseros = DB::table('recetas')->where('nombre', 'Panqueques caseros')->value('id_receta');
        $heladoCasero = DB::table('recetas')->where('nombre', 'Helado casero')->value('id_receta');
        $alfajorCasero = DB::table('recetas')->where('nombre', 'Alfajor casero')->value('id_receta');
        
        //*******SNACK*********/
        $panConQueso = DB::table('recetas')->where('nombre', 'Pan con queso')->value('id_receta');
        $galletasDeArroz = DB::table('recetas')->where('nombre', 'Galletas de arroz')->value('id_receta');
        $mateGalletasSnack = DB::table('recetas')->where('nombre', 'Mate con galletas')->value('id_receta'); 
        $yogurBebibleSnack = DB::table('recetas')->where('nombre', 'Yogur bebible')->value('id_receta'); 
        $heladoSnack = DB::table('recetas')->where('nombre', 'Helado casero')->value('id_receta'); 
        $alfajorSnack = DB::table('recetas')->where('nombre', 'Alfajor casero')->value('id_receta'); 
        $panquequesSnack = DB::table('recetas')->where('nombre', 'Panqueques caseros')->value('id_receta'); 

        //::::::::::::::ALTO EN PROTEÍNAS
        //*******DESAYUNO*********/
        $avenaConClaraDeHuevo = DB::table('recetas')->where('nombre', 'Avena con clara de huevo')->value('id_receta');
        $omeletteConBatidoProteico = DB::table('recetas')->where('nombre', 'Omelette + batido proteico')->value('id_receta');
        $yogurGriegoConAlmendras = DB::table('recetas')->where('nombre', 'Yogur griego + almendras')->value('id_receta');
        $quesoCottageConFruta = DB::table('recetas')->where('nombre', 'Queso cottage + fruta')->value('id_receta');
        $panIntegralConClarasRevueltas = DB::table('recetas')->where('nombre', 'Pan integral + claras revueltas')->value('id_receta');
        $muffinDeAvenaYClaras = DB::table('recetas')->where('nombre', 'Muffin de avena y claras')->value('id_receta');
        $yogurProteico = DB::table('recetas')->where('nombre', 'Yogur proteico')->value('id_receta');

        //*******COMIDA*********/
        $polloConArrozIntegral = DB::table('recetas')->where('nombre', 'Pollo con arroz integral')->value('id_receta');
        $tacosDePavo = DB::table('recetas')->where('nombre', 'Tacos de pavo')->value('id_receta');
        $pastaConAtun = DB::table('recetas')->where('nombre', 'Pasta con atún')->value('id_receta');
        $bifeMagroConVerduras = DB::table('recetas')->where('nombre', 'Bife magro con verduras')->value('id_receta');
        $ensaladaProteica = DB::table('recetas')->where('nombre', 'Ensalada proteica')->value('id_receta');
        $polloGrilladoConQuinoa = DB::table('recetas')->where('nombre', 'Pollo grillado con quinoa')->value('id_receta');
        $pastaConCarneMolida = DB::table('recetas')->where('nombre', 'Pasta con carne molida')->value('id_receta');

        //*******CENA*********/
        $salmonConVerduras = DB::table('recetas')->where('nombre', 'Salmón con verduras')->value('id_receta');
        $tofuSalteadoConQuinoa = DB::table('recetas')->where('nombre', 'Tofu salteado + quinoa')->value('id_receta');
        $lentejasConHuevoCocido = DB::table('recetas')->where('nombre', 'Lentejas con huevo cocido')->value('id_receta');
        $pescadoBlancoConPure = DB::table('recetas')->where('nombre', 'Pescado blanco con puré')->value('id_receta');
        $hamburguesaDePavo = DB::table('recetas')->where('nombre', 'Hamburguesa de pavo')->value('id_receta');
        $ensaladaDeLegumbres = DB::table('recetas')->where('nombre', 'Ensalada de legumbres')->value('id_receta');
        $tortillaConJamonYQueso = DB::table('recetas')->where('nombre', 'Tortilla con jamón y queso')->value('id_receta');

        //*******SNACK*********/
        $smoothieConProteina = DB::table('recetas')->where('nombre', 'Smoothie con proteína')->value('id_receta');
        $huevoDuroConNueces = DB::table('recetas')->where('nombre', 'Huevo duro + nueces')->value('id_receta');
        $tostadasConMantequillaDeMani = DB::table('recetas')->where('nombre', 'Tostadas + mantequilla de maní')->value('id_receta');
        $barraProteica = DB::table('recetas')->where('nombre', 'Barra proteica')->value('id_receta');
        $batidoConBanana = DB::table('recetas')->where('nombre', 'Batido + banana')->value('id_receta');
        $hummusConTostadas = DB::table('recetas')->where('nombre', 'Hummus + tostadas')->value('id_receta');
        $bifePapasSnack = DB::table('recetas')->where('nombre', 'Bife con papas')->value('id_receta');

        //::::::::::::::EXPRESS    
        //*******DESAYUNO*********/
        $avenaInstantanea = DB::table('recetas')->where('nombre', 'Avena instantánea')->value('id_receta');
        $yogurConGranola = DB::table('recetas')->where('nombre', 'Yogur con granola')->value('id_receta');
        $smoothieDeBanana = DB::table('recetas')->where('nombre', 'Smoothie de banana')->value('id_receta');
        $muffinYCafe = DB::table('recetas')->where('nombre', 'Muffin y café')->value('id_receta');
        $galletasIntegrales = DB::table('recetas')->where('nombre', 'Galletas integrales')->value('id_receta');
        $yogurBebible = DB::table('recetas')->where('nombre', 'Yogur bebible')->value('id_receta');
        $omeletteDeMicroondas = DB::table('recetas')->where('nombre', 'Omelette de microondas')->value('id_receta');

        //*******COMIDA*********/
        $wrapDeAtun = DB::table('recetas')->where('nombre', 'Wrap de atún')->value('id_receta');
        $sandwichDePollo = DB::table('recetas')->where('nombre', 'Sándwich de pollo')->value('id_receta');
        $ensaladaDeAtun = DB::table('recetas')->where('nombre', 'Ensalada de atún')->value('id_receta');
        $hamburguesaVegetariana = DB::table('recetas')->where('nombre', 'Hamburguesa vegetariana')->value('id_receta');
        $arrozConVerduras = DB::table('recetas')->where('nombre', 'Arroz con verduras')->value('id_receta');
        $wrapDeJamonYQueso = DB::table('recetas')->where('nombre', 'Wrap de jamón y queso')->value('id_receta');
        $ensaladaDePastaFria = DB::table('recetas')->where('nombre', 'Ensalada de pasta fría')->value('id_receta');

        //*******CENA*********/
        $polloGrilladoConEnsalada = DB::table('recetas')->where('nombre', 'Pollo grillado con ensalada')->value('id_receta');
        $lentejasConArroz = DB::table('recetas')->where('nombre', 'Lentejas con arroz')->value('id_receta');
        $ensaladaDeHuevo = DB::table('recetas')->where('nombre', 'Ensalada de huevo')->value('id_receta');
        $polloAlHornoYBatatas = DB::table('recetas')->where('nombre', 'Pollo al horno y batatas')->value('id_receta');
        $omeletteConQueso = DB::table('recetas')->where('nombre', 'Omelette con queso')->value('id_receta');
        $sopaExpressConTostadas = DB::table('recetas')->where('nombre', 'Sopa express + tostadas')->value('id_receta');
        $sandwichIntegral = DB::table('recetas')->where('nombre', 'Sandwich integral')->value('id_receta');

        //*******SNACK*********/   
        $barritaDeCereal = DB::table('recetas')->where('nombre', 'Barrita de cereal')->value('id_receta');
        $panConMantequillaDeMani = DB::table('recetas')->where('nombre', 'Pan con mantequilla de maní')->value('id_receta');
        $frutaPicada = DB::table('recetas')->where('nombre', 'Fruta picada')->value('id_receta');
        $mixDeFrutosSecos = DB::table('recetas')->where('nombre', 'Mix de frutos secos')->value('id_receta');
        $gelatinaLight = DB::table('recetas')->where('nombre', 'Gelatina light')->value('id_receta');
        $heladoDeYogur = DB::table('recetas')->where('nombre', 'Helado de yogur')->value('id_receta');
        $tostadasConAguacate = DB::table('recetas')->where('nombre', 'Tostadas con aguacate')->value('id_receta');

        DB::table('pasos_receta')->insert([

            //::::::::::::::MEDITERRÁNEO
            //*******DESAYUNO*********/
            //1. Avena con frutos  
            ['id_receta' => $avenaConFrutos, 'descripcion' => 'Cocina la avena con leche según las instrucciones del paquete.', 'orden' => 1],
            ['id_receta' => $avenaConFrutos, 'descripcion' => 'Sirve la avena en un bol.', 'orden' => 2],
            ['id_receta' => $avenaConFrutos, 'descripcion' => 'Agrega banana picada y frutos rojos por encima.', 'orden' => 3],  
            //2. Yogur con nueces
            ['id_receta' => $yogurConNueces, 'descripcion' => 'Coloca el yogur natural en un bol.', 'orden' => 1],
            ['id_receta' => $yogurConNueces, 'descripcion' => 'Añade nueces picadas por encima.', 'orden' => 2],
            //3. Pan integral con aceite de oliva
            ['id_receta' => $panIntegralConAceite, 'descripcion' => 'Tuesta el pan integral.', 'orden' => 1],
            ['id_receta' => $panIntegralConAceite, 'descripcion' => 'Rocía aceite de oliva sobre las tostadas.', 'orden' => 2],
            //4. Yogur natural con chía
            ['id_receta' => $yogurNaturalConChia, 'descripcion' => 'Sirve el yogur natural en un recipiente.', 'orden' => 1],
            ['id_receta' => $yogurNaturalConChia, 'descripcion' => 'Espolvorea chía por encima y mezcla.', 'orden' => 2],
            //5. Smoothie de frutas
            ['id_receta' => $smoothieDeFrutas, 'descripcion' => 'Coloca banana, frutos rojos y leche en una licuadora.', 'orden' => 1],
            ['id_receta' => $smoothieDeFrutas, 'descripcion' => 'Licúa hasta obtener una mezcla homogénea.', 'orden' => 2],
            //6. Avena y semillas
            ['id_receta' => $avenaYSemillas, 'descripcion' => 'Cocina la avena con leche.', 'orden' => 1],
            ['id_receta' => $avenaYSemillas, 'descripcion' => 'Añade chía y mezcla bien antes de servir.', 'orden' => 2],
            //7. Tostadas integrales
            ['id_receta' => $tostadasIntegrales, 'descripcion' => 'Tuesta el pan integral.', 'orden' => 1],
            ['id_receta' => $tostadasIntegrales, 'descripcion' => 'Unta aguacate sobre las tostadas.', 'orden' => 2],

            //*******COMIDA*********/
            //1. Salmón con quinoa
            ['id_receta' => $salmonConQuinoa, 'descripcion' => 'Precalienta el horno a 180°C.', 'orden' => 1],
            ['id_receta' => $salmonConQuinoa, 'descripcion' => 'Coloca el salmón en una bandeja para hornear.', 'orden' => 2],
            ['id_receta' => $salmonConQuinoa, 'descripcion' => 'Hornea el salmón durante 20 minutos.', 'orden' => 3],
            ['id_receta' => $salmonConQuinoa, 'descripcion' => 'Cocina la quinoa según las instrucciones del paquete.', 'orden' => 4],
            ['id_receta' => $salmonConQuinoa, 'descripcion' => 'Sirve el salmón sobre la quinoa y adereza con aceite de oliva.', 'orden' => 5],
            //2. Pasta integral con verduras
            ['id_receta' => $pastaIntegralConVerduras, 'descripcion' => 'Cocina la pasta integral siguiendo las instrucciones del paquete.', 'orden' => 1],
            ['id_receta' => $pastaIntegralConVerduras, 'descripcion' => 'Saltea las verduras en una sartén con aceite de oliva.', 'orden' => 2],
            ['id_receta' => $pastaIntegralConVerduras, 'descripcion' => 'Mezcla las verduras salteadas con la pasta cocida.', 'orden' => 3],
            ['id_receta' => $pastaIntegralConVerduras, 'descripcion' => 'Sirve la pasta con un poco de queso rallado por encima.', 'orden' => 4],
            //3. Pollo al limón
            ['id_receta' => $polloAlLimón, 'descripcion' => 'Marina el pollo con el jugo de limón y especias durante 15 minutos.', 'orden' => 1],
            ['id_receta' => $polloAlLimón, 'descripcion' => 'Cocina el pollo en una sartén con aceite hasta que esté dorado.', 'orden' => 2],
            ['id_receta' => $polloAlLimón, 'descripcion' => 'Añade un poco de caldo de pollo y deja que se cocine a fuego lento.', 'orden' => 3],
            ['id_receta' => $polloAlLimón, 'descripcion' => 'Sirve el pollo con las verduras al gusto.', 'orden' => 4],
            //4. Pollo asado con batatas
            ['id_receta' => $polloAsadoConBatatas, 'descripcion' => 'Precalienta el horno a 200°C.', 'orden' => 1],
            ['id_receta' => $polloAsadoConBatatas, 'descripcion' => 'Coloca el pollo y batatas en una bandeja, sazona con ajo y orégano.', 'orden' => 2],
            ['id_receta' => $polloAsadoConBatatas, 'descripcion' => 'Hornea por 40-45 minutos hasta dorar.', 'orden' => 3],
            //5. Verduras grilladas
            ['id_receta' => $verdurasGrilladas, 'descripcion' => 'Corta berenjena, zucchini y pimientos en tiras.', 'orden' => 1],
            ['id_receta' => $verdurasGrilladas, 'descripcion' => 'Grilla las verduras en sartén o plancha hasta dorar.', 'orden' => 2],
            //6. Pasta con pesto
            ['id_receta' => $pastaConPesto, 'descripcion' => 'Cocina la pasta integral según instrucciones.', 'orden' => 1],
            ['id_receta' => $pastaConPesto, 'descripcion' => 'Prepara el pesto licuando albahaca, piñones, parmesano y aceite de oliva.', 'orden' => 2],
            ['id_receta' => $pastaConPesto, 'descripcion' => 'Mezcla la pasta caliente con el pesto.', 'orden' => 3],
            //7. Arroz integral con verduras
            ['id_receta' => $arrozIntegralConVerduras, 'descripcion' => 'Cocina el arroz integral.', 'orden' => 1],
            ['id_receta' => $arrozIntegralConVerduras, 'descripcion' => 'Saltea los vegetales mixtos y mézclalos con el arroz.', 'orden' => 2],

            //*******CENA*********/
            //1. Lentejas mediterráneas 
            ['id_receta' => $lentejasMediterraneas, 'descripcion' => 'Sofríe ajo y tomate en una olla con un poco de aceite.', 'orden' => 1],
            ['id_receta' => $lentejasMediterraneas, 'descripcion' => 'Agrega las lentejas cocidas y una hoja de laurel.', 'orden' => 2],
            ['id_receta' => $lentejasMediterraneas, 'descripcion' => 'Cocina a fuego medio durante 10 minutos.', 'orden' => 3],
            //2. Pescado al horno con papas
            ['id_receta' => $pescadoAlHornoConPapas, 'descripcion' => 'Precalienta el horno a 180°C.', 'orden' => 1],
            ['id_receta' => $pescadoAlHornoConPapas, 'descripcion' => 'Coloca el pescado y las papas en una bandeja con ajo picado.', 'orden' => 2],
            ['id_receta' => $pescadoAlHornoConPapas, 'descripcion' => 'Hornea durante 25-30 minutos.', 'orden' => 3],
            //3. Pollo con ensalada de rúcula
            ['id_receta' => $polloConEnsaladaDeRucula, 'descripcion' => 'Cocina el pollo a la plancha con sal y aceite de oliva.', 'orden' => 1],
            ['id_receta' => $polloConEnsaladaDeRucula, 'descripcion' => 'Prepara una ensalada con rúcula, tomate y aceite de oliva.', 'orden' => 2],
            ['id_receta' => $polloConEnsaladaDeRucula, 'descripcion' => 'Sirve el pollo acompañado de la ensalada.', 'orden' => 3],
            //4. Omelette con espinacas
            ['id_receta' => $omeletteConEspinacas, 'descripcion' => 'Bate los huevos en un recipiente.', 'orden' => 1],
            ['id_receta' => $omeletteConEspinacas, 'descripcion' => 'Agrega espinaca fresca y mezcla.', 'orden' => 2],
            ['id_receta' => $omeletteConEspinacas, 'descripcion' => 'Cocina en sartén hasta que el huevo esté firme.', 'orden' => 3],
            //5. Sopa de lentejas
            ['id_receta' => $sopaDeLentejas, 'descripcion' => 'Sofríe ajo, cebolla y tomate en una olla.', 'orden' => 1],
            ['id_receta' => $sopaDeLentejas, 'descripcion' => 'Agrega las lentejas cocidas y agua suficiente.', 'orden' => 2],
            ['id_receta' => $sopaDeLentejas, 'descripcion' => 'Cocina a fuego lento por 20 minutos.', 'orden' => 3],
            //6. Ensalada de garbanzos
            ['id_receta' => $ensaladaDeGarbanzos, 'descripcion' => 'Mezcla garbanzos cocidos con pepino, tomate y cebolla.', 'orden' => 1],
            ['id_receta' => $ensaladaDeGarbanzos, 'descripcion' => 'Aliña con aceite de oliva y sal al gusto.', 'orden' => 2],
            //7. Tortilla de espinaca y queso feta
            ['id_receta' => $tortillaEspinacaQuesoFeta, 'descripcion' => 'Bate los huevos y agrega espinaca picada y queso feta.', 'orden' => 1],
            ['id_receta' => $tortillaEspinacaQuesoFeta, 'descripcion' => 'Cocina en sartén con aceite de oliva hasta dorar.', 'orden' => 2],

            //*******SNACK*********/
            //1. Fruta + Almendras
            ['id_receta' => $frutaAlmendras, 'descripcion' => 'Corta la fruta en rodajas.', 'orden' => 1],
            ['id_receta' => $frutaAlmendras, 'descripcion' => 'Acompaña con un puñado de almendras.', 'orden' => 2],
            //2. Queso bajo en grasa
            ['id_receta' => $quesoBajoEnGrasa, 'descripcion' => 'Corta el queso en cubos.', 'orden' => 1],
            ['id_receta' => $quesoBajoEnGrasa, 'descripcion' => 'Sirve junto a aceitunas negras.', 'orden' => 2],
            //3. Hummus con zanahorias
            ['id_receta' => $hummusConZanahorias, 'descripcion' => 'Pela y corta las zanahorias en bastones.', 'orden' => 1],
            ['id_receta' => $hummusConZanahorias, 'descripcion' => 'Sirve con hummus para dipear.', 'orden' => 2],
            //4. Yogur griego con miel
            ['id_receta' => $yogurGriegoConMiel, 'descripcion' => 'Sirve el yogur griego en un bol.', 'orden' => 1],
            ['id_receta' => $yogurGriegoConMiel, 'descripcion' => 'Añade miel por encima.', 'orden' => 2],
            //5. Pan de centeno con aguacate
            ['id_receta' => $panCentenoAguacate, 'descripcion' => 'Tuesta el pan de centeno.', 'orden' => 1],
            ['id_receta' => $panCentenoAguacate, 'descripcion' => 'Unta aguacate sobre el pan.', 'orden' => 2],
            //6. Frutas variadas
            ['id_receta' => $frutasVariadas, 'descripcion' => 'Lava y corta toda la fruta.', 'orden' => 1],
            ['id_receta' => $frutasVariadas, 'descripcion' => 'Sirve en un bol como ensalada de frutas.', 'orden' => 2],
            // 7. Ensalada griega
            ['id_receta' => $ensaladaGriega, 'descripcion' => 'Corta pepino, tomate, cebolla y aceitunas.', 'orden' => 1],
            ['id_receta' => $ensaladaGriega, 'descripcion' => 'Agrega queso feta y adereza con aceite de oliva y orégano.', 'orden' => 2],

            //::::::::::::::VEGANO
            //*******DESAYUNO*********/
            //1. Avena cocida con leche vegetal y frutas 
            ['id_receta' => $avenaConLecheVegetalYFrutas, 'descripcion' => 'Cocina la avena con leche vegetal a fuego medio hasta que espese.', 'orden' => 1],
            ['id_receta' => $avenaConLecheVegetalYFrutas, 'descripcion' => 'Sirve caliente con banana en rodajas y frutos rojos por encima.', 'orden' => 2],
            //2. Tostadas integrales
            ['id_receta' => $tostadasIntegrales, 'descripcion' => 'Tuesta el pan integral hasta que esté crujiente.', 'orden' => 1],
            ['id_receta' => $tostadasIntegrales, 'descripcion' => 'Unta con aguacate y añade sal al gusto.', 'orden' => 2],
            //3. Smoothie de plátano y frutos rojos
            ['id_receta' => $smoothiePlatanoFrutosRojos, 'descripcion' => 'Coloca la banana, los frutos rojos y la leche en una licuadora.', 'orden' => 1],
            ['id_receta' => $smoothiePlatanoFrutosRojos, 'descripcion' => 'Licúa hasta obtener una mezcla homogénea.', 'orden' => 2],
            //4. Yogur vegetal con granola
            ['id_receta' => $yogurVegetalGranola, 'descripcion' => 'Sirve el yogur vegetal en un bol.', 'orden' => 1],
            ['id_receta' => $yogurVegetalGranola, 'descripcion' => 'Agrega granola por encima al gusto.', 'orden' => 2],
            //5. Pudding de chía con leche vegetal
            ['id_receta' => $puddingChiaLecheVegetal, 'descripcion' => 'Mezcla la chía con la leche vegetal en un recipiente.', 'orden' => 1],
            ['id_receta' => $puddingChiaLecheVegetal, 'descripcion' => 'Deja reposar en la nevera durante al menos 4 horas o toda la noche.', 'orden' => 2],
            //6. Panqueques veganos
            ['id_receta' => $panquequesVeganos, 'descripcion' => 'Mezcla la harina integral, la leche vegetal y banana machacada hasta formar una masa.', 'orden' => 1],
            ['id_receta' => $panquequesVeganos, 'descripcion' => 'Cocina porciones de la masa en una sartén caliente por ambos lados.', 'orden' => 2],
            //7. Batido de proteína vegana
            ['id_receta' => $batidoProteinaVegana, 'descripcion' => 'Coloca la proteína en polvo, leche vegetal, banana y mantequilla de maní en una licuadora.', 'orden' => 1],
            ['id_receta' => $batidoProteinaVegana, 'descripcion' => 'Licúa hasta obtener una bebida cremosa y homogénea.', 'orden' => 2],

            //*******COMIDA*********/
            //1. Curry de garbanzos
            ['id_receta' => $curryGarbanzos, 'descripcion' => 'Sofríe la cebolla y el ajo en una sartén con un poco de aceite.', 'orden' => 1],
            ['id_receta' => $curryGarbanzos, 'descripcion' => 'Agrega los garbanzos y el curry en polvo, mezcla bien.', 'orden' => 2],
            ['id_receta' => $curryGarbanzos, 'descripcion' => 'Vierte la leche de coco y cocina a fuego medio por 15 minutos.', 'orden' => 3],
            //2. Tofu con arroz y brócoli
            ['id_receta' => $tofuArrozBrocoli, 'descripcion' => 'Cocina el arroz integral según instrucciones del paquete.', 'orden' => 1],
            ['id_receta' => $tofuArrozBrocoli, 'descripcion' => 'Saltea el tofu y el brócoli con un poco de aceite hasta dorar.', 'orden' => 2],
            ['id_receta' => $tofuArrozBrocoli, 'descripcion' => 'Sirve el tofu y el brócoli sobre el arroz cocido.', 'orden' => 3],
            //3. Chili vegano
            ['id_receta' => $chiliVegano, 'descripcion' => 'Sofríe la cebolla, los pimientos y el ajo.', 'orden' => 1],
            ['id_receta' => $chiliVegano, 'descripcion' => 'Agrega los frijoles negros y el tomate picado.', 'orden' => 2],
            ['id_receta' => $chiliVegano, 'descripcion' => 'Cocina a fuego lento durante 20 minutos, revolviendo ocasionalmente.', 'orden' => 3],
            //4. Buda bowl
            ['id_receta' => $budaBowl, 'descripcion' => 'Cocina la quinoa y deja enfriar.', 'orden' => 1],
            ['id_receta' => $budaBowl, 'descripcion' => 'Coloca la quinoa en un bol y añade aguacate, garbanzos y tomate.', 'orden' => 2],
            ['id_receta' => $budaBowl, 'descripcion' => 'Agrega una cucharada de hummus al centro y sirve frío.', 'orden' => 3],
            //5. Lasaña de vegetales
            ['id_receta' => $lasagnaVegetales, 'descripcion' => 'Saltea el zucchini, la berenjena y el tomate.', 'orden' => 1],
            ['id_receta' => $lasagnaVegetales, 'descripcion' => 'Arma capas con las láminas de lasaña, los vegetales y la bechamel vegana.', 'orden' => 2],
            ['id_receta' => $lasagnaVegetales, 'descripcion' => 'Hornea a 180°C durante 30 minutos.', 'orden' => 3],
            //6. Guiso de lentejas
            ['id_receta' => $guisoLentejas, 'descripcion' => 'Sofríe la cebolla, el pimentón y el ajo.', 'orden' => 1],
            ['id_receta' => $guisoLentejas, 'descripcion' => 'Agrega las lentejas cocidas, las papas y zanahorias picadas.', 'orden' => 2],
            ['id_receta' => $guisoLentejas, 'descripcion' => 'Cubre con agua y cocina a fuego medio hasta que las verduras estén tiernas.', 'orden' => 3],
            //7.Lentejas con arroz
            ['id_receta' => $lentejasArroz, 'descripcion' => 'Cocina el arroz blanco y reserva.', 'orden' => 1],
            ['id_receta' => $lentejasArroz, 'descripcion' => 'Calienta las lentejas cocidas con un poco de especias si se desea.', 'orden' => 2],
            ['id_receta' => $lentejasArroz, 'descripcion' => 'Sirve las lentejas sobre el arroz.', 'orden' => 3],

            //*******CENA*********/
            //1. Ensalada de quinoa con vegetales asados
            ['id_receta' => $ensaladaQuinoa, 'descripcion' => 'Cocina la quinoa y déjala enfriar.', 'orden' => 1],
            ['id_receta' => $ensaladaQuinoa, 'descripcion' => 'Asa los vegetales en el horno con aceite de oliva.', 'orden' => 2],
            ['id_receta' => $ensaladaQuinoa, 'descripcion' => 'Mezcla la quinoa con los vegetales asados y sirve.', 'orden' => 3],
            //2. Hamburguesas veganas caseras
            ['id_receta' => $hamburguesasVeganas, 'descripcion' => 'Tritura las lentejas cocidas y mézclalas con avena, zanahoria rallada, ajo y cebolla.', 'orden' => 1],
            ['id_receta' => $hamburguesasVeganas, 'descripcion' => 'Forma hamburguesas con la mezcla y cocínalas en una sartén con aceite.', 'orden' => 2],
            ['id_receta' => $hamburguesasVeganas, 'descripcion' => 'Sirve con pan o acompañamiento al gusto.', 'orden' => 3],
            //3. Salteado de tofu y vegetales
            ['id_receta' => $salteadoTofu, 'descripcion' => 'Corta el tofu y las verduras en trozos pequeños.', 'orden' => 1],
            ['id_receta' => $salteadoTofu, 'descripcion' => 'Saltea todo en una sartén con salsa de soja y ajo.', 'orden' => 2],
            ['id_receta' => $salteadoTofu, 'descripcion' => 'Cocina por 10 minutos hasta que esté dorado y tierno.', 'orden' => 3],
            //4. Sopa de calabaza
            ['id_receta' => $sopaCalabaza, 'descripcion' => 'Sofríe la cebolla y el ajo.', 'orden' => 1],
            ['id_receta' => $sopaCalabaza, 'descripcion' => 'Agrega la calabaza en trozos y suficiente agua para cubrir.', 'orden' => 2],
            ['id_receta' => $sopaCalabaza, 'descripcion' => 'Cocina hasta ablandar, licúa y añade leche vegetal.', 'orden' => 3],
            //5. Wraps de lechuga con garbanzos
            ['id_receta' => $wrapsGarbanzos, 'descripcion' => 'Tritura ligeramente los garbanzos con zanahoria rallada y tahini.', 'orden' => 1],
            ['id_receta' => $wrapsGarbanzos, 'descripcion' => 'Rellena hojas de lechuga con la mezcla.', 'orden' => 2],
            ['id_receta' => $wrapsGarbanzos, 'descripcion' => 'Sirve frío como snack o cena ligera.', 'orden' => 3],
            //6. Tarta de verduras
            ['id_receta' => $tartaVerduras, 'descripcion' => 'Saltea la espinaca y la zanahoria rallada.', 'orden' => 1],
            ['id_receta' => $tartaVerduras, 'descripcion' => 'Coloca las verduras sobre la masa de tarta y hornea por 25 minutos.', 'orden' => 2],
            ['id_receta' => $tartaVerduras, 'descripcion' => 'Sirve caliente o a temperatura ambiente.', 'orden' => 3],
            //7. Pasta integral con pesto de albahaca y nueces
            ['id_receta' => $pastaPestoNueces, 'descripcion' => 'Cocina la pasta integral al dente.', 'orden' => 1],
            ['id_receta' => $pastaPestoNueces, 'descripcion' => 'Licúa la albahaca, nueces y aceite de oliva para hacer el pesto.', 'orden' => 2],
            ['id_receta' => $pastaPestoNueces, 'descripcion' => 'Mezcla la pasta cocida con el pesto y sirve.', 'orden' => 3],

            //*******SNACK*********/
            //1. Hummus con zanahorias
            ['id_receta' => $hummusZanahorias, 'descripcion' => 'Lava y corta las zanahorias en bastones.', 'orden' => 1],
            ['id_receta' => $hummusZanahorias, 'descripcion' => 'Sirve el hummus en un recipiente acompañado de los bastones de zanahoria.', 'orden' => 2],
            //2. Frutas variadas
            ['id_receta' => $frutasVariadas, 'descripcion' => 'Lava y corta las frutas seleccionadas en trozos.', 'orden' => 1],
            ['id_receta' => $frutasVariadas, 'descripcion' => 'Colócalas en un bowl o plato y sirve.', 'orden' => 2],
            //3. Barritas de cereal veganas
            ['id_receta' => $barritasCereal, 'descripcion' => 'Mezcla avena, dátiles picados, mantequilla de maní y semillas.', 'orden' => 1],
            ['id_receta' => $barritasCereal, 'descripcion' => 'Presiona la mezcla en un molde y refrigera hasta que endurezca.', 'orden' => 2],
            ['id_receta' => $barritasCereal, 'descripcion' => 'Corta en barras y guarda refrigerado.', 'orden' => 3],
            //4. Fruta + Almendras
            ['id_receta' => $frutaAlmendras, 'descripcion' => 'Lava y corta la fruta si es necesario.', 'orden' => 1],
            ['id_receta' => $frutaAlmendras, 'descripcion' => 'Sirve la fruta junto a un puñado de almendras.', 'orden' => 2],
            //5. Chips de garbanzo
            ['id_receta' => $chipsGarbanzo, 'descripcion' => 'Seca bien los garbanzos cocidos y mézclalos con aceite de oliva y pimentón.', 'orden' => 1],
            ['id_receta' => $chipsGarbanzo, 'descripcion' => 'Hornea a 200°C durante 20-30 minutos hasta que estén crujientes.', 'orden' => 2],
            //6. Galletas veganas
            ['id_receta' => $galletasVeganas, 'descripcion' => 'Mezcla harina integral, leche vegetal y banana aplastada.', 'orden' => 1],
            ['id_receta' => $galletasVeganas, 'descripcion' => 'Forma pequeñas galletas y hornea a 180°C durante 15-20 minutos.', 'orden' => 2],
            //7. Chocolate amargo
            ['id_receta' => $chocolateAmargo, 'descripcion' => 'Corta el chocolate en trozos si es necesario.', 'orden' => 1],
            ['id_receta' => $chocolateAmargo, 'descripcion' => 'Sirve la porción deseada como snack.', 'orden' => 2],

            //::::::::::::::CLÁSICO
            //*******DESAYUNO*********/
            //1. Tostadas con mermelada  
            ['id_receta' => $tostadasConMermelada, 'descripcion' => 'Tuesta el pan hasta que esté dorado.', 'orden' => 1],
            ['id_receta' => $tostadasConMermelada, 'descripcion' => 'Unta la mermelada sobre las tostadas.', 'orden' => 2],
            ['id_receta' => $tostadasConMermelada, 'descripcion' => 'Sirve y acompaña con café o té.', 'orden' => 3],                      
            //2. Yogur con cereal
            ['id_receta' => $yogurConCereal, 'descripcion' => 'Sirve el yogur en un tazón.', 'orden' => 1],
            ['id_receta' => $yogurConCereal, 'descripcion' => 'Agrega el cereal por encima del yogur.', 'orden' => 2],
            ['id_receta' => $yogurConCereal, 'descripcion' => 'Disfruta como desayuno rápido.', 'orden' => 3],
            //3. Pan con manteca y café
            ['id_receta' => $panConMantecaYCafe, 'descripcion' => 'Tuesta el pan hasta que esté crujiente.', 'orden' => 1],
            ['id_receta' => $panConMantecaYCafe, 'descripcion' => 'Unta la manteca sobre el pan caliente.', 'orden' => 2],
            ['id_receta' => $panConMantecaYCafe, 'descripcion' => 'Prepara el café y acompaña las tostadas.', 'orden' => 3],
            //4. Huevos revueltos con pan
            ['id_receta' => $huevosRevueltosConPan, 'descripcion' => 'Bate los huevos en un bol.', 'orden' => 1],
            ['id_receta' => $huevosRevueltosConPan, 'descripcion' => 'Cocina los huevos en una sartén con un poco de aceite.', 'orden' => 2],
            ['id_receta' => $huevosRevueltosConPan, 'descripcion' => 'Sirve los huevos revueltos junto con el pan tostado.', 'orden' => 3],
            //5. Yogur bebible
            ['id_receta' => $yogurBebible, 'descripcion' => 'Agita bien el envase de yogur bebible.', 'orden' => 1],
            ['id_receta' => $yogurBebible, 'descripcion' => 'Sirve el yogur en un vaso y disfruta.', 'orden' => 2],
            //6. Avena cocida con canela
            ['id_receta' => $avenaConCanela, 'descripcion' => 'Cocina la avena con agua o leche hasta que esté suave.', 'orden' => 1],
            ['id_receta' => $avenaConCanela, 'descripcion' => 'Agrega la canela al gusto.', 'orden' => 2],
            ['id_receta' => $avenaConCanela, 'descripcion' => 'Sirve caliente y disfruta.', 'orden' => 3],
            //7. Mate con galletas
            ['id_receta' => $mateConGalletas, 'descripcion' => 'Prepara el mate como de costumbre.', 'orden' => 1],
            ['id_receta' => $mateConGalletas, 'descripcion' => 'Acompaña con galletas al gusto.', 'orden' => 2],

            //*******COMIDA*********/
            //1. Milanesas al horno
            ['id_receta' => $milanesasAlHorno, 'descripcion' => 'Precalienta el horno a 180°C.', 'orden' => 1],
            ['id_receta' => $milanesasAlHorno, 'descripcion' => 'Empaniza las milanesas y colócalas en una bandeja para hornear.', 'orden' => 2],
            ['id_receta' => $milanesasAlHorno, 'descripcion' => 'Hornea durante 30 minutos o hasta que estén doradas.', 'orden' => 3],
            //2. Guiso de lentejas
            ['id_receta' => $guisoDeLentejas, 'descripcion' => 'Sofríe cebolla y ajo en una cacerola con aceite.', 'orden' => 1],
            ['id_receta' => $guisoDeLentejas, 'descripcion' => 'Agrega las lentejas cocidas y agua, deja cocinar a fuego lento.', 'orden' => 2],
            ['id_receta' => $guisoDeLentejas, 'descripcion' => 'Agrega las especias y cocina hasta que los sabores se mezclen bien.', 'orden' => 3],
            //3. Pastel de papas
            ['id_receta' => $pastelDePapas, 'descripcion' => 'Hierve las papas hasta que estén suaves.', 'orden' => 1],
            ['id_receta' => $pastelDePapas, 'descripcion' => 'Haz un puré de papas con mantequilla y leche.', 'orden' => 2],
            ['id_receta' => $pastelDePapas, 'descripcion' => 'Coloca una capa de carne y una capa de puré en una fuente para horno.', 'orden' => 3],
            ['id_receta' => $pastelDePapas, 'descripcion' => 'Hornea durante 20 minutos a 180°C.', 'orden' => 4],
            //4. Arroz con pollo
            ['id_receta' => $arrozConPollo, 'descripcion' => 'Fría el pollo en una sartén hasta que esté dorado.', 'orden' => 1],
            ['id_receta' => $arrozConPollo, 'descripcion' => 'Agrega el arroz y el caldo de pollo.', 'orden' => 2],
            ['id_receta' => $arrozConPollo, 'descripcion' => 'Cocina a fuego lento hasta que el arroz esté cocido y el pollo esté bien hecho.', 'orden' => 3],
            //5. Fideos con salsa roja
            ['id_receta' => $fideosConSalsaRoja, 'descripcion' => 'Cocina los fideos según las instrucciones del paquete.', 'orden' => 1],
            ['id_receta' => $fideosConSalsaRoja, 'descripcion' => 'Prepara la salsa roja sofriendo cebolla, ajo y tomate.', 'orden' => 2],
            ['id_receta' => $fideosConSalsaRoja, 'descripcion' => 'Mezcla los fideos cocidos con la salsa roja y sirve.', 'orden' => 3],
            //6. Bife con papas
            ['id_receta' => $bifeConPapas, 'descripcion' => 'Cocina el bife a la parrilla o sartén.', 'orden' => 1],
            ['id_receta' => $bifeConPapas, 'descripcion' => 'Fría las papas hasta que estén doradas y crujientes.', 'orden' => 2],
            ['id_receta' => $bifeConPapas, 'descripcion' => 'Sirve el bife con las papas al costado.', 'orden' => 3],
            //7. Asado con ensalada
            ['id_receta' => $asadoConEnsalada, 'descripcion' => 'Prepara el asado a la parrilla.', 'orden' => 1],
            ['id_receta' => $asadoConEnsalada, 'descripcion' => 'Prepara una ensalada fresca con tomate, lechuga y cebolla.', 'orden' => 2],
            ['id_receta' => $asadoConEnsalada, 'descripcion' => 'Sirve el asado junto con la ensalada.', 'orden' => 3],

            //*******CENA*********/
            //1. Tarta de verduras
            ['id_receta' => $tartaDeVerduras, 'descripcion' => 'Precalienta el horno a 180°C.', 'orden' => 1],
            ['id_receta' => $tartaDeVerduras, 'descripcion' => 'Rellena la base de la tarta con las verduras cocidas.', 'orden' => 2],
            ['id_receta' => $tartaDeVerduras, 'descripcion' => 'Hornea durante 25 minutos o hasta que la tarta esté dorada.', 'orden' => 3],
            //2. Ensalada césar
            ['id_receta' => $ensaladaCesar, 'descripcion' => 'Lava y corta la lechuga.', 'orden' => 1],
            ['id_receta' => $ensaladaCesar, 'descripcion' => 'Agrega croutones y adereza con salsa césar.', 'orden' => 2],
            ['id_receta' => $ensaladaCesar, 'descripcion' => 'Sirve la ensalada fresca.', 'orden' => 3],
            //3. Empanadas de carne
            ['id_receta' => $empanadasDeCarne, 'descripcion' => 'Prepara el relleno con carne, cebolla y especias.', 'orden' => 1],
            ['id_receta' => $empanadasDeCarne, 'descripcion' => 'Rellena las tapas de empanadas y ciérralas.', 'orden' => 2],
            ['id_receta' => $empanadasDeCarne, 'descripcion' => 'Hornea las empanadas hasta que estén doradas.', 'orden' => 3],
            //4. Empanadas de verdura
            ['id_receta' => $empanadasDeVerdura, 'descripcion' => 'Prepara el relleno con espinacas y queso.', 'orden' => 1],
            ['id_receta' => $empanadasDeVerdura, 'descripcion' => 'Rellena las tapas de empanadas con la mezcla de verduras.', 'orden' => 2],
            ['id_receta' => $empanadasDeVerdura, 'descripcion' => 'Hornea las empanadas hasta que estén doradas.', 'orden' => 3],
            //5. Panqueques caseros
            ['id_receta' => $panquequesCaseros, 'descripcion' => 'Mezcla los ingredientes para la masa.', 'orden' => 1],
            ['id_receta' => $panquequesCaseros, 'descripcion' => 'Cocina los panqueques en una sartén caliente.', 'orden' => 2],
            ['id_receta' => $panquequesCaseros, 'descripcion' => 'Sirve los panqueques con miel o dulce de leche.', 'orden' => 3],
            //6. Helado casero
            ['id_receta' => $heladoCasero, 'descripcion' => 'Sirve una porción de helado previamente preparado o comprado.', 'orden' => 1],
            //7. Alfajor casero
            ['id_receta' => $alfajorCasero, 'descripcion' => 'Sirve un alfajor casero listo para comer.', 'orden' => 1],

            //*******SNACK*********/
            //1. Pan con queso
            ['id_receta' => $panConQueso, 'descripcion' => 'Corta rebanadas de pan.', 'orden' => 1],
            ['id_receta' => $panConQueso, 'descripcion' => 'Coloca las rebanadas de queso sobre el pan y sirve.', 'orden' => 2],
            //2. Galletas de arroz
            ['id_receta' => $galletasDeArroz, 'descripcion' => 'Abre el paquete de galletas de arroz.', 'orden' => 1],
            ['id_receta' => $galletasDeArroz, 'descripcion' => 'Sirve las galletas como snack.', 'orden' => 2],
            //3. Mate con galletas
            ['id_receta' => $mateConGalletas, 'descripcion' => 'Prepara el mate con agua caliente sin hervir.', 'orden' => 1],
            ['id_receta' => $mateConGalletas, 'descripcion' => 'Sirve junto a galletas.', 'orden' => 2],
            //4. Yogur bebible
            ['id_receta' => $yogurBebible, 'descripcion' => 'Agita bien el envase de yogur.', 'orden' => 1],
            ['id_receta' => $yogurBebible, 'descripcion' => 'Sirve frío o consume directamente.', 'orden' => 2],
            //5. Helado casero
            ['id_receta' => $heladoCasero, 'descripcion' => 'Sirve una porción de helado previamente preparado o comprado.', 'orden' => 1],
            //6. Alfajor casero
            ['id_receta' => $alfajorCasero, 'descripcion' => 'Sirve un alfajor casero listo para comer.', 'orden' => 1],
            //7. Panqueques caseros
            ['id_receta' => $panquequesCaseros, 'descripcion' => 'Calienta un panqueque previamente preparado.', 'orden' => 1],
            ['id_receta' => $panquequesCaseros, 'descripcion' => 'Sirve con dulce, mermelada o lo que prefieras.', 'orden' => 2],

            //::::::::::::::ALTO EN PROTEÍNAS
            //*******DESAYUNO*********/
            //1. Avena con clara de huevo
            ['id_receta' => $avenaConClaraDeHuevo, 'descripcion' => 'Cocina la avena con agua o leche.', 'orden' => 1],
            ['id_receta' => $avenaConClaraDeHuevo, 'descripcion' => 'Añade las claras de huevo y cocina hasta que estén integradas.', 'orden' => 2],
            ['id_receta' => $avenaConClaraDeHuevo, 'descripcion' => 'Sirve caliente y disfruta.', 'orden' => 3],
            //2. Omelette + batido proteico
            ['id_receta' => $omeletteConBatidoProteico, 'descripcion' => 'Bate los huevos y cocina en una sartén.', 'orden' => 1],
            ['id_receta' => $omeletteConBatidoProteico, 'descripcion' => 'Prepara el batido proteico con agua o leche y proteína en polvo.', 'orden' => 2],
            ['id_receta' => $omeletteConBatidoProteico, 'descripcion' => 'Sirve el omelette junto con el batido proteico.', 'orden' => 3],
            //3. Yogur griego + almendras
            ['id_receta' => $yogurGriegoConAlmendras, 'descripcion' => 'Sirve el yogur griego en un tazón.', 'orden' => 1],
            ['id_receta' => $yogurGriegoConAlmendras, 'descripcion' => 'Añade las almendras por encima del yogur.', 'orden' => 2],
            ['id_receta' => $yogurGriegoConAlmendras, 'descripcion' => 'Disfruta como desayuno saludable.', 'orden' => 3],
            //4. Queso cottage + fruta
            ['id_receta' => $quesoCottageConFruta, 'descripcion' => 'Sirve el queso cottage en un tazón.', 'orden' => 1],
            ['id_receta' => $quesoCottageConFruta, 'descripcion' => 'Añade la fruta picada al gusto.', 'orden' => 2],
            ['id_receta' => $quesoCottageConFruta, 'descripcion' => 'Disfruta de este desayuno fresco.', 'orden' => 3],
            //5. Pan integral + claras revueltas
            ['id_receta' => $panIntegralConClarasRevueltas, 'descripcion' => 'Tuesta el pan integral.', 'orden' => 1],
            ['id_receta' => $panIntegralConClarasRevueltas, 'descripcion' => 'Revuelca las claras de huevo en una sartén hasta que estén cocidas.', 'orden' => 2],
            ['id_receta' => $panIntegralConClarasRevueltas, 'descripcion' => 'Sirve las claras sobre las tostadas de pan integral.', 'orden' => 3],
            //6. Muffin de avena y claras
            ['id_receta' => $muffinDeAvenaYClaras, 'descripcion' => 'Mezcla avena, claras de huevo y polvo de hornear.', 'orden' => 1],
            ['id_receta' => $muffinDeAvenaYClaras, 'descripcion' => 'Hornea la mezcla a 180°C durante 20 minutos.', 'orden' => 2],
            ['id_receta' => $muffinDeAvenaYClaras, 'descripcion' => 'Deja enfriar y disfruta.', 'orden' => 3],
            //7. Yogur proteico
            ['id_receta' => $yogurProteico, 'descripcion' => 'Abre el envase de yogur proteico.', 'orden' => 1],
            ['id_receta' => $yogurProteico, 'descripcion' => 'Disfruta directamente o acompáñalo con fruta o granola.', 'orden' => 2],

            //*******COMIDA*********/
            //1. Pollo con arroz integral
            ['id_receta' => $polloConArrozIntegral, 'descripcion' => 'Cocina el arroz integral según las instrucciones del paquete.', 'orden' => 1],
            ['id_receta' => $polloConArrozIntegral, 'descripcion' => 'Cocina el pollo a la plancha o al horno.', 'orden' => 2],
            ['id_receta' => $polloConArrozIntegral, 'descripcion' => 'Sirve el pollo junto al arroz integral.', 'orden' => 3],
            //2. Tacos de pavo
            ['id_receta' => $tacosDePavo, 'descripcion' => 'Cocina la carne de pavo en una sartén.', 'orden' => 1],
            ['id_receta' => $tacosDePavo, 'descripcion' => 'Rellena las tortillas con la carne de pavo cocida.', 'orden' => 2],
            ['id_receta' => $tacosDePavo, 'descripcion' => 'Añade los toppings de tu elección como lechuga, tomate y salsa.', 'orden' => 3],
            //3. Pasta con atún
            ['id_receta' => $pastaConAtun, 'descripcion' => 'Cocina la pasta según las instrucciones del paquete.', 'orden' => 1],
            ['id_receta' => $pastaConAtun, 'descripcion' => 'Escurre el atún y mézclalo con la pasta cocida.', 'orden' => 2],
            ['id_receta' => $pastaConAtun, 'descripcion' => 'Agrega salsa al gusto y sirve.', 'orden' => 3],
            //4. Bife magro con verduras
            ['id_receta' => $bifeMagroConVerduras, 'descripcion' => 'Cocina el bife magro a la parrilla o sartén.', 'orden' => 1],
            ['id_receta' => $bifeMagroConVerduras, 'descripcion' => 'Saltea las verduras con un poco de aceite de oliva.', 'orden' => 2],
            ['id_receta' => $bifeMagroConVerduras, 'descripcion' => 'Sirve el bife junto con las verduras salteadas.', 'orden' => 3],
            //5. Ensalada proteica
            ['id_receta' => $ensaladaProteica, 'descripcion' => 'Prepara una ensalada con espinacas, garbanzos y pechuga de pollo.', 'orden' => 1],
            ['id_receta' => $ensaladaProteica, 'descripcion' => 'Añade aderezo al gusto y mezcla bien.', 'orden' => 2],
            ['id_receta' => $ensaladaProteica, 'descripcion' => 'Sirve como plato principal.', 'orden' => 3],
            //6. Pollo grillado con quinoa
            ['id_receta' => $polloGrilladoConQuinoa, 'descripcion' => 'Cocina el pollo a la parrilla o a la plancha.', 'orden' => 1],
            ['id_receta' => $polloGrilladoConQuinoa, 'descripcion' => 'Cocina la quinoa según las instrucciones del paquete.', 'orden' => 2],
            ['id_receta' => $polloGrilladoConQuinoa, 'descripcion' => 'Sirve el pollo junto con la quinoa cocida.', 'orden' => 3],
            //7. Pasta con carne molida
            ['id_receta' => $pastaConCarneMolida, 'descripcion' => 'Cocina la pasta según las instrucciones del paquete.', 'orden' => 1],
            ['id_receta' => $pastaConCarneMolida, 'descripcion' => 'Cocina la carne molida con cebolla y ajo.', 'orden' => 2],
            ['id_receta' => $pastaConCarneMolida, 'descripcion' => 'Mezcla la carne con la pasta cocida y sirve.', 'orden' => 3],

            //*******CENA*********/
            //1. Salmón con verduras
            ['id_receta' => $salmonConVerduras, 'descripcion' => 'Cocina el salmón a la parrilla o al horno.', 'orden' => 1],
            ['id_receta' => $salmonConVerduras, 'descripcion' => 'Saltea las verduras con aceite de oliva y ajo.', 'orden' => 2],
            ['id_receta' => $salmonConVerduras, 'descripcion' => 'Sirve el salmón junto con las verduras salteadas.', 'orden' => 3],
            //2. Tofu salteado + quinoa
            ['id_receta' => $tofuSalteadoConQuinoa, 'descripcion' => 'Saltea el tofu con salsa de soya y especias.', 'orden' => 1],
            ['id_receta' => $tofuSalteadoConQuinoa, 'descripcion' => 'Cocina la quinoa según las instrucciones del paquete.', 'orden' => 2],
            ['id_receta' => $tofuSalteadoConQuinoa, 'descripcion' => 'Sirve el tofu salteado junto con la quinoa cocida.', 'orden' => 3],
            //3. Lentejas con huevo cocido
            ['id_receta' => $lentejasConHuevoCocido, 'descripcion' => 'Cocina las lentejas hasta que estén tiernas.', 'orden' => 1],
            ['id_receta' => $lentejasConHuevoCocido, 'descripcion' => 'Cuece un huevo y pélalo.', 'orden' => 2],
            ['id_receta' => $lentejasConHuevoCocido, 'descripcion' => 'Sirve las lentejas con el huevo cocido encima.', 'orden' => 3],
            //4. Pescado blanco con puré
            ['id_receta' => $pescadoBlancoConPure, 'descripcion' => 'Cocina el pescado blanco a la parrilla o al horno.', 'orden' => 1],
            ['id_receta' => $pescadoBlancoConPure, 'descripcion' => 'Haz un puré de papas con mantequilla y leche.', 'orden' => 2],
            ['id_receta' => $pescadoBlancoConPure, 'descripcion' => 'Sirve el pescado con el puré al costado.', 'orden' => 3],
            //5. Hamburguesa de pavo
            ['id_receta' => $hamburguesaDePavo, 'descripcion' => 'Forma las hamburguesas de pavo y cocínelas a la parrilla o sartén.', 'orden' => 1],
            ['id_receta' => $hamburguesaDePavo, 'descripcion' => 'Sirve la hamburguesa con vegetales frescos en pan integral.', 'orden' => 2],
            //6. Ensalada de legumbres
            ['id_receta' => $ensaladaDeLegumbres, 'descripcion' => 'Cocina las legumbres y enfríalas.', 'orden' => 1],
            ['id_receta' => $ensaladaDeLegumbres, 'descripcion' => 'Mezcla con cebolla, tomate y adereza al gusto.', 'orden' => 2],
            ['id_receta' => $ensaladaDeLegumbres, 'descripcion' => 'Sirve fría como cena ligera.', 'orden' => 3],
            //7. Tortilla con jamón y queso
            ['id_receta' => $tortillaConJamonYQueso, 'descripcion' => 'Bate los huevos y cocina en una sartén.', 'orden' => 1],
            ['id_receta' => $tortillaConJamonYQueso, 'descripcion' => 'Añade el jamón y queso y dobla la tortilla.', 'orden' => 2],
            ['id_receta' => $tortillaConJamonYQueso, 'descripcion' => 'Sirve caliente.', 'orden' => 3],

            //*******SNACK*********/
            //1. Smoothie con proteína
            ['id_receta' => $smoothieConProteina, 'descripcion' => 'Coloca el polvo de proteína, frutas y agua o leche en una licuadora.', 'orden' => 1],
            ['id_receta' => $smoothieConProteina, 'descripcion' => 'Licúa todo hasta obtener una mezcla suave.', 'orden' => 2],
            ['id_receta' => $smoothieConProteina, 'descripcion' => 'Sirve el smoothie en un vaso y disfruta.', 'orden' => 3],
            //2. Huevo duro + nueces
            ['id_receta' => $huevoDuroConNueces, 'descripcion' => 'Hierve el huevo hasta que esté completamente cocido.', 'orden' => 1],
            ['id_receta' => $huevoDuroConNueces, 'descripcion' => 'Pela el huevo y acompáñalo con un puñado de nueces.', 'orden' => 2],
            ['id_receta' => $huevoDuroConNueces, 'descripcion' => 'Disfruta como snack saludable.', 'orden' => 3],
            //3. Tostadas + mantequilla de maní
            ['id_receta' => $tostadasConMantequillaDeMani, 'descripcion' => 'Tuesta las rebanadas de pan integral.', 'orden' => 1],
            ['id_receta' => $tostadasConMantequillaDeMani, 'descripcion' => 'Unta una capa de mantequilla de maní en las tostadas.', 'orden' => 2],
            ['id_receta' => $tostadasConMantequillaDeMani, 'descripcion' => 'Sirve y disfruta.', 'orden' => 3],
            //4. Barra proteica
            ['id_receta' => $barraProteica, 'descripcion' => 'Prepara la mezcla con avena, proteína en polvo, y miel.', 'orden' => 1],
            ['id_receta' => $barraProteica, 'descripcion' => 'Forma las barras y refrigera hasta que estén firmes.', 'orden' => 2],
            ['id_receta' => $barraProteica, 'descripcion' => 'Corta en porciones y disfruta como snack.', 'orden' => 3],
            //5. Batido + banana
            ['id_receta' => $batidoConBanana, 'descripcion' => 'Mezcla la proteína en polvo con agua o leche en una licuadora.', 'orden' => 1],
            ['id_receta' => $batidoConBanana, 'descripcion' => 'Añade la banana y licúa hasta obtener una mezcla suave.', 'orden' => 2],
            ['id_receta' => $batidoConBanana, 'descripcion' => 'Sirve el batido en un vaso y disfruta.', 'orden' => 3],
            //6. Hummus + tostadas
            ['id_receta' => $hummusConTostadas, 'descripcion' => 'Prepara o compra hummus.', 'orden' => 1],
            ['id_receta' => $hummusConTostadas, 'descripcion' => 'Tuesta las rebanadas de pan integral.', 'orden' => 2],
            ['id_receta' => $hummusConTostadas, 'descripcion' => 'Sirve el hummus con las tostadas como snack.', 'orden' => 3],
            //7. Bife con papas
            ['id_receta' => $bifeConPapas, 'descripcion' => 'Cocina el bife a la parrilla o en sartén.', 'orden' => 1],
            ['id_receta' => $bifeConPapas, 'descripcion' => 'Cocina las papas al gusto (hervidas o asadas).', 'orden' => 2],
            ['id_receta' => $bifeConPapas, 'descripcion' => 'Sirve el bife con las papas y disfruta como un snack abundante.', 'orden' => 3],

            //::::::::::::::EXPRESS
            //*******DESAYUNO*********/
            //1. Avena instantánea
            ['id_receta' => $avenaInstantanea, 'descripcion' => 'Coloca la avena y el agua o leche en un recipiente.', 'orden' => 1],
            ['id_receta' => $avenaInstantanea, 'descripcion' => 'Cocina la avena en el microondas o en la estufa por unos minutos.', 'orden' => 2],
            ['id_receta' => $avenaInstantanea, 'descripcion' => 'Sirve y añade frutas o miel al gusto.', 'orden' => 3],
            //2. Yogur con granola
            ['id_receta' => $yogurConGranola, 'descripcion' => 'Sirve una porción de yogur en un tazón.', 'orden' => 1],
            ['id_receta' => $yogurConGranola, 'descripcion' => 'Añade granola por encima del yogur.', 'orden' => 2],
            ['id_receta' => $yogurConGranola, 'descripcion' => 'Disfruta como desayuno o snack.', 'orden' => 3],
            //3. Smoothie de banana
            ['id_receta' => $smoothieDeBanana, 'descripcion' => 'Coloca una banana, leche (o agua) y hielo en la licuadora.', 'orden' => 1],
            ['id_receta' => $smoothieDeBanana, 'descripcion' => 'Licúa hasta obtener una mezcla suave.', 'orden' => 2],
            ['id_receta' => $smoothieDeBanana, 'descripcion' => 'Sirve el smoothie en un vaso y disfruta.', 'orden' => 3],
            //4. Muffin y café
            ['id_receta' => $muffinYCafe, 'descripcion' => 'Prepara los muffins según la receta o usando una mezcla lista.', 'orden' => 1],
            ['id_receta' => $muffinYCafe, 'descripcion' => 'Acompaña con una taza de café.', 'orden' => 2],
            ['id_receta' => $muffinYCafe, 'descripcion' => 'Disfruta tu desayuno con el muffin y café.', 'orden' => 3],
            //5. Galletas integrales
            ['id_receta' => $galletasIntegrales, 'descripcion' => 'Prepara la masa de galletas integrales.', 'orden' => 1],
            ['id_receta' => $galletasIntegrales, 'descripcion' => 'Forma las galletas y colócalas en una bandeja para hornear.', 'orden' => 2],
            ['id_receta' => $galletasIntegrales, 'descripcion' => 'Hornea las galletas hasta que estén doradas y crujientes.', 'orden' => 3],
            //6. Yogur bebible
            ['id_receta' => $yogurBebible, 'descripcion' => 'Compra o prepara el yogur bebible según la receta.', 'orden' => 1],
            ['id_receta' => $yogurBebible, 'descripcion' => 'Sirve en un vaso o botella y disfruta.', 'orden' => 2],
            //7. Omelette de microondas
            ['id_receta' => $omeletteDeMicroondas, 'descripcion' => 'Bate los huevos con un poco de sal y pimienta.', 'orden' => 1],
            ['id_receta' => $omeletteDeMicroondas, 'descripcion' => 'Vierte la mezcla de huevos en un recipiente apto para microondas.', 'orden' => 2],
            ['id_receta' => $omeletteDeMicroondas, 'descripcion' => 'Cocina en el microondas durante 1-2 minutos, revisa la consistencia y ajusta.', 'orden' => 3],
            ['id_receta' => $omeletteDeMicroondas, 'descripcion' => 'Sirve con un poco de queso o tus ingredientes favoritos.', 'orden' => 4],

            //*******COMIDA*********/
            //1. Wrap de atún
            ['id_receta' => $wrapDeAtun, 'descripcion' => 'Coloca atún, lechuga, tomate y mayonesa en una tortilla.', 'orden' => 1],
            ['id_receta' => $wrapDeAtun, 'descripcion' => 'Enrolla la tortilla y corta a la mitad.', 'orden' => 2],
            ['id_receta' => $wrapDeAtun, 'descripcion' => 'Sirve y disfruta el wrap de atún.', 'orden' => 3],
            //2. Sándwich de pollo
            ['id_receta' => $sandwichDePollo, 'descripcion' => 'Coloca pechuga de pollo a la parrilla en pan integral.', 'orden' => 1],
            ['id_receta' => $sandwichDePollo, 'descripcion' => 'Añade lechuga, tomate y mayonesa si lo deseas.', 'orden' => 2],
            ['id_receta' => $sandwichDePollo, 'descripcion' => 'Cierra el sándwich y disfruta.', 'orden' => 3],
            //3. Ensalada de atún
            ['id_receta' => $ensaladaDeAtun, 'descripcion' => 'Mezcla atún con lechuga, tomate y cebolla.', 'orden' => 1],
            ['id_receta' => $ensaladaDeAtun, 'descripcion' => 'Añade aderezo al gusto y mezcla bien.', 'orden' => 2],
            ['id_receta' => $ensaladaDeAtun, 'descripcion' => 'Sirve y disfruta.', 'orden' => 3],
            //4. Hamburguesa vegetariana
            ['id_receta' => $hamburguesaVegetariana, 'descripcion' => 'Prepara la hamburguesa vegetariana a base de legumbres o tofu.', 'orden' => 1],
            ['id_receta' => $hamburguesaVegetariana, 'descripcion' => 'Colócala en un pan integral y añade tus ingredientes favoritos.', 'orden' => 2],
            ['id_receta' => $hamburguesaVegetariana, 'descripcion' => 'Sirve y disfruta de la hamburguesa vegetariana.', 'orden' => 3],
            //5. Arroz con verduras
            ['id_receta' => $arrozConVerduras, 'descripcion' => 'Cocina el arroz y saltea las verduras en una sartén.', 'orden' => 1],
            ['id_receta' => $arrozConVerduras, 'descripcion' => 'Mezcla el arroz con las verduras salteadas.', 'orden' => 2],
            ['id_receta' => $arrozConVerduras, 'descripcion' => 'Sirve el arroz con verduras como comida ligera.', 'orden' => 3],
            //6. Wrap de jamón y queso
            ['id_receta' => $wrapDeJamonYQueso, 'descripcion' => 'Coloca una rebanada de jamón y una de queso sobre una tortilla.', 'orden' => 1],
            ['id_receta' => $wrapDeJamonYQueso, 'descripcion' => 'Enrolla la tortilla y corta en porciones.', 'orden' => 2],
            ['id_receta' => $wrapDeJamonYQueso, 'descripcion' => 'Sirve y disfruta.', 'orden' => 3],
            //7. Ensalada de pasta fría
            ['id_receta' => $ensaladaDePastaFria, 'descripcion' => 'Cocina la pasta y deja enfriar.', 'orden' => 1],
            ['id_receta' => $ensaladaDePastaFria, 'descripcion' => 'Mezcla la pasta con tomate, pepino, aceitunas y aderezo.', 'orden' => 2],
            ['id_receta' => $ensaladaDePastaFria, 'descripcion' => 'Sirve y disfruta como comida fresca.', 'orden' => 3],

            //*******CENA*********/
            //1. Pollo grillado con ensalada  
            ['id_receta' => $polloGrilladoConEnsalada, 'descripcion' => 'Cocina el pollo en la parrilla o sartén.', 'orden' => 1],
            ['id_receta' => $polloGrilladoConEnsalada, 'descripcion' => 'Prepara una ensalada con lechuga, tomate y cebolla.', 'orden' => 2],
            ['id_receta' => $polloGrilladoConEnsalada, 'descripcion' => 'Sirve el pollo con la ensalada y disfruta.', 'orden' => 3],          
            //2. Lentejas con arroz
            ['id_receta' => $lentejasConArroz, 'descripcion' => 'Cocina las lentejas y el arroz por separado.', 'orden' => 1],
            ['id_receta' => $lentejasConArroz, 'descripcion' => 'Mezcla las lentejas cocidas con el arroz.', 'orden' => 2],
            ['id_receta' => $lentejasConArroz, 'descripcion' => 'Sirve y disfruta como cena nutritiva.', 'orden' => 3],
            //3. Ensalada de huevo
            ['id_receta' => $ensaladaDeHuevo, 'descripcion' => 'Hierve los huevos y córtalos en trozos.', 'orden' => 1],
            ['id_receta' => $ensaladaDeHuevo, 'descripcion' => 'Mezcla los huevos con lechuga, tomate y cebolla.', 'orden' => 2],
            ['id_receta' => $ensaladaDeHuevo, 'descripcion' => 'Añade un poco de aderezo y sirve.', 'orden' => 3],
            //4. Pollo al horno y batatas
            ['id_receta' => $polloAlHornoYBatatas, 'descripcion' => 'Hornea el pollo y las batatas en el horno.', 'orden' => 1],
            ['id_receta' => $polloAlHornoYBatatas, 'descripcion' => 'Sirve el pollo con las batatas y disfruta.', 'orden' => 2],
            //5. Omelette con queso
            ['id_receta' => $omeletteConQueso, 'descripcion' => 'Bate los huevos y cocina en sartén.', 'orden' => 1],
            ['id_receta' => $omeletteConQueso, 'descripcion' => 'Añade queso rallado al omelette antes de doblarlo.', 'orden' => 2],
            ['id_receta' => $omeletteConQueso, 'descripcion' => 'Sirve y disfruta.', 'orden' => 3],
            //6. Sopa express + tostadas
            ['id_receta' => $sopaExpressConTostadas, 'descripcion' => 'Prepara una sopa rápida según las instrucciones del paquete.', 'orden' => 1],
            ['id_receta' => $sopaExpressConTostadas, 'descripcion' => 'Acompaña con tostadas de pan integral.', 'orden' => 2],
            ['id_receta' => $sopaExpressConTostadas, 'descripcion' => 'Sirve y disfruta.', 'orden' => 3],
            //7. Sandwich integral
            ['id_receta' => $sandwichIntegral, 'descripcion' => 'Prepara el sándwich con pan integral, jamón y queso.', 'orden' => 1],
            ['id_receta' => $sandwichIntegral, 'descripcion' => 'Sirve y disfruta como cena ligera.', 'orden' => 2],

            //*******SNACK*********/
            //1. Barrita de cereal
            ['id_receta' => $barritaDeCereal, 'descripcion' => 'Prepara la mezcla de avena, miel y frutos secos.', 'orden' => 1],
            ['id_receta' => $barritaDeCereal, 'descripcion' => 'Forma las barritas y hornea hasta que estén firmes.', 'orden' => 2],
            ['id_receta' => $barritaDeCereal, 'descripcion' => 'Deja enfriar y disfruta.', 'orden' => 3],
            //2. Pan con mantequilla de maní
            ['id_receta' => $panConMantequillaDeMani, 'descripcion' => 'Tuesta el pan y unta una capa de mantequilla de maní.', 'orden' => 1],
            ['id_receta' => $panConMantequillaDeMani, 'descripcion' => 'Sirve y disfruta como snack.', 'orden' => 2],
            //3. Fruta picada
            ['id_receta' => $frutaPicada, 'descripcion' => 'Corta la fruta de temporada en trozos pequeños.', 'orden' => 1],
            ['id_receta' => $frutaPicada, 'descripcion' => 'Sirve y disfruta.', 'orden' => 2],
            //4. Mix de frutos secos
            ['id_receta' => $mixDeFrutosSecos, 'descripcion' => 'Prepara un mix de frutos secos como nueces, almendras y pasas.', 'orden' => 1],
            ['id_receta' => $mixDeFrutosSecos, 'descripcion' => 'Sirve como snack saludable.', 'orden' => 2],
            //5. Gelatina light
            ['id_receta' => $gelatinaLight, 'descripcion' => 'Prepara la gelatina según las instrucciones del paquete.', 'orden' => 1],
            ['id_receta' => $gelatinaLight, 'descripcion' => 'Deja enfriar y sirve como postre o snack.', 'orden' => 2],
            //6. Helado de yogur
            ['id_receta' => $heladoDeYogur, 'descripcion' => 'Prepara helado de yogur con frutas o sin azúcar.', 'orden' => 1],
            ['id_receta' => $heladoDeYogur, 'descripcion' => 'Sirve y disfruta como snack o postre.', 'orden' => 2],
            //7. Tostadas con aguacate
            ['id_receta' => $tostadasConAguacate, 'descripcion' => 'Tuesta las rebanadas de pan integral.', 'orden' => 1],
            ['id_receta' => $tostadasConAguacate, 'descripcion' => 'Unta aguacate en las tostadas y agrega sal y pimienta.', 'orden' => 2],
            ['id_receta' => $tostadasConAguacate, 'descripcion' => 'Disfruta como snack saludable.', 'orden' => 3],

        ]);
    }
}
