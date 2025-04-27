<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sujets</title>
    <link rel="stylesheet" href="{{ asset('css/topics.css') }}">
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

    <div class="overlay"></div>
    <main>
        <section class="topics-header">
            <h1>Sujets éducatifs</h1>
            <p>Explorez différentes catégories d'apprentissage</p>
        </section>

        <section class="topics-list">
            <div class="topic-item">
                <img src="{{ asset('images/animals.jpg') }}" alt="Animaux">
                <h2><a href="{{ route('topics.byCategory', 'Animals') }}">Animaux</a></h2>
                <p>Apprenez à connaître les différents animaux à travers le monde.</p>
            </div>
            <div class="topic-item">
                <img src="{{ asset('images/transport.jpg') }}" alt="Transport">
                <h2><a href="{{ route('topics.byCategory', 'Transport') }}">Transport</a></h2>
                <p>Découvrez les différents modes de transport et leurs utilisations.</p>
            </div>
            <div class="topic-item">
                <img src="{{ asset('images/cands.jpg') }}" alt="Couleurs et Formes">
                <h2><a href="{{ route('topics.byCategory', 'Colors & Shapes') }}">Couleurs et Formes</a></h2>
                <p>Explorez le monde des couleurs et des formes de base.</p>
            </div>
            <div class="topic-item">
                <img src="{{ asset('images/space.jpg') }}" alt="Espace et Planètes">
                <h2><a href="{{ route('topics.byCategory', 'Space & Planets') }}">Espace et Planètes</a></h2>
                <p>Apprenez tout sur notre système solaire et l'univers.</p>
            </div>
            <div class="topic-item">
                <img src="{{ asset('images/food.jpg') }}" alt="Alimentation et Nutrition">
                <h2><a href="{{ route('topics.byCategory', 'Food & Nutrition') }}">Alimentation et Nutrition</a></h2>
                <p>Découvrez des aliments sains et des informations nutritionnelles.</p>
            </div>
        </section>
    </main>
</body>

</html>