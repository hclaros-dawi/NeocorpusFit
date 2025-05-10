<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadoras</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/js/imc.js', 'resources/js/dropdown.js', 'resources/sass/app.scss'])

</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="calculadoras">
        <div class="calculadoras__container container">
            <img src="https://live.staticflickr.com/65535/54494721934_e89a62393b_s.jpg" alt="Icono calculadoras"
                class="calculadoras__icon">
            <h1 class="calculadoras__title">CALCULADORAS</h1>

            <div class="calculadoras__grid">
                <div class="calculadoras__item calculadoras__item--1">
                    <div class="calculadoras__card">
                        <h2 class="calculadoras__card-title">Cálculo de imc</h2>
                        <a href="{{ route('pages.calculadoras.imc') }}"
                            class="calculadoras__button button--alt">Calcular</a>
                    </div>
                </div>
                <div class="calculadoras__item calculadoras__item--2">
                    <div class="calculadoras__card">
                        <h2 class="calculadoras__card-title">Cálculo de proteína</h2>
                        <a href="{{ route('pages.calculadoras.proteina') }}"
                            class="calculadoras__button button--alt">Calcular</a>
                    </div>
                </div>
                <div class="calculadoras__item calculadoras__item--3">
                    <div class="calculadoras__card">
                        <h2 class="calculadoras__card-title">Cálculo de creatina</h2>
                        <a href="{{ route('pages.calculadoras.creatina') }}"
                            class="calculadoras__button button--alt">Calcular</a>
                    </div>
                </div>
                <div class="calculadoras__item calculadoras__item--4">
                    <div class="calculadoras__card">
                        <h2 class="calculadoras__card-title">Cálculo de Harris-Benedict</h2>
                        <a href="{{ route('pages.calculadoras.harris-b') }}"
                            class="calculadoras__button button--alt">Calcular</a>
                    </div>
                </div>
                <div class="calculadoras__item calculadoras__item--5">
                    <div class="calculadoras__card">
                        <h2 class="calculadoras__card-title">Cálculo de % de grasa corporal</h2>
                        <a href="{{ route('pages.calculadoras.grasa-corp') }}"
                            class="calculadoras__button button--alt">Calcular</a>
                    </div>
                </div>
            </div>

            <section class="info-card">
                <h2 class="info-card__title">¿Cómo calcular tu dosis y evaluar tu progreso?</h2>
                <p class="info-card__description">
                    Contamos con varias calculadoras diseñadas para ayudarte a gestionar tu salud y rendimiento de forma
                    precisa.
                    Desde el cálculo de tu proteína y creatina, hasta herramientas como el IMC, el porcentaje de grasa
                    corporal
                    y la fórmula de Harris-Benedict para conocer tu requerimiento calórico. Todas estas calculadoras son
                    herramientas
                    complementarias que te permitirán evaluar tu progreso y ajustar tu plan según tus objetivos
                    personales.
                    Además, muchas de estas métricas te ayudarán a determinar las cantidades adecuadas de algunos
                    suplementos clave,
                    sobre los cuales te ofrecemos información detallada en nuestra página.
                </p>
                <div class="info-card__buttons">
                    <a href="{{ route('pages.suplementos.index') }}" class="info-card__buttons-button">Ver
                        Suplementos</a>
                </div>
            </section>


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
