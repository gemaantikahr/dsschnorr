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
        <hr>
        <h4>Menghitung nilai hash E = H(M, x) oleh alise</h4>
        <?php
            $a = array();
            $nilaie = array();
            for($i =0; $i<$batas; $i++):
                echo "M(".($i+1).")".$pecah[$i]." kode ascii = ".ord($pecah[$i]).$nilaix." = ".$simpan[$i];
                for($j=0; $j<4; $j++):
                    $simpane[$i][$j]= ord($simpan[$i][$j]);    
                    array_push($a, ord($simpan[$i][$j]));
                endfor;
                $nilaie[$i] = implode("",$a);
                unset($a);
                $a = array();
                echo $nilaie[$i]."<br>";
            endfor;
        ?>
        <hr>
        <h4>Menghitung nilai Y = (r + se ) mod q oleh alise</h4>
        <h6>Menghitung nilai Y = (<?php echo $bil_r?> + <?php echo $bil_s?>*e ) mod <?php echo $bil_q?> oleh alise</h6>
        <?php

            $tampung = $bil_s*$c;
            $tampung1 = $tampung + $a;
            $hasil = fmod($tampung1,$d);
            echo $hasil;
            for($i =0; $i<$batas; $i++):
                $tampungkali = $bil_s*$nilaie[$i];
                $tampungjumlah = $tampungkali + $bil_r;
                $nilaiy[$i] = fmod($tampungjumlah,$bil_q);
                echo "Y(".($i+1).")"." = "."(".$bil_r."+"."(".$bil_s."*".$nilaie[$i]."))"."mod".$bil_q." = ". $nilaiy[$i]."<br>";
            endfor;
        ?>

    
    </div>
    <?php $this->load->view("_partials/js.php")?>
</body>
</html>