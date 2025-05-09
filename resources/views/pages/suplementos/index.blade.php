<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suplementos</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="supplements">
        <div class="supplements__container container">
            <img src="https://live.staticflickr.com/65535/54494722139_d75acb8b59_s.jpg" alt="Icono suplementos"
                class="supplements__icon">
            <h1 class="supplements__title">SUPLEMENTOS</h1>

            <div class="supplements__grid">
                @foreach ($categoriasSuplementos as $categoria)
                    <div class="supplements__item supplements__item--{{ $loop->iteration }}">
                        <div class="supplements__card">
                            <h2 class="supplements__card-title">{{ $categoria->nombre }}</h2>
                            <a href="{{ route('pages.suplementos.show', $categoria->id_categoria) }}"
                                class="supplements__button button--alt">
                                Ver Más
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <section class="info-card">
            <h2 class="info-card__title">¿Cómo calcular tu dosis?</h2>
            <p class="info-card__description">
                Los suplementos como la proteína y la creatina requieren un cálculo adecuado de las dosis para lograr
                resultados óptimos. ¡Con nuestras calculadoras podrás saber cuánto necesitas de cada suplemento según
                tu peso y objetivos! </p>
            <div class="info-card__buttons">
                <a href="{{ route('pages.calculadoras.proteina') }}" class="info-card__buttons-button">Calcular
                    Proteína</a>
                <a href="{{ route('pages.calculadoras.creatina') }}" class="info-card__buttons-button">Calcular
                    Creatina</a>
            </div>
        </section>

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
