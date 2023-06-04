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


<h1>Data Ekstrakulikuler Siswa</h1>
<center>
<table id="customers">
    <tr>
        <th scope="col">Id Siswa</th>
        <th scope="col">Id Ekstrakulikuler</th>
        <th scope="col">Nama Ekstrakulikuler</th>
        <th scope="col">Keterangan</th>
      </tr>
      @php
        $no=1;
      @endphp
     @foreach($data_ekstrakulikuler as $row)
  
     <tr>
       <td>{{$row->id_siswa}}</td>
       <td>{{$row->id_ekstrakulikuler}}</td>
       <td>{{$row->nama_ekstrakulikuler}}</td>
       <td>{{$row->deskripsi}}</td>
       
    </tr>
    @endforeach
</table>
</center>
</body>
</html>


