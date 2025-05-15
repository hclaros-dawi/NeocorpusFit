<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/dropdown.js'])
</head>

<body class="bg-dark-gray home-page">
    <div class="registro">
        <div class="registro__container">
            <h1 class="registro__title">Registrarse</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="registro__form-check-label">Nombre</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                        autocomplete="name" class="registro__form-check-input">
                    @error('name')
                        <div class="text-danger mt-1 fs-9">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="registro__form-check-label">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        autocomplete="username" class="registro__form-check-input">
                    @error('email')
                        <div class="text-danger mt-1 fs-9">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="registro__form-check-label">Contraseña</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="registro__form-check-input">
                    @error('password')
                        <div class="text-danger mt-1 fs-9">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="registro__form-check-label">Confirmar contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="new-password" class="registro__form-check-input">
                    @error('password_confirmation')
                        <div class="text-danger mt-1 fs-9">{{ $message }}</div>
                    @enderror
                </div>

                <div class="registro__actions d-flex justify-content-between align-items-center">
                    <a href="{{ route('login') }}">¿Ya tienes una cuenta?</a>
                    <button type="submit" class="btn registro__btn-primary">Registrarse</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
