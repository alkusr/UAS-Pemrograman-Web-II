<head>
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
<main class="form-signin w-100 m-auto">

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{session('loginError')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

  <form action="{{route('authen')}}" method="post" >
    @csrf
    <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>

    <div class="mb-3">
      <label for="email">Email address</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
    </div>
    <div class="mb-3">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

  </form>
  <small>Belum terdaftar? <a href="{{route('register')}}">Daftar sekarang!</a></small>
  
</main>
</div></div>
</body>
