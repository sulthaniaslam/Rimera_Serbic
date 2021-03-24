<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    //
    public function index()
    {
        $data = [
            'tbl_jadwal'        => DB::table('tbl_jadwal')->get()
        ];
        return view('admin.jadwal.index', $data);
    }
    public function jadwalTambah()
    {
        return view('admin.jadwal.tambah');
    }
    public function jadwalTambahProses(Request $request)
    {
        $request->validate(
            [
                'nama_jadwal'       => 'required',
                'tanggal'           => 'required'
            ],
            [
                'nama_jadwal.required'  => 'Nama jadwal harus di isi !',
                'tanggal.required'      => 'Tanggal harus di isi !'
            ]
        );

        DB::table('tbl_jadwal')->insert([
            'nama_jadwal'       => $request->input('nama_jadwal'),
            'tanggal'           => $request->input('tanggal')
        ]);
        return redirect()->route('jadwal')->with('success', 'Data berhasil di tambahkan');
    }
    public function jadwalEdit($id)
    {
        $data = [
            'tbl_jadwal'        => DB::table('tbl_jadwal')->where('id', $id)->first()
        ];
        return view('admin.jadwal.edit', $data);
    }
    public function jadwalEditProses(Request $request, $id)
    {
        DB::table('tbl_jadwal')
            ->where('id', $id)
            ->update([
                'nama_jadwal'       => $request->input('nama_jadwal'),
                'tanggal'           => $request->input('tanggal')
            ]);

        return redirect()->route('jadwal')->with('success', 'Data berhasil di edit');
    }
    public function jadwalHapus($id)
    {
        DB::table('tbl_jadwal')->where('id', $id)->delete();
        return redirect()->route('jadwal')->with('success', 'Data berhasil di hapus');
    }
}
