@extends('main')
@section('about', 'about')

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #f6ebc5;
        }

        .about-us {
            background-color: #f8f9fa;
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            /* Add margin to separate from footer */
        }

        .about-us h1 {
            color: #b60404;
            margin-bottom: 20px;
        }

        .about-us p {
            color: #333;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .team-member {
            margin: 20px;
            text-align: center;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            /* Ensure images are cropped correctly */
        }

        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-button {
            background-color: #b60404;
            color: #f6ebc5;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .social-button:hover {
            background-color: #f6ebc5;
            color: #b60404;
        }

        .social-button i {
            font-size: 1.5rem;
        }

        .footer {
            background-color: #b60404;
            color: #f6ebc5;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
            border-radius: 8px;
        }

        .footer a {
            color: #f6ebc5;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #ffffff;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="{{ url('assets/images/dwaroeng1.jpg') }}" class="img-fluid" alt="Background Image">
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="about-us">
                    <h1>About Us</h1>
                    <p>
                        D'waroeng adalah sebuah usaha kuliner yang fokus pada penjualan jajanan khas yang menggugah selera, menawarkan berbagai pilihan camilan lezat yang cocok untuk semua kalangan.
                        Dengan berbagai varian makanan, mulai dari snack tradisional hingga modern, D'waroeng menghadirkan cita rasa autentik yang memanjakan lidah. Setiap jajanan disiapkan dengan bahan berkualitas dan resep yang sudah teruji,
                        menjadikannya pilihan sempurna untuk teman bersantai atau acara kumpul-kumpul.
                        Suasana yang hangat dan pelayanan yang ramah menjadikan D'waroeng bukan hanya sekadar tempat untuk membeli jajanan, tetapi juga pengalaman kuliner yang menyenangkan.
                    </p>

                    <div class="social-buttons">
                        <a href="https://www.instagram.com/dwaroeng2024/" class="social-button" target="_blank">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://wa.me/6285384815194" class="social-button" target="_blank">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <h1 class="text-center">Tentang Kami</h1>
        <p class="text-center">Kami adalah tim yang berdedikasi untuk memberikan yang terbaik.</p>

        <div class="row justify-content-center">
            <div class="col-md-2 team-member">
                <img src="{{ url('assets/images/oyinq.jpg') }}" alt="Anggota 1">
                <h3>A Farhan Ramadhan</h3>
            </div>
            <div class="col-md-2 team-member">
                <img src="https://via.placeholder.com/150" alt="Anggota 2">
                <h3>Erwin</h3>
            </div>
            <div class="col-md-2 team-member">
                <img src="https://via.placeholder.com/150" alt="Anggota 3">
                <h3>Hafis Ar-Rasyid</h3>
            </div>
            <div class="col-md-2 team-member">
                <img src="https://via.placeholder.com/150" alt="Anggota 4">
                <h3>M Novransah Wijaya</h3>
            </div>
            <div class="col-md-2 team-member">
                <img src="https://via.placeholder.com/150" alt="Anggota 5">
                <h3>Tata Wahyuni</h3>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} D'Waroeng. All rights reserved.</p>
        <p>
            <a href="{{ url('/about') }}">Privacy Policy</a> |
            <a href="{{ url('/about') }}">Terms of Service</a> |
            <a href="{{ url('/login') }}">Anda Admin? Login Disini!</a>
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
