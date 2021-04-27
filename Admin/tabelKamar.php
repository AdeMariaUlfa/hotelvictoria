<!DOCTYPE html>
<html lang="zxx">
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tabel Data Kamar</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="indexAdmin.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Kamar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <A href="inputKamar.php" class="btn btn-primary">Tambah Data</a>
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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                                <!-- <table width="30%" border="1" class="table table-bordered table-striped"> -->
                            <div class="card-body">
                                <h4 class="card-title">Data Kamar</h4>
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6> -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Kamar</th>
                                                <th>Jenis Kamar</th>
                                                <th>Tipe Bed</th>
                                                <th>Size</th>
                                                <th>Kapasiatas</th>
                                                <th>Jumlah Kamar</th>
                                                <th>Fasilitas</th>
                                                <th>Harga Kamar</th>
                                                <th>Harga Breakfasr</th>
                                                <th>Check In Time</th>
                                                <th>Check Out Time</th>
                                                <th>Image</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                           <?php  
                                            include "koneksiAdmin.php";
                                            $sql = mysqli_query($conn,"select * from kamar");
                                            $no=1;
                                            while($row=mysqli_fetch_array($sql)){

                                           ?>
                                            <td align="center"><?php echo $no; ?></td>
                                            <td align="center"><?php echo $row['idKamar'] ?> </td>
                                            <td align="center"><?php echo $row['jenisKamar'] ?> </td>
                                            <td align="center"><?php echo $row['tipeBed'] ?> </td>
                                            <td align="center"><?php echo $row['size'] ?> </td>
                                            <td align="center"><?php echo $row['kapasitas'] ?> </td>
                                            <td align="center"><?php echo $row['jmlhKamar'] ?> </td>
                                            <td align="center"><?php echo $row['fasilitas'] ?> </td>
                                            <td align="center"><?php echo $row['hargaKamar'] ?> </td>
                                            <td align="center"><?php echo $row['hargaBreakfast'] ?> </td>
                                            <td align="center"><?php echo $row['checkinTime'] ?> </td>
                                            <td align="center"><?php echo $row['checkoutTime'] ?> </td>
                                            <td align="center"><?php echo $row['image'] ?> </td>
                                            <td align="center">
                                                <a href="index.php?module=editKamar&idKamar=<?php echo $row['idKamar'];?>"class="btn btn-success">Edit</a>
                                                <a href="index.php?module=hapusKamar&idKamar=<?php echo $row['idKamar'];?>"class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php 
                                                $no++;
                                                }
                                            ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
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