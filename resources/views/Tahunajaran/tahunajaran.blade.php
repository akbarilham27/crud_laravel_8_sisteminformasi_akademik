@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Akreditasi Tahun Ajaran</h1>
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
    <a href ="/tambahtahunajaran" class="btn btn-outline-success">Tambah</a>
    <a href ="/exporttahunajaranpdf" class="btn btn-outline-info">Export PDF</a>
    <div class="row g-10 align-items-center mt-3">
      <table class=" table table-bordered border-primary">
        <thead>
          <tr>
            <th scope="col">Tahun</th>
            <th scope="col">Jumlah Siswa</th>
            <th scope="col">Akreditasi</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach($tahunajaran as $row)
          <tr>
            <td>{{$row->id_tahun}}</td>
            <td>{{$row->jumlah_siswa}}</td>
            <td>{{$row->akreditasi}}</td>
            <td>{{$row->keterangan}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection