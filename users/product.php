<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Product Detail Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">\

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .left-images img {
            max-width: 80%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .right-content {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .right-content h4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }

        .right-content span {
            display: block;
            margin-bottom: 15px;
            color: blue;
        }

        .right-content div {
            margin-bottom: 15px;
            color: black;
        }


        .section {
            padding: 70px 0;
        }

        .right-content {
            padding: 40px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Store Cake</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../users/produk.php">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="../users/about.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    include '../koneksi.php';

    $pro = mysqli_query($conn, "SELECT * from produk where id='$_GET[id]'");  //mengambil data produk dari tabel "produk" dengan syarat bahwa nilai kolom "id" sama dengan nilai yang diterima melalui parameter GET $_GET['id'].

    while ($p = mysqli_fetch_array($pro)) {  // Ini adalah loop while yang akan terus berjalan selama masih ada baris yang dapat diambil dari hasil query. 
        $id = $p["id"];
        $produk = $p["produk"];
        $gambar = $p["gambar"];
        $stok = $p["stok"];
        $deskripsi = $p["deskripsi"];
    }

    ?>

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <img src="<?php echo $gambar ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>
                            <?php echo $produk ?>
                        </h4>
                        <div>
                            ★★★★★
                        </div>
                        <span>Stok :
                            <?php echo $stok; ?>
                        </span>

                        <div>Deskripsi :
                            <?php echo $deskripsi; ?>
                        </div>
    </section>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</html>