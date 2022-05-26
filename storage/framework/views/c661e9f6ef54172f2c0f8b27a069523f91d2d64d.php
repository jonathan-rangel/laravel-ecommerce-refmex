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
                    <a class="nav-link active" aria-current="page" href=" <?php echo e(url('/smartphones')); ?> ">Smartphones</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    <?php
                        $categories = DB::table('categories')->get()
                    ?>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a class="dropdown-item" href=" <?php echo e(url('/smartphones/' . $category->name)); ?> ">
                                    <?php echo e($category->name); ?> </a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" <?php echo e(url('/about_us')); ?> ">Sobre nosotros</a>
                </li>
            </ul>
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('login')); ?>">
                        <button class="btn-success me-2"><?php echo e(__('Login')); ?></button>
                    </a>
                </li>
                <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('register')); ?>">
                            <button class="btn-info"><?php echo e(__('Register')); ?></button>
                        </a>
                    </li>
                <?php endif; ?>
            <?php else: ?>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong><?php echo e(Auth::user()->name); ?></strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser1">
                        <?php if(Auth::user()->tipo == 0): ?>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(url('/admin')); ?>">
                                    <i class="fa-regular fa-folder-gear"></i>
                                    Dashboard
                                </a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(url('/carrito/' . Auth::user()->id)); ?>">
                                    <i class="fas fa-shopping-cart"></i>
                                    Carrito
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(url('/pedidos/' . Auth::user()->id)); ?>">
                                    <i class="fas fa-dolly-flatbed"></i>
                                    Pedidos
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                        <?php endif; ?>

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
            <?php endif; ?>
        </div>
    </div>
</nav>

<!--End NAVBAR-->
<?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>