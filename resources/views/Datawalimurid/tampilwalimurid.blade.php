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
                        <form action="/updatewalimurid/{{$data_walimurid->id_wali}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Id Walimurid</label>
                                <input type="text" name="id_wali" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value={{ $data_walimurid->id_wali}}>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" name="nama_wali" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value={{ $data_walimurid->nama_wali}}>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No HP</label>
                                <input type="number" name="no_telp" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value={{ $data_walimurid->no_telp}}>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value={{ $data_walimurid->pekerjaan}}>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value={{ $data_walimurid->alamat}}>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Id Siswa</label>
                                <input type="text" name="id_siswa" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value={{ $data_walimurid->id_siswa}}>
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