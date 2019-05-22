<html>
    <head>
    <?php $this->load->view("_partials/head.php")?>
    </head>
<body>
    <div class="container">
        <?php $this->load->view("_partials/navbar.php")?>
    </div>
    <div class="container">
        <div class="row">
        <?php foreach($mahasiswa as $data):?>
            <div class="col-sm-4">Nim</div>
            <div class="col-sm-8"><?php echo $data->nim?></div>
            <hr>
            <div class="col-sm-4">Nama</div>
            <div class="col-sm-8"><?php echo $data->nama?></div>
            <hr>
            <div class="col-sm-4">Alamat</div>
            <div class="col-sm-8"><?php echo $data->alamat?></div>
            <hr>
            <div class="col-sm-4">Tanggal Lahir</div>
            <div class="col-sm-8"><?php echo $data->tanggallahir?></div>
            <hr>
            <div class="col-sm-4">Jurusan</div>
            <div class="col-sm-8"><?php echo $data->jurusan?></div>
            <hr>
            <div class="col-sm-4">Tahun Masuk</div>
            <div class="col-sm-8"><?php echo $data->tahunmasuk?></div>
        </div>
        <?php endforeach?>
        </div>
        <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Matakuliah</th>
                        <th>sks</th>
                        <th>Nilai</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($nilai as $data):?>
                    <tr>
                        <td><?php echo $data->id_mk?></td>
                        <td><?php echo $data->nama_mk?></td>
                        <td><?php echo $data->sks?></td>
                        <td><?php echo $data->nilai?></td>
                    </tr>
                    <?php endforeach?>
                    </tbody>
                </table>            
        </div>
        <!-- hasing data -->
        <?php 
            $hashingpertama = sha1($hashdata->nama.$hashdata->nim.$hashdata->jurusan.$hashdata->tanggallahir.$hashdata->alamat.$hashdata->tahunmasuk.$hashdata->tahunlulus);
            $i =0;
            foreach($hashdata1 as $data){
                $simpan[$i] = sha1($data->nim.$data->idmatkul.$data->nilai);
                $i++;
            }
            $hashsemua = sha1($hashingpertama.$simpan[0]);
        ?>
        <!-- hasing data -->

    <?php if($dsstored==$hashsemua){
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">DS Processed</div>
            <div class="col-sm-8"><?php echo $hashsemua?></div>
            <div class="col-sm-4">DS Stored</div>
            <div class="col-sm-8"><?php echo $dsstored?></div>
            <div class="col-sm-12"><div class="alert alert-info" role="alert">
    Sudah Terverifikasi di ITB dan IPB dan UAD.!
        </div>
    <?php }else{?>
        <div class="container">
        <div class="row">
            <div class="col-sm-4">DS Processed</div>
            <div class="col-sm-8"><?php echo $hashsemua?></div>
            <div class="col-sm-4">DS Stored</div>
            <div class="col-sm-8"><?php echo $dsstored?></div>
            <div class="col-sm-12"><div class="alert alert-danger" role="alert">
         Belum terferivikasi.! silahkan menghubungi Administrator
        </div>
        </div>
    <?php } ?>
    <a href="<?php echo site_url('mahasiswa/schnorr/'.$nim)?>" class="btn btn-info" role="button">Lakukan Schnorr</a>
    <?php $this->load->view("_partials/js.php")?>
</body>
</html>