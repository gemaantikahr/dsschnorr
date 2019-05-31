
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
    <h6><?php echo $nama?></h6>
    <form action="<?php echo base_url().'mahasiswa/cek_kunci/'.$nim?>" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="uname">Masukkan kunci public :</label>
            <input type="number" class="form-control" id="uname" placeholder="kunci public" name="xpublik" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">kirim</button>
    </form>
    </div>
<?php $this->load->view("_partials/js.php") ?>
    </body>
</html>