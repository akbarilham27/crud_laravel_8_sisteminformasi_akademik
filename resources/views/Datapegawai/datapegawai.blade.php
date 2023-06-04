@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Data Pegawai</h1>
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
    <a href ="#" class="btn btn-outline-success">Tambah</a>
    <a href ="#" class="btn btn-outline-info">Export PDF</a>
    <div class="row g-10 align-items-center mt-3">
      <table class="table">
        <thead>
          <tr>
  
            <th scope="col">Id Admin</th>
            <th scope="col">Nama</th>
            <th scope="col">No Hp</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_pegawai as $row)
  
          <tr>
            <td>{{$row->id_admin}}</td>
            <td>{{$row->nama_admin}}</td>
            <td>{{$row->no_hp}}</td>
        <td>
          <a href = "/delete/{{ $row->id_siswa }}" class="btn btn-outline-danger">Hapus</a>
          <a href="/tampilkansiswa/{{ $row->id_siswa }}"  class="btn btn-outline-warning">Edit</a>
          </td>    
        </tr>  
        @endforeach
                  
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection