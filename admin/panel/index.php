<?php
  session_start();
  include '../../config/koneksi.php';
  include 'header.php';

  if($_SESSION['status'] != 'login'){
    header('Location: ../index.php?pesan=belum_login');
  }
?>

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
        <div class="content-header" style="/*padding-top: 5rem;*/">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
      
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <?php
                if($_SESSION['level'] == 'administrator'){
              ?>
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <?php
                      $sql = "SELECT * FROM admin";
                      $query = mysqli_query($conn, $sql);
                      $jumlah = mysqli_num_rows($query);
                    ?>
                    <h3><?= $jumlah ?></h3>
                  
                    <p>Pengguna</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="view-allpengguna.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <?php
                }
              ?>
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <?php
                      $sql = "SELECT * FROM albumfoto";
                      $query = mysqli_query($conn, $sql);
                      $jumlah = mysqli_num_rows($query);
                    ?>

                    <h3><?= $jumlah ?></h3>
                  
                    <p>Album Foto</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-images"></i>
                  </div>
                  <a href="view-album-foto.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <?php
                      $sql = "SELECT * FROM albumvideo";
                      $query = mysqli_query($conn, $sql);
                      $jumlah = mysqli_num_rows($query);
                    ?>

                    <h3 style="color: white"><?= $jumlah ?></h3>
                  
                    <p style="color: white">Album Video</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-photo-video" style="font-size: 3.5rem"></i>
                  </div>
                  <a href="view-album-video.php" class="small-box-footer" style="color: white !important">More info <i style="color: white" class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <?php
                      $sql = "SELECT * FROM foto";
                      $query = mysqli_query($conn, $sql);
                      $jumlah = mysqli_num_rows($query);
                    ?>

                    <h3><?= $jumlah ?></h3>
                  
                    <p>Foto</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-image"></i>
                  </div>
                  <a href="view-all-foto.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div id="vid-display" class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <?php
                      $sql = "SELECT * FROM video";
                      $query = mysqli_query($conn, $sql);
                      $jumlah = mysqli_num_rows($query);
                    ?>

                    <h3><?= $jumlah ?></h3>
                  
                    <p>Video</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-film" style="font-size: 3.5rem"></i>
                  </div>
                  <a href="view-all-foto.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div id="news-display" class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <?php
                      $sql = "SELECT * FROM berita";
                      $query = mysqli_query($conn, $sql);
                      $jumlah = mysqli_num_rows($query);
                    ?>

                    <h3><?= $jumlah ?></h3>
                  
                    <p>Berita</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-file-alt" style="font-size: 3.5rem"></i>
                  </div>
                  <a href="view-all-berita.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      
      <?php
        include 'footer.php'
      ?>

      <script>
        let navLink = document.getElementById('nav1');
        navLink.classList.add('active');
      </script>
      <?php
        if($_SESSION['level'] != 'administrator'){
      ?>
          <script>
              let vidis = document.getElementById('vid-display');
              let newsdis = document.getElementById('news-display');
              vidis.classList.remove('col-lg-4');
              vidis.classList.add('col-lg-6');
              newsdis.classList.remove('col-lg-4');
              newsdis.classList.add('col-lg-6');
          </script>
      <?php
        }
      ?>
  </body>
</html>