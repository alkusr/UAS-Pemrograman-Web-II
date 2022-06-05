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
    <h1>Ini buat air</h1>

    <form method="post" action="{{route('update-air', $air->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="no_binatang" class="form-label">No Binatang</label>
            <input type="text" class="form-control" id="no_binatang" name="no_binatang" value="{{$air->no_binatang}}">
            <div id="Help" class="form-text">Isi Sesuai Nomor Pendaftaran</div>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$air->nama}}">
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">jenis</label>
            <input type="text" class="form-control" id="jenis" name="jenis" value="{{$air->jenis}}">
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jk" name="jk" value="{{$air->jk}}">
            <div id="Help" class="form-text">Silahkan isi dengan query [Jantan/Betina]!</div>
        </div>
        <div class="mb-3">
            <label for="s_kandang" class="form-label">Kandang</label>
            <input type="text" class="form-control" id="s_kandang" name="s_kandang" value="{{$air->s_kandang}}">
        </div>
        <div class="mb-3">
            <label for="s_kesehatan" class="form-label">Kesehatan</label>
            <input type="text" class="form-control" id="s_kesehatan" name="s_kesehatan" value="{{$air->s_kesehatan}}">
        </div>
        <div class="mb-3">
            <label for="s_makanan" class="form-label">Makanan</label>
            <input type="text" class="form-control" id="s_makanan" name="s_makanan" value="{{$air->s_makanan}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('browse-air')}}" class="btn btn-danger"> Batal </a>
    </form>
    </div>
    </div>
</body>
</html>