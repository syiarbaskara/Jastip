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