<?php
 	include "../conf/conn.php";
 	$no = $_GET['no'];
 	$query = mysqli_query($koneksi, "DELETE FROM pilihtriplek WHERE no='$no'");

 	if ($query) {
 		 header('location:../pilihtriplek.php');
 	}

?>