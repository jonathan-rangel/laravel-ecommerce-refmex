<div class="container-fluid d-flex justify-content-center mt-5">
    <section class="container" id="tabla-inventario">
        <div class="container d-flex flex-row-reverse p-0">
            <button type="button" class="btn btn-success" onclick="addCategory()">
                <i class="fas fa-plus"></i>
                Añadir nueva categoría
            </button>
        </div>
        <div class="mt-3" style="height:800px; overflow:scroll;">
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
                    @foreach ($categories as $category)
                        <tr>
                            <td class="text-center">{{ $category->id }}</td>
                            <td class="text-center">{{ $category->name }}</td>
                            <td class="text-center">
                                <img src="{{asset('storage'). '/' . $category->image_path}}" alt="" style="width: 100px; height: 100px">
                            </td>
                            <td class="text-center align-center">
                                <button type="button" class="btn btn-danger"
                                    onclick="deleteCategory('{{ $category->id }}','{{ $category->name }}')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-info"
                                    onclick="editCategory('{{ $category->id }}','{{ $category->name }}','{{ $category->image_path }}')">
                                    <i class="fas fa-pen"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="modalContainer"></div>
    </section>
</div>
