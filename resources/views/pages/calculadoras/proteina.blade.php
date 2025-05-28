<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proteína | Calculadoras</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-yE4GvHQuZc/.../" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/app.js', 'resources/js/proteina.js', 'resources/js/select.js', 'resources/js/dropdown.js', 'resources/sass/app.scss'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="proteina">
        <div class="proteina__container container">
            <img src="https://live.staticflickr.com/65535/54494721934_e89a62393b_s.jpg" alt="Icono calculadoras"
                class="proteina__icon">
            <h1 class="proteina__title display-5">CÁLCULO DE PROTEÍNA</h1>
            <p class="proteina__description lead">
                El resultado que te da esta calculadora te indica la cantidad de proteínas diarias aproximadas que
                deberías consumir (en total) si tu objetivo es ganar masa muscular.
            </p>

            <div class="proteina__form-wrapper row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="proteina__form-container">
                        <form id="proteina-form" class="proteina__form">
                            <div class="row g-3">
                                <div class="col-md-6 proteina__form-group">
                                    <label for="peso" class="proteina__label">Tu peso (kg)</label>
                                    <input type="number" class="proteina__input form-control" id="peso"
                                        placeholder="Introduce tu peso en kg." required step="0.1" min="1">
                                    <div class="proteina__text-danger invalid-feedback" id="peso-error"></div>
                                </div>

                                <div class="col-md-6 proteina__form-group">
                                    <label for="sexo-trigger" class="proteina__label">Tu sexo</label>
                                    <div class="custom-select-wrapper">
                                        <div class="custom-select proteina__input" id="sexo-trigger" tabindex="0">
                                            <span class="custom-select-value">Selecciona tu sexo</span>
                                            <i class="custom-select-arrow fas fa-chevron-down"></i>
                                        </div>
                                        <div class="custom-select-options">
                                            <div class="custom-select-option" data-value="hombre">Hombre</div>
                                            <div class="custom-select-option" data-value="mujer">Mujer</div>
                                        </div>
                                        <input type="hidden" name="sexo" id="sexo" required>
                                    </div>
                                    <div id="sexo-error" class="proteina__text-danger" style="display:none;"></div>
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-12 proteina__form-group">
                                    <label for="actividad-trigger" class="proteina__label">¿Cuál es tu nivel de
                                        actividad física diaria?</label>
                                    <div class="custom-select-wrapper">
                                        <div class="custom-select proteina__input" id="actividad-trigger"
                                            tabindex="0">
                                            <span class="custom-select-value">Selecciona una opción</span>
                                            <i class="custom-select-arrow fas fa-chevron-down"></i>
                                        </div>
                                        <div class="custom-select-options">
                                            <div class="custom-select-option" data-value="sedentario">Sedentario: poco o
                                                nada de ejercicio al día</div>
                                            <div class="custom-select-option" data-value="ligera">Actividad ligera:
                                                ejercicio ligero o deporte 1-3 días a la semana</div>
                                            <div class="custom-select-option" data-value="moderada">Actividad
                                                moderada:
                                                ejercicio moderado o deporte 3-5 días a la semana</div>
                                            <div class="custom-select-option" data-value="intensa">Actividad intensa:
                                                ejercicio intenso o deporte 6-7 días a la semana</div>
                                            <div class="custom-select-option" data-value="muy-intensa">Actividad muy
                                                intensa: ejercicio muy intenso o trabajo físico y ejercicio diario</div>
                                        </div>
                                        <input type="hidden" name="actividad" id="actividad" required>
                                    </div>
                                    <div id="actividad-error" class="proteina__text-danger" style="display:none;"></div>
                                </div>

                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-12 proteina__form-group">
                                    <label for="entrenamiento-trigger" class="proteina__label">¿Qué tipo de
                                        entrenamiento realizas principalmente?</label>
                                    <div class="custom-select-wrapper">
                                        <div class="custom-select proteina__input" id="entrenamiento-trigger"
                                            tabindex="0">
                                            <span class="custom-select-value">Selecciona una opción</span>
                                            <i class="custom-select-arrow fas fa-chevron-down"></i>
                                        </div>
                                        <div class="custom-select-options">
                                            <div class="custom-select-option" data-value="cardio">Cardio</div>
                                            <div class="custom-select-option" data-value="fuerza">Fuerza</div>
                                        </div>
                                        <input type="hidden" name="entrenamiento" id="entrenamiento" required>
                                    </div>
                                    <div id="entrenamiento-error" class="proteina__text-danger"
                                        style="display:none;"></div>
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-12 proteina__form-group">
                                    <label for="grasa" class="proteina__label">
                                        Tu grasa corporal (%) <a href="{{ route('pages.calculadoras.grasa-corp') }}"
                                            class="proteina__link">(Calcularla)</a>
                                    </label>
                                    <input type="number" class="proteina__input form-control" id="grasa"
                                        placeholder="Introduce tu % de grasa corporal" min="1" max="60"
                                        step="0.1">
                                    <div id="grasa-error" class="proteina__text-danger" style="display:none;"></div>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mt-4">
                                <button type="submit"
                                    class="proteina__button btn button button--yellow">Calcular</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div id="resultado-proteina" class="proteina__result result-container"
                style="opacity: 0; transition: opacity 0.5s;">
                <h2 class="proteina__result-text"><span id="proteina-valor">--</span>
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
