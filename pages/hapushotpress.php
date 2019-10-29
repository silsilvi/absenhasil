<?php
 	include "../conf/conn.php";
 	$no = $_GET['no'];
 	$query = mysqli_query($koneksi, "DELETE FROM hotpress WHERE no='$no'");

 	if ($query) {
 		 header('location:../hotpress.php');
 	}

?>