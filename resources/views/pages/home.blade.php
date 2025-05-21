<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | NeoCorpusfit</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/dropdown.js'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="hero-section position-relative">
        <img src="https://i.gifer.com/3OwAa.gif" alt="Hero GIF" class="hero-section__image" />
        <div
            class="hero-section__content container d-flex flex-column justify-content-center align-items-center text-center">
            <h1>
                <span>NEO</span><strong>CORPUSFIT</strong>
            </h1>
            <p class="hero-section__quote lead bg-dark bg-opacity-75 p-3 p-md-4 rounded mt-3 mt-md-4">
                "Planes simples, hábitos fuertes. Tú pones las ganas, nosotros el resto"
            </p>
        </div>
    </section>

    <section class="py-5 bg-dark-gray">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-12 d-flex">
                    <div class="card-feature card-feature-section-1">
                        <div class="card-feature__body">
                            <img src="https://live.staticflickr.com/65535/54491969023_3439ea1ff1_s.jpg"
                                alt="Suplementos" class="card-feature__body__image mx-auto d-block" />
                            <h3 class="card-feature__body__title">SUPLEMENTOS</h3>
                            <p class="card-feature__text">
                                Descubre los tipos de suplementos y cómo usarlos
                            </p>
                            <a href="{{ route('pages.suplementos.index') }}"
                                class="card-feature__body__button btn btn-sm">Ver
                                Más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 d-flex">
                    <div class="card-feature card-feature-section-1">
                        <div class="card-feature__body">
                            <img src="https://live.staticflickr.com/65535/54492043290_fabccea76f_s.jpg"
                                alt="Calculadoras" class="card-feature__body__image mx-auto d-block" />
                            <h3 class="card-feature__body__title">CALCULADORAS</h3>
                            <p class="card-feature__text">
                                Empieza el cambio con datos. Calcula proteína, creatina, grasa, IMC y Harris-Benedict
                            </p>
                            <a href="{{ route('pages.calculadoras.index') }}"
                                class="card-feature__body__button btn btn-sm">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-page__highlight-info py-4 text-center">
        <div class="container">
            <p class="lead mb-0">Tu canasta, menú y recetas, todo conectado, organizado y listo para seguir sin vueltas
            </p>
        </div>
    </section>

    <section class="home-page__custom-bg-light py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card-feature card-feature-section-2">
                        <div class="card-feature__body">
                            <h3
                                class="card-feature__body__custom-heading d-flex align-items-center justify-content-center gap-2">
                                RECETAS</h3>
                            <p class="card-feature__text">Comidas fáciles y nutritivas, alineadas con tu meta y
                                productos. Sin vueltas</p>
                            <a href="{{ route('pages.recetas') }}" class="button button--accent mt-3">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-feature card-feature-section-2">
                        <div class="card-feature__body">
                            <h3 class="card-feature__body__custom-heading">MENÚS</h3>
                            <p class="card-feature__text">Planes organizados para cada objetivo. Elige uno y síguelo sin
                                penas</p>
                            <a href="{{ route('pages.menus.index') }}" class="button button--accent mt-3">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-feature card-feature-section-2">
                        <div class="card-feature__body">
                            <h3 class="card-feature__body__custom-heading"> CANASTAS</h3>
                            <p class="card-feature__text">Productos seleccionados según el menú que elijas. Todo listo
                                para comprar</p>
                            <a href="{{ route('pages.canastas.index') }}" class="button button--accent mt-3">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
