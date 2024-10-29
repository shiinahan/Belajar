@extends('mainLogin')

@section('title')
    Uang Masuk
@endsection

@section('content')
    <style>
        body {
            background-color: #f6ebc5;
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
            <h2 class="mb-0 ms-3">Uang Masuk</h2>
            {{-- <div class="me-3 mt-4">
                <a href="{{ url('/uang-masuk/export/excel') }}" class="btn btn-success">
                    Export to Excel
                </a>
            </div> --}}
        </div>
        <div class="row">
            <div class="col col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="w-100 pt-2">
                                <h5 class="text-center">Data Uang Masuk</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" id="flash-message">
                                {{ Session::get('message') }}
                            </div>
                            <script>
                                setTimeout(function() {
                                    document.getElementById('flash-message').style.display = 'none';
                                }, {{ session('timeout', 5000) }});
                            </script>
                        @endif
                        @if (Session::has('message_delete'))
                            <div class="alert alert-warning" id="flash-message_delete">
                                {{ Session::get('message_delete') }}
                            </div>
                            <script>
                                setTimeout(function() {
                                    document.getElementById('flash-message_delete').style.display = 'none';
                                }, {{ session('timeout', 5000) }});
                            </script>
                        @endif
                        <div class="row mb-3">
                            <div class="col-8">
                                <div class="text-start">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3>Total Pendapatan :</h3>
                                            <h4>{{ 'Rp' . number_format($getTotalUang, 0, ',', '.') }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mt-4">
                                <form action="{{ url('/uang-masuk') }}" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search Data Uang Masuk...">
                                        <button class="btn btn-custom" type="submit">
                                            <i class="bi bi-search"></i> Search
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @include('uangMasuk.tabelUangMasuk',['getUang' => $getUang])
                        {{ $getUang->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
