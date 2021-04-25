<?php
include 'koneksi.php'; 
if(@$_SESSION['username']!=""){
    ?>
      <!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>

<body>
	<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    
    <!-- Offcanvas Menu End -->

     <!-- Header Section Begin -->
     <?php include 'header.php';?>
    <!-- Header Section End -->
 	<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1>Booking Form</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Booking</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
	<div id="bukti" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="form_uploadBuktiBayar">
                    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<div class="form-group">
				<label >Id Transaksi</label>
				<input type="text" class="form-control" name="idTransaksi" value="<?php echo $_SESSION['idTransaksi']; ?>"/>
				</div>
				<div class="form-group">
				<label>Total Biaya</label>
				<input type="text" class="form-control" name="totalBiaya" value="<?php echo $_SESSION['totalBiaya']; ?>"/>
				</div>
				<div class="form-group">
				<label>Bukti Bayar</label>
				<input type="file" class="form-control" name="buktiBayar">
				</div>
				<div class="form-group">
				<input type="submit" name="submit" value="send konfirmasi" />
				</div>
				</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- This templates was made by Colorlib (https://colorlib.com) -->
<!-- Footer Section Begin -->
<?php include 'footer.php';?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
}
<?php
include "koneksi.php"; 
if(isset($_POST['submit'])){
   $buktiBayar=$_POST['buktiBayar'];

$nama_file = $_FILES['buktiBayar']['name'];
$ukuran_file = $_FILES['buktiBayar']['size'];
$tipe_file = $_FILES['buktiBayar']['type'];
$tmp_file = $_FILES['buktiBayar']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "img/".$nama_file;
if($tipe_file == "img/jpeg" || $tipe_file == "img/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
// Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
// Jika ukuran file kurang dari sama dengan 1MB, lakukan :
// Proses upload
if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
 // Jika gambar berhasil diupload, Lakukan :  
 // Proses simpan ke Database

$sqlsimpan = mysqli_query($conn, "UPDATE transaksi SET buktiBayar='$_POST[BuktiBayar]' WHERE idTransaksi='$_POST[idTransaksi]'");

if($sqlsimpan){ // Cek jika proses simpan ke database sukses atau tidak
   // Jika Sukses, Lakukan :
   echo "<script>alert('data berhasil disimpan!!!')</script>";
   header("location:index.php"); // Redirectke halaman index.php
 }else{
   // Jika Gagal, Lakukan :
   echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.!!!')</script>";
  header("location:uploadBuktiBayar.php");
 }
}else{
 // Jika gambar gagal diupload, Lakukan :
 echo "<script>alert('Maaf, Gambar gagal untuk diupload!!!')</script>";
 header("location:uploadBuktiBayar.php");
}
}else{
// Jika ukuran file lebih dari 1MB, lakukan :
 echo "<script>alert('Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB!!!')</script>";
  header("location:uploadBuktiBayar.php");
}
}else{
// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
echo "<script>alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.!!!')</script>";
header("location:uploadBuktiBayar.php");
}
}
}else{
echo "<script>alert('Silahkan Login Terlebih Dahulu atau registrasi terlebih dahulu!');
      window.location='login.php';</script>";
}	

?>