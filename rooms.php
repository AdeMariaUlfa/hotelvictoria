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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1>Our Hotel Rooms</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Rooms Section Begin -->
    <section class="rooms spad">
        <div class="container">
            <?php
            $sql=mysqli_query($conn, "SELECT * FROM kamar");
            foreach($sql as $value){
            ?>
            <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                    <div class="room__pic__slider owl-carousel">
                    <img src="img/<?= $value['image']; ?>" alt="" class="img-fluid">
                        
                    </div>
                </div>
                <div class="col-lg-6 p-0 order-lg-1 order-md-1 col-md-6">
                    <div class="room__text">
                        <h3><?= $value['jenisKamar']; ?></h3>
                        <h4>Price</h4>
                                <h2><sup>Rp.</sup><?= $value['hargaKamar']; ?><span>per day</span> / <?= $value['hargaBreakfast']; ?><span>+breakfast</span></h2>
                                
                        <ul>
                            <li><span>Size:</span><?= $value['size']; ?></li>
                            <li><span>Kapasitas:</span>Max <?= $value['kapasitas']; ?></li>
                            <li><span>Jenis:</span><?= $value['tipeBed']; ?></li>
                            <li><span>Services:</span><?= $value['fasilitas']; ?></li>
                        </ul>
                        <a href="booking.php">BOOKING</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <!-- Rooms Section End -->

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