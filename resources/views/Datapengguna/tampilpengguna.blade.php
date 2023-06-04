@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update Data Pengguna</h1>
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
            <form action="/updatepengguna/{{$data_pengguna->id_pengguna}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id Pengguna</label>
                <input type="text" name="id_pengguna" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" value={{ $data_pengguna->id_pengguna}}>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" value="{{ $data_pengguna->password}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pilihan</label>
                <input type="text" name="pilihan" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" value="{{ $data_pengguna->pilihan}}">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  @endsection