<html>
<head>
    <?php $this->load->view("_partials/head.php")?>
</head>


<body>
    <div class="container">
        <?php $this->load->view("_partials/navbar.php")?>
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
        <div class="container">
                <div class="alert alert-info">
                    <strong><?php echo "V = ".$bilv ?>
                </div> 
            </div>

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

        
    <div class="container">
    <form action="<?php echo base_url().'home/bilangan_r'?>" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="uname">Masukkan Bilangan R :</label>
            <input type="number" class="form-control" id="uname" placeholder="r<<?php echo $bilq?>" name="xbilr" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">kirim</button>
    </form>
    </div>

<?php $this->load->view("_partials/js.php") ?>
    </body>
</html>