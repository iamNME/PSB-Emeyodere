<?php
  include '../../config/koneksi.php';
	include 'fungsi.php';
  session_start();
  // include 'header.php';

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
            <h1>Detail Berita</h1>
          </div>
					<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="view-all-berita.php">Data Berita</a></li>
              <li class="breadcrumb-item active">Detail Berita</li>
            </ol>
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
                  <thead></thead>
									<?php
										$id = $_GET['id'];

                    $sql = "SELECT * FROM berita WHERE id='$id'";
                    $query = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($query) > 0){
                      $no = 1;
                      while($row = mysqli_fetch_assoc($query)){
												$judul = $row['judul'];
												$gambar = $row['gambar'];
												$isi = $row['isi_berita'];
												$views = $row['dibaca'];
												$tanggal = date('Y-m-d', strtotime($row['tanggal_upload']));
									    }
                    }
                  ?>
                  <tbody>
										<tr>
                  	  <th>Judul Berita</th>
                  	  <td><?= $judul ?></td>
                  	</tr>
										<tr>
											<th>Gambar</th>
                  	  <td class="text-center">
												<img src="gambarberita/<?= $gambar ?>" alt="Gambar Headline" style="width: 70%; height: 300px; object-fit: cover">
											</td>
										</tr>
										<tr>
											<th>Isi Berita</th>
											<td><?= $isi ?></td>
										</tr>
										<tr>
											<th>Dibaca</th>
											<td><?= $views ?></td>
										</tr>
                    <tr>
											<th>Tanggal Upload</th>
                      <td><?= ubah_tanggal($tanggal, true) ?></td>
                    </tr>
                  
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
  let navLink = document.getElementById('nav7');
  navLink.classList.add('active');
</script>
</body>
</html>