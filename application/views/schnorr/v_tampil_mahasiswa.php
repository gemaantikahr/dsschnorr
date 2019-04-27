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
                <th>Jurusan</th>
                <th>Tanggal Lahir</th>
                <th>Tahun Masuk</th>
                <th>Tahun Lulus</th>
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($mahasiswa as $data):?>
            <tr>
                <td><?php echo $data->nim?></td>
                <td><?php echo $data->nama?></td>
                <td><?php echo $data->jurusan?></td>
                <td><?php echo $data->tanggallahir?></td>
                <td><?php echo $data->tahunmasuk?></td>
                <td><?php echo $data->tahunlulus?></td>
                <td><a href="<?php echo site_url('mahasiswa/detail/'.$data->nim)?>" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            </tbody>
            <?php endforeach?>
        </table>
    </div>
    <?php $this->load->view("_partials/js.php")?>
</body>
</html>