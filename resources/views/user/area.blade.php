<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Personal</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <x-navbar />
    <div class="personal-area">
        <div class="personal-area__header">
            <h1>MI ÁREA PERSONAL</h1>
            <h2>Bienvenid@ {{ Auth::user()->name }}</h2>
        </div>

        @if (!$hasFavorites)
            <div class="personal-area__card">
                <div class="personal-area__card-body">
                    <div class="empty">
                        <i class="bi bi-heartbreak"></i>
                        <h3>No tienes favoritos aún</h3>
                        <p>Explora nuestro contenido y guarda tus elementos favoritos</p>
                        <a href="{{ route('home') }}" class="btn btn-primary mt-3">
                            <i class="bi bi-house-door"></i> Ir al inicio
                        </a>
                    </div>
                </div>
            </div>
        @else
            <div class="personal-area__card personal-area__card--recetas">
                <div class="personal-area__card-header">
                    Mis Recetas Favoritas
                </div>
                <div class="personal-area__card-body">
                    @if ($favoriteRecetas->isEmpty())
                        <div class="empty">
                            <i class="bi bi-egg"></i>
                            <p>No tienes recetas favoritas aún</p>
                        </div>
                    @else
                        @foreach ($favoriteRecetas as $favorite)
                            @if ($favorite->receta)
                                <div class="favorite-item">
                                    <div class="favorite-item__item">
                                        @if ($favorite->receta->imagen_url)
                                            <img src="{{ $favorite->receta->imagen_url }}"
                                                alt="{{ $favorite->receta->nombre }}" class="favorite-item__img">
                                        @endif
                                        <div class="favorite-item__info">
                                            <h5>{{ $favorite->receta->nombre }}</h5>
                                            <p>{{ $favorite->receta->tiempo_preparacion }} min •
                                                {{ ucfirst($favorite->receta->dificultad) }}</p>
                                        </div>
                                    </div>
                                    <div class="favorite-item__actions">
                                        @if ($favorite->receta)
                                            <a href="{{ route('recetas.show', ['receta' => $favorite->receta->id_receta]) }}"
                                                class="btn btn-primary btn-sm">Ver Receta</a>
                                        @endif

                                        <form
                                            action="{{ route('favorites.destroy', ['type' => $favorite->type, 'itemId' => $favorite->item_id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="personal-area__card personal-area__card--menus">
                <div class="personal-area__card-header">
                    Mis Menús Favoritos
                </div>
                <div class="personal-area__card-body">
                    @if ($favoriteMenus->isEmpty())
                        <div class="empty">
                            <p>No tienes menús favoritos aún</p>
                        </div>
                    @else
                        @foreach ($favoriteMenus as $favorite)
                            @if ($favorite->menu)
                                <div class="favorite-item">
                                    <div class="d-flex align-items-center">
                                        <div class="favorite-item__info">
                                            <h5>{{ $favorite->menu->nombre }}</h5>
                                        </div>
                                    </div>

                                    <div class="favorite-item__actions">
                                        @if ($favorite->menu)
                                            <a href="{{ route('pages.menus.show', $favorite->menu->categoria_id) }}"
                                                class="btn btn-primary btn-sm"> Ver Menú
                                            </a>
                                        @endif
                                        <form
                                            action="{{ route('favorites.destroy', ['type' => $favorite->type, 'itemId' => $favorite->item_id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="personal-area__card personal-area__card--suplementos">
                <div class="personal-area__card-header">
                    Mis Suplementos Favoritos
                </div>
                <div class="personal-area__card-body">
                    @if ($favoriteSuplementos->isEmpty())
                        <div class="empty">
                            <p>No tienes suplementos favoritos aún</p>
                        </div>
                    @else
                        @foreach ($favoriteSuplementos as $favorite)
                            @if ($favorite->suplemento)
                                <div class="favorite-item">
                                    <div class="d-flex align-items-center">
                                        @if ($favorite->suplemento->imagen_url)
                                            <img src="{{ $favorite->suplemento->imagen_url }}"
                                                alt="{{ $favorite->suplemento->nombre }}" class="favorite-item__img">
                                        @endif
                                        <div class="favorite-item__info">
                                            <h5>{{ $favorite->suplemento->nombre }}</h5>
                                        </div>
                                    </div>
                                    <div class="favorite-item__actions">
                                        @if ($favorite->suplemento)
                                            <a href="{{ route('pages.suplementos.show', $favorite->suplemento->categoria_id) }}"
                                                class="btn btn-primary btn-sm">
                                                Ver Suplemento
                                            </a>
                                        @endif
                                        <form
                                            action="{{ route('favorites.destroy', ['type' => $favorite->type, 'itemId' => $favorite->item_id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="personal-area__card personal-area__card--canastas">
                <div class="personal-area__card-header">
                    Mis Canastas Favoritas
                </div>
                <div class="personal-area__card-body">
                    @if ($favoriteCanastas->isEmpty())
                        <div class="empty">
                            <p>No tienes canastas favoritas aún</p>
                        </div>
                    @else
                        @foreach ($favoriteCanastas as $favorite)
                            @if ($favorite->canasta)
                                <div class="favorite-item">
                                    <div class="d-flex align-items-center">
                                        <div class="favorite-item__info">
                                            <h5>{{ $favorite->canasta->nombre }}</h5>
                                        </div>
                                    </div>

                                    <div class="favorite-item__actions">
                                        @if ($favorite->canasta)
                                            <a href="{{ route('pages.canastas.show', $favorite->canasta->categoria_id) }}"
                                                class="btn btn-primary btn-sm"> Ver Canasta
                                            </a>
                                        @endif
                                        <form
                                            action="{{ route('favorites.destroy', ['type' => $favorite->type, 'itemId' => $favorite->item_id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        @endif
        <div class="container text-center py-5">
            <a href="{{ route('home') }}" class="btn btn-outline-secondary px-4 py-2">
                <i class="fas fa-arrow-left me-2"></i> Volver a la página de inicio
            </a>
        </div>
    </div>
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
