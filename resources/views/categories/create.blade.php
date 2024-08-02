<!-- resources/views/categories/create.blade.php -->

@extends('layouts.app')

@section('title', 'Créer une Catégorie')

@section('content')
    <h1>Créer une Catégorie</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom de la Catégorie</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
@endsection
