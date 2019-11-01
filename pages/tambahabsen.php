<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahabsen'])) {
  $jamhadir = $_POST['jamhadir'];
  $jampulang = $_POST['jampulang'];
  $kodep = $_POST['kodep'];

  $query = mysqli_query($koneksi, "INSERT into tabsen (tanggal,jamhadir,jampulang,kodep) VALUES (now(),'$jamhadir','$jampulang',$kodep)");
  $query = mysqli_query($koneksi, "UPDATE detailkayumasuk t1 
INNER JOIN kupasan t2 ON (t2.seri=t1.seri AND t2.seri='seri'
SET t1.banyak = t1.banyak - t2.batang");

  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../absen.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan, Kode Sudah Terpakai");</script>';
    echo "<script>location='../absen.php';</script>";
  }
  }
?>