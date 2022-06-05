<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo - UAS Pemrograman Web 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">

    <h1>Ini admin amfibi</h1>

    <a href="{{route('create-amfibi')}}" class="btn btn-success btn-large"> Tambah Satwa </a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">No Binatang</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Kandang</th>
      <th scope="col">Kesehatan</th>
      <th scope="col">Makanan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($daftar_amfibi as $amfibi)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$amfibi->no_binatang}}</td>
      <td>{{$amfibi->nama}}</td>
      <td>{{$amfibi->jenis}}</td>
      <td>{{$amfibi->jk}}</td>
      <td>{{$amfibi->s_kandang}}</td>
      <td>{{$amfibi->s_kesehatan}}</td>
      <td>{{$amfibi->s_makanan}}</td>
      <!-- aksi -->
      <td><a href="{{route('edit-amfibi', $amfibi->id)}}" class="btn btn-warning"> Edit </a>
      <form style="display: inline" action="{{route('delete-amfibi', $amfibi->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>

    <!-- @foreach ($daftar_amfibi as $amfibi)
        <h4>No Binatang : {{ $amfibi->no_binatang }}</h4>
        <h4>Nama : {{ $amfibi->nama }}</h4>
    @endforeach -->
    </div>
    </div>
</body>
</html>