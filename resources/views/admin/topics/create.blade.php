<!-- resources/views/admin/topics/create.blade.php -->

@extends('layouts.admin')

@section('content')
<h1>Create New Topic</h1>

<form action="{{ route('admin.topics.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="name">Topic Name</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
    </div>

    <div>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept="image/*">
    </div>

    <div>
        <label for="video">Video</label>
        <input type="file" name="video" id="video" accept="video/*">
    </div>

    <div>
        <label for="audio">Audio</label>
        <input type="file" name="audio" id="audio" accept="audio/*">
    </div>

    <button type="submit">Create Topic</button>
</form>

@endsection