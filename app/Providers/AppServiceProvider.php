<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Categoria;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    //para compartir la variable categorias globalmente
    public function boot()
    {
        View::composer('*', function ($view) {
            $categoriasSuplementos = Categoria::whereBetween('id_categoria', [6, 10])->get();
            $view->with('categoriasSuplementos', $categoriasSuplementos);
        });

        View::composer('*', function ($view) {
            $categoriasCanastas = Categoria::whereBetween('id_categoria', [11, 15])->get();
            $view->with('categoriasCanastas', $categoriasCanastas);
        });

        View::composer('*', function ($view) {
            $categoriasMenus = Categoria::whereBetween('id_categoria', [1, 5])->get();
            $view->with('categoriasMenus', $categoriasMenus);
        });
    }
}
