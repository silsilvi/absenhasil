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
		<h1>LAPORAN HASIL VENEER BASAH <br/> Wijaya Plywoods Indonesia</h1>
		<p>Tanggal <?php echo  $_POST['tglm'];?> - <?php echo  $_POST['tgls'];?>  </p>
	</center>
 
	<table border="1">
    <thead>
                <tr>
                  <th><center>Tanggal</center></th>
                  <th><center>Batang</center></th>
                  <th><center>Lahan</center></th>
                  <th><center>Seri</center></th>
                  <th><center>Keterangan</center></th>
                  <th><center>Mesin</center></th>
                  <th><center>Panjang</center></th>
                  <th><center>Lebar</center></th>
                  <th><center>Tebal</sup></center></th>
                  <th><center>Kw</center></th>
                  <th><center>Jenis</center></th>
                  <th><center>Hasil</center></th>
                </tr>
    </thead>
    <tbody>                                            
        <?php 
        $query = mysqli_query($koneksi, "SELECT * FROM kupasan WHERE kupasan.tanggal BETWEEN '$tglm' AND '$tgls'");
        while ($row = mysqli_fetch_array($query)) {
          $semuadata[]=$row;
            echo "<tr>";
            echo "<td>" . $row['tanggal'] . "</td>";
            echo "<td>" . $row['batang'] . "</td>"; 
            echo "<td>" . $row['lahan'] . "</td>";
            echo "<td>" . $row['seri'] . "</td>";
            echo "<td>" . $row['ket'] . "</td>";
            echo "<td>" . $row['mesin'] . "</td>";
            echo "<td>" . $row['panjang'] . "</td>";
            echo "<td>" . $row['lebar'] . "</td>";
            echo "<td>" . $row['tebal'] . "</td>";
            echo "<td>" . $row['kw'] . "</td>";
            echo "<td>" . $row['jenis'] . "</td>";
            echo "<td>" . $row['hasil'] . "</td>";
            }
            $totalkw1 = 0;
            $totalkw2= 0;
            $totalkw3 = 0;
            foreach ($semuadata as $seri => $value) {
            $totalkw1+=$value['kw'];
            $totalkw2+=$value['kw'];
            $totalkw3+=$value['kw'];}
            ?>
            <tr style="font-weight: bold;">
            <td colspan="11">Total Kw 1 :</td>
            <td><?php echo $totalkw1;?></td></tr>

            <tr style="font-weight: bold;">
            <td colspan="11">Total Kw 2 :</td>
            <td><?php echo $totalkw2;?></td></tr>

            <tr style="font-weight: bold;">
            <td colspan="11">Total Kw 3 :</td>
            <td><?php echo $totalkw3;?></td>
            </tr>
        </tr>
		</tbody>                      
	</table>
</body>
</html>