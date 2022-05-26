<div class="container-fluid d-flex justify-content-center mt-5">
    <section class="container" id="tabla-pedidos">
        <div class="mt-3" style="height:800px; overflow:scroll;">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">No. de Pedido</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Productos</th>
                        <th scope="col">Precio / Unidad</th>
                        <th scope="col">Fecha de Pedido</th>
                        <th scope="col">Total a pagar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($pedido->id); ?></td>
                            <td><?php echo e($pedido->User->name); ?></td>
                            <td>
                                <?php $__currentLoopData = $products_by_pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <ul>
                                        <?php $__currentLoopData = $pp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($product->User->id == $pedido->User->id && $pedido->id == $product->pedido_id): ?>
                                                <li>
                                                    <?php echo e($product->product->name); ?> :
                                                    <strong><?php echo e($product->quantity); ?> pz</strong>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php $__currentLoopData = $products_by_pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <ul>
                                        <?php $__currentLoopData = $pp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($product->User->id == $pedido->User->id && $pedido->id == $product->pedido_id): ?>
                                                <li>
                                                    <strong>$<?php echo e($product->product->price); ?> c/u</strong>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td><?php echo e($pedido->created_at->diffForHumans()); ?></td>
                            <td>$<?php echo e($pedido->total); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div id="modalContainer">

        </div>
        <div id="modalContainer2">

        </div>
        <div id="modalContainerEditar">

        </div>
    </section>
</div>
<?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/layouts/pedidos.blade.php ENDPATH**/ ?>