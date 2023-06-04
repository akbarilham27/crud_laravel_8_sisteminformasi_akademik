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


<h1>Data Akreditasi SMK Negeri 12 Malang</h1>
<center>
<table id="customers">
    <tr>
        <th scope="col">Tahun</th>
        <th scope="col">Jumlah Siswa</th>
        <th scope="col">Akreditasi</th>
        <th scope="col">Keterangan</th>
      </tr>
    </thead>
    <tbody>

      @foreach($tahunajaran as $row)
      <tr>
        <td>{{$row->id_tahun}}</td>
        <td>{{$row->jumlah_siswa}}</td>
        <td>{{$row->akreditasi}}</td>
        <td>{{$row->keterangan}}</td>
    </tr>
    @endforeach
</table>
</center>
</body>
</html>


