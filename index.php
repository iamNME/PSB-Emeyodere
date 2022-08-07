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
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == 'sukses'){
    ?>
                <script>
                    window.alert("Pesan sudah terkirim!!! Terima kasih telah mengirim pesan kepada kami.");
                </script>
    <?php
                }else{
    ?>
                    <script>
                        window.alert("Pesan tidak terkirim!!!");
                    </script>
    <?php
                }
            }   
    ?>
        <div id="carouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="/*height: 100vh;*/">
                <div class="carousel-item active">
                    <img src="assets/images/sekolah5.jpeg" class="d-block w-100" alt="sekolah51" height="625" width="1280" style="/*object-fit: cover; object-position: center;*/ /*vertical-align: middle;*/">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/sekolah1.jpeg" class="d-block w-100" alt="sekolah11" height="625" width="1280" style="/*object-fit: cover; object-position: center;*/ /*vertical-align: middle;*/">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/sekolah3.jpeg" class="d-block w-100" alt="sekolah31" height="625" width="1280" style="/*object-fit: cover; object-position: center;*/ /*vertical-align: middle;*/">
                </div>
            </div>
            <a href="#carouselIndicators" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#carouselIndicators" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <main>
        <div class="container-fluid">    
            <div class="row">
                <div class="col headline-body pt-120 pb-120">
                    <div class="headline text-center">
                        <h1>Telah dibuka pendaftaran online siswa baru</h1>
                        <h1>Segera daftarkan diri anda sekarang</h1>
                        <a style="font-size: 18px; padding: 1rem 2.5rem; border-radius: 50px;" href="daftar/persyaratan.php" target="_blank" class="btn btn-success mt-4">Daftar sekarang</a>
                    </div>
                </div>
            </div>
            <div class="container" style="padding: 120px 100px 200px 100px;">
                <div class="row">
                    <div class="col">
                        <div class="headline-berita">
                            <h2>BERITA TERBARU</h2>
                        </div>
                        <?php
                            $sql = "SELECT * FROM berita limit 0,5";
                            $query = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($query)){
                                while($row = mysqli_fetch_assoc($query)){
                                    $tanggal = date('Y-m-d', strtotime($row['tanggal_upload']));
                        ?>
                        <div class="row m-auto pt-4 pb-3" style="border-bottom: #22DD1E 3px solid;">
                            <div class="col-md-4">
                                <a href="detail_berita?id=<?= $row['id'] ?>">
                                    <img src="admin/panel/gambarberita/<?= $row['gambar'] ?>" style="width: 100%; height: 25vh; object-fit: cover" alt="Foto Berita">
                                </a>
                            </div>
                            <div class="col-md-8" style="word-wrap: break-word;">
                                <p style="font-size: 16px; margin-bottom: 0; color: rgb(0 0 0 / .4); letter-spacing: 1px;"><i style="margin-right: 6px;" class="bi bi-calendar"></i><?= ubah_tanggal($tanggal, true) ?></p>
                                <h3 style="/*text-align: justify;*/ font-size: 20px; margin-bottom: 0; text-transform: uppercase; letter-spacing: 2px;"><a href="detail_berita.php?id=<?= $row['id'] ?>" class="link-berita"><?= $row['judul'] ?></a></h3>
                                <p style="font-size: 16px; color: rgb(0 0 0 / .4); letter-spacing: 1px;">Oleh Admin</p>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                        <div class="row pt-4 pb-3 text-right">
                            <div class="col">
                                <a href="berita.php" style="letter-spacing: 1px; padding: 0.5rem 1.2rem; border-radius: 10px;" class="btn btn-success see-all"><i class="bi bi-arrow-right"></i>LIHAT SELENGKAPNYA</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 6rem;">
                    <div class="col">
                        <div class="headline-galeri text-center">
                            <h2>Galeri</h2>
                        </div>
                        <div class="owl-carousel owl-theme mt-4">
                        <?php
                            $sql = "SELECT * FROM albumfoto ORDER BY namaalbum limit 0,4";
                            $query = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($query)){
                                while($row = mysqli_fetch_assoc($query)){
                        ?>
                            <div class="ml-2 mr-2">
                                <div class="card">
                                    <img data-src="admin/panel/albumfoto/<?= $row['sampul_foto'] ?>" alt="Picture" class='card-img-top owl-lazy'>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $row['namaalbum'] ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php
                                }
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="position: relative">
                <div class="col">
                    <div class="wave">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row" style="/*background-color: rgb(34 221 30 / .6;*/ background: #6fe76d">
                <div class="col headline-contact pt-5 pb-120">
                    <div class="headline-contact text-center">
                        <h1>Memiliki pertanyaan terkait sekolah atau mengenai pendaftaran ?</h1>
                        <!-- Button trigger modal -->
                        <button id="myInput" style="font-size: 16px; padding: 0.7rem 1.5rem; border-radius: 8px;" data-toggle="modal" data-target="#exampleModal" class="text-white btn btn-contact mt-4"><i class="fas fa-envelope"></i>Hubungi Kami</button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">KONTAK KAMI</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="headline-pesan mb-3">
                                            <h4>Tinggalkan Pesan</h4>
                                        </div>
                                        <form action="send_mail2.php" method="post">
                                            <div class="form-group mb-4">
                                                <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
                                            </div>
                                            <div class="form-group mb-4">
                                                <input type="text" class="form-control" id="nama-lengkap" name="nama-lengkap" required placeholder="Nama Lengkap">
                                            </div>
                                            <div class="form-group mb-4">
                                                <input type="text" class="form-control" id="judul" name="judul" required placeholder="Judul">
                                            </div>
                                            <div class="form-group mb-4">
                                                <textarea name="pesan" id="pesan" class="form-control" rows="6" required placeholder="Pesan"></textarea>
                                            </div>
                                            <div class="row text-right">
                                                <div class="col">
                                                    <input type="submit" class="btn btn-success pl-4 pr-4" style="letter-spacing: 2px; text-transform: uppercase; font-weight: 700" id="kirim" name="kirim" value="Kirim" />  
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 1.2rem 0; /* border-bottom: #22DD1E 2px solid; */">
                <div class="col">
                    <div class="text-center">
                        <a href="#"><i style="font-size: 28px; color: rgb(20, 20, 255); margin: 0 18px;" class="bi bi-facebook"></i></a>
                        <a href="#"><i style="font-size: 28px; color: rgb(255, 85, 164); margin: 0 18px;" class="bi bi-instagram"></i></a>
                        <a href="#"><i style="font-size: 28px; color: rgb(255, 22, 22); margin: 0 18px;" class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    <?php
        include 'footer.php';
    ?>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="bootstrap-4.6.0/js/bootstrap.bundle.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                autoplay: true,
                autoplayhoverpause: true,
                autoplaytimeout: 100,
                items: 3,
                nav: true,
                loop: true,
                lazyLoad: true,
                margin: 5,
                padding: 5,
                stagePadding: 5,
                responsive: {
                    0: {
                        items: 1,
                        dots: false,
                    },
                    485: {
                        items: 2,
                        dots: false,
                    },
                    728: {
                        items: 3,
                        dots: true,
                    }
                }
            });
        });

        let navLink = document.getElementById('link-1');
        navLink.classList.add('aktif');

        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
        
        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
        })
    </script>
</body>
</html>