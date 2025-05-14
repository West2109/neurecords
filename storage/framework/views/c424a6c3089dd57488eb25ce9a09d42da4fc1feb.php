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
          <a class="nav-link" href="<?php echo e(url('/#features')); ?>">Features</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="<?php echo e(url('/#features')); ?>">Notes</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="<?php echo e(url('/#about')); ?>">About</a>
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

<div id="home" style="
  padding-top: 7rem;
  display: flex;
">
  <div class="container text-black text-center">
    <h1>Cooking Timer</h1>
    <p style="font-size: 20px; margin-bottom: 20px;">Let's cook with precise.</p>
    <div class="input-group mb-3" style="max-width: 500px; margin: 0 auto;">
    <input class="form-control" type="search" placeholder="e.g. soft boiled eggs" aria-label="Search" disabled>
    <button class="btn btn-outline-dark" type="submit" disabled>
      <i class="bi bi-search"></i> Search
    </button>
  </div>
  </div>
</div>

<div id="results" class="container px-3" style="
  width: 100vw;
">
  <h2 class="mb-4">Search Results:</h2>
  <div class="row">
    <!-- Results -->
  <div class="col-12 col-md-4 col-lg-3 mb-4">
    <a href="/your-target-url" class="text-decoration-none text-dark d-block h-100">
      <div class="card h-100">
        <div class="ratio ratio-4x3">
          <img src="<?php echo e(url('images/imageExample.jpg')); ?>" class="card-img-top object-fit-cover" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">*name</h5>
          <p class="card-text">*time</p>
          <p class="card-text">*description</p>
        </div>
      </div>
    </a>
  </div>
    <!-- Results -->
  </div>
</div>

<div id="features" class="container px-3" style="
  width: 100vw;
">
  <h2 class="mb-4">Trending</h2>
  <div class="row">
    <!-- Results -->
  <div class="col-12 col-md-4 col-lg-3 mb-4">
    <a href="/your-target-url" class="text-decoration-none text-dark d-block h-100">
      <div class="card h-100">
        <div class="ratio ratio-4x3">
          <img src="<?php echo e(asset('images/imageExample.jpg')); ?>" class="card-img-top object-fit-cover" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">*name</h5>
          <p class="card-text">*time</p>
          <p class="card-text">*description</p>
        </div>
      </div>
    </a>
  </div>
    <!-- Results -->
  </div>
</div>

<footer class="bg-dark text-white text-center py-3">
  <p>&copy; 2025 Neu Timer. All rights reserved.</p>
  </div>  
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\USER\Documents\Kelas 11\Website Data\app\crud\resources\views/cooking.blade.php ENDPATH**/ ?>