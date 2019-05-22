<html>
<head>
    <?php $this->load->view("_partials/head.php")?>
</head>


<body>
    <div class="container">
        <?php $this->load->view("_partials/navbar.php")?>
    </div>

    <div class="container">
    <form action="<?php echo base_url().'home/bilangan_e'?>" method="post" enctype="multipart/form-data" >
    <h3>Ini bagian BoB</h3>
        <div class="form-group">
            <label for="uname">Nilai E</label>
            <input type="number" class="form-control" id="uname" placeholder="Bilangan Acak" name="xbile" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">kirim</button>
    </form>
    </div>



<?php $this->load->view("_partials/js.php") ?>
    </body>
</html>