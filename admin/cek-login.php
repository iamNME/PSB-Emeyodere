<?php
    session_start();
    include '../config/koneksi.php';

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM admin WHERE username='$username'";
        $query = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if(password_verify($password, $row['password'])){
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = $row['level'];
                    $_SESSION['status'] = 'login';
                    header("Location: ./panel/");
                }else{
                    header("Location: index.php?pesan=gagal_login");
                }
            }
        }else{
            header("Location: index.php?pesan=gagal_login");
        }
    }
?>