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
        <?php
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
        <div class="container pt-120" style="padding-bottom: 12rem;">
            <div class="row">
                <div class="col">
                    <div class="text-center headline-kontak mb-4">
                        <h3 style="letter-spacing: 4px; font-weight: bold;">Kontak Kami</h3>
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <div class="col p-5" style="background: #F4F4F4">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row mb-5">
                                <div class="col">
                                    <h4><i class="bi bi-geo-alt mr-2"></i>Alamat</h4>
                                    <p style="margin: 0 0 0 2rem; font-size: 1.3rem">Jln. Kanal Km.10 Victory Pantai RT.003/RW.003, Kelurahan Kladufu, Distrik Sorong Timur, Kota Sorong, Provinsi Papua Barat</p>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col">
                                    <h4><i class="fas fa-phone-square mr-2"></i>Call Center</h4>
                                    <p style="margin: 0 0 0 2rem; font-size: 1.3rem">+6285354127485</p>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col">
                                    <h4><i class="fas fa-envelope mr-2"></i>Email</h4>
                                    <p style="margin: 0 0 0 2rem; font-size: 1.3rem">mtsemeyodere@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="headline-pesan mb-3">
                                <h4>Tinggalkan Pesan</h4>
                            </div>
                            <form action="send_mail.php" method="post">
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
                                    <textarea name="pesan" id="pesan" class="form-control" rows="10" required placeholder="Pesan"></textarea>
                                </div>
                                <div class="row text-right">
                                    <div class="col">
                                        <input type="submit" class="btn btn-success pl-4 pr-4" style="letter-spacing: 2px; text-transform: uppercase; font-weight: 700" id="kirim" name="kirim" value="Kirim" />  
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 7rem">
                <div class="col">
                    <div class="headline-peta">
                        <h4>Peta Lokasi MTS Emeyodere</h4>
                    </div>
                    <div class="map mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d811.630137692698!2d131.29831341779098!3d-0.9015105187697007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d59550801fed01f%3A0x3e611c92a2b2ffbd!2sMadrasah%20Tsanawiyah%20(MTs)%20Emeyodere!5e1!3m2!1sid!2sid!4v1638424624835!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    <script src="bootstrap-4.6.0/js/bootstrap.bundle.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        let navLink = document.getElementById('link-4');
        navLink.classList.add('aktif');
    </script>
</body>
</html>