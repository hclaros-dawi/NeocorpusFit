<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        return view('pages.calculadoras.index');
    }

    public function imc()
    {
        return view('pages.calculadoras.imc');
    }

    public function harrisB()
    {
        return view('pages.calculadoras.harris-b');
    }

    public function grasaCorp()
    {
        return view('pages.calculadoras.grasa-corp');
    }

    public function creatina()
    {
        return view('pages.calculadoras.creatina');
    }

    public function proteina()
    {
        return view('pages.calculadoras.proteina');
    }
}
