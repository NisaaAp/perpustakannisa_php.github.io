<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<?php 
    include "navbar.php";
    include "koneksi.php";
    $query_get_buku=mysqli_query($koneksi,"SELECT * FROM buku where 
    id_buku = '".$_GET['id_buku']."'");
    $data_buku=mysqli_fetch_array($query_get_buku);
    ?>

    
<div class="p-5 mb-4 bg-white text-success">
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Buku</h1>
            <div class="card-body">
            <form action="proses_ubah_buku.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_buku" value="<?=$data_buku['id_buku']?>">

    Nama Buku :
        <input type="text" name="nama_buku" value="<?=$data_buku['nama_buku']?>" placeholder="Masukkan Nama Buku" class="form-control">
  
    Pengarang :
        <input type="text" name="pengarang" value="<?=$data_buku['pengarang']?>" placeholder="Masukkan Nama Pengarang" class="form-control"><br>
    Deskripsi :
        <textarea name="deskripsi" value="<?=$data_buku['deskripsi']?>" placeholder="Masukkan Deskripsi Buku" class="form-control"
            rows="4"></textarea><br>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <img src="foto/<?=$data_buku['foto']?>" style="width: 120px;float: left;margin-bottom: 5px;">
        <input type="file" class="form-control" name="foto" required>
                    </div>
            <button type="submit" class="btn btn-success">Ubah Buku</button><br><br>
    </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
   
</body>
</html>

