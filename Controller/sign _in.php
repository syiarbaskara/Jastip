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