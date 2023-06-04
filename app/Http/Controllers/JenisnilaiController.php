<?php

namespace App\Http\Controllers;
use App\Models\Jenisnilai;
use App\Models\Datasiswa;
use Illuminate\Http\Request;

class JenisnilaiController extends Controller
{
    public function jenisnilai(){
  
        $jenisnilai = Jenisnilai::all();
        return view('Jenisnilai.jenisnilai',compact('jenisnilai'));
    }
    public function tambahjenisnilai(){
        $data_siswa = Datasiswa::all();
        return view('Jenisnilai.tambahjenisnilai', compact('data_siswa'));
     }
     public function insertjenisnilai(Request $request){
        // dd($request->all());
        Jenisnilai::create($request->all());
       return redirect()->route('jenisnilai')->with('success','Data Berhasil Di Tambah');
    }

       //HANYA MENAMPILKAN
       public function tampilkanjenisnilai($siswa){
        $jenisnilai = Jenisnilai::find($siswa);
        $data_siswa = Datasiswa::all();
         return view('Jenisnilai.tampiljenisnilai', compact('jenisnilai', 'data_siswa'));
    }

     //Update
     public function updatejenisnilai(Request $request, $siswa){
        $jenisnilai = Jenisnilai::find($siswa);
        $jenisnilai->update($request->all());
        return redirect()->route('jenisnilai');
    }

    public function deletejenisnilai($siswa){
        $jenisnilai=Jenisnilai::find($siswa);
        $jenisnilai->delete();
        return redirect()->route('jenisnilai')->with('success','Data Berhasil Di Hapus');
    }
}
