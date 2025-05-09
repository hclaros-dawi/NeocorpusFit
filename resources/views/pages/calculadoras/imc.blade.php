<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC | Calculadoras</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/imc.js', 'resources/js/dropdown.js', 'resources/sass/app.scss'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="imc">
        <div class="imc__container container">
            <img src="https://live.staticflickr.com/65535/54494721934_e89a62393b_s.jpg" alt="Icono calculadoras"
                class="imc__icon">
            <h1 class="imc__title display-5">CÁLCULO DE IMC</h1>

            <p class="imc__description lead">
                Con esta calculadora podrás saber cuál es tu Índice de Masa Corporal (IMC), un sistema de medición que
                asocia el peso y la altura de una persona con el objetivo de determinar si se encuentra en su peso
                saludable.
            </p>

            <div class="imc__form-wrapper row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="imc__form-container">
                        <form id="imc-form" class="imc__form">
                            <div class="row g-3">
                                <div class="col-md-6 imc__form-group">
                                    <label for="peso" class="imc__label">Tu peso (kg)</label>
                                    <input type="number" class="imc__input form-control" id="peso"
                                        placeholder="Introduce tu peso en kg." required step="0.1" min="1">
                                    <div class="imc__error invalid-feedback" id="peso-error"></div>
                                </div>
                                <div class="col-md-6 imc__form-group">
                                    <label for="altura" class="imc__label">Tu altura (cm)</label>
                                    <input type="number" class="imc__input form-control" id="altura"
                                        placeholder="Introduce tu altura en cm." required step="1" min="50">
                                    <div class="imc__error invalid-feedback" id="altura-error"></div>
                                </div>
                            </div>
                            <div class="imc__button-wrapper d-grid gap-2 mt-4">
                                <button type="submit" class="imc__button btn btn-calculate">Calcular</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="resultado" class="imc__result result-container" style="opacity: 0; transition: opacity 0.5s;">
                <h2 class="imc__result-text">Tu IMC es: <span id="imc-valor">--</span></h2>
                <p id="clasificacion-imc" class="imc__classification text-center fs-4 mt-3"></p>
            </div>
        </div>

        <div class="container text-center mt-5">
            <a href="{{ route('pages.calculadoras.index') }}" class="btn btn-outline-secondary px-4 py-2">
                <i class="fas fa-arrow-left me-2"></i> Volver a todas las calculadoras
            </a>
        </div>
    </section>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
