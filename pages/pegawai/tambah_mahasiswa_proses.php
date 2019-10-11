<?php
include "../../conf/conn.php";
if($_POST)
{
$kodep = $_POST['kodep'];
$Nama = $_POST['Nama'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$notelp = $_POST['notelp'];
$kodej = $_POST['kodej'];
$query = ("INSERT INTO pegawai(kodep,Nama,alamat,jeniskelamin,notelp,kodej) VALUES ('','".$nim."','".$Nama."','".$alamat."','".$jeniskelamin."','".$notelp."','".$kodej."')");
if(!mysql_query($query)){
die(mysql_error);
}else{
echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="../../index.php"</script>';
}
}
?>