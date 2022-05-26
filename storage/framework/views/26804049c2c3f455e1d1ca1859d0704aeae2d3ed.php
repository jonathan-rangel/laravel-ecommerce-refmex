<?php $__env->startSection('contenido'); ?>
    
    


    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).on('change', '#categoria', function(event) {
            var valor = $(this).val();
            $('#input-category').val(valor);
        });

        function addCategory() {
            const modalContainer = document.getElementById("modalContainer");
            var html =
                `<div class="modal fade" id="modalCategoria" tabindex="-1" aria-labelledby="" aria-hidden="true">
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

        function editCategory(id, categoria, image) {
            const modalContainer = document.getElementById("modalContainer");
            var html =
                `<div class="modal fade" id="modalCategoria" tabindex="-2" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="width:100%;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar categoria</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/guardaNuevaCategoria" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="identificador" value="${id}">
                                    <label for="">Categoría</label>
                                    <input class="form-control" type="text" name="category" id="category" value="${categoria}" required>
                                    <br>
                                    <label for="image_path">Imagen del slider de categorías</label>
                                    <input class="form-control mt-3" type="file" name="image_path" id="image_path" value="${image}" required>
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

        function deleteCategory(id, nombre) {
            const modalContainer = document.getElementById("modalContainer");
            var html =
                `<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:160%;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <i class="fas fa-exclamation-triangle"></i>
                            Eliminar categoría
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid d-flex flex-column justify-content-center align-items-center mt-2">
                        <label for="" class="fs-2">
                            ¿Deseas eliminar esta categoría?
                        </label>
                        <label for="" class="fs-3">
                            <strong>Nombre de la categoría:</strong>
                            ${nombre}
                        </label>
                        <p class="text-warning bg-dark">Todos los productos con esta categoría seran eliminados.</p>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <a href="/delete/category/${id}" class="btn btn-danger">
                                Eliminar
                            </a>
                    </div>
                </div>
            </div>
        </div>`;

            modalContainer.innerHTML = html;
            $("#modalDelete").modal("show");
        }
    </script>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.categorias', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/admin_categorias.blade.php ENDPATH**/ ?>