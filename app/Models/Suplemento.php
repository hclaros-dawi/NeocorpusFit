<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Suplemento extends Model
{
    use HasFactory;

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
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id_categoria');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'item_id', 'id_suplemento')
            ->where('type', 'suplemento');
    }
}
