<?php

namespace App\Exports;

use App\Models\pesanan;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class PelangganExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $getPelanggan = pesanan::orderBy('created_at', 'desc')->paginate(); 
        return view('Pelanggan.tabelPelanggan', ['data' => $getPelanggan]);
    }
}
