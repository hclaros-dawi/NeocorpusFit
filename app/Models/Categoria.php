<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $primaryKey = 'id_categoria';

    public function suplementos()
    {
        //una categoría tiene muchos suplementos
        return $this->hasMany(Suplemento::class, 'categoria_id', 'id_categoria');
    }

    public function menus()
    {
        //categoria_id es la FK e id_categoria es la PK
        return $this->hasMany(Menu::class, 'categoria_id', 'id_categoria');
    }

    public function recetas()
    {
        return $this->hasMany(Receta::class, 'categoria_id', 'id_categoria');
    }

    public function canastas()
    {
        return $this->hasMany(Canasta::class, 'categoria_id', 'id_categoria');
    }
}
