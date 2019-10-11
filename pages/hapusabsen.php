<?php
 	include "../conf/conn.php";
 	$kodeabsen = $_GET['kodeabsen'];
 	$query = mysqli_query($koneksi, "DELETE FROM tabsen WHERE kodeabsen='$kodeabsen'");

 	if ($query) {
 		 header('location:../absen.php');
 	}

?>