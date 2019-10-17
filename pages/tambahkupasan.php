<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahkupasan'])) {
  $tanggal = $_POST['tanggal'];
  $batang = $_POST['batang'];
  $lahan = $_POST['lahan'];
  $seri = $_POST['seri'];

  $tampil=mysqli_query($koneksi, "SELECT * FROM kupasan JOIN detailkayumasuk on kupasan.seri=detailkayumasuk.seri");
  $row=mysqli_fetch_assoc($tampil);
  if ($row['batang'] > $row['banyak']){
    echo '<script>alert("Stok kayu tidak mencukupi!");</script>';
    echo "<script>location='../kupasan.php';</script>";
  }
  else{
  $query = mysqli_query($koneksi, "INSERT into kupasan (tanggal,batang,lahan,seri) VALUES ('$tanggal','$batang','$lahan','$seri')");
  $koneksi->query("UPDATE detailkayumasuk SET banyak=banyak-$batang WHERE seri='$seri'");
  echo '<script>alert("Data Berhasil Ditambahkan!");</script>';
  echo "<script>location='../kupasan.php';</script>";
}
  }

?>