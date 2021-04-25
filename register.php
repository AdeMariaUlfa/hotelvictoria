<?php include 'koneksi.php'; ?>
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
                        <h1>Register Form</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Register</span>
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
                    <div class="card" style="margin-left: 400px; margin-right: 100px; margin-top: 50px;">
                        <div class="booking-form">
                            <form action="proses_register.php" method="POST" enctype="multipart/form-data" style="margin-left: 100px; margin-right: 100px; margin-top: 60px; margin-bottom: 60px;">
                                <h3 class="form-label">Register</h3><br>
                                <div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="name">Nama Lengkap</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="name">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label class="font-weight-bold" for="username">Username</label>
							<input type="text" id="username" name="username" class="form-control" placeholder="username">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="pasword">Pasword</label>
							<input type="text" id="pasword" name="password" class="form-control" placeholder="pasword">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="noHp">No.HP</label>
							<input type="text" id="noHp" name="noHp" class="form-control" placeholder="noHp">
						</div>
					</div>
					<div action="proses.php" method="get">
					      <p>Jenis Kelamin</p>
					      <p><input type='radio' name='jk' value='pria' />Pria</p>
					      <p><input type='radio' name='jk' value='wanita' />Wanita</p>
					 </div>     
					<div class="row form-group">
						<div class="col-md-12">
							<label class="font-weight-bold" for="alamat">Alamat</label>
							<textarea id="alamat" name="alamat" cols="30" rows="5" class="form-control" placeholder="masukan alamat anda!!"></textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="email">Email</label>
							<input type="text" id="email" name="email" class="form-control" placeholder="email">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" name="submit" value="Registrasi" class="btn btn-primary pill px-4 py-2">							
						</div>
					</div>


                            </form>
                        </div>
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