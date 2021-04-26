
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
                                <?php 
                                if (@$_SESSION["username"]==""){
                                ?>
                                    <li class="<?php $aktif = ($_GET['page']=='login') ? 'active' : ''; echo $aktif; ?>"><a href="login.php">Login</a></li>
                                    <li class="<?php $aktif = ($_GET['page']=='register') ? 'active' : ''; echo $aktif; ?>"><a href="register.php">Register</a></li>
                                <?php 
                                    } else { ?>
                                <li><a href="logout.php">Logout</a></li>
                                <?php 
                                    }
                                ?>
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
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="./rooms.php">Rooms</a></li>
                                    <li><a href="./about.php">About Us</a></li>
                                </ul>
                            </nav>
                            <div class="header__nav__widget">
                                <a href="booking.php">Book Now <span class="arrow_right"></span></a>
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