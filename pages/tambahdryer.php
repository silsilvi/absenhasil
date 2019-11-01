<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahdryer'])) {
  $dryer = $_POST['dryer'];
  $mesin = $_POST['mesin'];
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $tebal = $_POST['tebal'];
  $kw = $_POST['kw'];
  $jenis = $_POST['jenis'];
  $hasil = $_POST['hasil'];
  $kurang = $_POST['kurang'];

  $query = mysqli_query($koneksi, "INSERT into dryer (tanggal,dryer,mesin,panjang,lebar,tebal,kw,jenis,hasil,kurang) VALUES (now(),'$dryer','$mesin','$panjang','$lebar','$tebal','$kw','$jenis','$hasil','$kurang')");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../dryer.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan");</script>';
    echo "<script>location='../dryer.php';</script>";
  }
  }
?>