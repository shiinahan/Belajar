@extends('main')
@section('about')
    'about'
@endsection

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .team-member {
            margin: 20px;
            text-align: center;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
    </style>
    </head>

    <body style="background-color: #f6ebc5">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="container-fluid">
                        <img src="{{ url('assets/images/lendingpej.jpg') }}" class="img-fluid" width="3000px"
                            alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h1 class="text-center">Tentang Kami</h1>
            <p class="text-center">Kami adalah tim yang berdedikasi untuk memberikan yang terbaik.</p>

            <div class="row">
                <div class="col-md-2 team-member">
                    <img src="https://via.placeholder.com/150" alt="Anggota 1">
                    <h3>A Farhan Ramadhan</h3>
                    {{-- <p>GSI105A</p>  --}}
                </div>
                <div class="col-md-3 team-member">
                    <img src="https://via.placeholder.com/150" alt="Anggota 2">
                    <h3>Erwin</h3>
                    {{-- <p>GSI105A</p> --}}
                </div>
                <div class="col-md-2 team-member">
                    <img src="https://via.placeholder.com/150" alt="Anggota 3">
                    <h3>Hafis Ar-Rasyid</h3>
                    {{-- <p>GSI105A</p> --}}
                </div>
                <div class="col-md-3 team-member">
                    <img src="https://via.placeholder.com/150" alt="Anggota 4">
                    <h3>M Novransah Wijaya</h3>
                    {{-- <p>GSI105A</p> --}}
                </div>
                <div class="col-md-11 team-member">
                    <img src="https://via.placeholder.com/150" alt="Anggota 5">
                    <h3>Tata Wahyuni</h3>
                    {{-- <p>GSI105A</p> --}}
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
@endsection
