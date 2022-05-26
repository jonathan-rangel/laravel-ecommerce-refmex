<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>PDF</title>
</head>

<body>
    <div class="d-flex align-items-center container bg-secondary mt-5 p-3">
        <h1 class="display-2" style="color: white">RefMex</h1>
    </div>
    <div class="container">
        <section class="ms-1 me-1 mt-3 mb-2 border-bottom border-3 pb-2">
            <strong style="font-size: 24px;">
                Detalles del pedido #<?php echo e($pedido->id); ?>

            </strong>
        </section>
        <div class="container">
            <div class="col text-center">
                <div class="row border-bottom border-3 pb-2">
                    <strong class="mb-4" style="font-size: 20px;">
                        Datos del comprador
                    </strong>
                    <div class="col">
                        <div class="ms-1 d-flex flex-row ">
                            <div>
                                <strong>
                                    Nombre:
                                </strong>
                            </div>
                            <div class="ms-2">
                                <?php echo e(Auth::user()->name); ?>

                            </div>
                        </div>
                        <div class="ms-1 d-flex flex-row ">
                            <div>
                                <strong>
                                    Email:
                                </strong>
                            </div>
                            <div class="ms-2">
                                <?php echo e(Auth::user()->email); ?>

                            </div>
                        </div>
                        <div class="ms-1 d-flex flex-row ">
                            <div>
                                <strong>
                                    Fecha del pedido:
                                </strong>
                            </div>
                            <div class="ms-2">
                                <?php echo e($pedido->created_at->diffForHumans()); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <strong style="font-size: 20px;">
                        Smartphones
                    </strong>
                    <div class="container">
                        <table class="table table-bordered border border-3 align-middle mt-4 text-center">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio Unitario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center">
                                        <td>
                                            <img src="<?php echo e(asset('storage') . '/' . $p->Product->image_path); ?>" alt=""
                                                style="width: 100px; height: 100px">
                                        </td>
                                        <td>
                                            <?php echo e($p->Product->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($p->quantity); ?>

                                        </td>
                                        <td>
                                            $<?php echo e($p->Product->price); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="container d-flex p-0" style="background-color:#f5f5f5">
                            <div class="col col-7"></div>
                            <div class="col col-3">
                                <strong style="font-size: 20px; color:#1d6ca1;">
                                    Total a pagar
                                </strong>
                            </div>
                            <div class="col col-2 d-flex align-items-center justify-content-center">
                                <strong style="font-size: 20px; color:#1d6ca1;">
                                    $<?php echo e($pedido->total); ?>

                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/pdf-online.blade.php ENDPATH**/ ?>