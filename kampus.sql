-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2019 at 08:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenjang` varchar(5) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `jenjang`, `jurusan`, `kelas`) VALUES
('43A87006170280', 'NAUVAL PURNOMO ', 'S1', 'TEKNIK INFORMATIKA', 'S1/TI/5B/P'),
('43A87006170297', 'Reynaldi', 'S1', 'S1', 'S1/SI5C/P'),
('43A87006170299', 'Rudi Catur Setiawan', 'S1', 'Teknik Informatika', 'S1/TI1A/P'),
('43A87006170300', 'Aldi', 'S1', 'SISTEM INFORMASI', 'S1/SI/5A/P'),
('43A87006170390', 'Maarif', 'S1', 'Teknik Informatika', 'S1/TI5A/P'),
('43A87006170450', 'Indika Putra', 'S1', 'SIstem Informasi', 'S1/SI6C/M');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kd_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(35) NOT NULL,
  `sks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kd_matakuliah`, `nama_matakuliah`, `sks`) VALUES
('KDMK001', 'Pemrograman Web 1', '3 sks'),
('KDMK002', 'Aplikasi Basis Data', '4 sks'),
('KDMK003', 'Struktur Data', '3 sks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kd_matakuliah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
