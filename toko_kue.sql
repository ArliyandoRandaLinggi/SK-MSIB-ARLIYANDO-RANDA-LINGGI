-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2023 pada 15.05
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_kue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Kue Basah'),
(2, 'Kue Kering');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `stok` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_rasa` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `deskripsi` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `produk`, `gambar`, `stok`, `id_jenis`, `id_rasa`, `id_status`, `deskripsi`) VALUES
(1, 'kue nastar', '../image/kuenastarkeju.jpg', 10, 1, 3, 1, 'Kue nastar yang lezat dengan isi dan balutan keju '),
(2, 'kue putri salju keju', '../image/kueputrisalju.jpg', 10, 1, 3, 1, 'kue putri salju dengan kombinasi baru isi keju '),
(3, 'kue coklat kacang', '../image/kuecoklatkacang.jpg', 10, 2, 5, 1, 'Kue coklat dengan toping kacang mente'),
(4, 'kue kastangel keju', '../image/kuekastangelkeju.jpg', 10, 1, 1, 1, 'Kue kastangel dengan baluran keju melimpah dan gurih'),
(5, 'kue bolu coklat manis', '../image/kuebolukukuscoklat.jpg', 50, 1, 1, 1, 'kue bolu dengan rasa coklat yang melimpah manis dan lezat ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rasa_produk`
--

CREATE TABLE `rasa_produk` (
  `id_rasa` int(11) NOT NULL,
  `nama_rasa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rasa_produk`
--

INSERT INTO `rasa_produk` (`id_rasa`, `nama_rasa`) VALUES
(1, 'Coklat'),
(2, 'Strawberry'),
(3, 'Keju'),
(4, 'kelapa'),
(5, 'coklat kacang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_produk`
--

CREATE TABLE `status_produk` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_produk`
--

INSERT INTO `status_produk` (`id_status`, `nama_status`) VALUES
(1, 'Ready'),
(2, 'Sold Out');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_rasa` (`id_rasa`),
  ADD KEY `id_status` (`id_status`);

--
-- Indeks untuk tabel `rasa_produk`
--
ALTER TABLE `rasa_produk`
  ADD PRIMARY KEY (`id_rasa`);

--
-- Indeks untuk tabel `status_produk`
--
ALTER TABLE `status_produk`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `rasa_produk`
--
ALTER TABLE `rasa_produk`
  MODIFY `id_rasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `status_produk`
--
ALTER TABLE `status_produk`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_produk` (`id_jenis`) ON DELETE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_rasa`) REFERENCES `rasa_produk` (`id_rasa`) ON DELETE CASCADE,
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status_produk` (`id_status`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
