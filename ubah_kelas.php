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
    $qry_get_kelas=mysqli_query($koneksi,"SELECT * FROM kelas where 
    id_kelas = '".$_GET['id_kelas']."'");
    $data_kelas=mysqli_fetch_array($qry_get_kelas);
    ?>

<div class="p-5 mb-4 bg-white text-success">
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Kelas</h1>
            <div class="card-body">
            <form action="proses_ubah_kelas.php" method="post">
                <input type="hidden" name="id_kelas" value="<?=$data_kelas['id_kelas']?>">
    Nama Kelas :
            <input type="text" name="nama_kelas" value="<?=$data_kelas['nama_kelas']?>" class="form-control"><br>
    Kelompok :
            <input type="text" name="kelompok" value="<?=$data_kelas['kelompok']?>" class="form-control">
            <br>
    
            <button type="submit" class="btn btn-success">Ubah Kelas</button><br><br>
    </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
   
</body>
</html>


  
