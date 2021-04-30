<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<?php include '../Admin/template/headAdmin.php';?>
</head>
<?php include '../Admin/template/headerAdmin.php';?>
<?php include '../Admin/template/sidebarAdmin.php';?>
<body>
    
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Data Kamar</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="tabelCustomer.php" class="text-muted">Menu</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Kamar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Masukkan Data-Data Berikut</h4>
                                <form action="inputKamar.php" method="POST">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-md-2">Jenis Kamar </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name = "jenisKamar" placeholder="masukkan jenis kamar">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Tipe Bed </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name = "tipeBed" placeholder="masukkan tipe bed" >
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Size </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" name = "size" placeholder="masukkan size">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Kapasitas </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" name = "kapasitas" placeholder="masukkan kapasitas">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Jumlah Kamar </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" name = "jmlhKamar" placeholder="masukkan jumlah kamar">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Fasilitas </label>
                                            <div class="col-sm-12 col-md-10 col-lg-10">
                                                <div class="col-md">
                                                        <form>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name = "fasilitas" rows="3" placeholder="Text Here..." placeholder="masukkan fasilitas"></textarea>
                                                            </div>
                                                        </form>
                                                </div>
                                            </div><br><br>
                                            <label class="col-md-2">Harga Kamar </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" name = "hargaKamar" placeholder="masukkan harga kamar">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Harga Breakfast </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" name = "hargaBreakfast" placeholder="masukkan harga breakfast">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Check In Time </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="time" class="form-control" name = "checkinTime">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Check Out Time </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="time" class="form-control" name = "checkoutTime">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Image </label>
                                            <!-- <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="custom-file mb-2">
                                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                            </div> -->
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name = "image">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <input type="submit" name = "submit" class="btn btn-info" value = "SIMPAN">
                                            <input type="reset" name = "reset" class="btn btn-dark" value = "RESET">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include '../Admin/template/footerAdmin.php';?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>

    <?php
        // Check If form submitted, insert form data into users table.
        include "koneksiAdmin.php";
        if(isset($_POST['submit'])) {
        $jenisKamar = $_POST['jenisKamar'];
        $tipeBed = $_POST['tipeBed'];
        $size = $_POST['size'];
        $kapasitas = $_POST['kapasitas'];
        $jmlhKamar = $_POST['jmlhKamar'];
        $fasilitas = $_POST['fasilitas'];
        $hargaKamar = $_POST['hargaKamar'];
        $hargaBreakfast = $_POST['hargaBreakfast'];
        $checkinTime = $_POST['checkinTime'];
        $checkoutTime = $_POST['checkoutTime'];
        $image = $_POST['image'];

        $q = mysqli_query($conn, "INSERT INTO kamar(jenisKamar,tipeBed,size,kapasitas,jmlhKamar,fasilitas,hargaKamar,hargaBreakfast,checkinTime,checkoutTime,image) VALUES('$jenisKamar','$tipeBed','$size','$kapasitas','$jmlhKamar','$fasilitas','$hargaKamar,'$hargaBreakfast','$checkinTime','$checkoutTime','$image')");
            
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
                window.location.href='tabelKamar.php';</script>";
        }
        else {
            echo "<script>alert('Data Gagal Disimpan!');
                window.location.href='tabelKamar.php';</script>";
        }
    }
 ?>
</body>

</html>