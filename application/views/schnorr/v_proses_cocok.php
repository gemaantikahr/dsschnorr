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
    <form action="<?php echo base_url().'home/bilangan_y'?>" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="uname">Nilai Bilangan A :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_a?>" name="xbilr" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Nilai Bilangan Y :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_y?>" name="xbila" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Nilai Bilangan V :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_v?>" name="xbilr" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Nilai Bilangan E :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_e?>" name="xbilr" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Nilai Bilangan P :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_p?>" name="xbilr" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <?php
        $pertama = carinilai($bil_a,$bil_y,$bil_p);
        $kedua = carinilai($bil_v,$bil_e,$bil_p);
        $ketiga = $pertama * $kedua;
        $hasil = fmod($ketiga,$bil_p);        
        ?>
        <div class="form-group">
            <label for="uname">Verifikasi bob (((a^y) mod p) * ((v^e) mod p)) mod p)</label>
        </div>
        <?php 
            if($hasil == $bil_x):
        ?>
        <div class="alert alert-success">
        <?php echo $hasil." = ".$bil_x." <strong>True</strong>"?>
        </div>
            <?php else:?>
            <div class="alert alert-danger">
                <?php echo $hasil." != ".$bil_x." <strong>False</strong>"?>
            </div>
            <?php endif?>
    </form>
    </div>



<?php $this->load->view("_partials/js.php") ?>
    </body>
</html>