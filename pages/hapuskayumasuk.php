<?php
 	include "../conf/conn.php";
 	$tanggal = $_GET['tanggal'];
 	$query = mysqli_query($koneksi, "DELETE FROM kayumasuk WHERE tanggal='$tanggal'");

 	if ($query) {
 		 header('location:../kayumasuk.php');
 	}

?>