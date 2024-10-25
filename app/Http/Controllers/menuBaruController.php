<?php

namespace App\Http\Controllers;

use App\Models\datamenu;
use App\Models\kategori;
use Illuminate\Http\Request;

class menuBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = datamenu::paginate();
        return view('Menu.menuBaru', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::all();

        return view('Menu.addMenuBaru', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|exists:kategoris,id',
            'name' => 'required',
            'price' => 'required',
            'photo' => 'required|mimes:png,jpg,jpeg',
        ], [
            'kategori.required' => 'Isi kategorinyaa!!',
            'name.required' => 'Isi namanyaa!!',
            'price.required' => 'Harganya woii!!',
            'photo.required' => 'Fotonya woii!!',
        ]);

        $photo = $request->file('photo');
        $new_photo_name = uniqid() . "." . $photo->getClientOriginalExtension();
        $photo->move('assets/produkImages', $new_photo_name);

        $saveMenu = new datamenu();
        $saveMenu->kategori_id = $request->kategori;
        $saveMenu->nama_menu = $request->name;
        $saveMenu->harga = $request->price;
        $saveMenu->photo = $new_photo_name;
        $saveMenu->save();

        return redirect('/list-menu')->with('message', 'Berhasil Menambahkan Menu Baru : ' . $request->name);
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
        $kategori = kategori::all();
        $data = datamenu::find($id);

        return view('Menu.editMenuBaru', compact('kategori', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori' => 'required|exists:kategoris,id',
            'name' => 'required',
            'price' => 'required',
            'photo' => 'mimes:png,jpg,jpeg',
        ], [
            'kategori.required' => 'Isi kategorinyaa!!',
            'name.required' => 'Isi namanyaa!!',
            'price.required' => 'Harganya woii!!',
        ]);

        $saveMenu = datamenu::find($id);
        $saveMenu->kategori_id = $request->kategori;
        $saveMenu->nama_menu = $request->name;
        $saveMenu->harga = $request->price;

        $old_photo = $saveMenu->photo;

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $new_photo_name = uniqid() . "." . $photo->getClientOriginalExtension();
            $photo->move('assets/produkImages', $new_photo_name);

            $saveMenu->photo = $new_photo_name;

            if ($old_photo && file_exists(public_path('assets/produkImages' . $old_photo->photo))) {
                unlink(public_path('assets/produkImages' . $old_photo->photo));
            }
        }

        $saveMenu->save();

        return redirect('/list-menu')->with(
            'message',
            'Menu : ' . $request->name . ', berhasil di perbaharui!!'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $data = datamenu::find($id);

        if ($data && file_exists(public_path('assets/produkImages' . $data->photo))){
            unlink(public_path('assets/produkImages'. $data->photo));
        }

        $data->delete();

        return redirect()->back()->with(
            'message',
            'Menu : ' . $request->name . ', berhasil dihapus!!'
        );
    }
}
