
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
    <form action="<?php echo base_url().'home/bilangan_x'?>" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="uname">Nilai Bilangan P :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_p?>" name="xbilp" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Nilai Bilangan A :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_a?>" name="xbila" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Nilai Bilangan R :</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $bil_r?>" name="xbilr" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
            <label for="uname">Nilai Bilangan X : A^R mod P</label>
            <input type="number" class="form-control" id="uname" placeholder="Bilangan Acak" name="xbilx" value="<?php echo carinilai($bil_a, $bil_r, $bil_p);?>" required readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">kirim</button>
    </form>
    </div>



<?php $this->load->view("_partials/js.php") ?>
    </body>
</html>