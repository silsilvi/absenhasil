<?php
 	include "../conf/conn.php";
 	$jeniskayu = $_GET['jeniskayu'];
 	$query = mysqli_query($koneksi, "DELETE FROM stok WHERE jeniskayu='$jeniskayu'");

 	if ($query) {
 		 header('location:../stok.php');
 	}

?>