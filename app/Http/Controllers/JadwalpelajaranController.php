<?php

namespace App\Http\Controllers;
use App\Models\Jadwalpelajaran;
use App\Models\Datakelas;
use App\Models\Dataguru;
use Illuminate\Http\Request;
use PDF;

class JadwalpelajaranController extends Controller
{
    public function jadwal(){
  
        $jadwalpelajaran = Jadwalpelajaran::all();
        return view('Jadwalpelajaran.jadwalpelajaran',compact('jadwalpelajaran'));
    }
    public function tambahjadwal(){
        $data_kelas = Datakelas::all();
        $data_guru = Dataguru::all();
        return view('Jadwalpelajaran.tambahjadwal', compact('data_kelas', 'data_guru'));
     }
    public function insertjadwal(Request $request){
        // dd($request->all());
        Jadwalpelajaran::create($request->all());
       return redirect()->route('jadwal')->with('success','Data Berhasil Di Tambah');
    }
        //HANYA MENAMPILKAN
    public function tampilkanjadwal($id_jadwal){
            $jadwalpelajaran = Jadwalpelajaran::find($id_jadwal);
            $data_guru = Dataguru::all();
            $data_kelas = Datakelas::all();
             return view('Jadwalpelajaran.tampiljadwal', compact('jadwalpelajaran', 'data_guru', 'data_kelas'));
        }

    //Update
    public function updatejadwal(Request $request, $id_jadwal){
        $jadwalpelajaran = Jadwalpelajaran::find($id_jadwal);
        $jadwalpelajaran->update($request->all());
        return redirect()->route('jadwal');
    }

    public function deletejadwal($id_jadwal){
        $jadwalpelajaran=Jadwalpelajaran::find($id_jadwal);
        $jadwalpelajaran->delete();
        return redirect()->route('jadwal');
    }

    public function exportjadwalpdf()
    {
        $jadwalpelajaran = Jadwalpelajaran::all();
        view()->share('data', $jadwalpelajaran);
        $pdf = PDF::loadview('Jadwalpelajaran.jadwalpelajaran-pdf', compact('jadwalpelajaran'));
        return $pdf->stream('jadwalpelajaran-pdf.pdf');
    }
}
