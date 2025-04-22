<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    public function recetas() {
        return $this->belongsToMany(Receta::class, 'receta_ingrediente')
                    ->using(RecetaIngrediente::class)
                    ->withPivot('cantidad', 'unidad_medida')
                    ->withTimestamps();
    }
    
    public function canastas() {
        return $this->belongsToMany(Canasta::class, 'canasta_ingrediente')
                    ->using(CanastaIngrediente::class)
                    ->withPivot('cantidad', 'unidad_base', 'precio_total')
                    ->withTimestamps();
    }
    
}
