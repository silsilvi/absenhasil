<?php
 	include "../conf/conn.php";
 	$seri = $_GET['seri'];
 	$query = mysqli_query($koneksi, "DELETE FROM kupasan WHERE seri='$seri'");

 	if ($query) {
 		 header('location:../kupasan.php');
 	}

?>