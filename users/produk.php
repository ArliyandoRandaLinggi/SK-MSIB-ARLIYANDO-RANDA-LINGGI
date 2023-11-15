<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page Product</title>
  <link rel="stylesheet" type="text/css" href="cake.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

</head>

<body>
  <?php
  include '../koneksi.php';

  $pro = mysqli_query($conn, "SELECT * from produk as p join jenis_produk as jp on p.id_jenis = jp.id_jenis join status_produk as sp on p.id_status = sp.id_status ORDER BY p.id ASC;");

  ?>

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
  <h1>Aneka Kue</h1>

  <section class="items">
    <?php
    if (mysqli_num_rows($pro) > 0) { // Ini adalah kondisi yang memeriksa apakah hasil dari eksekusi query yang disimpan dalam variabel $pro mengandung lebih dari 0 baris. 
      while ($data = mysqli_fetch_array($pro)) { // Ini adalah loop while yang akan terus berjalan selama masih ada baris yang dapat diambil dari hasil query. 
        if ($data["id"] > 0) { //memeriksa apakah nilai kolom "id" dari baris yang sedang diolah lebih besar dari 0.
    ?>
          <div class="item">
            <div class="hover-content">
              <img src="<?php echo $data["gambar"] ?>" alt=""> <!--menampilkan gambar produk-->
              <h4><?php echo $data["produk"] ?></h4> <!--menampilkan nama produk-->
              <a href="product.php?id=<?php echo $data["id"] ?>"><i class="fa fa-eye"></i></a>
            </div>
          </div>
          </div>
    <?php
        }
      }
    }
    ?>
  </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</html>