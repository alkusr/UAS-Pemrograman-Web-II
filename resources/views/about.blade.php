<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
    <div class="card">
  <div class="card-header">
    Deskripsi Singkat
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Project Website UAS Pemrograman WEB 2 | Kebun Binatang</p>
      <footer class="blockquote-footer">Sebuah website sistem informasi sederhana tentang kebun binatang yang memiliki setidaknya 7 tabel
        [User, Binatang Darat, Binatang Air, Binatang Amfibi, Data Kandang, Data Kesehatan, Data Makanan]. <br> Memiliki beberapa fitur diantaranya,
        <ul>
          <li>Login & Logout</li>
          <li>Create, Read, Update, & Delete Data (CRUD)</li>
        </ul>
      </footer>
    </blockquote>
  </div>
</div>

<div class="card">
  <div class="card-header">
    Author
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Kelompok 3 - UAS Pemrograman Web 2</p>
      <footer class="blockquote-footer">
        Kelompok 3 - UAS Pemrograman Web 2 beranggotakan
        <ul>
          <li>Ahmad Dany Adrian (2010817210019)</li>
          <li>Muhammad Alkausar (2010817210008)</li>
          <li>Muhammad Firda Ryanifar (2010817310003)</li>
        </ul>
      </footer>
    </blockquote>
  </div>
</div>

<div class="card">
  <div class="card-header">
    About++
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Laravel</p>
      <footer class="blockquote-footer">
      https://laravel.com/
      </footer>
      <p>Bootstrap</p>
      <footer class="blockquote-footer">
      https://getbootstrap.com/
      </footer>
    </blockquote>
  </div>
</div>
    
    </div>
    </div>
</body>
</html>