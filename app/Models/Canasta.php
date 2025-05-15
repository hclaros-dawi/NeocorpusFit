<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Canasta extends Model
{
    protected $primaryKey = 'id_canasta';
    protected $fillable = [
        'nombre',
        'menu_id',
        'categoria_id',
        'precio_total'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function ingredientes()
    {
        return $this->belongsToMany(
            Ingrediente::class,
            'canasta_ingrediente',
            'id_canasta',
            'id_ingrediente'
        )
            ->using(CanastaIngrediente::class)
            ->withPivot('cantidad', 'unidad_base', 'subtotal')
            ->withTimestamps();
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'item_id', 'id_canasta')
            ->where('type', 'canasta');
    }
}
