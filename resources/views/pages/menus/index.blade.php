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
            <h1 class="menus__title">MENÚS</h1>

            <div class="menus__grid">
                @foreach ($categoriasMenus as $categoria)
                    <div class="menus__item menus__item--{{ $loop->iteration }}">
                        <div class="menus__card">
                            <h2 class="menus__card-title">{{ $categoria->nombre }}</h2>
                            <a href="{{ route('pages.menus.show', $categoria->id_categoria) }}"
                                class="menus__button button--alt">
                                Ver Más
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <section class="info-card">
            <h2 class="info-card__title">¿Qué incluyen las menús?</h2>
            <p class="info-card__description">
                Los menús que encontrarás en esta sección están diseñados para adaptarse a distintos objetivos y estilos
                de vida.
                Cada menú puede prepararse utilizando los productos incluidos en nuestras canastas, las cuales han sido
                pensadas
                específicamente para cada tipo de opción seleccionada. Además, si no sabes cómo preparar alguna comida,
                también
                te ofrecemos recetas detalladas para ayudarte a armar tu menú de forma práctica y deliciosa. </p>
            <div class="info-card__buttons">
                <a href="{{ route('pages.canastas.index') }}" class="info-card__buttons-button">Ver Canastas</a>
                <a href="{{ route('pages.recetas') }}" class="info-card__buttons-button">Ver Recetas</a>
            </div>
        </section>

        <div class="container text-center py-5">
            <a href="{{ route('home') }}" class="btn btn-outline-secondary px-4 py-2">
                <i class="fas fa-arrow-left me-2"></i> Volver a la página de inicio
            </a>
        </div>

    </section>

    <x-footer />
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
