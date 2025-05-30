<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;

class UserController extends Controller
{
    public function area()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $favorites = Auth::user()->favorites()
            ->with([
                'receta',
                'menu' => function ($query) {
                    $query->with(['recetas' => function ($q) {
                        $q->withPivot('orden', 'dia_semana', 'tipo_comida', 'enlace_receta')
                            ->orderBy('pivot_orden');
                    }]);
                },
                'canasta'
            ])
            ->get();

        $hasFavorites = $favorites->isNotEmpty();

        $modo = request()->get('modo', 'ver');

        return view('user.area', [
            'hasFavorites' => $hasFavorites,
            'favorites' => $favorites,
            'favoriteRecetas' => $favorites->where('type', 'receta'),
            'favoriteMenus' => $favorites->where('type', 'menu'),
            'favoriteCanastas' => $favorites->where('type', 'canasta'),
            'modo' => $modo,
        ]);
    }
}
