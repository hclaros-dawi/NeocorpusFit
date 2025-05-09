<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $primaryKey = 'id_categoria';

    public function suplementos() {
        return $this->hasMany(Suplemento::class, 'categoria_id', 'id_categoria');
    }

    public function menus() {
        return $this->hasMany(Menu::class, 'id_categoria');
    }

    public function recetas() {
        return $this->hasMany(Receta::class, 'id_categoria');
    }

    public function canastas() {
        return $this->hasMany(Canasta::class, 'id_categoria');
    }

    public function rutinas() {
        return $this->hasMany(Rutina::class, 'id_categoria');
    }

    public function ejercicios() {
        return $this->hasMany(Ejercicio::class, 'id_categoria');
    }
    
}
