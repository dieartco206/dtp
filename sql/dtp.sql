-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 02:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `tahun_masuk` varchar(255) NOT NULL,
  `tahun_lulus` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `user_id`, `nama`, `jurusan`, `tahun_masuk`, `tahun_lulus`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'SDN Baktijaya 3', 'SD', '2000', '2006', NULL, NULL, NULL),
(2, 1, 'SMP Yapemri', 'SMP', '2006', '2009', NULL, NULL, NULL),
(3, 2, 'SDN Baktijaya 3', 'c321c312', '2000', '2006', '2024-03-08 18:00:34', '2024-03-08 18:00:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `user_id`, `perusahaan`, `jabatan`, `tahun`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Perusahaan 1', 'Jabatan 1', '2021', '2022', NULL, NULL, NULL),
(2, 1, 'Perusahaan 2', 'Jabatan 2', '2023', '2024', NULL, NULL, NULL),
(3, 2, 'Perusahaan 1', 'Jabatan 1', '2021', NULL, '2024-03-08 18:00:34', '2024-03-08 18:00:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `ktp`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Adi Kurniawan', 'Jl. Serma Niran RT 10 RW 20', '120938923889', 'GqzvDJZFt8k9lWg68kFxdzc3hPWDB6jpeg', '2024-03-08 17:47:04', '2024-03-08 17:47:04', NULL),
(2, 'Adi Kurniawan', NULL, '120938923889', 'eJoND1I9vB1XvqeFpFvVTiOXv8R39ujpeg', '2024-03-08 18:00:34', '2024-03-08 18:00:34', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
