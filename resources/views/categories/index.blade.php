<!-- resources/views/categories/index.blade.php -->

@extends('layouts.app')

@section('title', 'Liste des Catégories')

@section('content')
    <h1>Liste des Catégories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Créer une nouvelle catégorie</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
