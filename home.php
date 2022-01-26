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
    <div class="container mt-2">
        <?php
        include 'navbar.php';
        ?>

        <h2 style="text-align: center;" class="alert alert-info mt-3 ">HALAMAN DATA PEMINJAMAN</h2>

        <table class="table table-bordered">
            <thead class="table-warning">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>Nama Buku</th>
                    <th>Jumlah Buku Yang Dipinjam</th>
                    <th>Tanggal Pinjam Buku</th>
                    <th>Tanggal Kembalian Buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-info">
                <?php
                require 'setting.php';
                $query = "SELECT * FROM tbl_data";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>
                    <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <a href="gambar/<?= $data->foto; ?>"><?= $data->foto; ?></a></td>
                        <td> <?php echo $data->nama; ?> </td>
                        <td> <?php echo $data->jenis_kelamin; ?> </td>
                        <td> <?php echo $data->jurusan; ?> </td>
                        <td> <?php echo $data->kelas; ?> </td>
                        <td> <?php echo $data->nama_buku; ?> </td>
                        <td> <?php echo $data->Jumlah_Buku; ?> </td>
                        <td> <?php echo $data->tgl_pinjam_buku; ?> </td>
                        <td> <?php echo $data->tgl_kembalian_buku; ?> </td>
                        <td>
                            <a href="edit.php?url-id=<?= $data->id; ?>">
                                <input type="submit" value="Edit" class="btn btn-warning">
                            </a>
                            <a href="hapus.php?id=<?= $data->id; ?>">
                                <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
                            </a>
                        </td>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
        <a href="tambah.php" class="btn btn-primary mb-3"> TAMBAH DATA </a>

    </div>
</body>

</html>