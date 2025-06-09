<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Canasta extends Model
{
    protected $primaryKey = 'id_canasta'; //porque laravel asume que la pk es id
    protected $fillable = [ //para asignar de forma masiva con ::create
        'nombre',
        'menu_id',
        'categoria_id',
        'precio_total'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id'); //las canastas pertenecen a una categoría
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id'); //las canastas pertenecen a un menú
    }

    public function ingredientes()
    {
        return $this->belongsToMany( //muchas canastas tienen muchos ingredientes y viceversa
            Ingrediente::class,
            'canasta_ingrediente', //nombre tabla pivote
            'id_canasta',
            'id_ingrediente'
        )
            ->using(CanastaIngrediente::class) //modelo pivote personalizado
            ->withPivot('cantidad', 'unidad_base', 'subtotal')
            ->withTimestamps();
    }

    public function favorites()
    {
        //una canasta tiene muchos favoritos 
        return $this->hasMany(Favorite::class, 'item_id', 'id_canasta')
            ->where('type', 'canasta'); //solo trae cuyo tipo sea ese
    }
}
