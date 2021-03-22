<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KegiatanController extends Controller
{
    public function index()
    {
        $data = [
            'tbl_kegiatan'          => DB::table('tbl_kegiatan')->get()
        ];
        return view('admin.kegiatan.index', $data);
    }
    public function kegiatanTambah()
    {
        return view('admin.kegiatan.tambah');
    }
    public function kegiatanTambahProses(Request $request)
    {
        $request->validate(
            [
                'kegiatan'      => 'required'
            ],
            [
                'kegiatan.required' => 'Nama kegiatan harus di isi !'
            ]
        );
        DB::table('tbl_kegiatan')->insert([
            'kegiatan'          => $request->input('kegiatan'),
            'tanggal'           => $request->input('tanggal'),
            'keterangan'        => $request->input('keterangan'),
            'created_at'        => date('Y-m-d H:i:s')
        ]);
        return redirect()->route('kegiatan')->with('success', 'Data berhasil di simpan');
    }
    public function kegiatanEdit($id)
    {
        $data = [
            'tbl_kegiatan'      => DB::table('tbl_kegiatan')->where('id', $id)->first()
        ];
        return view('admin.kegiatan.edit', $data);
    }
    public function kegiatanEditProses(Request $request, $id)
    {
        DB::table('tbl_kegiatan')->where('id', $id)
            ->update([
                'kegiatan'      => $request->input('kegiatan'),
                'tanggal'       => $request->input('tanggal'),
                'keterangan'    => $request->input('keterangan'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]);
        return redirect()->route('kegiatan')->with('success', 'Data berhasil di edit');
    }
    public function kegiatanHapus($id)
    {
        DB::table('tbl_kegiatan')->where('id', $id)->delete();
        return redirect()->route('kegiatan')->with('success', 'Data berhasil di hapus');
    }
}
