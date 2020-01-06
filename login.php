<?php 
	require "koneksi.php"; 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<!-- <img src="./images/bgkampret.jpg" alt="jt"> -->
	<div class="row">
	<form action="" method="post" class="form-container">
		<a href="registrasi.php">Daftar</a>
		<h1>Login</h1>
		<?php 
			if (!empty($_POST)) {
				$nama = $_POST["nama"];
				// $alamat = $_POST["alamat"];
				// $no_hp = $_POST["no_hp"];
				$password = $_POST["password"];
				$result ="select * from user where nama = '$nama' and password = '$password'";
				$query_chek = mysqli_query($db, $result);
				if($row = mysqli_fetch_array($query_chek)) {
					$_SESSION["login"] = true;
					$_SESSION['usrid'] = $row["id"];
					$_SESSION['usrname'] = $row["nama"];
					$_SESSION['usraddress'] = $row["alamat"];
					$_SESSION['usrhp'] = $row["no_hp"];
					header("Location: index.php");
					exit;
				}

			}
		?>
		<div class="form-group">
			<label for="username">Username</label>
			<input class="form-control" id="firstname" type="text" name="nama">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" name="password">
		</div>
		 <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
</body>
</html>