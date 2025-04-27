<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- Lien vers votre fichier CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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

    <!-- Début du formulaire de connexion -->
    <div class="login_form">
        <div class="container">
            <div class="lgn">
                <div class="login-container">
                    <h2>Connexion</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit">Connexion</button>

                        @if (session('error'))
                        <div class="error-message">
                            {{ session('error') }}
                        </div>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Fin du formulaire de connexion -->

</body>

</html>