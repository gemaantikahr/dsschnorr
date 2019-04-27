<html>
    <head>
    <?php $this->load->view("_partials/head.php")?>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="bird.jpg" alt="logo" style="width:40px;">
        </a>
        
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Verifikasi Mahasiswa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Digital Schnorr</a>
            </li>
        </ul>
        </nav>

        <?php $this->load->view("_partials/js.php") ?>
    </body>
</html>