<?php 
  session_start();

  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit; 
  } 

    require "koneksi.php";
    if (isset($_POST['search'])) {
      $search_key = $_POST['search'];
      $query = "select * from pemesanan inner join kategori
                on pemesanan.id_kategori = kategori.id_kategori 
                where 
                pemesanan.barang like '%$search_key%' 
                or pemesanan.nama like '%$search_key%'
                or pemesanan.alamat like '%$search_key%'
                or kategori.nama_kategori like '%$search_key%'
                ";
    }else{
    $query = "select * from pemesanan inner join kategori
              on pemesanan.id_kategori = kategori.id_kategori";
    }
    $result = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Data Pesanan</title>
  </head>
  <body>
    <div class="topnav">
      <a href="index.php">Home</a>
      <a href="trending.php">Trending</a>
      <a href="buku.php">Pesan</a>
      <a href="buku2.php">Beli</a>
      <a  href="akun.php"><?php echo $_SESSION['usrname']; ?></a>
      <div class="search-container">
        <form action="" method="post">
          <input type="text"  name="search" placeholder="Search..">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  	<div class="container">
  		<div class="row">
    		<div class="col-sm">
          
          <br />
          <h2 align="center">Pemesanan</h2>
          <br /><br />
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Pemesan</th>
                <th>Pesanan</th>
                <th>Daerah</th>
                <th>Kategori</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1;?>
              <?php while($pemesanan = mysqli_fetch_array($result)): ?>
                <tr>
                  <!-- <td><?php echo $i?></td> -->
                  <td><?php echo $pemesanan['nama']?></td>
                  <td><?php echo $pemesanan['barang']?></td>
                  <td><?php echo $pemesanan['alamat']?></td>
                  <td><?php echo $pemesanan['nama_kategori']?></td>
                  <td>
                      <a href="detail.php?id=<?php echo $pemesanan['id']?>"
                      class="btn btn-primary btn-sm">Ambil</a>
                  </td>
                </tr>
                <?php $i++?>
              <?php endwhile;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script>
    </script>
  </body>
</html>