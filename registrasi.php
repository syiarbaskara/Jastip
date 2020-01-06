<?php require "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		.con1{
			background: url('assets/img/a.jpg');
			width: 100%;
			height: 100vh;
			background-size: 100%;
		}
		.form-container{
			background: white;
			opacity: 90%;
			position: absolute;
			top:90px;
			width: 400px;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px #000;
		}
	</style>
</head>
<body>
	<div class="con1">
		<section class="container-fluid">
			<section class="row justify-content-center">
				<section class="col-12 col-sm-6 col-md-3">
					<form class="form-container" method="post">
						<a href="login.php">Sudah punya akun?</a>
						<h1>Registrasi</h1>
						<?php
				              $query = "Select * from pemesan";
				              $result = mysqli_query($db, $query);
				          ?>
				          <?php
				            if(!empty($_POST)){
				              $nama = $_POST['nama'];
				              $alamat = $_POST['alamat'];
				              $no_hp= $_POST['no_hp'];
				              $password = $_POST['password'];
				              $query_add = "Insert into user (nama, alamat, no_hp, password)
				              value('$nama', '$alamat', '$no_hp', '$password')";
				              $exec_add = mysqli_query($db, $query_add);
				              if($exec_add)
				                echo "<p class='alert alert-success' role='alert'>
				                data Berhasil ditambahkan.<br />
				                <a href='buku.php'>Pemesan</a><a href='buku1.php'>Pembeli</a>
				                </p>";
				                else
				                echo "<p class='alert alert-danger' role='alert'>
				                [Error] Tambah data Gagal.<br />".mysql_error($db)."
				                </p>";
				            }
				          ?>
						<div class="form-group">
							<label for="firstname">Nama</label>
							<input class="form-control" id="firstname" type="text" name="nama">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input class="form-control" type="text" name="alamat">
						</div>
					  <div class="form-group">
					    <label for="phonenumber">Phone Number</label>
						<input class="form-control" id="phonenumber"  type="text" name="no_hp" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					  <br>
					  <br>
					</form>
				</section>
			</section>
		</section>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>