<?php

namespace App\Http\Controllers;

use App\Models\{Receta, Menu, Canasta, Favorite};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FavoriteController extends Controller
{
    //Agrega un elemento a la lista de favoritos del usuario
    public function store(Request $request, $type, $itemId)
    {
        $user = Auth::user(); //para saber qué usuario hace la acción

        //si tipo no coincide con estos, da error
        if (!in_array($type, ['receta', 'menu', 'canasta'])) {
            return back()->with('error', 'Tipo de elemento no válido');
        }

        $model = $this->getModel($type); //convierte a modelo
        $item = $model::find($itemId); //busca elemento de ese modelo con ese id

        //si no está elemento, da error
        if (!$item) {
            return back()->with('error', ucfirst($type) . ' no encontrado');
        }

        //si ya está en favoritos
        if ($user->favorites()->where('type', $type)->where('item_id', $itemId)->exists()) {
            return back()->with('info', 'Este elemento ya está en tus favoritos');
        }

        //crea nueva fila en tabla favorites 
        Favorite::create([
            'user_id' => $user->id,
            'type' => $type,
            'item_id' => $itemId
        ]);

        //vuelve página anterior con mensaje de éxito
        return back()->with('success', 'Agregado a favoritos');
    }

    //elimina favoritos 
    public function destroy($type, $itemId)
    {
        $user = Auth::user(); //obtengo usuario autenticado
        
        //se busca un favorito de ese usuario que coincida en tipo e id
        $favorite = $user->favorites()
            ->where('type', $type)
            ->where('item_id', $itemId)
            ->first();
        
        if (!$favorite) {
            return back()->with('error', 'Favorito no encontrado');
        }
        
        $favoriteItemId = $favorite->item_id; //guardo id favorito en var temporal
        
        $favorite->delete(); //elimino registro de favorito
        
        //eliminación "especial" para favoritos de menús
        //elimina menú personalizado relacionado al menú fav
        if ($type === 'menu') {
            //busca menú personal con id fav para ese usuario
            $menuPersonalizado = Menu::where('id_menu', $favoriteItemId)
                ->where('user_id', $user->id)
                ->first();
            
            if (!$menuPersonalizado) {
                //si no existe, busca el menú original
                $menuOriginal = Menu::find($favoriteItemId);
                
                if ($menuOriginal) {
                    //trata de buscar el menú personal a partir de la categoria del menú original
                    $menuPersonalizado = Menu::where('categoria_id', $menuOriginal->categoria_id)
                        ->where('user_id', $user->id)
                        ->first();
                }
            }
            
            //si se encuentra menú personal (por categoria o id)
            if ($menuPersonalizado) {
                Log::info('Eliminando menú personalizado', [
                    'id_menu' => $menuPersonalizado->id_menu,
                    'nombre' => $menuPersonalizado->nombre,
                    'user_id' => $menuPersonalizado->user_id
                ]);
                
                DB::beginTransaction();
                try {
                    //elimina recetas relacionadas con ese menú personal (FK)
                    $recetasEliminadas = \App\Models\RecetaMenu::where('id_menu', $menuPersonalizado->id_menu)->delete();
                    
                    //elimina menú personal (PK)
                    $menuPersonalizado->delete();
                    
                    DB::commit();
                    return back()->with('success', 'Menú eliminado de favoritos y de tu cuenta');
                } catch (\Exception $e) {
                    //si algo falla, revierte todo y muestra mensaje de error
                    DB::rollBack();
                    Log::error('Error al eliminar menú', ['error' => $e->getMessage()]);
                    return back()->with('error', 'Error al eliminar el menú personalizado: ' . $e->getMessage());
                }
            } else {
                Log::warning('No se encontró menú personalizado para eliminar', [
                    'favorite_item_id' => $favoriteItemId,
                    'user_id' => $user->id
                ]);
            }
        }
        
        return back()->with('success', 'Eliminado de favoritos');
    }
    
    //asocia el tipo que se recibe con el modelo que le toca
    protected function getModel($type)
    {
        return match ($type) {
            'receta' => Receta::class,
            'menu' => Menu::class,
            'canasta' => Canasta::class,
            default => null
        };
    }
}
