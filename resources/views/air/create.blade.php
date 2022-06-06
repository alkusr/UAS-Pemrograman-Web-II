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

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">KEBUN BINATANG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('welcome')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('zoo-about')}}">About</a>
            </li>
            @auth
            <li class="nav-item">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-light">Logout</button>
            </form>
            </li>
            @else
            <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            @endauth
        </ul>
        </div>
    </div>
</nav>

    <div class="container">
    <div class="row">
    <h1>Ini nambah air</h1>

    <form method="post" action="{{route('store-air')}}">
        @csrf
        <div class="mb-3">
            <label for="no_binatang" class="form-label">No Binatang</label>
            <input type="text" class="form-control" id="no_binatang" name="no_binatang">
            <div id="Help" class="form-text">Isi Sesuai Nomor Pendaftaran</div>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">jenis</label>
            <input type="text" class="form-control" id="jenis" name="jenis">
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jk" name="jk">
            <div id="Help" class="form-text">Silahkan isi dengan query [Jantan/Betina]!</div>
        </div>
        <div class="mb-3">
            <label for="kandang_id" class="form-label">Kandang</label>
            <input type="text" class="form-control" id="kandang_id" name="kandang_id">
        </div>
        <div class="mb-3">
            <label for="kesehatan_id" class="form-label">Kesehatan</label>
            <input type="text" class="form-control" id="kesehatan_id" name="kesehatan_id">
        </div>
        <div class="mb-3">
            <label for="makanan_id" class="form-label">Makanan</label>
            <input type="text" class="form-control" id="makanan_id" name="makanan_id">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('browse-air')}}" class="btn btn-danger"> Batal </a>
    </form>
    </div>
    </div>
</body>
</html>