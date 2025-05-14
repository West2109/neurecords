<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neu Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">  
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
          <a class="nav-link" href="<?php echo e(url('/#features')); ?>">Features</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="<?php echo e(url('/#about')); ?>">About</a>
        </li>
      </ul>
      <div class="d-flex align-items-center gap-2">
        <?php if(auth()->guard()->check()): ?>
          <form method="GET" action="<?php echo e(url('products')); ?>">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-primary">Notes</button>
          </form>
          <form class="d-flex ms-auto" method="POST" action="<?php echo e(route('logout')); ?>">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-danger">Log out</button>
          </form>
        <?php else: ?>
          <a href="<?php echo e(route('login')); ?>" class="btn btn-success">Log in</a>
        <?php endif; ?>
    </div>
  </div>
</nav>

<div class="container" style="
  margin-top: 7rem;
">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html><?php /**PATH C:\Users\USER\Documents\Kelas 11\Website Data\app\neurecords\resources\views/products/layout.blade.php ENDPATH**/ ?>