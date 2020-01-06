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
    			<h2>Form Edit Pemesanan</h2>
          <?php
          //query menampilkan detail buku
              $id = $_GET['id'];
              if(!empty($_POST)){
                  $nama = $_POST['nama'];
                  $barang = $_POST['barang'];
                  $alamat = $_POST['alamat'];
                  $kategori = $_POST['id_kategori'];
                  $query_update = "Update pemesanan Set nama = '$nama',
                  barang = '$barang',
                  alamat = '$alamat',
                  id_kategori = $kategori
                  Where id = ".$id;
                  $exec_update = mysqli_query($db, $query_update);
                  if($exec_update)
                  echo "<p class='alert alert-success' role='alert'>
                  Update data Berhasil.<br />
                  <a href='buku.php'>Ke halaman utama</a>
                  </p>";
                  else
                  echo "<p class='alert alert-danger' role='alert'>
                  [Error] Update data Gagal.<br />".mysql_error($db)."
                  </p>";
              }
              $query_edit = "select * from pemesanan where id = ".$id;
              $result_edit = mysqli_query($db, $query_edit);
              $pemesanan = mysqli_fetch_array($result_edit);
              //query menampilkan list kategori
              $query = "select * from kategori";
              $result = mysqli_query($db, $query);
          ?>
          <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="nama" class="form-control" value="<?php echo $pemesanan['nama']?>">           
          </div>
          <div class="form-group">           
            <input type="text" name="barang" class="form-control" placeholder="barang" value="<?php echo $pemesanan['barang']?>">
          </div>     
          <div class="form-group">           
            <input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?php echo $pemesanan['alamat']?>">
          </div>     
          <div class="form-group">           
            <select class="form-control" name="id_kategori">
                  <option>-- Pilih Kategori --</option>
                  <?php while($pilihan = mysqli_fetch_array($result)): ?>
                  <?php $active = ($pemesanan['id_kategori'] ==
                  $pilihan['id_kategori'])?"selected":""?>
                  <option value="<?php echo $pilihan['id_kategori']?>" <?php echo $active?> >
                  <?php echo $pilihan['nama_kategori']?>
                  </option>
                  <?php endwhile;?>
            </select>
          </div>
          <br />
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>