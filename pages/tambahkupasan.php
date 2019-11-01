<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahkupasan'])) {
  // $tanggal = $_POST['tanggal'];
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

  $query = mysqli_query($koneksi, "INSERT into kupasan (tanggal,batang,lahan,seri,ket,mesin,panjang,lebar,tebal,kw,jenis,hasil) VALUES (now(),'$batang','$lahan','$seri','$ket','$mesin','$panjang','$lebar','$tebal','$kw','$jenis','$hasil')");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../kupasan.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan");</script>';
    echo "<script>location='../kupasan.php';</script>";
  }
  }
?>