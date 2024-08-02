<!-- resources/views/categories/show.blade.php -->

@extends('layouts.app')

@section('title', 'Détails de la Catégorie')

@section('content')
    <h1>Détails de la Catégorie</h1>
    <p><strong>ID:</strong> {{ $category->id }}</p>
    <p><strong>Nom:</strong> {{ $category->name }}</p>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour à la liste</a>
@endsection
