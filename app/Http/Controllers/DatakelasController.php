<?php

namespace App\Http\Controllers;
use App\Models\Datakelas;
use Illuminate\Http\Request;

class DatakelasController extends Controller
{
    public function kelas(){
        $data_kelas = Datakelas::all();
        return view('Datakelas.datakelas',compact('data_kelas'));
    }
    public function tambahkelas(){
        return view('Datakelas.tambahkelas');
     }
    public function insertkelas(Request $request){
        // dd($request->all());
        Datakelas::create($request->all());
       return redirect()->route('kelas')->with('success','Data Berhasil Di Tambah');
    }
    //HANYA MENAMPILKAN
    public function tampilkankelas($id_kelas){
        $data_kelas = Datakelas::find($id_kelas);
        // dd($data_guru);
         return view('Datakelas.tampilkelas', compact('data_kelas'));
    }
    //Update
    public function updatekelas(Request $request, $id_kelas){
        $data_kelas = Datakelas::find($id_kelas);
        $data_kelas->update($request->all());
        return redirect()->route('kelas');
    }
    public function deletekelas($id_kelas){
        $data_kelas=Datakelas::find($id_kelas);
        $data_kelas->delete();
        return redirect()->route('kelas')->with('success','Data Berhasil Di Hapus');
    }
}
