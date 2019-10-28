<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditpegawai'])) {
  $kodep = strtoupper($_POST['kodep']);
  $nama = $_POST['nama'];
  $jamh_bulat = $_POST['jamh_bulat'];
  $jamp_bulat = $_POST['jamp_bulat'];
  $jamhasil_masuk = $_POST['jamhasil_masuk'];
  $jamhasil_pulang = $_POST['jamhasil_pulang'];
  $pj = $_POST['pj'];

  $query = mysqli_query($koneksi, "UPDATE absensi SET jamhadir_bulat='$jamh_bulat',jampulang_bulat='$jamp_bulat',ketr='$pj' WHERE kodep='$kodep'");
  $query1 = mysqli_query($koneksi, "UPDATE tabsen SET jamhadir1='$jamhasil_masuk',jampulang1='$jamhasil_pulang' WHERE kodep='$kodep'");
  
  if ($query) {
    header("location:../perbandingan.php");
  } else {
    echo "gagal";
  }
  }
?>