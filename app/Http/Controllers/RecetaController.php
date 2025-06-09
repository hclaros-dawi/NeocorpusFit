<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Receta;

class RecetaController extends Controller
{
    public function index(Request $request)
    {
        Paginator::useBootstrap(); // Utiliza bootstrap porque por defecto es TW (Tailwind)

        //trae las recetas con sus ingredientes y sus pasos (todas relaciones de una vez)
        $query = Receta::with(['ingredientes', 'pasos']);

        //si tiene una palabra buscada 
        if ($request->has('search') && $request->search != '') {
            $query->where('nombre', 'like', '%' . $request->search . '%'); //SELECT * FROM recetas WHERE nombre LIKE '%ensalada%';
        }

        //para que pagine a 6 y en cada página recuerde el searchterm
        $recetas = $query->paginate(6)->appends($request->only('search'));

        $searchTerm = $request->search; //termino buscado

        return view('pages.recetas', compact('recetas', 'searchTerm'));
    }
}
