<?php
	include 'koneksi.php';
    if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$noHp = $_POST['noHp'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$sqlsimpan = mysqli_query($conn,"insert into customer(name, username, password, noHp, jk, alamat, email)values ('$name','$username','$password','$noHp','$jk','$alamat','$email')");
	if($sqlsimpan){
	   echo "<script>alert('Data Berhasil Disimpan');
					 window.location='index.html';
			</script>";
	 }else{
	   echo "<script>alert('Data Gagal Disimpan');
					
			</script>";
	  }
	}	
?>