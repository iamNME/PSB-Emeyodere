<?php
    include '../../config/koneksi.php';

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $namaGambar = $_POST['namagambar'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi_berita'];

        $rand = rand();
        $ekstensi = array('jpeg', 'jpg', 'png');
        $fileName = $_FILES['gambar']['name'];
        $ukuran = $_FILES['gambar']['size'];
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);

        if($size < 2048000 && in_array($ext, $ekstensi)){
            $gambarName = $rand.'_'.$fileName;
            move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambarberita/'.$gambarName);
            
            $sql = "UPDATE berita SET judul='$judul', gambar='$gambarName', isi_berita='$isi' WHERE id='$id'";
            $query = mysqli_query($conn, $sql);
            if($query){
                $file = 'gambarberita/'.$namaGambar;
                if(file_exists($file)){
                    unlink($file);
                }
                header("Location: view-all-berita.php?pesan=edit_sukses");
            }else{
                header("Location: view-all-berita.php?pesan=edit_gagal");
            }
        }else{
            header("Location: view-all-berita.php?pesan=tidak_sesuai");
        }
    }
?>