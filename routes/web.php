<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Sitemap\SitemapGenerator;

// Controladores
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuplementoController;
use App\Http\Controllers\CanastaController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get("/suplementos", [SuplementoController::class, "index"])->name("pages.suplementos.index");
Route::get("/suplementos/{id_categoria}", [SuplementoController::class, "show"])->name("pages.suplementos.show");
Route::get("/suplemento/{suplemento}", [SuplementoController::class, "showSingle"])->name("pages.suplementos.single");

Route::get("/canastas", [CanastaController::class, "index"])->name("pages.canastas.index");
Route::get("/canastas/{canasta}", [CanastaController::class, "show"])->name("pages.canastas.show");

Route::get('/recetas', [RecetaController::class, 'index'])->name('pages.recetas');
Route::get('/recetas/{receta}', [RecetaController::class, 'show'])->name('recetas.show');

Route::get("/menus", [MenuController::class, "index"])->name("pages.menus.index");
Route::get("/menus/{menu}", [MenuController::class, "show"])->name("pages.menus.show");

Route::get('/calculadoras', [CalculadoraController::class, 'index'])->name('pages.calculadoras.index');
Route::get('/calculadoras/imc', [CalculadoraController::class, 'imc'])->name('pages.calculadoras.imc');
Route::get('/calculadoras/macros', [CalculadoraController::class, 'harrisB'])->name('pages.calculadoras.harris-b');
Route::get('/calculadoras/suplementos', [CalculadoraController::class, 'grasaCorp'])->name('pages.calculadoras.grasa-corp');
Route::get('/calculadoras/gasto-calorico', [CalculadoraController::class, 'creatina'])->name('pages.calculadoras.creatina');
Route::get('/calculadoras/agua', [CalculadoraController::class, 'proteina'])->name('pages.calculadoras.proteina');

Route::middleware('auth')->group(function () {
    Route::post('/favorites/{type}/{itemId}', [FavoriteController::class, 'store'])
        ->name('favorites.store');
    Route::delete('/favorites/{type}/{itemId}', [FavoriteController::class, 'destroy'])
        ->name('favorites.destroy');
    Route::get('/mi-area', [UserController::class, 'area'])->name('user.area');
});

Route::get('/sitemap', function () {
    SitemapGenerator::create('https://neocorpusfit.com')
        ->writeToFile(public_path('sitemap.xml'));
    return 'Sitemap generado!';
});

require __DIR__ . '/auth.php';
