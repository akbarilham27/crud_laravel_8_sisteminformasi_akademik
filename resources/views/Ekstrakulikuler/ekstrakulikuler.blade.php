@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Data Ekstrakulikuler Siswa</h1>
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
    <a href ="/tambahekstrakulikuler" class="btn btn-outline-success">Tambah</a>
    <a href ="/exportekstrakulikulerpdf" class="btn btn-outline-info">Export PDF</a>
    <div class="row g-10 align-items-center mt-3">
      <table class="table table-bordered border-primary">
        <thead>
          <tr>
            <th scope="col">Id Siswa</th>
            <th scope="col">Id Ekstrakulikuler</th>
            <th scope="col">Nama </th>
            <th scope="col">Nama Ekstrakulikuler</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_ekstrakulikuler as $row)
  
          <tr>
            <td>{{$row->id_siswa}}</td>
            <td>{{$row->id_ekstrakulikuler}}</td>
            <td>{{$row->Ekstrakulikuler->nama}}</td>
            <td>{{$row->nama_ekstrakulikuler}}</td>
            <td>{{$row->deskripsi}}</td>
            
        
        <td>
          <a href="/tampilkanekstrakulikuler/{{ $row->id_ekstrakulikuler }}"  class="btn btn-outline-warning">Edit</a>
          <a href = "/deleteekstrakulikuler/{{ $row->id_ekstrakulikuler}}" class="btn btn-outline-danger">Hapus</a>
          
          </td>    
        </tr>  
        @endforeach
                  
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection