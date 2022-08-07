<?php
    include '../admin/panel/fungsi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendaftaran Siswa Baru MTS Emeyodere</title>
    <link rel="shortcut icon" href="../assets/images/icon.ico">
    <link rel="stylesheet" href="../bootstrap-4.6.0/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/dfa531a868.js" crossorigin="anonymous"></script>
    <style>
        .olist{
            list-style-type: upper-alpha;
        }
        .olist-1{
            list-style-type: lower-alpha;
        }
        .ulist-1{
            list-style-type: square;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navigation navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" style="font-weight: 700; letter-spacing: 3px;" href="../index.php">
                <img src="../assets/images/logo.png" alt="Logo" width="55" height="55" class="d-inline-block">
                MTS EMEYODERE
            </a>
        </nav>
    </header>
    <main class="p-5" style="background: #F4F4F4">
       <div class="container pt-120 pb-120 bg-white" style="padding-left: 7rem; padding-right: 7rem; border-radius: 10px">
            <div class="row">
                <div class="col">
                    <div class="headline-syarat text-center mb-4">
                        <h4><u>SURAT PERNYATAAN MEMATUHI TATA TERTIB</u></h4>
                    </div>
                    <p class="text-justify" style="line-height: 2">Yang bertanda tangan di bawah ini, saya :</p>
                    <form action="cetak-surat.php" method="post">
                        <table class="table table-borderless">
                            <thead></thead>
                            <tbody>
                                <tr>
                                    <div class="form-group row">
                                        <!-- <label for="nama">
                                            <td>Nama Lengkap</td>
                                            <td>:</td>
                                        </label> -->
                                        <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap :</label>
                                        <div class="col-sm-8">
                                            <input required type="text" name="nama" class="form-control" id="nama" placeholder="John Doe">
                                        </div>
                                        <!-- <td><input type="text" name="nama" class="form-control" id="nama"></td> -->
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group row">
                                        <label for="ttl" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir :</label>
                                        <div class="col-sm-8">
                                            <input required type="text" name="ttl" class="form-control" id="ttl" placeholder="Tembula, 01 Januari 2002">
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group row">
                                        <label for="nisn" class="col-sm-4 col-form-label">NISN :</label>
                                        <div class="col-sm-8">
                                            <input required type="text" name="nisn" class="form-control" id="nisn" minlength="10" placeholder="123456789">
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group row">
                                        <label for="asalsklh" class="col-sm-4 col-form-label">Asal Sekolah Sebelumnya :</label>
                                        <div class="col-sm-8">
                                            <input required type="text" name="asalsklh" class="form-control" id="asalsklh" placeholder="SD Inpres 17">
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group row">
                                        <label for="alamatrmh" class="col-sm-4 col-form-label">Alamat Rumah :</label>
                                        <div class="col-sm-8">
                                            <input required type="text" name="alamatrmh" class="form-control" id="alamatrmh" placeholder="Jln. Ataa Km.12">
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group row">
                                        <label for="namaortu" class="col-sm-4 col-form-label">Nama Orang Tua/Wali :</label>
                                        <div class="col-sm-8">
                                            <input required type="text" name="namaortu" class="form-control" id="namaortu" placeholder="John Doe">
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group row">
                                        <label for="hubungan" class="col-sm-4 col-form-label">Hubungan Wali Dengan Siswa :</label>
                                        <div class="col-sm-8">
                                            <input required type="text" name="hubungan" class="form-control" id="hubungan" placeholder="Paman atau Bibi dll">
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group row">
                                        <label for="nomor" class="col-sm-4 col-form-label">Nomor HP :</label>
                                        <div class="col-sm-8">
                                            <input required type="number" name="nomor" class="form-control" id="nomor" placeholder="08XXXXXXXXXX">
                                        </div>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-justify" style="line-height: 2">Dengan ini menyatakan bahwa selama menjadi siswa/siswi MTs Emeyodere Kota Sorong bersedia mematuhi seluruh TATA TERTIB SISWA yang berlaku. Bila terjadi pelanggaran-pelanggaran, maka saya bersedia dikenakan sanksi sesuai aturan dan ketentuan yang berlaku. Demikian surat pernyataan ini saya setujui dengan sesungguh-sungguhnya.</p>
                        <!-- <p class="text-right" style="margin-top: 6rem">Sorong, <input class="pl-2" type="text" value="<?= ubah_tanggal(date('Y-m-d'), false) ?>" name="tglskrg" required placeholder="02 Januari 2022"></p> -->

                        <div class="row mt-5">
                            <div class="col">
                                <div class="text-center">
                                    <input type="submit" name="cetak" value="Cetak Surat" style="text-transform: uppercase; letter-spacing: 2px" class="btn btn-danger pt-3 pb-3 pl-5 pr-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </main>
    <?php
        include '../footer.php'
    ?>

    <script src="../assets/js/jquery-3.6.0.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../bootstrap-4.6.0/js/bootstrap.bundle.js"></script>
    <!-- <script src="../assets/js/custom.js"></script> -->
    <script>
        $(document).ready(function () {
            'use strict';

            var win = $(window),
                scrollUp = $(".back-to-top");   

            /*========== Start Scroll Up    ==========*/
            // Show And Hide Buttom Back To Top
            win.on('scroll', function () {
                if ($(this).scrollTop() >= 600) {
                    scrollUp.show(700);
                } else {
                    scrollUp.hide(200);
                }
            });
            // Back To 0 Scroll Top body
            scrollUp.on('click', function () {
                $("html, body").animate({ scrollTop: 0}, 1000);
            });
        });
    </script>
</body>
</html>