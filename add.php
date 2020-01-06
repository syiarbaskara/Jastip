<?php 

session_start();

  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit; 
  }

  require "koneksi.php";

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Form PHP</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
    		<div class="col-sm">
    			<br />
    			<h2>Form Pemesanan</h2>
          <?php
              $query = "Select * from kategori";
              $result = mysqli_query($db, $query);
          ?>
          <?php
            if(!empty($_POST)){
              $nama = $_POST['nama'];
              $barang = $_POST['barang'];
              $alamat = $_POST['alamat'];
              $kategori = $_POST['id_kategori'];
              $query_add = "Insert into pemesanan (nama, barang, alamat, id_kategori)
              value('$nama', '$barang', '$alamat', '$kategori')";
              $exec_add = mysqli_query($db, $query_add);
              if($exec_add)
                echo "<p class='alert alert-success' role='alert'>
                Tambah data Berhasil.<br />
                <a href='buku.php'>Ke halaman utama</a>
                </p>";
                else
                echo "<p class='alert alert-danger' role='alert'>
                [Error] Tambah data Gagal.<br />".mysql_error($db)."
                </p>";
            }
          ?>
          <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama">           
          </div>
          <div class="form-group">           
            <input type="text" name="barang" class="form-control" placeholder="Nama Barang">
          </div>     
          <div class="form-group">           
            <input type="text" name="alamat" class="form-control" placeholder="Daerah">
          </div>     
          <div class="form-group">           
            <select class="form-control" name="id_kategori">
	            <option>-- Pilih Kategori --</option>
                <?php while($pilihan = mysqli_fetch_array($result)): ?>
                <option value="<?php echo $pilihan['id_kategori']?>">
                <?php echo $pilihan['nama_kategori']?>
              </option>
              <?php endwhile;?>
            </select>
          </div><br />
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>