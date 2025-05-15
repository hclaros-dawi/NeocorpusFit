<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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
            'password' => 'hashed',
        ];
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function suplementosFavoritos()
    {
        return $this->belongsToMany(Suplemento::class, 'favorites', 'user_id', 'item_id')
            ->where('type', 'suplemento')
            ->withTimestamps();
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

    public function hasFavorited($itemId, $type)
    {
        return $this->favorites()
            ->where('type', $type)
            ->where('item_id', $itemId)
            ->exists();
    }
}
