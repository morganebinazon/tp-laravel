<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>All Products</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create New Product</a>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Create New Categorie</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <form action="{{ route('products.edit', $product->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-danger">Mise à jour</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
