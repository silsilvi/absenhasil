<?php
    session_start();
    include "conf/conn.php";
    if (!isset($_SESSION['login'])){
      echo "<script>location='login.php';</script>";
      exit();
    }
  if(!isset($_GET['edit'])){
     $query = mysqli_query($koneksi, "SELECT * FROM tabsen"); 
?>
     
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Absen Hasil</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AB</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ABSEN HASIL</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <li class="header">MENU</li>
      <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> <span>Pegawai</span></a></li>
      </li>
      <li>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Absen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="absen.php"><i class="fa fa-circle-o"></i>Absen Hasil</a></li>
            <li><a href="absensanner.php"><i class="fa fa-circle-o"></i>Absen Scanner</a></li>
          </ul>
        </li>
      <li><a href="perbandingan.php"><i class="glyphicon glyphicon-check"></i> <span>Perbandingan</span></a></li>
      </li>
      <li class="treeview">
         <li><a href="stok.php"><i class="glyphicon glyphicon-list"></i> <span>Stok</span></a></li>
      </li>
      <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Hasil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="kupasan.php"><i class="fa fa-circle-o"></i>Kupasan</a></li>
            <li><a href="dryer.php"><i class="fa fa-circle-o"></i> Dryer</a></li>
            <li><a href="tembel.php"><i class="fa fa-circle-o"></i> Tembel</a></li>
            <li><a href="hotpress.php"><i class="fa fa-circle-o"></i> Hotpress</a></li>
            <li><a href="finishing.php"><i class="fa fa-circle-o"></i> Finishing</a></li>
            <li><a href="lain.php"><i class="fa fa-circle-o"></i> Lain-lain</a></li>
          </ul>
        </li>
      <li class="treeview">
         <li><a href="report.php"><i class="glyphicon glyphicon-print"></i> <span>Report</span></a></li>
      </li>      
      <li class="header">SETTING</li>
        <li class="treeview">
          <li><a href="user.php"><i class="glyphicon glyphicon-user"></i> <span>User</span></a></li>
          <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> <span>Logout</span></a></li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><b>DATA ABSEN SCANNER</b></h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <form action="pages/hapusscanner.php" method="POST">
                <div class="col-md-2"><b>Mulai</b>
                 <div class="form-group">
                  <input type="date" class="form-control" name="tglm">
                </div>
              </div>
                <div class="col-md-2"><b>Selesai</b>
                  <div class="form-group">
                  <input type="date" class="form-control" name="tgls">
              </div>
            </div>
		          <br>
                <div class="col-md-2">    
                <button class='btn btn-danger ' data-toggle='modal' data-target='#hapusscan'><i class="glyphicon glyphicon-trash"></i>
              </div>
              <div>    
              </div>
             <button type="button" name="import"<a data-toggle="modal" data-target="#import" class=" btn btn-primary  text-white" style="display: inline-block; float:right;";> Import <i class="glyphicon glyphicon-import"></i></a></button>  
              </div>
          </form>       
            <div class="box-body table-responsive">
            <table id="absen" class="table table-bordered table-hover">
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
                  <th><center>Keterangan</center></th>
                  <th><center>Telat</center></th>
                  <th><center>Lembur</center></th>
                  <th><center>Jam Kerja</center></th>
                  
                </tr>
              </thead>
              <tbody>

                <?php
                include "conf/conn.php";
                $query = mysqli_query($koneksi, "SELECT * FROM absensi ORDER BY kodeabsen DESC");

                while ($row = mysqli_fetch_array($query)) {
                ?>

                <tr>
                <td><?php echo $row['kodeabsen'];?></td>
                  <td><?php echo $row['tanggal'];?></td>
                  <td><?php echo $row['kodep'];?></td>
                  <td><?php echo $row['Nama'];?></td>
                  <td><?php echo $row['jamhadir'];?></td>
                  <td><?php echo $row['jampulang'];?></td>
                  <td><?php echo $row['jamhadir_bulat'];?></td>
                  <td><?php echo $row['jampulang_bulat'];?></td>
                  <td><?php echo $row['ketr'];?></td>
                  <td><?php echo $row['telat'];?></td>
                  <td><?php echo $row['lembur'];?></td>
                  <td><?php echo $row['jamkerja'];?></td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Modal Import -->
<div style="margin-top:100px;" id="import" class="modal fade" role="dialog">
								<div class="modal-dialog">
								    <div class="modal-content">
										<div class="modal-header">
											  <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><center><b>Import Data Absen Scanner</b></center></h4>
										</div>
										<form action="" method="POST" enctype="multipart/form-data">
										    <div class="modal-body">
											    <div class="row">
												    <div class="col-md-12">
													<div class="col-md-12"><label>Pilih File CSV : </label></div>
													<div class="col-md-12"><input type="file" class="form-control" accept=".csv" name="file"></div>
													<br>
													</div>
												</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-success" name="Import">Import</button>
												</div>
										</form>
									</div>
								</div>
							</div>
<!-- /.Modal Import -->

<!--modal hapus pegawai-->
<div class="modal fade" id="hapusscan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">Apakah Anda Yakin ingin menghapus data ini?</div>
        <div class="modal-footer">
          <a class="btn btn-danger btn-hapus">Hapus</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal hapus pegawai -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 PT. Wijaya Plywoods .</strong>
  </footer>
  </div>
</div>

  <script type="text/javascript">
    //Hapus Data
    $(document).ready(function() {
        $('#hapusdata').on('show.bs.modal', function(e) {
            $(this).find('.btn-hapus').attr('href', $(e.relatedTarget).data('href'));
        });
    });

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#absen').DataTable();
  });
</script>


<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>

<?php
if(isset($_POST["Import"])){
		$filename=$_FILES["file"]["tmp_name"];		
		if($_FILES["file"]["size"] > 0){
		  	$file = fopen($filename, "r");
	        while(($getData = fgetcsv($file, 10000, ",")) !== FALSE){
				$sql = "INSERT into absensi (kodeabsen,tanggal,kodep,Nama,jamhadir,jampulang,jamhadir_bulat,jampulang_bulat,ketr,telat,lembur,jamkerja) 
				values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."')";
                $result = mysqli_query($koneksi, $sql);
					if(!isset($result)){	
						echo "<script type=\"text/javascript\">
								alert(\"Invalid File:Please Upload CSV File.\");
								window.location = \"absensanner.php\"
							  </script>";
					}else{
						  echo "<script type=\"text/javascript\">
							alert(\"CSV File has been successfully Imported.\");
							window.location = \"absensanner.php\"
							</script>";
					}
	        }
	         fclose($file);	
		}
}	 
  }
?>