<?php
session_start();
?>
<?php
if(isset($_POST['submit'])) {
    include 'koneksi.php';

    $name=$_POST['name'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $jmlhOrang=$_POST['jmlhOrang'];
    $kamar=$_POST['kamar'];
    $noKtp=$_POST['noKtp'];
    $email=$_POST['email'];
    $noHp=$_POST['noHp'];
    $noHp=$_POST['breakfast'];
    $waktu1=strtotime($_POST['checkin']);
    $waktu2=strtotime($_POST['checkout']);
    $secs = $waktu2 - $waktu1;
    // $total= ($secs * )
    $idCust = $_SESSION['idCust'];

    $sql = "INSERT INTO transaksi (idKamar,idCust,checkin,checkout,jmlhOrang,noKtp,email,noHp,name,breakfast)
    VALUES ('$kamar','$idCust,'$checkin','$checkout','$jmlhOrang','$noKtp','$email','$noHp','$name','$breakfast','$pesan')";
    
    if(mysqli_query($conn,$sql)){
        echo "<script>
    alert('Reservasi sukses!');
    window.location.href='konfirmasi_pembayaran.php';
    </script>";
    }else {
        echo "<script>
    alert('Reservasi gagal! Kesalahan Database!');
    window.location.href='index.php?page=reservasi';
    </script>";
    }
}