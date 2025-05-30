<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplemento;
use App\Models\Categoria;

class SuplementoController extends Controller
{
    public function index()
    {
        $categoriasSuplementos = Categoria::whereBetween('id_categoria', [6, 10])->get();
        return view('pages.suplementos.index', compact('categoriasSuplementos'));
    }

    public function show($id_categoria)
    {
        $categoria = Categoria::findOrFail($id_categoria);
        $suplementos = Suplemento::where('categoria_id', $id_categoria)->paginate(6);

        return view('pages.suplementos.show', compact('categoria', 'suplementos'));
    }
}
