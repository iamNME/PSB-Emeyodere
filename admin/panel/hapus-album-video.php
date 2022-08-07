<?php
    include '../../config/koneksi.php';

    $id = $_GET['id'];
    $foto = $_GET['foto'];

    $sql = "DELETE FROM albumvideo WHERE id_albumv='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        $file = "albumvideo/".$foto;
        if(file_exists($file)){
            unlink($file);
        }
        header("Location: view-album-video.php?pesan=hapus_sukses");
    }
?>