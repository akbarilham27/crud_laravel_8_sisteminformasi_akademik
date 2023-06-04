@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Data Siswa</h1>
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
    <a href ="/tambahsiswa" class="btn btn-outline-success">Tambah</a>
    <a href ="/exportpdf" class="btn btn-outline-info">Export PDF</a>

    <div class="row g-10 align-items-center mt-3">
      <table class="table table-bordered border-primary">
        
        <thead>
          <tr>
            <th scope="col">Id Siswa</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
            <th scope="col">Agama</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach($data_siswa as $row)
          <tr>
            <td>{{$row->id_siswa}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->kelas}}</td>
            <td>{{$row->jenis_kelamin}}</td>
            <td>{{$row->tanggal_lahir}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{$row->no_hp}}</td>
            <td>{{$row->agama}}</td>
            <td>{{$row->email}}</td>
            <td>
              <a href="/tampilkansiswa/{{ $row->id_siswa }}"  class="btn btn-outline-warning">Edit</a>
              <a href = "/delete/{{ $row->id_siswa }}" class="btn btn-outline-danger">Hapus</a>
              
              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $data_siswa->links() }}
    </div>
  </div>
</div>





















@endsection