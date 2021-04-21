<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Victoria</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo2.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn__widget">
            <a href="#">Book Now <span class="arrow_right"></span></a>
        </div>
        <div class="offcanvas__widget">
            <ul>
                <li><span class="icon_pin_alt"></span> Jl. Ciujung No.7, Kota Malang</li>
                <li><span class="icon_phone"></span> (123) 456-78-910</li>
            </ul>
        </div>
        <div class="offcanvas__language">
            <img src="img/lan.png" alt="">
            <span>English</span>
            <i class="fa fa-angle-down"></i>
            <ul>
                <li>English</li>
                <li>Bangla</li>
            </ul>
        </div>
        <div class="offcanvas__auth">
            <ul>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><span class="icon_pin_alt"></span> Jl. Ciujung No.7, Kota Malang</li>
                            <li><span class="icon_phone"></span> (0341) 4352686</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__auth">
                                <ul>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav__option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./index.php"><img src="img/logo2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li><a href="./index.html">Home</a></li>
                                    <li><a href="./rooms.html">Rooms</a></li>
                                    <li><a href="./about.html">About Us</a></li>
                                </ul>
                            </nav>
                            <div class="header__nav__widget">
                                <a href="booking.html">Book Now <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
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
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg" style="margin-top: 50px">

        <div class="container">
            <div class="footer__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">

                            <h4>(0341) 435 2686</h4>
                            <h4>0857 9144 6830</h4>
                            <ul>
                                <li>Jalan Ciujung No.7, Kota Malang</li>
                            </ul>
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer__widget">
                            <h4>Quick Link</h4>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="rooms.html">Room</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="booking.html">Booking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <div class="footer__newslatter">
                            <div class="footer__newslatter__find">
                                <h5>Find Us:</h5>
                                <div class="footer__newslatter__find__links">
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-forumbee"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p> team &copy;
                                <script>document.write(new Date().getFullYear());</script>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>

                </div>
            </div>
        </div>
    </footer>
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