<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Suplemento;

class CategoriaController extends Controller
{
     public function index()
     {
          $categorias = Categoria::all();

          return view('categorias.index', compact('categorias'));
     }

     public function show($id)
     {
          $categoria = Categoria::find($id);

          $suplementos = Suplemento::where('categoria_id', $id)->get();

          if (!$categoria) {
               return redirect()->route('categorias.index')->with('error', 'Categoría no encontrada');
          }

          return view('categorias.show', compact('categoria', 'suplementos'));
     }
}
