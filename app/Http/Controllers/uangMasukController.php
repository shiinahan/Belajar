<?php

namespace App\Http\Controllers;

use App\Exports\UangMasukExport;
use App\Models\pesanan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class uangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $getUang = pesanan::orderBy('created_at', 'desc')->where('tgl', 'like', "%$request->search%")->paginate();
        $getTotalUang = pesanan::sum('harga');

        return view('uangMasuk.uangMasuk', compact('getUang', 'getTotalUang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function export()
    {
        return FacadesExcel::download(new UangMasukExport, 'uang_masuk.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
