-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 08:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_um`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `kategori`, `harga`, `stock`, `gambar`) VALUES
(1, 'Aqua', 'Minuman', 4000, 20, 'aqua_.jpg'),
(2, 'Fresh Tea', 'Minuman', 5000, 30, 'frestea_.jpg'),
(3, 'Ultra Milk', 'Minuman', 5000, 16, 'ultramilk_.jpg'),
(4, 'Chitato', 'Cemilan', 6000, 15, 'chitato_.jpg'),
(5, 'Beng-Beng', 'Cemilan', 2000, 12, 'beng_beng_.jpg'),
(6, 'Mentos', 'Permen', 3000, 10, 'mentos_.jpg'),
(7, 'Silverqueen', 'Cemilan', 8000, 14, 'silverqueen_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `id_mkn` int(11) NOT NULL,
  `nama_mkn` varchar(120) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_makanan`
--

INSERT INTO `tb_makanan` (`id_mkn`, `nama_mkn`, `harga`, `gambar`) VALUES
(1, 'Mie Goreng', 5000, 'mie_goreng_.jpg'),
(2, 'Mie Goreng + Telur', 7000, 'mie_goreng_telor_.jpg'),
(3, 'Bakso', 7000, 'bakso.jpg'),
(4, 'Nasi Goreng + Telur', 8000, 'nasi_goreng_telor_.jpg'),
(5, 'Nasi Kuning', 8000, 'nasi_kuning_.jpg'),
(6, 'Soto', 8000, 'soto_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_minuman`
--

CREATE TABLE `tb_minuman` (
  `id_minum` int(11) NOT NULL,
  `nama_minum` varchar(120) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_minuman`
--

INSERT INTO `tb_minuman` (`id_minum`, `nama_minum`, `harga`, `gambar`) VALUES
(1, 'Es Teh', 3000, 'es_teh_.jpg'),
(2, 'Es Jeruk', 3000, 'es_jeruk_.jpg'),
(3, 'Kopi', 4000, 'kopi_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`id_mkn`);

--
-- Indexes for table `tb_minuman`
--
ALTER TABLE `tb_minuman`
  ADD PRIMARY KEY (`id_minum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  MODIFY `id_mkn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_minuman`
--
ALTER TABLE `tb_minuman`
  MODIFY `id_minum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
