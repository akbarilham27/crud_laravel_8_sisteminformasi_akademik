<?php

namespace App\Http\Controllers;
use App\Models\Ekstrakulikuler;
use App\Models\Datasiswa;
use Illuminate\Http\Request;
use PDF;

class EkstrakulikulerController extends Controller
{
    public function ekstrakulikuler(){
        $data_ekstrakulikuler = Ekstrakulikuler::all();
        return view('Ekstrakulikuler.ekstrakulikuler',compact('data_ekstrakulikuler'));
    }
    public function tambahekstrakulikuler(){
        $data_siswa = Datasiswa::all();
        return view('Ekstrakulikuler.tambahekstrakulikuler', compact('data_siswa'));
     }
    public function insertekstrakulikuler(Request $request){
        // dd($request->all());
        Ekstrakulikuler::create($request->all());
       return redirect()->route('ekstrakulikuler')->with('success','Data Berhasil Di Tambah');
    }
     //HANYA MENAMPILKAN
     public function tampilkanekstrakulikuler($id_ekstrakulikuler){
        $data_ekstrakulikuler = Ekstrakulikuler::find($id_ekstrakulikuler);
        $data_siswa = Datasiswa::all();
         return view('Ekstrakulikuler.tampilekstrakulikuler', compact('data_ekstrakulikuler','data_siswa'));
    }
    //Update
    public function updateekstrakulikuler(Request $request, $id_ekstrakulikuler){
        $data_ekstrakulikuler = Ekstrakulikuler::find($id_ekstrakulikuler);
        $data_ekstrakulikuler->update($request->all());
        return redirect()->route('ekstrakulikuler');
    }

    public function deleteekstrakulikuler($id_ekstrakulikuler){
        $data_ekstrakulikuler=Ekstrakulikuler::find($id_ekstrakulikuler);
        $data_ekstrakulikuler->delete();
        return redirect()->route('ekstrakulikuler')->with('success','Data Berhasil Di Hapus');
    }

    public function exportekstrakulikulerpdf()
    {
        $data_ekstrakulikuler = Ekstrakulikuler::all();
        view()->share('data', $data_ekstrakulikuler);
        $pdf = PDF::loadview('Ekstrakulikuler.ekstrakulikuler-pdf', compact('data_ekstrakulikuler'));
        return $pdf->stream('jekstrakulikuler-pdf.pdf');
    }
}
