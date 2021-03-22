<?php

namespace App\Http\Controllers;

use App\Models\sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejarah = sejarah::all();

        return view('admin.sejarah.index', compact('sejarah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sejarah.tambah');
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
                'sejarah' => 'required',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $photo = $request->file('photo');
            $photo_name = time() . '.' . $photo->extension();
            $photo->move(public_path('gambar'), $photo_name);

            $store = new sejarah;

            $store->sejarah = $request->sejarah;
            $store->photo = $photo_name;
        } else {
            $store = new sejarah;
            $store->sejarah = $request->sejarah;
        }
        $store->save();
        // $request->session()->flash('store', ' Sejarah Berhasil Ditambahkan');
        return redirect()->route('sejarah')->with('success', 'Sejarah berhasil ditambahkan');
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
    public function edit($id_sejarah)
    {
        $edit = sejarah::find($id_sejarah);
        return view('admin.sejarah.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_sejarah)
    {
        if ($request->photo) {

            $request->validate([
                'sejarah' => 'required',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $photo = $request->file('photo');
            $photo_name = time() . '.' . $photo->extension();
            $photo->move(public_path('gambar'), $photo_name);

            $update = sejarah::find($request->id_sejarah);

            $update->sejarah = $request->sejarah;
            $update->photo = $photo_name;
            $update->save();
            // $request->session()->flash('update', 'Sejarah Berhasil diupdate');
            return redirect()->route('sejarah')->with('success', 'Sejarah Berhasil diupdate');
        } else {
            $update = sejarah::find($request->id_sejarah);

            $update->sejarah = $request->sejarah;
            $update->save();
            // $request->session()->flash('update', 'Sejarah Berhasil diupdate');
            return redirect()->route('sejarah')->with('success', 'Sejarah Berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_sejarah)
    {
        $destroy = sejarah::find($id_sejarah);
        unlink(public_path('gambar') . '\\' . $destroy->photo);
        $destroy->delete();

        // session()->flash('hapus', ' Sejarah Berhasil Dihapus');
        return redirect()->route('sejarah')->with('success', 'Sejarah Berhasil Dihapus');
    }
}
