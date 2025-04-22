<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    
    public function ejercicios() {
        return $this->belongsToMany(Ejercicio::class, 'rutina_ejercicio')
                    ->using(RutinaEjercicio::class)
                    ->withPivot('dia_entreno', 'repeticiones', 'series', 'orden')
                    ->withTimestamps();
    }
    
}


