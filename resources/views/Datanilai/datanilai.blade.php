@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">DATA NILAI</h1>
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
    <a href="/tambahnilai" class="btn btn-outline-success">Tambah</a>
    <a href="/exportnilaipdf" class="btn btn-outline-info">Export PDF</a>
    <div class="row g-10 align-items-center mt-3">
      <table class="table table-bordered border-primary">
        <thead>
          <tr>
            <th scope="col">Id Nilai</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Proses</th>
            <th scope="col">UTS</th>
            <th scope="col">UAS</th>
            <th scope="col">Praktikum</th>
            <th scope="col">Tugas Akhir</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_nilai as $row)

          <tr>
            <td>{{$row->id_nilai}}</td>
            <td>{{$row->Datanilai->nama}}</td>
            <td>{{$row->proses}}</td>
            <td>{{$row->uts}}</td>
            <td>{{$row->uas}}</td>
            <td>{{$row->praktikum}}</td>
            <td>{{$row->tugas_akhir}}</td>

            <td>
              <a href="/tampilkannilai/{{ $row->id_nilai }}" class="btn btn-outline-warning">Edit</a>
              <a href="/deletenilai/{{ $row->id_nilai }}" class="btn btn-outline-danger">Hapus</a>
              
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection