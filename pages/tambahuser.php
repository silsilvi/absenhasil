<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahuser'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($koneksi, "INSERT into tlogin (username,password) VALUES ('$username','$password')");
  if ($query) {
    echo '<script>alert("Data Telah Ditambahkan!");</script>';
    echo "<script>location='../user.php';</script>";
  } else {
    echo '<script>alert("Data Belum Tersimpan, Kode Sudah Terpakai");</script>';
    echo "<script>location='../user.php';</script>";
  }
  }
?>