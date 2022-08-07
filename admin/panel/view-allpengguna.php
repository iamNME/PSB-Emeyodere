<?php
  include '../../config/koneksi.php';
  session_start();
  if($_SESSION['status'] != 'login'){
    header('Location: ../index.php?pesan=belum_login');
  }
  
  include 'header.php';
?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <?php
    include 'nav_admin.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengguna</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Semua Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <?php
                      if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == 'hapus_sukses'){
                    ?>
									  	    <div class="alert alert-success alert-dismissible">
                	  	        <button type="button" class="close" data-dismiss="alert">&times;</button>
                	  	        <b>Data Berhasil</b> dihapus dari dalam database
                	  	    </div>
                    <?php
                        }
                      }
                    ?>
                    <a href="tambah-pengguna.php" class="btn btn-success" style="margin-bottom: 3.6rem;"><i class="fa fa-plus" style="font-size: 14px; margin-right: 5px;"></i>Tambah Pengguna</a>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    $sql = "SELECT * FROM admin";
                    $query = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($query) > 0){
                      $no = 1;
                      while($row = mysqli_fetch_assoc($query)){
                  ?>

                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $row['username'] ?></td>
                      <td><?= $row['password'] ?></td>
                      <td><?= $row['level'] ?></td>
                      <td style="text-align: center">
                        <a href="edit-pengguna.php?id=<?= $row['id'] ?>" class="btn btn-primary m-1"><i class="fa fa-pen"></i></a>
                        <a href="hapus-pengguna.php?id=<?= $row['id'] ?>" class="btn btn-danger m-1"><i class="fa fa-trash" style="font-size: 19px"></i></a>
                      </td>
                    </tr>
                  <?php
                      }
                    }
                  ?>
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div> -->
    <strong>Copyright &copy; 2021 <a href="#">MTS Emeyodere</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  let navLink = document.getElementById('nav2');
  navLink.classList.add('active');
</script>
</body>
</html>