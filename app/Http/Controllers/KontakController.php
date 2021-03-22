<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function index()
    {
        $data = [
            'tbl_kontak'        => DB::table('tbl_kontak')->get()
        ];
        return view('admin.kontak.index', $data);
    }
    public function kontakTambah()
    {
        return view('admin.kontak.tambah');
    }
    public function kontakTambahProses(Request $request)
    {
        $request->validate(
            [
                'jenis_kontak'      => 'required',
                'kontak'      => 'required',
            ]
        );

        $jenis_kontak   = $request->input('jenis_kontak');
        $kontak         = $request->input('kontak');

        foreach ($jenis_kontak as $key => $value) {
            DB::table('tbl_kontak')->insert([
                'jenis_kontak'      => $jenis_kontak[$key],
                'kontak'            => $kontak[$key]
            ]);
        }
        return redirect()->route('kontak')->with('success', 'Data berhasil di simpan');
    }
    public function kontakEdit($id)
    {
        $data = [
            'tbl_kontak'            => DB::table('tbl_kontak')->where('id', $id)->first()
        ];
        return view('admin.kontak.edit', $data);
    }
    public function kontakEditProses(Request $request, $id)
    {
        DB::table('tbl_kontak')->where('id', $id)->update([
            'jenis_kontak'      => $request->input('jenis_kontak'),
            'kontak'            => $request->input('kontak')
        ]);
        return redirect()->route('kontak')->with('success', 'Data berhasil di edit');
    }
    public function kontakHapus($id)
    {
        DB::table('tbl_kontak')->where('id', $id)->delete();
        return redirect()->route('kontak')->with('success', 'Data berhasil di hapus');
    }
}
