-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 07:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik_onesinus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `umur` int(5) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jeniskelamin` varchar(30) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `namalengkap`, `alamat`, `umur`, `pekerjaan`, `jeniskelamin`, `contact`) VALUES
(1, 'nama lengkap 1', 'alamat 1', 1, 'Pekerjan 1', 'laki-laki', 1),
(2, 'nama 2 ubah', 'alamat 2 uubah', 22, 'pekerjan 2 ubah', 'perempuan', 231231231),
(5, 'Ucok Marpaung Ok', 'Rumah ucok 2', 21, 'Nganggur lagi', 'laki-laki', 12345678),
(7, 'abcd', 'abcd', 123, 'abcd', 'lain-lain', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
