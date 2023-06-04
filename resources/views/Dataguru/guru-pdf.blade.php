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


<h1>Data Guru dan Staf</h1>
<center>
<table id="customers">
    <tr>
  
        <th scope="col">Id Guru</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">No HP</th>
        <th scope="col">Email</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data_guru as $row)

      <tr>
        <td>{{$row->id_guru}}</td>
        <td>{{$row->nama}}</td>
        <td>{{$row->jenis_kelamin}}</td>
        <td>{{$row->alamat}}</td>
        <td>0{{$row->no_hp}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->jabatan}}</td>
        <td>{{$row->status}}</td>
    </tr>
    @endforeach
</table>
</center>
</body>
</html>


