<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 50%;
    height: 70%;
    margin: auto;

  }
  </style>
</head>
<body style=" background-color: #efefef">

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top">
  <a class="navbar-brand" href="#">Ayo-Koding</a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::is('/web') ? 'active' : '' }}">
            <a class="nav-link font-weight-bold" href="{{ url('/web') }}">Home</a>
        </li>
        <li class="nav-item {{ Request::is('/tentang') ? 'active' : '' }}">
            <a class="nav-link font-weight-bold" href="{{ url('/tentang') }}">About Us</a>
        </li>
        <li class="nav-item {{ Request::is('/list') ? 'active' : '' }} ">
          <a class="nav-link font-weight-bold" href="{{ url('/list') }}">List Kelas</a>
      </li>
        <li class="nav-item {{ Request::is('/hubungi') ? 'active' : '' }}">
          <a class="nav-link font-weight-bold" href="{{ url('/hubungi') }}">Contact Us</a>
      </li> 
    </ul>
    <form class="form-inline ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button> 
  </form>
  </div>
</nav>
<br>
<br>

<div class="card bg-light text-dark">
        <div class="card-header">
            <h1 style="text-align:center;">List Kelas HTML</h1>
        </div>
<div class="container" style="margin-top:45px">

  <div class="container mt-3">
      
      <div class="media border p-3">
        <div class="media-body">
          <h3>Kelas Dasar HTML untuk pemula<small>
              <p><i>Posted on July 3, 2020</i></p></small></h4>
          <p>Pada Kelas ini kita akan mempelajari dasar HTML dalam persiapan untuk membuat website kita </p>      
          <a href="{{ url('/html1') }}" 
          class="btn btn-info bg-primary" role="button">Baca</a>
        </div>
        <img src="html-icon.png" alt="Article" class="ml-2 mt-2 rounded" style="width:150px; height: 150px; ">
      </div>

      <br>

      <div class="media border p-3">
        <div class="media-body">
          <h3>Kelas Dasar HTML untuk pemula part-2<small>
              <p><i>Posted on March 2, 2020</i></p></small></h4>
          <p>Pada Kelas ini HTML akan dipelajari lebih lanjut beserta pengenalan CSS</p>      
          <a href="{{ url('/html2') }}" 
          class="btn btn-info bg-primary" role="button">Baca</a>
        </div>
        <img src="html-icon.png" alt="Article" class="ml-2 mt-2 rounded" style="width:150px; height: 150px;" >
      </div>

      <br>

      </div>

<div class="container-fluid"  style="margin-top:20px">
  <h1>List Kelas</h1>
  <p>Pilihlah kelas lainnya:</p>
  <div class="row">
   <div class="col"><center><h3>Android</h3> <a href="{{ url('/android') }}"><img src="android-logo.png" width="50%" height="50%"></center></div></a>
    <div class="col"><center><h3>PHP</h3><a href="{{ url('/php') }}"><img src="php-icon.png" width="50%" height="50%" style="margin-top:30px"></center></div></a>
   
 
  </div>
 
</div>
</div>
<!-- Footer -->
<div class="jumbotron text-center bg-dark text-white col py-3 px-md-5" style="margin: 30px 0px 0px 0px">
  <p>© 2020 Copyright: Alfin Gosal</p>
</div>

</div>


  <script src="assets/js/jquery.js"></script> 
  <script src="assets/js/popper.js"></script> 
  <script src="assets/js/bootstrap.js"></script>

</body>
</html>
