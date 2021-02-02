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
<script type="text/javascript">
  function validateForm() {
  var x = document.forms["form"]["nama"].value;
  var y = document.forms["form"]["email"].value;
  var z = document.forms["form"]["ttl"].value;
  var a = document.forms["form"]["text"].value;
  if (x == "") {
    alert("Nama Kosong");
  }
  if (y == "") {
    alert("Email Kosong");
  }
  if (z == "") {
    alert("Tempat Tanggal Lahir Kosong");
  }
  if (a == "") {
    alert("Komentar Kosong");
  }
  else{
    alert("Inputan Berhasil")
  }
}

</script>
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
        <li class="nav-item active {{ Request::is('/hubungi') ? 'active' : '' }}">
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
<br>
<br>
<center>
  <div class="container">
    <div class="row">


        <div class="col-lg-12">
            <div class="card border-primary rounded-0">

                <div class="card-header p-0">
                    <div class="bg-primary text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Hubungi Kami:</h3>
                        <p class="m-0">Hubungi kami agar kami dapat meningkatkan website ini menjadi website yang lebih baik</p>
                    </div>
                </div>
                <div class="card-body p-3">


                    <!--Body-->
      <form name="form" action="add" method="POST" class="form" onsubmit="return validateForm()">
        @csrf
      <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Nama  :</label>
      <div class="col-sm-2">
      <input type="name" id="name" placeholder="Masukkan Nama" name="nama" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="ttl" class="col-sm-2 col-form-label">E-Mail :</label>
      <div class="col-sm-2">
      <input type="email" id="Ttl" placeholder="Masukkan Email" name="email" required>
  </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="lahir">Tanggal Lahir:</label>
      <div class="col-sm-2">
      <input type="date" id="lahir" placeholder="Masukkan Tanggal Lahir" name="ttl" required>
    </div>
</div>
    

    <div class="form-group row">
      <label for="Pendidikan" class="col-sm-2 col-form-label">Pendidikan  :</label>
      <div class="col-sm-2">
      <div class="form-group">
      <select id="Pendidikan" class="form-control" name="pendidikan">
        <option selected>S1</option>
        <option>S2</option>
        <option>S3</option>
        <option>Lainnya</option>
      </select>
    </div>
  </div>
    </div>
    

  <div class="form-group row">
      <label for="Komentar" class="col-sm-2 col-form-label">Komentar:</label>
       <div class="col-sm-10">
      <textarea class="form-control" rows="5" id="Komentar" name="text" required></textarea>
  </div>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    </div>
    
  </form>

            </div>

        </div>

</div>
</div>
</div>
</center>
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
