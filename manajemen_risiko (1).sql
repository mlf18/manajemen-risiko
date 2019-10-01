-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 09:12 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen_risiko`
--

-- --------------------------------------------------------

--
-- Table structure for table `dampak`
--

CREATE TABLE `dampak` (
  `id_dampak` int(11) NOT NULL,
  `dampak` varchar(254) NOT NULL,
  `id_risiko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dampak`
--

INSERT INTO `dampak` (`id_dampak`, `dampak`, `id_risiko`) VALUES
(1, 'ada juga', 3);

-- --------------------------------------------------------

--
-- Table structure for table `indikator_organisasi`
--

CREATE TABLE `indikator_organisasi` (
  `id_indikator_organisasi` int(11) NOT NULL,
  `indikator_organisasi` varchar(255) NOT NULL,
  `id_sasaran_organisasi` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikator_organisasi`
--

INSERT INTO `indikator_organisasi` (`id_indikator_organisasi`, `indikator_organisasi`, `id_sasaran_organisasi`, `user_id`) VALUES
(1, 'sss', 1, 1),
(2, 'cek 1', 2, 1),
(3, 'cek', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_risiko`
--

CREATE TABLE `manajemen_risiko` (
  `id_manajemen_risiko` int(11) NOT NULL,
  `nama_upr` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manajemen_risiko`
--

INSERT INTO `manajemen_risiko` (`id_manajemen_risiko`, `nama_upr`, `tahun`, `user_id`) VALUES
(1, 'fg', '2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `risiko`
--

CREATE TABLE `risiko` (
  `id_risiko` int(11) NOT NULL,
  `kejadian` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `penyebab` varchar(254) NOT NULL,
  `level_kemungkinan` int(11) DEFAULT NULL,
  `level_dampak` int(11) DEFAULT NULL,
  `besaran_risiko` int(11) DEFAULT NULL,
  `level_risiko` varchar(255) DEFAULT NULL,
  `prioritas_risiko` int(11) DEFAULT NULL,
  `id_indikator_organisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `risiko`
--

INSERT INTO `risiko` (`id_risiko`, `kejadian`, `id_kategori`, `penyebab`, `level_kemungkinan`, `level_dampak`, `besaran_risiko`, `level_risiko`, `prioritas_risiko`, `id_indikator_organisasi`) VALUES
(3, 'a', 3, 'b', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_organisasi`
--

CREATE TABLE `sasaran_organisasi` (
  `id_sasaran_organisasi` int(11) NOT NULL,
  `sasaran_organisasi` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_manajemen_risiko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sasaran_organisasi`
--

INSERT INTO `sasaran_organisasi` (`id_sasaran_organisasi`, `sasaran_organisasi`, `user_id`, `id_manajemen_risiko`) VALUES
(1, 'ss', 1, 1),
(2, 'abc\\', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dampak`
--
ALTER TABLE `dampak`
  ADD PRIMARY KEY (`id_dampak`);

--
-- Indexes for table `indikator_organisasi`
--
ALTER TABLE `indikator_organisasi`
  ADD PRIMARY KEY (`id_indikator_organisasi`);

--
-- Indexes for table `manajemen_risiko`
--
ALTER TABLE `manajemen_risiko`
  ADD PRIMARY KEY (`id_manajemen_risiko`);

--
-- Indexes for table `risiko`
--
ALTER TABLE `risiko`
  ADD PRIMARY KEY (`id_risiko`);

--
-- Indexes for table `sasaran_organisasi`
--
ALTER TABLE `sasaran_organisasi`
  ADD PRIMARY KEY (`id_sasaran_organisasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dampak`
--
ALTER TABLE `dampak`
  MODIFY `id_dampak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `indikator_organisasi`
--
ALTER TABLE `indikator_organisasi`
  MODIFY `id_indikator_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manajemen_risiko`
--
ALTER TABLE `manajemen_risiko`
  MODIFY `id_manajemen_risiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `risiko`
--
ALTER TABLE `risiko`
  MODIFY `id_risiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sasaran_organisasi`
--
ALTER TABLE `sasaran_organisasi`
  MODIFY `id_sasaran_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
