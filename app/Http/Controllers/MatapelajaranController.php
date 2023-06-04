<?php

namespace App\Http\Controllers;
use App\Models\Matapelajaran;
use App\Models\Dataguru;
use Illuminate\Http\Request;
use PDF;

class MatapelajaranController extends Controller
{
    public function mapel(){
  
        $matapelajaran = Matapelajaran::all();
        return view('Matapelajaran.matapelajaran',compact('matapelajaran'));
    }
    public function tambahmapel(){
        $data_guru = Dataguru::all();
        return view('Matapelajaran.tambahmapel', compact('data_guru'));
     }
     public function insertmapel(Request $request){
        // dd($request->all());
        Matapelajaran::create($request->all());
       return redirect()->route('mapel')->with('success','Data Berhasil Di Tambah');
    }

      //HANYA MENAMPILKAN
      public function tampilkanmapel($id_pelajaran){
        $matapelajaran = Matapelajaran::find($id_pelajaran);
        $data_guru = Dataguru::all();
         return view('Matapelajaran.tampilmapel', compact('matapelajaran','data_guru'));
    }
    //Update
    public function updatemapel(Request $request, $id_pelajaran){
        $matapelajaran = Matapelajaran::find($id_pelajaran);
        $matapelajaran->update($request->all());
        return redirect()->route('mapel');
    }
    public function deletemapel($id_pelajaran){
        $matapelajaran=Matapelajaran::find($id_pelajaran);
        $matapelajaran->delete();
        return redirect()->route('mapel')->with('success','Data Berhasil Di Hapus');
    }
    public function exportmapelpdf()
    {
        $matapelajaran = Matapelajaran::all();
        view()->share('data', $matapelajaran);
        $pdf = PDF::loadview('Matapelajaran.mapel-pdf', compact('matapelajaran'));
        return $pdf->stream('mapel-pdf.pdf');
    }
}
