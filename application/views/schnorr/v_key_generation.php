<html>
<head>
    <?php $this->load->view("_partials/head.php")?>
</head>


<body>
    <div class="container">
        <?php $this->load->view("_partials/navbar.php")?>
    </div>

    <div class="container">
    <form action="<?php echo base_url().'home/cek_bilangan_1'?>" method="post" enctype="multipart/form-data" >
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
        <button type="submit" class="btn btn-primary">kirim</button>
    </form>
    </div>
<?php $this->load->view("_partials/js.php") ?>
    </body>
</html>