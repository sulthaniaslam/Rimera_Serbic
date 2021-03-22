<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $data = [
            'tbl_partner'       => DB::table('tbl_partner')->get()
        ];
        return view('admin.partner.index', $data);
    }
    public function partnerTambah()
    {
        return view('admin.partner.tambah');
    }
    public function partnerTambahProses(Request $request)
    {
        $request->validate(
            [
                'nama_instansi'     => 'required'
            ],
            [
                'nama_instansi.required'        => 'Nama perusahaan harus di isi !'
            ]
        );

        $file = $request->file('logo_instansi')->store('gambar');

        DB::table('tbl_partner')->insert([
            'nama_instansi'     => $request->input('nama_instansi'),
            'logo_instansi'     => $file,
            'created_at'        => date('Y-m-d H:i:s')
        ]);
        return redirect()->route('partner')->with('success', 'Data berhasil di simpan');
    }
    public function partnerEdit($id)
    {
        $data = [
            'tbl_partner'       => DB::table('tbl_partner')->where('id', $id)->first()
        ];
        return view('admin.partner.edit', $data);
    }
    public function partnerEditProses(Request $request, $id)
    {
        if ($request->file('logo_instansi_baru') == null) {
            DB::table('tbl_partner')->where('id', $id)
                ->update([
                    'nama_instansi'     => $request->input('nama_instansi'),
                    'logo_instansi'     => $request->input('logo_instansi_lama')
                ]);
            return redirect()->route('partner')->with('success', 'Data telah di ubah');
        } else {
            $filebaru = $request->file('logo_instansi_baru')->store('gambar');
            Storage::delete($request->input('logo_instansi_lama'));

            DB::table('tbl_partner')->where('id', $id)
                ->update([
                    'nama_instansi'     => $request->input('nama_instansi'),
                    'logo_instansi'     => $filebaru
                ]);
            return redirect()->route('partner')->with('success', 'Data telah di ubah');
        }
    }
    public function partnerHapus($id)
    {
        DB::table('tbl_partner')->where('id', $id)->delete();
        return redirect()->route('partner')->with('success', 'Data berhasil di hapus');
    }
}
