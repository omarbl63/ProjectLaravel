@extends('layouts.app')

@section('content')
<div class="category-page">
    <h1 class="category-title">Sujets dans "{{ $category }}"</h1>

    @if($topics->count() > 0)
    <div class="topics-grid">
        @foreach($topics as $topic)
        <div class="topic-card">
            <img src="{{ $topic->image ? asset('storage/' . $topic->image) : 'https://via.placeholder.com/150' }}" alt="{{ $topic->name }}" class="topic-image">
            <div class="topic-content">
                <h2>{{ $topic->name }}</h2>
                <p>{{ Str::limit($topic->description, 100) }}</p>
                <a href="#" class="view-button">Voir le sujet</a>

                <!-- Check if the topic has an audio file -->
                @if($topic->audio)
                <div class="audio-player">
                    <audio controls>
                        <source src="{{ asset('storage/' . $topic->audio) }}" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p class="no-topics">Aucun sujet trouvé dans cette catégorie.</p>
    @endif
</div>



<style>
    .category-page {
        padding: 30px;
        background-color: #f9f9f9;
    }

    .category-title {
        text-align: center;
        font-size: 32px;
        color: #333;
        margin-bottom: 20px;
        font-family: 'Comic Sans MS', sans-serif;
    }

    .topics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .topic-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s;
    }

    .topic-card:hover {
        transform: translateY(-5px);
    }

    .topic-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
    }

    .topic-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 200px;
        text-align: center;
    }

    .topic-content h2 {
        font-size: 24px;
        color: #333;
        font-family: 'Comic Sans MS', sans-serif;
        margin-bottom: 10px;
    }

    .topic-content p {
        color: #777;
        font-size: 14px;
        margin-bottom: 15px;
    }

    .view-button {
        padding: 10px 15px;
        background-color: #ff8c00;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    .view-button:hover {
        background-color: #e07a00;
    }

    .no-topics {
        text-align: center;
        font-size: 18px;
        color: #888;
    }

    .audio-player {
        margin-top: 15px;
    }

    .topic-image {
        width: 250px;
        height: 250px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        display: block;
        margin: 10px auto;
    }
</style>
@endsection