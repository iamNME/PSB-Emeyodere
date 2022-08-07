<?php
    include '../../config/koneksi.php';

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $namaFoto = $_POST['namafoto'];
        $namaAlbum = $_POST['namaalbum'];

        $rand = rand();
        $ekstensi = array('jpeg', 'jpg', 'png');
        $fileName = $_FILES['foto']['name'];
        $size = $_FILES['foto']['size'];
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);

        if($size < 2048000 && in_array($ext, $ekstensi)){
            $photoName = $rand.'_'.$fileName;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'datafoto/'.$photoName);
            
            $sql = "UPDATE foto SET albumf_id='$namaAlbum', foto='$photoName' WHERE id='$id'";
            $query = mysqli_query($conn, $sql);
            if($query){
                $file = 'datafoto/'.$namaFoto;
                if(file_exists($file)){
                    unlink($file);
                }
                header("Location: view-all-foto.php?pesan=edit_sukses");
            }else{
                header("Location: view-all-foto.php?pesan=edit_gagal");
            }
        }else{
            header("Location: view-all-foto.php?pesan=tidak_sesuai");
        }
    }
?>