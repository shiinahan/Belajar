@extends('mainLogin')
@section('title')
    Menu Baru
@endsection

@section('content')
<style>
    body {
        background-color: #f6ebc5;
    }

    h2 {
        color: #b60404;
    }

    .card-header {
        background-color: #b60404;
        color: #f6ebc5;
    }

    .card-body {
        background-color: #FFF0D1;
        color: #493628;
    }

    .capitalize {
        text-transform: capitalize;
    }

    .btn-custom {
        background-color: #b60404;
        color: #fff;
    }

    .btn-custom:hover {
        background-color: #a00303;
        color: #fff;
    }

    .image-preview {
        width: 100%;
        max-width: 300px;
        display: none;
        border-radius: 10px; /* Rounded corners for the preview image */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow for the image preview */
    }
    .pagination {
    justify-content: center; /* Agar pagination berada di tengah */
}

.pagination .page-item.active .page-link {
    background-color: #b60404; /* Warna latar belakang untuk item aktif */
    color: #fff; /* Warna teks untuk item aktif */
}

.pagination .page-item .page-link {
    color: #b60404; /* Warna teks untuk link */
    background-color: #FFF0D1; /* Warna latar belakang untuk link */
    border: 1px solid #b60404; /* Border untuk link */
}

.pagination .page-item .page-link:hover {
    background-color: #a00303; /* Warna saat hover */
    color: #fff; /* Warna teks saat hover */
}

.pagination .page-item.disabled .page-link {
    color: #6c757d; /* Warna untuk item yang dinonaktifkan */
    background-color: #fff; /* Warna latar belakang untuk item yang dinonaktifkan */
    border: 1px solid #dee2e6; /* Border untuk item yang dinonaktifkan */
}
</style>

<div class="container-fluid pt-3 mb-3">
    <h2 class="mb-0 ms-3">Tambah Menu Baru</h2>
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Tambah Menu Baru Yuk!</h5>
            </div>
            <div class="card-body">
                @if(Session::has('msg'))
                    <div class="alert alert-success">
                        {{ Session::get('msg') }}
                    </div>
                @endif
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">                                
                                <label for="kategori" class="form-label">Pilih Kategori Menu</label>
                                <select name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror">
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Menu</label>
                                <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama menu baru ..." autocomplete="off">
                                @error('name')
                                    <div class="invalid-feedback capitalize">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Harga</label>
                                <input value="{{ old('price') }}" type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Masukkan harganya ..." autocomplete="off">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Foto</label>
                                <input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" onchange="previewImage(event)">
                                @error('photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-custom">Tambah <i class="bi bi-box-arrow-in-right"></i></button>
                            <button type="reset" class="btn btn-custom">Reset <i class="bi bi-arrow-clockwise"></i></button>
                            <a href="{{ url('/list-menu') }}" class="btn btn-outline-dark">Batal</a>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="mb-3">
                                <img id="image-preview" class="image-preview" src="#" alt="Preview Gambar"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function previewImage(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
        const imagePreview = document.getElementById('image-preview');
        imagePreview.src = reader.result;
        imagePreview.style.display = 'block'; // Menampilkan gambar
    }

    if (file) {
        reader.readAsDataURL(file);
    }
}

// Fungsi untuk mengubah input menjadi kapital di awal setiap kata
document.getElementById('name').addEventListener('input', function() {
    this.value = this.value
        .toLowerCase() // Mengubah semua huruf menjadi kecil
        .replace(/\b\w/g, char => char.toUpperCase()); // Mengubah huruf pertama setiap kata menjadi kapital
});
</script>

@endsection
