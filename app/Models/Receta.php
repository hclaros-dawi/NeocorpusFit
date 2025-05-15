<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{

    protected $primaryKey = 'id_receta';

    protected $fillable = [
        'nombre',
        'categoria_id',
        'tiempo_preparacion',
        'imagen_url',
        'dificultad'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'receta_menu', 'id_receta', 'id_menu')
            ->withPivot('orden', 'dia_semana', 'tipo_comida', 'enlace_receta')
            ->withTimestamps();
    }

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class, 'receta_ingrediente', 'id_receta', 'id_ingrediente')
            ->withPivot('cantidad', 'unidad_medida')
            ->withTimestamps();
    }

    public function pasos()
    {
        return $this->hasMany(PasoReceta::class, 'id_receta', 'id_receta')
            ->orderBy('orden');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'item_id', 'id_receta')
            ->where('type', 'receta');
    }
}
