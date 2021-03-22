<?php

namespace App\Http\Controllers;

use App\Models\visi_misi;
use Illuminate\Http\Request;

class visimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = visi_misi::all();
        return view('admin.visi_misi.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visi_misi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $store = new visi_misi;

        $store->visi = $request->visi;
        $store->misi = $request->misi;

        $store->save();
        $request->session()->flash('store', ' Visi Misi Berhasil Ditambahkan');
        return redirect()->route('visi_misi');
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
    public function edit($id_vm)
    {
        $edit = visi_misi::find($id_vm);
        return view('admin.visi_Misi.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_vm)
    {
        $update = visi_misi::find($request->id_vm);

        $update->visi = $request->visi;
        $update->misi = $request->misi;

        $update->save();
        $request->session()->flash('update', 'Visi Misi Berhasil diupdate');
        return redirect()->route('visi_misi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_vm)
    {
        $destroy =  visi_misi::find($id_vm);
        $destroy->delete();

        session()->flash('hapus', 'Visi Misi Berhasil dihapus');
        return redirect()->route('visi_misi');
    }
}
