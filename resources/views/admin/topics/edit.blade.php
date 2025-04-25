<!-- resources/views/admin/topics/edit.blade.php -->

@extends('layouts.admin')

@section('content')
<h1>Edit Topic</h1>

<form action="{{ route('admin.topics.update', $topic->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Topic Name</label>
        <input type="text" name="name" id="name" value="{{ $topic->name }}" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required>{{ $topic->description }}</textarea>
    </div>

    <button type="submit">Update Topic</button>
</form>
@endsection