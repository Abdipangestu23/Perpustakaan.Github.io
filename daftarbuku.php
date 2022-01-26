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
        <div class="row mt-2">
            <h2 style="text-align: center;" class="alert alert-info mt-3 ">DAFTAR BUKU</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
             <div class="col-sm-3">
                     <div class="card" style="width: 18rem;">
                     <div class="card-body">
                      <img src="walpaper/3.jfif" class="card-img-top" alt="...">
                        <h5 class="card-title" align="center">Sehat itu penting</h5>
                        <p class="card-text" align="center">jadilah orang yang selalu menjaga kesehatan</p>
                         <a href="tambah.php" class="btn btn-primary" > PINJAM! </a>
                    </div>
                </div>  
             </div>
             <div class="col-sm-3">
                     <div class="card" style="width: 18rem;">
                     <div class="card-body">
                     <img src="walpaper/4.jfif" class="card-img-top" alt="...">
                    <h5 class="card-title" align="center">Bimbingan Konsuling</h5>
                    <p class="card-text"align="center">mejaga dan memperbaiki ahlak manusia</p>
                     <a href="tambah.php" class="btn btn-primary"> PINJAM! </a>
                 </div>
            </div>
        </div>
        <div class="col-sm-3">
                     <div class="card" style="width: 18rem;">
                     <div class="card-body">
                     <img src="walpaper/3.jfif" class="card-img-top" alt="...">
                    <h5 class="card-title"align="center">Special title treatment</h5>
                    <p class="card-text"align="center">With supporting text below as a natural lead-in to additional content.</p>
                     <a href="tambah.php" class="btn btn-primary"> PINJAM! </a>
                 </div>
            </div>
        </div>
        <div class="col-sm-3">
                     <div class="card" style="width: 18rem;">
                     <div class="card-body">
                     <img src="walpaper/3.jfif" class="card-img-top" alt="...">
                    <h5 class="card-title"align="center">Special title treatment</h5>
                    <p class="card-text"align="center">With supporting text below as a natural lead-in to additional content.</p>
                     <a href="#" class="btn btn-primary"> PINJAM! </a>
                 </div>
            </div>
        </div>
    </div>
    </div>


</body>
      