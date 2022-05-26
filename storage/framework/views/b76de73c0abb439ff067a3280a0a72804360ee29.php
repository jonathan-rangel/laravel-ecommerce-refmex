<div class="container d-flex justify-content-between align-items-center my-4">
    <?php
        $categories = DB::table('categories')->get();
    ?>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card" style="width: 25rem;">
        <img src="/storage/<?php echo e($category->image_path); ?>" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h5 class="card-title"> <?php echo e($category->name); ?> </h5>
            <a href=" <?php echo e(url('/smartphones/' . $category->name)); ?> " class="btn btn-primary">Ver categoría</a>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\Users\Jonathan\Desktop\Laravel\laravel-ecommerce-refmex\resources\views/layouts/slider.blade.php ENDPATH**/ ?>