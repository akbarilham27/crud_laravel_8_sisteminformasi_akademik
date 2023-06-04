@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Data Guru</h1>
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
    <a href ="/tambahguru" class="btn btn-outline-success">Tambah</a>
    <a href ="/exportgurupdf" class="btn btn-outline-info">Export PDF</a>
    <div class="row g-10 align-items-center mt-3">
      <table class="table table-bordered border-primary">
        <thead>
          <tr>
  
            <th scope="col">Id Guru</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
            <th scope="col">Email</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
            {{-- <th scope="col">Id Pengguna</th> --}}
          </tr>
        </thead>
        <tbody>
          @foreach($data_guru as $row)
  
          <tr>
            <td>{{$row->id_guru}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->jenis_kelamin}}</td>
            <td>{{$row->alamat}}</td>
            <td>0{{$row->no_hp}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->jabatan}}</td>
            <td>{{$row->status}}</td>
            {{-- <td>{{$row->id_pengguna}}</td> --}}
            {{-- <th scope="row">{{$row->id}}</th> --}}
  
            <td>
              
              <a href="/tampilkanguru/{{ $row->id_guru }}"  class="btn btn-outline-warning">Edit</a>
              <a href = "/deleteguru/{{ $row->id_guru }}" class="btn btn-outline-danger">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $data_guru->links() }}
    </div>
  </div>
</div>
@endsection