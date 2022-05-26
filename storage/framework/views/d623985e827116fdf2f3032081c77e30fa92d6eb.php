<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark position-sticky" style="width: 280px; height: 100%;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-2">RefMex</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item" id="inventario">
            <a href="<?php echo e(url('/admin/inventario')); ?>" class="nav-link text-white">
                <i class="fas fa-clipboard-list"></i>
                Inventario
            </a>
        </li>
        <li class="nav-item" id="categorias">
            <a href="<?php echo e(url('/admin/categorias')); ?>" class="nav-link text-white">
                <i class="fas fa-clipboard-list"></i>
                Categorias
            </a>
        </li>
        <li id="pedidos">
            <a href="<?php echo e(url('/admin/pedidos')); ?>" class="nav-link text-white">
                <i class="fas fa-shopping-cart"></i>
                Pedidos
            </a>
        </li>
        <li id="usuarios">
            <a href="<?php echo e(url('/admin/usuarios')); ?>" class="nav-link text-white">
                <i class="fas fa-user"></i>
                Usuarios
            </a>
        </li>
        <li id="administradores">
            <a href="<?php echo e(url('/admin/administradores')); ?>" class="nav-link text-white">
                <i class="fas fa-star"></i>
                Administradores
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user-crown"></i>
            <strong><?php echo e(Auth::user()->name); ?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li>
                <!-- Log Out -->
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>