@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Mengubah Data Jadwal</h1>
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
          <form action="/updatejadwal/{{$jadwalpelajaran->id_jadwal}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Id Jadwal</label>
              <input type="text" name="id_jadwal" class="form-control" id="exampleInputEmail1"
              aria-describedby="emailHelp" value ={{ $jadwalpelajaran->id_jadwal}}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Id Guru</label>
              <select class="form-control" name="id_guru" aria-label="Default select example">
                @foreach ($data_guru as $row)
                <option value="{{$row->id_guru}}">{{$row->id_guru}}</option>
               @endforeach
               </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Mapel</label>
              <input type="text" name="mapel" class="form-control" id="exampleInputEmail1" 
              aria-describedby="emailHelp" value ={{ $jadwalpelajaran->mapel}}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hari</label>
                <input type="text" name="hari" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value ={{ $jadwalpelajaran->hari}}>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jam</label>
                <input type="text" name="jam" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" value ={{ $jadwalpelajaran->jam}}>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id Kelas</label>
                <select class="form-control" name="id_kelas" aria-label="Default select example">
                  @foreach ($data_kelas as $row)
                  <option value="{{$row->id_kelas}}">{{$row->id_kelas}}</option>
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