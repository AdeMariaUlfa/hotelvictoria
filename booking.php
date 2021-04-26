<?php 
include 'koneksi.php';
if(@$_SESSION['username']!=""){
    ?>
    <?php
    if (!isset($_GET['konf'])){
        ?>
        

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

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
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="proses_reservasi.php" style="margin-left: 100px; margin-right: 100px; margin-top: 50px;">
							<h3 class="form-label">Masukkan Rincian Anda</h3><br>
							<div class="form-group">
								<span class="form-label">Nama Lengkap</span>
								<input class="form-control" type="name" id="name" value="name" placeholder="Enter your name" required>
							</div>
							<div class="row no-margin" >
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" type="date" id="checkin" value="checkout"  required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Check Out</span>
										<input class="form-control" type="date" id="checkout" value="checkout"  required>
									</div>
								</div>
							</div>
							
							<div class="row no-margin">
								<div class="col-sm-6">
									<span class="form-label">Jumlah Orang</span>
									<div class="form-group">
										<select name="jmlhOrang" class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-sm-6"><br>
									<span class="form-label">Room Type</span>
									<div class="form-group">
									<select class="form-control" required name="kamar" id="kamar">
									<option value="">Select room type</option>
									<?php
                                    $sql = mysqli_query($conn, "SELECT * FROM kamar");
                                    foreach ($sql as $value){
                                        ?>
                                        <option value="<?= $value['idKamar']; ?>"><?= $value['jenisKamar']; ?></option>
                                        <?php
                                    }
									?>
									</select>
									<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							
							<div class="form-group"><br>
								<span class="form-label">No KTP</span>
								<input class="form-control" type="name" id="noKtp" value="noKtp"  placeholder="Enter your ID number" required>
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input class="form-control" type="email" id="email" value="email"  placeholder="Enter your email">
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" id="noHp" value="noHp"  placeholder="Enter your phone number">
							</div>
                            <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-black font-weight-bold" for="breakfast">With Breakfast?</label>
                                <select required name="breakfast" id="breakfast" value="breakfast" class="form-control" >
                                <option value=yes>Yes</option>
                                <option value=no>No</option>
                                <?php
                               if($value==yes){
                                   $sql = mysqli_query($conn, "SELECT breakfast FROM kamar where idkamar = 'kamar'");
                               }
                                ?>
                                </select>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="submit" value="Reservasi Sekarang" name="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                                </div>
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
<?php
    } 
    }else{
        echo "<script>alert('Silahkan Login Terlebih Dahulu atau registrasi terlebih dahulu!');
        window.location='login.php';</script>";
    }