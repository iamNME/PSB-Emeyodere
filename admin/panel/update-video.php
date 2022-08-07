<?php
    include '../../config/koneksi.php';

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $namaThumbnail = $_POST['namathumbnail'];
        $urlVid = $_POST['url_video'];
        $namaAlbum = $_POST['namaalbum'];

        $rand = rand();
        $ekstensi = array('jpeg', 'jpg', 'png');
        $fileName = $_FILES['thumbnail']['name'];
        $size = $_FILES['thumbnail']['size'];
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);

        if($size < 2048000 && in_array($ext, $ekstensi)){
            $thumbnailName = $rand.'_'.$fileName;
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'datathumbnail/'.$thumbnailName);
            
            $sql = "UPDATE video SET albumv_id='$namaAlbum', video_url='$urlVid', thumbnail='$thumbnailName' WHERE id='$id'";
            $query = mysqli_query($conn, $sql);
            if($query){
                $file = 'datathumbnail/'.$namaThumbnail;
                if(file_exists($file)){
                    unlink($file);
                }
                header("Location: view-all-video.php?pesan=edit_sukses");
            }else{
                header("Location: view-all-video.php?pesan=edit_gagal");
            }
        }else{
            header("Location: view-all-video.php?pesan=tidak_sesuai");
        }
    }
?>