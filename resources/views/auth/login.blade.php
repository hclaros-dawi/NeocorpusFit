<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="https://live.staticflickr.com/65535/54501688131_7e4cf65737_n.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/sass/app.scss'])
</head>

<body class="bg-dark-gray home-page">
    <div class="login">
        <div class="login__container">
            <h1 class="login__title">Iniciar sesión</h1>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="login__form-check-label">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        autocomplete="username" class="login__form-check-input">
                    @error('email')
                        <div class="text-danger mt-1 fs-9">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="login__form-check-label">Contraseña</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="login__form-check-input">
                    @error('password')
                        <div class="text-danger mt-1 fs-9">{{ $message }}</div>
                    @enderror
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="login__form-check-input me-2" />
                        <label for="remember_me" class="form-check-label login__text-remember">
                            Recordarme
                        </label>
                </div>

                <div class="login__login-actions">
                    <button type="submit" class="btn registro__btn-primary">Ingresar</button>
                </div>

                <div class="text-center mt-3">
                    <p class="login__register text-white">
                        ¿No tienes una cuenta?
                        <a href="{{ route('register') }}" class="text-decoration-underline text-info">Regístrate
                            aquí</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
