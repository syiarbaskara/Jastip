<?php  require "koneksi.php" ?>
<?php 
function cari($keyword){
                  $query = "select * from buku
              				where pengarang like '%$keyword%'";
                  $result = mysqli_query($db, $query);
                }
 ?>
