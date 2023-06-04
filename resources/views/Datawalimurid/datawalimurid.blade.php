@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Data Walimurid</h1>
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
    <a href ="/tambahwalimurid" class="btn btn-outline-success">Tambah</a>
    <div class="row g-10 align-items-center mt-3">
    <div class="table table-bordered border-primary">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Id Wali</th>
            <th scope="col">Nama Wali</th>
            <th scope="col">No Telp</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_walimurid as $row)
  
          <tr>
            <td>{{$row->Datawalimurid->nama}}</td>
            <td>{{$row->id_wali}}</td>
            <td>{{$row->nama_wali}}</td>
            <td>{{$row->no_telp}}</td>
            <td>{{$row->pekerjaan}}</td>
            <td>{{$row->alamat}}</td>
            <td>
          
              <a href="/tampilkanwalimurid/{{ $row->id_wali }}"  class="btn btn-outline-warning">Edit</a>
              <a href = "/deletewalimurid/{{ $row->id_wali }}" class="btn btn-outline-danger">Hapus</a>
            </td>
        </tr>
            
           @endforeach
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
@endsection