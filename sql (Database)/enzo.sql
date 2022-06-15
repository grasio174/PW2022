-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2022 pada 02.55
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enzo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `Id_User` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `NoH` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `Id_Pesan` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Produk` int(11) NOT NULL,
  `Alamat` varchar(500) NOT NULL,
  `Catatan` varchar(500) NOT NULL,
  `Penerima` varchar(100) NOT NULL,
  `NoHP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`Id_Pesan`, `Id_User`, `Id_Produk`, `Alamat`, `Catatan`, `Penerima`, `NoHP`) VALUES
(12, 0, 0, 'desa kulu, jaga 3, Kecamatan wori,  kab. Minahasa Utara', 'manado', 'grasio', '08524564789'),
(13, 0, 0, 'desa kulu, jaga 3, Kecamatan wori,  kab. Minahasa Utara', 'manado', 'grasio', '08524564789'),
(14, 0, 0, 'desa kulu, jaga 3, Kecamatan wori,  kab. Minahasa Utara', 'jangan lupa makan', 'grasio', '081234567890');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `Id_Produk` int(50) NOT NULL,
  `Nama_Produk` varchar(100) NOT NULL,
  `Harga` bigint(20) NOT NULL,
  `Tinggi` varchar(100) NOT NULL,
  `Tenaga` varchar(100) NOT NULL,
  `Berat` varchar(100) NOT NULL,
  `Mesin` varchar(100) NOT NULL,
  `Foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`Id_Produk`, `Nama_Produk`, `Harga`, `Tinggi`, `Tenaga`, `Berat`, `Mesin`, `Foto`) VALUES
(1, 'Toyota innova 2.4 G M', 165000000, '1,85m', '120kw', '1795kg', '2400cc', 'image/vehicle-1.png'),
(2, 'Daihatsu Agya', 80000000, '1.50m', '56kw', '800 kg', '1200cc', 'image/vehicle-2.png'),
(3, 'Suzuki Ertiga', 145000000, '1.75m', '97kw', '240kg', '147,3cc', 'image/vehicle-3.png'),
(4, 'Toyota Fortuner 2021', 450000000, '2.10m', '135kw', '1200kg', '2755cc', 'image/vehicle-4.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`Id_User`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`Id_Pesan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Id_Produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `Id_Pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `Id_Produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
