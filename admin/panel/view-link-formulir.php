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
    if($_SESSION['level'] == 'administrator'){
			include 'nav_admin.php';
		}else{
			include 'nav_kepsek.php';
		}
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Link Formulir</h1>
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
              <!-- <div class="card-header">
                <h3 class="card-title">Data Semua Berita</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
										<tr>
											<th>No</th>
											<th>Link Formulir</th>
											<th>Action</th>
										</tr>
									</thead>
                  <tbody>
										<?php
                  	  $sql = "SELECT * FROM linkf";
                  	  $query = mysqli_query($conn, $sql);

                  	  if(mysqli_num_rows($query) > 0){
                  	    $no = 1;
                  	    while($row = mysqli_fetch_assoc($query)){
										?>
                    <tr>
											<td><?= $no++ ?></td>
											<td>
												<a href="<?= $row['url_formulir'] ?>" target="_blank"><?= $row['url_formulir'] ?></a>
											</td>
											<!-- <td><?= $row['url_formulir'] ?></td> -->
											<td style="text-align: center">
                        <a href="edit-link-formulir.php?id=<?= $row['id'] ?>" class="btn btn-primary m-1"><i class="fa fa-pen"></i></a>
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

  let navLink = document.getElementById('nav8');
  navLink.classList.add('active');
</script>
</body>
</html>