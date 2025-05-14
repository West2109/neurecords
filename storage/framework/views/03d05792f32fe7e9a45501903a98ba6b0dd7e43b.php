

<?php $__env->startSection('content'); ?>

<div class="container mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Edit Notes</h2>
        <a class="btn btn-primary" href="<?php echo e(route('products.index')); ?>">← Back to List</a>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger mb-4">
            <strong>Whoops!</strong><br>There were some problems with your input.
            <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="image" class="form-label"><strong>Image</strong></label>
            <input type="file" name="image" class="form-control" id="image">
            <div class="mt-2">
                <img src="<?php echo e(asset('image/' . $product->image)); ?>" alt="Current Image" class="img-thumbnail" style="max-width: 300px;">
            </div>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label"><strong>Name</strong></label>
            <input type="text" name="name" value="<?php echo e($product->name); ?>" class="form-control" id="name" placeholder="Enter product name">
        </div>

        <div class="mb-3">
            <label for="detail" class="form-label"><strong>Detail</strong></label>
            <textarea name="detail" id="detail" class="form-control" style="height:150px" placeholder="Enter product details"><?php echo e($product->detail); ?></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success px-4 py-2 rounded-pill">Save</button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Documents\Kelas 11\Website Data\app\crud\resources\views/products/edit.blade.php ENDPATH**/ ?>