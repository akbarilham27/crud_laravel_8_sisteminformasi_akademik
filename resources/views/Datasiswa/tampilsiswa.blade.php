@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Update Data Siswa</h1>
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
    
    <div class="row justify-content-center">
      <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="/updatesiswa/{{$data_siswa->id_siswa}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Id Siswa</label>
              <input type="text" name="id_siswa" class="form-control" id="exampleInputEmail1"
              aria-describedby="emailHelp" value ={{ $data_siswa->id_siswa}}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ="{{ $data_siswa->nama}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kelas</label>
              <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ="{{ $data_siswa->kelas}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin" aria-label="Default select example">
                <option selected> {{ $data_siswa->jenis_kelamin}} </option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ="{{ $data_siswa->tanggal_lahir}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ="{{ $data_siswa->alamat}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Hp</label>
              <input type="number" name="no_hp" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ="{{ $data_siswa->no_hp}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Agama</label>
              <input type="text" name="agama" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ="{{ $data_siswa->agama}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ="{{ $data_siswa->email}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Id Pengguna</label>
              <select class="form-control" name="id_pengguna" aria-label="Default select example">
                @foreach ($data_pengguna as $row)
                <option value="{{$row->id_pengguna}}">{{$row->id_pengguna}}</option>
               @endforeach
               </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      </div>
    </div>
     
</div>





















@endsection