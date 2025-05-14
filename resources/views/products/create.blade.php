@extends('products.layout')

@section('content')

<div class="container vh-100">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Create New Notes</h2>
        <a class="btn btn-primary" href="{{ route('products.index') }}">← Back to List</a>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger mb-4">
        <strong>Whoops!</strong><br>There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="p-4 shadow rounded bg-light">
    @csrf

    <div class="mb-3">
        <label for="image" class="form-label"><strong>Image</strong></label>
        <input type="file" name="image" id="image" class="form-control">
    </div>

    <div class="mb-3">
        <label for="name" class="form-label"><strong>Title</strong></label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter notes title">
    </div>

    <div class="mb-3">
        <label for="detail" class="form-label"><strong>Description</strong></label>
        <textarea name="detail" id="detail" class="form-control" style="height: 150px" placeholder="Enter notes description"></textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success px-4 py-2 rounded-pill">Submit</button>
    </div>
</form>

</div>

@endsection