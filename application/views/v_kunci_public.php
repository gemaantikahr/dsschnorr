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
                <th>Kunci</th>
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($publik as $data):?>
            <tr>
                <td><?php echo $data->nim?></td>
                <td><?php echo $data->nama?></td>
                <td><?php echo $data->bil_v?>
                <td><a href="<?php echo site_url('mahasiswa/delete_kunci/'.$data->nim)?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            </tbody>
            <?php endforeach?>
        </table>
    </div>
    <?php $this->load->view("_partials/js.php")?>
</body>
</html>