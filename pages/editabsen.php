<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditabsen'])) {
  $kodep = $_POST['kodep'];
  $kodeabsen = $_POST['kodeabsen'];
  $jamhadir = $_POST['jamhadir'];
  $jampulang = $_POST['jampulang'];


  $query = mysqli_query($koneksi, "UPDATE tabsen SET kodep='$kodep',tanggal= now(),jamhadir='$jamhadir',jampulang='$jampulang' WHERE kodeabsen='$kodeabsen'");
  if ($query) {
    header("location:../absen.php");

  } else {
    echo "gagal";
  }
  }
?>