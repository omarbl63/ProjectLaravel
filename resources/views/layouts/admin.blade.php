<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
                    <li><a href="{{ route('topics.index') }}">Topics</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Header -->
    <header>
        <a href="{{ route('admin_dashboard') }}">Admin Dashboard</a>
    </header>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="{{ route('admin.topics.index') }}">Topics</a>
        <a href="{{ route('admin.topics.create') }}">Add Topic</a>
        <a href="{{ route('admin.logout') }}">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Welcome to the Admin Panel</h1>

        @if (session('success'))
        <div class="message">{{ session('success') }}</div>
        @endif

        @yield('content') <!-- This is where content from other pages will be injected -->
    </div>

</body>

</html>