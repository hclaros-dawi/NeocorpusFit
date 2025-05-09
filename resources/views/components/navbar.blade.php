<header class="bg-black py-3">
    <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
        <a href="{{ route('home') }}" class="navbar-brand d-block mx-auto mb-3">
            <img src="https://live.staticflickr.com/65535/54491433795_a6a3ddf8c2_w.jpg" alt="NEO CORPUSFIT Logo"
                style="max-height: 100px; max-width: 100%; height: auto; width: auto;">
        </a>
        <nav class="navbar navbar-expand-lg bg-black mx-auto">
            <div class="container-fluid px-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="mainNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 list-unstyled">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('home') }}">Inicio</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="suplementoDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Suplementos
                            </a>
                            <ul class="dropdown-menu bg-dark-gray list-unstyled" aria-labelledby="suplementoDropdown">
                                <li>
                                    <a class="dropdown-item highlight-option"
                                        href="{{ route('pages.suplementos.index') }}">
                                        Suplementos
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider bg-white">
                                </li>
                                @foreach ($categoriasSuplementos as $categoria)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('pages.suplementos.show', $categoria->id_categoria) }}">
                                            {{ $categoria->nombre }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="canastasDropdown"
                                role="button" data-bs-toggle="dropdown">Canastas</a>
                            <ul class="dropdown-menu bg-dark-gray list-unstyled" aria-labelledby="canastaDropdown">
                                <li>
                                    <a class="dropdown-item highlight-option"
                                        href="{{ route('pages.canastas.index') }}">
                                        Canastas
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider bg-white">
                                </li>
                                @foreach ($categoriasCanastas as $categoria)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('pages.canastas.show', $categoria->id_categoria) }}">
                                            {{ $categoria->nombre }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('pages.recetas') }}">Recetas</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="menusDropdown"
                                role="button" data-bs-toggle="dropdown">Menús</a>
                            <ul class="dropdown-menu bg-dark-gray list-unstyled" aria-labelledby="menuDropdown">
                                <li>
                                    <a class="dropdown-item highlight-option" href="{{ route('pages.menus.index') }}">
                                        Menus
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider bg-white">
                                </li>
                                @foreach ($categoriasMenus as $categoria)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('pages.menus.show', $categoria->id_categoria) }}">
                                            {{ $categoria->nombre }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="calculadorasDropdown"
                                role="button" data-bs-toggle="dropdown">Calculadoras</a>
                            <ul class="dropdown-menu bg-dark-gray list-unstyled">
                                <li>
                                    <a class="dropdown-item highlight-option"
                                        href="{{ route('pages.calculadoras.index') }}">
                                        Calculadoras
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider bg-white">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('pages.calculadoras.imc') }}">Cálculo de
                                        IMC</a></li>
                                <li><a class="dropdown-item" href="{{ route('pages.calculadoras.proteina') }}">Cálculo
                                        de proteína</a></li>
                                <li><a class="dropdown-item" href="{{ route('pages.calculadoras.creatina') }}">Cálculo
                                        de creatina</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('pages.calculadoras.grasa-corp') }}">Cálculo
                                        de % de grasa
                                        corporal</a></li>
                                <li><a class="dropdown-item" href="{{ route('pages.calculadoras.harris-b') }}">Cálculo
                                        de
                                        Harris-Benedict</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
