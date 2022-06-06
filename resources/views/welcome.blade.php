<!DOCTYPE html>
<html>
<head>
    <title>Beranda - UAS Pemrograman Web 2</title>
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
            <h1>Ini Web Zoo</h1>
            <h4>Guest Menu</h4>
            <div class="d-grid gap-2 col-6 ">
                <a href="{{route('index-darat')}}" class="btn btn-primary">Data Satwa Darat</a>
                <a href="{{route('index-air')}}" class="btn btn-primary">Data Satwa Air</a>
                <a href="{{route('index-amfibi')}}" class="btn btn-primary">Data Satwa Amfibi</a>
                <a href="{{route('index-kandang')}}" class="btn btn-primary">Data Jenis Kandang</a>
                <a href="{{route('index-kesehatan')}}" class="btn btn-primary">Data Jenis Kesehatan</a>
                <a href="{{route('index-makanan')}}" class="btn btn-primary">Data Jenis Makanan</a>
                <a href="{{route('admin')}}" class="btn btn-secondary" >Halaman Admin</a>
                <a href="{{route('zoo-about')}}" class="btn btn-secondary" >Tentang Kami</a>
                <a href="{{route('register')}}" class="btn btn-secondary" >Register</a>
                <a href="{{route('login')}}" class="btn btn-secondary" >Login</a>
            </div>
        </div>
    </div>
</body>
</html>