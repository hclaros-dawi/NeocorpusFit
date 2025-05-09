<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatina | Calculadoras</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/creatina.js', 'resources/js/dropdown.js', 'resources/js/select.js', 'resources/sass/app.scss'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="creatina">
        <div class="creatina__container container">
            <img src="https://live.staticflickr.com/65535/54494721934_e89a62393b_s.jpg" alt="Icono calculadoras"
                class="creatina__icon">
            <h1 class="creatina__title display-5">CÁLCULO DE CREATINA</h1>
            <p class="creatina__description lead">
                Con esta calculadora de creatina, podrás saber cuál es la cantidad de consumo de creatina monohidrato
                diaria más óptima para ti (o para tu cliente).
            </p>

            <div class="creatina__form-wrapper row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="creatina__form-container">
                        <form id="creatina-form" class="creatina__form">
                            <div class="row g-3 mt-2">
                                <div class="row g-3">
                                    <div class="col-12 creatina__form-group">
                                        <label for="peso" class="creatina__label">Tu peso (kg)</label>
                                        <input type="number" class="creatina__input form-control" id="peso"
                                            placeholder="Introduce tu peso en kg." required step="0.1"
                                            min="1">
                                        <div class="creatina__error invalid-feedback" id="peso-error"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-12 creatina__form-group">
                                    <label for="cargaBool" class="creatina__label">¿Tienes pensado hacer una fase de
                                        carga?</label>
                                    <div class="custom-select-wrapper">
                                        <div class="custom-select creatina__input" id="cargaBoolSelect" tabindex="0">
                                            <span class="custom-select-value">Selecciona una opción</span>
                                            <i class="custom-select-arrow fas fa-chevron-down"></i>
                                        </div>
                                        <div class="custom-select-options">
                                            <div class="custom-select-option" data-value="si">Sí</div>
                                            <div class="custom-select-option" data-value="no">No</div>
                                        </div>
                                        <input type="hidden" name="cargaBool" id="cargaBool" required>
                                    </div>
                                    <div id="cargaBool-error" class="text-danger" style="display:none;"></div>
                                </div>
                            </div>

                            <div class="creatina__button-wrapper d-grid gap-2 mt-4">
                                <button type="submit" class="btn button button--yellow">Calcular</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div id="resultado-creatina" class="creatina__result result-container"
                style="opacity: 0; transition: opacity 0.5s;">
                <h2 class="creatina__result-text"> <span id="creatina-valor">--</span>
                </h2>
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
