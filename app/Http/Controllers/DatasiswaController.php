<?php

namespace App\Http\Controllers;

use App\Models\Datasiswa;
use App\Models\Datapengguna;
use Illuminate\Http\Request;
use PDF;

class DatasiswaController extends Controller
{
    public function index()
    {
        $data_siswa = Datasiswa::paginate(5);
        return view('Datasiswa.datasiswa', compact('data_siswa'));
    }
    public function tambahsiswa()
    {
        $data_pengguna = Datapengguna::all();
        return view('Datasiswa.tambahsiswa', compact('data_pengguna'));
    }
    public function insertsiswa(Request $request)
    {
        // dd($request->all());
        Datasiswa::create($request->all());
        return redirect()->route('siswa')->with('success', 'Data Berhasil Di Tambah');
    }

    public function delete($id_siswa)
    {
        $data_siswa = Datasiswa::find($id_siswa);
        $data_siswa->delete();
        return redirect()->route('siswa')->with('success', 'Data Berhasil Di Hapus');
    }

    public function tampilkansiswa($id_siswa)
    {
        $data_siswa = Datasiswa::find($id_siswa);
        $data_pengguna = Datapengguna::all();
        return view('Datasiswa.tampilsiswa', compact('data_siswa', 'data_pengguna'));
    }
    public function updatesiswa(Request $request, $id_siswa)
    {
        $data_siswa = Datasiswa::find($id_siswa);
        $data_siswa->update($request->all());
        return redirect()->route('siswa')->with('success', 'Data Berhasil Di Update');
    }
    public function exportpdf()
    {
        $data_siswa = Datasiswa::all();
        view()->share('data', $data_siswa);
        $pdf = PDF::loadview('Datasiswa.siswa-pdf', compact('data_siswa'));
        return $pdf->stream('siswa-pdf.pdf');
    }
}
