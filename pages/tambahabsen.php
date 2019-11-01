<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahabsen'])) {
  $jamhadir = $_POST['jamhadir'];
  $jampulang = $_POST['jampulang'];
  $kodep = $_POST['kodep'];
  $izin = $_POST['izin'];
  $tgl1 = date("Y-m-d");
  $tanggal = date('Y-m-d', strtotime('-1 days', strtotime($tgl1)));
  $hasilkerja = $_POST['hasilkerja'];

  $query = mysqli_query($koneksi, "INSERT into tabsen (tanggal1,jamhadir1,jampulang1,kodep,izin,hasilkerja) VALUES ('$tanggal','$jamhadir','$jampulang',$kodep,'$izin','$hasilkerja')");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../absen.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan, Kode Sudah Terpakai");</script>';
    echo "<script>location='../absen.php';</script>";
  }
  }
?>