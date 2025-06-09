<?php

namespace App\Http\Controllers;
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
        $categoria = Categoria::find($id_categoria); //Busca categoria según id pasado

        if (!$categoria) {
            return redirect()->route('pages.canastas.index')->with('error', 'Categoría no encontrada');
        }

        //Busca primera canasta asociada a ese id
        $canasta = Canasta::where('categoria_id', $categoria->id_categoria)->first();

        $canastas = collect([$canasta]); //creo colección con resultado para usar foreach en vista

        return view('pages.canastas.show', compact('categoria', 'canasta', 'canastas'));
    }
}
