<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
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
            width: 50%;
            padding: 20px;
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

    $pro = mysqli_query($conn, "SELECT * from produk where id='$_GET[id]'");

    while ($p = mysqli_fetch_array($pro)) {
        $id = $p["id"];
        $produk = $p["produk"];
        $gambar = $p["gambar"];
        $stok = $p["stok"];
        $jenis_produk = $p["id_jenis"];
        $rasa_produk = $p["id_rasa"];
        $status_produk = $p["id_status"];
        $deskripsi = $p["deskripsi"];
    }

    ?>
    <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data" onclick="return confirm('Apakah anda sudah yakin dengan data ini?'">
        <table class="table">
            <h1>EDIT PRODUK</h1>
            <tr>
                <td>Id</td>
                <td>:</td>
                <td><input type="text" name="id" disabled value="<?php echo $id ?>"></td>
            </tr>

            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="produk" value="<?php echo $produk ?>"></td>
            </tr>

            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" id="fileToUpload" required name="fileToUpload"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="number" name="stok" value="<?php echo $stok ?>"></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>:</td>
                <td>
                    <select name="id_jenis"> <!--membuat drop-down list. Nama atribut "id_jenis" akan digunakan untuk mengidentifikasi elemen ini saat formulir dikirimkan. -->
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM jenis_produk"); //mengambil data dari tabel jenis_produk
                        if (mysqli_num_rows($query) > 0) {  //memeriksa kondisi apakah hasil query mengandung lbh dari 0
                            while ($data = mysqli_fetch_array($query)) {  //loop akan terus berjalan selama msh ada baris yg dpt diambil dari query
                                echo "<option value='" . $data["id_jenis"] . "'>" . $data["nama_jenis"] . "</option>"; //diambil dari id_jenis dan teks ditampilkan dropdown dari nama_jenis
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
                    <select name="id_rasa">
                        <?php
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
                    <select name="id_status">
                        <?php
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
                <td><input type="text" name="deskripsi" value="<?php echo $deskripsi ?>"></td>
            </tr>
        </table>
        <input type="submit" name="Submit" value="Simpan">
    </form>
</body>

</html>