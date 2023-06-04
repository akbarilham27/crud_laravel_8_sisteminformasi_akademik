@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">DAFTAR KELAS</h1>
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
    <a href ="/tambahkelas" class="btn btn-outline-success">Tambah</a>
  
    <div class="row g-10 align-items-center mt-3">
      <table class="table table-bordered border-primary">
        <thead>
          <tr>
  
            <th scope="col">Id Kelas</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_kelas as $row)
  
          <tr>
            <td>{{$row->id_kelas}}</td>
            <td>{{$row->nama_kelas}}</td>

        
        <td>
          <a href="/tampilkankelas/{{ $row->id_kelas }}"  class="btn btn-outline-warning">Edit</a>
          <a href = "/deletekelas/{{ $row->id_kelas }}" class="btn btn-outline-danger">Hapus</a>
          
          </td>    
        </tr>  
        @endforeach
                  
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection