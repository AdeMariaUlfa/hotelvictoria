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
                        <h1>Login Form</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- membuat proses login -->
<?php 
include 'koneksi.php';
//menangkap data yang dikirim dari form login

if(isset($_POST["submit"])){//jika tombol login di klik
	$username=$_POST["username"];
	$password=($_POST["password"]);

	if($username!="" && $password!=""){
		
		// cek kecocokan username dan password
		$em = mysqli_query($conn, "select * from customer where password = '$password' AND username = '$username'");
		$data = mysqli_fetch_array($em);
		
		if(empty($data)) // username atau password salah
		{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismis='alert' aria-hiden='true'>&times;</button>
						Username atau password salah
					</div>";
		}
		else // username dan password cocok
		{	
			$_SESSION["username"]=$data["username"];
			$_SESSION["password"]=$data["password"];
			$_SESSION["idCust"]=$data["idCust"];
			$_SESSION["name"]=$data["name"];
			$_SESSION["noHp"]=$data["noHp"];
			$_SESSION["email"]=$data["email"];
			
			// arahkan ke halaman index pasca login
			echo "<script> alert('selamat datang ".$_SESSION['name']."'); window.location.href='index.php'; </script>";
		}
	}
	else
	{
		echo "<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismis='alert' aria-hiden='true'>&times;</button>
					Username atau password tidak boleh kosong!
				</div>";
	}
}
?>
    <!-- Breadcrumb End -->
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="card" style="margin-left: 400px; margin-right: 100px; margin-top: 50px;">
                        <div class="booking-form">
                            <form action="" method="POST" enctype="multipart/form-data" style="margin-left: 100px; margin-right: 100px; margin-top: 60px; margin-bottom: 60px;">
                                <h3 class="form-label">Login</h3><br>
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

                                <div class="form-btn">
                                <button type="submit" name="submit"class="btn btn-primary"> Login </button>
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