<header class="header bg-black py-3">
    <div class="container">
        <a href="{{ route('home') }}" class="header__brand">
            <img src="https://live.staticflickr.com/65535/54491433795_a6a3ddf8c2_w.jpg" alt="NEO CORPUSFIT Logo"
                class="header__logo" />
        </a>

        <nav class="navbar navbar-expand-lg header__nav">
            <div class="container-fluid px-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="mainNav">
                    <ul class="navbar-nav header__menu mb-2 mb-lg-0">
                        <li class="header__item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>

                        <li class="nav-item dropdown header__item">
                            <a class="nav-link dropdown-toggle" href="#" id="suplementoDropdown" role="button"
                                data-bs-toggle="dropdown">Suplementos</a>
                            <ul class="dropdown-menu header__dropdown" aria-labelledby="suplementoDropdown">
                                <li><a class="dropdown-item header__highlight"
                                        href="{{ route('pages.suplementos.index') }}">Suplementos</a></li>
                                <li>
                                    <hr class="dropdown-divider bg-white" />
                                </li>
                                @foreach ($categoriasSuplementos as $categoria)
                                    <li><a class="dropdown-item"
                                            href="{{ route('pages.suplementos.show', $categoria->id_categoria) }}">{{ $categoria->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item dropdown header__item">
                            <a class="nav-link dropdown-toggle" href="#" id="canastasDropdown" role="button"
                                data-bs-toggle="dropdown">Canastas</a>
                            <ul class="dropdown-menu header__dropdown" aria-labelledby="canastasDropdown">
                                <li><a class="dropdown-item header__highlight"
                                        href="{{ route('pages.canastas.index') }}">Canastas</a></li>
                                <li>
                                    <hr class="dropdown-divider bg-white" />
                                </li>
                                @foreach ($categoriasCanastas as $categoria)
                                    <li><a class="dropdown-item"
                                            href="{{ route('pages.canastas.show', $categoria->id_categoria) }}">{{ $categoria->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="header__item"><a class="nav-link" href="{{ route('pages.recetas') }}">Recetas</a>
                        </li>

                        <li class="nav-item dropdown header__item">
                            <a class="nav-link dropdown-toggle" href="#" id="menusDropdown" role="button"
                                data-bs-toggle="dropdown">Menús</a>
                            <ul class="dropdown-menu header__dropdown" aria-labelledby="menusDropdown">
                                <li><a class="dropdown-item header__highlight"
                                        href="{{ route('pages.menus.index') }}">Menús</a></li>
                                <li>
                                    <hr class="dropdown-divider bg-white" />
                                </li>
                                @foreach ($categoriasMenus as $categoria)
                                    <li><a class="dropdown-item"
                                            href="{{ route('pages.menus.show', $categoria->id_categoria) }}">{{ $categoria->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item dropdown header__item">
                            <a class="nav-link dropdown-toggle" href="#" id="calculadorasDropdown" role="button"
                                data-bs-toggle="dropdown">Calculadoras</a>
                            <ul class="dropdown-menu header__dropdown" aria-labelledby="calculadorasDropdown">
                                <li><a class="dropdown-item header__highlight"
                                        href="{{ route('pages.calculadoras.index') }}">Calculadoras</a></li>
                                <li>
                                    <hr class="dropdown-divider bg-white" />
                                </li>
                                <li><a class="dropdown-item" href="{{ route('pages.calculadoras.imc') }}">IMC</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('pages.calculadoras.proteina') }}">Proteína</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('pages.calculadoras.creatina') }}">Creatina</a></li>
                                <li><a class="dropdown-item" href="{{ route('pages.calculadoras.grasa-corp') }}">%
                                        Grasa Corporal</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('pages.calculadoras.harris-b') }}">Harris-Benedict</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="header__auth-buttons">
            @auth
                <a href="{{ route('user.area') }}" class="btn header__auth-btn header__auth-btn--area">
                        <i class="fas fa-user me-1"></i> Mi Área Personal
                </a>

                <form method="POST" action="{{ route('logout') }}" class="header__auth-form">
                    @csrf
                    <button type="submit" class="btn header__auth-btn header__auth-btn--logout">
                        <i class="fas fa-sign-out-alt me-1"></i> Cerrar Sesión
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn header__auth-btn header__auth-btn--login">
                    <i class="fas fa-sign-in-alt me-1"></i> Iniciar Sesión
                </a>
            @endauth
        </div>

    </div>
</header>
