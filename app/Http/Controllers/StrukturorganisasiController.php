<?php

namespace App\Http\Controllers;

use App\Models\struktur_organisasi;
use Illuminate\Http\Request;

class strukturorganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = struktur_organisasi::all();
        return view('admin.organisasi.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organisasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photo = $request->file('photo');
        $photo_name = time() . '.' . $photo->extension();
        $photo->move(public_path('gambar'), $photo_name);

        $store = new struktur_organisasi;
        $store->photo = $photo_name;

        $store->save();
        $request->session()->flash('store', 'Struktur Organisasi Berhasil Ditambahkan');
        return redirect()->route('struktur_organisasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_so)
    {
        $edit = struktur_organisasi::find($id_so);
        return view('admin.organisasi.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_so)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $photo = $request->file('photo');
        $photo_name = time() . '.' . $photo->extension();
        $photo->move(public_path('gambar'), $photo_name);

        $update = struktur_organisasi::find($request->id_so);

        $update->photo = $photo_name;
        $update->save();
        $request->session()->flash('update', 'Struktur Organisasi Berhasil Diupdate');
        return redirect()->route('struktur_organisasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_so)
    {
        $destroy =  struktur_organisasi::find($id_so);
        $destroy->delete();
        session()->flash('hapus', 'Struktur Organisasi Berhasil Dihapus');
        return redirect()->route('struktur_organisasi');
    }
}
