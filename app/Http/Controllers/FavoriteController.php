<?php

namespace App\Http\Controllers;

use App\Models\{Receta, Menu, Canasta, Favorite};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

        $favorite->delete();

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
