

<?php $__env->startSection('contenido'); ?>
    
    <div class="d-flex container my-5 product-card">
        <div class="d-flex justify-content-center align-items-center container m-3" style="background-color:#f3f6fb;">
            <img class="" src="<?php echo e(asset('storage') . '/' . $producto->image_path); ?>" alt=""
                style="width: 100%; height: auto;">
        </div>
        <div class="d-flex flex-column container justify-content-center">
            <h1 class="display-4"><?php echo e($producto->name); ?></h1>
            <p class="fs-3"><?php echo e($producto->description); ?></p>
            <span style="font-size: 4em; color: #ff3f40;">$ <?php echo e($producto->price); ?></span>
            <div class="d-flex flex-row mt-3">
                <h2 class="pe-3">Stock</h2>
                <span style="font-size: 1.6em; color: #ff3f40;"><?php echo e($producto->stock); ?> unidades</span>
            </div>
            <?php if(Auth::user()): ?>
                <div class="d-flex flex-row mt-3">
                    <?php if($producto->stock <= 0): ?>
                        <div class="alert alert-danger text-center" role="alert">
                            Producto Sin Stock
                        </div>
                    <?php else: ?>
                        <form action="/addToCart" method="POST">
                            <div class="modal-body">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="product_id" value="<?php echo e($producto->id); ?>">
                                <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">

                                <label for="state">Estado</label>
                                <select class="mb-3" name="state" id="state">
                                    <option value="Nuevo">Nuevo</option>
                                    <option value="Seminuevo">Seminuevo</option>
                                    <option value="Reacondicionado">Reacondicionado</option>
                                </select>
                                <br>
                                <label for="storage">Almacenamiento</label>
                                <select class="mb-3" name="storage" id="storage">
                                    <option value="64">64GB</option>
                                    <option value="128">128GB</option>
                                    <option value="256">256GB</option>
                                </select>
                                <br>
                                <label for="color">Color</label>
                                <select class="mb-3" name="color" id="color">
                                    <option value="Blanco">Blanco</option>
                                    <option value="Negro">Negro</option>
                                    <option value="Azul">Azul</option>
                                </select>
                                <br>
                                <label for="quantity">Cantidad:</label>
                                <input type="number" name="quantity" value="1" min="1" max="<?php echo e($producto->stock); ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info" id="liveAlertBtn">Añadir al carrito</button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-primary text-center" role="alert">
                    Inicia sesion para poder comprar este producto
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script text="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/product.blade.php ENDPATH**/ ?>