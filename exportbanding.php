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
        <th><center>Kode Pegawai</center></th>
		<th><center>Tanggal</center></th>
        <th><center>Nama</center></th>
        <th><center>Jam Hadir</center></th>
        <th><center>Jam Pulang</center></th>
        <th><center>Jam Hadir (bulat)</center></th>
        <th><center>Jam Pulang (bulat)</center></th>
        <th><center>Jam Hadir(Hasil)</center></th>
        <th><center>Jam Pulang (Hasil)</center></th>
		<th><center>Izin</center></th>
		<th><center>Telat</center></th>
		<th><center>Lembur</center></th>
		<th><center>PJ / Ketr</center></th>
		<th><center>Potongan</center></th>
		<th><center>Status</center></th>
    </tr>
    </thead>
    <tbody>                                            
        <?php
                include "conf/conn.php";
                $query = mysqli_query($koneksi, "SELECT a.kodeabsen,ta.tanggal1,k.kodep,k.Nama,a.jamhadir,a.jampulang,a.jamhadir_bulat,a.jampulang_bulat,ta.jamhadir1,ta.jampulang1,k.idjadwal,a.ketr,ta.izin,ta.potongan FROM pegawai k LEFT JOIN absensi a ON k.kodep = a.kodep LEFT JOIN tabsen ta ON a.kodep=ta.kodep ORDER BY kodep");
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
				  <td><?php echo $row['izin'];?></td>
                  <?php 
				  $cek_jadwal = mysqli_query($koneksi, "SELECT * FROM pegawai k JOIN tjadwal j ON k.idjadwal=j.id_jadwal WHERE kodep='$row[kodep]'");
				  $data_jadwal= mysqli_fetch_assoc($cek_jadwal);
				 
				  if(empty($row['jamhadir_bulat'] AND $row['jampulang_bulat']) OR empty($row['jamhadir1'] AND $row['jampulang1'])) {
					echo "<td></td>";
					echo "<td></td>";
					echo "<td>$row[ketr]</td>";
					echo "<td>$row[potongan]</td>";
					echo '<td><span>Tidak</span></td>';
				  } else {
					if ($row['jamhadir_bulat']==$row['jamhadir1'] AND $row['jampulang_bulat']==$row['jampulang1']) {
						  if ($row['jamhadir_bulat']>$data_jadwal['jam_masuk']) {
							$telat  = round((strtotime($row['jamhadir_bulat']) - strtotime($data_jadwal['jam_masuk']))/3600, 1);
							echo "<td>".$telat."</td>";
							if ($row['jampulang_bulat']>$data_jadwal['jam_pulang']) {
								  $lembur  = round((strtotime($row['jampulang_bulat']) - strtotime($data_jadwal['jam_pulang']))/3600, 1);
								  echo "<td>".$lembur."</td>";
							  } else {
								  echo "<td></td>";
							  }
						  } else {
							  echo "<td></td>";
							  if ($row['jampulang_bulat']>$data_jadwal['jam_pulang']) {
								  $lembur  = round((strtotime($row['jampulang_bulat']) - strtotime($data_jadwal['jam_pulang']))/3600, 1);
								  echo "<td>".$lembur."</td>";
							  } else {
								  echo "<td></td>";
							  }
						  }
						  echo "<td>$row[ketr]</td>";
						  echo "<td>$row[potongan]</td>";
						  echo '<td><span>Ya</span></td>';
					} else {
						echo "<td></td>";
						echo "<td></td>";
						echo "<td>$row[ketr]</td>";
						echo "<td></td>";
						echo '<td><span>Tidak</span></td>';
					
					}
				  }
                  ?>
                </tr>
                <?php } ?>	
		</tbody>                      
	</table>
</body>
</html>