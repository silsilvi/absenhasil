<?php
  session_start();
  include "conf/conn.php";
  if (!isset($_SESSION['login'])){
    echo "<script>location='login.php';</script>";
    exit();
  }
  if(!isset($_GET['edit'])){
    $query = mysqli_query($koneksi, "SELECT * FROM dryer");
?>

<!-- <?php 
include "conf/conn.php";
$koneksi = mysqli_connect("localhost", "root", "", "absenhasil1");
$query = "SELECT * FROM dryer ORDER BY tanggal DESC";
$result = mysqli_query($koneksi, $query);
?> -->

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

  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
 
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
            <i class="glyphicon glyphicon-briefcase"></i> <span>Absen</span>
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
      <li>
      <li class="treeview">
         <li><a href="kayumasuk.php"><i class="glyphicon glyphicon-book"></i> <span>Stok Kayu Masuk</span></a></li>
      </li>  
      <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Departemen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="active"><a href="kupasan.php"><i class="fa fa-circle-o"></i> Kupasan</a></li>
            <li><a href="dryer.php"><i class="fa fa-circle-o"></i> Dryer</a></li>
            <li><a href="tembel.php"><i class="fa fa-circle-o"></i> Tembel</a></li>
            <li><a href="hotpress.php"><i class="fa fa-circle-o"></i> Hotpress</a></li>
            <li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i> <span>Finishing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="dempul.php"><i class="fa fa-circle-o"></i> Dempul</a></li>
            <li><a href="pilihtriplek.php"><i class="fa fa-circle-o"></i> Pilih Triplek</a></li>
          </ul>
          </li>
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
      <h1><b>DEPARTEMEN DRYER</b></h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <button type="button" name="btntambahdryer"<a data-toggle="modal" data-target="#tambahdryer" class=" btn btn-primary text-white";> Tambah <i class="glyphicon glyphicon-plus"></i></a></button>
              <div class="card-body">
              <form action="exporttembel.php" method="POST">
              <div class="row">
              <div class="col-md-5"><b>Mulai</b>
              <div class="form-group">
              <input type="date" class="form-control" name="tglm">
              </div>
              </div>
              <div class="col-md-5"><b>Selesai</b>
              <div class="form-group">
             <input type="date" class="form-control" name="tgls">
           </div>
         </div>
		 <br>
          <div class="col-md-2">
              <button type="submit" class="btn btn-primary" name="print"> Export <i class="glyphicon glyphicon-print text-white"></i></button>
          </div> 
          </div>
          </form>
        </div>
            </div>
          <div class="box-body table-responsive">
          <table id="dryer" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <!-- <th><center>Tanggal</center></th> -->
                  <!-- <th><center>Batang</center></th>
                  <th><center>Lahan</center></th>
                  <th><center>Seri</center></th>
                  <th><center>Keterangan</center></th>
                  <th><center>Mesin</center></th> -->
                  <!-- <th><center>No</center></th> -->
                  <th><center>Tanggal</center></th>
                  <th><center>Dryer</center></th>
                  <th><center>Mesin</center></th>
                  <th><center>Panjang</center></th>
                  <th><center>Lebar</center></th>
                  <th><center>Tebal</center></th>
                  <th><center>Kwalitas</center></th>
                  <th><center>Jenis</center></th>
                  <th><center>Hasil</center></th>
                  <th><center>Kurang</center></th>
                  <th><center>Aksi</center></th>
                  <!-- <th><center>Aksi</center></th> -->
                </tr>
              </thead>
              <tbody>

                 <?php
                include "conf/conn.php";
                $query = mysqli_query($koneksi, "SELECT * FROM dryer");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                <tr>
                  <!-- <td><?php echo $row['no'];?></td> -->
                  <td><?php echo $row['tanggal'];?></td>
                  <td><?php echo $row['dryer'];?></td>
                  <td><?php echo $row['mesin'];?></td>
                  <td><?php echo $row['panjang'];?></td>
                  <td><?php echo $row['lebar'];?></td>
                  <td><?php echo $row['tebal'];?></td>
                  <td><?php echo $row['kw'];?></td>
                  <td><?php echo $row['jenis'];?></td>
                  <td><?php echo $row['hasil'];?></td>
                  <td><?php echo $row['kurang'];?></td>
                  <td>
                  <center>
                  <button class='btn btn-success btn-edit' style='margin-right:5px;' name='btneditdryer' data-id="<?php echo $row['no']?>" ><i class="glyphicon glyphicon-edit"></i></button>
                  <button class='btn btn-danger ' data-toggle='modal' data-target='#hapusdryer' data-href="pages/hapusdryer.php?no=<?php echo $row['no'];?>"><i class="glyphicon glyphicon-trash"></i>
                  </center>
                  </td>
                </tr>

                <?php } ?>

                </tbody>
                <!-- <tfoot>
            <tr>
                <th>tanggal</th>
                <th>bahankurang</th>
                <th>panjang</th>
                <th>lebar</th>
                <th>tebal</th>
                <th>kw</th>
                <th>jenis</th>
                <th>hasil</th>
            </tfoot> -->
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
<footer class="main-footer">
    <strong>Copyright &copy; 2019 PT. Wijaya Plywoods .</strong>
  </footer>
  
<!-- modal tambah dryer -->
        <div class="modal fade" id="tambahdryer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel"><center><b>TAMBAH DATA DRYER</b></center></h4>
            </div>
            <div class="modal-body">
              <form action="pages/tambahdryer.php" method="POST" enctype="multipart/form-data">
              <!-- <p style="background-color:#71D0FF;" ><b><u>Pemakaian Bahan</u></b></p> -->
              <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Dryer</label>
                <div class="col-sm-9">
                <select class="form-control" id="exampleFormControlSelect1" name="dryer">
                  <option>Dryer Pagi</option>
                  <option>Dryer Malam</option>
                  <option>Continues Pagi</option>
                </select> 
                </div>
                </div>
                <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Mesin</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="mesin" id="formGroupExampleInput" required="true" minlength="1" maxlength="20">
                  </div>
                </div>
                <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Panjang</label>
                <div class="col-sm-9">
                <select class="form-control" id="exampleFormControlSelect1" name="panjang">
                  <option>122</option>
                  <option>244</option>
                </select> 
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Lebar</label>
                <div class="col-sm-9">
                <select class="form-control" id="exampleFormControlSelect1" name="lebar">
                  <option>244</option>
                  <option>122</option>
                </select> 
                </div>
                </div>
                <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Tebal</label>
                  <div class="col-sm-9">
                    <input type="float" class="form-control" name="tebal" id="formGroupExampleInput" required="true" maxlength="12">
                  </div>
                </div>
                <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Kwalitas</label>
                <div class="col-sm-9">
                <select class="form-control" id="exampleFormControlSelect1" name="kw">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>af</option>
                  <option>jelek</option>
                </select> 
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Jenis</label>
                <div class="col-sm-9">
                <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                  <option>S</option>
                  <option>M</option>
                  <option>J</option>
                </select> 
                </div>
                </div>
                <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Hasil</label>
                  <div class="col-sm-9">
                    <input type="int" class="form-control" name="hasil" id="formGroupExampleInput" required="true" maxlength="12">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Kurang</label>
                  <div class="col-sm-9">
                    <input type="int" class="form-control" name="kurang" id="formGroupExampleInput" required="true" maxlength="12">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="btntambahdryer">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  <!-- end modal tambah dryer -->

 <!-- modal edit dryer -->
 <div class="modal fade" id="editdryer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel"><center><b>EDIT DATA DRYER</b></center></h4>
            </div>
            <div class="modal-body">
              <form action="pages/editdryer.php" method="POST" enctype="multipart/form-data">
              <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">No</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control txtno" name="no" id="formGroupExampleInput" required="true" minlength="1" maxlength="20">
                  </div>
                </div>
              <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Dryer</label>
                <div class="col-sm-9">
                <select class="form-control txtdryer" id="exampleFormControlSelect1" name="dryer">
                  <option>Dryer Pagi</option>
                  <option>Dryer Malam</option>
                  <option>Continues Pagi</option>
                </select> 
                </div>
                </div>
                <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Mesin</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control txtmesin" name="mesin" id="formGroupExampleInput" required="true" minlength="1" maxlength="20">
                  </div>
                </div>
                <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Panjang</label>
                <div class="col-sm-9">
                <select class="form-control txtpanjang" id="exampleFormControlSelect1" name="panjang">
                  <option>122</option>
                  <option>244</option>
                </select> 
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Lebar</label>
                <div class="col-sm-9">
                <select class="form-control txtlebar" id="exampleFormControlSelect1" name="lebar">
                  <option>244</option>
                  <option>122</option>
                </select> 
                </div>
                </div>
                <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Tebal</label>
                  <div class="col-sm-9">
                    <input type="float" class="form-control txttebal" name="tebal" id="formGroupExampleInput" required="true" maxlength="12">
                  </div>
                </div>
                <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Kwalitas</label>
                <div class="col-sm-9">
                <select class="form-control txtkw" id="exampleFormControlSelect1" name="kw">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>af</option>
                  <option>jelek</option>
                </select> 
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Jenis</label>
                <div class="col-sm-9">
                <select class="form-control txtjenis" id="exampleFormControlSelect1" name="jenis">
                  <option>S</option>
                  <option>M</option>
                  <option>J</option>
                </select> 
                </div>
                </div>
                <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Hasil</label>
                  <div class="col-sm-9">
                    <input type="int" class="form-control txthasil" name="hasil" id="formGroupExampleInput" required="true" maxlength="12">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Kurang</label>
                  <div class="col-sm-9">
                    <input type="int" class="form-control txtkurang" name="kurang" id="formGroupExampleInput" required="true" maxlength="12">
                  </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="btneditdryer">Edit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  <!-- end modal edit dryer -->

<!--modal hapus tembel-->
<div class="modal fade" id="hapusdryer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  </div>
  <!-- end modal hapus tembel -->
   </div>
  </div>

  <script type="text/javascript">
    //Hapus Data
    $(document).ready(function() {
        $('#hapusdryer').on('show.bs.modal', function(e) {
            $(this).find('.btn-hapus').attr('href', $(e.relatedTarget).data('href'));
        });
    });
  </script>
  <script type="text/javascript">
    function fileValidation(){
      var fileInput = document.getElementById('file');
      var filePath = fileInput.value;
      var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
      if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
      }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            document.getElementById('imagePreview').innerHTML = '<img style="width:50px;height:50px;padding-bottom: 5px;" src="'+e.target.result+'"/>';
          };
          reader.readAsDataURL(fileInput.files[0]);
        }
      }
    }
  </script>
  

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#dryer').DataTable();
  });
</script>

<!-- Javascript Filter -->
<!-- <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
</script> -->


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

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $('#dryer').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
</script>


<script>
   $(".btn-edit").click(function(e){
    var no = $(this).attr("data-id");
    $.ajax({
      "method"  : "get",
      "url"   : "dryer.php",
      "data"    : {
        "edit"      : true,
        "no"  : no,
      },
      "dataType"  : "json",
      "success" : function(e){
        $("#editdryer").modal();
        $(".txtno").val(e.no);
        $(".txtdryer").val(e.dryer);
        $(".txtmesin").val(e.mesin);
        $(".txtpanjang").val(e.panjang);
        $(".txtlebar").val(e.lebar);
        $(".txttebal").val(e.tebal);
        $(".txtkw").val(e.kw);
        $(".txtjenis").val(e.jenis);
        $(".txthasil").val(e.hasil);
        $(".txtkurang").val(e.kurang);
      }
    });
  });
  </script>

<script type="text/javascript">
    //Hapus Data
    $(document).ready(function() {
        $('#hapusdryer').on('show.bs.modal', function(e) {
            $(this).find('.btn-hapus').attr('href', $(e.relatedTarget).data('href'));
        });
    });
  </script>

</body>
</html>

<?php
  }
  if(isset($_GET['edit'])){
    $no = $_GET['no'];
    $sql = "SELECT * FROM dryer WHERE no='". $no ."'";
    $q = mysqli_query($koneksi, $sql);
    while($row=mysqli_fetch_assoc($q)){
      echo json_encode($row);
    }
  }
?>