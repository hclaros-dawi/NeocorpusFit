<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Canasta;
use App\Models\Categoria;

class CanastaController extends Controller
{
    public function index()
    {
        $categoriasCanastas = Categoria::whereBetween('id_categoria', [11, 15])->get();
        return view('pages.canastas.index', compact('categoriasCanastas'));
    }

    public function show($id_categoria)
    {
        $categoria = Categoria::find($id_categoria);
        
        if (!$categoria) {
            return redirect()->route('pages.canastas.index')->with('error', 'Categoría no encontrada');
        }
        
        $canastas = Canasta::where('categoria_id', $categoria->id_categoria)->paginate(6);
        
        return view('pages.canastas.show', compact('categoria', 'canastas'));
    }
    
    
}
