<div class="container-fluid d-flex justify-content-center mt-5">
    <section class="container" id="tabla-inventario">
        <div class="container d-flex flex-row-reverse p-0">
            <button type="button" class="btn btn-success" onclick="addProduct()">
                <i class="fas fa-plus"></i>
                Añadir Nuevo Producto
            </button>
        </div>
        <div class="mt-3" style="height:800px; overflow:scroll;">
            <table class="table table-hover align-middle">
                <thead>
                    <tr class="text-center align-middle">
                        <th scope="col">No. de Producto</th>
                        <th scope="col">Categoria</th>
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
                    @foreach($inventario as $e)
                    <tr>
                        <td class="text-center">{{$e->id}}</td>
                        <td class="text-center">{{$e->Category->name}}</td>
                        <td class="text-center">{{$e->name}}</td>
                        <td class="text-center">{{$e->state}}</td>
                        <td class="text-center">{{$e->storage}}</td>
                        <td class="text-center">{{$e->color}}</td>
                        <td class="text-center">{{$e->description}}</td>
                        <td class="text-center">
                            <img src="{{asset('storage'). '/' . $e->image_path}}" alt="" style="width: 100px; height: 100px">
                        </td>
                        @if($e->stock <= 0)
                            <td class="text-center">Sin Stock</td>
                        @else
                            <td class="text-center">{{$e->stock}}</td>
                        @endif
                        <td class="text-center">${{$e->price}}</td>
                        <td class="align-center">
                            <button type="button" class="btn btn-danger" onclick="deleteProduct('{{$e->id}}','{{$e->name}}')">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-info" onclick="editProduct('{{$e->id}}','{{$e->Category->name}}','{{$e->category->id}}','{{$e->name}}','{{$e->stock}}','{{$e->price}}','{{$e->image_path}}','{{$e->description}}')">
                                <i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
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
