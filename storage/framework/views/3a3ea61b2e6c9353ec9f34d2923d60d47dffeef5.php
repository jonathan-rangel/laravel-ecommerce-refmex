<div class="container-fluid d-flex justify-content-center mt-5">
    <section class="container" id="tabla-inventario">
        <div class="mt-3" style="height:800px; overflow:scroll;">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($e->tipo == 0): ?>
                    <tr>
                        <td><?php echo e($e->name); ?></td>
                        <td><?php echo e($e->email); ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div id="modalContainer">

        </div>
    </section>
</div>
<?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/layouts/administradores.blade.php ENDPATH**/ ?>