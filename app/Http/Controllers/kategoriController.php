<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getKategori = kategori::paginate();

        return view('Kategori.kategori', compact('getKategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Kategori.addKategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Kategori wajib di isi'
        ]);
            
        $saveKategori = new kategori();
        $saveKategori->nama_kategori = $request->name;
        $saveKategori->save();
        return redirect('/kategori')->with('message', 'Kategori ' . $request->name . ' Berhasil Ditambahkan');
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
        $getKategori = kategori::find($id);

        return view('Kategori.editKategori', compact('getKategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Kategori wajib di isi'
        ]);
            
        $saveKategori = kategori::find($id);
        $saveKategori->nama_kategori = $request->name;
        $saveKategori->save();
        return redirect('/kategori')->with('message', 'Kategori ' . $request->name . ' Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delData = kategori::find($id);
        $delData->delete();
        return redirect()->back()->with('message', 'Data '. $delData->nama_kategori . ' dihapus');
    }
}