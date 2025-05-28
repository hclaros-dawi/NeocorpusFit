<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Área Personal</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    @vite(['resources/js/app.js', 'resources/js/snackbar.js', 'resources/sass/app.scss'])
</head>

<body>
    <x-navbar />
    <div id="menu-success-alert" class="alert alert-success" style="display: none;">
        Menú actualizado correctamente
    </div>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="personal-area">
        <div class="personal-area__header">
            <h1>MI ÁREA PERSONAL</h1>
            <h2>Bienvenid@ {{ Auth::user()->name }}</h2>
        </div>

        <div class="personal-area__card personal-area__card--recetas">
            <div class="personal-area__card-header">Mis Recetas Favoritas</div>
            <div class="personal-area__card-body">
                @if ($favoriteRecetas->isEmpty())
                    <div class="empty">
                        <p>No tienes recetas favoritas aún</p>
                    </div>
                @else
                    @foreach ($favoriteRecetas as $favorite)
                        @if ($favorite->receta)
                            <div class="favorite-item">
                                <div class="favorite-item__item">
                                    @if ($favorite->receta->imagen_url)
                                        <img src="{{ $favorite->receta->imagen_url }}"
                                            alt="{{ $favorite->receta->nombre }}" class="favorite-item__img" />
                                    @endif
                                    <div class="favorite-item__info">
                                        <h5>{{ $favorite->receta->nombre }}</h5>
                                        <p>{{ $favorite->receta->tiempo_preparacion }} min •
                                            {{ ucfirst($favorite->receta->dificultad) }}</p>
                                    </div>
                                </div>
                                <div class="favorite-item__actions">
                                    <button type="button" class="btn-view-item" data-bs-toggle="modal"
                                        data-bs-target="#modalReceta{{ $favorite->receta->id_receta }}">
                                        Ver Receta
                                    </button>

                                    <form
                                        action="{{ route('favorites.destroy', ['type' => $favorite->type, 'itemId' => $favorite->item_id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete-item">Eliminar</button>
                                    </form>
                                </div>
                            </div>

                            <div class="modal fade recetas__modal" id="modalReceta{{ $favorite->receta->id_receta }}"
                                tabindex="-1" aria-labelledby="modalLabelReceta{{ $favorite->receta->id_receta }}"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content recetas__modal">
                                        <div class="modal-header">
                                            <h5 class="modal-recetas-title"
                                                id="modalLabelReceta{{ $favorite->receta->id_receta }}">
                                                {{ strtoupper($favorite->receta->nombre) }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Cerrar"></button>
                                        </div>
                                        <div class="modal-body modal-receta-body">
                                            <p><strong>Ingredientes</strong></p>
                                            <ul>
                                                @foreach ($favorite->receta->ingredientes ?? [] as $ingrediente)
                                                    <li>{{ $ingrediente->nombre }} -
                                                        {{ $ingrediente->pivot->cantidad }}
                                                        {{ $ingrediente->pivot->unidad_medida }}</li>
                                                @endforeach
                                            </ul>

                                            <p><strong>Preparación</strong></p>
                                            <ul>
                                                @foreach ($favorite->receta->pasos ?? [] as $paso)
                                                    <li>{{ $paso->descripcion }}</li>
                                                @endforeach
                                            </ul>

                                            @if ($favorite->receta->ingredientes->isNotEmpty())
                                                <p><strong>Información nutricional</strong></p>
                                                <div
                                                    class="recetas__nutricion d-flex justify-content-between text-center">
                                                    @foreach ($favorite->receta->ingredientes as $ingrediente)
                                                        <div>
                                                            <strong>{{ $ingrediente->nombre }}:</strong><br>
                                                            @if ($ingrediente->calorias !== null)
                                                                Calorías: {{ $ingrediente->calorias }} Kcal <br>
                                                            @endif
                                                            @if ($ingrediente->proteinas !== null)
                                                                Proteínas: {{ $ingrediente->proteinas }} g <br>
                                                            @endif
                                                            @if ($ingrediente->grasas !== null)
                                                                Grasas: {{ $ingrediente->grasas }} g <br>
                                                            @endif
                                                            @if ($ingrediente->carbohidratos !== null)
                                                                Carbohidratos: {{ $ingrediente->carbohidratos }} g
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
        <div class="personal-area__card personal-area__card--menus">
            <div class="personal-area__card-header">Mis Menús Favoritos</div>
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
                                        <a href="{{ route('user.menus.show', $favorite->menu->categoria_id) }}?modo=ver"
                                            class="btn-view-menu">
                                            Ver Menú
                                        </a>

                                        <a href="{{ route('user.menus.edit', ['menu' => $favorite->menu->id_menu]) }}"
                                            class="btn-edit-menu">
                                            Editar
                                        </a>
                                    @endif
                                    <form
                                        action="{{ route('favorites.destroy', ['type' => $favorite->type, 'itemId' => $favorite->item_id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete-menu">
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
            <div class="personal-area__card-header">Mis Canastas Favoritas</div>
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
                                            class="btn-view-item">
                                            Ver Canasta
                                        </a>
                                    @endif
                                    <form
                                        action="{{ route('favorites.destroy', ['type' => $favorite->type, 'itemId' => $favorite->item_id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete-item">
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
