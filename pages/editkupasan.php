<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditkupasan'])) {
  // $tanggal = $_POST['tanggal'];
  $batang = $_POST['batang'];
  $lahan = $_POST['lahan'];
  $seri = $_POST['seri'];
  $mesin = $_POST['mesin'];
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $tebal = $_POST['tebal'];
  $kw = $_POST['kw'];
  $jenis = $_POST['jenis'];
  $hasil = $_POST['hasil'];
  $ket = $_POST['ket'];

  $query = mysqli_query($koneksi, "UPDATE kupasan SET batang='$batang',lahan='$lahan',seri='$seri',mesin='$mesin',panjang='$panjang',lebar='$lebar',tebal='$tebal',kw='$kw',jenis='$jenis',hasil='$hasil' WHERE seri='$seri'");
  if ($query) {
    header("location:../kupasan.php");

  } else {
    echo "gagal";
  }
  }
?>