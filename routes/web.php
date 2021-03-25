<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\KonsultanController;
use App\Http\Controllers\ProfiltrainerController;
use App\Http\Controllers\StrukturorganisasiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PendaftaranController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('templates.halaman_utama');
// });
Route::get('/', [FrontController::class, 'index'])->name('/');

Auth::routes();

Route::post('/pendaftaran-tambah', [FrontController::class, 'pendaftaranTambah'])->name('pendaftaran.tambah');

Route::group(['middleware' => 'auth'], function () {

    // dashboard
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // End dashboard

    // TRAINING
    Route::get('/training', [TrainingController::class, 'index'])->name('training');
    Route::get('/training-tambah', [TrainingController::class, 'trainingTambah'])->name('training.tambah');
    Route::post('/training-tambah-proses', [TrainingController::class, 'trainingTambahProses'])->name('training.tambah.proses');
    Route::get('/training-edit/{id}', [TrainingController::class, 'trainingEdit'])->name('training.edit');
    Route::post('/training-edit-proses/{id}', [TrainingController::class, 'trainingEditProses'])->name('training.edit.proses');
    Route::delete('/training-hapus/{id}', [TrainingController::class, 'trainingHapus'])->name('training.hapus');
    // END TRAINING

    // KEGIATAN
    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
    Route::get('/kegiatan-tambah', [KegiatanController::class, 'kegiatanTambah'])->name('kegiatan.tambah');
    Route::post('/kegiatan-tambah-proses', [KegiatanController::class, 'kegiatanTambahProses'])->name('kegiatan.tambah.proses');
    Route::get('/kegiatan-edit/{id}', [KegiatanController::class, 'kegiatanEdit'])->name('kegiatan.edit');
    Route::post('/kegiatan-edit-proses/{id}', [KegiatanController::class, 'kegiatanEditProses'])->name('kegiatan.edit.proses');
    Route::delete('/kegiatan-hapus/{id}', [KegiatanController::class, 'kegiatanHapus'])->name('kegiatan.hapus');
    // END KEGIATAN

    // PARTNER KERJASAMA
    Route::get('/partner', [PartnerController::class, 'index'])->name('partner');
    Route::get('/partner-tambah', [PartnerController::class, 'partnerTambah'])->name('partner.tambah');
    Route::post('/partner-tambah-proses', [PartnerController::class, 'partnerTambahProses'])->name('partner.tambah.proses');
    Route::get('/partner-edit/{id}', [PartnerController::class, 'partnerEdit'])->name('partner.edit');
    Route::post('/partner-edit-proses/{id}', [PartnerController::class, 'partnerEditProses'])->name('partner.edit.proses');
    Route::delete('/partner-hapus/{id}', [PartnerController::class, 'partnerHapus'])->name('partner.hapus');
    // END PARTNER KERJASAMA

    // PROFIL TRAINER
    Route::get('/profil', [ProfiltrainerController::class, 'index'])->name('profil');
    Route::get('/profil-tambah', [ProfiltrainerController::class, 'profilTambah'])->name('profil.tambah');
    Route::post('/profil-tambah-proses', [ProfiltrainerController::class, 'profilTambahProses'])->name('profil.tambah.proses');
    Route::get('/profil-edit/{id}', [ProfiltrainerController::class, 'profilEdit'])->name('profil.edit');
    Route::post('/profil-edit-proses/{id}', [ProfiltrainerController::class, 'profilEditProses'])->name('profil.edit.proses');
    Route::delete('/profil-hapus/{id}', [ProfiltrainerController::class, 'profilHapus'])->name('profil.hapus');
    // END PROFIL TRAINER

    // KONTAK
    Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
    Route::get('/kontak-tambah', [KontakController::class, 'kontakTambah'])->name('kontak.tambah');
    Route::post('/kontak-tambah-proses', [KontakController::class, 'kontakTambahProses'])->name('kontak.tambah.proses');
    Route::get('/kontak-edit/{id}', [KontakController::class, 'kontakEdit'])->name('kontak.edit');
    Route::post('/kontak-edit-proses/{id}', [KontakController::class, 'kontakEditProses'])->name('kontak.edit.proses');
    Route::delete('/kontak-hapus/{id}', [KontakController::class, 'kontakHapus'])->name('kontak.hapus');
    // END KONTAK


    // Sejarah
    Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');
    Route::get('/sejarah_tambah', [SejarahController::class, 'create'])->name('sejarah_tambah');
    Route::POST('/sejarah_tambah', [SejarahController::class, 'store'])->name('sejarah_tambah');
    Route::get('/sejarah_edit/{id_sejarah}', [SejarahController::class, 'edit'])->name('edit_sejarah');
    Route::POST('/sejarah_edit/{id_sejarah}', [SejarahController::class, 'update'])->name('edit_sejarah');
    Route::DELETE('/hapus_sejarah/{id_sejarah}', [SejarahController::class, 'destroy'])->name('hapus_sejarah');
    // End Sejarah

    // Visi Misi
    Route::get('/visi_misi', [VisimisiController::class, 'index'])->name('visi_misi');
    Route::get('/visi_misi_tambah', [VisimisiController::class, 'create'])->name('visi_misi_tambah');
    Route::POST('/visi_misi_tambah', [VisimisiController::class, 'store'])->name('visi_misi_tambah');
    Route::get('/edit/{id_vm}', [VisimisiController::class, 'edit'])->name('edit_visi_misi');
    Route::POST('/edit/{id_vm}', [VisimisiController::class, 'update'])->name('edit_visi_misi');
    Route::DELETE('/hapus/{id_vm}', [VisimisiController::class, 'destroy'])->name('hapus_visi_misi');
    // End Visi Misi

    // Struktur Organisasi
    Route::get('/struktur_organisasi', [StrukturorganisasiController::class, 'index'])->name('struktur_organisasi');
    Route::get('/struktur_organisasi_tambah', [StrukturorganisasiController::class, 'create'])->name('struktur_organisasi_add');
    Route::POST('/struktur_organisasi_tambah', [StrukturorganisasiController::class, 'store'])->name('struktur_organisasi_add');
    Route::get('/edit_organisasi/{id_so}', [StrukturorganisasiController::class, 'edit'])->name('struktur_organisasi_edit');
    Route::POST('/edit_organisasi/{id_so}', [StrukturorganisasiController::class, 'update'])->name('struktur_organisasi_edit');
    Route::DELETE('/hapus_so/{id_so}', [StrukturorganisasiController::class, 'destroy'])->name('struktur_organisasi_hapus');
    // End Struktur Organisasi

    // konsultan
    Route::get('/konsultan', [KonsultanController::class, 'index'])->name('konsultan');
    Route::get('/konsultan_tambah', [KonsultanController::class, 'create'])->name('konsultan_tambah');
    Route::POST('/konsultan_tambah', [KonsultanController::class, 'store'])->name('konsultan_tambah');
    Route::get('/konsultan_edit/{id_konsultan}', [KonsultanController::class, 'edit'])->name('edit_konsultan');
    Route::POST('/konsultan_edit/{id_konsultan}', [KonsultanController::class, 'update'])->name('edit_konsultan');
    Route::DELETE('/konsultan_hapus/{id_konsultan}', [KonsultanController::class, 'destroy'])->name('hapus_konsultan');
    // End konsultan

    // Jadwal
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
    Route::get('/jadwal-tambah', [JadwalController::class, 'jadwalTambah'])->name('jadwal.tambah');
    Route::post('/jadwal-tambah-proses', [JadwalController::class, 'jadwalTambahProses'])->name('jadwal.tambah.proses');
    Route::get('/jadwal-edit/{id}', [JadwalController::class, 'jadwalEdit'])->name('jadwal.edit');
    Route::post('/jadwal-edit-proses/{id}', [JadwalController::class, 'jadwalEditProses'])->name('jadwal.edit.proses');
    Route::delete('/jadwal-hapus/{id}', [JadwalController::class, 'jadwalHapus'])->name('jadwal.hapus');
    // End Jadwal

    // Pendaftaran
    // Route::post('/pendaftaran-tambah', [PendaftaranController::class, 'pendaftaranTambah'])->name('pendaftaran.tambah');

    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
    // Route::get('/pendaftaran-edit/{id}', [PendaftaranController::class, 'pendaftaranEdit'])->name('pendaftaran.edit');
    // Route::post('/pendaftaran-edit-proses/{id}', [PendaftaranController::class, 'pendaftaranEditProses'])->name('pendaftaran.edit.proses');
    Route::delete('/pendaftaran-hapus/{id}', [PendaftaranController::class, 'pendaftaranHapus'])->name('pendaftaran.hapus');
    // end Pendaftaran
});
