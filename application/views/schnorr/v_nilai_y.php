<html>
<head>
    <?php $this->load->view("_partials/head.php")?>
</head>


<body>
    <div class="container">
        <?php $this->load->view("_partials/navbar.php")?>
    </div>

    <div class="container">
    <form action="<?php echo base_url().'home/bilangan_y'?>" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="uname">Nilai Bilangan R :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_r?>" name="xbilr" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Nilai Bilangan S :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_s?>" name="xbila" readonly>
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
            <label for="uname">Nilai Bilangan Q :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_q?>" name="xbilr" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <?php 
            $temp1 = $bil_s*$bil_e;
            $temp2 = $bil_r+$temp1;
            $bil_y = $temp2 % $bil_q;

        ?>
        <div class="form-group">
            <label for="uname">Nilai Bilangan Y : (r + se ) mod q</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_y?>" name="xbily" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">kirim</button>
    </form>
    </div>



<?php $this->load->view("_partials/js.php") ?>
    </body>
</html>