<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahhotpress'])) {
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $tebal = $_POST['tebal'];
  $kw = $_POST['kw'];
  $jenis = $_POST['jenis'];
  $banyak = $_POST['banyak'];
  $panjangh = $_POST['panjangh'];
  $lebarh = $_POST['lebarh'];
  $tebalh = $_POST['tebalh'];
  $kwh = $_POST['kwh'];
  $jenish = $_POST['jenish'];
  $hasil = $_POST['hasil'];

  $query = mysqli_query($koneksi, "INSERT into hotpress (tanggal,panjang,lebar,tebal,kw,jenis,banyak,panjangh,lebarh,tebalh,kwh,jenish,hasil) VALUES (now(),'$panjang','$lebar','$tebal','$kw','$jenis','$banyak','$panjangh','$lebarh','$tebalh','$kwh','$jenis','$hasil')");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../hotpress.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan");</script>';
    echo "<script>location='../hotpress.php';</script>";
  }
  }
?>