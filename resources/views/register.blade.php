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
          <a class="nav-link" href="{{ url('/#features') }}">Features</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="{{ route('login') }}">Notes</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="{{ url('/#about') }}">About</a>
        </li>
      </ul>
      <form class="d-flex ms-auto">
      <a href="{{ route('login') }}" class="btn btn-success px-4">Log in</a>
    </div>
  </div>
</nav>



<form method="POST" action="{{ route('login.attempt') }}"> 
  @csrf 
    <input type="email" name="email" placeholder="Email"> 
    <input type="password" name="password" placeholder="Password">  
    <button type="submit">Login</button> 
</form> 



<div class="d-flex justify-content-center align-items-center vh-100 bg-light" style="
  width: 100vw;
  background-image: url('{{ asset('images/cookingBackground.jpg') }}');
  background-size: cover;
  background-position: center;
  padding: 1rem;
">
  <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
    <h3 class="text-center mb-4">Register</h3>

    @if ($errors->any())
    <div class="alert alert-danger mb-4">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif

    <form method="POST" action="{{ route('register.store') }}">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password">
      </div>
      <div class="d-grid mt-3">
        <button type="submit" class="btn btn-dark">Register</button>
      </div>
      <div class="d-flex justify-content-center align-items-center mt-3 gap-2">
        <span>Already have an account?</span>
        <a href="{{ route('login') }}" class="text-decoration-none">Log in</a>
      </div>
    </form>
  </div>
</div>

<footer class="bg-dark text-white text-center py-3">
  <p>&copy; 2025 Neu Records. All rights reserved.</p>
  </div>  
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>