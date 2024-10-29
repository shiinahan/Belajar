<!doctype html>
<html lang="en">
{{-- Ini adalah halaman utama web D'Waroeng --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #f6ebc5;
        }

        .nav-link {
            color: #f6ebc5;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 10px; /* Add border-radius for consistent styling */
        }

        .nav-link.active {
            background-color: #f6ebc5;
            color: black !important;
            border-radius: 10px;
        }

        .nav-link:hover {
            background-color: rgba(246, 235, 197, 0.3);
            color: #470303;
            border-radius: 10px; /* Match the border-radius of active links */
        }

        .bi-shop {
            font-size: 25px;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #b60404">
        <div class="container-fluid">
            <a class="navbar-brand px-5" href="/">
                <img src="{{url ('assets/images/dwaroeng.png')}}" alt="dwaroeng logo" width="45" height="45">
                <strong style="color: #f6ebc5">D'Waroeng</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- Tambahkan me-3 untuk margin kanan -->
                    <li class="nav-item ms-5 me-3">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item ms-5 me-3">
                        <a class="nav-link {{ Request::is('menu') ? 'active' : '' }}" href="{{ url('/menu') }}">Menu</a>
                    </li>
                    <li class="nav-item ms-5 me-3">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About Us</a>
                    </li>
                </ul>
                {{-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle {{ Request::is('login') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Others</a>
                        <ul class="dropdown-menu" style="background-color: #b60404">
                            <li>
                                <a class="nav-link" href="{{ url('/login') }}" style="color: #f6ebc5;">Login</a>
                            </li>
                        </ul>
                    </li>
                </ul> --}}
            </div>
        </div>
    </nav>




    <div class="container-fluid">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
