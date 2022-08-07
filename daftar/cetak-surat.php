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
    <div class="container pt-120 bg-white">
        <div class="row">
            <?php
                if(isset($_POST['cetak'])){
                    $nama = $_POST['nama'];
                    $ttl = $_POST['ttl'];
                    $nisn = $_POST['nisn'];
                    $asalsklh = $_POST['asalsklh'];
                    $alamatrmh = $_POST['alamatrmh'];
                    $namaortu = $_POST['namaortu'];
                    $hubungan = $_POST['hubungan'];
                    $nomor = $_POST['nomor'];
                    // $tglskrg = $_POST['tglskrg'];
                    $tglskrg = date('Y-m-d');
            ?>
            <div class="col">
                <div class="headline-syarat text-center mb-5">
                    <h4><u>SURAT PERNYATAAN MEMATUHI TATA TERTIB</u></h4>
                </div>
                <p class="text-justify" style="line-height: 2">Yang bertanda tangan di bawah ini, saya :</p>

                <table class="table table-borderless">
                    <thead></thead>
                    <tbody>
                        <tr>
                            <td class="pl-0" width="270">Nama Lengkap</td>
                            <td width="10">:</td>
                            <td><?= $nama ?></td>
                        </tr>
                        <tr>
                            <td class="pl-0">Tempat, Tanggal Lahir</td>
                            <td>:</td>
                            <td><?= $ttl ?></td>
                        </tr>
                        <tr>
                            <td class="pl-0">NISN</td>
                            <td>:</td>
                            <td><?= $nisn ?></td>
                        </tr>
                        <tr>
                            <td class="pl-0">Asal Sekolah Sebelumnya</td>
                            <td>:</td>
                            <td><?= $asalsklh ?></td>
                        </tr>
                        <tr>
                            <td class="pl-0">Alamat Rumah</td>
                            <td>:</td>
                            <td><?= $alamatrmh ?></td>
                        </tr>
                        <tr>
                            <td class="pl-0">Nama Orang Tua/Wali</td>
                            <td>:</td>
                            <td><?= $namaortu ?></td>
                        </tr>
                        <tr>
                            <td class="pl-0">Hubungan Wali Dengan Siswa</td>
                            <td>:</td>
                            <td><?= $hubungan ?></td>
                        </tr>
                        <tr>
                            <td class="pl-0">Nomor HP</td>
                            <td>:</td>
                            <td><?= $nomor ?></td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-justify" style="line-height: 2">Dengan ini menyatakan bahwa selama menjadi siswa/siswi MTs Emeyodere Kota Sorong bersedia mematuhi seluruh TATA TERTIB SISWA yang berlaku. Bila terjadi pelanggaran-pelanggaran, maka saya bersedia dikenakan sanksi sesuai aturan dan ketentuan yang berlaku. Demikian surat pernyataan ini saya setujui dengan sesungguh-sungguhnya.</p>
                <p class="text-right mb-5" style="margin-top: 4rem">Sorong, <?= ubah_tanggal($tglskrg, false) ?></p>
                <p style="margin-bottom: 0; margin-left: 11.8rem">Mengetahui,</p>
                <div class="row">
                    <div class="text-center col-sm-6">
                        <p>Orang Tua/Wali</p>
                        <!-- <p class="mt-5">&lpar;<?= $namaortu ?>&rpar;</p> -->
                        <p class="mb-0" style="margin-top: 5.5rem">&lpar;<?= $namaortu ?>&rpar;</p>
                        <p>Nama Jelas & Tanda Tangan</p>
                    </div>
                    <div class="text-center col-sm-6">
                        <p>Peserta Didik</p>
                        <!-- <img src="assets/" alt="Materai"> -->
                        <div style="margin-left: 7rem; width: 100px; height: 55px; border: 3px solid grey">
                            <p>Materai 6000,-</p>
                        </div>
                        <!-- <p class="mt-5">&lpar;<?= $nama ?>&rpar;</p> -->
                        <p class="mt-3 mb-0">&lpar;<?= $nama ?>&rpar;</p>
                        <p>Nama Jelas & Tanda Tangan</p>
                    </div>
                </div>
            </div>
            <script>
	        	window.print();
	        </script>
            <?php
                }else{
                    header("Location: ./surat-pernyataan.php");
                }
            ?>
        </div>
    </div>

    <script src="../assets/js/jquery-3.6.0.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../bootstrap-4.6.0/js/bootstrap.bundle.js"></script>
</body>
</html>