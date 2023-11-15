<?php
include '../koneksi.php';
date_default_timezone_set('Asia/Jakarta');

// get variable from form input
$produk = $_POST["produk"];
$jenis_produk = $_POST["id_jenis"];
$rasa_produk = $_POST["id_rasa"];
$status_produk = $_POST["id_status"];
$stok = $_POST["stok"];
$deskripsi = $_POST["deskripsi"];

// Upload Proses
if ($_FILES["fileToUpload"]["size"] != 0) {   // Jika browse image di tekan maka $_FILES akan terisi
    $target_dir = "../image/"; // path directory image akan di simpan
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}

$result = mysqli_query($conn, "UPDATE `produk` set `produk` = '$produk', `id_jenis` = '$jenis_produk', `id_rasa` = '$rasa_produk', `id_status` = '$status_produk', `stok` = '$stok', `deskripsi` = '$deskripsi', `gambar`= '$target_file' where `id` = '$_GET[id]'");

header("Location:index.php");
