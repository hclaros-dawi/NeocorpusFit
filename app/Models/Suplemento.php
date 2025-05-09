<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplemento extends Model
{
    protected $fillable = [
        'nombre',
        'categoria_id',
        'descripcion',
        'usa_calculadora',
        'calculadora_url',
    ];
    
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id_categoria');
    }
}
