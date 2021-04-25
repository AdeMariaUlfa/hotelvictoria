<section class="home-room spad">
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
            <?php 
                $sql=mysqli_query($conn, "SELECT * FROM kamar");
                foreach($sql as $value){
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" >
                        <div class="home__room__title">
                        <img src="img/<?= $value['image']; ?>" alt="" class="img-fluid">
                            <h4><?= $value['jenisKamar']; ?></h4>
                            <h2><sup>Rp.</sup><?= $value['hargaKamar']; ?><span>/day</span></h2>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
</section>