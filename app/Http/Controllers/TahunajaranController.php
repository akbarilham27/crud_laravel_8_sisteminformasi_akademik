<?php

namespace App\Http\Controllers;
use App\Models\Tahunajaran;
use Illuminate\Http\Request;
use PDF;

class TahunajaranController extends Controller
{
    public function tahunajaran(){
  
        $tahunajaran = Tahunajaran::all();
        return view('Tahunajaran.tahunajaran',compact('tahunajaran'));
    }
    public function tambahtahunajaran(){
        $tahunajaran = Tahunajaran::all();
        return view('Tahunajaran.tambahtahunajaran', compact('tahunajaran'));
     }
     public function inserttahunajaran(Request $request){
        // dd($request->all());
        Tahunajaran::create($request->all());
       return redirect()->route('tahunajaran')->with('success','Data Berhasil Di Tambah');
    }
    public function exporttahunajaranpdf()
    {
        $tahunajaran = Tahunajaran::all();
        view()->share('data', $tahunajaran);
        $pdf = PDF::loadview('Tahunajaran.tahunajaran-pdf', compact('tahunajaran'));
        return $pdf->stream('tahunajaran-pdf.pdf');
    }
}

