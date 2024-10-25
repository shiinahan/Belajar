@extends('mainLogin')

@section('title')
    Data Pelanggan
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
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-0 ms-3">Data Pelanggan</h2>
        <div class="d-flex">
            <div class="me-2">
                <a href="{{ url('/pelanggan/export/excel') }}" class="btn btn-success">
                    Export to Excel
                </a>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="w-100 pt-2">
                            <h5>Data Pelanggan</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3"> <!-- Tambahkan flexbox di sini -->
                        <form action="{{ url('/pelanggan') }}" method="get" class="d-flex">
                            <input type="text" class="form-control me-2" name="search" placeholder="Search Pelanggan ...">
                            <button class="btn btn-outline-dark" type="submit">
                                <i class="bi bi-search"></i> Search
                            </button>
                        </form>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" id="flash-message">
                            {{ Session::get('message') }}
                        </div>
                        <script>
                            setTimeout(function (){
                                document.getElementById('flash-message').style.display='none';
                            }, {{ session('timeout', 5000) }});
                        </script>
                    @endif
                    @if (Session::has('message_delete'))
                        <div class="alert alert-warning" id="flash-message_delete">
                            {{ Session::get('message_delete') }}
                        </div>
                        <script>
                            setTimeout(function (){
                                document.getElementById('flash-message_delete').style.display='none';
                            }, {{ session('timeout', 5000) }});
                        </script>
                    @endif

                    @include('Pelanggan.tabelPelanggan',['data' => $getPelanggan])
                    {{ $getPelanggan->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
