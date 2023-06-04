@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Edit Data Guru</h1>
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
          <form action="/updateguru/{{$data_guru->id_guru}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Id Guru</label>
              <input type="text" name="id_guru" class="form-control" id="exampleInputEmail1"
              aria-describedby="emailHelp" value ={{ $data_guru->id_guru}}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ={{ $data_guru->nama}}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin" aria-label="Default select example">
                <option selected> {{ $data_guru->jenis_kelamin}} </option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ={{ $data_guru->alamat}}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Hp</label>
              <input type="number" name="no_hp" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ={{ $data_guru->no_hp}}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ={{ $data_guru->email}}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" value ={{ $data_guru->jabatan}}>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <input type="text" name="status" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" value ={{ $data_guru->status}}>
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