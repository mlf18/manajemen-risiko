-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 03:38 PM
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
(1, 'ada juga', 3),
(2, 'Kepercayaan publik terhadap pengelolaan keuangan di Kementerian PANRB menjadi rendah', 4),
(3, 'Adanya pemberitaan negatif di media', 4),
(4, 'Kepercayaan publik terhadap pengelolaan keuangan di Kementerian PANRB menjadi rendah', 5),
(5, 'Adanya pemberitaan negatif di media', 5),
(6, 'Kepercayaan publik terhadap pengelolaan keuangan di Kementerian PANRB menjadi rendah', 6),
(7, 'Adanya pemberitaan negatif di media', 6);

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
(3, 'cek', 2, 1),
(4, 'Opini BPK', 3, 1),
(5, 'umlah unit kerja Eselon I yang bersih dari penyimpangan pengelolaan keuangan dan aset yang material								', 3, 1),
(6, 'Skor tingkat maturitas SPIP			', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_risiko`
--

CREATE TABLE `kategori_risiko` (
  `id_kategori_risiko` int(11) NOT NULL,
  `kategori_risiko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_risiko`
--

INSERT INTO `kategori_risiko` (`id_kategori_risiko`, `kategori_risiko`) VALUES
(1, 'Risiko Kebijakan/ Stratejik'),
(2, 'Risiko Operasional'),
(3, 'Risiko Kepatuhan'),
(4, 'Risiko Finansial');

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_risiko`
--

CREATE TABLE `manajemen_risiko` (
  `id_manajemen_risiko` int(11) NOT NULL,
  `id_upr` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manajemen_risiko`
--

INSERT INTO `manajemen_risiko` (`id_manajemen_risiko`, `id_upr`, `tahun`, `user_id`) VALUES
(3, '1', '2020', 1),
(4, '1', '2000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengendalian`
--

CREATE TABLE `pengendalian` (
  `id_pengendalian` int(11) NOT NULL,
  `pengendalian` varchar(255) NOT NULL,
  `id_risiko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengendalian`
--

INSERT INTO `pengendalian` (`id_pengendalian`, `pengendalian`, `id_risiko`) VALUES
(1, 'Cobax', 4);

-- --------------------------------------------------------

--
-- Table structure for table `risiko`
--

CREATE TABLE `risiko` (
  `id_risiko` int(11) NOT NULL,
  `kejadian` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `sumber` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `penyebab` varchar(254) NOT NULL,
  `sisa_risiko` varchar(255) DEFAULT NULL,
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

INSERT INTO `risiko` (`id_risiko`, `kejadian`, `id_kategori`, `sumber`, `tipe`, `penyebab`, `sisa_risiko`, `level_kemungkinan`, `level_dampak`, `besaran_risiko`, `level_risiko`, `prioritas_risiko`, `id_indikator_organisasi`) VALUES
(3, 'a', 3, 0, 0, 'b', '', NULL, NULL, NULL, NULL, NULL, 1),
(4, 'Kesalahan posting akun dalam laporan keuangan', 0, 0, 0, 'Kurangnya pemahaman SDM mengenai peraturan pelaporan keuangan', '', 1, 2, 2, NULL, NULL, 4),
(6, 'Terdapat temuan berindikasi fraud oleh BPK', 1, 0, 0, 'Pengendalian internal di unit kerja belum optimal', '', 2, 1, 2, NULL, NULL, 4),
(7, 'asd', 0, 0, 0, 'asd', '', 3, 3, 9, NULL, NULL, 4),
(8, 'asdf', 0, 0, 0, 'asdasd', '', 4, 4, 16, NULL, NULL, 4),
(12, 'Aduh', 1, 0, 0, 'Aduh bro', NULL, NULL, NULL, NULL, NULL, NULL, 4);

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
(2, 'abc\\', 1, 1),
(3, 'Meningkatnya kualitas pengelolaan keuangan', 1, 3),
(4, 'Meningkatnya kualitas penerapan sistem akuntabilitas kinerja', 1, 3),
(5, 'Efektifitas tindak lanjut hasil pengawasan								', 1, 3),
(6, 'Terwujudnya reformasi birokrasi Kementerian PANRB 								', 1, 3),
(7, 'Terwujudnya Inspektorat yang efektif, efiasien, bersih dan berkinerja tinggi', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`) VALUES
(1, 'Deputi Bidang Sumber Daya Manusia Aparatur'),
(2, 'Deputi Bidang Kelembagaan dan Tata Laksana'),
(3, 'Deputi Bidang Pelayanan Publik'),
(4, 'Deputi Bidang Reformasi Birokrasi, Akuntabilitas Aparatur, dan Pengawasan'),
(5, 'Biro Sumber Daya Manusia dan Umum'),
(6, 'Biro Hukum, Komunikasi, dan Informasi Publik'),
(7, 'Biro Manajemen Kinerja, Organisasi, dan Kerja Sama'),
(8, 'Inspektorat'),
(9, 'Kementerian PAN dan RB'),
(10, 'Sekretariat Kementerian');

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
-- Indexes for table `kategori_risiko`
--
ALTER TABLE `kategori_risiko`
  ADD PRIMARY KEY (`id_kategori_risiko`);

--
-- Indexes for table `manajemen_risiko`
--
ALTER TABLE `manajemen_risiko`
  ADD PRIMARY KEY (`id_manajemen_risiko`);

--
-- Indexes for table `pengendalian`
--
ALTER TABLE `pengendalian`
  ADD PRIMARY KEY (`id_pengendalian`);

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
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dampak`
--
ALTER TABLE `dampak`
  MODIFY `id_dampak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `indikator_organisasi`
--
ALTER TABLE `indikator_organisasi`
  MODIFY `id_indikator_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori_risiko`
--
ALTER TABLE `kategori_risiko`
  MODIFY `id_kategori_risiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manajemen_risiko`
--
ALTER TABLE `manajemen_risiko`
  MODIFY `id_manajemen_risiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengendalian`
--
ALTER TABLE `pengendalian`
  MODIFY `id_pengendalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `risiko`
--
ALTER TABLE `risiko`
  MODIFY `id_risiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sasaran_organisasi`
--
ALTER TABLE `sasaran_organisasi`
  MODIFY `id_sasaran_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
