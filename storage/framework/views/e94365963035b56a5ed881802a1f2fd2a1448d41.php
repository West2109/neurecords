<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neu Records</title>
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
        <?php if(auth()->guard()->check()): ?>

        <?php else: ?>
        <li class="nav-item me-2">
          <a class="nav-link" href="<?php echo e(route('login')); ?>">Notes</a>
        </li>
        <?php endif; ?>
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
        <form method="POST" action="<?php echo e(route('logout')); ?>">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-danger">Log out</button>
        </form>
      <?php else: ?>
        <a href="<?php echo e(route('login')); ?>" class="btn btn-success px-4">Log in</a>
      <?php endif; ?>
    </div>
    </div>
  </div>
</nav>

<div id="home" style="
  background-image: url('<?php echo e(asset('images/cookingBackground.jpg')); ?>');
  width: 100vw;
  min-height: 100vh;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
">
  <div class="container text-white">
    <h1>Welcome to Neu Records</h1>
    <p>Your utmost solution for notes.</p>
    <a href="#features" class="btn btn-outline-light">Get Started</a>
  </div>
</div>

<div id="features" class="container px-3">
  <h2 class="mb-4">Features</h2>
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="ratio ratio-1x1">
          <img src="<?php echo e(asset('images/cookingThumbnail.avif')); ?>" class="card-img-top object-fit-cover" alt="...">
        </div>
          <div class="card-body">
          <h5 class="card-title">Cooking Notes</h5>
          <p class="card-text">Help you remember recipes.</p>
        </div>
        <div class="card-body d-flex justify-content-between">
          <?php if(auth()->guard()->check()): ?>
          <form method="GET" action="<?php echo e(url('products')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-outline-dark">Go</button>
          </form>
          <?php else: ?>
          <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-dark">Try</a>
          <?php endif; ?>
          <button type="button" class="btn btn-outline-secondary" disabled>Suggest an addition</button>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="ratio ratio-1x1">
          <img src="<?php echo e(asset('images/studyingThumbnail.jpg')); ?>" class="card-img-top object-fit-cover" alt="...">
        </div>
          <div class="card-body">
          <h5 class="card-title">Studying Notes</h5>
          <p class="card-text">Help you stay on track.</p>
        </div>
        <div class="card-body d-flex justify-content-center">
          <button type="button" class="btn btn-outline-secondary" disabled>Coming soon</button>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="ratio ratio-1x1">
          <img src="<?php echo e(asset('images/productivityThumbnail.jpeg')); ?>" class="card-img-top object-fit-cover" alt="...">
        </div>
          <div class="card-body">
          <h5 class="card-title">Productivity</h5>
          <p class="card-text">Help you stay in shape.</p>
        </div>
        <div class="card-body d-flex justify-content-center">
          <button type="button" class="btn btn-outline-secondary" disabled>Coming soon</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="about" class="container mt-5">
  <h2>About Us</h2>
  <p>Neu Records is a web application designed to help you manage your notes effectively. 
  With our intuitive interface and powerful features, you can track your tasks and stay organized.</p>
  <p>Note(s) is of great importance, that's why our clients have been using Neu Records for their best choice.</p> 
  <div id="testimonials" class="container mt-5">
  <div class="row mt-4 gap-5">
    <!-- Client 1 -->
    <div class="col-md-3 text-center p-4 mb-4" style="border: 2px solidrgb(0, 0, 0); border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
      <img src="<?php echo e(asset('images/americanClient.webp')); ?>" alt="Client 1" class="rounded-circle" style="width: 100px; height: 100px;">
      <h5 class="mt-3">Walter H. White</h5>
      <p class="text-muted">United States</p>
      <p>"Neu Records has completely transformed the way I manage my tasks. Looking forward to the studying notes feature!"</p>
    </div>
    <!-- Client 2 -->
    <div class="col-md-3 text-center p-4 mb-4" style="border: 2px solidrgb(0, 0, 0); border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
      <img src="<?php echo e(asset('images/belgiumClient.jpg')); ?>" alt="Client 2" class="rounded-circle" style="width: 100px; height: 100px;">
      <h5 class="mt-3">Einstein Jr.</h5>
      <p class="text-muted">Canada</p>
      <p>"The best notes tool I've ever used. Cooking was the only thing I had difficulty in. It's simple and effective!"</p>
    </div>
    <!-- Client 3 -->
    <div class="col-md-3 text-center p-4 mb-4" style="border: 2px solidrgb(0, 0, 0); border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
      <img src="<?php echo e(asset('images/thaiClient.jpg')); ?>" alt="Client 3" class="rounded-circle" style="width: 100px; height: 100px;">
      <h5 class="mt-3">Chimon</h5>
      <p class="text-muted">Thailand</p>
      <p>"Neu Records helps me stay productive every day. I would never eat an overcooked egg again. I love it!"</p>
    </div>
  </div>
</div>
</div>

<footer class="bg-dark text-white text-center py-3">
  <p>&copy; 2025 Neu Records. All rights reserved.</p>
  </div>  
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\USER\Documents\Kelas 11\Website Data\app\neurecords\resources\views/home.blade.php ENDPATH**/ ?>