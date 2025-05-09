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

         $query = Receta::with(['ingredientes', 'pasos']);

         if ($request->has('search') && $request->search != '') {
            $query->where('nombre', 'like', '%' . $request->search . '%');
        }

         $recetas = $query->paginate(6)->appends($request->only('search'));

         $recetasCount = $recetas->count();

         $searchTerm = $request->search;

         return view('pages.recetas', compact('recetas', 'recetasCount', 'searchTerm'));
    }
}
