-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 09:26 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_webjut`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Nur', 'Ashiddiqi', 'bulinmcd', '$2y$10$tFsGRKFqmAhFvs03pFmDiex/MjdHighwJpxGbUTSNYVwSeHopRNI6', '2020-12-07 21:15:55', '2020-12-07 21:15:55'),
(2, 'Dewi', 'Lestari', 'dewilestari', '$2y$10$DIixyy5WydQjJ6nSdt70v.IXOkJIvrpd1Q/Kc/Cx3e2zZLo2moU2G', '2020-12-08 15:08:12', '2020-12-08 15:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nik`, `fullname`, `phone`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(2, 1857051014, 'Muhammad Nur Ashiddiqi', '081912325951', 'muhammad.nur1014@students.unil', 'Perumahan  Bataranila', '2020-12-07 21:33:28', '2020-12-07 21:33:28'),
(3, 1857051012, 'Elshinta Milenia', '081912325951', 'elshinta@gmail.com', 'Gunung Madu Tanjung Seneng', '2020-12-08 15:10:34', '2020-12-08 15:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `sampul` varchar(128) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `eksemplar` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id`, `ISBN`, `sampul`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `kategori`, `eksemplar`, `created_at`, `updated_at`) VALUES
(1, '978-602-6232-57-1', 'wj-ceh.png', 'Security Jaringan Komputer Berbasis CEH', 'Rifkie Primartha', 'INFORMATIKA', 2018, 'Teknologi Komputer', 288, '2020-12-07', '2020-12-08'),
(2, '978-623-7131-34-2', 'sig-api.png', 'SISTEM INFORMASI GEOGRAFIS BERBASIS WEB MENGGUNAKA', 'Eko Budi Setiawan', 'INFORMATIKA', 2020, 'Teknologi Komputer', 390, '2020-12-08', '2020-12-08'),
(3, '978-602-6948-78-6', 'plc-pa.png', 'PLC, KONSEP, PEMROGRAMAN DAN APLIKASI (EDISI REVIS', 'Agfianto Eko Putra', 'GAVA MEDIA', 2020, 'Teknologi Komputer', 244, '2020-12-08', '2020-12-08'),
(4, '978-623-7498-50-6', 'spss-jk.png', 'SPSS DALAM RISET LAYANAN JASA DAN KESEHATAN', 'Dr. Agung Edy Wibowo,S.E.,M.Si.,Dkk', 'GAVA MEDIA', 2020, 'Teknologi Komputer', 244, '2020-12-08', '2020-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `tanggal_pinjam` date DEFAULT current_timestamp(),
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN` (`ISBN`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
