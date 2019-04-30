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
    </div>
    <div class="container">
    <form action="<?php echo base_url().'mahasiswa/simpan_dsstored/'.$nim?>" method="post">
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo $hashsemua?>" id="myInput" readonly>
                    <div class="input-group-append">
                        <button class="btn btn-secondary" onclick="myFunction()">Copy</button> 
                    </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="xkode" placeholder="Masukkan kode verifikasi di atas">
                    <div class="input-group-append">
                        <input type="submit" name="submit" class="btn btn-info" value="submit">  
                    </div>
            </div>
        </div>
    </form>
    </div>
    <script>
        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();

            /* Copy the text inside the text field */
            document.execCommand("copy");

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        } 
    </script>
    <?php $this->load->view("_partials/js.php")?>
</body>
</html>