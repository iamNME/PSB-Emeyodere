<?php
    if(isset($_GET['file'])){
        $namafile = $_GET['file'];
        // echo $namafile;
        $dir ="assets/";
        $filepath = $dir.$namafile;
        if(file_exists($filepath)){
            header("Content-Description: File Transfer");
            header("Content-Type: application/octet-stream");
            header("Content-Disposition: attachment; filename=\"".basename($filepath)."\"");
            header("Cache-Control: must-revalidate");
            header("Content-Control: public");
            header("Content-Transfer-Encoding: binary");
            header("Content-Length:".filesize($filepath));
            header("Expired:0");
            header("Pragma:public");
            ob_clean();
            flush();
            readfile($filepath);
            exit();
        }else{
            echo "File tidak ditemukan";   
        }
    }else{
        header("Location: persyaratan.php");
    }
?>