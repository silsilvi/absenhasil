<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahkupasan'])) {
  $tanggal = $_POST['tanggal'];
  $batang = $_POST['batang'];
  $lahan = $_POST['lahan'];
  $seri = $_POST['seri'];

  $query = mysqli_query($koneksi, "INSERT into kupasan (tanggal,batang,lahan,seri) VALUES ('$tanggal','$batang','$lahan','$seri')");
  $koneksi->query("UPDATE detailkayumasuk SET banyak=banyak-$batang WHERE seri='$seri'");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../kupasan.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan, Kode Sudah Terpakai");</script>';
    echo "<script>location='../kupasan.php';</script>";
  }
  }
?>