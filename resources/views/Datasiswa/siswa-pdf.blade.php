<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 75%;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: "1" solid #575757;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #ffffff;}

#customers tr:hover {background-color: #ffffff;}

#customers th {
  padding-top: 2px;
  padding-bottom: 2px;
  text-align: center;
  background-color: #9fff8a;
  color: rgb(25, 25, 25);
}
</style>
</head>
<body>
 <img src="template/dist/img/KopSmk.jpg" style="width:260px;height:80px;">


<h1>Data Siswa</h1>
<center>
<table id="customers">
    <tr>
        <th scope="col">No</th>
        <th scope="col">ID Siswa</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Kelamin</th>
        {{-- <th scope="col">Tempat Lahir</th> --}}
        <th scope="col">Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">No HP</th>
        <th scope="col">Agama</th>
        <th scope="col">Email</th>
        {{-- <th scope="col">Aksi</th> --}}
        {{-- <th scope="col">Id Pengguna</th> --}}
      </tr>
      @php
        $no=1;
      @endphp
      @foreach($data_siswa as $row)
  <tr>
    <td>{{$no++}}</td>
    <td>{{$row->id_siswa}}</td>
    <td>{{$row->nama}}</td>
    <td>{{$row->kelas}}</td>
    <td>{{$row->jenis_kelamin}}</td>
    {{-- <td>{{$row->tempat_lahir}}</td> --}}
    <td>{{$row->tanggal_lahir}}</td>
    <td>{{$row->alamat}}</td>
    <td>0{{$row->no_hp}}</td>
    <td>{{$row->agama}}</td>
    <td>{{$row->email}}</td>
    </tr>
    @endforeach
</table>
</center>
</body>
</html>


