<html>
    <head>
    <?php $this->load->view("_partials/head.php")?>
    </head>
<body>
    <div class="container">
        <?php $this->load->view("_partials/navbar.php")?>
        <?php $this->load->view("fastexponent.php")?>
    </div>
    <div class="container">
        <h4>Nama : <?php echo $namamhs;?></h4>
        <div class="alert alert-success">
            <?php echo $nilaihash?>
        </div>
        <?php
        $batas = strlen($nilaihash);
        $pecah = str_split($nilaihash, 1);
        for($i =0; $i<$batas; $i++):
            //echo "M(".($i+1).")".$pecah[$i]." kode ascii = ".ord($pecah[$i]).$bil_x." nilai hasnya = ".sha1(ord($pecah[$i]).$bil_x)." => 4 karakter terakhir "."<br>";
            $simpan[$i]=substr(sha1(ord($pecah[$i]).$bil_x),0,4);
        endfor;
        ?>
        <!-- <h4>Menghitung nilai hash E = H(M, x) oleh alise</h4> -->
        <?php
            $a = array();
            $nilaie = array();
            for($i =0; $i<$batas; $i++):
                //echo "M(".($i+1).")".$pecah[$i]." kode ascii = ".ord($pecah[$i]).$bil_x." = ".$simpan[$i];
                for($j=0; $j<4; $j++):
                    $simpane[$i][$j]= ord($simpan[$i][$j]);    
                    array_push($a, ord($simpan[$i][$j]));
                endfor;
                $nilai_e[$i] = implode("",$a);
                unset($a);
                $a = array();
                //echo $nilai_e[$i]."<br>";
            endfor;
            $implodenilaie = implode(',',$nilai_e);
            $this->m_perhitungan->simpan_implode_e($implodenilaie, $nim);
        ?>
        <hr>
        <!-- <h4>Menghitung nilai Y = (r + se ) mod q oleh alise</h4>
        <h6>Menghitung nilai Y = (<?php echo $bil_r?> + <?php echo $bil_s?>*e ) mod <?php echo $bil_q?> oleh alise</h6> -->
        <?php
            
            for($i =0; $i<$batas; $i++):        
                  $nilai_y[$i] = fmod((($bil_r+($bil_s*$nilai_e[$i]))),$bil_q);  
                  //echo "(".$bil_r."+(".$bil_s."*".$nilai_e[$i].")) mod ".$bil_q." = ".$nilai_y[$i]."<br>";      
            endfor;
            $implodenilaiy = implode(',',$nilai_y);
            //echo $implodenilaiy;
            $this->m_perhitungan->simpan_implode_y($implodenilaiy, $nim);
        ?>
        <?php
            for($i=0; $i<$batas; $i++):        
                $pertama = carinilai($bil_a,$nilai_y[$i],$bil_p);
                $kedua = carinilai($bil_v,$nilai_e[$i],$bil_p);
                $ketiga = $pertama * $kedua;
                $nilai_x_aksen[$i] = fmod($ketiga,$bil_p);
            endfor;
        ?>
        <div class="alert alert-success">
            <strong>Nilai E <?php echo $implodenilaie;?></strong> 
        </div>
        <div class="alert alert-success">
            <strong>Nilai Y <?php echo $implodenilaiy;?></strong> 
        </div>
        <!-- <div class="alert alert-success">
            <strong>Lanjut ke bob</strong> Verifikasi bob (((a^y) mod p) * ((v^e) mod p)) mod p)
        </div> -->
        <?php 
            for($i=0; $i<$batas; $i++): 
             //echo ($i+1)." -> (((".$bil_a."^".$nilai_y[$i].") mod ".$bil_q.")*((".$bil_v."^".$nilai_e[$i].") mod ".$bil_p.")) mod ".$bil_p." = ".$nilai_x_aksen[$i]."<br>";
            endfor;
        ?>
        <!-- <div class="alert alert-success">
            <strong>Lanjut ke bob</strong> Menggabungkan M dan X' dan melakukan verifikasi:  e = H(M, x') 
        </div> -->
        <?php
            for($i =0; $i<$batas; $i++):
                //echo "M(".($i+1).")".$pecah[$i]." kode ascii = ".ord($pecah[$i]).$nilai_x_aksen[$i]." nilai hasnya = ".sha1(ord($pecah[$i]).$nilai_x_aksen[$i])." => 4 karakter terakhir ".
                $simpan_aksen[$i]=substr(sha1(ord($pecah[$i]).$bil_x),0,4)."<br>";
            endfor; 
            for($i=0; $i<$batas; $i++): 
                //echo "M(".($i+1).")".$pecah[$i]." kode ascii = ".ord($pecah[$i]).$nilai_x_aksen[$i]." = ".$simpan_aksen[$i];
                for($j=0; $j<4; $j++):
                    $simpane_aksen[$i][$j]= ord($simpan_aksen[$i][$j]);    
                    array_push($a, ord($simpan_aksen[$i][$j]));
                endfor;
                $nilai_e_aksen[$i] = implode("",$a);
                unset($a);
                $a = array();
                // if($nilai_e_aksen[$i]==$nilai_e[$i]){
                //     echo $nilai_e_aksen[$i]." = ".$nilai_e[$i]." <strong>TRUE</strong><br>";
                // }
            endfor;
        ?>    
    </div>
    <?php $this->load->view("_partials/js.php")?>
</body>
</html>