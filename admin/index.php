<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <!-- Tambahkan menu navigasi di sini -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="../users/index.php">Product</a></li>
                </ul>
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h1>Halo Admin </h1>
                        </center>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-info" style="margin-bottom:10px" href="tambah.php??nama_halaman=NAMA HALAMAN NYA"> + Tambah Produk </a>\
                        <table class="table table-striped table-bordered" id="myTable">
                            <?php
                            include '../koneksi.php';
                            $query = mysqli_query($conn, "SELECT * from produk as p join jenis_produk as jp on p.id_jenis = jp.id_jenis join rasa_produk as rp on p.id_rasa = rp.id_rasa join status_produk as sp on p.id_status = sp.id_status ORDER BY p.id ASC;");
                            ?>
                            <tr>
                                <th>
                                    Id
                                </th>
                                <th>
                                    Gambar
                                </th>
                                <th>
                                    Produk
                                </th>
                                <th>
                                    Stok
                                </th>
                                <th>
                                    Jenis
                                </th>
                                <th>
                                    Rasa
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Desk
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                            <?php
                            if (mysqli_num_rows($query) > 0) {
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <tr>
                                        <td> <?php echo $data["id"] ?></td>
                                        <td> <img src="<?php echo $data["gambar"] ?>" width="100"> </td>
                                        <td> <?php echo $data["produk"] ?> </td>
                                        <td> <?php echo $data["stok"] ?> </td>
                                        <td> <?php echo $data["nama_jenis"] ?></td>
                                        <td> <?php echo $data["nama_rasa"] ?></td>
                                        <td> <?php echo $data["nama_status"] ?></td>
                                        <td> <?php echo $data["deskripsi"] ?></td>
                                        <td> <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="label label-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?');"> Delete </a> &nbsp; <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning" onclick="return confirm('Apakah anda yakin ingin mengedit data?');"> Edit </a></td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
</body>
<script src="https://ajax.googleapis.com/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>