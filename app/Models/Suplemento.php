<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplemento extends Model
{
    protected $primaryKey = 'id_suplemento';

    protected $fillable = [
        'nombre',
        'categoria_id',
        'descripcion',
        'usa_calculadora',
        'calculadora_url',
    ];

    public function categoria()
    {
        //un suplemento pertenece a una categoría
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id_categoria');
    }
}
