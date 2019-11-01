<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditabsen'])) {
  $kodeabsen = $_POST['kodeabsen'];
  $kodep = $_POST['kodep'];
  $jamhadir1 = $_POST['jamhadir1'];
  $jampulang1 = $_POST['jampulang1'];


  $query = mysqli_query($koneksi, "UPDATE tabsen SET kodep='$kodep',tanggal1= now(),jamhadir1='$jamhadir1',jampulang1='$jampulang1' WHERE kodeabsen='$kodeabsen'");
  if ($query) {
    header("location:../absen.php");

  } else {
    echo "gagal";
  }
  }
?>