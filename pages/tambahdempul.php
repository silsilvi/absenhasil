<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahdempul'])) {
  $bahankurang = $_POST['bahankurang'];
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $tebal = $_POST['tebal'];
  $kw = $_POST['kw'];
  $jenis = $_POST['jenis'];
  $hasil = $_POST['hasil'];

  $query = mysqli_query($koneksi, "INSERT into dempul (tanggal,panjang,lebar,tebal,kw,jenis,hasil) VALUES (now(),'$panjang','$lebar','$tebal','$kw','$jenis','$hasil')");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../dempul.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan");</script>';
    echo "<script>location='../dempul.php';</script>";
  }
  }
?>