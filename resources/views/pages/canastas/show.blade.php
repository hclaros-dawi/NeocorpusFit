<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $categoria->nombre }} | Canastas</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <x-navbar />

    <section class="canasta-show">
        <div class="container text-center">
            <img src="https://live.staticflickr.com/65535/54494799353_7a0d18885c_q.jpg" alt="Icono canastas"
                class="canasta-show__icon">
            <h1 class="canasta-show__title">{{ mb_strtoupper($categoria->nombre, 'UTF-8') }}</h1>

            @php
                $ingredientes = $canastas->first()->ingredientes;
            @endphp

            <div class="table-responsive">
                <table class="table table-bordered text-white canasta-show__table">
                    <thead class="thead-light">
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad total</th>
                            <th>Unidad</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ingredientes as $i => $ingrediente)
                            <tr>
                                <td>{{ $ingrediente->nombre }}</td>
                                <td>{{ $ingrediente->pivot->cantidad }}</td>
                                <td>{{ $ingrediente->pivot->unidad_base }}</td>
                                <td>{{ number_format($ingrediente->pivot->subtotal, 2) }} €</td>
                                <td>
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modal-{{ $i }}">Ver Producto</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2">{{ number_format($canastas->first()->precio_total, 2) }} €</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total calorías</strong></td>
                            <td colspan="2">3.822 kcal</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total proteínas</strong></td>
                            <td colspan="2">185 g</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        @foreach ($ingredientes as $i => $ingrediente)
            <x-product-modal :id="$i" :nombre="$ingrediente->nombre" :descripcion="$ingrediente->descripcion" :calorias="$ingrediente->calorias . ' kcal'" :proteinas="$ingrediente->proteinas . ' g'"
                :carbohidratos="$ingrediente->carbohidratos . ' g'" :grasas="$ingrediente->grasas . ' g'" />
        @endforeach

        <div class="container text-center mt-5">
            <a href="{{ route('pages.canastas.index') }}" class="btn btn-outline-secondary px-4 py-2">
                <i class="fas fa-arrow-left me-2"></i> Volver a todas las canastas
            </a>
        </div>
    </section>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
