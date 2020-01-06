<?php 
session_start();

  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit; 
  }

	require "koneksi.php";

?>
<script>
function infoExec(messageText, whereToGo)
{
alert(messageText);
window.location = whereToGo;
}
</script>
<?php
	$id = $_GET['id'];
	$query_del = "Delete from pemesanan Where id = ".$id;
	$exec_del = mysqli_query($db, $query_del);
	if($exec_del)
	echo "<script>infoExec('Hapus pesanan Berhasil','/p8/buku.php')</script>";
	else
	echo "<script>infoExec('Hapus Pesanan gagal
	<br />".mysqli_error($db)."','/p8/buku.php')</script>";
?>