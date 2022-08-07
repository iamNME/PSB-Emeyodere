<?php
  include '../../config/koneksi.php';
  session_start();
  if($_SESSION['status'] != 'login'){
    header('Location: ../index.php?pesan=belum_login');
  }

  include 'header.php';
?>
	
  <style>
		.form-group .col-sm-10{
			padding-left: 0;
			padding-right: 0;
		}
	</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  
  <?php
		if($_SESSION['level'] == "administrator"){
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
            <h1>Edit Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="view-album-foto.php">Data Album Foto</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <!-- <div class="card-header pr-4 pl-4">
              <h3 class="card-title">
                Tambah
              </h3>
            </div> -->
              <!-- /.card-header -->
              <!-- form start -->
							<?php
                if(isset($_GET['id'])){
									$id = $_GET['id'];

									$sql = "SELECT * FROM albumfoto WHERE id_albumf='$id'";
									$query = mysqli_query($conn, $sql);

									if(mysqli_num_rows($query)){
										while($row = mysqli_fetch_assoc($query)){
											$namaAlbum = $row['namaalbum'];
											$foto = $row['sampul_foto'];
										}
									}
								}
              ?>

              <form class="form-horizontal" action="update-album-foto.php" method="post" enctype="multipart/form-data">
                <div class="card-body pr-4 pl-4">
									<input type="hidden" name="id" value="<?= $id ?>">
									<input type="hidden" name="namafoto" value=<?= $foto?>>
                  <div class="form-group row">
                    <label for="namaalbum" class="col-sm-2 col-form-label">Nama Album</label>
                    <div class="col-sm-10">
                      <input type="text" name="namaalbum" value="<?= $namaAlbum ?>" class="form-control" id="namaalbum" placeholder="Nama Album Foto" required min="0" max="100">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10 custom-file">
                      <input type="file" name="foto" value="<?= $foto ?>" class="custom-file-input form-label" id="foto" onChange="loadfile(event)" required>
                      <label class="custom-file-label" for="foto">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-10">
                      <img width="50%" height="250" src="albumfoto/<?= $foto ?>" id="preview" alt="Foto" style="object-fit: cover;">
                    </div>
                  </div>
                  <div class="row text-center mt-4">
                    <div class="col-sm-12">
											<!-- class float-right -->
											<!-- <button type="reset" id="cancel-btn" class="btn btn-danger m-1">Cancel</button> -->
											<!-- <button type="reset" id="cancel-btn" class="btn btn-danger m-1">Cancel</button> -->
											<button type="submit" name="submit" class="btn btn-info m-1">Submit</button>
                    </div>
                  </div>
                	
                	<!-- /.card-footer -->
                </div>
						    <!-- /.card-body -->
              </form>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
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
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });

  const loadfile = (event) =>{
    let output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);
  }

  let navLink = document.getElementById('nav3');
  navLink.classList.add('active');
</script>
</body>
</html>
