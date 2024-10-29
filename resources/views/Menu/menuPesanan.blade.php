@extends('mainLogin')

@section('title')
    Menu Pesanan
    {{-- ini isi menu  pesanan masuk admin --}}
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
        <h2 class="mb-0 ms-3">Pesanan Masuk</h2>
        <div class="card mt-5">
            <div class="card-header">
                <div class="d-flex">
                    <div class="w-100 pt-2">
                        <h5 class="text-center">Pesanan Masuk</h5>
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
                <div class="row d-flex justify-content-end">
                    <div class="col-4 mt-4 mb-4">
                        <form action="{{ url('/menu-pesanan') }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search"
                                    placeholder="Search Pesanan ...">
                                <button class="btn btn-custom" type="submit">
                                    <i class="bi bi-search"></i> Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="20" style="background-color: #FFF0D1">
                                <h6 class="mt-1" style="color: #b60404"><b>No.</b></h6>
                            </th>
                            <th class="text-center" style="background-color: #FFF0D1">
                                <h6 class="mt-1" style="color: #b60404"><b>Tanggal Pemesanan</b></h6>
                            </th>
                            <th class="text-center" style="background-color: #FFF0D1">
                                <h6 class="mt-1" style="color: #b60404"><b>Nama Pelanggan</b></h6>
                            </th>
                            <th class="text-center" style="background-color: #FFF0D1">
                                <h6 class="mt-1" style="color: #b60404"><b>Menu Pesanan</b></h6>
                            </th>
                            <th class="text-center" style="background-color: #FFF0D1">
                                <h6 class="mt-1" style="color: #b60404"><b>Jumlah Pesanan</b></h6>
                            </th>
                            <th class="text-center" style="background-color: #FFF0D1">
                                <h6 class="mt-1" style="color: #b60404"><b>Pesan</b></h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getPesanan as $item)
                            <tr>
                                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                                    <b>{{ ($getPesanan->currentPage() - 1) * $getPesanan->perPage() + $loop->iteration }}</b>
                                </td>
                                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                                    {{ $item->tgl }}</td>
                                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                                    {{ $item->namapelanggan }}</td>
                                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                                    {{ $item->menupesanan }}</td>
                                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                                    {{ $item->jumlahpesanan }}</td>
                                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                                    {{ $item->pesan }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $getPesanan->links() }}
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
