@extends('products.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">{{ $product->name }}</h2>
        <a class="btn btn-primary" href="{{ route('products.index') }}">← Back to List</a>
    </div>

    <div class="p-4 shadow rounded bg-light">

        <div class="mb-3">
            <div class="mt-2">
                <img src="/image/{{ $product->image }}" style="max-width: 300px;">
            </div>
        </div>

        <div class="form-group mb-1">
            {{ $product->detail }}
        </div>

    </div>
</div>

@endsection