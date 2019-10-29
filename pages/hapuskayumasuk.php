<?php
 	include "../conf/conn.php";
 	$no = $_GET['no'];
 	$query = mysqli_query($koneksi, "DELETE FROM detailkayumasuk WHERE no='$no'");

 	if ($query) {
 		 header('location:../kayumasuk.php');
 	}

?>