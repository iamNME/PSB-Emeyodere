<?php
    include '../../config/koneksi.php';

    if(isset($_POST['submit'])){
	    $id = $_POST['id'];
        $namafoto = $_POST['namafoto'];
        $namaAlbum = $_POST['namaalbum'];

        $rand = rand();
        $ekstensi = array('jpeg', 'jpg', 'png');
        $filename = $_FILES['foto']['name'];
        $size = $_FILES['foto']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if($size < 2048000 && in_array($ext, $ekstensi)){
            $fotoname = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'albumvideo/'.$fotoname);
            
            $sql = "UPDATE albumvideo SET namaalbum='$namaAlbum', sampul_foto='$fotoname' WHERE id_albumv='$id'";
            $query = mysqli_query($conn, $sql);
            if($query){
                $file = 'albumvideo/'.$namafoto;
                if(file_exists($file)){
                    unlink($file);
                }
                header("Location: view-album-video.php?pesan=edit_sukses");
            }else{
                header("Location: view-album-video.php?pesan=edit_gagal");
            }
        }else{
            header("Location: view-album-video.php?pesan=tidak_sesuai");
        }

        // if(in_array($ext, $ekstensi)){
        //     if($ukuran <= 2048000){
        //         $fotoname = $rand.'_'.$filename;
        //         move_uploaded_file($_FILES['foto']['tmp_name'], 'albumfoto/'.$fotoname);
                
        //         $sql = "UPDATE albumfoto SET namaalbum='$namaAlbum', foto='$fotoname' WHERE id_albumf='$id'";
        //         $query = mysqli_query($conn, $sql);
        //         if($query){
        //             $file = 'albumfoto/'.$namafoto;
        //             if(file_exists($file)){
        //                 unlink($file);
        //             }
        //             header("Location: view-album-foto.php?pesan=edit_sukses");
        //         }else{
        //             header("Location: view-album-foto.php?pesan=edit_gagal");
        //         }
        //     }else{
        //         header("Location: view-album-foto.php?pesan=tidak_sesuai");
        //     }
        // }else{
        //     header("Location: view-album-foto.php?pesan=tidak_sesuai");
        // }
    }
?>