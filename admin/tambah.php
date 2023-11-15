<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Produk</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-top: 5px;
        }


        form {
            width: 130%;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    include '../koneksi.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="proses_tambah.php" method="POST" enctype="multipart/form-data" onsubmit="return confirmTambahData()">
                    <h1>TAMBAH DATA PRODUK</h1>
                    <table class="table">
                        <tr>
                            <td>Id</td>
                            <td>:</td>
                            <td><input type="text" name="id"></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td>:</td>
                            <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                        </tr>
                        <tr>
                            <td>Produk</td>
                            <td>:</td>
                            <td><input type="text" name="produk"></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>:</td>
                            <td><input type="number" name="stok"></td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td>
                                <select name="jenis_produk">
                                    <?php
                                    // Fetch data from the "items" table
                                    $query = mysqli_query($conn, "SELECT * FROM jenis_produk");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            echo "<option value='" . $data["id_jenis"] . "'>" . $data["nama_jenis"] . "</option>";
                                        }
                                    } else {
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Rasa</td>
                            <td>:</td>
                            <td>
                                <select name="rasa_produk">
                                    <?php
                                    // Fetch data from the "items" table
                                    $query = mysqli_query($conn, "SELECT * FROM rasa_produk");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            echo "<option value='" . $data["id_rasa"] . "'>" . $data["nama_rasa"] . "</option>";
                                        }
                                    } else {
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>
                                <select name="status_produk">
                                    <?php
                                    // Fetch data from the "items" table
                                    $query = mysqli_query($conn, "SELECT * FROM status_produk");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            echo "<option value='" . $data["id_status"] . "'>" . $data["nama_status"] . "</option>";
                                        }
                                    } else {
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td><input type="text" name="deskripsi"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
</body>

</html>