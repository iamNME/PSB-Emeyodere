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
        <div class="container pt-4 pb-4">
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
            <div class="row mt-4">
                <div class="col">
                    <?php
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM albumvideo WHERE id_albumv='$id'";
                        $query = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($query)){
                            while($row = mysqli_fetch_assoc($query)){
                                $judul = $row['namaalbum'];
                            }
                        }
                    ?>
                    <div class="headline-jalbum">
                        <h5><?= $judul ?></h5>
                    </div>
                </div>
            </div>
            <div class="row mt-1 mb-3">
                <?php
                    $id = $_GET['id'];

                    $sql = "SELECT * FROM video WHERE albumv_id='$id'";
                    $query = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($query) > 0){
                        while($row = mysqli_fetch_assoc($query)){
                            $url = $row['video_url'];
                            $thumbnail = $row['thumbnail'];
                ?>
                <div class="item col-sm-4 mb-3" style="position: relative">
                    <a data-fancybox="gallery1" class="fancybox" href="<?= $url ?>">
                        <!-- ganti id youtube di sebelah /vi/ untuk dapat gambar thumbnail -->
                        <img src="admin/panel/datathumbnail/<?= $thumbnail ?>" alt="Picture" style="width: 100%; height: 100%; object-fit: cover;">
                        <img src="assets/images/play-circle-bi.svg" class="play-btn" alt="Play" width="50">
                    </a>
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
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $('[data-fancybox="gallery1"]').fancybox({
        	buttons: [
                "zoom",
                "thumbs",
                "close"
            ],
        });

        let navLink = document.getElementById('link-2');
        navLink.classList.add('aktif');

        let videoLink = document.getElementById('nav-video');
        videoLink.classList.add('aktif');
    </script>
</body>
</html>