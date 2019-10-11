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
          <th><center>Kode Absen</center></th>
                  <th><center>Tanggal</center></th>
                  <th><center>Kode Pegawai</center></th>
                  <th><center>Nama</center></th>
                  <th><center>Jam Hadir</center></th>
                  <th><center>Jam Pulang</center></th>
                  <th><center>Jam Hadir (bulat)</center></th>
                  <th><center>Jam Pulang (bulat)</center></th>
                  <th><center>Jam Hadir(Hasil)</center></th>
                  <th><center>Jam Pulang (Hasil)</center></th>
				  <th><center>Telat</center></th>
                  <th><center>Ketr</center></th>
    </tr>
    </thead>
    <tbody>                                            
        <?php 
          $query = mysqli_query($koneksi, "SELECT * FROM absensi INNER JOIN tabsen on absensi.kodep=tabsen.kodep WHERE tabsen.tanggal BETWEEN '$tglm' AND '$tgls'");
          while ($row = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $row['kodeabsen'] . "</td>";
            echo "<td>" . $row['tanggal'] . "</td>"; 
            echo "<td>" . $row['kodep'] . "</td>";
            echo "<td>" . $row['Nama'] . "</td>";
            echo "<td>" . $row['jamhadir'] . "</td>";
            echo "<td>" . $row['jampulang'] . "</td>";
            echo "<td>" . $row['jamhadir_bulat'] . "</td>";
            echo "<td>" . $row['jampulang_bulat'] . "</td>";
            echo "<td>" . $row['jamhadir'] . "</td>";
            echo "<td>" . $row['jampulang'] . "</td>";
			echo "<td>" . $row['telat'] . "</td>";
            if ($row['jamhadir_bulat']==$row['jamhadir'] && $row['jampulang_bulat']==$row['jampulang']) {
				echo '<td>Ya</td>';
            } else {
                echo '<td>Tidak</td>';
            }                     
				echo "</tr>";
          }                
        ?>              					            
		</tbody>                      
	</table>
</body>
</html>