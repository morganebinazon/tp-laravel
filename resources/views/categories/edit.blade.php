<!-- resources/views/categories/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Modifier la Catégorie')

@section('content')
    <h1>Modifier la Catégorie</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nom de la Catégorie</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
@endsection
