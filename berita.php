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
                    </div>
                    <table id="mydatatable" class="table table-bordered" style="width: 100%;">
                        <thead style="display: none">
                            <tr><th>Berita</th></tr>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($_GET['cari'])){
                                    $cari = $_GET['cari'];
                                    // pencarian berita
                                    $sql = "SELECT * FROM berita WHERE judul LIKE '%".$cari."%'";
                                }else{
                                    $sql = "SELECT * FROM berita";
                                }
                                $query = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($query)){
                                    while($row = mysqli_fetch_assoc($query)){
                                        $tanggal = date('Y-m-d', strtotime($row['tanggal_upload']));
                            ?>
                            <tr>
                                <td>
                                    <article class="row mb-2">
                                        <div class="col-sm-4">
                                            <a href="detail_berita.php?id=<?= $row['id'] ?>">
                                                <img src="admin/panel/gambarberita/<?= $row['gambar'] ?>" alt="Picture" style="width: 100%; height: 25vh; object-fit: cover">
                                            </a>
                                        </div>
                                        <div class="col-sm-8">
                                            <div>
                                                <p style="font-size: 14px; color: #757575; word-wrap: break-word; margin: 0;"><i class="far fa-calendar mr-1"></i><?= ubah_tanggal($tanggal, true) ?> - Oleh Admin</p>
                                                <a href="detail_berita.php?id=<?= $row['id'] ?>" class="link-berita">
                                                    <h5 style="text-transform: uppercase; font-weight: bold; text-align: justify"><?= $row['judul'] ?></h5>
                                                </a>
                                            </div>
                                            <p id="news">
                                                <?= substr($row['isi_berita'],0,250) ?>
                                                <a style="display: inline" href="detail_berita.php?id=<?= $row['id'] ?>">Baca Selengkapnya</a>
                                            </p>
                                        </div>
                                    </article>
                                </td>
                            </tr>
                            <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
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
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $("#mydatatable").DataTable({
            searching: false,
            ordering: false,
            info: false,
            lengthChange: false,
            paging: true,
            pagingType: "full_numbers",
            language: {
                paginate: {
                    previous: "&laquo;", // left arrow quotation
                    next: "&raquo;", // right arrow quotation
                },
            },
            pageLength: 6,
        });

        let navLink = document.getElementById('link-3');
        navLink.classList.add('aktif');
    </script>
</body>
</html>