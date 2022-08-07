<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'psbemeyodere';

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die('Koneksi Gagal');
    }/*else{
        echo 'Koneksi Sukses';
    }*/
?>