

<?php $__env->startSection('contenido'); ?>

<div class="d-flex flex-column container mt-4">
    <div class="text-center bg-primary bg-gradient d-flex justify-content-center align-items-center" style="height: 60px">
        <h1 style="color: white">Pedidos</h1>
    </div>
    <div class="mt-3" style="overflow:scroll; height: 600px;">
        <table class="table table-hover align-middle mt-4">
            <thead class="">
                <tr>
                    <th scope="col">Productos</th>
                    <th scope="col">Fecha de Pedido</th>
                    <th scope="col">Total a Pagar</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php $__currentLoopData = $products_by_pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $pp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($product->User->id == $pedido->User->id && $pedido->id == $product->pedido_id): ?>
                        <li>
                            <?php echo e($product->product->name); ?> :
                            <strong><?php echo e($product->quantity); ?> pz</strong>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($pedido->created_at->diffForHumans()); ?></td>
                    <td>$<?php echo e($pedido->total); ?></td>
                    <td>
                        <a type="button" class="btn btn-dark" href="<?php echo e(url('/ver-compra/'.Auth::user()->id.'/'.$pedido->id)); ?>">
                            Ver detalles
                        </a>
                        <a type="button" class="btn btn-info" href="<?php echo e(url('/downloadPDF/'.Auth::user()->id.'/'.$pedido->id)); ?>">
                            Descargar PDF
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/pedidos.blade.php ENDPATH**/ ?>