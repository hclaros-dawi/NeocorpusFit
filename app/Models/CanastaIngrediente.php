<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CanastaIngrediente extends Pivot
{
    protected $fillable = [ //para asignar masivamente ::create
        'id_canasta',
        'id_ingrediente',
        'cantidad',
        'unidad_base',
        'subtotal'
    ];
}
