<?php
    include '../config/koneksi.php';
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
       <div class="container pl-5 pr-5 pt-120 pb-120 bg-white" style="border-radius: 10px">
            <div class="row">
                <div class="col">
                    <div class="headline-syarat text-center mb-5">
                        <h4>PERSYARATAN PENDAFTARAN PESERTA DIDIK BARU</h4>
                    </div>
                    <p class="text-justify" style="line-height: 2">Sebelum mengisi formulir pendaftaran online, harap baca persyaratan dibawah ini. Sangat penting bagi para calon siswa atau orang tua untuk membaca persyaratan dan menyiapkan hal-hal yang dibutuhkan sebelum mengisi formulir pendaftaran.</p>
                    <ol class="olist pl-4">
                        <li style="font-weight: bold;">SYARAT UMUM</li>
                        <ul class="ulist-1 pl-4">
                            <li>Sehat jasmani dan rohani</li>
                            <li>Bebas pengaruh alkohol</li>
                            <li>Telah lulus dari MI/SD/sekolah lain yang sederajat</li>
                            <li>Bersedia mematuhi peraturan dan tata tertib sekolah yang telah ditetapkan</li>
                        </ul>
                        <li class="mt-3" style="font-weight: bold;">PROSEDUR PENDAFTARAN</li>
                        <ol class="pl-4">
                            <li>Mengisi formulir pendaftaran secara lengkap, jelas dan benar dengan melampirkan file dari dokumen-dokumen dibawah ini yang sudah di scan :</li>
                            <ol class="olist-1 pl-4">
                                <li>Ijazah/STTB atau keterangan lulus dari SD/MI/Sekolah lain yang sederajat.</li>
                                <li>Akta kelahiran</li>
                                <li>Kartu Keluarga (KK)</li>
                                <li>Kartu Indonesia Pintar (Jika Punya)</li>
                                <li>Pas Foto</li>
                            </ol>
                            <li>
                                <!-- Menandatangani peraturan dan tata tertib sekolah diketahui oleh orang tua / wali murid. Untuk surat pernyataan dapat di unduh atau di download dengan menekan tombol dibawah ini. -->
                                Menandatangani peraturan dan tata tertib sekolah diketahui oleh orang tua / wali murid. Untuk surat pernyataan mematuhi tata tertib dapat diisi dengan menekan tombol dibawah ini.
                                <!-- <br><a href="download.php?file=surat.pdf" target="_blank" class="btn btn-danger"><i class="fas fa-download mr-1"></i>Unduh File</a> -->
                                <br><a href="surat-pernyataan.php" target="_blank" class="btn btn-danger"><i class="fas fa-pencil-alt mr-1"></i>Isi Surat Pernyataan</a>
                                <br>Surat yang sudah dicetak dan ditandatangani harus di scan kemudian dikirim melalui pengisian formulir online. Surat yang sudah di cetak dan ditandatangani bisa juga diserahkan ke sekolah. 
                            </li>
                            <li>Membayar biaya formulir dan pendaftaran sekolah <strong><em>Rp. 950.000,-</em></strong></li>
                        </ol>
                        <li class="mt-3" style="font-weight: bold;">BIAYA MASUK</li>
                        <table class="table table-borderless">
                            <thead></thead>
                            <tbody>
                                <tr>
                                    <td width="10">1.</td>
                                    <td width="350">Biaya Pembangunan</td>
                                    <td>Rp. 200.000,-</td>
                                </tr>
                                <tr>
                                    <td width="10">2.</td>
                                    <td width="350">Infaq 3 Bulan Pertama</td>
                                    <td>Rp. 90.000,-</td>
                                </tr>
                                <tr>
                                    <td width="10">3.</td>
                                    <td width="350">Atribut Seragam Sekolah + Kartu Pelajar</td>
                                    <td>Rp. 45.000,-</td>
                                </tr>
                                <tr>
                                    <td width="10">4.</td>
                                    <td width="350">Pakaian Olahraga</td>
                                    <td>Rp. 250.000,-</td>
                                </tr>
                                <tr>
                                    <td width="10">5.</td>
                                    <td width="350">Seragam Batik</td>
                                    <td>Rp. 200.000,-</td>
                                </tr>
                                <tr>
                                    <td width="10">6.</td>
                                    <td width="350">Dasi</td>
                                    <td>Rp. 30.000,-</td>
                                </tr>
                                <tr>
                                    <td width="10">7.</td>
                                    <td width="350">Topi</td>
                                    <td>Rp. 35.000,-</td>
                                </tr>
                                <tr>
                                    <td width="10">8.</td>
                                    <td width="350">Buku Raport</td>
                                    <td>Rp. 200.000,-</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 3.2rem" colspan="2"><strong>Total</strong></td>
                                    <td><strong>Rp. 950.000,-</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </ol>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <p>Jika sudah selesai membaca dan memahami persyaratan pendaftaran peserta didik baru, maka silahkan segera mengisi formulir pendaftaran berikut dengan menekan tombol dibawah ini.</p>
                    <div class="text-center">
                        <?php
                            $sql = "SELECT * FROM linkf";
                            $query = mysqli_query($conn, $sql);

                            if(mysqli_num_rows($query) > 0){
                                while($row = mysqli_fetch_assoc($query)){
                                    $link = $row['url_formulir'];
                                }
                            }
                        ?>
                        <a href="<?= $link ?>" target="_blank" class="btn btn-success pt-3 pb-3 pl-5 pr-5" style="letter-spacing: 2px; font-weight: bold">ISI FORMULIR</a>
                    </div>
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