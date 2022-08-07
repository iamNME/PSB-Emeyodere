<!DOCTYPE html>
<html lang="en">
<?php
    include 'head.php';
?>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col pl-0 pr-0">
                    <img src="assets/images/sekolah5.jpeg" width="100%" height="400" alt="Picture" style="object-fit: fill; object-position: top right;">
                    <!-- <div class="jumbotron p-0">
                        <img src="assets/images/sekolah1.jpeg" width="100%" height="510" style="object-fit: cover; object-position: top left" alt="Picture">
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container pb-120" style="padding-top: 5rem">
            <div class="row">
                <div class="col">
                    <div class="headline-tentangsklh">
                        <h4 style="text-transform: uppercase; letter-spacing: 2px">Struktur Organisasi</h4>
                    </div>
                </div>
            </div>
            <div class="row mt-4 text-center">
                <div class="col">
                    <div class="item">
                        <a href="assets/images/struktur_organisasi.png" class="fancybox" data-fancybox="gallery1">
                            <img class="str-img" src="assets/images/struktur_organisasi.png" alt="Struktur Organisasi">    
                        </a>
                    </div>
                    <!-- <img class="str-img" src="assets/images/struktur_organisasi.png" alt="Struktur Organisasi"> -->
                </div>
            </div>
        </div>
    </main>
    <?php 
        include 'footer.php';
    ?>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="bootstrap-4.6.0/js/bootstrap.bundle.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        let navLink = document.getElementById('navbarDropdown');
        navLink.classList.add('aktif');
    </script>
</body>
</html>