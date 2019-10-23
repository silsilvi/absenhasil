<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahstok'])) {
  $jeniskayu = $_POST['jeniskayu'];
  $jumlah = $_POST['jumlah'];

  $query = mysqli_query($koneksi, "INSERT into stok (tanggal,jeniskayu,jumlah) VALUES (now(),'$jeniskayu','$jumlah')");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../stok.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan, Kode Sudah Terpakai");</script>';
    echo "<script>location='../stok.php';</script>";
  }
  }
?>