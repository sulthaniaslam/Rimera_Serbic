<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfiltrainerController extends Controller
{
    public function index()
    {
        $data = [
            'tbl_profil'    => DB::table('tbl_profil')->get()
        ];
        return view('admin.profil.index', $data);
    }
    public function profilTambah()
    {
        return view('admin.profil.tambah');
    }
    public function profilTambahProses(Request $request)
    {
        $request->validate(
            [
                'nama_trainer'      => 'required|min:3',
                'pendidikan'        => 'required'
            ],
            [
                'nama_trainer.required'     => 'Nama trainer harus di isi !',
                'nama_trainer.min:3'        => 'Nama trainer minimal 3 huruf !',
                'pendidikan.required'       => 'Pendidikan harus di isi !'
            ]
        );

        $pendidikan = implode('|', $request->input('pendidikan'));
        $pengalaman_kerja = implode('|', $request->input('pengalaman_kerja'));

        DB::table('tbl_profil')->insert([
            'nama_trainer'      => $request->input('nama_trainer'),
            'pendidikan'        => $pendidikan,
            'pengalaman_kerja'  => $pengalaman_kerja,
            'created_at'        => date('Y-m-d H:i:s')
        ]);
        return redirect()->route('profil')->with('success', 'Data berhasil di simpan');
    }
    public function profilEdit($id)
    {
        $data = [
            'tbl_profil'        => DB::table('tbl_profil')->where('id', $id)->first()
        ];
        return view('admin.profil.edit', $data);
    }
    public function profilEditProses(Request $request, $id)
    {
        $pendidikan = implode('|', $request->input('pendidikan'));
        $pengalaman_kerja = implode('|', $request->input('pengalaman_kerja'));

        DB::table('tbl_profil')->where('id', $id)
            ->update([
                'nama_trainer'          => $request->input('nama_trainer'),
                'pendidikan'            => $pendidikan,
                'pengalaman_kerja'      => $pengalaman_kerja,
                'updated_at'            => date('Y-m-d H:i:s')
            ]);
        return redirect()->route('profil')->with('success', 'Data berhasil di ubah');
    }
    public function profilHapus($id)
    {
        DB::table('tbl_profil')->where('id', $id)->delete();
        return redirect()->route('profil')->with('success', 'Data berhasil di hapus');
    }
}
