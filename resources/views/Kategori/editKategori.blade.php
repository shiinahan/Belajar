@extends('mainlogin')
@section('title')
    Edit Kategori
@endsection
@section('content')

<style>
    body {
        background-color: #FFF0D1;
    }
    h2 {
        color: #b60404;
    }
    .card-header {
        background-color: #b60404;
        color: #ffffff;
    }
    .card-body {
        background-color: #ffebc3;
        color: #b60404;
    }
</style>
    <div class="container-fluid pt-3 mb-3">
        <h2 class="mb-0 ms-3">Edit Kategori</h2>
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5">
                <div class="card mt-3">

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="w-100 pt-2">
                                    <h5>Edit Kategori</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                </div>
                            @endif

                            <form action="" method="post">
                                @csrf

                                <div class="mb-3">
                                    <label for="name">Nama Kategori</label>
                                    <input value=" {{old('name', $getKategori->nama_kategori)}}" type="name" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukin nama kategorinyaa ..." autocomplete="off">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @endif
                                </div>

                                <!--Ini button untuk mengirim login-->
                                <button type="submit" class="btn btn-outline-dark">
                                    <i class="bi bi-arrow-repeat"></i> Update
                                </button>
                                <a href="{{ url('/kategori') }}" class="btn btn-outline-dark">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
