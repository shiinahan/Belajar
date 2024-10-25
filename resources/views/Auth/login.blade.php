@extends('main') 

@section('title') 
Login
@endsection 

@section('content')
{{-- Halaman login --}}
<style>
    body {
        background-color: #f6ebc5; /* Warna latar belakang */
    }
    .container {
        padding: 30px;
    }
    .card {
        border: none; /* Menghapus border pada card */
        border-radius: 15px; /* Membulatkan sudut card */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Menambah efek bayangan */
    }
    .signin {
        text-align: center;
    }
    .signin a {
        color: royalblue;
    }
    .signin a:hover {
        text-decoration: underline;
    }
    .btn-primary {
        background-color: #b60404; /* Warna tombol */
        border: none; /* Menghapus border default */
    }
    .btn-primary:hover {
        background-color: #a00303; /* Warna saat hover */
    }
</style>
<br>
<br>
<br>
<br>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-4">Login Admin</h3>

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="form-label">E-mail</label>
                                <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Type email ..." autocomplete="off">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Type password ...">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
