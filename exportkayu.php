<?php
// koneksi database
include "conf/conn.php";

// menampilkan data pegawai
$semuadata=array();
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
	header("Content-Disposition: attachment; filename=stokkayumasuk_".$tglm.".xls");
	?>
 
	<center>
		<h1>LAPORAN STOK KAYU MASUK <br/> Wijaya Plywoods Indonesia</h1>
		<p>Tanggal <?php echo  $_POST['tglm'];?> - <?php echo  $_POST['tgls'];?>  </p>
	</center>
 
	<table border="1">
    <thead>
                <tr>
                  <th><center>No</center></th>
                  <th><center>Tanggal</center></th>
                  <th><center>Nama</center></th>
                  <th><center>Seri</center></th>
                  <th><center>Panjang</center></th>
                  <th><center>Jenis</center></th>
                  <th><center>Lahan</center></th>
                  <th><center>Banyak</center></th>
                  <th><center>m<sup>3</sup></center></th>
                  <th><center>Uang</center></th>
                </tr>
    </thead>
    <tbody>                                            
        <?php 
        $query = mysqli_query($koneksi, "SELECT * FROM detailkayumasuk WHERE detailkayumasuk.tanggal BETWEEN '$tglm' AND '$tgls'");
        while ($row = mysqli_fetch_array($query)) {
          $semuadata[]=$row;
            echo "<tr>";
            echo "<td>" . $row['no'] . "</td>";
            echo "<td>" . $row['tanggal'] . "</td>"; 
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['seri'] . "</td>";
            echo "<td>" . $row['panjang'] . "</td>";
            echo "<td>" . $row['jenis'] . "</td>";
            echo "<td>" . $row['lahan'] . "</td>";
            echo "<td>" . $row['banyak'] . "</td>";
            echo "<td>" . $row['m3'] . "</td>";
            echo "<td>" . $row['uang'] . "</td>";
            }
            $grandbanyak = 0;
            $grandm3 = 0;
            $granduang = 0;
            foreach ($semuadata as $seri => $value) {
            $grandbanyak+=$value['banyak'];
            $grandm3+=$value['m3'];
            $granduang+=$value['uang'];}
            ?>

          <tr style="font-weight: bold;">
          <td colspan="7">Total</td>
          <td><?php echo $grandbanyak;?></td>
          <td><?php echo $grandm3;?></td>
          <!-- <td><?php echo $granduang;?></td> -->
          <?php echo "<td> Rp. " . number_format($granduang) . "</td>"?>
          </tr>
		</tbody>                      
	</table>
</body>
</html>