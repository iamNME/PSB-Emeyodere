<?php
    include '../../config/koneksi.php';

    $id = $_GET['id'];
    $foto = $_GET['foto'];

    $sql = "DELETE FROM foto WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        $file = 'datafoto/'.$foto;
        if(file_exists($file)){
            unlink($file);
        }
        header("Location: view-all-foto.php?pesan=hapus_sukses");
    }
?>