<div class="wrapper">
    
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
      
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
        
          <!-- Kepsek Profile Dropdown Menu -->
          <li class="nav-item dropdown user user-menu">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <!-- <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span> -->
              <img src="dist/img/nopic.png" alt="User Image" style="float: left; vertical-align: middle; width: 30px; height: 30px; border-radius: 50%; margin-top: -2px;">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <!-- <span class="dropdown-item dropdown-header">15 Notifications</span> -->
              <span class="dropdown-item dropdown-header">
                <img src="dist/img/nopic.png" class="img-circle" alt="User Image" style="z-index: 5; vertical-align: middle; border-radius: 50%; height: 90px; width: 90px; border: 3px solid; border-color: transparent; border-color: rgba(255,255,255,0.2);">
                <p style="font-size: 18px"><?= $_SESSION['username'] ?></p>
              </span>
              <div class="dropdown-divider"></div>
              <!-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
              <div class="dropdown-item dropdown-footer">
                <a href="logout.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out-alt mr-1"></i>Logout</a>
              </div>
            </div>
          </li>

          <!-- expand menu -->
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Admin Panel</span>
        </a>
      
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div> -->
        
          <!-- SidebarSearch Form -->
          <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div> -->
        
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                <a href="index.php" id="nav1" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="view-allpengguna.php" id="nav2" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Kelola Pengguna
                  </p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="view-album-foto.php" id="nav3" class="nav-link">
                  <i class="nav-icon fas fa-images"></i>
                  <p>
                    Kelola Album Foto
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-album-video.php" id="nav4" class="nav-link">
                  <i class="nav-icon fas fa-photo-video"></i>
                  <p>
                    Kelola Album Video
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-all-foto.php" id="nav5" class="nav-link">
                  <i class="nav-icon fas fa-image"></i>
                  <p>
                    Kelola Foto
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-all-video.php" id="nav6" class="nav-link">
                  <i class="nav-icon fas fa-film"></i>
                  <p>
                    Kelola Video
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-all-berita.php" id="nav7" class="nav-link">
                  <i class="nav-icon fas fa-file-alt"></i>
                  <p>
                    Kelola Berita
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-link-formulir.php" id="nav8" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Kelola Link Formulir
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link btn-out">
                  <i class="fa fa-sign-out-alt nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>