<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\SuplementoController;
use App\Http\Controllers\CanastaController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\CategoriaController;

//Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home.alternative');

//Suplementos
Route::get("/suplementos", [SuplementoController::class, "index"])->name("pages.suplementos.index");
Route::get("/suplementos/{id_categoria}", [SuplementoController::class, "show"])->name("pages.suplementos.show");

//Canastas  
Route::get("/canastas", [CanastaController::class, "index"])->name("pages.canastas.index");
Route::get("/canastas/{id_categoria}", [CanastaController::class, "show"])->name("pages.canastas.show");

//Recetas 
Route::get('/recetas', [RecetaController::class, 'index'])->name('pages.recetas');
 
//Menus 
Route::get("/menus", [MenuController::class, "index"])->name("pages.menus.index");
Route::get("/menus/{id_categoria}", [MenuController::class, "show"])->name("pages.menus.show");

//Calculadoras 
Route::get('/calculadoras', [CalculadoraController::class, 'index'])->name('pages.calculadoras.index');
Route::get('/calculadoras/imc', [CalculadoraController::class, 'imc'])->name('pages.calculadoras.imc');
Route::get('/calculadoras/harrisB', [CalculadoraController::class, 'harrisB'])->name('pages.calculadoras.harris-b');
Route::get('/calculadoras/grasa-corp', [CalculadoraController::class, 'grasaCorp'])->name('pages.calculadoras.grasa-corp');
Route::get('/calculadoras/creatina', [CalculadoraController::class, 'creatina'])->name('pages.calculadoras.creatina');
Route::get('/calculadoras/proteina', [CalculadoraController::class, 'proteina'])->name('pages.calculadoras.proteina');




