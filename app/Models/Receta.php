<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{

    protected $fillable = [
        'nombre',
        'categoria_id',
        'tiempo_preparacion',
        'imagen_url',
        'dificultad'
    ];

    protected $primaryKey = 'id_receta';

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    
    public function menus() {
        return $this->belongsToMany(Menu::class, 'receta_menu', 'id_receta', 'id_menu')
                     ->withPivot('orden', 'dia_semana', 'tipo_comida', 'enlace_receta')
                    ->withTimestamps(); 
    }
    
    public function ingredientes() {
        return $this->belongsToMany(Ingrediente::class, 'receta_ingrediente', 'id_receta', 'id_ingrediente')
                     ->withPivot('cantidad', 'unidad_medida')
                    ->withTimestamps(); 
    }
    
    public function pasos() {
        return $this->hasMany(PasoReceta::class, 'id_receta')
        ->orderBy('orden'); 
    }
    
}
