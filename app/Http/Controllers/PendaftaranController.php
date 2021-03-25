<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    //
    public function pendaftaranTambah(Request $request)
    {
        // dd($request->input());
        DB::table('tbl_pendaftaran')->insert([
            'nama'          => $request->input('nama'),
            'email'         => $request->input('email'),
            'no_telp'       => $request->input('no_telp'),
            'alamat'        => $request->input('alamat'),
            'asal'          => $request->input('asal'),
            'pekerjaan'     => $request->input('pekerjaan'),
            'nama_training' => $request->input('nama_training')
        ]);
        return redirect()->route('/')->with('success', 'Data berhasil di tambahkan');
    }

    public function index()
    {
        $data = [
            'tbl_pendaftaran'       => DB::table('tbl_pendaftaran')->get()
        ];
        return view('admin.pendaftaran.index', $data);
    }
    public function pendaftaranEdit($id)
    {
        $data = [
            'tbl_pendaftaran'   => DB::table('tbl_pendaftaran')->where('id', $id)->first()
        ];
        return view('admin.pendaftaran.edit', $data);
    }
    public function pendaftaranHapus($id)
    {
        DB::table('tbl_pendaftaran')->where('id', $id)->delete();
        return redirect()->route('pendaftaran')->with('success', 'Data berhasil di hapus');
    }
}
