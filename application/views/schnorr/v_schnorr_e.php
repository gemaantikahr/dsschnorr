<html>
    <head>
    <?php $this->load->view("_partials/head.php")?>
    </head>
<body>
    <div class="container">
        <?php $this->load->view("_partials/navbar.php")?>
    </div>
    <div class="container">
        <h4>Nama : <?php echo $namamhs;?></h4>
        <div class="alert alert-success">
            <?php echo $nilaihash?>
        </div>
        <?php 
        $nilaix = 470752;
        $batas = strlen($nilaihash);
        $pecah = str_split($nilaihash, 1);
        for($i =0; $i<$batas; $i++):
            echo "M(".($i+1).")".$pecah[$i]." kode ascii = ".ord($pecah[$i]).$nilaix." nilai hasnya = ".sha1(ord($pecah[$i]).$nilaix)." => 4 karakter terakhir ".$simpan[$i]=substr(sha1(ord($pecah[$i]).$nilaix),0,4)."<br>";
        endfor;
        ?>
    
    </div>
    <?php $this->load->view("_partials/js.php")?>
</body>
</html>