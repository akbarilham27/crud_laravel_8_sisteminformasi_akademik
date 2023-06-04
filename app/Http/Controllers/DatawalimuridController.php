<?php

namespace App\Http\Controllers;
use App\Models\Datawalimurid;
use App\Models\Datapengguna;
use App\Models\Datasiswa;
use Illuminate\Http\Request;

class DatawalimuridController extends Controller
{
    public function indexwalimurid(){
  
        $data_walimurid = Datawalimurid::all();
        return view('Datawalimurid.datawalimurid',compact('data_walimurid'));
    }
    public function tambahwalimurid(){
        $data_pengguna = Datapengguna::all();
        $data_siswa = Datasiswa::all();
        return view('Datawalimurid.tambahwalimurid', compact('data_siswa','data_pengguna'));
     }
    public function insertwalimurid(Request $request){
        // dd($request->all());
        Datawalimurid::create($request->all());
       return redirect()->route('walimurid')->with('success','Data Berhasil Di Tambah');
    }

       //HANYA MENAMPILKAN
       public function tampilkanwalimurid($id_wali){
        $data_walimurid = Datawalimurid::find($id_wali);
        $data_pengguna = Datapengguna::all();
         return view('Datawalimurid.tampilwalimurid', compact('data_walimurid','data_pengguna'));
    }
    //Update
    public function updatewalimurid(Request $request, $id_wali){
        $data_walimurid = Datawalimurid::find($id_wali);
        $data_walimurid->update($request->all());
        return redirect()->route('walimurid');
    }

    public function deletewalimurid($id_wali){
        $data_walimurid=Datawalimurid::find($id_wali);
        $data_walimurid->delete();
        return redirect()->route('walimurid')->with('success','Data Berhasil Di Hapus');
    }
}
