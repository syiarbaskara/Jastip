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
    			<h2>Form tambah buku</h2>
          <form action="" method="post">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Judul Buku">           
          </div>
          <div class="form-group">           
            <input type="text" name="authors" class="form-control" placeholder="Nama Pengarang">
          </div>     
          <div class="form-group">           
            <input type="text" name="publisher" class="form-control" placeholder="Penerbit">
          </div>     
          <div class="form-group">           
            <select class="form-control" name="cats">
              
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>