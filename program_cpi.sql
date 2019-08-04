-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 10:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `program_cpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `alamat`, `role`) VALUES
(1, 'aniendra', '123', 'kelet', 'admin'),
(2, 'andani', '123', 'jepara', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `data_makanan`
--

CREATE TABLE `data_makanan` (
  `id` int(11) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `karbohidrat` varchar(20) NOT NULL,
  `protein` varchar(20) NOT NULL,
  `lemak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_makanan`
--

INSERT INTO `data_makanan` (`id`, `nama_makanan`, `karbohidrat`, `protein`, `lemak`) VALUES
(3, 'nasi', '16', '1.3', '0.1');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matrik_transformasi`
--

CREATE TABLE `matrik_transformasi` (
  `id` int(11) NOT NULL,
  `nama_makanan` varchar(20) NOT NULL,
  `karbohidrat` varchar(4) NOT NULL,
  `protein` varchar(4) NOT NULL,
  `lemak` varchar(4) NOT NULL,
  `nilai_alternatif` varchar(4) NOT NULL,
  `rangking` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrik_transformasi`
--

INSERT INTO `matrik_transformasi` (`id`, `nama_makanan`, `karbohidrat`, `protein`, `lemak`, `nilai_alternatif`, `rangking`) VALUES
(3, 'nasi', '100', '36.1', '2.17', '12.2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_makanan`
--
ALTER TABLE `data_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrik_transformasi`
--
ALTER TABLE `matrik_transformasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_makanan`
--
ALTER TABLE `data_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matrik_transformasi`
--
ALTER TABLE `matrik_transformasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
