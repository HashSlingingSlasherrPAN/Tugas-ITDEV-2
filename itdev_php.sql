-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 04:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itdev_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `penyimpanan` varchar(50) NOT NULL,
  `jenis_penyimpanan` varchar(50) NOT NULL,
  `ukuran_layar` double NOT NULL,
  `vga` varchar(50) NOT NULL,
  `berat` double NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `deskripsi`, `harga`, `stok`, `merk`, `processor`, `ram`, `penyimpanan`, `jenis_penyimpanan`, `ukuran_layar`, `vga`, `berat`, `gambar`) VALUES
(2, 'AI Gen', 'laptop yang memiliki NPU dan CPU yang kencang, cocok untuk menunjang kegiatan kuliah, kantor, dan lain lain', 10000000, 2, 'Advan', 'AMD Ryzen 7 8845HS', '16', '512', 'SSD NVMe', 14, 'AMD Radeon 780', 1.8, 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/MTA-164716685/advan_advan_laptop_ai_gen_ryzen_7_8845hs_amd_ryzen_ai_100-_srgb_16gb_512gb_windows_11_full01_oihd4aq4.jpg'),
(3, 'Victus 16 S1002AX', 'Beyond Fast GeForce RTX™ 40 Series Laptop\r\nNVIDIA DLSS 3, Ultra-efficient Ada Lovelace Arch, and Full Ray Tracing', 16599000, 13, 'HP', 'AMD Ryzen 5 8645HS', '16', '1024', 'SSD NVMe', 16.1, 'NVIDIA Geforce RTX 4060', 2.33, 'https://images.tokopedia.net/img/cache/900/VqbcmM/2024/4/19/c854d417-e786-4a51-8b5c-6b629898bb2d.jpg'),
(4, 'HYPE 7', 'GARANSI RESMI AXIOO 1 TAHUN', 6299000, 99, 'Axioo', 'AMD Ryzen 7 5700U', '8', '512', 'SSD NVMe', 14, 'AMD Radeon Graphics', 1.41, 'https://images.tokopedia.net/img/cache/900/VqbcmM/2024/6/7/b0d415a2-b3b7-4e7c-9e80-88646bb0fe10.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
