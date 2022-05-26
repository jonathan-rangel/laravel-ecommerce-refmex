<div class="container-fluid d-flex justify-content-center mt-5">
    <section class="container" id="tabla-inventario">
        <div class="container d-flex flex-row-reverse p-0">
            <button type="button" class="btn btn-success" onclick="addProduct()">
                <i class="fas fa-plus"></i>
                Añadir producto
            </button>
        </div>
        <div class="mt-3" style="overflow:scroll;">
            <table class="table table-hover align-middle">
                <thead>
                    <tr class="text-center align-middle">
                        <th scope="col">No. de producto</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Nombre del producto</th>
                        <th scope="col">Estado</th>
                        <th scope="col">RAM</th>
                        <th scope="col">Color</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Imagen del producto</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $inventario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($e->id); ?></td>
                        <td class="text-center"><?php echo e($e->Category->name); ?></td>
                        <td class="text-center"><?php echo e($e->name); ?></td>
                        <td class="text-center"><?php echo e($e->state); ?></td>
                        <td class="text-center"><?php echo e($e->storage); ?></td>
                        <td class="text-center"><?php echo e($e->color); ?></td>
                        <td class="text-center"><?php echo e($e->description); ?></td>
                        <td class="text-center">
                            <img src="<?php echo e(asset('storage'). '/' . $e->image_path); ?>" alt="" style="width: 100px; height: 100px">
                        </td>
                        <?php if($e->stock <= 0): ?>
                            <td class="text-center">Sin Stock</td>
                        <?php else: ?>
                            <td class="text-center"><?php echo e($e->stock); ?></td>
                        <?php endif; ?>
                        <td class="text-center">$<?php echo e($e->price); ?></td>
                        <td class="align-center">
                            <button type="button" class="btn btn-danger" onclick="deleteProduct('<?php echo e($e->id); ?>','<?php echo e($e->name); ?>')">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-info" onclick="editProduct('<?php echo e($e->id); ?>','<?php echo e($e->Category->name); ?>','<?php echo e($e->category->id); ?>','<?php echo e($e->name); ?>','<?php echo e($e->stock); ?>','<?php echo e($e->price); ?>','<?php echo e($e->image_path); ?>','<?php echo e($e->description); ?>')">
                                <i class="fas fa-pen"></i>
                            </button>
                        </td>
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
<?php /**PATH C:\laragon\www\laravel-ecommerce-refmex\resources\views/layouts/inventario.blade.php ENDPATH**/ ?>