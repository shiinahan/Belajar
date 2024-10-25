@extends('main')
@section('title')
    Checkout
@endsection
@section('content')

<style>
    .body {
        background-color: #f6ebc5;
    }
    .h2 {
        color: #493628;
    }
    .card-header {
        background-color: #b60404;
        color: #ffffff;
    }
    .card-body {
        background-color: #FFF0D1;
        color: #493628;
    }
    .flex-container {
        display: flex;
        align-items: flex-start; /* Align items at the start */
    }
    .image-container {
        flex: 1; /* Allow image container to take up space */
        padding-right: 20px; /* Space between image and form */
    }
    .form-container {
        flex: 1; /* Allow form container to take up space */
    }
    .custom-size {
        width: 100%; /* Set a percentage of the container's width */
        max-width: 800px; /* Optional: Set a maximum width */
        height: auto; /* Maintain aspect ratio */
    }
    .button-container {
        text-align: right; /* Align buttons to the right */
        margin-top: 20px; /* Optional: Add some space above the buttons */
    }
</style>

<div class="container-fluid pt-3 mb-3">
    <div class="col-md-12"> <!-- Adjusted to take full width -->
        <div class="card">
            <div class="card-header text-center">
                Checkout
            </div>
            <div class="card-body">
                <div class="flex-container">
                    <div class="me-4">
                        <img src="{{ url('assets/produkImages', $data->photo) }}" alt="" class="img-fluid custom-size">
                    </div>
                    <div class="form-container">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <h5>Data Pesanan</h5>
                            <div class="mb-3 mt-3">
                                <label class="form-label" for="tgl">Tanggal Pesanan</label>
                                <div class="input-group">
                                    <input type="date" value="{{ old('tgl') }}" name="tgl" id="tgl" class="form-control @error('tgl') is-invalid @enderror" placeholder="Masukkan tgl_faktur Barang...."/>
                                    @error('tgl')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="menupesanan">Pesanan</label>
                                <input readonly value="{{ old('nama_menu', $data->nama_menu) }}" type="text" name="menupesanan" id="menupesanan" class="form-control @error('menupesanan') is-invalid @enderror" placeholder="Masukkan jumlah pesanan...">
                                @error('menupesanan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="hargamenu">Harga</label>
                                <input readonly value="{{ old('harga', $data->harga) }}" type="text" name="hargamenu" id="hargamenu" class="form-control @error('hargamenu') is-invalid @enderror" placeholder="Masukkan jumlah pesanan...">
                                @error('hargamenu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jumlahpesanan">Jumlah Pesanan</label>
                                <input value="{{ old('jumlahpesanan') }}" type="number" name="jumlahpesanan" id="jumlahpesanan" class="form-control @error('jumlahpesanan') is-invalid @enderror" placeholder="Masukkan jumlah pesanan...">
                                @error('jumlahpesanan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="pembayaran">Jenis Pembayaran</label>
                                <select name="pembayaran" id="pembayaran" class="form-control @error('pembayaran') is-invalid @enderror">
                                    <option value="">Pilih Metode Pembayaran</option>
                                    <option value="Dana">Dana</option>
                                    <option value="Shopeepay">Shopeepay</option>
                                    <option value="OVO">OVO</option>
                                    <option value="COD">COD</option>
                                </select>
                                @error('pembayaran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <h5>Data Diri</h5>
                            <div class="mb-3 mt-3">
                                <label for="namapelanggan">Nama</label>
                                <input value="{{ old('namapelanggan') }}" type="text" name="namapelanggan" id="namapelanggan" class="form-control @error('namapelanggan') is-invalid @enderror" placeholder="Masukkan nama anda ...">
                                @error('namapelanggan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="notelp">Nomor Telepon</label>
                                <input value="{{ old('notelp') }}" type="number" name="notelp" id="notelp" class="form-control @error('notelp') is-invalid @enderror" placeholder="Masukkan nomor anda ...">
                                @error('notelp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat">Alamat</label>
                                <input value="{{ old('alamat') }}" type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan alamat anda ...">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pesan">Pesan Tambahan (Opsional)</label>
                                <input value="{{ old('pesan') }}" type="text" name="pesan" id="pesan" class="form-control @error('pesan') is-invalid @enderror" placeholder="Masukkan pesan kepada penjual...">
                                @error('pesan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="button-container">
                                <a href="{{ url('/menu') }}" class="btn btn-outline-dark">Kembali</a>
                                <button type="submit" class="btn btn-outline-dark">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                    Checkout
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
