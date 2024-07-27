-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2024 at 06:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login_id`, `username`, `password`) VALUES
(1, 'admin', '7488e331b8b64e5794da3fa4eb10ad5d'),
(2, 'guru', '60518a7062cdbcb1e7655626622481e4'),
(3, 'siswa', 'a0373fddb18c3eeec2ea117738898b39'),
(4, 'admin2', 'dad9073ba5485f9219075b3a237368ef');

-- --------------------------------------------------------

--
-- Table structure for table `admin_akses`
--

CREATE TABLE `admin_akses` (
  `login_id` int(11) NOT NULL,
  `akses_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_akses`
--

INSERT INTO `admin_akses` (`login_id`, `akses_id`) VALUES
(1, 'guru'),
(1, 'siswa'),
(2, 'guru'),
(3, 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_guru`
--

CREATE TABLE `daftar_guru` (
  `id` int(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `gelar` varchar(50) DEFAULT NULL,
  `usia` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_guru`
--

INSERT INTO `daftar_guru` (`id`, `nama`, `gelar`, `usia`) VALUES
(6, 'tes', 'ets', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_siswa`
--

CREATE TABLE `daftar_siswa` (
  `id` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_siswa`
--

INSERT INTO `daftar_siswa` (`id`, `nama`, `kelas`, `jurusan`) VALUES
(3, 'rudi', '11', 'rpl');

-- --------------------------------------------------------

--
-- Table structure for table `master_akses`
--

CREATE TABLE `master_akses` (
  `akses_id` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_akses`
--

INSERT INTO `master_akses` (`akses_id`, `nama`) VALUES
('guru', 'Guru'),
('siswa', 'Ini untuk halaman siswa'),
('spp', 'Halaman SPP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `admin_akses`
--
ALTER TABLE `admin_akses`
  ADD KEY `akses_id` (`akses_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `daftar_guru`
--
ALTER TABLE `daftar_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_akses`
--
ALTER TABLE `master_akses`
  ADD PRIMARY KEY (`akses_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftar_guru`
--
ALTER TABLE `daftar_guru`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_akses`
--
ALTER TABLE `admin_akses`
  ADD CONSTRAINT `admin_akses_ibfk_1` FOREIGN KEY (`akses_id`) REFERENCES `master_akses` (`akses_id`),
  ADD CONSTRAINT `admin_akses_ibfk_2` FOREIGN KEY (`login_id`) REFERENCES `admin` (`login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
