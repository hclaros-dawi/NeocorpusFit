<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'item_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function receta()
    {
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

    public function suplemento()
    {
        return $this->belongsTo(Suplemento::class, 'item_id');
    }
}
