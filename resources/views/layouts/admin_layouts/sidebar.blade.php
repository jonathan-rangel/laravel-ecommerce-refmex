<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100%;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-2">RefMex</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item" id="inventario">
            <a href="{{ url('/admin/inventario') }}" class="nav-link text-white">
                <i class="fas fa-clipboard-list"></i>
                Inventario
            </a>
        </li>
        <li class="nav-item" id="inventario">
            <a href="{{ url('/admin/productos') }}" class="nav-link text-white">
                <i class="fas fa-warehouse"></i>
                Productos
            </a>
        </li>
        <li id="pedidos">
            <a href="{{ url('/admin/pedidos') }}" class="nav-link text-white">
                <i class="fas fa-shopping-cart"></i>
                Pedidos
            </a>
        </li>
        <li id="usuarios">
            <a href="{{ url('/admin/usuarios') }}" class="nav-link text-white active" aria-current="page">
                <i class="fas fa-user"></i>
                Usuarios
            </a>
        </li>
        <li id="administradores">
            <a href="{{ url('/admin/administradores') }}" class="nav-link text-white">
                <i class="fas fa-star"></i>
                Administradores
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('assets/img/admin/admin.jpg')}}" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
