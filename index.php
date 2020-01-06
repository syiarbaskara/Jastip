<?php
  session_start();

  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit; 
  }

  require "koneksi.php"; 
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JasTip</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">
        
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation"><a href="index.php">HOME</a></li>
          <li role="presentation"><a href="buku.php">PESAN</a></li>
          <li role="presentation"><a href="buku2.php">PEMBELI</a></li>
          <?php if (isset($_SESSION["login"])) {?>
          <li role="presentation"><a href="logout.php">LOGOUT</a></li>
          <?php } else { ?>
          <li role="presentation"><a href="login.php">LOGIN</a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- jumbotron -->
  <div id="background">
    <div class="jumbotron">
      <h1>Selamat Datang di JasTip</h1>
    </div>
  </div>
  <!-- jumbotron -->

  <!-- container atas -->
  <div id="home">
    <div class="isi">
      <div class="container atas">
        <h1>Apa Itu JasTip</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img src="assets/img/images.png" width="100px" height="100px">
            <h3>PESAN</h3>
            <p class="text-justify"><strong>Pesan, </strong>Semua pengguna Jastipku dapat melakukan pemesanan barang sesuai yang mereka inginkan, bisa berupa barang elektronik, pakaian, interior rumah dan lain sebagainya. dan untuk melakukan pemesanan caranya sangat mudah yaitu hanya dengan membuat status sesuai dengan yang ingin di pesan setelah itu maka akan ada kurir yang mencoba menawarkan diri untuk mencarikan barang yang telah di pesan oleh pengguna.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img src="assets/img/duit.png" width="100px" height="100px">
            <h3>BELI</h3>
            <p class="text-justify"><strong>Beli, </strong>maksudnya adalah kurir yang akan mencari pesanan dari pengguna. jika kurir telah menawarkan diri bisa langsung menghubungi pengguna secara personal agar mengetahui lebih jelas apa yang sebenarnya pengguna itu cari, jika kedua belah pihak seudah deal bisa langsung melakukan pembayaran dan kurir akan mencarikan pesanannya lalu mengirimnya sesuai tempat dari pengguna tersebut. </p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img src="assets/img/easy.png" width="100px" height="100px">
            <h3>MUDAH</h3>
            <p class="text-justify"><strong>Mudah, </strong>Kami memberikan layanan untuk pengguna dan kurir brupa fitur-fitur yang mudah dimengerti oleh pengguna dan kurir. semuanya sangat simpel dan layak dipakai oleh semua kalangan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container atas -->

  <!-- container bawah -->
  <div class="container bawah">
    <br>
    <br>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/W4.jpg" width="200px">
        <h3>PEMESAN</h3>
        <p class="text-center"><strong>Pemesan</strong> bebas memilih pesanan yang di inginkan</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/buy.jpg" width="200px">
        <h3>PEMBELI</h3>
        <p class="text-center"><strong>Pembeli</strong> bersedia mencari barang yang di pesan oleh pengguna</p>
      </div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/T1.jpg" width="200px">
        <h3>TRANSAKSI</h3>
        <p class="text-center"><strong>Transaksi</strong> akan dilakukan jika kedua belah pihak sudah setuju dengan pesanan yang akan dicari oleh kurir</p>
      </div>
    </div>
  </div>
  <!-- container bawah -->
  <!-- about -->
  <div id="about">
    <div class="container footer">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1> <img src="assets/img/logo1.png" height="180px" width="180px"></h1>
        <h2>About Us</h2>
        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus...</p>
      </div>
    </div>
  </div>
  <!-- about -->

  <!-- kaki -->
  <div id="kaki">
    <div class="container">
      <h5 class="text-center">Jastip. © 2019</h5>
    </div>
  </div>
  <!-- kaki -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
