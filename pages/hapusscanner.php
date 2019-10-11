<?php
 	include "../conf/conn.php";
 	$tanggal = $_GET['tanggal'];
 	$query = mysqli_query($koneksi, "DELETE FROM absensi WHERE tanggal='$tanggal'");

 	if ($query) {
 		 header('location:../absensanner.php');
 	}
?>