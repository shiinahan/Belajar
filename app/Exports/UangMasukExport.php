<?php

namespace App\Exports;

use App\Models\pesanan;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class UangMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        
        $getUang = pesanan::orderBy('created_at', 'desc')->paginate();
        return view('uangMasuk.tabelUangMasuk', ['data' => $getUang]);
    }
}
