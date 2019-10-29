<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditdryer'])) {
  $dryer = $_POST['dryer'];
  $mesin = $_POST['mesin'];
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $tebal = $_POST['tebal'];
  $kw = $_POST['kw'];
  $jenis = $_POST['jenis'];
  $hasil = $_POST['hasil'];

  $query = mysqli_query($koneksi, "UPDATE DRYER SET no='$no',dryer='$dryer',mesin='$mesin',panjang='$panjang',lebar='$lebar',tebal='$tebal',kw='$kw',jenis='$jenis',hasil='$hasil' WHERE no='$no'");
  if ($query) {
    header("location:../dryer.php");

  } else {
    echo "gagal";
  }
  }
?>