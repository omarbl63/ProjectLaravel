<!-- resources/views/topics/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Topics</h1>

<ul>
    @foreach($topics as $topic)
    <li>
        <h3>{{ $topic->name }}</h3>
        <p>{{ $topic->description }}</p>
    </li>
    @endforeach
</ul>
@endsection