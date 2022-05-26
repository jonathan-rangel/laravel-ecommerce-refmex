<!--NAVBAR-->
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid container">
        <a class="navbar-brand" href="/">RefMex</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" {{ url('/smartphones') }} ">Smartphones</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    @php
                        $categories = DB::table('categories')->get()
                    @endphp
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href=" {{ url('/smartphones/' . $category->name) }} ">
                                    {{ $category->name }} </a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{ url('/about_us') }} ">Sobre nosotros</a>
                </li>
            </ul>
            @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}">
                        <button class="btn-success me-2">{{ __('Iniciar sesión') }}</button>
                    </a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}">
                            <button class="btn-info">{{ __('Registrarse') }}</button>
                        </a>
                    </li>
                @endif
            @else
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>{{ Auth::user()->name }}</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser1">
                        @if (Auth::user()->tipo == 0)
                            <li>
                                <a class="dropdown-item" href="{{ url('/admin') }}">
                                    <i class="fa-regular fa-folder-gear"></i>
                                    Dashboard
                                </a>
                            </li>
                        @else
                            <li>
                                <a class="dropdown-item" href="{{ url('/carrito/' . Auth::user()->id) }}">
                                    <i class="fas fa-shopping-cart"></i>
                                    Carrito
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/pedidos/' . Auth::user()->id) }}">
                                    <i class="fas fa-dolly-flatbed"></i>
                                    Pedidos
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                        @endif

                        <!-- Log Out -->
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
    </div>
</nav>

<!--End NAVBAR-->
