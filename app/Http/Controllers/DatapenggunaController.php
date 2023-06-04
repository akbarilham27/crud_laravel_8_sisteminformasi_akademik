<?php

namespace App\Http\Controllers;
use App\Models\Datapengguna;
use Illuminate\Http\Request;

class DatapenggunaController extends Controller
{
    public function pengguna(){
        $data_pengguna = Datapengguna::all();
        return view('Datapengguna.datapengguna',compact('data_pengguna'));
    }
    public function tambahpengguna(){
        return view('Datapengguna.tambahpengguna');
     }
    public function insertpengguna(Request $request){
        // dd($request->all());
        Datapengguna::create($request->all());
       return redirect()->route('pengguna')->with('success','Data Berhasil Di Tambah');
    }
    public function tampilkanpengguna($id_pengguna){
        $data_pengguna = Datapengguna::find($id_pengguna);
        // dd($data_siswa);
        return view('Datapengguna.tampilpengguna', compact('data_pengguna'));
    }
    public function updatepengguna(Request $request, $id_pengguna){
        $data_pengguna = Datapengguna::find($id_pengguna);
        $data_pengguna->update($request->all());
        return redirect()->route('pengguna')->with('success','Data Berhasil Di Update');
    }

    public function deletepengguna($id_pengguna){
        $data_pengguna=Datapengguna::find($id_pengguna);
        $data_pengguna->delete();
        return redirect()->route('pengguna')->with('success','Data Berhasil Di Hapus');
    }
}   