<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Suplemento;

class SuplementoSeeder extends Seeder
{

    public function run(): void
    {
         $proteinas = Categoria::where('nombre', 'Proteínas')->first();
         $creatinas = Categoria::where('nombre', 'Creatinas')->first();
         $vitaminas = Categoria::where('nombre', 'Vitaminas y minerales')->first();
         $aminoacidos = Categoria::where('nombre', 'Aminoácidos')->first();
         $preentreno = Categoria::where('nombre', 'Pre-entrenos')->first();
 
         if (!$proteinas || !$creatinas || !$vitaminas || !$aminoacidos || !$preentreno) {
            return;
        }

              //PROTEÍNAS
                Suplemento::create([
                    'nombre' => 'Proteína Whey Concentrada',
                    'categoria_id' => $proteinas->id_categoria,
                    'descripcion' => 'Proteína de suero con absorción rápida, ideal para después del entrenamiento.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);

                Suplemento::create([
                    'nombre' => 'Proteína Whey Aislada',
                    'categoria_id' => $proteinas->id_categoria,
                    'descripcion' => 'Versión más pura y de rápida digestión, con bajo contenido de lactosa.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);

                Suplemento::create([
                    'nombre' => 'Caseína',
                    'categoria_id' => $proteinas->id_categoria,
                    'descripcion' => 'Proteína de digestión lenta, ideal antes de dormir para recuperación muscular.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Proteína Vegana',
                    'categoria_id' => $proteinas->id_categoria,
                    'descripcion' => 'Mezcla de proteínas vegetales como arroz, arveja y chía. Apta para dietas veganas.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);

                Suplemento::create([
                    'nombre' => 'Gainer',
                    'categoria_id' => $proteinas->id_categoria,
                    'descripcion' => 'Suplemento alto en calorías para ganar masa muscular, con mezcla de proteínas y carbohidratos.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Proteína Hidrolizada',
                    'categoria_id' => $proteinas->id_categoria,
                    'descripcion' => 'Whey pre-digerida para una absorción ultra rápida, recomendada para entrenamientos intensos.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);
 
              //CREATINAS
                Suplemento::create([
                    'nombre' => 'Creatina Monohidratada',
                    'categoria_id' => $creatinas->id_categoria,
                    'descripcion' => 'La forma más estudiada y efectiva. Aumenta fuerza y rendimiento.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Creatina Micronizada',
                    'categoria_id' => $creatinas->id_categoria,
                    'descripcion' => 'Con partículas más pequeñas para mejor absorción.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Creatina HCL',
                    'categoria_id' => $creatinas->id_categoria,
                    'descripcion' => 'Más soluble en agua, ideal si tenés molestias digestivas con la monohidratada.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Creatina Kre-Alkalyn',
                    'categoria_id' => $creatinas->id_categoria,
                    'descripcion' => 'Variante con pH modificado que promete mayor estabilidad y absorción.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);
                Suplemento::create([
                    'nombre' => 'Creatina en Cápsulas',
                    'categoria_id' => $creatinas->id_categoria,
                    'descripcion' => 'Misma eficacia en formato más práctico para consumir.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Creatina + Beta-Alanina',
                    'categoria_id' => $creatinas->id_categoria,
                    'descripcion' => 'Fórmula combinada para mejorar el rendimiento muscular y reducir fatiga.',
                    'usa_calculadora' => true,
                    'calculadora_url' => null,
                ]);
 
              //VITAMINAS Y MINERALES
               Suplemento::create([
                'nombre' => 'Multivitamínico Complejo',
                'categoria_id' => $vitaminas->id_categoria,
                'descripcion' => 'Vitaminas y minerales esenciales para el día a día.',
                'usa_calculadora' => false,
                'calculadora_url' => null,
                ]);
            
               Suplemento::create([
                'nombre' => 'Vitamina D3',
                'categoria_id' => $vitaminas->id_categoria,
                'descripcion' => 'Contribuye a la salud ósea, inmunidad y bienestar general.',
                'usa_calculadora' => false,
                'calculadora_url' => null,
                ]);

                Suplemento::create([
                    'nombre' => 'Vitamina B12',
                    'categoria_id' => $vitaminas->id_categoria,
                    'descripcion' => 'Clave para energía y sistema nervioso, ideal para veganos.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Magnesio Citrato',
                    'categoria_id' => $vitaminas->id_categoria,
                    'descripcion' => 'Reduce calambres y mejora el descanso.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);

                Suplemento::create([
                    'nombre' => 'Zinc + Vitamina C',
                    'categoria_id' => $vitaminas->id_categoria,
                    'descripcion' => 'Refuerza defensas en épocas de resfríos o estrés.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Omega 3 (EPA/DHA)',
                    'categoria_id' => $vitaminas->id_categoria,
                    'descripcion' => 'Esenciales para salud cardiovascular, cerebro e inflamación.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);

              //AMINOÁCIDOS
                Suplemento::create([
                    'nombre' => 'BCAA 2:1:1',
                    'categoria_id' => $aminoacidos->id_categoria,
                    'descripcion' => 'Aminoácidos de cadena ramificada que ayudan a la recuperación muscular y disminuyen la fatiga.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Glutamina',
                    'categoria_id' => $aminoacidos->id_categoria,
                    'descripcion' => 'Aminoácido condicional que apoya la salud intestinal y la recuperación muscular.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);

                Suplemento::create([
                    'nombre' => 'L-Arginina',
                    'categoria_id' => $aminoacidos->id_categoria,
                    'descripcion' => 'Precursor del óxido nítrico, mejora la vasodilatación y el rendimiento.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Beta-Alanina',
                    'categoria_id' => $aminoacidos->id_categoria,
                    'descripcion' => 'Reduce la fatiga muscular aumentando los niveles de carnosina.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);

                Suplemento::create([
                    'nombre' => 'Taurina',
                    'categoria_id' => $aminoacidos->id_categoria,
                    'descripcion' => 'Ayuda en la función muscular y la hidratación celular.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'L-Ornitina',
                    'categoria_id' => $aminoacidos->id_categoria,
                    'descripcion' => 'Apoya la detoxificación y puede reducir el cansancio físico.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);

              //PRE-ENTRENO
                Suplemento::create([
                    'nombre' => 'Pre-Entreno Cafeína Boost',
                    'categoria_id' => $preentreno->id_categoria,
                    'descripcion' => 'Fórmula energizante con 200 mg de cafeína, ideal para entrenamientos intensos.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Pre-Entreno Sin Estimulantes',
                    'categoria_id' => $preentreno->id_categoria,
                    'descripcion' => 'Aporta energía y enfoque sin cafeína, ideal para entrenar de noche.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);

                Suplemento::create([
                    'nombre' => 'Pre-Entreno Power Pump',
                    'categoria_id' => $preentreno->id_categoria,
                    'descripcion' => 'Contiene beta-alanina y citrulina para mejorar la resistencia y congestión muscular.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Pre-Entreno Natural Focus',
                    'categoria_id' => $preentreno->id_categoria,
                    'descripcion' => 'Hecho con ingredientes naturales como yerba mate y extracto de remolacha.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);

                Suplemento::create([
                    'nombre' => 'Pre-Entreno Creatina Mix',
                    'categoria_id' => $preentreno->id_categoria,
                    'descripcion' => 'Combina energía y fuerza con 3 g de creatina por dosis.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);
                
                Suplemento::create([
                    'nombre' => 'Pre-Entreno Woman Fit',
                    'categoria_id' => $preentreno->id_categoria,
                    'descripcion' => 'Fórmula adaptada con dosis moderadas de cafeína, L-teanina y vitaminas B.',
                    'usa_calculadora' => false,
                    'calculadora_url' => null,
                ]);
            }
        }
