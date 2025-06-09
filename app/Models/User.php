<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', //se hashea automáticamente al guardar
        ];
    }

    public function favorites()
    {
        //un usuario tiene muchos favoritos
        return $this->hasMany(Favorite::class);
    }

    public function recetasFavoritas()
    {
        return $this->belongsToMany(Receta::class, 'favorites', 'user_id', 'item_id')
            ->where('type', 'receta')
            ->withTimestamps();
    }

    public function menusFavoritos()
    {
        return $this->belongsToMany(Menu::class, 'favorites', 'user_id', 'item_id')
            ->where('type', 'menu')
            ->withTimestamps();
    }

    public function canastasFavoritas()
    {
        return $this->belongsToMany(Canasta::class, 'favorites', 'user_id', 'item_id')
            ->where('type', 'canasta')
            ->withTimestamps();
    }

    //verifica su un usuario ya ha marcado como fav un ítem
    public function hasFavorited($itemId, $type)
    {
        //se comprueba si existe un fav con ese tipo e id 
        return $this->favorites()
            ->where('type', $type)
            ->where('item_id', $itemId)
            ->exists();
    }
}
