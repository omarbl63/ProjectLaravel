<!-- resources/views/admin/topics/index.blade.php -->

@extends('layouts.admin')

@section('content')
<h1>Admin Dashboard - Topics</h1>

<a href="{{ route('admin.topics.create') }}">Create New Topic</a>

<ul>
    @foreach($topics as $topic)
    <li>
        <h3>{{ $topic->name }}</h3>
        <p>{{ $topic->description }}</p>
        <a href="{{ route('admin.topics.edit', $topic->id) }}">Edit</a>

        <form action="{{ route('admin.topics.destroy', $topic->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection