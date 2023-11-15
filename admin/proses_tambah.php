<?php
include '../koneksi.php';

// get variable from form input
$id = $_POST["id"];
$produk = $_POST["produk"];
$jenis_produk = $_POST["jenis_produk"];
$rasa_produk = $_POST["rasa_produk"];
$status_produk = $_POST["status_produk"];
$stok = $_POST["stok"];
$deskripsi = $_POST["deskripsi"];

// Upload Proses
$target_dir = "../image/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($conn, "INSERT INTO `produk` (`id`, `produk`, `id_jenis`, `id_rasa`, `id_status`, `stok`, `deskripsi`, `gambar`) VALUES ('$id', '$produk', '$jenis_produk', '$rasa_produk', '$status_produk', '$stok', '$deskripsi', '$target_file');");

header("Location:index.php");
