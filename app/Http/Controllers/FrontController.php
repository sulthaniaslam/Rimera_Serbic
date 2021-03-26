<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $data = [
            'tbl_sejarah'  => DB::table('tbl_sejarah')->get(),
            'tbl_visimisi' => DB::table('tbl_visi_misi')->get(),
            'tbl_so' => DB::table('tbl_so')->get(),
            'tbl_konsultan' => DB::table('tbl_konsultan')->get(),
            'tbl_kontak' => DB::table('tbl_kontak')->get(),
            'tbl_partner' => DB::table('tbl_partner')->get(),
            'tbl_profil' => DB::table('tbl_profil')->get(),
            'tbl_training' => DB::table('tbl_training')->get(),
            'tbl_kegiatan' => DB::table('tbl_kegiatan')->get(),
        ];
        return view('templates.halaman_utama', $data);
    }

    public function pendaftaranTambah(Request $request)
    {
        DB::table('tbl_pendaftaran')->insert([
            'nama'          => $request->input('nama'),
            'email'         => $request->input('email'),
            'asal'          => $request->input('asal'),
            'alamat'        => $request->input('alamat'),
            'pekerjaan'     => $request->input('pekerjaan'),
            'no_telp'       => $request->input('no_telp'),
            'nama_training' => $request->input('nama_training')
        ]);
        return redirect()->route('/')->with('success', 'Anda berhasil mendaftar');
    }
}
