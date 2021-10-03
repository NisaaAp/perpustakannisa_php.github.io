<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <?php
    include "navbar.php";
    ?><br>

    <div class="container">
    <h1>Data Buku</h1>
    <form action = "tampil_buku.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Masukkan ID\Nama Buku"/>
    </form>
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID Buku</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_buku = mysqli_query($koneksi, "select * from buku where id_buku like '%$cari%' or nama_buku like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_buku = mysqli_query($koneksi, "select * from buku");
    }
    while ($data_buku = mysqli_fetch_array($query_buku)){?>
        <tr> 
            <td><?php echo $data_buku["id_buku"];?></td>
            <td><?php echo $data_buku["nama_buku"];?></td>
            <td><?php echo $data_buku["pengarang"];?></td>
            <td><?php echo $data_buku["deskripsi"];?></td>
            <td><img src="foto/<?=$data_buku['foto']?>" width="100"></td>

            
            <td><a
            href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>"
            class="btn btn-success">Ubah</a> | <a
            href="hapus2.php?id_buku=<?=$data_buku['id_buku']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class=" btn-danger">Hapus</a>
            </td>

        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>

