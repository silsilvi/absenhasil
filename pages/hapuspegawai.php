<?php
 	include "../conf/conn.php";
 	$kodep = $_GET['kodep'];
 	$query = mysqli_query($koneksi, "DELETE FROM pegawai WHERE kodep='$kodep'");

 	if ($query) {
 		 header('location:../index.php');
 	}

?>