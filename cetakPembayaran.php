<?php 
session_start();
include "koneksi.php" ;
?>
<body onLoad="javascript:print()"> 
<style type="text/css">
.style5 {font-size: 24px}
</style>

<div class="panel-heading">
    <table width="100%">
	<tr>
	<td><div align="center">
	<h3><label>HOTEL Victoria </label></h3>
	<label>Jl. Ciujung No.7, Kota Malang</label>
	<label>Kota Padang, Sumatera Barat 25115</label> 
	<label>Telp : (0341) 435 2686</label> 
	<label>No Hp : 0857 9144 6830</label>
	<div align="center">Cetak Pembayaran
</div>
	</td>
	</tr>
</table>
</div>
<table width="100%" border="1" class="table table-bordered table-striped">

		<tr> 
			<th>No</th>
			<th>Id Transaksi</th>
			<th>Id Customer</th>
			<th>Total Biaya</th>
		</tr>

<?php 
include 'koneksi.php';
$sql= mysqli_query($conn,"SELECT * FROM transaksi WHERE idTransaksi='$_GET[idTransaksi]' AND buktiBayar NOT NULL");
$no=1;
while($data=mysqli_fetch_array($sql)){

?>

		<tr>
			<td align="center"><?php echo $no; ?></td>
			<td align="center"><?php echo $data['idTransaksi'] ?> </td>
			<td align="center"><?php echo $data['idCust'] ?> </td>
			<td align="center"><?php echo $data['totalBayar'] ?> </td>
		</tr>

<?php 
$no++;
}
?>
</table> 
 
 <td width="37%" bgcolor="#FFFFFF">
 <div align="right"> <?php $tanggal= date('d M Y');
 echo " $tanggal";?><br/>
 Pemilik
 <br></br>
 <br></br>
 (...........)
 </br>
 </td>
 </tr>
 </div>
