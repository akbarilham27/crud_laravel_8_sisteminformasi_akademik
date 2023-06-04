@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Data Pengguna</h1>
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
    <a href ="/tambahpengguna" class="btn btn-outline-success">Tambah</a>
    <div class="row g-10 align-items-center mt-3">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id Pengguna</th>
            <th scope="col">Password</th>
            <th scope="col">Pilihan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_pengguna as $row)
  
          <tr>
            <td>{{$row->id_pengguna}}</td>
            <td>{{$row->password}}</td>
            <td>{{$row->pilihan}}</td>
            <td>
              
              <a href="/tampilkanpengguna/{{ $row->id_pengguna }}"  class="btn btn-outline-warning">Edit</a>
              <a href = "/deletepengguna/{{ $row->id_pengguna }}" class="btn btn-outline-danger">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{-- {{ $data_pengguna->links() }} --}}
    </div>
  </div>
</div>
@endsection