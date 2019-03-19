<html>
<?php $this->load->view("_partials/head.php")?>
    <body>
<body>

    <div class="container">
    <form action="<?php echo base_url().'home/cek_bilangan'?>" method="post" enctype="multipart/form-data" >
    <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan P :</label>
            <input type="number" class="form-control" id="uname" placeholder="Bilangan prima" name="xbilp" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan Q :</label>
            <input type="number" class="form-control" id="uname" placeholder="Bilangan prima" name="xbilq" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan S :</label>
            <input type="number" class="form-control" id="uname" placeholder="Bilangan prima" name="xbils" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan A :</label>
            <input type="number" class="form-control" id="uname" placeholder="Bilangan Acak" name="xbila" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <!-- <div class="form-group">
            <label for="uname">Masukkan Bilangan Bilangan Q :</label>
            <input type="text" class="form-control" id="uname" placeholder="Bilangan prima" name="xbilq" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div> -->

        <button type="submit" class="btn btn-primary">kirim</button>
    </form>
    </div>



    <!-- cek bilangan prima ato bukan -->
    <?php 
        $jum=0;
        $tempp = $bilp;
        for ($i=1;$i<=$tempp;$i++){
            if ($tempp % $i==0){
                $jum++;
           }
       } 
        if ($jum == 2){ ?>
            <div class="container">
                <div class="alert alert-info">
                    <strong><?php echo "P = ".$tempp ?></strong> adalah bilangan <strong>Prima</strong>.
                </div> 
            </div>
        <?php }
        else{ ?>
            <div class="container">
                <div class="alert alert-danger">
                    <strong><?php echo "P = ".$tempp ?></strong> adalah Bukan Bilangan <strong>Prima</strong>.
                </div> 
            </div>
        <?php }
    ?>

        <!-- cek bilangan prima ato bukan -->
        
    <!-- mencari faktor prima dari suatu bilangan -->
    <?php $tempp1 = $bilgcd;
    for($i=2; $i<=$tempp1; $i++){
        if($tempp1 % $i==0) {
        //     if($i>2){
        //         echo " * ";
        // }

            if($i == $bilq){ ?>
                <div class="container">
                    <div class="alert alert-info">
                        <strong><?php echo "Q = ".$i ?></strong> adalah Bilangan Prima dan Faktor dari  <strong><?php echo $bilgcd?></strong>.
                    </div> 
                </div>
            <?php }
            $tempp1 /=$i;
            $i--;
        }
    }
    ?>

    <div class="container">
        <div class="alert alert-info">
            <?php $tempp2 = $bilgcd;
            for($i=2; $i<=$tempp2; $i++){
        
                if($tempp2 % $i==0) {
                if($i>2){
                echo " * ";
                }?>
                
                        <?php echo $i ?>
                        <?php $tempp2 /= $i;
                        $i--;
                    }
                }
            ?> merupakan faktor prima dari <?php echo $bilgcd?>
        </div> 
    </div>

    <?php if($bils > $bilq){
        ?>
        <div class="container">
            <div class="alert alert-info">
                <?php echo "S = ".$bils." Tidak boleh lebih besar dari".$bilq ?>
            </div> 
        </div>
    <?php }else{?>
        <div class="container">
            <div class="alert alert-info">
                <?php echo "Nilai Bilangan S = ".$bils?>
            </div> 
        </div>
    <?php }?>
        <div class="container">
            <div class="alert alert-info">
                <?php echo "A = ".$bila?>
            </div> 
        </div>

        <div class="container">
            <div class="alert alert-info">
               <?php 

                    $singkat1 = pow($bila, -1);
                    $singkat2 = pow($singkat1, $bils);
                    $singkat3 = $singkat2%$bilp;
                    echo $singkat2;

               ?>
            </div> 
        </div>

        

</body>
</html>


<?php $this->load->view("_partials/js.php") ?>
    </body>
</html>