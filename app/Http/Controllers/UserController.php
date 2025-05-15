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
            ->with(['receta', 'menu', 'suplemento', 'canasta'])
            ->get();

        $hasFavorites = $favorites->isNotEmpty();

        return view('user.area', [
            'hasFavorites' => $hasFavorites,
            'favorites' => $favorites,
            'favoriteRecetas' => $favorites->where('type', 'receta'),
            'favoriteMenus' => $favorites->where('type', 'menu'),
            'favoriteSuplementos' => $favorites->where('type', 'suplemento'),
            'favoriteCanastas' => $favorites->where('type', 'canasta')
        ]);
    }
}
