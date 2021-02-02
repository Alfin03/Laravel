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
        <li class="nav-item active {{ Request::is('/tentang') ? 'active' : '' }}">
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
            <h1 style="text-align:center;">Tentang Kami</h1>
        </div>
<div class="container" style="margin-top:45px">

  <div class="container mt-3">
      
     <main>
    <div class="container mt-4 mb-5">

      <h2 class="text-center py-3 mb-5">Tentang Ayo-Koding</h2>

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-5">

          <img class="img-fluid rounded z-depth-2" src="prg.jpg" alt="sample">
        
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-7">

          <p class="mt-4 mt-lg-0" style="font-size: 22px;">Ayo koding adalah website dimana kita dapat belajar mengenai pemrogramman android dan website untuk menambah pengetahuan kita dalam perancangan website kita sendiri ataupun aplikasi android kita sendiri.</p>
          <br>
          <p class="mt-4 mt-lg-0" style="font-size: 22px;">Jadi dengan adanya website ini diharapkan pengguna dapat belajar mengenai pemrogramman dan perancangan sesuai yang diinginkan</p>
        
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
  </main>

      </div>

<div class="container-fluid"  style="margin-top:20px">
  <h1>List Kelas</h1>
  <p>Pilihlah kelas lainnya:</p>
  <div class="row">
    <div class="col"><center><h3>HTML</h3><a href="{{ url('/html') }}"><img src="html-icon.png" width="50%" height="50%"></center></div></a>
   <div class="col"><center><h3>PHP</h3> <a href="{{ url('/php') }}"><img src="php-icon.png" width="50%" height="50%" style="margin-top:30px"></center></div></a>
    
 
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
