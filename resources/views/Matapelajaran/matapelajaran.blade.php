@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">MATAPELAJARAN</h1>
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
    <a href ="/tambahmapel" class="btn btn-outline-success">Tambah</a>
    <a href ="/exportmapelpdf" class="btn btn-outline-info">Export PDF</a>
    <div class="row g-10 align-items-center mt-3">
      <table class="table table-bordered border-primary">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Mapel</th>
            <th scope="col">Pelajaran</th>
            <th scope="col">Id Guru</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
             $no=1;
          @endphp
          @foreach($matapelajaran as $row)
  
          <tr>
            <td>{{$no++}}</td>
            <td>{{$row->id_pelajaran}}</td>
            <td>{{$row->pelajaran}}</td>
            <td>{{$row->id_guru}}</td>
            <td>{{$row->Matapelajaran->nama}}</td>
        
        <td>
          <a href="/tampilkanmapel/{{ $row->id_pelajaran }}"  class="btn btn-outline-warning">Edit</a>
          <a href = "/deletemapel/{{ $row->id_pelajaran }}" class="btn btn-outline-danger">Hapus</a>
          
          </td>    
        </tr>  
        @endforeach
                  
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection