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
            <a class="nav-link" href="<?php echo site_url('mahasiswa')?>">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mahasiswa/verifikasi')?>">Verifikasi Mahasiswa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mahasiswa/keygenerator')?>">Bangun Kunci Mahasiswa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home')?>">Digital Schnorr</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home/key_generation')?>">Digital Schnorr 1</a>
            </li>
        </ul>
        </nav>

        <?php $this->load->view("_partials/js.php") ?>
    </body>
</html>