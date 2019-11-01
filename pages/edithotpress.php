<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btnedithotpress'])) {
  $no = $_POST['no'];
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


  $query = mysqli_query($koneksi, "UPDATE hotpress SET panjang='$panjang',lebar='$lebar',tebal='$tebal',kw='$kw',jenis='$jenis',banyak='$banyak',panjangh='$panjangh',lebarh='$lebarh',tebalh='$tebalh',kwh='$kwh',jenish='$jenish',hasil='$hasil' WHERE no='$no'");
  if ($query) {
    header("location:../hotpress.php");

  } else {
    echo "gagal";
  }
  }
?>