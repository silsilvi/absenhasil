<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditpilihtriplek'])) {
  $no = $_POST['no'];
  $kerja = $_POST['kerja'];
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $tebal = $_POST['tebal'];
  $kw = $_POST['kw'];
  $jenis = $_POST['jenis'];
  $hasil = $_POST['hasil'];


  $query = mysqli_query($koneksi, "UPDATE pilihtriplek SET kerja='$kerja',panjang='$panjang',lebar='$lebar',tebal='$tebal',kw='$kw',jenis='$jenis',hasil='$hasil' WHERE no='$no'");
  if ($query) {
    header("location:../pilihtriplek.php");

  } else {
    echo "gagal";
  }
  }
?>