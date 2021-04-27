<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<?php include '../Admin/template/headAdmin.php';?>
</head>
<?php include '../Admin/template/headerAdmin.php';?>
<?php include '../Admin/template/sidebarAdmin.php';?>

<body>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Data Customer</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="tabelCustomer.php" class="text-muted">Menu</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Customer</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->
        

            <!-- Container fluid  -->
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Masukkan Data-Data Berikut</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-md-2">Nama </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="masukkan nama lengkap">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Username </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="masukkan username">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Password </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="masukkan password">
                                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                                                            </small>
                                                        
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">No HP </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="masukkan no hp">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Jenis Kelamin </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Perempuan</option>
                                                    <option value="2">Laki-Laki</option>
                                                    <option value="3">Lainnya</option>
                                                    </select>
                                                    </div>
                                            </div><br><br>
                                            <label class="col-md-2">Alamat </label>
                                            <div class="col-sm-12 col-md-10 col-lg-10">
                                                <div class="col-md">
                                                        <form>
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="3" placeholder="Text Here..."></textarea>
                                                                <small id="textHelp" class="form-text text-muted">Tuliskan Alamat Dengan Lengkap</small>
                                                            </div>
                                                        </form>
                                                </div>
                                            </div><br><br>
                                            <label class="col-md-2">Email </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="masukkan email">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
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
</body>

</html>