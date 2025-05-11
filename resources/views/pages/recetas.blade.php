<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/loadFilter.js'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="recetas">
        <div class="recetas__container container">
            <img src="https://live.staticflickr.com/65535/54502914786_aa7b75a333_s.jpg" alt="Icono recetas"
                class="recetas__icon">
            <h1 class="recetas__title">RECETAS</h1>

            <form id="searchForm" class="recetas__search" action="{{ route('pages.recetas') }}" method="GET"
                class="d-flex mb-4">
                <input type="text" name="search" class="form-control me-2" placeholder="Buscar recetas..."
                    value="{{ request('search') }}" id="searchInput">
                <button type="submit" class="btn recetas__btn-primary">Buscar</button>
            </form>

            <div class="recetas__grid container">
                @foreach ($recetas as $receta)
                    <div class="recetas__grid__card card">
                        <img src="{{ $receta->imagen_url }}" class="recetas__grid__card__img-top"
                            alt="{{ $receta->nombre }}">
                        <div class="card-body">
                            <h5 class="recetas__grid__card__title">{{ $receta->nombre }}</h5>
                            <p class="card-text">
                                Tiempo: {{ $receta->tiempo_preparacion }} min <br>
                                Dificultad: {{ $receta->dificultad }}
                            </p>

                            <button class="btn recetas__grid__card__btn" data-bs-toggle="modal"
                                data-bs-target="#modal-{{ $receta->id_receta }}">
                                Ver Receta
                            </button>
                        </div>
                    </div>

                    <div class="modal fade recetas__modal" id="modal-{{ $receta->id_receta }}" tabindex="-1"
                        aria-labelledby="modalLabel-{{ $receta->id_receta }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content recetas__modal">
                                <div class="modal-header">
                                    <h5 class="modal-recetas-title" id="modalLabel-{{ $receta->id_receta }}">
                                        {{ strtoupper($receta->nombre) }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body modal-receta-body">
                                    <p><strong>Ingredientes</strong></p>
                                    <ul>
                                        @foreach ($receta->ingredientes ?? [] as $ingrediente)
                                            <li>{{ $ingrediente->nombre }} - {{ $ingrediente->pivot->cantidad }}
                                                {{ $ingrediente->pivot->unidad_medida }}</li>
                                        @endforeach
                                    </ul>

                                    <p><strong>Preparación</strong></p>
                                    <ul>
                                        @foreach ($receta->pasos ?? [] as $paso)
                                            <li>{{ $paso->descripcion }}</li>
                                        @endforeach
                                    </ul>

                                    @if ($receta->ingredientes->isNotEmpty())
                                        <p><strong>Información nutricional</strong></p>
                                        <div class="recetas__nutricion d-flex justify-content-between text-center">
                                            @foreach ($receta->ingredientes as $ingrediente)
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
                @endforeach
            </div>

            <div class="recetas__footer text-center mt-4">
                {{ $recetas->links() }}
            </div>

            @if (isset($searchTerm) && $searchTerm !== '')
                <div class="container text-center py-5">
                    <a href="{{ route('pages.recetas') }}" class="btn btn-outline-secondary px-4 py-2">
                        <i class="fas fa-arrow-left me-2"></i> Ver todas las recetas
                    </a>
                </div>
            @endif
        </div>

        <div class="container text-center py-5">
            <a href="{{ route('home') }}" class="btn btn-outline-secondary px-4 py-2">
                <i class="fas fa-arrow-left me-2"></i> Volver a la página de inicio
            </a>
        </div>
    </section>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
