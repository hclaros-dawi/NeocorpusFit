<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $categoria->nombre }} | Menús</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="menus-show">
        <div class="menus-show__container container">
            <img src="https://live.staticflickr.com/65535/54494721744_e55ea8e546_s.jpg" alt="Icono menús"
                class="menus-show__icon">
            <h1 class="menus-show__title">{{ mb_strtoupper($categoria->nombre, 'UTF-8') }}</h1>
            @auth
                @if (isset($menu) && $menu)
                    @if (auth()->user()->hasFavorited($menu->id_menu, 'menu'))
                        <form action="{{ route('favorites.destroy', ['type' => 'menu', 'itemId' => $menu->id_menu]) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="menus-show__btn-fav btn btn-sm btn-outline-danger">
                                <i class="fas fa-heart"></i> Quitar
                            </button>
                        </form>
                    @else
                        <form action="{{ route('favorites.store', ['type' => 'menu', 'itemId' => $menu->id_menu]) }}"
                            method="POST">
                            @csrf
                            <button type="submit" class="menus-show__btn-fav btn btn-sm btn-outline-secondary">
                                <i class="far fa-heart"></i> Guardar
                            </button>
                        </form>
                    @endif
                @endif
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-secondary" title="Inicia sesión para guardar">
                    <i class="far fa-heart"></i> Favorito
                </a>
            @endauth

            <div class="container py-4">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Día</th>
                                <th>Desayuno</th>
                                <th>Comida</th>
                                <th>Cena</th>
                                <th>Snack</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tabla as $dia => $comidas)
                                <tr>
                                    <td class="fw-bold" data-label="Día">{{ ucfirst($dia) }}</td>

                                    @foreach (['Desayuno', 'Comida', 'Cena', 'Snack'] as $tipo)
                                        @php
                                            $receta = $comidas[$tipo] ?? null;
                                        @endphp
                                        <td data-label="{{ $tipo }}">
                                            @if ($receta)
                                                {{ $receta['receta']->nombre }}<br>
                                                <a href="#"
                                                    class="text-warning fw-bold text-decoration-underline mt-1 d-inline-block"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal-{{ $receta['receta']->id_receta }}">
                                                    [Ver Receta]
                                                </a>
                                            @else
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Modales para cada receta -->
                @foreach ($tabla as $dia => $comidas)
                    @foreach ($comidas as $tipo => $item)
                        @if ($item && isset($item['receta']))
                            @php $receta = $item['receta']; @endphp

                            <div class="modal fade recetas__modal" id="modal-{{ $receta->id_receta }}" tabindex="-1"
                                aria-labelledby="modalLabel-{{ $receta->id_receta }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
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
                                                    <li>{{ $ingrediente->nombre }} -
                                                        {{ $ingrediente->pivot->cantidad }}
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
                                                <div
                                                    class="recetas__nutricion d-flex justify-content-between text-center">
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
                        @endif
                    @endforeach
                @endforeach

                <div class="totales mt-4 text-center ps-2 py-2 px-2">
                    <p class="mb-1"><strong>Total proteínas menú:</strong> {{ $totalProteinas }} g</p>
                    <p class="mb-0"><strong>Total calorías menú:</strong> {{ $totalCalorias }} kcal</p>
                </div>
            </div>

            <div class="container text-center py-5">
                <a href="{{ route('pages.menus.index') }}" class="btn btn-outline-secondary px-4 py-2">
                    <i class="fas fa-arrow-left me-2"></i> Volver a todos los menús
                </a>
            </div>
        </div>
    </section>
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
