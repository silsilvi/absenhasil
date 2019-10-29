<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahlain'])) {
  $kegiatan = $_POST['kegiatan'];
  $keterangan = $_POST['keterangan'];
  $kodep = $_POST['kodep'];
  $masuk = $_POST['masuk'];
  $pulang = $_POST['pulang'];
  $potongan = $_POST['potongan'];

  $query = mysqli_query($koneksi, "INSERT into lain (tanggal,kegiatan,keterangan,kodep,masuk,pulang,potongan) VALUES (now(),'$kegiatan','$keterangan','$kodep','$masuk','$pulang','$potongan')");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../lain.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan");</script>';
    echo "<script>location='../lain.php';</script>";
  }
  }
?>