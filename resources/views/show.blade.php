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
      <!--<img src="{{ URL('images/logo.jpg') }}" alt="Logo" style="width: 60px; height: 60px;">-->
      neu.
    </a>    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto ms-3 mb-2 mb-lg-0">
        <li class="nav-item me-2">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="{{ url('/#about') }}">About</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="{{ url('/#features') }}">Features</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="{{ url('/#features')}}">Timer</a>
        </li>
      </ul>
        <div class="d-flex align-items-center gap-2">
      @auth
        <form method="GET" action="{{ url('products') }}">
          @csrf
          <button type="submit" class="btn btn-primary">Dashboard</button>
        </form>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger">Log out</button>
        </form>
      @else
        <a href="{{ route('login') }}" class="btn btn-success px-4">Log in</a>
      @endauth
    </div>
  </div>
</nav>

<div id="home" style="
  padding-top: 7rem;
  display: flex;
">
  <div class="container text-black">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">*title</h2>
        <a class="btn btn-primary" href="{{ route('products.index') }}">← Back to List</a>
    </div>
    <p style="font-size: 20px; margin-bottom: 20px;">*description</p>
    <div class="input-group mb-3" style="max-width: 500px; margin: 0 auto;">
  </div>
  </div>
</div>

<div id="results" class="container px-3" style="
    height: 100vh;
">
  <div>
    <!-- Results -->
        <div>
          <img src="{{ url('images/imageExample.jpg') }}" alt="*image" style="
            width: 100%;
            height: auto;
            max-width: 300px;
          ">
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
</html>