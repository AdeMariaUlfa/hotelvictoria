<?php
    session_start();
?>
<?php
	if (isset($_POST['submit'])) {
    include 'koneksi.php';

    $IdKamar=$_POST['IdKamar'];
    $totalBiaya=substr($_POST['totalBiaya'],0,6);
    $name=$_POST['name'];
    $noHp=$_POST['noHp'];
    $email=$_POST['email'];
    $noKtp=$_POST['noKtp'];
    $jmlhOrang=$_POST['jmlhOrang'];
    $breakfast=$_POST['breakfast'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $idTransaksi = uniqid();
    $buktiBayar =$_SESSION['buktiBayar'];
    $IdCust =$_SESSION['IdCust'];

    $sql = "INSERT INTO transaksi (idTransaksi, IdKamar, IdCust, checkin, checkout, jmlhOrang, noKtp, email, noHp, name, breakfast, totalBiaya, buktiBayar)
    VALUES ('$idTransaksi', '$IdKamar', '$IdCust', '$checkin', '$checkout', '$jmlhOrang', '$noKtp', '$email', '$noHp', '$name', '$breakfast', '$totalBiaya', '$buktiBayar')";


    if(mysqli_query($conn,$sql)){
        echo "<script>
    alert('Reservasi sukses!');
    window.location.href='booking.php';
    </script>";
    }else {
        echo "<script>
    alert('Reservasi gagal! Kesalahan Database!');
    window.location.href='booking.php';
    </script>";
    }
}
