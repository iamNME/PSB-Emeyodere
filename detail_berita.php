<?php
    include 'config/koneksi.php';
    include 'admin/panel/fungsi.php';
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
        <div class="container pt-5" style="padding-bottom: 12rem;">
            <div class="row">
                <div class="col-sm-8">
                    <div class="headline-allberita mb-4">
                        <a href="berita.php">
                            <h5 style="letter-spacing: 2px; color: white; font-weight: bold;">BERITA</h5>
                        </a>
                        <h5 style="letter-spacing: 2px; color: rgb(0 0 0 / .5); font-weight: bold">POSTINGAN</h5>
                    </div>
                    <?php
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];

                            $sql = "SELECT * FROM berita WHERE id='$id'";
                            $query = mysqli_query($conn, $sql);
                            
                            // membuat postingan populer dengan mengupdate dibaca saat detail berita ditampilkan
                            mysqli_query($conn, "UPDATE berita SET dibaca=dibaca+1 WHERE id='$id'");

                            if(mysqli_num_rows($query)){
                                while($row = mysqli_fetch_assoc($query)){
                                    $judul = $row['judul'];
                                    $gambar = $row['gambar'];
                                    $isi = $row['isi_berita'];
                                    $tanggal = date('Y-m-d', strtotime($row['tanggal_upload']));
                                }
                            }
                    ?>
                    <div class="row mb-5">
                        <div class="col">
                            <article class="p-4" style="border: 1px solid #c4c4c4;">
                                <p class="mb-5" style="font-size: 15px; color: #757575; word-wrap: break-word; margin: 0;"><i class="far fa-calendar mr-1"></i><?= ubah_tanggal($tanggal, true) ?> - Oleh Admin</p>
                                <div class="row mb-4">
                                    <div class="col text-center">
                                        <img src="admin/panel/gambarberita/<?= $gambar ?>" alt="Picture" style="object-fit: cover" width="80%" height="250px">
                                        <h2 class="mt-4"><?= $judul ?></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-justify">
                                        <p><?= $isi ?></p>
                                    </div>
                                </div>
                                <div class="row mt-3 justify-content-center">
                                    <div class="col-sm-10">    
                                        <fieldset>
                                            <legend style="width: 82px; font-size: 16px" class="pl-1">Baca Juga</legend>
                                            <ul style="padding: 0 2.2rem;">
                                            <?php
                                                $sql = "SELECT id,judul FROM berita ORDER BY rand() limit 0,3";
                                                $query = mysqli_query($conn, $sql);
                                                if(mysqli_num_rows($query)){
                                                    while($row = mysqli_fetch_assoc($query)){
                                                        $id = $row['id'];
                                                        $judul = $row['judul'];
                                            ?>
                                                <li><a href="detail_berita.php?id=<?= $id ?>" style="text-transform: uppercase; font-size: 16px; text-decoration: none"><?= $judul ?></a></li>
                                            <?php
                                                    }
                                                }
                                            ?>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 6rem;">
                                    <div class="col">
                                        <a href="#" class="btn btn-info"><i class="fab fa-facebook mr-2"></i>Facebook</a>
                                        <a href="#" class="btn btn-info"><i class="fab fa-twitter mr-2"></i>Twitter</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php
                        }else{
                    ?>
                            <div class="row mb-5">
                                <div class="col">
                                    <article class="p-4" style="border: 1px solid #c4c4c4;">
                                        <div class="row mt-2 mb-3">
                                            <div class="col text-center">
                                                <i class="fa fa-exclamation-triangle" style="font-size: 4rem"></i>
                                            </div>
                                        </div>
                                        <p style="font-weight: bold; text-align: center">Tidak ada detail berita yang dapat ditampilkan!!!</p>
                                    </article>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                </div>
                <aside class="col-sm-4">
                    <div class="row">
                        <div class="col">
                            <form action="berita.php" method="get" class="form-inline">
                                <div class="input-group" style="width: 100%;">
                                    <input type="text" name="cari" class="form-control" placeholder="Ketik judul berita..." aria-label="Cari" aria-describedby="search" style="border-radius: 0;">
                                    <div class="input-group-prepend">
                                        <button class="input-group-text" type="submit" id="search"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="headline-populer">
                                <h5>POPULER</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col wrapper-populer">
                            <?php
                                $sql = "SELECT * FROM berita ORDER BY dibaca DESC limit 0,4";
                                $query = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($query)){
                                    while($row = mysqli_fetch_assoc($query)){
                                        $tanggal = date('Y-m-d', strtotime($row['tanggal_upload']));
                            ?>
                            <div class="row" style="margin: 0">
                                <div class="col-sm-4">
                                    <a href="detail_berita.php?id=<?= $row['id'] ?>">
                                        <img src="admin/panel/gambarberita/<?= $row['gambar'] ?>" alt="Picture" style="width: 100%; height: 100px; object-fit: cover">
                                    </a>
                                </div>
                                <div class="col-sm-8" style="padding-left: 0; padding-right: 0;">
                                    <a href="detail_berita.php?id=<?= $row['id'] ?>" class="link-berita">
                                        <h6 class="mt-3 ml-3 mr-3" style="text-transform: uppercase; word-wrap: break-word;"><?= $row['judul'] ?></h6>
                                    </a>
                                    <p class="ml-3 mr-3 mb-3" style="font-size: 14px; color: #757575; word-wrap: break-word;">Oleh Admin - <?= ubah_tanggal($tanggal, true) ?></p>
                                </div>
                            </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </aside>
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
        let navLink = document.getElementById('link-3');
        navLink.classList.add('aktif');
    </script>
</body>
</html>