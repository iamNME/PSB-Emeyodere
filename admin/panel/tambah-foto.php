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
		.hidden{
			display: none;
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
            <h1>Tambah Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="view-all-foto.php">Data Foto</a></li>
              <li class="breadcrumb-item active">Tambah Data</li>
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
    					  $namaAlbum = $foto = "";
					
    					  if($_SERVER['REQUEST_METHOD'] == "POST"){
									$id = $_POST['id'];
                  $namaAlbum = $_POST['namaalbum'];

                  $rand = rand();
                  $ekstensi = array('jpeg', 'jpg', 'png');
                  $filename = $_FILES['foto']['name'];
                  $size = $_FILES['foto']['size'];
                  $ext = pathinfo($filename, PATHINFO_EXTENSION);

                  if($size < 2048000 && in_array($ext, $ekstensi)){
                    $fotoname = $rand.'_'.$filename;
                    move_uploaded_file($_FILES['foto']['tmp_name'], 'datafoto/'.$fotoname);
                    
                    $sql = "INSERT INTO foto (id, albumf_id, foto) VALUES ('$id', '$namaAlbum', '$fotoname')";
                    $query = mysqli_query($conn, $sql);
                    if($query){
              ?>
                      <div class="container pl-4 pr-3 pt-4">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <b>Data Berhasil</b> ditambahkan ke dalam database
                        </div>
                      </div>
              <?php
                    }else{
              ?>
                      <div class="container pl-4 pr-3 pt-4">
                        <div class="alert alert-danger alert-dismissible">
                            <b>Data Tidak Berhasil</b> ditambahkan ke dalam database
                        </div>
                      </div>
              <?php
                    }
                  }else{
              ?>
                    <div class="container pl-4 pr-3 pt-4">
                        <div class="alert alert-danger alert-dismissible">
                            <strong>Ukuran File</strong> &sol; <strong>Tipe File</strong> tidak sesuai
                        </div>
                      </div>
              <?php
                  }
                }
              ?>

              <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                <div class="card-body pr-4 pl-4">
									<input type="hidden" name="id">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10 custom-file">
                      <input type="file" name="foto" class="custom-file-input form-label" id="foto" onChange="loadfile(event)" required>
                      <label class="custom-file-label" for="foto">Choose file</label>
                    </div>
                  </div>
									<div class="form-group row hidden" id="foto-row">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-10">
                      <img width="50%" height="250" src="" id="preview" alt="Foto" style="object-fit: cover;">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namaalbum" class="col-sm-2 col-form-label">Nama Album</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="namaalbum" id="namaalbum" required>
                        <option value="">---Select Album Name---</option>
												<?php
													$sql = "SELECT * FROM albumfoto ORDER BY namaalbum";
													$query = mysqli_query($conn, $sql);

                          if(mysqli_num_rows($query) > 0){
                            while($row = mysqli_fetch_assoc($query)){
												?>
												<option value="<?= $row['id_albumf'] ?>"><?= $row['namaalbum'] ?></option>
                        <?php
                            }
                          }
                        ?>
											</select>
                    </div>
                  </div>
                  <div class="row text-center mt-4">
                    <div class="col-sm-12">
											<!-- class float-right -->
											<button type="reset" onClick="hiddenCl()" class="btn btn-danger m-2">Cancel</button>
											<button type="submit" class="btn btn-info m-2">Submit</button>
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
  let formRow = document.getElementById('foto-row');
  
	const loadfile = (event) =>{
		formRow.classList.remove('hidden');
    output.src = URL.createObjectURL(event.target.files[0]);
  }

	const hiddenCl = () => {
    // let formRow = document.getElementById('preview');
    formRow.classList.add('hidden');
  }

  let navLink = document.getElementById('nav5');
  navLink.classList.add('active');
</script>
</body>
</html>
