<?php
    include '../../config/koneksi.php';

    $id = $_GET['id'];
    $foto = $_GET['foto'];

    $sql = "DELETE FROM albumfoto WHERE id_albumf='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        $file = 'albumfoto/'.$foto;
        if(file_exists($file)){
            unlink($file);
        }
        header("Location: view-album-foto.php?pesan=hapus_sukses");
    }
?>