<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditabsen'])) {
  $kodep = $_POST['kodep'];
  $kodeabsen = $_POST['kodeabsen'];
  $jamhadir = $_POST['jamhadir'];
  $jampulang = $_POST['jampulang'];
  $izin = $_POST['izin'];
  $tgl1 = date("Y-m-d");
  $tanggal = date('Y-m-d', strtotime('-1 days', strtotime($tgl1)));
  $hasilkerja = $_POST['hasilkerja'];

  $query = mysqli_query($koneksi, "UPDATE tabsen SET kodep='$kodep',tanggal1='$tanggal',jamhadir1='$jamhadir',jampulang1='$jampulang',izin='$izin',hasilkerja='$hasilkerja' WHERE kodeabsen='$kodeabsen'");
  if ($query) {
    header("location:../absen.php");

  } else {
    echo "gagal";
  }
  }
?>