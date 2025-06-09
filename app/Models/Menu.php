<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'nombre',
        'calorias',
        'proteinas',
        'categoria_id'
    ];

    public function categoria()
    {
        //un menú tiene una categoria, y una categoria tiene muchos menús
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function recetas()
    {
        return $this->belongsToMany(Receta::class, 'receta_menu', 'id_menu', 'id_receta')
            ->withPivot('dia_semana', 'tipo_comida', 'enlace_receta')
            ->withTimestamps();
    }

    public function canastas()
    {
        //un menú tiene muchas canastas y una canasta pertenece solo a un menú
        return $this->hasMany(Canasta::class, 'menu_id');
    }

    public function favorites()
    {
        //un menú tiene muchos favs, pero un fav solo pertenece a un menú
        return $this->hasMany(Favorite::class, 'item_id', 'id_menu')
            ->where('type', 'menu');
    }
}
