<?php

namespace App\Http\Controllers;

use App\Models\datamenu;
use App\Models\pesanan;
use Illuminate\Http\Request;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $sort = $request->sort;
        $order = $request->order; // Tambahkan order

        $query = datamenu::query();

        if ($search) {
            $query->where('nama_menu', 'like', "%$search%");
        }

        if ($sort === 'nama') {
            $query->orderBy('nama_menu', $order === 'desc' ? 'desc' : 'asc'); // A-Z atau Z-A
        } elseif ($sort === 'harga') {
            $query->orderBy('harga', $order === 'desc' ? 'desc' : 'asc'); // Harga termahal atau termurah
        }

        // Mengatur pagination menjadi 4
        $data = $query->paginate(12);

        return view('Menu.menu', compact('data'));
    }


    public function create($id)
    {
        $data = datamenu::find($id);

        return view('CheckOut.checkout', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'menupesanan' => 'required',
            'pembayaran' => 'required',
            'jumlahpesanan' => 'required',
            'namapelanggan' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'tgl' => 'required',
        ]);

        $save = new pesanan();
        $save->menupesanan = $request->menupesanan;
        $save->pembayaran = $request->pembayaran;
        $save->tgl = $request->tgl;

        $hargamenu = $request->hargamenu;
        $jumlahpesanan = $request->jumlahpesanan;
        $harga = $hargamenu * $jumlahpesanan;
        $save->harga = $harga;
        $save->jumlahpesanan = $request->jumlahpesanan;
        $save->namapelanggan = $request->namapelanggan;
        $save->notelp = $request->notelp;
        $save->alamat = $request->alamat;
        $save->pesan = $request->pesan;
        // dd($save);
        $save->save();

        return redirect('/menu')->with('message', 'Pesanan Anda Berhasil Diproses');
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
