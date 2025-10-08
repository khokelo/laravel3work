<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Data Dosen</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/mahasiswa">Data Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dosen">Data Dosen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/gallery">Gallery</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container text-center mt-3 p-4 bg-white">
  <h1 class="mb-3">Gallery</h1>
  <div class="row">
    <div class="col-4">
      <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?w=350&h=250&fit=crop&crop=faces"
      class="img-thumbnail img-fluid">
    </div>
    <div class="col-4">
      <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=350&h=250&fit=crop&crop=faces"
      class="img-thumbnail img-fluid">
    </div>
    <div class="col-4">
      <img src="https://images.unsplash.com/photo-1527891751199-7225231a68dd?w=350&h=250&fit=crop&crop=faces"
      class="img-thumbnail img-fluid">
    </div>
    <div class="col-4 mt-4">
      <img src="https://images.unsplash.com/photo-1559135197-8a45ea74d367?w=350&h=250&fit=crop&crop=faces"
      class="img-thumbnail img-fluid">
    </div>
    <div class="col-4 mt-4">
      <img src="https://images.unsplash.com/photo-1550096141-7263640aa48c?w=350&h=250&fit=crop&crop=faces"
      class="img-thumbnail img-fluid">
    </div>
    <div class="col-4 mt-4">
      <img src="https://images.unsplash.com/photo-1627556704290-2b1f5853ff78?w=350&h=250&fit=crop&crop=faces"
      class="img-thumbnail img-fluid">
    </div>
  </div>
</div>

<footer class="bg-dark py-4 text-white mt-4">
<div class="container">
  Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }} UAG
</div>
</footer>

</body>
</html>
