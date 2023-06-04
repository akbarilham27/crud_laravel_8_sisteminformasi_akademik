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


<h1>Data Nilai Siswa</h1>
<center>
<table id="customers">
    <tr>
        <th scope="col">Id Nilai</th>
        <th scope="col">Proses</th>
        <th scope="col">UTS</th>
        <th scope="col">UAS</th>
        <th scope="col">Praktikum</th>
        <th scope="col">Tugas Akhir</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data_nilai as $row)

        <tr>
          <td>{{$row->id_nilai}}</td>
          {{-- <td>{{$row->id_siswa}}</td> --}}
          <td>{{$row->proses}}</td>
          <td>{{$row->uts}}</td>
          <td>{{$row->uas}}</td>
          <td>{{$row->praktikum}}</td>
          <td>{{$row->tugas_akhir}}</td>

    </tr>
    @endforeach
</table>
</center>
</body>
</html>


