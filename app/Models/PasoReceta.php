<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasoReceta extends Model
{

    protected $table = 'pasos_receta';

    protected $primaryKey = 'id_paso';

    public function receta()
    {
        return $this->belongsTo(Receta::class, 'id_receta');
    }
}
