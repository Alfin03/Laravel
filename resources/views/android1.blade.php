<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  .btn1 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}


.btn:hover {
  background-color: RoyalBlue;

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
            <h1 style="text-align:center;">Kelas Android Part-1</h1>
        </div>
<div class="container">
  <div class="container marketing">
  
        <div class="row">
          <div class="col-lg-12">
            <br><h1>Android</h1>
            <p>Kelas android ini akan menggunakan bahasa pemrogramman java dan dilengkapi dengan video tutorial beserta link koding sehingga dapat langsung di uji coba</p>
<br>
<h4>Coba Download Source Code berikut : </h4>
  <a href="UIcoding1.rar" download="SourceCodeAndroid1.rar">
  <button class="btn1"><i class="fa fa-download"></i> Download</button></a>

  <h2>Video Pengenalan</h2>
    <iframe width="900" height="505" src="https://www.youtube.com/embed/hxwXrcRxdTE" allowfullscreen>
    </iframe>        
          </div>
          
        </div>
        <br>
          <br>
  <h2 class="text-info">Ditulis Oleh</h2>
  <div class="media border p-3">
    <img src="man.png" class="mr-3 mt-3 rounded-circle" style="width:75px;">
    <div class="media-body">
      <h4>Alfin Gosal <small><i>Diposting 3 Juli 2020</i></small></h4>
      <p>Tutorial ini ditulis oleh Alfin Gosal </p> 
    </div>
  </div>
  <br>
  <br>
  <h1>Baca Juga</h1>
  <div class="row">
          <div class="col-sm-3">
            <a href="{{ url('/android2') }}">
            <img src="android-logo.png" width="150" height="150"></a>
            <h4>Android part-2</h4>
            <p><a class="btn btn-secondary" href="{{ url('/android2') }}" role="button">Buka &raquo;</a></p>
          </div>
  

        </div>
</div>
</div>
<br>
<br>
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
