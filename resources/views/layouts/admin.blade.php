<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panneau d'Administration</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <!-- Début de l'En-tête -->
    <div class="header">
        <div class="container">
            <a href="{{ url('/') }}">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{ route('login') }}">Se connecter</a></li>
                    <li><a href="{{ route('topics.index') }}">Sujets</a></li>
                    <li><a href="{{ url('/') }}#about">À propos</a></li>
                    <li><a href="{{ url('/') }}#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Fin de l'En-tête -->

    <!-- En-tête -->
    <header>
        <a href="{{ route('admin') }}">Panneau d'Administration</a>
    </header>

    <div class="parent_div">
        <!-- Barre latérale -->
        <div class="sidebar">
            <h2>Panneau Admin</h2>
            <a href="{{ route('admin.topics.index') }}">Sujets</a>
            <a href="{{ route('admin.topics.create') }}">Ajouter un Sujet</a>
            <a href="{{ url('/') }}">Se Déconnecter</a>
        </div>

        <!-- Contenu Principal -->
        <div class="main-content">
            <h1>Bienvenue dans le Panneau d'Administration</h1>

            @if (session('success'))
            <div class="message">{{ session('success') }}</div>
            @endif

            @yield('content') <!-- C'est ici que le contenu d'autres pages sera injecté -->
        </div>
    </div>

</body>

</html>