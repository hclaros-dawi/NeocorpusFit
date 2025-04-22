<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function suplementos() {
        return $this->hasMany(Suplemento::class, 'categoria_id');
    }

    public function menus() {
        return $this->hasMany(Menu::class, 'categoria_id');
    }

    public function recetas() {
        return $this->hasMany(Receta::class, 'categoria_id');
    }

    public function canastas() {
        return $this->hasMany(Canasta::class, 'categoria_id');
    }

    public function rutinas() {
        return $this->hasMany(Rutina::class, 'categoria_id');
    }

    public function ejercicios() {
        return $this->hasMany(Ejercicio::class, 'categoria_id');
    }
    
}
