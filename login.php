<?php
session_start();
require 'setting.php';
if (isset($_POST['login'])) {
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];

    $query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' and password = '$password'");

    if (mysqli_num_rows($query) === 1) {
        $data = mysqli_fetch_object($query);

        $_SESSION['login'] = true;
        $_SESSION['fullname'] = $data->fullname;
        $_SESSION['role'] = $data->role;
        header('location: daftarbuku.php');
    }
    echo  $error = 'Username atau Password Salah';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body background="walpaper/4.jfif" >

    <div class="container">
        <div class="row mt-8">
            <div class="col-12">
                <div style="box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);border-radius: 15px; height: 300px;margin: 12rem auto 8.1rem auto;width: 329px; background-color: darkturquoise;" class="card card-body">
                    <h3 style="text-align: center; color: dark; font-weight: bold; ">Login</h3>
                    <br />
                    <Form action="" method="POST">
                        <input type="text" name="txtusername" class="form-control mb-3" placeholder="Masukan Username">
                        <input type="password" name="txtpassword" class="form-control mb-3" placeholder="Masukan Password">
                        <button type="submit" value="login" name="login" class="btn btn-primary">Login</button>

                    </form>

                </div>

            </div>

        </div>

    </div>
</body>