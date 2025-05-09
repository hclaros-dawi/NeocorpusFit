<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'nombre', 
        'calorias', 
        'proteinas', 
        'categoria_id'
    ];
    
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    
    public function recetas() {
        return $this->belongsToMany(Receta::class, 'receta_menu', 'id_menu', 'id_receta')
                     ->withPivot('dia_semana', 'tipo_comida', 'enlace_receta')
                    ->withTimestamps();
    }
    
    public function canastas() {
        return $this->hasMany(Canasta::class, 'menu_id');
    }
    
}

