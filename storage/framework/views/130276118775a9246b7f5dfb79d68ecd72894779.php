<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neu Timer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav id="nav" class="navbar navbar-expand-lg bg-body-tertiary-transparent fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <!--<img src="<?php echo e(URL('images/logo.jpg')); ?>" alt="Logo" style="width: 60px; height: 60px;">-->
      neu.
    </a>    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto ms-3 mb-2 mb-lg-0">
        <li class="nav-item me-2">
          <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="<?php echo e(url('/#about')); ?>">About</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="<?php echo e(url('/#features')); ?>">Features</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="<?php echo e(url('/#features')); ?>">Timer</a>
        </li>
      </ul>
        <div class="d-flex align-items-center gap-2">
      <?php if(auth()->guard()->check()): ?>
        <form method="GET" action="<?php echo e(url('products')); ?>">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-primary">Dashboard</button>
        </form>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-danger">Log out</button>
        </form>
      <?php else: ?>
        <a href="<?php echo e(route('login')); ?>" class="btn btn-success px-4">Log in</a>
      <?php endif; ?>
    </div>
  </div>
</nav>

<div class="container mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Edit Timer</h2>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\USER\Documents\Kelas 11\Website Data\app\crud\resources\views/show.blade.php ENDPATH**/ ?>