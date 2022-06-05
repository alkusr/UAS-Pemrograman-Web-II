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
    <h1>Ini amfibi</h1>

    @foreach ($daftar_amfibi as $amfibi)
    <h4>No Binatang : {{ $amfibi->no_binatang }}</h4>
    <h4>Nama : {{ $amfibi->nama }}</h4>
    <h4>Nama : {{ $amfibi->jenis }}</h4>
    <h4>Nama : {{ $amfibi->jk }}</h4>
    <h4>Nama : {{ $amfibi->s_kandang }}</h4>
    <h4>Nama : {{ $amfibi->s_kesehatan }}</h4>
    <h4>Nama : {{ $amfibi->s_makanan }}</h4>
    @endforeach
</body>
</html>