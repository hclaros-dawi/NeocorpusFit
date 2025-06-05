<?php

namespace App\Http\Controllers;

use App\Models\{Receta, Menu, Canasta, Favorite};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FavoriteController extends Controller
{
    public function store(Request $request, $type, $itemId)
    {
        $user = Auth::user();

        if (!in_array($type, ['receta', 'menu', 'canasta'])) {
            return back()->with('error', 'Tipo de elemento no válido');
        }

        $model = $this->getModel($type);
        $item = $model::find($itemId);

        if (!$item) {
            return back()->with('error', ucfirst($type) . ' no encontrado');
        }

        if ($user->favorites()->where('type', $type)->where('item_id', $itemId)->exists()) {
            return back()->with('info', 'Este elemento ya está en tus favoritos');
        }

        Favorite::create([
            'user_id' => $user->id,
            'type' => $type,
            'item_id' => $itemId
        ]);

        return back()->with('success', 'Agregado a favoritos');
    }

    public function destroy($type, $itemId)
    {
        $user = Auth::user();
        
        $favorite = $user->favorites()
            ->where('type', $type)
            ->where('item_id', $itemId)
            ->first();
        
        if (!$favorite) {
            return back()->with('error', 'Favorito no encontrado');
        }
        
        $favoriteItemId = $favorite->item_id;
        
        $favorite->delete();
        
        if ($type === 'menu') {
            $menuPersonalizado = Menu::where('id_menu', $favoriteItemId)
                ->where('user_id', $user->id)
                ->first();
            
            if (!$menuPersonalizado) {
                $menuOriginal = Menu::find($favoriteItemId);
                
                if ($menuOriginal) {
                    $menuPersonalizado = Menu::where('categoria_id', $menuOriginal->categoria_id)
                        ->where('user_id', $user->id)
                        ->first();
                }
            }
            
            if ($menuPersonalizado) {
                Log::info('Eliminando menú personalizado', [
                    'id_menu' => $menuPersonalizado->id_menu,
                    'nombre' => $menuPersonalizado->nombre,
                    'user_id' => $menuPersonalizado->user_id
                ]);
                
                DB::beginTransaction();
                try {
                    $recetasEliminadas = \App\Models\RecetaMenu::where('id_menu', $menuPersonalizado->id_menu)->delete();
                    
                    $menuPersonalizado->delete();
                    
                    DB::commit();
                    return back()->with('success', 'Menú eliminado de favoritos y de tu cuenta');
                } catch (\Exception $e) {
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
