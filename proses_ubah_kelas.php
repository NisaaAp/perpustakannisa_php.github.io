<?php
    if($_POST){
        $id_kelas=$_POST["id_kelas"];
        $nama_kelas=$_POST["nama_kelas"];
        $kelompok=$_POST["kelompok"];
       

        if (empty($nama_kelas)) {
            echo "<script>alert('nama kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";
        }
        elseif (empty($kelompok)) {
            echo "<script>alert('kelompok tidak boleh kosong');location.href='tambah_kelas.php';</script>";
        } else {
            include "koneksi.php";
            $update=mysqli_query($koneksi, "UPDATE kelas set id_kelas='".$id_kelas."', nama_kelas='".$nama_kelas."',kelompok='".$kelompok."' where id_kelas= '".$id_kelas."'") or die(mysqli_error($koneksi));
                if($update){
        echo "<script>alert('Berhasil update');location.href='tampil_kelas2.php';</script>";
        }      else {
        echo "<script>alert('Gagal update');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
        }
    }
 }
        
          
    ?>

