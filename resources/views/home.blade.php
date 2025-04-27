<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetitsGénies</title>
    <!-- Fichier CSS Principal -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- Fichier CSS Normalize -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- Lien Police -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Lien Icônes de Police -->
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
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Fin de l'en-tête -->

    <!-- Début de la section de lancement -->
    <div class="landing">
        <!-- <div class="intro-text">
            <h1>Bonjour</h1>
            <p>Rejoignez-nous</p>
        </div> -->
    </div>
    <!-- Fin de la section de lancement -->

    <!-- Début des fonctionnalités -->
    <div class="features">
        <div class="container">
            <div class="feat">
                <i class="fa-solid fa-lightbulb"></i>
                <h3>Partagez vos idées et vos rêves avec nous !</h3>
                <p>Nous croyons que chaque enfant mérite d'explorer le monde de la connaissance d'une manière amusante et interactive. Que vous soyez passionné par les animaux, les sciences, ou même l'espace, nous sommes prêts à transformer vos idées en expériences d'apprentissage passionnantes !</p>
            </div>
            <div class="feat">
                <i class="fa-solid fa-briefcase"></i>
                <h3>Laissez-nous vous aider à réaliser vos idées !</h3>
                <p>Notre équipe est composée d'experts en éducation et en technologie, et nous utilisons les outils les plus modernes pour créer du contenu éducatif de qualité. Nous nous occupons de tout le travail, de la conception à la mise en ligne, pour que votre enfant puisse apprendre en toute simplicité.</p>
            </div>
            <div class="feat">
                <i class="fa-solid fa-earth-americas"></i>
                <h3>L'apprentissage n'a pas de frontières !</h3>
                <p>Nous rendons l'éducation accessible à tous les enfants, partout dans le monde. Peu importe où vous vous trouvez, nous mettons à votre disposition des ressources éducatives adaptées à chaque enfant, favorisant ainsi un apprentissage global et enrichissant.</p>
            </div>
        </div>
    </div>
    <!-- Fin des fonctionnalités -->
    <section id="about">
        <!-- Content of the about section -->
        <!-- Début de la section à propos -->
        <div class="about">
            <div class="container">
                <div class="special-heading">À propos</div>
                <p class="p_about">Tout ce que vous devez savoir</p>
                <div class="about-content">
                    <img class="image" src="{{ asset('images/aboutus.png') }}" alt="">
                    <div class="text">
                        <h2>Nous sommes une équipe passionnée par l'éducation des enfants, et notre objectif est de rendre l'apprentissage accessible à tous. Sur notre site, nous proposons une large gamme de sujets éducatifs adaptés aux jeunes apprenants.</h2>
                        <hr>
                        <p>Chaque sujet est soigneusement sélectionné pour éveiller la curiosité et encourager les enfants à explorer de nouveaux domaines de connaissance. Nous croyons que l'éducation doit être un voyage excitant, et nous nous engageons à rendre ce processus aussi enrichissant et amusant que possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin de la section à propos -->
    </section>
    <section id="contact">
        <!-- Content of the contact section -->
        <!-- Début du contact -->
        <div class="contact">
            <div class="container">
                <div class="special-heading">Contact</div>
                <p>Nous sommes nés pour créer</p>
                <div class="contact-content">
                    <div class="text">
                        <h3>N'hésitez pas à nous contacter à :</h3>
                        <h4>contact@petitsgenies.com</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin du contact -->
    </section>


    <!-- Début du pied de page -->
    <div class="footer">
        <div class="container">
            <p>@2025 - <span>PetitsGénies Éducation</span>, Tous droits réservés</p>
        </div>
    </div>
    <!-- Fin du pied de page -->
</body>

</html>