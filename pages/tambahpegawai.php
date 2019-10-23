<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahpegawai'])) {
  $kodep = strtoupper($_POST['kodep']);
  $Nama = $_POST['Nama'];
  $alamat = $_POST['alamat'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $notelp = $_POST['notelp'];
  $kodej = strtoupper($_POST['kodej']);
  $idjadwal = strtoupper($_POST['idjadwal']);

  $query = mysqli_query($koneksi, "INSERT into pegawai (kodep,Nama,alamat,Jeniskelamin,notelp,kodej,idjadwal) VALUES ('$kodep','$Nama','$alamat','$jeniskelamin',$notelp,$kodej,$idjadwal)");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../index.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan, Kode Sudah Terpakai");</script>';
    echo "<script>location='../index.php';</script>";
  }
  }
?>