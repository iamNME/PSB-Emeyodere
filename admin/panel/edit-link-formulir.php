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
              <li class="breadcrumb-item"><a href="view-link-formulir.php">Data Link Formulir</a></li>
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
                $link = ""; 

                if($_SERVER['REQUEST_METHOD'] == "POST"){
                  $id = $_POST['id'];
                  $link = $_POST['url_formulir'];
							
    					    $sql = "UPDATE linkf SET url_formulir='$link' WHERE id='$id'";
									$query = mysqli_query($conn, $sql);
							
    					    if($query){
    					?>
											<div class="container pl-4 pr-3 pt-4">
										  	<div class="alert alert-success alert-dismissible">
                		  	    <button type="button" class="close" data-dismiss="alert">&times;</button>
                		  	    <b>Data Berhasil</b> diubah ke dalam database
                		  	</div>
                    	</div>
              <?php
                  }else{
    					?>
											<div class="container pl-4 pr-3 pt-4">
    					        	<div class="alert alert-warning alert-dismissible">
    					        	    <button type="button" class="close" data-dismiss="alert">&times;</button>
    					        	    <b>Data Tidak Berhasil</b> diubah ke dalam database
    					        	</div>
    					        </div>
              <?php
                  }
                }else if(isset($_GET['id'])){
									$id = $_GET['id'];

									$sql = "SELECT * FROM linkf WHERE id='$id'";
									$query = mysqli_query($conn, $sql);

									if(mysqli_num_rows($query)){
										while($row = mysqli_fetch_assoc($query)){
											$link = $row['url_formulir'];
										}
									}
								}
              ?>

              <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="card-body pr-4 pl-4">
									<input type="hidden" name="id" value="<?= $id ?>">
									<div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="url_formulir">Link Formulir</label>
                    <div class="col-sm-10">
                      <input type="text" name="url_formulir" value="<?= $link ?>" class="form-control" id="url_formulir" placeholder="Link Google Formulir" required>
                    </div>
                  </div>
                  <div class="row text-center mt-4">
                    <div class="col-sm-12">
											<!-- <button type="reset" name="cancel" class="btn btn-danger m-2">Cancel</button> -->
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
  let navLink = document.getElementById('nav8');
  navLink.classList.add('active');
</script>
</body>
</html>
