<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    
    public function rutinas() {
        return $this->belongsToMany(Rutina::class, 'rutina_ejercicio')
                    ->using(RutinaEjercicio::class)
                    ->withPivot('dia_entreno', 'repeticiones', 'series', 'orden')
                    ->withTimestamps();
    }
    
}
