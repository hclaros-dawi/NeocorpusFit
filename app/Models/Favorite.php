<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'item_id',
    ];

    public function user()
    {
        //un favorito solo tiene un user, pero un user tiene muchos favs
        return $this->belongsTo(User::class);
    }

    public function receta()
    {
        //un fav solo tiene una receta, pero una receta tiene muchos favs
        return $this->belongsTo(Receta::class, 'item_id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'item_id');
    }

    public function canasta()
    {
        return $this->belongsTo(Canasta::class, 'item_id');
    }
}
