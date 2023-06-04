@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">DAFTAR JENIS NILAI</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard v2</li>
                  </ol>
              </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <div class="container">
    <a href ="\tambahjenisnilai" class="btn btn-outline-success">Tambah</a>
    {{-- <a href ="#" class="btn btn-outline-info">Export PDF</a> --}}
    <div class="row g-10 align-items-center mt-3">
      <table class="table table-bordered border-primary">
        <thead>
          <tr>
  
            <th scope="col">Id Siswa</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Jujur</th>
            <th scope="col">Disiplin</th>
            <th scope="col">Kreatif</th>
            <th scope="col">Mandiri</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($jenisnilai as $row)
  
          <tr>
            <td>{{$row->id_siswa}}</td>
            <td>{{$row->Jenisnilai->nama}}</td>
            <td>{{$row->jujur}}</td>
            <td>{{$row->disiplin}}</td>
            <td>{{$row->kreatif}}</td>
            <td>{{$row->mandiri}}</td>
        
        <td>
          <a href="/tampilkanjenisnilai/{{ $row->siswa }}"  class="btn btn-outline-warning">Edit</a>
          <a href = "/deletejenisnilai/{{ $row->siswa }}" class="btn btn-outline-danger">Hapus</a>
         
          </td>    
        </tr>  
        @endforeach
                  
        </tbody>
      </table>
    </div>
  </div>
</div>





















@endsection