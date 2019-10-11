<?php 
    include 'conf/conn.php';  
    $tglm = $_POST['tglm'];
    $tgls = $_POST['tgls'];
    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");
     
    // membuat nama file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=absen_hasil".$tglm.".xls");
?>

<center>
<h1>ABSENSI HASIL<br> Wijaya Plywoods Indonesia</h1>
<p>Tanggal<br><?php echo $tglm?> - <?php echo $tgls;?></p>
</center>
<table border="1">
    <tr>
    <th><center>Tanggal</center></th>
    <th><center>Kode Pegawai</center></th>
    <th><center>Nama</center></th>
    <th><center>Jam Masuk</center></th>
    <th><center>Jam Keluar</center></th>
    </tr>
    <?php 
      
    if (isset($_POST['print'])) {
    
    $query = mysqli_query($koneksi,"SELECT * from pegawai join tabsen on pegawai.kodep = tabsen.kodep WHERE tanggal BETWEEN '$tglm' AND '$tgls'");
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
    <td><?php echo $row['tanggal'];?></td>
    <td><?php echo $row['kodep'];?></td>
    <td><?php echo $row['Nama'];?></td>
    <td><?php echo $row['jamhadir'];?></td>
    <td><?php echo $row['jampulang'];?></td>
    </tr>
<?php
}
}
?>
</table>