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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Data Transaksi</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="tabelCustomer.php" class="text-muted">Menu</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Tambah data Transaksi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
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
                                <h4 class="card-title">Input Transaksi</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group row">
                                        <label class="col-md-2">Id Transaksi </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected>Choose...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    </select>
                                                    </div>
                                            </div><br><br>

                                        <label class="col-md-2">Id Kamar </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected>Choose...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    </select>
                                                    </div>
                                            </div><br><br>
                                        <label class="col-md-2">Id Customer</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected>Choose...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    </select>
                                                    </div>
                                            </div><br><br>
                                          
                                            <label class="col-md-2">Tanggal Checkin </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                        <input type="date" name="tgl_masuk" id="">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Tanggal Cekout</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                        <input type="date" name="tgl_masuk" id="">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Jumlah Orang </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="masukkan jumlah orang">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">No Ktp</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="masukkan no Ktp">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">E-mail</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="masukkan Email">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">No Hp </label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="masukkan No hp">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Nama</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="masukkan Nama">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Breakfast</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                    </select>
                                                    </div>
                                            </div><br><br>
                                            <label class="col-md-2">Total Biaya</label>
                                            <div class="col-md-10">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="masukkan Total Biaya">
                                                        </div>
                                                    </div>
                                            </div>
                                            <label class="col-md-2">Bukti Pembayaran </label>
                                            <div class="custom-file mb-2">
                                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
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