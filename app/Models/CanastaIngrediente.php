<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CanastaIngrediente extends Pivot
{
    protected $fillable = [
        'id_canasta',        
        'id_ingrediente',    
        'cantidad',
        'unidad_base',
        'subtotal'
    ];
}
