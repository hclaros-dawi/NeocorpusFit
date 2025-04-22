<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasoReceta extends Model
{
    public function receta() {
        return $this->belongsTo(Receta::class, 'id_receta');
    }
    
}
