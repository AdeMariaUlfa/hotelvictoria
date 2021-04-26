<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="zxx">

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

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <h5>WELCOME TO VICTORIA HOTEL</h5>
                        <h2>Experience The Greatest Memories With Us.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h5>ABOUT US</h5>
                            <h2>Welcome to Hotel Victoria Boutique Residences</h2>
                        </div>
                        <p class="first-para">Victoria Boutique Residence berlokasi di jantung pusat Kota Malang.
                        Lokasi sangat dekat dengan Jalan Letjen S.Parman yang merupakan jalan utama Kota Malang
                    pusat perkantoran, pemerintahan, hotel berbintang, dan bisnis.</p>
                        <p class="last-para">Juga selangkah dari Jalan Ciliwung yang merupakan pusat kuliner dan Jalan Tumenggung Suryo pusat oleh-oleh lokal Kota Malang. Dengan bangunan bergaya kolonial modern Victoria Boutique Residence merupakan surga tersembunyi dikeramaian dan hituk pikuk Kota Malang.</p>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home__about__pic">
                        <img src="img/home-about/collage.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Services Section Begin -->
   
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <!-- <section class="home-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>OUR ROOM</h5>
                        <h2>Explore Our Hotel</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/deluxedouble.jpg">
                        <div class="home__room__title">
                            <h4>Deluxe Double</h4>
                            <h2><sup>Rp.</sup>290.000<span>/day</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/deluxetwin.jpg">
                        <div class="home__room__title">
                            <h4>Deluxe Twin</h4>
                            <h2><sup>Rp.</sup>290.000<span>/day</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/suitedouble.jpg">
                        <div class="home__room__title">
                            <h4>Suite Double</h4>
                            <h2><sup>Rp.</sup>490.000<span>/day</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/victoriasuite.jpg">
                        <div class="home__room__title">
                            <h4>Victoria Suite</h4>
                            <h2><sup>Rp.</sup>690.000<span>/day</span></h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <?php include 'room.php';?>
    <!-- Home Room Section End -->

    <!-- Chooseus Section Begin -->
    <div class="chooseus spad set-bg" data-setbg="img/chooseus-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h5>WHY CHOOSE US</h5>
                            <h2>Contact us now to get the latest deals and for the next booking</h2>
                        </div>
                        <a href="booking.php" class="primary-btn">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chooseus Section End -->

    <!-- Gallery Section Begin -->
    <?php include 'galeri.php';?>
    <!-- Gallery Section End -->

    <!-- Latest Blog Section Begin -->
    \
    <!-- Latest Blog Section End -->

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

    <script>
            document.addEventListener('DOMContentLoaded', function() {
            var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;
            for (var i = 0; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
            pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
            shimScriptAccess: 'always',
            success: function () {
            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
            for (var j = 0; j < targetTotal; j++) {
            target[j].style.visibility = 'visible';
            }
            }
            });
            }
            });
            </script>
</body>

</html>