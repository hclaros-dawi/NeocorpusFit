<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Canasta extends Model
{
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    
    public function menu() {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
    
    public function ingredientes() {
        return $this->belongsToMany(Ingrediente::class, 'canasta_ingrediente')
                    ->using(CanastaIngrediente::class)
                    ->withPivot('cantidad', 'unidad_base', 'precio_total')
                    ->withTimestamps();
    }
    
}
