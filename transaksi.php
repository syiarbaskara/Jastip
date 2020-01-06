<?php 
require "koneksi.php";

 if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$nama = mysqli_real_escape_string($db, $_POST['nama']);
  	$detail = mysqli_real_escape_string($db, $_POST['detail']);
  	$harga = mysqli_real_escape_string($db, $_POST['harga']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO transaksi (image, nama, detail, harga) VALUES ('$image', '$nama', '$detail', '$harga')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM transaksi");
 ?>
 <html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
	
	<table class="table table-dark">
    <thead>
      <tr>
        <th>Detail</th>
      </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_array($result)) { ?>
    <tbody>
      <tr>
        <td><?php echo "<img src='images/".$row['image']."'>"; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['detail']; ?></td>
        <td><?php echo $row['harga']; ?></td>
      </tr>
    </tbody>
    <?php }?>
  </table>
   <br>
  <form method="POST" action="" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div class="form-group">
    	<input type="text" name="nama" class="form-control" placeholder="Nama">           
   	</div>
    <div class="form-group">
    	<input type="text" name="harga" class="form-control" placeholder="harga">           
    </div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="detail" 
      	placeholder="data tambahan, misal warna......"></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>

</div>
</body>
</html>