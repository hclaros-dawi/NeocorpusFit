<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecetaMenu extends Model
{
    protected $table = 'receta_menu';

    protected $fillable = [
        'id_menu',
        'id_receta',
        'orden',
        'dia_semana',
        'tipo_comida',
    ];
}
