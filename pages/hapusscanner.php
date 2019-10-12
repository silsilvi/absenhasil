<?php
	 include "../conf/conn.php";
	 $tglm = $_POST['tglm'];
	 $tgls = $_POST['tgls'];
	 $query = mysqli_query($koneksi, "DELETE FROM absensi WHERE tanggal BETWEEN '$tglm' AND '$tgls'");

 	if ($query) {
 		 header('location:../absensanner.php');
 	}
?>