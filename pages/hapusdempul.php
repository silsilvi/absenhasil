<?php
 	include "../conf/conn.php";
 	$no = $_GET['no'];
 	$query = mysqli_query($koneksi, "DELETE FROM dempul WHERE no='$no'");

 	if ($query) {
 		 header('location:../dempul.php');
 	}

?>