<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category ID</label>
            <select class="form-select" id="category_id" name="category_id">
                <option selected>Select a category...</option>
                @forelse ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @empty
                    <option disabled>No categories found.</option>
                @endforelse
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
@endsection
