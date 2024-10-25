@extends('mainLogin')

@section('title')
    Menu
    {{-- ini isi menu admin --}}
@endsection

@section('content')
    <style>
        body {
            background-color: #fff0d1;
        }

        h2 {
            color: #b60404;
        }

        .card-header {
            background-color: #b60404;
            color: #ffffff;
        }

        .card-body {
            background-color: #fffced;
            color: #b60404;
        }

        .pagination {
            justify-content: center;
            /* Agar pagination berada di tengah */
        }

        .pagination .page-item.active .page-link {
            background-color: #b60404;
            /* Warna latar belakang untuk item aktif */
            color: #fff;
            /* Warna teks untuk item aktif */
        }

        .pagination .page-item .page-link {
            color: #b60404;
            /* Warna teks untuk link */
            background-color: #FFF0D1;
            /* Warna latar belakang untuk link */
            border: 1px solid #b60404;
            /* Border untuk link */
        }

        .pagination .page-item .page-link:hover {
            background-color: #a00303;
            /* Warna saat hover */
            color: #fff;
            /* Warna teks saat hover */
        }

        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            /* Warna untuk item yang dinonaktifkan */
            background-color: #fff;
            /* Warna latar belakang untuk item yang dinonaktifkan */
            border: 1px solid #dee2e6;
            /* Border untuk item yang dinonaktifkan */
        }
    </style>

    <div class="container-fluid pt-3 mb-3">
        <h2 class="mb-0 ms-3">Daftar Menu</h2>
        <div class="card mt-5">
            <div class="card-header">
                <div class="d-flex">
                    <div class="w-100 pt-2">
                        <h5>Daftar Menu</h5>
                    </div>
                    <div class="w-100 text-end">
                        <a href="{{ url('/list-menu/add') }}" class="btn btn-outline-light ">
                            <i class="bi bi-plus-circle"></i>
                        </a>
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

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="background-color: #fffced; color:#b60404">
                                <h6 class="mt-1" style="color: #493628"><b>No</b></h6>
                            </th>
                            <th class="text-center" style="background-color: #fffced" width="70">
                                <h6 class="mt-1" style="color: #493628"><b>Foto</b></h6>
                            </th>
                            <th style="background-color: #fffced; color:#b60404">
                                <h6 class="mt-1" style="color: #493628"><b>Nama Menu</b>
                            </th>
                            <th style="background-color: #fffced; color:#b60404">
                                <h6 class="mt-1" style="color: #493628"><b>Kategori</b>
                            </th>
                            <th style="background-color: #fffced; color:#b60404">
                                <h6 class="mt-1" style="color: #493628"><b>Harga</b>
                            </th>
                            <th class="text-center" style="background-color: #fffced; color:#b60404">
                                <h6 class="mt-1" style="color: #493628"><b>Aksi</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td style="background-color: #fffced; color: #b60404">
                                    <b>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</b>
                                </td>
                                <td class="text-center" style="background-color:#fffced">
                                    <a href="{{ url('assets/produkImages') }}/{{ $item->photo }}" target="_blank"><img
                                            src="{{ url('assets/produkImages') }}/{{ $item->photo }}"
                                            class="img-fluid"></a>
                                </td>
                                <td style="background-color: #fffced">{{ $item->nama_menu }} </td>
                                <td style="background-color: #fffced">{{ $item->getKategori->nama_kategori }} </td>
                                <td style="background-color: #fffced; color: #b60404">Rp{{ number_format($item->harga) }}
                                </td>
                                <td class="text-center" style="background-color: #fffced">
                                    <a href="{{ url('/list-menu/edit') }}/{{ $item->id }}" title="Edit"
                                        class="btn btn-success btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="{{ url('/list-menu') }}/{{ $item->id }}" title="Hapus"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin mau hapus menu ini???');">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
