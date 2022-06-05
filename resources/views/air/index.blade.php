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
    <h1>Ini air</h1>

    @foreach ($daftar_air as $air)
    <h4>No Binatang : {{ $air->no_binatang }}</h4>
    <h4>Nama : {{ $air->nama }}</h4>
    <h4>Nama : {{ $air->jenis }}</h4>
    <h4>Nama : {{ $air->jk }}</h4>
    <h4>Nama : {{ $air->s_kandang }}</h4>
    <h4>Nama : {{ $air->s_kesehatan }}</h4>
    <h4>Nama : {{ $air->s_makanan }}</h4>
    @endforeach
</body>
</html>