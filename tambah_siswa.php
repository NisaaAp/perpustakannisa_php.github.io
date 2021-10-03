<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<?php
    include "navbar.php";
    ?><br><br>

<div class="p-5 mb-4 bg-white text-success">
    <div class="container"><br>
    <div class="card">
            <h1 class="card-header">Tambah Siswa</h1>
            <div class="card-body">

    <h2 class="text-center">Tambah Siswa</h2><br>
    <form action="proses_tambah_siswa.php" method="post"><br>
     Nama Siswa :
        <input type="text" name="nama_siswa" value="" placeholder=" Masukkan Nama Siswa" class="form-
            control"><br><br>
    Tanggal Lahir :
        <input type="date" name="tanggal_lahir" value="" class="form-
            control"><br>
    Gender :
        <select name="gender" class="form-control">
        <option></option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
        </select><br>
    Alamat :
       <textarea name="alamat" placeholder=" Masukkan Alamat" class="form-control"
            rows="4"></textarea><br>
    Kelas :
        <select name="id_kelas" class="form-control">
        <option></option>
        <?php
            include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi, "select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
            echo '<option
            value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
        }
        ?>
        </select><br>
    Username :
        <input type="text" name="username" placeholder=" Masukkan Username" value="" class="form-
            control"><br><br>
    Password :
       <input type="password" name="password" value="" placeholder=" Masukkan Password" class="form-
            control"><br><br>

         
            <button type="submit" class="btn btn-success">Tambah Siswa</button><br><br>
    </form>
    </div>
    </div>
    </div>
</div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   
</body>
</html>
