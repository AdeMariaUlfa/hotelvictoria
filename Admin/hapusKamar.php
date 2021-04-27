<?php
include "koneksiAdmin.php";

$result = mysqli_query($conn, "delete from kamar where idKamar = '$_GET[idKamar]'");

  if($result){
    echo "<script>alert('Data Berhasil Di hapus');
			window.location.href='tabelKamar.php';</script>";
  }else{
   echo "<script>alert('Data Gagal Di hapus');
			window.location.href='tabelKamar.php';</script>";
  }
?>