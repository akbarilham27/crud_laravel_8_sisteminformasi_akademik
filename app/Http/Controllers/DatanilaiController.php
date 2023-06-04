<?php

namespace App\Http\Controllers;
use App\Models\Datanilai;
use App\Models\Datasiswa;
use Illuminate\Http\Request;
use PDF;

class DatanilaiController extends Controller
{
    public function nilai(){
        $data_nilai = Datanilai::all();
        return view('Datanilai.datanilai',compact('data_nilai'));
    }
    public function tambahnilai(){
        $data_siswa = Datasiswa::all();
        return view('Datanilai.tambahdatanilai', compact('data_siswa'));
     }
     public function insertnilai(Request $request){
        // dd($request->all());
        Datanilai::create($request->all());
       return redirect()->route('nilai')->with('success','Data Berhasil Di Tambah');
    }
     //HANYA MENAMPILKAN
     public function tampilkannilai($id_nilai){
        $data_nilai = Datanilai::find($id_nilai);
        $data_siswa = Datasiswa::all();
         return view('Datanilai.tampildatanilai', compact('data_nilai','data_siswa'));
    }
    //Update
    public function updatenilai(Request $request, $id_nilai){
        $data_nilai = Datanilai::find($id_nilai);
        $data_nilai->update($request->all());
        return redirect()->route('nilai');
    }

    public function deletenilai($id_nilai){
        $data_nilai=Datanilai::find($id_nilai);
        $data_nilai->delete();
        return redirect()->route('nilai')->with('success','Data Berhasil Di Hapus');
    }
    public function exportnilaipdf()
    {
        $data_nilai = Datanilai::all();
        view()->share('data', $data_nilai);
        $pdf = PDF::loadview('Datanilai.datanilai-pdf', compact('data_nilai'));
        return $pdf->stream('datanilai-pdf');
    }
}
