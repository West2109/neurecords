@extends('products.layout')

@section('content')

<div class="container mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Edit Notes</h2>
        <a class="btn btn-primary" href="{{ route('products.index') }}">← Back to List</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <strong>Whoops!</strong><br>There were some problems with your input.
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="image" class="form-label"><strong>Image</strong></label>
            <input type="file" name="image" class="form-control" id="image">
            <div class="mt-2">
                <img src="{{ asset('image/' . $product->image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 300px;">
            </div>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label"><strong>Name</strong></label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="name" placeholder="Enter product name">
        </div>

        <div class="mb-3">
            <label for="detail" class="form-label"><strong>Detail</strong></label>
            <textarea name="detail" id="detail" class="form-control" style="height:150px" placeholder="Enter product details">{{ $product->detail }}</textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success px-4 py-2 rounded-pill">Save</button>
        </div>
    </form>
</div>

@endsection