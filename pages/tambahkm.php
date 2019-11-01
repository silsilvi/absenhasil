<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahkm'])) {
  $nama = $_POST['nama'];
  $seri = $_POST['seri'];
  $panjang = $_POST['panjang'];
  $jenis = $_POST['jenis'];
  $lahan = $_POST['lahan'];
  $banyak = $_POST['banyak'];
  $m3 = $_POST['m3'];
  $uang = $_POST['uang'];

  $query = mysqli_query($koneksi, "INSERT into kayumasuk (tanggal,nama,seri,panjang,jenis,lahan,banyak,m3,uang) VALUES (now(),'$nama','$seri','$panjang',$jenis,$lahan,$banyak,$m3,$uang)");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../kayumasuk.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan, Kode Sudah Terpakai");</script>';
    echo "<script>location='../kayumasuk.php';</script>";
  }
  }
?>