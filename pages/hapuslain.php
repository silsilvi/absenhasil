<?php
 	include "../conf/conn.php";
 	$no = $_GET['no'];
 	$query = mysqli_query($koneksi, "DELETE FROM lain WHERE no='$no'");

 	if ($query) {
 		 header('location:../lain.php');
 	}

?>