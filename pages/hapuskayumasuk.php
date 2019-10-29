<?php
 	include "../conf/conn.php";
 	$seri = $_GET['seri'];
 	$query = mysqli_query($koneksi, "DELETE FROM detailkayumasuk WHERE seri='$seri'");

 	if ($query) {
 		 header('location:../kayumasuk.php');
 	}

?>