<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <!-- Start Header -->
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
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ url('/topics') }}">Topics</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Start Login Form -->
    <div class="login_form">
        <div class="container">
            <div class="lgn">
                <div class="login-container">
                    <h2>Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit">Login</button>

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
    <!-- End Login Form -->

</body>

</html>