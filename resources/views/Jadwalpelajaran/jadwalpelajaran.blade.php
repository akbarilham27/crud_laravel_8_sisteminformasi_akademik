@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Jadwal Pelajaran</h1>
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
    <a href ="/tambahjadwal" class="btn btn-outline-success">Tambah</a>
    <a href ="/exportjadwalpdf" class="btn btn-outline-info">Export PDF</a>
    <div class="row g-10 align-items-center mt-3">
      <table class="table table-bordered border-primary">
        <thead>
          <tr>
           
            <th scope="col">Id Jadwal</th>
            <th scope="col">Id Guru</th>
            <th scope="col">Mapel</th>
            <th scope="col">Hari</th>
            <th scope="col">Jam</th>
            <th scope="col">Ruangan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          {{-- @php
             $no=1;
          @endphp --}}
          @foreach($jadwalpelajaran as $row)
  
          <tr>
            <td>{{$row->id_jadwal}}</td>
            <td>{{$row->id_guru}}</td>
            <td>{{$row->mapel}}</td>
            <td>{{$row->hari}}</td>
            <td>{{$row->jam}}</td>
            <td>{{$row->id_kelas}}</td>
        
        <td>
          <a href="/tampilkanjadwal/{{ $row->id_jadwal }}"  class="btn btn-outline-warning">Edit</a>
          <a href = "/deletejadwal/{{ $row->id_jadwal }}" class="btn btn-outline-danger">Hapus</a>
          
          </td>    
        </tr>  
        @endforeach
                  
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection