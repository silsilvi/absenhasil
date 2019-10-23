<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditpegawai'])) {
  $kodep = strtoupper($_POST['kodep']);
  $Nama = $_POST['Nama'];
  $alamat = $_POST['alamat'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $notelp = $_POST['notelp'];
  $kodej = strtoupper($_POST['kodej']);
  $idjadwal = strtoupper($_POST['idjadwal']);

  $query = mysqli_query($koneksi, "UPDATE PEGAWAI SET kodep='$kodep',Nama='$Nama',alamat='$alamat',jeniskelamin='$jeniskelamin',notelp='$notelp',kodej='$kodej',idjadwal='$idjadwal' WHERE kodep='$kodep'");
  if ($query) {
    header("location:../index.php");

  } else {
    echo "gagal";
  }
  }
?>