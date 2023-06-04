<?php

namespace App\Http\Controllers;
use App\Models\Datapegawai;
use Illuminate\Http\Request;

class DatapegawaiController extends Controller
{
    public function pegawai(){
  
        $data_pegawai = Datapegawai::all();
        return view('Datapegawai.datapegawai',compact('data_pegawai'));
    }
}
