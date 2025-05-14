

<?php $__env->startSection('content'); ?>

<div class="container vh-100">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Create New Notes</h2>
        <a class="btn btn-primary" href="<?php echo e(route('products.index')); ?>">← Back to List</a>
    </div>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger mb-4">
        <strong>Whoops!</strong><br>There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data" class="p-4 shadow rounded bg-light">
    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label for="image" class="form-label"><strong>Image</strong></label>
        <input type="file" name="image" id="image" class="form-control">
    </div>

    <div class="mb-3">
        <label for="name" class="form-label"><strong>Title</strong></label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter notes title">
    </div>

    <div class="mb-3">
        <label for="detail" class="form-label"><strong>Description</strong></label>
        <textarea name="detail" id="detail" class="form-control" style="height: 150px" placeholder="Enter notes description"></textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success px-4 py-2 rounded-pill">Submit</button>
    </div>
</form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Documents\Kelas 11\Website Data\app\crud\resources\views/products/create.blade.php ENDPATH**/ ?>