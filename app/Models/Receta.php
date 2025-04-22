<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    
    public function menus() {
        return $this->belongsToMany(Menu::class, 'receta_menu')
                    ->using(RecetaMenu::class)
                    ->withPivot('orden', 'dia_semana', 'tipo_comida', 'enlace_receta')
                    ->withTimestamps(); 
    }
    
    public function ingredientes() {
        return $this->belongsToMany(Ingrediente::class, 'receta_ingrediente')
                    ->using(RecetaIngrediente::class)
                    ->withPivot('cantidad', 'unidad_medida')
                    ->withTimestamps(); 
    }
    
    public function pasos() {
        return $this->hasMany(PasoReceta::class, 'id_receta');
    }
    
}
