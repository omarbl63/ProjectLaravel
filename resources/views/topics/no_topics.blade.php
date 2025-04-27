<!-- resources/views/no_topics.blade.php -->

@extends('layouts.app')

@section('content')
<div class="no-topics-page">
    <h1>Aucun sujet trouvé</h1>
    <p>Il n'y a actuellement aucun sujet disponible dans cette catégorie. Veuillez revenir plus tard.</p>
</div>

<style>
    .no-topics-page {
        text-align: center;
        margin-top: 50px;
    }

    .no-topics-page h1 {
        font-size: 32px;
        color: #333;
        font-family: 'Comic Sans MS', sans-serif;
    }

    .no-topics-page p {
        font-size: 18px;
        color: #777;
    }
</style>
@endsection