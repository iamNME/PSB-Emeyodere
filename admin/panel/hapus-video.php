<?php
    include '../../config/koneksi.php';

    $id = $_GET['id'];
    $thumbnail = $_GET['thumbnail'];

    $sql = "DELETE FROM video WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        $file = 'datathumbnail/'.$thumbnail;
        if(file_exists($file)){
            unlink($file);
        }
        header("Location: view-all-video.php?pesan=hapus_sukses");
    }
?>