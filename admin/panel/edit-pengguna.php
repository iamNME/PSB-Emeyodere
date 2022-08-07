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
<body class="hold-transition sidebar-mini">
  
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
            <h1>Edit Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="view-allpengguna.php">Data Semua Pengguna</a></li>
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
            <div class="card-header pr-4 pl-4">
              <h3 class="card-title">
                Edit
              </h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
							<?php
    					  $username = $password = $level = "";
					
    					  if($_SERVER['REQUEST_METHOD'] == "POST"){
										$id = $_POST['id'];
    					      $username = $_POST['username'];
    					      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    					      $level = $_POST['level'];
								
    					      $sql = "UPDATE admin SET username='$username', password='$password', level='$level' WHERE id='$id'";
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
    					    }else{
    					        if(isset($_GET['id'])){
    					            $id = $_GET['id'];
											
    					            $sql = "SELECT * FROM admin WHERE id='$id'";
    					            $query = mysqli_query($conn, $sql);
											
    					            if(mysqli_num_rows($query)){
    					                while($row = mysqli_fetch_assoc($query)){
    					                    $username = $row['username'];
    					                    $password = $row['password'];
    					                    $level = $row['level'];
    					                }
    					            }
    					        }
    					    }
    					?>

              <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="card-body pr-4 pl-4">
									<input type="hidden" name="id" value="<?= $id ?>">
									<!-- <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10 custom-file">
                      <input type="file" name="foto" value="" class="custom-file-input form-label" id="foto">
                      <label class="custom-file-label" for="foto">Choose file</label>
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" id="username" value="<?= $username ?>" max="100" placeholder="Username" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="password" value="<?= $password ?>" placeholder="Password" required>
                    </div>
                  </div>
									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="show-password" onclick="myFunction()">
												<label for="show-password" class="form-check-label">Show Password</label>
											</div>
										</div>
									</div>
                  <div class="form-group row">
                    <label for="level" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                      <select name="level" id="level" class="form-control" required>
												<option value="">---Select Level---</option>
												<option value="administrator">Administrator</option>
												<option value="kepala sekolah">Kepala Sekolah</option>
											</select>
                    </div>
                  </div>
                	<button type="submit" class="btn btn-info ml-4 float-right">Submit</button>
                	<button type="reset" class="btn btn-danger float-right">Cancel</button>
                	<!-- /.card-footer -->
              	</form>
            </div>
						<!-- /.card-body -->
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

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
	function myFunction() {
	  var x = document.getElementById("password");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }
	}

  let navLink = document.getElementById('nav2');
  navLink.classList.add('active');
</script>
</body>
</html>
