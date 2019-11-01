<?php
   include "conf/conn.php";
   $tglm = $_POST['tglm'];
   header('Content-Type: text/csv; charset=utf-8');  
   header('Content-Disposition: attachment; filename=Absensi_'.$tglm.'.csv');  
   $output = fopen("php://output", "w");  
   $query = mysqli_query($koneksi, "SELECT a.kodeabsen,ta.tanggal1,k.kodep,k.Nama,a.jamhadir,a.jampulang,a.jamhadir_bulat,a.jampulang_bulat,ta.jamhadir1,ta.jampulang1,ta.izin,k.idjadwal,a.ketr,ta.potongan FROM pegawai k LEFT JOIN absensi a ON k.kodep = a.kodep LEFT JOIN tabsen ta ON a.kodep=ta.kodep ORDER BY kodep");
   while ($row = mysqli_fetch_assoc($query)) 
   {  
        fputcsv($output,$row);  
   }  
   fclose($output);        
?>