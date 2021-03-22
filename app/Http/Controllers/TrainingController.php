<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingController extends Controller
{
    //
    public function index()
    {
        $data = [
            'tbl_training'      => DB::table('tbl_training')->get()
        ];
        return view('admin.training.index', $data);
    }
    public function trainingTambah()
    {
        return view('admin.training.tambah');
    }
    public function trainingTambahProses(Request $request)
    {
        $judul_uk = $request->input('judul_uk');

        foreach ($judul_uk as $key => $value) {
            DB::table('tbl_training')->insert([
                'kode'          => 'K.661237.',
                'judul_uk'      => $judul_uk[$key],
                'id_b'          => '.01',
                'created_at'    => date('Y-m-d H:i:s')
            ]);
        }
        return redirect()->route('training')->with('success', 'Data berhasil disimpan');
    }
    public function trainingEdit($id)
    {
        $data = [
            'tbl_training'      => DB::table('tbl_training')->where('id', $id)->first()
        ];
        return view('admin.training.edit', $data);
    }
    public function trainingEditProses(Request $request, $id)
    {
        DB::table('tbl_training')->where('id', $id)
            ->update([
                'judul_uk'      => $request->input('judul_uk'),
                'update_at'     => date('Y-m-d H:i:s')
            ]);

        return redirect()->route('training')->with('success', 'Data berhasil di edit');
    }
    public function trainingHapus($id)
    {
        DB::table('tbl_training')->where('id', $id)->delete();
        return redirect()->route('training')->with('success', 'Data berhasil di hapus');
    }
}
