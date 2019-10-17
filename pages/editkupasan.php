<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditkupasan'])) {
  $tanggal = $_POST['tanggal'];
  $batang = $_POST['batang'];
  $lahan = $_POST['lahan'];
  $seri = $_POST['seri'];

  $query = mysqli_query($koneksi, "UPDATE kupasan SET tanggal='$tanggal',batang='$batang',lahan='$lahan',seri='$seri'");
  if ($query) {
    header("location:../kupasan.php");

  } else {
    echo "gagal";
  }
  }
?>