@extends('mainLogin')

@section('title')
    Dashboard D'Waroeng
@endsection

@section('content')
    <style>
        .h2 {
            color: #b60404;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .total-pendapatan .card {
            background-color: #b60404;
            /* Warna merah untuk latar belakang */
            border-radius: 15px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        }

        .total-pendapatan .card-body {
            color: #f6ebc5;
            /* Warna teks putih untuk kontras */
            padding: 20px;
            text-align: center;
        }

        .sidebar {
            width: 250px;
            background-color: #f6ebc5;
            padding: 20px;
            border-right: 1px solid #ccc;
        }

        .content-area {
            flex-grow: 1;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            background-color: #f6ebc5;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 1.5rem;
            color: #6c757d;
        }

        .btn_info {
            background-color: #003788;
            color: #fff;
            border-radius: 5px;
            padding: 8px 16px;
            transition: background-color 0.3s ease;
        }

        .btn_info:hover {
            background-color: #FFFFFF;
            color: #000000;
        }

        .custom-icon-size {
            font-size: 30px;
        }
    </style>

    <div class="container-fluid d-flex">
        <div class="content-area">
            <div class="header-container">
                <h2 class="mb-0 ms-3">Rekap Pesanan</h2>
                <div class="total-pendapatan">
                    <div class="card">
                        <div class="card-body">
                            <h3>Total Pendapatan :</h3>
                            <h4>{{ 'Rp' . number_format($getTotalUang, 0, ',', '.') }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="page-header"></div>
                        <br><br>

                        <div class="row">
                            <div class="col col-md-10 offset-md-1 mt-5 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body" style="background-color: #b60404">
                                        <h4 class="card-title" style="color: #f6ebc5">Basic Table</h4>
                                        <br>
                                        <div class="table-responsive" style="background-color:#f6ebc5">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th style="background-color: #fffced; color:#b60404"><b>No </b></th>
                                                        <th style="background-color: #fffced; color:#b60404"><b>Tanggal </b>
                                                        </th>
                                                        <th style="background-color: #fffced; color:#b60404"><b>Nama
                                                                Pelanggan </b></th>
                                                        <th style="background-color: #fffced; color:#b60404"><b>Pesanan </b>
                                                        </th>
                                                        <th style="background-color: #fffced; color:#b60404"><b>Jumlah
                                                                Pesanan </b></th>
                                                        <th style="background-color: #fffced; color:#b60404"><b>Uang Masuk
                                                            </b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td style="background-color: #fffced; color: #b60404">
                                                                <b>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</b>
                                                            </td>
                                                            <td style="background-color: #fffced">{{ $item->tgl }}</td>
                                                            <td style="background-color: #fffced">{{ $item->namapelanggan }}
                                                            </td>
                                                            <td style="background-color: #fffced">{{ $item->menupesanan }}
                                                            </td>
                                                            <td style="background-color: #fffced">{{ $item->jumlahpesanan }}
                                                            </td>
                                                            <td style="background-color: #fffced">
                                                                {{ 'Rp' . number_format($item->harga, 0, ',', '.') }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
