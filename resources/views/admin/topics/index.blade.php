<!-- resources/views/admin/topics/index.blade.php -->

@extends('layouts.admin')

@section('content')
<h1>Panneau d'Administration - Sujets</h1>

<a href="{{ route('admin.topics.create') }}">Créer un Nouveau Sujet</a>

<ul>
    @foreach($topics as $topic)
    <li>
        <h3>{{ $topic->name }}</h3>
        <p>{{ $topic->description }}</p>
        <a href="{{ route('admin.topics.edit', $topic->id) }}">Modifier</a>

        <form action="{{ route('admin.topics.destroy', $topic->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete_button">Supprimer</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection