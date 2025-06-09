<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function area()
    {
        //verifica si usuario logueado
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        //obtiene favoritos de usuario
        $favorites = Auth::user()->favorites()
            ->with([ //con eager loading trae todas relaciones usuario
                'receta',
                'menu' => function ($query) {
                    $query->with(['recetas' => function ($q) { //trae las recetas de esos menús
                        $q->withPivot('orden', 'dia_semana', 'tipo_comida', 'enlace_receta') //los campos de la tabla pivote
                            ->orderBy('pivot_orden'); //ordena recetas
                    }]);
                },
                'canasta'
            ])
            ->get();

        $hasFavorites = $favorites->isNotEmpty(); //guarda como booleano si tiene o no fav

        $modo = request()->get('modo', 'ver'); //por defecto ver, muestra forma en la que se muestra área

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
