<?php
    include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
    include 'head.php';
?>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    </header>
    <main>
        <div class="container" style="padding-top: 5rem; padding-bottom: 20rem;">
            <!-- hilangkan navbar-expand-md -->
            <nav class="nav-galeri navbar navbar-expand justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="galeri_foto.php" id="nav-foto" class="nav-link">Foto</a>
                    </li>
                    <li class="nav-item">
                        <a href="galeri_video.php" id="nav-video" class="nav-link">Video</a>
                    </li>
                </ul>
            </nav>
            <div class="row mt-4 mb-3">
                <?php
                    $sql = "SELECT * FROM albumvideo";
                    $query = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($query) > 0){
                        while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <a href="album_video.php?id=<?= $row['id_albumv'] ?>" class="text-dark" style="text-decoration: none">
                            <img src="admin/panel/albumvideo/<?= $row['sampul_foto'] ?>" alt="Picture" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['namaalbum'] ?></h5>
                                <!-- <h6>Jumlah :</h6> -->
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </main>
    <?php
        include 'footer.php';
    ?>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="bootstrap-4.6.0/js/bootstrap.bundle.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        let navLink = document.getElementById('link-2');
        navLink.classList.add('aktif');

        let videoLink = document.getElementById('nav-video');
        videoLink.classList.add('aktif');
    </script>
</body>
</html>