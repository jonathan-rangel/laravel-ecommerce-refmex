

<?php $__env->startSection('stylesheet2'); ?>
<?php echo e(asset('css/product.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>


<?php if(!empty($successMsg)): ?>
<div class="d-flex flex-column container mt-5">
    <div class="alert alert-success"> <?php echo e($successMsg); ?></div>
</div>
<?php endif; ?>
<!-- <div class="d-flex flex-column container mt-5">
    <div class="alert alert-success"> PEDIDO REALIZADO CON EXITO! </div>
</div> -->
<div class="d-flex flex-column container mt-4">
    <div class="text-center bg-primary bg-gradient d-flex justify-content-center align-items-center" style="height: 60px">
        <h1 style="color: white">Carrito de compras</h1>
    </div>
    <div class="mt-3" style="overflow:scroll; height: 580px;">
        <table class="table table-hover align-middle mt-4">
            <thead>
                <tr>
                    <th scope="col">Imagen del producto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Almacenamiento</th>
                    <th scope="col">Color</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td name="image_path"><img src="<?php echo e(asset('storage'). '/' . $c->product->image_path); ?>" alt="" style="width: 100px; height: 100px"></td>
                    <td name="category"><?php echo e($c->product->Category->name); ?></td>
                    <td name="name"><?php echo e($c->product->name); ?></td>
                    <td name="name"><?php echo e($c->product->state); ?></td>
                    <td name="name"><?php echo e($c->product->storage); ?></td>
                    <td name="name"><?php echo e($c->product->color); ?></td>
                    <td name="price">$<?php echo e($c->product->price); ?></td>
                    <td name="quantity"><?php echo e($c->quantity); ?></td>
                    <td>
                        <button type="button" class="btn btn-danger" onclick="deleteProductfromCart('<?php echo e($c->id); ?>','<?php echo e($c->product->name); ?>')">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <form action="/buyCart" method="POST">
        <div class="modal-body d-flex flex-column">
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="hidden" name="user_id" value="<?php echo e($c->user_id); ?>">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success mb-2">
                Comprar
            </button>
        </div>
    </form>
</div>
<div id="modalContainer">

</div>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
    function deleteProductfromCart(id, nombre) {
        const modalContainer = document.getElementById("modalContainer");
        var html =
            `<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:160%;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <i class="fas fa-exclamation-triangle"></i>
                            Eliminar producto del carrito de compras
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid d-flex flex-column justify-content-center align-items-center mt-2">
                        <label for="" class="fs-2">
                            ¿Estás seguro de eliminar este producto de tu carrito?
                        </label>
                        <label for="" class="fs-3">
                            <strong>Nombre del producto:</strong>
                            ${nombre}
                        </label>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <a href="<?php echo e(url('/deleteFromCart/${id}')); ?>" class="btn btn-danger">
                                Sí
                            </a>
                    </div>
                </div>
            </div>
        </div>`;

        modalContainer.innerHTML = html;
        $("#modalDelete").modal("show");
    }

    function confirmPurchase(id, nombre) {
        const modalContainer = document.getElementById("modalContainer");
        var html =
            `<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:160%;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <i class="fas fa-exclamation-triangle"></i>
                            Eliminar producto del carrito de compras
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid d-flex flex-column justify-content-center align-items-center mt-2">
                        <label for="" class="fs-2">
                            ¿Estás seguro de eliminar este producto de tu carrito?
                        </label>
                        <label for="" class="fs-3">
                            <strong>Nombre del producto:</strong>
                            ${nombre}
                        </label>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <a href="<?php echo e(url('/deleteFromCart/${id}')); ?>" class="btn btn-danger">
                                Sí
                            </a>
                    </div>
                </div>
            </div>
        </div>`;

        modalContainer.innerHTML = html;
        $("#modalDelete").modal("show");
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/cart.blade.php ENDPATH**/ ?>