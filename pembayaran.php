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
	<div id="table" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="tabel pembayaran">
						<h2>Tabel Pembayaran<h2>
                        <table width="100%" border="1" class="table table-bordered table-striped">
                            <tr> 
                                <th>No</th>
                                <th>Id Transaksi</th>
                                <th>Total Biaya</th>
                                <th>Bukti Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </table>
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
$sql = mysqli_query($conn, "SELECT idTransaksi,totalBiaya,buktiBayar FROM transaksi where idCust='$_GET[idCust]' ");
$no=1;
$totalBiaya=0;
while($row=mysqli_fetch_array($sql)){
    // $totalBiaya
?>
<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['idTransaksi'] ?> </td>
<td align="center"><?php echo $row['totalBiaya'] ?> </td>
<td align="center"><?php echo $row['buktiBayar'] ?> </td>




<td align="center">
<a href="index.php?module=uploadBuktiBayar&idTransaksi=<?php echo $row['idTransaksi'];?>"class="btn btn-success">Upload</a>
<a href="index.php?module=cetakPembayaran&idTransaksi=<?php echo $row['idTransaksi'];?>"class="btn btn-success">Cetak</a>
</td>
</tr>
<?php
$no++;
}
}
?>
</table>