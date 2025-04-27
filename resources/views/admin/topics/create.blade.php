<!-- resources/views/admin/topics/create.blade.php -->

@extends('layouts.admin')

@section('content')
<h1>Créer un Nouveau Sujet</h1>

<form action="{{ route('admin.topics.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="name">Nom du Sujet</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
    </div>

    <!-- Nouveau champ Catégorie (Liste déroulante) -->
    <div>
        <label for="category">Catégorie</label>
        <select name="category" id="category" required>
            <option value="">-- Sélectionnez une catégorie --</option>
            <option value="Animals">Animaux</option>
            <option value="Transport">Transport</option>
            <option value="Food">Nourriture</option>
            <option value="Colors & Shapes">Couleurs & Formes</option>
            <option value="Food & Nutrition">Nourriture & Nutrition</option>
            <option value="Space & Planets">Espace & Planètes</option>
            <!-- Ajoutez plus de catégories si nécessaire -->
        </select>
    </div>

    <div>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept="image/*">
    </div>

    <div>
        <label for="video">Vidéo</label>
        <input type="file" name="video" id="video" accept="video/*">
    </div>

    <div>
        <label for="audio">Audio</label>
        <input type="file" name="audio" id="audio" accept="audio/*">
    </div>

    <button type="submit">Créer le Sujet</button>
</form>

@endsection