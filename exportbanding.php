<?php
// koneksi database
include "conf/conn.php";

// menampilkan data pegawai
$tglm = $_POST['tglm'];
$tgls = $_POST['tgls'];
?>
<html>
<head>
	<title>Absensi Karyawan</title>
</head>
<body>
	<?php
	// Fungsi header dengan mengirimkan raw data excel
	header("Content-type: application/vnd-ms-excel");

	// Mendefinisikan nama file ekspor "hasil-export.xls"
	header("Content-Disposition: attachment; filename=Perbandingan_".$tglm.".xls");
	?>
 
	<center>
		<h1>ABSENSI SKENER <br/> WIjaya Plywoods Indonesia</h1>
		<p>Tanggal <?php echo  $_POST['tglm'];?> - <?php echo  $_POST['tgls'];?>  </p>
	</center>
 
	<table border="1">
    <thead>
    <tr>
        <th><center>Tanggal</center></th>
        <th><center>Kode Pegawai</center></th>
        <th><center>Nama</center></th>
        <th><center>Jam Hadir</center></th>
        <th><center>Jam Pulang</center></th>
        <th><center>Jam Hadir (bulat)</center></th>
        <th><center>Jam Pulang (bulat)</center></th>
        <th><center>Jam Hadir(Hasil)</center></th>
        <th><center>Jam Pulang (Hasil)</center></th>
        <th><center>Ketr</center></th>
    </tr>
    </thead>
    <tbody>                                            
        <?php
		include "conf/conn.php";
        $query = mysqli_query($koneksi, "SELECT a.kodeabsen,ta.tanggal1,k.kodep,k.Nama,a.jamhadir,a.jampulang,a.jamhadir_bulat,a.jampulang_bulat,ta.jamhadir1,ta.jampulang1 FROM pegawai k LEFT JOIN absensi a ON k.kodep = a.kodep LEFT JOIN tabsen ta ON a.kodep=ta.kodep ORDER BY kodep");
                while ($row = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $row['kodep'];?></td>
			<td><?php echo $row['tanggal1'];?></td>
            <td><?php echo $row['Nama'];?></td>
            <td><?php echo $row['jamhadir'];?></td>
            <td><?php echo $row['jampulang'];?></td>
            <td><?php echo $row['jamhadir_bulat'];?></td>
            <td><?php echo $row['jampulang_bulat'];?></td>
            <td><?php echo $row['jamhadir1']?></td>
            <td><?php echo $row['jampulang1'];?></td>
        <?php 
		if(empty($row['jamhadir_bulat']AND$row['jampulang_bulat']) OR empty($row['jamhadir1']AND$row['jampulang1'])) {
			echo '<td>Tidak</td>';
			
		} else {
           if ($row['jamhadir_bulat']==$row['jamhadir1'] AND $row['jampulang_bulat']==$row['jampulang1']) {
				echo '<td>Ya</td>';
			} else {
				echo '<td>Tidak</td>';
			}
		}
        ?> 
		</tr>
        <?php } ?>		
		</tbody>                      
	</table>
</body>
</html>