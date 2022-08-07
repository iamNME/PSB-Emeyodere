<?php
    include '../../config/koneksi.php';

    $id = $_GET['id'];
    $gambar = $_GET['gambar'];

    $sql = "DELETE FROM berita WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        $file = 'gambarberita/'.$gambar;
        if(file_exists($file)){
            unlink($file);
        }
        header("Location: view-all-berita.php?pesan=hapus_sukses");
    }
?>