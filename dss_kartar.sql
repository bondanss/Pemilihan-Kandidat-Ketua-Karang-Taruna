-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 10:41 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dss_kartar`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `tanggal` date NOT NULL,
  `ranking` float NOT NULL,
  `id_kandidat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` varchar(5) NOT NULL,
  `nama_kandidat` varchar(30) NOT NULL,
  `domisili` varchar(50) NOT NULL,
  `tinggal` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `absensi` int(5) NOT NULL,
  `kedisiplinan` varchar(20) NOT NULL,
  `usia` int(5) NOT NULL,
  `kerapian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_kandidat`, `domisili`, `tinggal`, `jenis_kelamin`, `absensi`, `kedisiplinan`, `usia`, `kerapian`) VALUES
('K001', 'Muhammad Reza Fahmi', 'jl. kelapa gading 5 no.1 RT.001/04 kramatjati jakt', 'jl. kelapa gading 5 no.1 RT.001/04 kramatjati jakt', 'Laki - laki', 10, 'Sangat Disiplin', 23, 'Sangat Rapi'),
('K002', 'Fajri Muhammad Safaruddin', 'jl. batu ampar dua no.9 RT.005/03 condet jaktim', 'jl. jatiwarna no.34 RT.004/04 bekasi', 'Laki - Laki', 8, 'Cukup Disiplin', 25, 'Cukup Rapi'),
('K003', 'Akbar Azhari', 'jl. cililitan besar RT.006/01 cililitan jaktim', 'jl. cililitan besar RT.006/01 cililitan jaktim', 'Laki - Laki', 9, 'Cukup Disiplin', 22, 'Cukup Rapi'),
('K004', 'Husnul Rizki', 'jl. plk dua RT.005/01 no.6 makasar jaktim', 'jl. plk dua RT.005/01 no.6 makasar jaktim', 'Perempuan', 4, 'Sangat Disiplin', 25, 'Sangat Rapi'),
('K005', 'Shinta', 'jl. jengki RT.002/03 no.7 makasar jaktim', 'jl. jengki RT.002/03 no.7 makasar jaktim', 'Perempuan', 13, 'Kurang Disiplin', 26, 'Kurang Rapi'),
('K006', 'Rizqi Pratama', 'gang nyata RT.006/08 no.12 makasar jaktim', 'gang nyata RT.006/08 no.12 makasar jaktim', 'Laki - Laki', 5, 'Sangat Disiplin', 24, 'Sangat Rapi'),
('K007', 'Syahrul Khoir', 'jl. bentengan satu RT.002/09 no.3 makasar jaktim', 'jl. bentengan satu RT.002/09 no.3 makasar jaktim', 'Laki - Laki', 10, 'Kurang Disiplin', 21, 'Kurang Rapi'),
('K008', 'Retno Nur Kinanti', 'gang haji hasbi RT.001/04 no.2 kramatjati jaktim', 'gang haji hasbi RT.001/04 no.2 kramatjati jaktim', 'Perempuan', 5, 'Sangat Disiplin', 20, 'Sangat Rapi'),
('K009', 'Satrio Aji Nugroho', 'gang sarbini RT.001/04 no.8 kramatjati jaktim', 'jalan setia satu RT.009/12 no.8  pondok cabe tangs', 'Laki - Laki', 7, 'Cukup Disiplin', 23, 'Cukup Rapi'),
('K010', 'Aji Satria Pratama', 'jl. bhayangkara RT.012/09 no. 5 cilangkap jaktim', 'jl. bhayangkara RT.012/09 no. 5 cilangkap jaktim', 'Laki - Laki', 7, 'Cukup Disiplin', 26, 'Cukup Rapi');

-- --------------------------------------------------------

--
-- Table structure for table `konversi`
--

CREATE TABLE `konversi` (
  `id_kandidat` varchar(255) NOT NULL,
  `con_usia` double NOT NULL,
  `con_wilayah` double NOT NULL,
  `con_absensi` double NOT NULL,
  `con_kedisiplinan` double NOT NULL,
  `con_kerapian` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(15) NOT NULL,
  `bobot` double NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `status`) VALUES
('KR001', 'usia', 0.3, 'benefit'),
('KR002', 'wilayah', 0.2, 'benefit'),
('KR003', 'absensi', 0.2, 'cost'),
('KR004', 'kedisiplinan', 0.15, 'benefit'),
('KR005', 'kerapian', 0.15, 'benefit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD KEY `id_kandidat` (`id_kandidat`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `konversi`
--
ALTER TABLE `konversi`
  ADD KEY `id_kandidat` (`id_kandidat`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`);

--
-- Constraints for table `konversi`
--
ALTER TABLE `konversi`
  ADD CONSTRAINT `konversi_ibfk_1` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
