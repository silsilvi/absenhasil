<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA PEGAWAI
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_pegawai" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="pegawai" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>kode Pegawai</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jenis kelamin</th>
                  <th>No telp</th>
                  <th>Kode Jabatan</th>
                  <th>ID Jadwal</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "conf/conn.php";
                $no=0;
                $query=mysql_query("SELECT * FROM pegawai ORDER BY kodep DESC");
                while ($row=mysql_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $row['kodep'];?></td>
                  <td><?php echo $row['Nama'];?></td>
                  <td><?php echo $row['alamat'];?></td>
                  <td><?php echo $row['jeniskelamin'];?></td>
                  <td><?php echo $row['notelp'];?></td>
                  <td><?php echo $row['kodej'];?></td>
                  <td><?php echo $row['idjadwal'];?></td>
                  <td>
                    <a href="index.php?page=ubah_pegawai&id=<?=$row['kodep'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/pegawai/hapus_pegawai.php?id=<?=$row['kodep'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
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
<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#pegawai').DataTable();
  });
</script>