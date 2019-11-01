<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditkupasan'])) {
  // $tanggal = $_POST['tanggal'];
  $no = $_POST['no'];
  $batang = $_POST['batang'];
  $lahan = $_POST['lahan'];
  $seri = $_POST['seri'];
  $ket = $_POST['ket'];
  $mesin = $_POST['mesin'];
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $tebal = $_POST['tebal'];
  $kw = $_POST['kw'];
  $jenis = $_POST['jenis'];
  $hasil = $_POST['hasil'];

  $query = mysqli_query($koneksi, "UPDATE kupasan SET batang='$batang',lahan='$lahan',seri='$seri',ket='$ket',mesin='$mesin',panjang='$panjang',lebar='$lebar',tebal='$tebal',kw='$kw',jenis='$jenis',hasil='$hasil' WHERE no='$no'");
  if ($query) {
    header("location:../kupasan.php");

  } else {
    echo "gagal";
  }
  }
?>