<!DOCTYPE html>
<html lang="en">
{{-- ini halaman dashboard admin --}}

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap Assets CSS -->

    <link rel="stylesheet" href="{{ url('assets/bootstrap5/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{-- Bootstrap ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://kit.fontawesome.com/f181524b5b.js" crossorigin="anonymous"></script>

    <style>
        body {
            position: relative;
            background-color: #f6ebc5;
        }

        .side:hover {
            background-color: #800000;
        }

        .navbar {
            background-color: #b60404;
        }

        .navbar-brand {
            margin-left: 20px;
            font-size: 25px;
            font-weight: 600;
        }

        .clr {
            background-color: #b60404;
            box-shadow: 10px 10px 20px 5px rgb(194, 194, 194);
        }

        .head {
            color: #000000;
        }

        .head:hover {
            color: #ffffff;
        }

        .content-wrap {
            min-height: 100%;
            padding-bottom: 50px;
        }

        footer {
            background-color: #800000;
            color: #fff;
            height: 50px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            text-align: center;
        }

        .foot {
            margin-bottom: 150px;
        }

        .dropHover:hover {
            color: #fff;
            background-color: #146479;
        }

        .nav-link.active {
            background-color: #b60404;
            color: white !important;
        }

        .form-control {
            width: 250px;
            /* Sesuaikan lebar sesuai kebutuhan */
        }

        .btn-outline-light {
            border-color: #f6ebc5;
            /* Ganti warna border sesuai kebutuhan */
            color: #f6ebc5;
        }

        .form-control {
            width: 250px;
            /* Sesuaikan lebar sesuai kebutuhan */
        }

        .btn-outline-light {
            border: none;
            /* Menghilangkan border default */
            background: transparent;
            /* Menghilangkan background */
            color: #f6ebc5;
            /* Sesuaikan warna sesuai kebutuhan */
        }

        .btn-outline-light:hover {
            color: white;
            /* Warna saat hover */
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <div class="clr max-height-vh-100 min-vh-100">
            <nav class="nav flex-column">
                <div class="container mt-3" style="padding-right: 50px">
                    <a class="head navbar-brand mt-3" href="#" style="color: #f6ebc5">
                        <img src="{{url ('assets/images/dwaroeng.png')}}" alt="dwaroeng logo" width="60" height="60"> D 'Waroeng
                    </a>
                    <h3 class="head m-3"></h3>
                </div>

                <!-- Menu Side Bar -->
                {{-- Menu Dahboard --}}
                <a href="{{ url('/pesanan') }}"
                    class="px-1 side nav-item nav-link {{ Request::is('pesanan') ? 'active' : '' }}"
                    style="color: #f6ebc5">
                    <i class="bi bi-house-fill mx-2"></i> Rekap Pesanan
                </a>

                {{-- Menu Data Barang --}}
                <div class="px-3 pt-3 text-decoration-none" style="color: #f6ebc5">
                    <strong>Menu</strong>
                </div>
                <a href="{{ url('/list-menu') }}"
                    class="px-4 side nav-item nav-link {{ Request::is('list-menu') ? 'active' : '' }}"
                    style="color: #f6ebc5">
                    <i class="bi bi-journal mx-2"></i> Menu
                </a>
                <a href="{{ url('/kategori') }}"
                    class="px-4 side nav-item nav-link {{ Request::is('kategori') ? 'active' : '' }}"
                    style="color: #f6ebc5">
                    <i class="bi bi-tags mx-2"></i> Kategori
                </a>

                <div class="px-3 pt-3 text-decoration-none" style="color: #f6ebc5">
                    <strong>Data Pelanggan</strong>
                </div>
                <a href="{{ url('/pelanggan') }}"
                    class="px-4 side nav-item nav-link {{ Request::is('pelanggan') ? 'active' : '' }}"
                    style="color: #f6ebc5">
                    <i class="bi bi-file-bar-graph mx-2"></i> Data Pelanggan
                </a>
                <a href="{{ url('/menu-pesanan') }}"
                    class="px-4 side nav-item nav-link {{ Request::is('menu-pesanan') ? 'active' : '' }}"
                    style="color: #f6ebc5">
                    <i class="bi bi-arrow-right mx-2"></i> Pesanan Masuk
                </a>
                <a href="{{ url('/uang-masuk') }}"
                    class="px-4 side nav-item nav-link {{ Request::is('uang-masuk') ? 'active' : '' }}"
                    style="color: #f6ebc5">
                    <i class="bi bi-currency-dollar mx-2"></i> Uang Masuk
                </a>

                {{-- Menu Logout --}}
                <a href="{{ url('/logout') }}" class="px-1 side nav-item nav-link mt-4" style="color: #f6ebc5">
                    <i class="bi bi-power    mx-2"></i> Logout
                </a>
            </nav>
        </div>

        <div class="col">
            <nav class="navbar navbar-dark navbar-expand-lg border-left-1">
                <div class="container-fluid">
                    <div class="d-flex align-items-center">
                        <button id="toggleMenuBtn" class="btn btn-light me-2"><i class="fas fa-bars"></i></button>
                        <a class="navbar-brand" href="#">Hai Admin</a>
                    </div>
                </div>

                {{-- <div class="container h-100">
                    <div class="d-flex justify-content-center">
                        <div class="searchbar">
                            <input class="search_input" type="text" placeholder="Search...">
                            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div> --}}
                {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
                {{-- <form class="d-flex position-relative" role="search">
                    <input class="form-control me-2 pe-5" type="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-light position-absolute top-50 end-0 translate-middle-y"
                        type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form> --}}
            </nav>

            <div class="mx-2 p-1 foot">
                @yield('content')
            </div>

            <footer class="text-center p-3">
                &copy; 2024 D 'Waroeng ft. Palcomtech GSI 105A
            </footer>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="{{ url('assets/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleMenuBtn = document.getElementById('toggleMenuBtn');
            const sidebar = document.querySelector('.clr');

            toggleMenuBtn.addEventListener('click', function() {
                sidebar.classList.toggle('d-none');
            });
        });
    </script>
</body>

</html>
