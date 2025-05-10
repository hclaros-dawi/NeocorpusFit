<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menús</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="menus">
        <div class="menus__container container">
            <img src="https://live.staticflickr.com/65535/54494721744_e55ea8e546_s.jpg" alt="Icono menús"
                class="menus__icon">
            <h1 class="menus__title">CLÁSICO</h1>

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
                            @php
                                $totalCalorias = 0;
                                $totalProteinas = 0;
                            @endphp
                            @foreach ($tabla as $dia => $comidas)
                                <tr>
                                    <td class="fw-bold" data-label="Día">{{ ucfirst($dia) }}</td>

                                    @foreach (['Desayuno', 'Comida', 'Cena', 'Snack'] as $tipo)
                                        @php
                                            $receta = $comidas[$tipo] ?? null;
                                            if ($receta) {
                                                $totalCalorias += $receta['calorias'];
                                                $totalProteinas += $receta['proteinas'];
                                            }
                                        @endphp
                                        <td data-label="{{ $tipo }}">
                                            @if ($receta)
                                                {{ $receta['nombre'] }}<br>
                                                <a href="{{ $receta['enlace'] }}" target="_blank"
                                                    class="text-warning fw-bold text-decoration-none">[Ver Receta]</a>
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="totales mt-4 text-center ps-2 py-2 px-2">
                    <p class="mb-1"><strong>Total proteínas menú:</strong> {{ $totalProteinas }} g</p>
                    <p class="mb-0"><strong>Total calorías menú:</strong> {{ $totalCalorias }} kcal</p>
                </div>

            </div>
            <div class="container text-center py-5">
                <a href="{{ route('home') }}" class="btn btn-outline-secondary px-4 py-2">
                    <i class="fas fa-arrow-left me-2"></i> Volver a la página de inicio
                </a>
            </div>
        </div>
    </section>
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
