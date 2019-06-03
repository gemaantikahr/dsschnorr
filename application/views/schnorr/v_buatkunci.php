<?php 
    // cari nilai p
    $this->load->view("fastexponent.php");
    $syarat = 0;
    while($syarat !=1){
    $index = 0;
    $indexgcd = 0;
    for($i=100; $i<=2100; $i++):
        $a=0;
        for($j=1; $j<=$i; $j++):
            if($i % $j == 0):
                $a++;
            endif;
        endfor;
        if($a==2):
            $bilanganprima[$index] = $i;
            $index++;
        endif;
    endfor;
    $randomindex = array_rand($bilanganprima);
    $nilai_p = $bilanganprima[$randomindex];
    //dapet nilai p

    // cari nilai q
    $bilgcd = $nilai_p-1;
    $tempp2 = $bilgcd;
    for($i=2; $i<=$tempp2; $i++){
        if($tempp2 % $i==0) {
            if($i>2){
            // echo " * ";
            }               
            // echo $i;
            $simpan_q[$indexgcd] = $i;
            $indexgcd++; 
                $tempp2 /= $i;
                $i--;
            }
        }
    //dapet nilai q
        // cari nilai a
        $randomindexgcd = array_rand($simpan_q);
        $nilai_q = $simpan_q[$randomindexgcd];
        $nilai_a = mt_rand(1, 100000);
        $nilai_s = mt_rand(1, ($nilai_q-1));
        $nilai_r = mt_rand(1, ($nilai_q-1));
        // dapet nilai a
        $syarat = carinilai($nilai_a,$nilai_q,$nilai_p);
    };
    
?>
<html>
<head>
    <?php $this->load->view("_partials/head.php")?>
</head>


<body>
    <div class="container">
    <?php $this->load->view("_partials/navbar.php")?>
    <?php 
        $nilai_x = carinilai($nilai_a,$nilai_r,$nilai_p);
    ?>
    </div>

    <div class="container">
    <form action="<?php echo base_url().'home/simpan_kunci/'.$nim?>" method="post" enctype="multipart/form-data" >
    <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan P :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $nilai_p?>" name="xbilp" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan Q :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $nilai_q?>" name="xbilq" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan A :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $nilai_a?>" name="xbila" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan S :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $nilai_s?>" name="xbils" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <?php 
                    $A=array(array($nilai_p,$nilai_a  ),array(1,0),array(0,1)); 
                    for($i = 0; $i<3; $i++){
                        for($j=0; $j<2; $j++){
                            // echo $A[$i][$j]." ";
                        }
                        // echo "<br>";
                    }

                    while($A[0][1]!=0){
                    //echo 
                    $nM =(intdiv($A[0][0], $A[0][1]));
                    for($nI=0; $nI<3; $nI++){
                        $nX = $A[$nI][0]-$nM*$A[$nI][1];
                        $A[$nI][0] = $A[$nI][1];
                        $A[$nI][1] = $nX;
                    }

                    // echo "<br>";
                    // echo "setelah di rubah";
                    // echo "<br>";
                    for($i = 0; $i<3; $i++){
                        for($j=0; $j<2; $j++){
                            //echo $A[$i][$j]." ";
                        }
                        // echo "<br>";
                    }
                    }
                    if($A[2][0]>=0){
                        $nilaiee=$A[2][0];
                    }else{
                        $nilaiee=$A[2][0]+$nilai_p;
                    }
                    // echo "nilai Extend = ".$nilaiee;
                    $nilai_v = carinilai($nilaiee,$nilai_s,$nilai_p);
                ?>
        <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan V :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $nilai_v?>" name="xbilv" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan R :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $nilai_r?>" name="xbilr" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan X :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $nilai_x?>" name="xbilx" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('mahasiswa/proses_schnorr/'.$nim)?>" class="btn btn-info" role="button">Schnorr</a>
    </form>

    </div>



<?php $this->load->view("_partials/js.php") ?>
    </body>
</html>