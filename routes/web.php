<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\DatawalimuridController;
use App\Http\Controllers\DataguruController;
use App\Http\Controllers\JadwalpelajaranController;
use App\Http\Controllers\JenisnilaiController;
use App\Http\Controllers\DatakelasController;
use App\Http\Controllers\DatanilaiController;
use App\Http\Controllers\MatapelajaranController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\TahunajaranController;
use App\Http\Controllers\DatapenggunaController;
use App\Http\Controllers\DatapegawaiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('Layout.admin');
});
// Route::get('/siswa', function () {
//     return view('datasiswa');
// });

//Data Siswa
Route::get('/siswa',[DatasiswaController::class, 'index'])->name('siswa');
Route::get('/tambahsiswa',[DatasiswaController::class, 'tambahsiswa'])->name('tambahsiswa');
Route::post('/insertsiswa',[DatasiswaController::class, 'insertsiswa'])->name('insertsiswa');
Route::get('/tampilkansiswa/{id_siswa}',[DatasiswaController::class, 'tampilkansiswa'])->name('tampilkansiswa');
Route::post('/updatesiswa/{id_siswa}',[DatasiswaController::class, 'updatesiswa'])->name('updatesiswa');
Route::get('/delete/{id_pengguna}',[DatasiswaController::class, 'delete'])->name('delete');
Route::get('/exportpdf',[DatasiswaController::class, 'exportpdf'])->name('exportpdf');

//Data Walimurid
Route::get('/walimurid',[DatawalimuridController::class, 'indexwalimurid'])->name('walimurid');
Route::get('/tambahwalimurid',[DatawalimuridController::class, 'tambahwalimurid'])->name('tambahwalimurid');
Route::post('/insertwalimurid',[DatawalimuridController::class, 'insertwalimurid'])->name('insertwalimurid');
Route::get('/tampilkanwalimurid/{id_wali}',[DatawalimuridController::class, 'tampilkanwalimurid'])->name('tampilkanwalimurid');
Route::post('/updatewalimurid/{id_wali}',[DatawalimuridController::class, 'updatewalimurid'])->name('updatewalimurid');
Route::get('/deletewalimurid/{id_wali}',[DatawalimuridController::class, 'deletewalimurid'])->name('deletewalimurid');

//Data Guru
Route::get('/guru',[DataguruController::class, 'indexguru'])->name('guru');
Route::get('/tambahguru',[DataguruController::class, 'tambahguru'])->name('tambahguru');
Route::post('/insertguru',[DataguruController::class, 'insertguru'])->name('insertguru');
Route::get('/tampilkanguru/{id_guru}',[DataguruController::class, 'tampilkanguru'])->name('tampilkanguru');
Route::post('/updateguru/{id_guru}',[DataguruController::class, 'updateguru'])->name('updateguru');
Route::get('/deleteguru/{id_guru}',[DataguruController::class, 'deleteguru'])->name('deleteguru');
Route::get('/exportgurupdf',[DataguruController::class, 'exportgurupdf'])->name('exportgurupdf');


//Data Jadwal
Route::get('/jadwal',[JadwalpelajaranController::class, 'jadwal'])->name('jadwal');
Route::get('/tambahjadwal',[JadwalpelajaranController::class, 'tambahjadwal'])->name('tambahjadwal');
Route::post('/insertjadwal',[JadwalpelajaranController::class, 'insertjadwal'])->name('insertjadwal');
Route::get('/tampilkanjadwal/{id_jadwal}',[JadwalpelajaranController::class, 'tampilkanjadwal'])->name('tampilkanjadwal');
Route::post('/updatejadwal/{id_jadwal}',[JadwalpelajaranController::class, 'updatejadwal'])->name('updatejadwal');
Route::get('/deletejadwal/{id_jadwal}',[JadwalpelajaranController::class, 'deletejadwal'])->name('deletejadwal');
Route::get('/exportjadwalpdf',[JadwalpelajaranController::class, 'exportjadwalpdf'])->name('exportjadwalpdf');


//Data Pengguna
Route::get('/pengguna',[DatapenggunaController::class, 'pengguna'])->name('pengguna');
Route::get('/tambahpengguna',[DatapenggunaController::class, 'tambahpengguna'])->name('tambahpengguna');
Route::post('/insertpengguna',[DatapenggunaController::class, 'insertpengguna'])->name('insertpengguna');
Route::get('/tampilkanpengguna/{id_pengguna}',[DatapenggunaController::class, 'tampilkanpengguna'])->name('tampilkanpengguna');
Route::post('/updatepengguna/{id_pengguna}',[DatapenggunaController::class, 'updatepengguna'])->name('updatepengguna');
Route::get('/deletepengguna/{id_pengguna}',[DatapenggunaController::class, 'deletepengguna'])->name('deletepengguna');

//Data Jenis Nilai
Route::get('/jenisnilai',[JenisnilaiController::class, 'jenisnilai'])->name('jenisnilai');
Route::get('/tambahjenisnilai',[JenisnilaiController::class, 'tambahjenisnilai'])->name('tambahjenisnilai');
Route::post('/insertjenisnilai',[JenisnilaiController::class, 'insertjenisnilai'])->name('insertjenisnilai');
Route::get('/tampilkanjenisnilai/{siswa}',[JenisnilaiController::class, 'tampilkanjenisnilai'])->name('tampilkanjenisnilai');
Route::post('/updatejenisnilai/{siswa}',[JenisnilaiController::class, 'updatejenisnilai'])->name('updatejenisnilai');
Route::get('/deletejenisnilai/{siswa}',[JenisnilaiController::class, 'deletejenisnilai'])->name('deletejenisnilai');


//Data Matapelajaran
Route::get('/mapel',[MatapelajaranController::class, 'mapel'])->name('mapel');
Route::get('/tambahmapel',[MatapelajaranController::class, 'tambahmapel'])->name('tambahmapel');
Route::post('/insertmapel',[MatapelajaranController::class, 'insertmapel'])->name('insertmapel');
Route::get('/tampilkanmapel/{id_pelajaran}',[MatapelajaranController::class, 'tampilkanmapel'])->name('tampilkanmapel');
Route::post('/updatemapel/{id_pelajaran}',[MatapelajaranController::class, 'updatemapel'])->name('updatemapel');
Route::get('/deletemapel/{id_pelajaran}',[MatapelajaranController::class, 'deletemapel'])->name('deletemapel');
Route::get('/exportmapelpdf',[MatapelajaranController::class, 'exportmapelpdf'])->name('exportmapelpdf');



//Data Kelas
Route::get('/kelas',[DatakelasController::class, 'kelas'])->name('kelas');
Route::get('/tambahkelas',[DatakelasController::class, 'tambahkelas'])->name('tambahkelas');
Route::post('/insertkelas',[DatakelasController::class, 'insertkelas'])->name('insertkelas');
Route::get('/tampilkankelas/{id_kelas}',[DatakelasController::class, 'tampilkankelas'])->name('tampilkankelas');
Route::post('/updatekelas/{id_kelas}',[DatakelasController::class, 'updatekelas'])->name('updatekelas');
Route::get('/deletekelas/{id_kelas}',[DatakelasController::class, 'deletekelas'])->name('deletekelas');



//Data Nilai
Route::get('/nilai',[DatanilaiController::class, 'nilai'])->name('nilai');
Route::get('/tambahnilai',[DatanilaiController::class, 'tambahnilai'])->name('tambahnilai');
Route::post('/insertnilai',[DatanilaiController::class, 'insertnilai'])->name('insertnilai');
Route::get('/tampilkannilai/{id_nilai}',[DatanilaiController::class, 'tampilkannilai'])->name('tampilkannilai');
Route::post('/updatenilai/{id_nilai}',[DatanilaiController::class, 'updatenilai'])->name('updatenilai');
Route::get('/deletenilai/{id_nilai}',[DatanilaiController::class, 'deletenilai'])->name('deletenilai');
Route::get('/exportnilaipdf',[DatanilaiController::class, 'exportnilaipdf'])->name('exportnilaipdf');


//Data Ekstrakulikuler
Route::get('/ekstrakulikuler',[EkstrakulikulerController::class, 'ekstrakulikuler'])->name('ekstrakulikuler');
Route::get('/tambahekstrakulikuler',[EkstrakulikulerController::class, 'tambahekstrakulikuler'])->name('tambahekstrakulikuler');
Route::post('/insertekstrakulikuler',[EkstrakulikulerController::class, 'insertekstrakulikuler'])->name('insertekstrakulikuler');
Route::get('/tampilkanekstrakulikuler/{id_ekstrakulikuler}',[EkstrakulikulerController::class, 'tampilkanekstrakulikuler'])->name('tampilkanekstrakulikuler');
Route::post('/updateekstrakulikuler/{id_ekstrakulikuler}',[EkstrakulikulerController::class, 'updateekstrakulikuler'])->name('updateekstrakulikuler');
Route::get('/deleteekstrakulikuler/{id_ekstrakulikuler}',[EkstrakulikulerController::class, 'deleteekstrakulikuler'])->name('deleteekstrakulikuler');
Route::get('/exportekstrakulikulerpdf',[EkstrakulikulerController::class, 'exportekstrakulikulerpdf'])->name('exportekstrakulikulerpdf');



//Data Tahun Ajaran
Route::get('/tahunajaran',[TahunajaranController::class, 'tahunajaran'])->name('tahunajaran');
Route::get('/tambahtahunajaran',[TahunajaranController::class, 'tambahtahunajaran'])->name('tambahtahunajaran');
Route::post('/inserttahunajaran',[TahunajaranController::class, 'inserttahunajaran'])->name('inserttahunajaran');
Route::get('/exporttahunajaranpdf',[TahunajaranController::class, 'exporttahunajaranpdf'])->name('exporttahunajaranpdf');


//Data Pegawai
Route::get('/pegawai',[DatapegawaiController::class, 'pegawai'])->name('pegawai');