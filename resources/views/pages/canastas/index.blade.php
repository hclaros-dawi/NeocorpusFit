<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canastas</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="canastas">
        <div class="canastas__container container">
            <img src="https://live.staticflickr.com/65535/54494799353_7a0d18885c_q.jpg" alt="Icono canastas"
                class="canastas__icon">
            <h1 class="canastas__title">CANASTAS</h1>

            <div class="canastas__grid">
                @foreach ($categoriasCanastas as $categoria)
                    <div class="canastas__item canastas__item--{{ $loop->iteration }}">
                        <div class="canastas__card">
                            <h2 class="canastas__card-title">{{ $categoria->nombre }}</h2>
                            <a href="{{ route('pages.canastas.show', $categoria->id_categoria) }}"
                                class="canastas__button button--alt">
                                Ver Más
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container my-5 d-flex justify-content-center align-items-center">
            <section class="info-card">
                <h2 class="info-card__title">¿Qué incluyen las canastas?</h2>
                <p class="info-card__description">
                    Nuestras canastas están pensadas para facilitarte la vida: cada una incluye productos seleccionados
                    con
                    menús ya preparados.
                    ¿No sabes cómo cocinarlos? No te preocupes, te damos recetas rápidas y fáciles para que disfrutes de
                    comidas completas sin complicaciones. </p>
                <div class="info-card__buttons">
                    <a href="{{ route('pages.menus.index') }}" class="info-card__buttons-button">Ver Menús</a>
                    <a href="{{ route('pages.recetas') }}" class="info-card__buttons-button">Ver Recetas</a>
                </div>
            </section>
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
