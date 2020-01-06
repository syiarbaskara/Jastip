<?php 
session_start();

  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit; 
  }

	require "koneksi.php"; 
?>
<?php 
	$id = $_GET['id'];
	$query = "Select * from pemesanan b Join kategori k
	On b.id_kategori = k.id_kategori Where id = '$id'";
	$result = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Detail Pesanan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/nav.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="topnav">
      <a href="index.php">Home</a>
      <a href="trending.php">Trending</a>
      <a href="buku.php">Pesan</a>
      <a href="buku2.php">Beli</a>
      <a href="akun.php"><?php echo $_SESSION['usrname']; ?></a>
  </div>
<?php while($pemesanan = mysqli_fetch_array($result)): ?>
<div class="container">
  <br>
  <h2>Ambil Pesanan</h2>
  <br>           
  <table class="table table-borderless">
    <thead>
      <tr>
        <th>Nama :</th>
        <th>Alamat :</th>
        <th>Kategori :</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td><?php echo $pemesanan['nama']; ?></td>
        <td><?php echo $pemesanan['alamat']; ?></td>
        <td><?php echo $pemesanan['nama_kategori']?></td>
      </tr>
    </tbody>
  </table>

  <a href="https://api.whatsapp.com/send?phone=<?php echo $pemesanan['no_hp']; ?>" class="btn btn-primary">chat</a>
  <a href="transaksi.php" class="btn btn-success">Deal!!</a>
</div>
<?php endwhile;?>
</body>
</html>