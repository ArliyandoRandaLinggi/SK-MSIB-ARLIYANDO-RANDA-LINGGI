<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" />

    <style>
        .footertop {
            position: relative;
            display: inline-block;
            height: auto;
            width: 100%;
            margin: 0;
            padding: 0;
            background: #fff;
            color: #069370;
        }

        .footerbottom {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 10px;
            margin: 10px;
            margin-top: 0;
            padding: 0;
            background: #fff;
            font-size: 80%;
            text-align: center;
        }

        .medsos {
            padding: 10px 0;
            background-color: black;
            text-align: center;
        }

        .medsos ul {
            padding-inline-start: 0;
        }

        .medsos ul li {
            display: inline-block;
            color: blue;
            margin-right: 10px;
            height: 50px;
            width: 50px;
            border-radius: 4px;
            box-sizing: border-box;
            line-height: 50px;
            text-align: center;
            font-size: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #069370;
            color: #fff;
            transition: 0, 5s;
        }

        .medsos ul li:hover {
            background: #9bdbc7;
        }

        .copyright h4 {
            text-align: center;
        }

        .card {
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
            cursor: pointer;
        }

        .card:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }

        .card img {
            transition: transform 0.3s;
        }

        .card:hover img {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <?php
    /* include '../koneksi.php';
    $query = mysqli_query($conn, "SELECT * from produk"); */
    ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#">Store Cake</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../users/produk.php">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="../users/about.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Aneka Kue</h1>
            </div>
        </div>
    </header>
    <script>
        // Fungsi untuk mengarahkan ke produk.php saat gambar dihover
        function redirectToProduk() {
            window.location.href = 'produk.php';
        }
    </script>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../image/kuekeringcoklatmede.jpg" alt="..." onclick="redirectToProduk()" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Kue Coklat Kacang</h5>
                                <div class="rating">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../image/kuenastar.jpg" alt="..." onclick="redirectToProduk()" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Kue Nastar Keju</h5>
                                <div class="rating">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../image/kueputrisalju.jpg" alt="..." onclick="redirectToProduk()" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><a href="product.php"></a>Kue Putri Salju</h5>
                                <div class="rating">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../image/kuekastangelkeju.jpg" alt="..." onclick="redirectToProduk()" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Kue kastangel Keju</h5>
                                <div class="rating">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>
<footer>
    <div class="footertop">
        <div class="medsos">
            <ul>
                <li>
                    <a href="https://www.instagram.com/arliyando_rl/"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/liyan47687808"><i class="fa-brands fa-x-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footerbottom">
        <div class="copyright">
            <h4 style="margin-top: 0px">
                <br />Cake Shop Arliyando Copyright&copy 2023
            </h4>
        </div>
    </div>
</footer>
<!-- Dependensi Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>