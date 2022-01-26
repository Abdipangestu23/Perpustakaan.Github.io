<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        include 'navbar.php';
        ?>
        <div class="row mt-3">
            <?php
            
            require 'setting.php';
            $query = "SELECT * FROM tbl_data";
            $sql = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_object($sql)) {
            ?>

                <div class="col mb-2">
                    <div class="card" style="width: 18rem;">
                    
                        <img src="gambar/<?= $data->foto; ?>" class="card-img-top" style="height: 13rem;">
                        <div class="card-body">
                            <h5 style="text-align: center;"><?= $data->nama; ?></h5>
                            <hr>
                            <p class="card-text">Jenis Kelamin :<?= $data->jenis_kelamin; ?></p>
                            <p class="card-text">Nama Buku :<?= $data->nama_buku; ?></p>
                            <p class="card-text">Jumlah Buku :<?= $data->Jumlah_Buku; ?></p>
                            <p class="card-text">Tgl Pinjam Buku :<?= $data->tgl_pinjam_buku; ?></p>
                            <p class="card-text">Tgl Kembalian Buku :<?= $data->tgl_kembalian_buku; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>