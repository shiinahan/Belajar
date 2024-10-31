@extends('main')

@section('title')
    Home
@endsection

@section('content')
    <style>
        /* Your existing styles... */
        .carousel-inner img {
            width: 100%;
            height: 300px;
            /* Adjusted height for mobile */
            object-fit: cover;
        }

        .bgMe {
            border-radius: 20px;
        }

        .product-card {
            margin-bottom: 15px;
            width: 100%;
            /* Full width for mobile */
            max-width: 260px;
            /* Max width for larger screens */
            height: auto;
            border: 5px solid #b60404;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card img {
            width: 100%;
            height: auto;
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .featured-menu {
            background-color: #f6ebc5;
            padding: 20px;
            /* Reduced padding for mobile */
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .featured-menu h2 {
            color: #b60404;
            margin-bottom: 20px;
            /* Reduced margin for mobile */
        }

        .testimonial {
            background-color: #f6ebc5;
            padding: 20px;
            /* Reduced padding for mobile */
            text-align: center;
        }

        .testimonial-card {
            background-color: #b60404;
            color: #f6ebc5;
            padding: 15px;
            /* Reduced padding for mobile */
            border-radius: 10px;
            margin: 10px 0;
            /* Margin adjusted for vertical stacking */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .map-section {
            margin: 20px 0;
            /* Reduced margin for mobile */
            text-align: center;
        }

        .map {
            width: 95%;
            /* Adjust this value as needed */
            height: 700px;
            /* Adjust height if necessary */
            border: 0;
            border-radius: 10px;
            margin: 0 auto;
            /* Center the map */
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
            padding: 15px;
            /* Reduced padding for mobile */
            text-align: center;
            margin-top: 20px;
            /* Reduced margin for mobile */
            border-radius: 8px;
        }

        .footer a {
            color: #f6ebc5;
            text-decoration: none;
            margin: 0 5px;
            /* Reduced margin for mobile */
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #ffffff;
        }

        .rounded-image {
            border-radius: 20px;
        }

        .testimonial-card {
            background-color: #b60404;
            color: #f6ebc5;
            padding: 15px;
            border-radius: 10px;
            margin: 10px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            /* Mengangkat sedikit saat di-hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Meningkatkan shadow */
        }

        header {
            padding: 20px 0;
            /* Memberikan ruang vertikal di atas dan bawah gambar */
        }
    </style>

    <!-- Include Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <div class="container-fluid">
        <header class="text-center mb-4">
            <img src="{{ url('assets/images/lendingpej.jpg') }}" class="img-fluid rounded-image" alt="Lending Pej Image">
        </header>

    </div>
    <main class="container-fluid mt-4">
        <div class="row my-3">
            {{-- Featured Products Section --}}
            <div class="featured-menu">
                <h2 style="color: #b60404">Menu Unggulan</h2>
                <div class="row justify-content-center">
                    @php
                        $featuredItems = $data->random(rand(3, 5));
                    @endphp

                    @foreach ($featuredItems as $item)
                        <div class="col-6 col-md-3 col-lg-2 m-2">
                            <div class="card product-card">
                                <div class="container text-center">
                                    <img src="{{ url('assets/produkImages', $item->photo) }}" class="card-img-top img-fluid"
                                        alt="Product Image">
                                </div>
                                <div class="card-body" style="background-color: #ffffff;">
                                    <h5 class="card-title" style="font-size: 14px; color: #b60404;">{{ $item->nama_barang }}
                                    </h5>
                                    <p class="card-text" style="font-size: 12px; color: #333;">Harga:
                                        Rp{{ number_format($item->harga) }}</p>
                                    <a href="{{ url('/checkout/' . $item->id) }}" class="btn btn-sm"
                                        style="background-color: #b60404; color: #f6ebc5;">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Testimonials Section --}}
        <div class="testimonial">
            <h2 style="color: #b60404">Apa Kata Mereka</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="testimonial-card animate__animated animate__fadeInUp">
                        <p style="font-style: italic;">"Setiap suapan dari hidangan ini membawa saya kembali ke kenangan
                            masa
                            kecil.
                            Bumbu yang kaya dan bahan-bahan segar membuatnya tak terlupakan!
                            Sangat direkomendasikan untuk semua pecinta kuliner."</p>
                        <strong>- Raditya Dika</strong>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="testimonial-card animate__animated animate__fadeInUp">
                        <p style="font-style: italic;">"Saya baru saja mencoba menu spesial di sini dan wow!
                            Kombinasi rasa dan presentasinya luar biasa.
                            Tempat ini menjadi favorit baru saya untuk menikmati makanan khas!"</p>
                        <strong>- Oline Manuel Chay</strong>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="testimonial-card animate__animated animate__fadeInUp">
                        <p style="font-style: italic;">"Makanan di sini bukan hanya sekadar hidangan, tetapi sebuah
                            pengalaman.
                            Dari aroma hingga rasa, semuanya sempurna! Saya pasti akan kembali lagi untuk mencoba menu
                            lainnya."
                        </p>
                        <strong>- Aurhel Alana</strong>
                    </div>
                </div>
            </div>
        </div>

        {{-- Map Section --}}
        <div class="map-section">
            <h2 style="color: #b60404">Lokasi Kami</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249.02957586130213!2d104.74680347652269!3d-2.9661134000441045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1730166834113!5m2!1sid!2sid"
                class="map" allowfullscreen="" loading="lazy"></iframe>
        </div>


        <div class="social-buttons">
            <a href="https://www.instagram.com/dwaroeng2024/" class="social-button btn" target="_blank">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="https://wa.me/6285384815194" class="social-button btn" target="_blank">
                <i class="bi bi-whatsapp"></i>
            </a>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col text-center">
                <a href="{{ url('/menu') }}" class="btn btn-outline-secondary btn-sm">
                    Lihat Semua Produk
                </a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} D'Waroeng. All rights reserved.</p>
        <p>
            <a href="{{ url('/about') }}">Privacy Policy</a> |
            <a href="{{ url('/about') }}">Terms of Service</a> |
            <a href="{{ url('/about') }}">Contact Us</a>
        </p>
    </footer>
@endsection
