<html>
    <head>
    <?php $this->load->view("_partials/head.php")?>
    </head>
<body>
    <div class="container">
        <?php $this->load->view("_partials/navbar.php")?>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($mahasiswa as $data):?>
                <?php if($data->dsstored == NULL){?>
                    <tr>
                        <td><?php echo $data->nim?></td>
                        <td><?php echo $data->nama?></td>
                        <td>
                            <button type="button" class="btn btn-danger"> Belum Terferifikasi</button>
                        </td>                       
                        <td><a href="<?php echo site_url('mahasiswa/proses_verif/'.$data->nim)?>" class="btn btn-info col-12">Verifikasi</a>
                        </td>
                    </tr>
                <?php }else{?>
                    <tr>
                        <td><?php echo $data->nim?></td>
                        <td><?php echo $data->nama?></td>
                        <td>
                            <button type="button" class="btn btn-success"> Sudah Terferifikasi</button>
                        </td>
                        <td><a href="<?php echo site_url('mahasiswa/detail/'.$data->nim)?>" class="btn btn-info col-12">Detail</a>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
            <?php endforeach?>
        </table>
    </div>
    <?php $this->load->view("_partials/js.php")?>
</body>
</html>