

<?php $__env->startSection('contenido'); ?>
    
    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('li').on('click', function() {
                $(this).siblings().removeClass('nav-item');
                $(this).addClass('nav-item');

                $(this).siblings().children().removeClass('active');
                $(this).children().addClass('active');

                var id = $(this).attr('id'); //Se obtiene el id del boton escogido

                var tabla = document.getElementById('tabla-' + id);
                $(tabla).removeClass('d-none');

                $(tabla).siblings().addClass('d-none');
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/admin.blade.php ENDPATH**/ ?>