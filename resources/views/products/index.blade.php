<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neu Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
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
          <a class="nav-link" href="{{ url('/#about') }}">About</a>
        </li>
      </ul>
        <div class="d-flex align-items-center gap-2">
        @auth
          <form method="GET" action="{{ url('products') }}">
          @csrf
          <button type="submit" class="btn btn-primary">Notes</button>
          </form>
          <form class="d-flex ms-auto" method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger">Log out</button>
          </form>
        @else
          <a href="{{ route('login') }}" class="btn btn-success">Log in</a>
        @endauth
    </div>
  </div>
</nav>

<div class="container" style="
    margin-top: 7rem;
    margin-bottom: 7rem;
">
    <div class="text-center mb-5">
        <h1>Let's Cook, {{ Auth::user()->name }}!</h1>
        <p class="lead text-muted">Here's an overview of your cooking notes.</p>
    </div>

    <div class="d-flex">
        <a class="btn btn-success mb-3" href="{{ route('products.create') }}">Create</a>
        <div class="input-group mb-3" style="max-width: 500px; margin: 0 auto;">
            <input class="form-control" type="search" placeholder="e.g. soft boiled eggs" aria-label="Search" disabled>
            <button class="btn btn-dark" type="submit" disabled>
            <i class="bi bi-search"></i> Search
            </button>
        </div>
    </div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div id="table-data">
<div class="card shadow">
<div class="card-header bg-dark text-white">
<h5 class="mb-0">Notes List</h5>
</div>
<div class="card-body p-0">
<table class="table table-bordered mb-0">
    <thead class="table-light">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col" width="280px">Action</th>
    </tr>
    </thead>
    @foreach ($products as $product)
    <tbody>
    <tr>
        <th scope="row">{{ ++$i }}</th>
        <td><img src="/image/{{ $product->image }}" width="100px"></td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                <a class="btn btn-info" style="color: white;" href="{{ route('products.show', $product->id) }}">See</a>
                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    </tbody>
    @endforeach
</table>
</div>
</div>

<div class="d-flex justify-content-center mt-3">
  {!! $products->links() !!}
</div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>