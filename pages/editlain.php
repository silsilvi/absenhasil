<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditlain'])) {
  $no = $_POST['no'];
  $kegiatan = $_POST['kegiatan'];
  $keterangan = $_POST['keterangan'];
  $kodep = $_POST['kodep'];
  $pulang = $_POST['pulang'];
  $potongan = $_POST['potongan'];

  $query = mysqli_query($koneksi, "UPDATE lain SET kegiatan='$kegiatan',keterangan='$keterangan',kodep='$kodep',pulang='$pulang',potongan='$potongan' WHERE no='$no'");
  if ($query) {
    header("location:../lain.php");

  } else {
    echo "gagal";
  }
  }
?>