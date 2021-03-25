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
        $konsultan = implode('|', $request->input('konsultan_servis'));
        $store = new konsultan;
        $store->konsultan_servis = $konsultan;

        $store->save();
        return redirect()->route('konsultan')->with('success', 'Konsultan berhasil disimpan');
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
        $update = konsultan::find($request->id_konsultan);

        $update->konsultan_servis = $request->konsultan_servis;
        $update->save();
        return redirect()->route('konsultan')->with('success', 'Konsultan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_konsultan)
    {
        $destroy = konsultan::find($id_konsultan);;
        $destroy->delete();
        return redirect()->route('konsultan')->with('success', 'Konsultan berhasil dihapus');
    }
}
