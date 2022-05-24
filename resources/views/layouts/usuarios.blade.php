<div class="container-fluid d-flex justify-content-center mt-5">
    <section class="container" id="tabla-inventario">
        <div class="mt-3" style="height:800px; overflow:scroll;">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fecha de creacion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $e)
                    @if($e->tipo == 1)
                    <tr>
                        <td>{{$e->name}}</td>
                        <td>{{$e->email}}</td>
                        <td>{{$e->created_at->diffForHumans()}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="modalContainer">

        </div>
    </section>
</div>
