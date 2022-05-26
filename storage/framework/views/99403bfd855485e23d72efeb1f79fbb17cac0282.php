

<?php $__env->startSection('contenido'); ?>




<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).on('change', '#categoria', function(event) {
        var valor = $(this).val();
        $('#input-category').val(valor);
    });

    function addProduct() {
        const modalContainer = document.getElementById("modalContainer");
        var html =
            `<div class="modal fade" id="modalInventario" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:100%;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Añadir nuevo producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/storeProduct" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="identificador" value="">
                            <label for="">Categoría del producto</label>
                            <div class="d-flex flex-row mb-2">
                                <select class="form-select" aria-label="" name="categoria" id="categoria" required>
                                    <option value="" selected>Selecciona una categoría</option>
                                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($e->id); ?>"><?php echo e($e->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <input class="form-control" type="hidden" name="category_id" id="input-category" value="" required>
                            <br>

                            <label for="">Nombre del producto</label>
                            <input class="form-control" type="text" name="name" id="name" value="" required>
                            <br>

                            <div>
                                <label for="state">Estado del smartphone</label>
                                <select id="state" name="state" required>
                                    <option value="" selected>Estado</option>
                                    <option value="Nuevo">Nuevo</option>
                                    <option value="Seminuevo">Seminuevo</option>
                                    <option value="Reacondicionado">Reacondicionado</option>
                                </select>
                            </div>
                            <br>

                            <div>
                            <label for="storage">Almacenamiento del smartphone</label>
                            <select id="storage" name="storage" required>
                                <option value="" selected>Almacenamiento</option>
                                <option value="64">64</option>
                                <option value="128">128</option>
                                <option value="256">256</option>
                            </select>
                            </div>
                            <br>

                            <div>
                            <label for="color">Color del smartphone</label>
                            <select id="color" name="color" required>
                                <option value="" selected>Color</option>
                                <option value="Negro">Negro</option>
                                <option value="Blanco">Blanco</option>
                                <option value="Azul">Azul</option>
                            </select>
                            </div>
                            <br>

                            <label for="">Precio del producto</label>
                            <input class="form-control" type="number" name="price" id="price" value="" required>
                            <br>

                            <label for="">Descripción del producto</label>
                            <input class="form-control" type="text" name="description" id="description" value="" required>
                            <br>

                            <label for="">Imagen del producto</label>
                            <input class="form-control mt-3" type="file" name="image_path" id="image_path" value="" required>
                            <br>

                            <label for="">Cantidad de stock</label>
                            <input class="form-control" type="number" name="stock" id="stock" value="" required>
                            <br>

                            <label for="popular">¿Producto popular?</label>
                            <select id="popular" name="popular">
                                <option value="Sí">Sí</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>`;

        modalContainer.innerHTML = html;
        $("#modalInventario").modal("show");
    }

    function deleteProduct(id, nombre) {
        const modalContainer = document.getElementById("modalContainer");
        var html =
            `<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:160%;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <i class="fas fa-exclamation-triangle"></i>
                            Eliminar producto
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid d-flex flex-column justify-content-center align-items-center mt-2">
                        <label for="" class="fs-2">
                            ¿Deseas eliminar esta categoría?
                        </label>
                        <label for="" class="fs-3">
                            <strong>Nombre del producto:</strong>
                            ${nombre}
                        </label>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <a href="/delete/${id}" class="btn btn-danger">
                                Eliminar
                            </a>
                    </div>
                </div>
            </div>
        </div>`;

        modalContainer.innerHTML = html;
        $("#modalDelete").modal("show");
    }

    function editProduct(id, categoria, categoria_id, nombre, stock, precio, imagen, description) {
        const modalContainer = document.getElementById("modalContainerEditar");
        var html =
            `<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:100%;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/editProduct" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="identificador" value="${id}">
                            <label for="">Categoría del producto</label>
                            <div class="d-flex flex-row mb-2">
                                <select class="form-select" aria-label="" name="" id="" value="${categoria}" required>
                                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($e->id); ?>"><?php echo e($e->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <input class="form-control" type="hidden" name="category_id" id="input-category" value="${categoria_id}" required>
                            <br>

                            <label for="">Nombre del producto</label>
                            <input class="form-control" type="text" name="name" id="name" value="${nombre}">
                            <br>

                            <div>
                                <label for="state">Estado del smartphone</label>
                                <select id="state" name="state">
                                    <option value="Nuevo">Nuevo</option>
                                    <option value="Seminuevo">Seminuevo</option>
                                    <option value="Reacondicionado">Reacondicionado</option>
                                </select>
                            </div>
                            <br>

                            <div>
                            <label for="storage">Estado del smartphone</label>
                            <select id="storage" name="storage">
                                <option value="64">64</option>
                                <option value="128">128</option>
                                <option value="256">256</option>
                            </select>
                            </div>
                            <br>

                            <div>
                            <label for="color">Estado del smartphone</label>
                            <select id="color" name="color">
                                <option value="Negro">Negro</option>
                                <option value="Blanco">Blanco</option>
                                <option value="Azul">Azul</option>
                            </select>
                            </div>
                            <br>

                            <label for="">Descripción del producto</label>
                            <input class="form-control" type="text" name="description" id="description" value="${description}" required>
                            <br>

                            <label for="">Cantidad de stock</label>
                            <input class="form-control" type="number" name="stock" id="stock" value="${stock}">
                            <br>

                            <label for="">Precio del producto</label>
                            <input class="form-control" type="number" name="price" id="price" value="${precio}">
                            <br>

                            <label for="">Imagen del producto</label>
                            <input class="form-control mt-3" type="file" name="image_path" id="image_path" value="${imagen}">
                            <br>

                            <label for="popular">¿Producto popular?</label>
                            <select id="popular" name="popular">
                                <option value="Sí">Sí</option>
                                <option value="No">No</option>
                            </select>
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>`;

        modalContainer.innerHTML = html;
        $("#modalEditar").modal("show");
    }

    function addCategory() {
        const modalContainer = document.getElementById("modalContainer2");
        var html =
            `<div class="modal fade" id="modalCategoria" tabindex="-2" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:100%;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Añadir Nueva Categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/guardaNuevaCategoria" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="identificador" value="">
                            <label for="">Categoría</label>
                            <input class="form-control" type="text" name="category" id="category" value="" required>
                            <br>
                            <label for="image_path">Imagen del slider de categorías</label>
                            <input class="form-control mt-3" type="file" name="image_path" id="image_path" value="" required>
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>`;

        modalContainer.innerHTML = html;
        $("#modalCategoria").modal("show");
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.inventario', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/admin_inventario.blade.php ENDPATH**/ ?>