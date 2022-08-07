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
<!-- kasih class layout-navbar-fixed di body untuk fixed navbar top -->
<body class="hold-transition sidebar-mini">
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
              <li class="breadcrumb-item"><a href="view-all-video.php">Data Video</a></li>
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

									$sql = "SELECT * FROM video WHERE id='$id'";
									// $sql = "SELECT * FROM foto, albumfoto WHERE foto.albumf_id=albumfoto.id_albumf";
									$query = mysqli_query($conn, $sql);

									if(mysqli_num_rows($query)){
										while($row = mysqli_fetch_assoc($query)){
											$url = $row['video_url'];
											$thumbnail = $row['thumbnail'];
											$idAlbum = $row['albumv_id'];
										}
									}
								}
              ?>

              <form class="form-horizontal" action="update-video.php" method="post" enctype="multipart/form-data">
                <div class="card-body pr-4 pl-4">
									<input type="hidden" name="id" value="<?= $id ?>">
									<input type="hidden" name="namathumbnail" value="<?= $thumbnail ?>">
									<div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="url_video">URL Video</label>
                    <div class="col-sm-10">
                      <input type="text" name="url_video" value="<?= $url ?>" class="form-control" id="url_video" placeholder="https://www.youtube.com/watch?v=GmG4X9PGOXs" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Thumbnail</label>
                    <div class="col-sm-10 custom-file">
                      <input type="file" name="thumbnail" value="datathumbnail/<?= $thumbnail ?>" class="custom-file-input form-label" id="thumbnail" onChange="loadfile(event)" required>
                      <label class="custom-file-label" for="thumbnail">Choose file</label>
                    </div>
                  </div>
									<div class="form-group row" id="thumbnail-row">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-10">
                      <img width="50%" height="250" src="datathumbnail/<?= $thumbnail ?>" id="preview" alt="Thumbnail" style="object-fit: cover;">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namaalbum" class="col-sm-2 col-form-label">Nama Album</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="namaalbum" id="namaalbum" required>
                        <option value="">---Select Album Name---</option>
												<?php
													$sql = "SELECT * FROM albumvideo ORDER BY namaalbum";
													$query = mysqli_query($conn, $sql);

                          if(mysqli_num_rows($query) > 0){
                            while($row = mysqli_fetch_assoc($query)){
															$sel = '';
															if($row['id_albumv'] == $idAlbum){
																$sel = 'selected';
															}
												?>
												<option value="<?= $row['id_albumv'] ?>" <?= $sel ?>><?= $row['namaalbum'] ?></option>
                        <?php
                            }
                          }
                        ?>
											</select>
                    </div>
                  </div>
                  <div class="row text-center mt-4">
                    <div class="col-sm-12">
											<button type="submit" name="submit" class="btn btn-info m-2">Submit</button>
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

	let output = document.getElementById('preview');

	const loadfile = (event) =>{
    output.src = URL.createObjectURL(event.target.files[0]);
  }

  let navLink = document.getElementById('nav6');
  navLink.classList.add('active');
</script>
</body>
</html>
