

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container marketing my-4">
    <div class="text-center mb-4">
        <h1> Sobre nosotros </h1>
    </div>
    <!-- Three columns of text below the carousel -->
    <div class="row text-center">
        <div class="col-lg-4">
            <img class="rounded-circle"
                src="/assets/about_images/fast-delivery.png"
                alt="Generic placeholder image" width="140" height="140">
            <h2>Envío rápido</h2>
            <p>Comprometidos en enviar tu smartphone en un lapso
                no mayor a 3 días hábiles.
            ¡No existe nadie más veloz que nosotros!</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle"
                src="/assets/about_images/quality.png"
                alt="Generic placeholder image" width="140" height="140">
            <h2>Calidad</h2>
            <p>¡Puedes estar tranquilo!
                La calidad de nuestros smartphones y de nuestra página está avalada por La asociación de ventas online de México.
            </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle"
                src="/assets/about_images/shield.png"
                alt="Generic placeholder image" width="140" height="140">
            <h2>Más que seguro</h2>
            <p>Los pagos realizados en esta página cuentan con seguridad de última generación para evitar robar tus datos.</p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">¿Quienes <span class="text-muted">somos en este mundo?</span></h2>
            <p class="lead">Somos una empresa dedicada a vender smartphones de la más alta calidad y procurando tener los mejores precios para nuestros valiosos clientes.
                Estamos seguros que si echas un vistazo a nuestro catálogo podrás entender de lo que estamos hablando.
            </p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="/assets/about_images/who.png"
                alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">¿Por qué nuestros <span class="text-muted">precios son tan bajos?</span></h2>
            <p class="lead">Debido a que nosotros compramos al mayoreo por medio de líneas extranjeras tenemos el privilegio de poder bajar nuetros precios
                sin que nos afecte. ¡Los dos salimos ganadores!</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="/assets/about_images/salary.png"
                alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/about_us.blade.php ENDPATH**/ ?>