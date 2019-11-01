<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditdempul'])) {
  $no = $_POST['no'];
  $bahankurang = $_POST['bahankurang'];
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $tebal = $_POST['tebal'];
  $kw = $_POST['kw'];
  $jenis = $_POST['jenis'];
  $hasil = $_POST['hasil'];


  $query = mysqli_query($koneksi, "UPDATE dempul SET bahankurang='$bahankurang',panjang='$panjang',lebar='$lebar',tebal='$tebal',kw='$kw',jenis='$jenis',hasil='$hasil' WHERE no='$no'");
  if ($query) {
    header("location:../dempul.php");

  } else {
    echo "gagal";
  }
  }
?>