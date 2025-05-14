

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0"><?php echo e($product->name); ?></h2>
        <a class="btn btn-primary" href="<?php echo e(route('products.index')); ?>">← Back to List</a>
    </div>

    <div class="p-4 shadow rounded bg-light">

        <div class="mb-3">
            <div class="mt-2">
                <img src="/image/<?php echo e($product->image); ?>" style="max-width: 300px;">
            </div>
        </div>

        <div class="form-group mb-1">
            <?php echo e($product->detail); ?>

        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Documents\Kelas 11\Website Data\app\neurecords\resources\views/products/show.blade.php ENDPATH**/ ?>