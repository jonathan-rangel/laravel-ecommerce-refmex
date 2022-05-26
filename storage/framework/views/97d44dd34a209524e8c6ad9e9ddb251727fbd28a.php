<div class="container-fluid d-flex justify-content-center mt-5">
    <section class="container" id="tabla-inventario">
        <div class="container d-flex flex-row-reverse p-0">
            <button type="button" class="btn btn-success" onclick="addCategory()">
                <i class="fas fa-plus"></i>
                Añadir nueva categoría
            </button>
        </div>
        <div class="mt-3" style="overflow:scroll;">
            <table class="table table-hover align-middle">
                <thead>
                    <tr class="text-center align-middle">
                        <th scope="col">No. de la categoría</th>
                        <th scope="col">Nombre de la categoría</th>
                        <th scope="col">Imagen de la categoría</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($category->id); ?></td>
                            <td class="text-center"><?php echo e($category->name); ?></td>
                            <td class="text-center">
                                <img src="<?php echo e(asset('storage'). '/' . $category->image_path); ?>" alt="" style="width: 100px; height: 100px">
                            </td>
                            <td class="text-center align-center">
                                <button type="button" class="btn btn-danger"
                                    onclick="deleteCategory('<?php echo e($category->id); ?>','<?php echo e($category->name); ?>')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-info"
                                    onclick="editCategory('<?php echo e($category->id); ?>','<?php echo e($category->name); ?>','<?php echo e($category->image_path); ?>')">
                                    <i class="fas fa-pen"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div id="modalContainer"></div>
    </section>
</div>
<?php /**PATH C:\laragon\www\laravel-ecommerce-refmex\resources\views/layouts/categorias.blade.php ENDPATH**/ ?>