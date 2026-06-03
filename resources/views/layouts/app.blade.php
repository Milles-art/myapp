<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', 'Millen Emmanuel | Web Developer')</title>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Millen<span class="text-primary">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('project') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <h5 class="fw-bold mb-1">Millen<span class="text-primary">.</span></h5>
                    <p class="text-white small mb-0">Full Stack Web Developer · Dar es Salaam, Tanzania</p>
                </div>
                <div class="col-md-4 text-center">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none me-3 small">Home</a>
                    <a href="{{ route('about') }}" class="text-white text-decoration-none me-3 small">About</a>
                    <a href="{{ route('project') }}" class="text-white text-decoration-none me-3 small">Projects</a>
                    <a href="{{ route('contact') }}" class="text-white text-decoration-none small">Contact</a>
                </div>
                <div class="col-md-4 text-md-end">
                    <p class="text-white small mb-0">&copy; {{ date('Y') }} Millen Michael Emmanuel. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>