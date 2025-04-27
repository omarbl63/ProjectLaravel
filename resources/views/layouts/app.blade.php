<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>

<body>
    <!-- Début de l'en-tête -->
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
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <li><a href="{{ url('/topics') }}">Sujets</a></li>
                    <li><a href="{{ url('/') }}#about">À propos</a></li>
                    <li><a href="{{ url('/') }}#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Fin de l'en-tête -->
    @yield('content')
</body>

</html>