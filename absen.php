<?php
  include "conf/conn.php";
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
      <li class="treeview">
      <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> <span>Pegawai</span></a></li>
      </li>
      <li class="treeview">
         <li><a href="absen.php"><i class="glyphicon glyphicon-briefcase"></i> <span>Absen</span></a></li>
      </li>
      <li class="treeview">
         <li><a href="perbandingan.php"><i class="glyphicon glyphicon-file"></i> <span>Perbandingan</span></a></li>
      </li>
      <li class="treeview">
         <li><a href="stok.php"><i class="glyphicon glyphicon-list"></i> <span>Stok</span></a></li>
      </li>
      <li class="treeview">
         <li><a href="hasil.php"><i class="glyphicon glyphicon-pencil"></i> <span>Hasil</span></a></li>
      </li>  
      <li class="treeview">
         <li><a href="report.php"><i class="glyphicon glyphicon-print"></i> <span>Report</span></a></li>
      </li>      
      <li class="header">SETTING</li>
        <li class="treeview">
          <li><a href="user.php"><i class="glyphicon glyphicon-user"></i> <span>User</span></a></li>
          <li><a href="pages/logout_process.php"><i class="glyphicon glyphicon-lock"></i> <span>Logout</span></a></li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><b>DATA ABSEN</b></h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <button type="button" name="btntambahabsen"<a data-toggle="modal" data-target="#tambahabsen" class=" btn btn-primary  text-white";> Tambah <i class="glyphicon glyphicon-plus"></i></a></button>
              <a href="laporan.php" class="btn btn-succes shadow-sm text-white" style="display: inline-block; float:right;"> Report
              <i class="glyphicon glyphicon-print text-white"></i>
              </a>
            </div>
          <div class="box-body table-responsive">
            <table id="absen" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th><center>kode Absen</center></th>
                  <th><center>Kode Pegawai</center></th>
                  <th><center>Nama</center></th>
                  <th><center>Tanggal</center></th>
                  <th><center>Jam Hadir</center></th>
                  <th><center>Jam Pulang</center></th>
                  
                </tr>
              </thead>
              <tbody>

                <?php
                include "conf/conn.php";
                $query = mysqli_query($koneksi, "SELECT * FROM pegawai join tabsen on pegawai.kodep = tabsen.kodep ORDER BY kodeabsen DESC");

                while ($row = mysqli_fetch_array($query)) {
                ?>

                <tr>
                  <td><?php echo $row['kodeabsen'];?></td>
                  <td><?php echo $row['kodep'];?></td>
                  <td><?php echo $row['Nama'];?></td>
                  <td><?php echo $row['tanggal'];?></td>
                  <td><?php echo $row['jamhadir'];?></td>
                  <td><?php echo $row['jampulang'];?></td>
                  
                  <td>
                  <center>
                  <button class='btn btn-success btn-edit' style='margin-right:5px;' name='btneditabsen' data-id="<?php echo $row['kodeabsen']?>" data-nama="<?php echo $row['kodeabsen']?>"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class='btn btn-danger ' data-toggle='modal' data-target='#hapusabsen' data-href="pages/hapusabsen.php?kodeabsen=<?php echo $row['kodeabsen'];?>"><i class="glyphicon glyphicon-trash"></i>
                  </center>
                  </td>
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
<!-- modal tambah absen -->
        <div class="modal fade" id="tambahabsen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel"><center><b>TAMBAH DATA ABSEN</b></center></h4>
            </div>
            <div class="modal-body">
              <form action="pages/tambahabsen.php" method="POST" enctype="multipart/form-data">
              <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Kode Pegawai</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control" name="kodep" id="formGroupExampleInput" required="true" minlength="1" maxlength="50">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Jam Hadir</label>
                  <div class="col-sm-7">
                    <input type="time" class="form-control" name="jamhadir" id="formGroupExampleInput" required="true" minlength="1" maxlength="50">
                  </div>
                </div>
                <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Jam Pulang</label>
                <div class="col-sm-7">
                <input type="time" class="form-control" name="jampulang" id="formGroupExampleInput" required="true" minlength="1" maxlength="50">
                </div>
                </div>               
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="btntambahabsen">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  <!-- end modal tambah absen -->

 <!-- modal edit absen -->
 <div class="modal fade" id="editabsen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel"><center><b>EDIT DATA ABSEN</b></center></h4>
            </div>
            <div class="modal-body">
              <form action="pages/editabsen.php" method="POST" enctype="multipart/form-data">
              <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Kode Pegawai</label>
                  <div class="col-sm-9">
                    <input type="int" class="form-control txtkodep" name="kodep" id="formGroupExampleInput" required="true" minlength="1" maxlength="20">
                    <input type="hidden" class="form-control txtkodeabsen" name="kodeabsen" id="formGroupExampleInput" required="true" minlength="1" maxlength="20">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Jam Hadir</label>
                  <div class="col-sm-9">
                    <input type="time" class="form-control txtjamhadir" name="jamhadir" id="formGroupExampleInput" required="true" minlength="1" maxlength="50">
                  </div>
                </div>
                <div class="form-group row">
                <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Jam Pulang</label>
                <div class="col-sm-9">
                <input type="time" class="form-control txtjampulang" name="jampulang" id="formGroupExampleInput" required="true" minlength="1" maxlength="50">
                </div>
                </div>           
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="btneditabsen">Edit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
     </div>    
  <!-- end modal edit absen -->

<!--modal hapus absen-->
<div class="modal fade" id="hapusabsen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  <!-- end modal hapus absen -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 PT. Wijaya Plywoods .</strong>
  </footer>
   </div>
  </div>



  <script type="text/javascript">
    //Hapus Data
    $(document).ready(function() {
        $('#hapusabsen').on('show.bs.modal', function(e) {
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

<script>
  $(".btn-edit").click(function(e){
    var kodeabsen = $(this).attr("data-id");
    $.ajax({
      "method"  : "get",
      "url"   : "absen.php",
      "data"    : {
        "edit"      : true,
        "kodeabsen"  : kodeabsen,
      },
      "dataType"  : "json",
      "success" : function(e){
        $("#editabsen").modal();
        $(".txtkodeabsen").val(e.kodeabsen);
        $(".txtkodep").val(e.kodep);
        $(".txtjamhadir").val(e.jamhadir);
        $(".txtjampulang").val(e.jampulang);

      }
    });
  });
  </script>

<script type="text/javascript">
    //Hapus Data
    $(document).ready(function() {
        $('#hapusabsen').on('show.bs.modal', function(e) {
            $(this).find('.btn-hapus').attr('href', $(e.relatedTarget).data('href'));
        });
    });
  </script>

</body>
</html>

<?php
  }
  if(isset($_GET['edit'])){
    $kodeabsen = $_GET['kodeabsen'];
    $sql = "SELECT * FROM tabsen WHERE kodeabsen='". $kodeabsen ."'";
    $q = mysqli_query($koneksi, $sql);
    while($row=mysqli_fetch_assoc($q)){
      echo json_encode($row);
    }
  }
?>