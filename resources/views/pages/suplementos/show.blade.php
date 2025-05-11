<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $categoria->nombre }} | Suplementos</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <x-navbar />

    <section class="supplements-show">
        <div class="supplements-show__container container">
            <img src="https://live.staticflickr.com/65535/54494722139_d75acb8b59_s.jpg" alt="Icono suplementos"
                class="supplements-show__icon">
            <h1 class="supplements-show__title-section">{{ mb_strtoupper($categoria->nombre, 'UTF-8') }}</h1>

            <div class="container py-4">
                <div class="row g-3">
                    @foreach ($suplementos as $suplemento)
                        <div class="col-lg-4 col-md-6">
                            <div class="card supplements-show__card w-100 d-flex flex-column">
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h3 class="supplements-show__card__card-title text-center">{{ $suplemento->nombre }}
                                    </h3>
                                    <p class="supplements-show__card__card-text flex-grow-1">
                                        {{ $suplemento->descripcion }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-4 d-flex justify-content-center">
                    {{ $suplementos->links() }}
                </div>
            </div>

            <section class="info-card container my-5 text-center">
                <h2 class="info-card__title">¿Por qué es importante calcular tu dosis de suplementos?</h2>
                <p class="info-card__description">
                    Calcular correctamente la dosis de tus suplementos es fundamental para alcanzar tus objetivos de
                    forma segura y efectiva.
                    Cada cuerpo es diferente, y factores como el peso, nivel de actividad física, metabolismo y metas
                    personales influyen en la cantidad ideal.
                    Utilizar una dosis adecuada puede optimizar tu rendimiento, favorecer la recuperación y mejorar tu
                    composición corporal.
                    Por eso, ponemos a tu disposición diferentes <strong>calculadoras</strong> que te ayudarán a
                    personalizar tu plan.
                </p>
                <a href="{{ route('pages.calculadoras.index') }}" class="btn btn-primary">
                    Ir a las calculadoras
                </a>
            </section>

            <div class="container text-center py-2">
                <a href="{{ route('pages.suplementos.index') }}" class="btn btn-outline-secondary px-4 py-2">
                    <i class="fas fa-arrow-left me-2"></i> Volver a todos los suplementos
                </a>
            </div>
        </div>
    </section>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
