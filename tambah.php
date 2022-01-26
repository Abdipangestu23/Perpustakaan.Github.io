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
        <h2 class="alert alert-info mb-3 mt-3"> TAMBAH DATA </h2>
        <?php
        require 'setting.php';
        if (isset($_POST['simpan'])) {
            $txtfoto = $_POST['txtfoto'];
            $txtnama = $_POST['txtnama'];
            $txtjk = $_POST['txtjk'];
            $txtjurusan = $_POST['txtjurusan'];
            $txtkelas = $_POST['txtkelas'];
            $txtpinjam = $_POST['txtpinjam'];
            $txtkembali = $_POST['txtkembali'];
            $txtbuku = $_POST['txtbuku'];
            $txtjumlah = $_POST['txtjumlah'];
            $sql = "INSERT INTO tbl_data VALUES (NULL, '$txtfoto', '$txtnama', '$txtjk', '$txtjurusan', '$txtkelas', '$txtpinjam', '$txtkembali', '$txtbuku', '$txtjumlah')";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                header('location: home.php');
            } else {
                echo 'Query Error : ' . mysqli_error($koneksi);
            }
        }

        ?>
        <form action="#" method="POST">
            <div class="mb-3">
                <label>Foto</label>
                <input type="file" name="txtfoto">
            </div>

            <div class="mb-3">
                <label>Nama :</label>
                <input type="text" name="txtnama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label style="font-weight: bold;">Jenis Kelamin</label><br>
                <input type="radio" name="txtjk" value="Laki-laki"> Laki-laki<br>
                <input type="radio" name="txtjk" value="Perempuan"> Perempuan<br>
            </div>

            <div class="mb-3">
                <label>Jurusan</label>
                <input type="text" name="txtjurusan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="txtkelas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Nama Buku</label>
                <input type="kalender" name="txtbuku" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Jumlah Buku Yang Di Pinjam</label>
                <input type="number" name="txtjumlah" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Tanggal Pinjam Buku</label>
                <input type="date" name="txtpinjam" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Tanggal Kembalian Buku</label>
                <input type="date" name="txtkembali" class="form-control" required>
            </div>


            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            <a href="home.php" class="btn btn-secondary"> HOME </a>
        </form>
    </div>
</body>
