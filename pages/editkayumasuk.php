<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btneditkayumasuk'])) {
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $seri = $_POST['seri'];
  $panjang = $_POST['panjang'];
  $jenis = $_POST['jenis'];
  $lahan = $_POST['lahan'];
  $banyak = $_POST['banyak'];
  $m3 = $_POST['m3'];
  $uang = $_POST['uang'];

  $query = mysqli_query($koneksi, "UPDATE detailkayumasuk SET nama='$nama',seri='$seri',panjang='$panjang',jenis='$jenis',lahan='$lahan',banyak='$banyak',m3='$m3',uang='$uang' WHERE no='$no'");
  if ($query) {
    header("location:../kayumasuk.php");

  } else {
    echo "gagal";
  }
  }
?>