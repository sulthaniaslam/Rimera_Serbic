<?php

namespace App\Http\Controllers;

use App\Models\konsultan;
use Illuminate\Http\Request;

class KonsultanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = konsultan::all();
        return view('admin.konsultan.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.konsultan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->photo) {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $photo = $request->file('photo');
            $photo_name = time() . '.' . $photo->extension();
            $photo->move(public_path('gambar'), $photo_name);

            $store = new konsultan;

            $store->nama_konsultan = $request->nama_konsultan;
            $store->pendidikan = $request->pendidikan;
            $store->bidang = $request->bidang;
            $store->photo = $photo_name;
        } else {
            $store = new konsultan;

            $store->nama_konsultan = $request->nama_konsultan;
            $store->pendidikan = $request->pendidikan;
            $store->bidang = $request->bidang;
        }

        $store->save();
        $request->session()->flash('store', 'Konsultan Berhasil di tambahkan');
        return redirect()->route('konsultan');
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
    public function edit($id_konsultan)
    {
        $edit = konsultan::find($id_konsultan);
        return view('admin.konsultan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_konsultan)
    {
        if ($request->photo) {

            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $photo = $request->file('photo');
            $photo_name = time() . '.' . $photo->extension();
            $photo->move(public_path('gambar'), $photo_name);

            $update = konsultan::find($request->id_konsultan);

            $update->nama_konsultan = $request->nama_konsultan;
            $update->pendidikan = $request->pendidikan;
            $update->bidang = $request->bidang;
            $update->photo = $photo_name;
            $update->save();
            $request->session()->flash('update', 'konsultan Berhasil diupdate');
            return redirect()->route('konsultan');
        } else {
            $update = konsultan::find($request->id_konsultan);

            $update->nama_konsultan = $request->nama_konsultan;
            $update->pendidikan = $request->pendidikan;
            $update->bidang = $request->bidang;
            $update->save();
            $request->session()->flash('update', 'konsultan Berhasil diupdate');
            return redirect()->route('konsultan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_konsultan)
    {
        $destroy = konsultan::find($id_konsultan);
        unlink(public_path('gambar') . '\\' . $destroy->photo);
        $destroy->delete();

        session()->flash('hapus', 'konsultan Berhasil Dihapus');
        return redirect()->route('konsultan');
    }
}
