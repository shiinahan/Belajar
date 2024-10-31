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
            background: rgba(248, 249, 250, 0.8); /* Warna dengan efek transparan */
            backdrop-filter: blur(10px); /* Efek blur untuk background akrilik */
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            margin-bottom: 40px;
            transition: transform 0.3s ease;
        }

        .about-us:hover {
            transform: scale(1.05);
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
            margin: 10px; /* Mengurangi margin untuk penempatan lebih rapat */
            text-align: center;
            transition: transform 0.3s ease;
            background: rgba(255, 255, 255, 0.6); /* Warna transparan untuk background akrilik */
            backdrop-filter: blur(10px); /* Efek blur untuk background akrilik */
            border-radius: 10px; /* Rounded corners */
            padding: 10px; /* Ruang di dalam card */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .team-member:hover {
            transform: scale(1.05);
        }

        .team-member h3 {
            transition: color 0.3s ease;
            font-size: 1rem; /* Ukuran font lebih kecil untuk nama anggota */
        }

        .team-member:hover h3 {
            color: #b60404;
        }

        .team-member img {
            border-radius: 50%;
            width: 100px; /* Ukuran lebih kecil untuk foto */
            height: 100px; /* Ukuran lebih kecil untuk foto */
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .team-member:hover img {
            transform: scale(1.1);
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

        .rounded-image {
            border-radius: 20px;
        }

        header {
            padding: 20px 0;
        }
    </style>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="{{ url('assets/images/dwaroeng1.jpg') }}" class="img-fluid rounded-image" alt="Background Image">
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="about-us">
                    <h1>About Us</h1>
                    <p>
                        D'waroeng adalah sebuah usaha kuliner yang fokus pada penjualan jajanan khas yang menggugah selera,
                        menawarkan berbagai pilihan camilan lezat yang cocok untuk semua kalangan.
                        Dengan berbagai varian makanan, mulai dari snack tradisional hingga modern, D'waroeng menghadirkan
                        cita rasa autentik yang memanjakan lidah. Setiap jajanan disiapkan dengan bahan berkualitas dan
                        resep yang sudah teruji,
                        menjadikannya pilihan sempurna untuk teman bersantai atau acara kumpul-kumpul.
                        Suasana yang hangat dan pelayanan yang ramah menjadikan D'waroeng bukan hanya sekadar tempat untuk
                        membeli jajanan, tetapi juga pengalaman kuliner yang menyenangkan.
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

        <div class="row justify-content-center text-center">
            <div class="col-md-2 team-member">
                <img src="{{ url('assets/images/oyinq.jpg') }}" alt="Anggota 1">
                <h3>A Farhan Ramadhan</h3>
            </div>
            <div class="col-md-2 team-member">
                <img src="https://i.pinimg.com/originals/49/8c/c4/498cc4b5f887c5dfe69df07480d13c04.jpg" alt="Anggota 2"> <!-- Gambar Erwin -->
                <h3>Erwin</h3>
            </div>
            <div class="col-md-2 team-member">
                <img src="https://cdn.idntimes.com/content-images/duniaku/post/20220916/one-piece-monkey-d-luffy-smile-59a26c5e8297d087d446fcc4886367d2.jpg" alt="Anggota 3"> <!-- Gambar Hafis Ar-Rasyid -->
                <h3>Hafis Ar-Rasyid</h3>
            </div>
            <div class="col-md-2 team-member">
                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//105/MTA-82914477/golda_minuman-kopi-golda-200ml-capucino_full01.jpg" alt="Anggota 4"> <!-- Gambar M Novransah Wijaya -->
                <h3>M Novransah Wijaya</h3>
            </div>
            <div class="col-md-2 team-member">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRL5m2gr2lMb1huhMFwIR41jrDU5ZOxKydgEw&s" alt="Anggota 5"> <!-- Gambar Tata Wahyuni -->
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
