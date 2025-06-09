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
        //una receta pertenece a una categoría
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function menus()
    {
        //una receta pertenece a muchos menús
        return $this->belongsToMany(Menu::class, 'receta_menu', 'id_receta', 'id_menu')
            ->withPivot('orden', 'dia_semana', 'tipo_comida', 'enlace_receta')
            ->withTimestamps();
    }

    public function ingredientes()
    {
        //una receta tiene muchos ingredientes
        return $this->belongsToMany(Ingrediente::class, 'receta_ingrediente', 'id_receta', 'id_ingrediente')
            ->withPivot('cantidad', 'unidad_medida')
            ->withTimestamps();
    }

    public function pasos()
    {
        //una receta tiene muchos pasos
        return $this->hasMany(PasoReceta::class, 'id_receta', 'id_receta')
            ->orderBy('orden');
    }

    public function favorites()
    {
        //una receta tiene muchos favoritos
        return $this->hasMany(Favorite::class, 'item_id', 'id_receta')
            ->where('type', 'receta');
    }

    public function getTotalCaloriasAttribute()
    {
        /*Calcula el total de calorías de la receta sumando las calorías de cada ingrediente
        multiplicadas por su cantidad correspondiente desde la tabla intermedia
        */
        return $this->ingredientes->sum(function ($ingrediente) {
            return ($ingrediente->calorias ?? 0) * ($ingrediente->pivot->cantidad ?? 1);
        });
    }

    public function getTotalProteinasAttribute()
    {
        /*Calcula el total de proteínas de la receta sumando las proteínas de cada ingrediente
        multiplicadas por su cantidad correspondiente desde la tabla intermedia
        */
        return $this->ingredientes->sum(function ($ingrediente) {
            return ($ingrediente->proteinas ?? 0) * ($ingrediente->pivot->cantidad ?? 1);
        });
    }
}
