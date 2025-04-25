<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/topics.css') }}">
</head>

<body>
    <!-- Start Header -->
    <div class="header">
        <div class="container">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ url('/topics') }}">Topics</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="overlay"></div>
    <main>
        <section class="topics-header">
            <h1>Educational Topics</h1>
            <p>Explore different learning categories</p>
        </section>

        <section class="topics-list">
            <div class="topic-item">
                <img src="{{ asset('images/animals.jpg') }}" alt="Animals">
                <h2><a href="{{ url('/topics/animals') }}">Animals</a></h2>
                <p>Learn about different animals around the world.</p>
            </div>
            <div class="topic-item">
                <img src="{{ asset('images/transport.jpg') }}" alt="Transport">
                <h2><a href="{{ url('/topics/transport') }}">Transport</a></h2>
                <p>Discover various modes of transport and their uses.</p>
            </div>
            <div class="topic-item">
                <img src="{{ asset('images/cands.jpg') }}" alt="Colors & Shapes">
                <h2><a href="{{ url('/topics/colors-shapes') }}">Colors & Shapes</a></h2>
                <p>Explore the world of colors and basic shapes.</p>
            </div>
            <div class="topic-item">
                <img src="{{ asset('images/space.jpg') }}" alt="Space & Planets">
                <h2><a href="{{ url('/topics/space-planets') }}">Space & Planets</a></h2>
                <p>Learn about our solar system and the universe.</p>
            </div>
            <div class="topic-item">
                <img src="{{ asset('images/food.jpg') }}" alt="Food & Nutrition">
                <h2><a href="{{ url('/topics/food-nutrition') }}">Food & Nutrition</a></h2>
                <p>Discover healthy foods and nutrition facts.</p>
            </div>
        </section>
    </main>
</body>

</html>