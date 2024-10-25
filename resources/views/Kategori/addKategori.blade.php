@extends('mainlogin')
@section('title')
    Add Kategori
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
            color: #b60404;
        }
    </style>

    <div class="container-fluid pt-3 mb-3">
        <h2 class="mb-0 ms-3">Tambah Kategori Menu</h2>
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5">
                <div class="card mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="w-100 pt-2">
                                    <h5>Tambahin Kategorinya Yuk!!</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                </div>
                            @endif

                            <form action="{{ url('/kategori/add') }}" method="post">
                                @csrf
                              
                                <div class="mb-3">
                                    <label for="name"><b>Nama Kategori</b></label>
                                    <input value="" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukin nama kategorinyaa ..." autocomplete="off">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @endif
                                </div>

                                <!--Ini button untuk menambah kategori-->
                                <button type="submit" class="btn btn-outline-dark">
                                    Tambah <i class="bi bi-box-arrow-in-right"></i>
                                </button>
                                <button type="reset" class="btn btn-outline-dark">
                                    Reset <i class="bi bi-arrow-clockwise"></i>
                                </button>
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