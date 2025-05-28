<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $categoria->nombre }} | Mis menús</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    @vite(['resources/js/app.js', 'resources/js/dropdown-menu.js', 'resources/sass/app.scss', 'resources/js/snackbar.js'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />

    <section class="menus-show">
        <div class="menus-show__container container">
            <img src="https://live.staticflickr.com/65535/54494721744_e55ea8e546_s.jpg" alt="Icono menús"
                class="menus-show__icon" />
            <h1 class="menus-show__title">{{ mb_strtoupper($categoria->nombre, 'UTF-8') }}</h1>

            @if ($modo === 'editar' && $menu->user_id !== null)
                <form action="{{ route('user.menus.update', ['menu' => $menu->id_menu]) }}" method="POST">
                @else
                    <form action="{{ route('user.menus.update', ['menu' => $menu->id_menu]) }}" method="POST">
            @endif
            @csrf
            @method('PUT')

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
                                    <td class="fw-bold">{{ ucfirst($dia) }}</td>
                                    @foreach (['Desayuno', 'Comida', 'Cena', 'Snack'] as $tipo)
                                        @php
                                            $item = $comidas[$tipo] ?? null;
                                            $recetaActual = $item['receta'] ?? null;
                                        @endphp
                                        <td style="min-width: 180px;">
                                            <span id="selected-text-{{ $dia }}-{{ $tipo }}">
                                                {{ $recetaActual?->nombre ?? '-- Ninguna --' }}
                                            </span><br>

                                            @if ($recetaActual && $modo === 'ver')
                                                <a href="#"
                                                    class="text-warning fw-bold text-decoration-underline ver-receta-link"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal-{{ $recetaActual->id_receta }}">
                                                    [Ver Receta]
                                                </a><br>
                                            @endif

                                            @if ($modo === 'editar')
                                                <a href="#"
                                                    class="text-warning fw-bold text-decoration-underline edit-toggle"
                                                    data-target="dropdown-wrapper-{{ $dia }}-{{ $tipo }}">
                                                    [Editar]
                                                </a>
                                            @endif

                                            <div id="dropdown-wrapper-{{ $dia }}-{{ $tipo }}"
                                                class="dropdown-food mt-2 d-none">
                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Seleccionar receta
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#" data-receta-id=""
                                                            data-receta-nombre="-- Ninguna --"
                                                            data-target="input-{{ $dia }}-{{ $tipo }}"
                                                            data-label="selected-text-{{ $dia }}-{{ $tipo }}">
                                                            -- Ninguna --
                                                        </a>
                                                    </li>
                                                    @foreach ($recetas as $receta)
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                                data-receta-id="{{ $receta->id_receta }}"
                                                                data-receta-nombre="{{ $receta->nombre }}"
                                                                data-target="input-{{ $dia }}-{{ $tipo }}"
                                                                data-label="selected-text-{{ $dia }}-{{ $tipo }}">
                                                                {{ $receta->nombre }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <input type="hidden"
                                                name="tabla[{{ $dia }}][{{ $tipo }}]"
                                                id="input-{{ $dia }}-{{ $tipo }}"
                                                value="{{ $recetaActual?->id_receta }}">
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="totales mt-4 text-center">
                    <p><strong>Total proteínas menú:</strong> <span id="total-proteinas">{{ $totalProteinas }}</span> g
                    </p>
                    <p><strong>Total calorías menú:</strong> <span id="total-calorias">{{ $totalCalorias }}</span>
                        kcal</p>
                </div>

                @if ($modo === 'editar')
                    <div class="text-center mt-3">

                        <button type="submit" class="btn-guardar">
                            <i class="fas fa-save me-2"></i> Guardar cambios
                        </button>

                    </div>
                @endif

                <div class="container text-center py-5">
                    <a href="{{ route('user.area') }}" class="btn btn-outline-secondary px-4 py-2">
                        <i class="fas fa-arrow-left me-2"></i> Volver a mi área personal
                    </a>
                </div>
            </div>
            </form>

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
                    @endif
                @endforeach
            @endforeach
    </section>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const recetasInfo = @json(
            $recetas->keyBy('id_receta')->map(function ($r) {
                return [
                    'total_calorias' => $r->total_calorias,
                    'total_proteinas' => $r->total_proteinas,
                ];
            }));
    </script>
</body>

</html>
