@extends('mainLogin')
{{-- menu baru=  = list menu = stok pada aplikasi 3 --}}
@section('title')
    Menu Baru
@endsection

@section('content')
<style>
    .card-header {
    background-color: #b60404; /* Warna latar belakang merah (danger) */
    color: #f6ebc5; /* Warna teks putih */
    font-weight: bold; /* Teks tebal */
}

h2 {
        color: #b60404;
    }

    .btn-custom {
        background-color: #b60404;
        color: #fff;
    }

    .btn-custom:hover {
        background-color: #a00303;
        color: #fff;
    }

.card-body {
    background-color: #FFF0D1; /* Warna latar belakang abu-abu terang */
    color: #343a40; /* Warna teks gelap */
}

.alert-success {
    background-color: #d4edda; /* Warna latar belakang hijau terang */
    color: #155724; /* Warna teks hijau gelap */
    border-color: #c3e6cb; /* Warna border hijau */
}

.form-control.is-invalid {
    border-color: #dc3545; /* Warna border merah untuk input tidak valid */
}

.invalid-feedback {
    color: #dc3545; /* Warna teks merah untuk pesan error */
}

</style>
    <div class="container-fluid pt-3 mb-3">
        <h2 class="mb-0 ms-3">Edit Produk</h2>
        {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/barang') }}">Barang</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav> --}}

        <div class="col-md-8 offset-md-2">
            <div class="card shadow-sm">
                <div class="card-header bg-custom text-custom">
                    <strong>Edit</strong> Produk
                </div>
                <div class="card-body">
                    @if (Session::has('msg'))
                        <div class="alert alert-success">
                            {{ Session::get('msg') }}
                        </div>
                    @endif

                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Choose Category</label>
                                    <select name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror">
                                        <option value="">Choose</option>
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}" @if ($item->id == $data->kategori_id) selected @endif>
                                                {{ $item->nama_kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('kategori')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input value="{{ old('name', $data->nama_menu) }}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Type product name ...">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input value="{{ old('price', $data->harga) }}" type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Type product price ...">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="photo" class="form-label">Photo</label>
                                    <input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" placeholder="Choose product photo ...">
                                    @error('photo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 text-center">
                                <label for="current-photo" class="form-label">Current Photo</label>
                                <div class="mt-2 mb-3">
                                    <img src="{{ url('assets/produkImages', $data->photo) }}" alt="Current Product Image" class="img-fluid rounded" style="max-height: 250px;">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ url('/list-menu/') }}" class="btn btn-outline-dark">Batal</a>
                            <button type="submit" class="btn btn-custom">
                                <i class="bi bi-box-arrow-in-right"></i> Perbaharui
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
