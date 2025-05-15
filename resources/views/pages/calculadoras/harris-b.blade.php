<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harris-Benedict | Calculadoras</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/harrisB.js', 'resources/js/dropdown.js', 'resources/js/select.js', 'resources/sass/app.scss'])
</head>

<body class="bg-dark-gray home-page">
    <x-navbar />
    <section class="harris-b">
        <div class="harris-b__container container">
            <img src="https://live.staticflickr.com/65535/54494721934_e89a62393b_s.jpg" alt="Icono calculadoras"
                class="harris-b__icon">
            <h1 class="harris-b__title display-5">CÁLCULO DE HARRIS-BENEDICT</h1>
            <p class="harris-b__description lead">
                Esta calculadora automática te indica cuáles son las calorías diarias que gastas (en total) según la
                fórmula de Harris-Benedict, se incluye una sección que te permite calcular cuántas calorías deberías
                comer aprox. para ganar peso (ganar músculo) o bajar de peso (definir)
            </p>
            <div class="harris-b__form-wrapper row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="harris-b__form-container">
                        <form id="harris-b-form" class="harris-b__form">
                            <div class="row g-3">
                                <div class="col-md-6 harris-b__form-group">
                                    <label for="edad" class="harris-b__label">Tu edad</label>
                                    <input type="number" class="harris-b__input form-control" id="edad"
                                        placeholder="Introduce tu edad" required step="0.1" min="1">
                                    <div class="harris-b__text-danger invalid-feedback" id="edad-error"></div>
                                </div>
                                <div class="col-md-6 harris-b__form-group">
                                    <label for="sexo-trigger" class="harris-b__label">Tu sexo</label>
                                    <div class="custom-select-wrapper">
                                        <div class="custom-select harris-b__input" id="sexo-trigger" tabindex="0">
                                            <span class="custom-select-value">Selecciona tu sexo</span>
                                            <i class="custom-select-arrow fas fa-chevron-down"></i>
                                        </div>
                                        <div class="custom-select-options">
                                            <div class="custom-select-option" data-value="hombre">Hombre</div>
                                            <div class="custom-select-option" data-value="mujer">Mujer</div>
                                        </div>
                                        <input type="hidden" name="sexo" id="sexo" required>
                                    </div>
                                    <div id="sexo-error" class="harris-b__text-danger" style="display:none;"></div>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6 harris-b__form-group">
                                    <label for="peso" class="harris-b__label">Tu peso (kg)</label>
                                    <input type="number" class="harris-b__input form-control" id="peso"
                                        placeholder="Introduce tu peso en kg." required step="0.1" min="1">
                                    <div class="harris-b__text-danger invalid-feedback" id="peso-error"></div>
                                </div>
                                <div class="col-md-6 harris-b__form-group">
                                    <label for="altura" class="harris-b__label">Tu altura (cm)</label>
                                    <input type="number" class="harris-b__input form-control" id="altura"
                                        placeholder="Introduce tu altura en cm." required step="1" min="50">
                                    <div class="harris-b__text-danger invalid-feedback" id="altura-error"></div>
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-12 harris-b__form-group">
                                    <label for="actividad-trigger" class="harris-b__label">¿Cuál es tu nivel de
                                        actividad física diaria?</label>
                                    <div class="custom-select-wrapper">
                                        <div class="custom-select harris-b__input" id="actividad-trigger"
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
                                    <div id="actividad-error" class="harris-b__text-danger" style="display:none;">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-12 harris-b__form-group">
                                    <label for="objetivo-trigger" class="harris-b__label">¿Cuál es tu
                                        objetivo?</label>
                                    <div class="custom-select-wrapper">
                                        <div class="custom-select harris-b__input" id="objetivo-trigger"
                                            tabindex="0">
                                            <span class="custom-select-value">Selecciona una opción</span>
                                            <i class="custom-select-arrow fas fa-chevron-down"></i>
                                        </div>
                                        <div class="custom-select-options">
                                            <div class="custom-select-option" data-value="aumentar">Aumentar masa
                                                muscular</div>
                                            <div class="custom-select-option" data-value="bajar">Bajar grasa corporal
                                            </div>
                                            <div class="custom-select-option" data-value="mantener">Mantener el peso
                                                actual</div>
                                        </div>
                                        <input type="hidden" name="objetivo" id="objetivo" required>
                                    </div>
                                    <div id="objetivo-error" class="harris-b__text-danger" style="display:none;">
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mt-4">
                                <button type="submit"
                                    class="harris-b__button btn button button--yellow">Calcular</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="mensaje-calorias" class="mensaje-resultado" style="display: none;"></div>
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
