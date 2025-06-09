<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes'; //especifica que la tabla en la bbdd es esa
    protected $primaryKey = 'id_ingrediente';

    public function recetas()
    {
        //una receta tiene muchos ingredientes, y un ingrediente está en muchas recetas
        //es la tabla pivote que relaciona ambas 
        return $this->belongsToMany(Receta::class, 'receta_ingrediente', 'id_ingrediente', 'id_receta')
            ->withPivot('cantidad', 'unidad_medida')
            ->withTimestamps();
    }

    public function canastas()
    {
        return $this->belongsToMany(Canasta::class, 'canasta_ingrediente')
            ->withPivot('cantidad', 'unidad_base', 'subtotal')
            ->withTimestamps();
    }
}
