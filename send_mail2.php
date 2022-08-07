<?php
    include 'config/koneksi.php';

    if(isset($_POST['kirim'])){
        $emailAdmin = 'ghost.creepie@gmail.com';

        $email = htmlentities($_POST['email']);
        $namaLengkap = htmlentities($_POST['nama-lengkap']);
        $judul = htmlentities($_POST['judul']);
        $pesan = htmlentities($_POST['pesan']);

        // $pengirim = 'Dari: '.$namaLengkap.' <'.$email.'>';
        $headers = 'MIME-Version: 1.0'."\r\n"
        .'Content-type: text/html; charset=utf-8'."\r\n"
        .'From: '.$namaLengkap.' <'.$email.'>'."\r\n";

        if(mail($emailAdmin, $judul, $pesan, $headers)){
            header("Location: index.php?pesan=sukses");
        }else{
            header("Location: index.php?pesan=gagal");
        }
    }else{
        header("Location: index.php");
    }
?>