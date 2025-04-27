<!-- resources/views/admin/topics/edit.blade.php -->

@extends('layouts.admin')

@section('content')
<h1>Modifier le Sujet</h1>

<form action="{{ route('admin.topics.update', $topic->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Nom du Sujet</label>
        <input type="text" name="name" id="name" value="{{ $topic->name }}" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required>{{ $topic->description }}</textarea>
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

    <button type="submit">Mettre à jour le Sujet</button>
</form>
@endsection