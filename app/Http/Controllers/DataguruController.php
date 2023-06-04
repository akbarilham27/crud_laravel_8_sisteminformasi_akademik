<?php

namespace App\Http\Controllers;

use App\Models\Dataguru;
use App\Models\Datapengguna;
use Illuminate\Http\Request;
use PDF;

class DataguruController extends Controller
{
    public function indexguru()
    {
        $data_guru = Dataguru::paginate(5);
        return view('Dataguru.dataguru', compact('data_guru'));
    }
    public function tambahguru()
    {
        $data_pengguna = Datapengguna::all();
        return view('Dataguru.tambahguru', compact('data_pengguna'));
    }
    public function insertguru(Request $request)
    {
        // dd($request->all());
        Dataguru::create($request->all());
        return redirect()->route('guru')->with('data_guru');
    }

    //HANYA MENAMPILKAN
    public function tampilkanguru($id_guru)
    {
        $data_guru = Dataguru::find($id_guru);
        $data_pengguna = Datapengguna::all();
        return view('Dataguru.tampilguru', compact('data_guru', 'data_pengguna'));
    }
    //Update
    public function updateguru(Request $request, $id_guru)
    {

        $data_guru = Dataguru::find($id_guru);
        $data_guru->update($request->all());
        return redirect()->route('guru');
    }

    public function deleteguru($id_guru)
    {
        $data_guru = Dataguru::find($id_guru);
        $data_guru->delete();
        return redirect()->route('guru')->with('success', 'Data Berhasil Di Hapus');
    }

    public function exportgurupdf()
    {
        $data_guru = Dataguru::all();
        view()->share('data', $data_guru);
        $pdf = PDF::loadview('Dataguru.guru-pdf', compact('data_guru'));
        return $pdf->stream('guru-pdf.pdf');
    }
}
