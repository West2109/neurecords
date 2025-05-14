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
        <?php if(auth()->guard()->check()): ?>
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

<div class="container my-5 py-5 vh-100">
    <div class="text-center mb-5">
        <h1>Welcome Back, <?php echo e(Auth::user()->name); ?>!</h1>
        <p class="lead text-muted">Here's an overview of your admin dashboard.</p>
    </div>

    <div class="d-flex">
      <a class="btn btn-primary mb-3" href="">Create</a>
      <div class="input-group mb-3" style="max-width: 500px; margin: 0 auto;">
        <input class="form-control" type="search" placeholder="e.g. soft boiled eggs" aria-label="Search" disabled>
        <button class="btn btn-dark" type="submit" disabled>
        <i class="bi bi-search"></i> Search
        </button>
      </div>
    </div>

    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Alarm List</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Time</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>*image</td>
                        <td>*title</td>
                        <td>--.--</td>
                        <td>*description</td>
                        <td>
                          <div class="d-flex gap-2 ms-auto">
                          <form method="POST" action="">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-primary" type="submit">Edit</button>
                          </form>
                          <form method="POST" action="">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger" type="submit">Show</button>
                          </form>
                          <form method="POST" action="">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                          </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3">
  <div style="
  padding: 1rem;
">
  <p>&copy; 2025 Neu Timer. All rights reserved.</p>
  </div>  
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\USER\Documents\Kelas 11\Website Data\app\crud\resources\views/dashboard.blade.php ENDPATH**/ ?>