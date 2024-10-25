@extends('mainLogin')

@section('title')
    Kategori
    {{-- ini isi kategori admin --}}
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
</style>
    <div class="container-fluid pt-3 mb-3">
        <h2 class="mb-0 ms-3">Kategori Menu</h2>
        <div class="card mt-5">
            <div class="card-header">
                        <div class="d-flex">
                            <div class="w-100 pt-2">
                                <h5>Data Kategori</h5>
                            </div>
                            <div class="w-100 text-end">
                                <a href="{{ url('/kategori/add') }}" class="btn btn-outline-light"> <i class="bi bi-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" id="flash-message">
                                {{Session::get('message')}}
                            </div>
                            <script>
                                setTimeout(function (){
                                    document.getElementById('flash-message').style.display='none';
                                }, {{ session('timeout', 5000) }});
                            </script>
                        @endif
                        @if (Session::has('message_delete'))
                            <div class="alert alert-warning" id="flash-message_delete">
                                {{Session::get('message_delete')}}
                            </div>
                            <script>
                                setTimeout(function (){
                                    document.getElementById('flash-message_delete').style.display='none';
                                }, {{ session('timeout', 5000) }});
                            </script>
                        @endif
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="20" style="background-color: #fffced"><h6 class="mt-1" style="color: #493628"><b>NO</b></h6></th>
                                    <th class="text-center" style="background-color: #fffced"><h6 class="mt-1" style="color: #493628"><b>Nama Kategori</b></h6></th>
                                    <th class="text-center" style="background-color: #fffced"><h6 class="mt-1" style="color: #493628"><b>Aksi</b></h6></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getKategori as $item)
                                    <tr>
                                        <td class="text-center" style="background-color: #fffced; color: #493628">
                                            <b>{{ (($getKategori->currentPage() -1)* $getKategori->perPage()) + $loop->iteration }}</b>
                                        </td>
                                        <td class="text-center" style="background-color: #fffced; color: #493628">{{$item->nama_kategori}}</td>
                                        <td class="text-center" style="background-color: #fffced">
                                            <a href="{{ url('/kategori/edit') }}/{{ $item->id }}" title="Edit" class="btn btn-success btn-sm">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            
                                            <a href="{{ url('/kategori') }}/{{ $item->id }}" title="Hapus" class="btn btn-danger btn-sm" 
                                                onclick="return confirm('Yakin hapus data? menghapus data mungkin dapat menyebabkan kesalahan dalam beberapa fitur!!!');">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $getKategori->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection