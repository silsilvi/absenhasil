<?php
  session_start();
  include "../conf/conn.php";
  if (isset($_POST['btntambahkupasan'])) {
  $tanggal = $_POST['tanggal'];
  $batang = $_POST['batang'];
  $lahan = $_POST['lahan'];
  $seri = $_POST['seri'];
  $ket = $_POST['ket'];
  $mesin = $_POST['mesin'];
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $tebal = $_POST['tebal'];
  $kw = $_POST['kw'];
  $jenis = $_POST['jenis'];
  $hasil = $_POST['hasil'];

  $tampil=mysqli_query($koneksi, "SELECT * FROM kupasan JOIN detailkayumasuk on kupasan.seri=detailkayumasuk.seri");
  $row=mysqli_fetch_assoc($tampil);
  // if ($row['batang'] > $row['banyak']){
  if (($row['banyak'] < 0) AND ($row['batang'] > $row['banyak'])){
    echo '<script>alert("Stok kayu tidak mencukupi!");</script>';
    echo "<script>location='../kupasan.php';</script>";
  }
  else{
  $query = mysqli_query($koneksi, "INSERT into kupasan (tanggal,batang,lahan,seri,ket,mesin,panjang,lebar,tebal,kw,jenis,hasil) VALUES ('$tanggal','$batang','$lahan','$seri','$ket','$mesin','$panjang','$lebar','$tebal','$kw','$jenis','$hasil')");
  $koneksi->query("UPDATE detailkayumasuk SET banyak=banyak-$batang WHERE seri='$seri'");
  echo '<script>alert("Data Berhasil Ditambahkan!");</script>';
  echo "<script>location='../kupasan.php';</script>";
}
  }

?>