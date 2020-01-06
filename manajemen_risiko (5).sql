-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 02:32 AM
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
(7, 'Adanya pemberitaan negatif di media', 6),
(8, 'Jika tindak lanjut tidak dilakukan akan menurunkan nilai IPP nasional', 13),
(9, 'Akan berdampak kepada penurunan presentase IPP yang baik', 14),
(10, 'Akan berdampak kepada penurunan kinerja dan kemungkinan tidak tercapainya target kinerja Deputi', 15),
(11, 'Akan berdampak kepada penurunan kinerja dan kemungkinan tidak tercapainya target kinerja Deputi', 16),
(12, 'Pemberitaan negatif di media sosial dan media masa lokal serta Tingkat kepercayaan stakeholder sedang', 17),
(13, 'Pemberitaan negatif di media sosial dan media masa lokal serta Tingkat kepercayaan stakeholder sedang', 18),
(14, 'Pemberitaan negatif di media sosial dan media masa lokal serta Tingkat kepercayaan stakeholder sedang', 19),
(15, 'Akan berdampak kepada penurunan nilai SAKIP Deputi', 20),
(16, 'Tidak tercapainya target tingkat kepuasan masyarakat', 21),
(17, 'Pemberitaan negatif di media sosial dan media masa lokal serta menurunnya tingkat kepercayaan stakeholder', 22),
(18, 'Rendahnya persepsi masyarakat terhadap kualitas ASN', 23),
(19, 'Pemberitaan negatif di media sosial dan media massa lokal serta tingkat kepercayaan stakeholder sedang', 25),
(20, 'Karena berkaitan dengan hak yang seharusnya diperoleh oleh setiap ASN', 26),
(21, 'Tidak tercapainya target kinerja yang ditetapkan dalam PK', 31),
(22, 'Penilaian akan rendah akan tetapi masih bisa dilakukan revisi atas arahan dari evaluator', 27),
(23, 'Tidak tercapainya target kinerja yang ditetapkan dalam PK', 32),
(24, 'Akan berdampak pada penurunan kinerja', 28),
(25, 'Pemberitaan negatif di media sosial dan media massa lokal serta tingkat kepercayaan stakeholder sedang', 29),
(26, 'Penurunan Reputasi', 34),
(27, 'Jumlah keluhan/hasil penilaian tidak dapat didokumentasikan ke organisasi', 30),
(28, 'Tidak tercapainya target kinerja yang ditetapkan dalam PK', 35),
(29, 'Terhambatnya pelaksanaan SPBE Nasional', 36),
(31, 'Nilai RB yang baik sebagai cerminan efektif dan efisiennya organisasi dan sebagai wujud meningkatnya kinerja', 43),
(32, 'Opini BPK di bawah WTP', 42),
(33, 'Kerugian Keuagan Negara', 42),
(34, 'Target nilai SAKIP Deputi Bidang Kelembagaan dan Tata Laksana tidak tercapai', 45),
(35, 'Opini BPK di bawah WTP', 46),
(36, 'Kerugian Keuagan Negara', 46),
(37, 'berpengaruh pada layanan organisasi sehingga tamu yang datang bisa tidak friendly dan tidak menyampaikan maksud dan tujuannya dengan baik', 48),
(38, 'Opini BPK di bawah WTP', 49),
(39, 'Kerugian Keuagan Negara', 49),
(40, 'Pihak yang terlibat harus mengembalikan dana yang tidak memiliki bukti dukung penggunaaan, apabila tidak melaksanakan akan mempengaruhi penilaian BPK', 50),
(43, 'Nilai Hasil Self Assesment di bawah 3/tidak sesuai dengan target', 51),
(44, 'Kepercayaan publik terhadap penerapan  SAKIP di Kementerian PANRB menurun                          ', 52),
(45, 'Jumlah unit kerja Eselon I yang ditargetkan mendapat nilai SAKIP \"A\" tidak terpenuhi', 52),
(46, 'Rekomendasi BPK yang tindaklanjutnya belum sesuai akan menjadi utang Kementerian PANRB kepada BPK', 53),
(47, 'Unit Kerja tidak melakukan perbaikan  sehingga Temuan hasil pengawasan berpotensi terjadi kembali                                                                      ', 54),
(48, 'Dokumen pendukung hilang                                     ', 56),
(49, 'Capaian nilai RBI unit kerja rendah                    ', 56),
(50, 'Kepercayaan publik terhadap Kementerian PANRB sebagai pembuat kebijakan RB menurun', 56),
(51, 'Kepercayaan publik terhadap Inspektorat Kementerian PANRB sebagai APIP yang bertanggung jawab atas pokja penguatan pengawasan menurun ', 57),
(52, ' Tingkat kepatuhan LHKPN yang rendah dapat menurunkan reputasi Kementerian PANRB di masyarakat, karena diumumkan ke publik setiap tahunnya', 59),
(53, 'Tingkat kepatuhan LHKPN dan LHKASN yang rendah dapat menurunkan nilai RB Kementerian PANRB', 59),
(54, 'Risiko tidak teridentifikasi dan terjadi tanpa pengendalian', 61),
(55, 'Nilai survei kualitas pelayanan masih di bawah nilai minimal syarat pengajuan WBK/WBBM', 62),
(56, 'Nilai survei persepsi korupsi masih di bawah nilai minimal syarat pengajuan WBK/WBBM', 63),
(57, 'Penurunan Kinerja', 55),
(58, ' Penurunan pagu anggaran Inspektorat pada tahun selanjutnya', 64),
(59, 'Pelaksanaan kegiatan yang mendukung kinerja Inspektorat menjadi tidak optima', 64),
(60, 'Setiap terjadi penurunan nilai SKP atas 1 orang pegawai di Inspektorat mengakibatkan penurunan kinerja sebesar 10% (9/10 x 100%)', 67),
(61, 'Hasil survei belum menggambarkan peranan APIP sebagai Konsultan dan Pemberi Assurance', 66),
(62, 'Penurunan Kinerja', 68),
(63, 'Nilai kapabilitas APIP Inspektorat Kementerian PANRB masih stagnan', 69),
(64, 'Menurunnya reputasi/citra KemenPANRB', 71),
(65, 'Keluhan dari stakeholder dari kebijakan tersebut', 72),
(66, 'Berdampak pada ketidakpastian dalam pengambilan keputusan para stakeholder', 73),
(67, 'Inefisiensi dalam bekerja', 74),
(68, 'Inefisiensi dalam bekerja', 75),
(69, 'Beban keuangan negara', 37),
(70, 'Tingkat kepuasan stakeholder menurun', 76),
(71, 'Tingkat kepuasan stakeholder menurun', 77),
(72, 'Penurunan reputasi', 38),
(73, 'Ketersediaan arsip, validitas, dan keandalan arsip', 79),
(74, 'Penyelenggaraan teknis belum diatur kebijakan internal', 80),
(75, 'Kebutuhan akan ruangan penyimpanan arsip inaktif yang memenuhi standar, belum tercukupi', 81),
(76, 'Penurunan Reputasi', 78),
(77, 'Penurunan reputasi', 39),
(78, 'Penurunan Kinerja', 39),
(79, 'Penurunan reputasi', 82),
(80, 'Penurunan kinerja', 82),
(81, 'Capaian skor akreditasi perpustakaan tidak maksimal', 83),
(82, 'Penurunan kinerja', 84),
(83, 'Penurunan reputasi', 84),
(84, 'Capaian skor akreditasi perpustakaan tidak maksimal', 85),
(85, 'Penurunan kinerja', 40),
(86, 'Penurunan reputasi', 40),
(87, 'Berdampak pada tim unit kerja tidak dapat menyelesaikan pekerjaan (back office) dari tim perpustakaan hingga layanan user pemustaka tidak dapat menelusur informasi melalui portal web tersebut', 86),
(88, 'Penurunan kinerja', 41),
(89, 'Penurunan reputasi', 41),
(90, 'Capaian skor indeks tidak maksimal', 87),
(91, 'Pemohon informasi kesulitan mendapatkan bahan informasi publik di lingkungan Kementerian PANRB', 88),
(92, 'Penurunan kinerja', 44),
(93, 'Penurunan reputasi', 44),
(94, 'Penurunan Kinerja', 89),
(95, 'Penyerapan anggaran tidak maksimal', 90),
(96, 'Penurunan reputasi', 47),
(97, 'Penurunan kinerja', 47),
(98, 'Penurunan reputasi', 58),
(99, 'Penurunan kinerja', 58),
(100, 'Pertanggungjawaban dibayarkan tidak sesuai ketentuan/ tidak bisa dibayarkan', 91),
(101, 'SKP PNS Biro HUKIP tidak tercapai', 92),
(102, 'Penurunan Kinerja', 93),
(103, 'Pelayanan Biro HUKIP kurang optimal', 94),
(104, 'Penurunan reputasi', 60),
(105, 'Penurunan kinerja', 60),
(106, 'Gangguan terhadap layanan organisasi', 60),
(107, 'Penurunan Kinerja', 95),
(108, 'Penurunan kinerja', 70),
(109, 'Gangguan terhadap layanan organisasi', 70),
(110, 'Penurunan reputasi', 70),
(111, 'Penurunan Reputasi', 96),
(112, 'Penurunan kinerja', 97),
(113, 'Gangguan terhadap layanan organisasi', 97),
(114, 'Penurunan reputasi', 97),
(115, 'Penurunan Kinerja', 98),
(116, 'Penurunan kinerja', 99),
(117, 'Gangguan terhadap layanan organisasi', 99),
(118, 'Penurunan reputasi', 99),
(119, 'Penurunan Kinerja', 100),
(120, 'Penurunan Kinerja', 101),
(121, 'Penurunan Reputasi', 102),
(122, 'Penurunan Reputasi', 105),
(123, 'Gangguan terhadap layanan organisasi', 103),
(124, 'Penurunan reputasi', 103),
(125, 'Penurunan Kinerja', 107),
(126, 'Beban keuangan negara', 104),
(127, 'Penurunan kinerja', 104),
(128, 'Penurunan reputasi', 104),
(129, 'Penurunan Kinerja', 108),
(130, 'Gangguan terhadap layanan organisasi', 106),
(131, 'Beban keuangan negara', 106),
(132, 'Penurunan kinerja', 106),
(133, 'Penurunan Kinerja', 109),
(134, 'Penurunan Kinerja', 110),
(135, 'Penurunan Reputasi', 112),
(136, 'Gangguan terhadap layanan organisasi', 111),
(137, 'Beban keuangan negara', 111),
(138, 'Penurunan kinerja', 111),
(139, 'Penurunan reputasi', 111),
(140, 'Beban keuangan negara', 113),
(141, 'Gangguan terhadap layanan organisasi', 114),
(142, 'Beban keuangan negara', 114),
(143, 'Penurunan kinerja', 114),
(144, 'Penurunan reputasi', 114),
(145, 'Penurunan kinerja', 115),
(146, 'Penurunan kinerja', 116),
(147, 'Penurunan reputasi', 116),
(148, 'Gangguan terhadap layanan organisasi', 116),
(149, 'Penurunan kinerja', 117),
(150, 'Penurunan kinerja', 118),
(151, 'Penurunan reputasi', 119),
(152, 'Penurunan kinerja', 120),
(153, 'Penurunan kinerja', 121),
(154, 'Penurunan kinerja', 122),
(155, 'Gangguan terhadap layanan organisasi', 122),
(156, 'Penurunan kinerja', 123),
(157, 'Gangguan terhadap layanan organisasi', 123),
(158, 'Penurunan kinerja', 124),
(159, 'Gangguan terhadap layanan organisasi', 125),
(160, 'Penurunan kinerja', 125),
(161, 'Penurunan kinerja', 126),
(162, 'Gangguan terhadap layanan organisasi', 127),
(163, 'Penurunan kinerja', 127),
(164, 'Penurunan kinerja', 128),
(165, 'Penurunan kinerja', 129),
(166, 'Penurunan reputasi', 129),
(167, 'Gangguan terhadap layanan organisasi', 129),
(168, 'Gangguan terhadap layanan organisasi', 130),
(169, 'Penurunan kinerja', 130),
(170, 'Penurunan reputasi organisasi', 131),
(171, 'Penurunan kinerja', 131),
(172, 'Penurunan kinerja', 132),
(173, 'Gangguan terhadap layanan organisasi', 132),
(174, 'Penurunan kinerja', 133),
(175, 'Penurunan kinerja', 134),
(176, 'Penurunan reputasi', 134),
(177, 'Penurunan reputasi', 135),
(178, 'Penurunan kinerja', 136),
(179, 'Penurunan kinerja', 137),
(180, 'Penurunan reputasi', 137),
(181, 'Gangguan terhadap layanan organisasi', 138),
(182, 'Beban keuangan negara', 138),
(183, 'Sanksi pidana/perdata', 138),
(184, 'Penurunan reputasi', 138),
(185, 'Penurunan kinerja', 138),
(186, 'Penurunan kinerja', 139),
(187, 'Gangguan terhadap layanan organisasi', 139),
(188, 'Beban keuangan negara', 139),
(189, 'Penurunan reputasi', 139),
(190, 'Gangguan terhadap layanan organisasi', 140),
(191, 'Beban keuangan negara', 140),
(192, 'Penurunan kinerja', 140),
(193, 'Penurunan reputasi', 140),
(194, 'Penurunan reputasi', 33),
(195, 'Gangguan terhadap layanan organisasi', 33),
(196, 'Penurunan reputasi', 141),
(197, 'Penurunan reputasi', 142),
(198, 'Beban keuangan negara', 142),
(199, 'Penurunan reputasi', 143),
(200, 'Penurunan kinerja', 144),
(201, 'Gangguan terhadap layanan organisasi', 144),
(202, 'Penurunan reputasi', 144),
(203, 'Penurunan kinerja', 145),
(204, 'Gangguan terhadap layanan organisasi', 145),
(205, 'Beban keuangan negara', 145),
(206, 'Gangguan terhadap layanan organisasi', 146),
(207, 'Beban keuangan negara', 146),
(208, 'Penurunan kinerja', 146),
(209, 'Penurunan reputasi', 146),
(210, 'Penurunan kinerja', 147),
(211, '1) Potensi temuan material dalam pengelolaan keuangan/BMN', 148),
(212, '2) Opini BPK di bawah WTP', 148),
(213, '1) Laporan keuangan lebih atau kurang dicatat', 149),
(214, '2) Potensi temuan material dalam pengelolaan keuangan', 149),
(215, '3) Opini BPK di bawah WTP', 149),
(216, 'Potensi temuan material dalam PBJ', 150),
(217, 'Nilai Hasil Self Assesment unit kerja tidak sesuai dengan target', 151),
(218, 'Risiko tidak teridentifikasi dan risiko terjadi tanpa pengendalian', 152),
(219, 'Pemahaman unit kerja terkait identifikasi, analisis, dan evaluasi risiko', 153),
(220, 'Kepercayaan publik terhadap penerapan  SAKIP di Kementerian PANRB menurun ', 154),
(221, '1.Capaian nilai RBI unit kerja rendah', 155),
(222, '2.Kepercayaan publik terhadap Kementerian PANRB sebagai pembuat kebijakan RB menurun', 155),
(223, 'Mempengaruhi Nilai RB kementerian ', 156),
(224, 'Unit kerja tidak memenuhi kriteria untuk diusulkan ZI menuju WBK/WBBM', 157);

-- --------------------------------------------------------

--
-- Table structure for table `indikator_organisasi`
--

CREATE TABLE `indikator_organisasi` (
  `id_indikator_organisasi` int(11) NOT NULL,
  `indikator_organisasi` varchar(800) NOT NULL,
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
(8, 'Evaluasi Pelayanan Publik Wilayah I, II, III', 9, 1),
(9, 'Pendampingan Pembentukan MPP Wilayah I, II, III', 9, 1),
(10, 'Evaluasi pelayanan publik terkait SKM yang baik', 9, 1),
(11, 'Evaluasi Pelayanan Publik Wilayah I, II, III', 9, 1),
(12, 'Penyusunan dokumen perencanaan (PK, Renja, RKA/KL)', 10, 1),
(13, 'Evaluasi kinerja individu di Deputi Yanlik (Pembinaan internal)', 10, 1),
(14, 'Kegiatan monev kinerja individu', 10, 1),
(15, 'Penyusunan dokumen perencanaan (PK, Renja, RKA/KL)', 10, 1),
(16, 'Pelayanan konsultasi terhadap instansi pemerintah yang berkunjung ke Deputi Yanlik', 10, 1),
(17, 'Penyiapan dokumen perencanaan, izin konsi, MR, pembebanan biaya SPJ (anggaran)', 10, 1),
(18, 'Pelaksanaan pengelolaan anggaran (LPJ Bendahara Pengeluaran)', 16, 1),
(19, 'Revolving UP setiap bulan', 16, 1),
(20, 'Pendaftaran kontrak ke KPPN', 16, 1),
(21, 'Proses  pelaksanaan verifikasi dokumen pengelolaan anggaran', 16, 1),
(22, 'Penarikan dana oleh Bendahara Pengeluaran', 16, 1),
(23, 'Revisi pagu anggaran eksternal dan internal', 16, 1),
(24, 'Pertanggungjawaban kegiatan unit kerja', 16, 1),
(25, 'Pengajuan Renkas', 16, 1),
(26, 'Pelaksanaan kegiatan pada Biro SDMU', 16, 1),
(27, 'Pelaksanaan kegiatan seluruh unit kerja', 16, 1),
(28, 'Penyusunan laporan keuangan', 16, 1),
(29, 'Pelaksanaan layanan keprotokolan', 17, 1),
(30, 'Melakukan kompilasi atas laporan hasil pengukuran indeks profesionalitas ASN dari seluruh instansi', 21, 1),
(31, 'Melakukan penilaian atas penerapan sistem merit dari setiap IP', 21, 1),
(32, 'Menyusun kebijakan pengukuran indeks kesejahteraan ASN nasional', 21, 1),
(33, 'Evaluasi mandiri atas pelaksanaan RB di lingkungan Deputi SDMA', 22, 1),
(34, 'Menyusun dokumen perencanaan dan pelaporan kinerja', 22, 1),
(35, 'Menyusun RKA K/L dan SPJ', 22, 1),
(36, 'Melakukan survei kepuasan layanan kepada stakeholder', 22, 1),
(37, 'Monitoring dan evaluasi pelayanan Biro SDMU dengan dasar data dari aplikasi SMART', 18, 1),
(38, 'Pelaksanaan kegiatan Biro SDMU', 18, 1),
(39, 'Pelaksanaan kontrak penyedia Barang/Jasa', 18, 1),
(40, 'Monitoring penerapan Zona Integritas di lingkungan Biro SDM dan Umum', 18, 1),
(41, 'Melaksanakan pengumpulan SKP Pegawai Biro SDM dan Umum tahun berjalan', 18, 1),
(42, 'Penyediaan peralatan fasilitas perkantoran', 19, 1),
(43, 'Perencanaan dan pelaksanaan rekrutmen dan seleksi CPNS', 20, 1),
(44, 'Perencananaan dan penyelenggaraan program peningkatan kompetensi pegawai', 20, 1),
(45, 'Pengumpulan SKP Pegawai Biro SDM dan Umum', 20, 1),
(46, 'Pengelolaan pembinaan disiplin dan kesejahteraan pegawai', 20, 1),
(47, 'Perencanaan, persiapan dan seleksi pejabat/pegawai', 20, 1),
(48, 'Seleksi jabatan administrator dan pengawas yang lowong', 20, 1),
(49, 'Pelaksanaan Coaching Clinic Reformasi Birokrasi di Wilayah I. II, dan III ', 23, 1),
(50, 'Evaluasi implementasi Reformasi Birokrasi', 23, 1),
(51, 'Pelaksanaan Coaching Clinic AKIP di Wilayah I. II, dan III', 24, 1),
(52, 'Evaluasi implementasi AKIP', 24, 1),
(53, 'Penyusunan draft LKJPP', 24, 1),
(54, 'Pelaksanaan Coaching Clinic RB/ZI IP di Wilayah I. II, dan III (komponen LHKASN ada di dalamnya) ', 25, 1),
(55, 'Evaluasi implementasi ZI', 25, 1),
(56, 'Pelaksanaan Coaching Clinic RB/ZI IP di Wilayah (komponen LHKASN ada di dalamnya) ', 25, 1),
(57, 'Monitoring dan Evaluasi Tindak Lanjut Pengaduan Masyarakat dan Aparatur (RKA) 	', 26, 1),
(58, 'Penguatan pelaksanaan RB Internal ', 27, 1),
(59, 'Penyusunan dokumen Perencanaan dan pelaporan Deputi RBKunwas', 27, 1),
(60, 'Pelayanan kedeputian RBKunwas', 27, 1),
(61, 'Pengelolaan Keuangan Internal Deputi RB Kunwas', 27, 1),
(62, 'Verifikasi atas evaluasi mandiri kelembagaan instansi pemerintah', 28, 1),
(63, 'Melakukan sosialisasi, asistensi dan pilotting pelaksanaan SPBE', 29, 1),
(64, 'Audit Kinerja Pengelolaan Keuangan', 3, 1),
(65, 'Reviu Laporan Keuangan (unaudited) Kementerian PANRB', 3, 1),
(66, 'Reviu PAPBJ', 3, 1),
(67, 'Evaluasi Mandiri Maturitas SPIP', 3, 1),
(68, 'Sosialisasi/internalisasi rencana kerja Reformasi Birokrasi', 30, 1),
(69, 'Menyusun Indikator PK yang SMART  yang bersifat outcome atau output penting dan selaras dengan renstra', 30, 1),
(70, 'Monitoring dan Evaluasi Tingkat Kepuasan layanan pada aplikasi SISUKMA', 30, 1),
(71, 'Melengkapi berkas yang diperlukan saat pemeriksaan BPK', 30, 1),
(72, 'Evaluasi SAKIP Unit Kerja', 4, 1),
(73, 'Monitoring Laporan Tindak Lanjut Hasil Pemeriksaan BPK', 5, 1),
(74, 'Monitoring Laporan Tindak Lanjut Hasil Evaluasi dari Inspektorat', 5, 1),
(75, 'Evaluasi RB Unit Kerja di  Kementerian PANRB', 6, 1),
(76, 'Identifikasi potensi benturan kepentingan, dan Monev penanganan pengaduan masyarakat, WBS, dan benturan kepentingan di lingkungan unit kerja Kementerian PANRB', 6, 1),
(77, 'Pemantauan implementasi LHKASN di Lingkungan Kementerian PANRB', 6, 1),
(78, 'Implementasi Manajemen Risiko', 6, 1),
(79, 'Pelaksanaan Survei Persepsi Kualitas Pelayanan  di Unit Kerja Eselon I dalam rangka mendukung Evaluasi RB unit Kerja', 6, 1),
(80, 'Pelaksanaan Survei Persepsi  Perilaku Anti Korupsi di Unit Kerja Eselon I dalam rangka mendukung Evaluasi RB unit Kerja', 6, 1),
(81, 'Melakukan Perencanaan anggaran Inspektorat', 7, 1),
(82, 'Melakukan pengelolaan keuangan/ BMN', 7, 1),
(83, 'Implementasi SKP Pegawai di Inspektorat', 7, 1),
(84, 'Survei Kepuasan Pemangku Kepentingan atas Layanan Inspektorat', 7, 1),
(85, 'Evaluasi atas Penilaian mandiri kapabilitas APIP', 7, 1),
(89, 'Penanganan perkara hukum baik perdata dan tata usaha negara (litigasi) dan penanganan judicial review', 11, 1),
(90, 'Legal drafting PerUUan yang disampaikan oleh unit kerja dilingkungan Kementerian PANRB', 11, 1),
(91, 'Pendokumentasian PerUUan yang telah diundangkan dalam aplikasi JDIH', 11, 1),
(92, 'Pengadaan layanan SMTP relay dan mail gateway', 12, 1),
(93, 'Identifikasi kebijakan tatakelola teknologi informasi yang belum terakomodir', 12, 1),
(94, 'Mendistribusikan surat yang keluar dari Kementerian PANRB ke pihak eksternal yang dituju secara tepat waktu', 13, 1),
(95, 'Mendistribusikan surat masuk (eksternal) kepada unit kerja yang dituju secara tepat', 13, 1),
(96, 'Penatakelolaan (penyelenggaraan) kearsipan', 13, 1),
(97, 'Tersusunnya kebijakan penatakelolaan kearsipan', 13, 1),
(98, 'Kerjasama bidang kearsipan', 13, 1),
(99, 'Pengelolaan ruang dan koleksi perpustakaan', 13, 1),
(100, 'Pengelolaan ruang dan koleksi perpustakaan', 13, 1),
(101, 'Pengembangan thematic digital library (e-library) tahap 2 (terbentuknya front page dan konektivitas dengan Indonesia One Search)', 13, 1),
(102, 'Pelaksanaan kegiatan survei presepsi persepsi masyarakat terhadap kebijakan Kementerian PANRB', 14, 1),
(103, 'Pembaruan daftar informasi publik', 14, 1),
(104, 'Melakukan monitoring dan evaluasi atas penyerapan anggaran Biro HUKIP Tahun 2019 setiap triwulan', 15, 1),
(105, 'Melakukan monitoring dan evaluasi terhadap pengelolaan keuangan yang bebas dari temuan material (1% dari DIPA yang dikelola) setiap semesteran', 15, 1),
(106, 'Pelaksanaan tugas pokok pekerjaan sesuai dengan PK yang telah ditetapkan', 15, 1),
(107, 'Melakukan pelayanan terhadap stakeholders Biro HUKIP', 15, 1),
(108, 'Melaksanakan reviu PK dan ditanda tangani secara elektronik melalui aplikasi SIMPAN', 31, 1),
(109, 'Melaksanakan reviu anggaran pada setiap unit kerja dan memastikan bahwa anggaran tersebut akan terserap sesuai dengan output dan outcome yang dihasilkan', 31, 1),
(110, 'Melaksanakan reviu PK dan ditanda tangani secara elektronik melalui aplikasi SIMPAN', 31, 1),
(111, 'Melaksanakan penyusunan Laporan Kinerja Kementerian PANRB', 31, 1),
(112, 'Mendorong unit kerja menggunakan SIPEBE dalam proses perencanaan dan monitoring serta evaluasi kinerja dan anggaran', 31, 1),
(113, 'Melaksanakan pembentukan Tim RBI dan agen perubahan, serta melakukan pertemuan untuk pembahasan rencana aksi RBI dan agen perubahan', 31, 1),
(114, 'Melaksanakan monev rencana aksi RBI, agar RBI berjalan dengan maksimal dan penyelesaian rencana aksi tepat waktu', 31, 1),
(115, 'Melaksanakan reform corner secara rutin dan mendorong unit kerja untuk ikut serta dalam kegiatan reform corner', 31, 1),
(116, 'melaksanakan survey RBI melalui aplikasi SMART dan mendorong unit kerja untuk melaksanakan pengisian survey', 31, 1),
(117, 'Melaksanakan evaluasi kelembagaan di lingkungan kementerian PANRB', 31, 1),
(118, 'Melaksanakan penyusunan OTK (Penataan organisasi/reorganisasi)', 31, 1),
(119, 'Melaksanakan Seleksi calon penyedia jasa konsultan penyusunan Proses Bisnis Kem. PANRB', 31, 1),
(120, 'Melaksanan Reviu dan finalisasi dokumen Anjab/ABK Kem. PANRB', 31, 1),
(121, '\'- Melaksanakan Seleksi calon penyedia jasa konsultan penyusunan Proses Bisnis Kem. PANRB - Melaksanakan Reviu dan finalisasi dokumen Proses Bisnis', 31, 1),
(122, '\'Melaksanakanreviu/evaluasi pelaksanaan standar pelayanan - melaksanakan koordinasi dan finalisasi perbaikan standar pelayanan', 31, 1),
(123, '\'- melaksanakan koordinasi, monitoring, evaluasi pemenuhan dokumen/data dukung pelaksanaan evaluasi akuntabilitas kinerja Sekretariat Kementerian PANRB', 32, 1),
(124, '\'- melaksanakan reviu dan finalisasi rancangan Permenpan Kerja Sama - melaksanakan reviu dan finalisasi kebijakan proses pengajuan perjalanan dinas LN - melaksanakan reviu dan finalisasi laporan monev pelaksanaan kerja sama - melaksanakan reviu dan finalisasi rancangan kebijakan pelaksanaan studi tiru bagi pejabat/pegawai di lingkungan Kem. PANRB', 33, 1),
(126, 'memantau dan mengevaluasi pelaksanaan kegiatan dan anggaran Biro MKOK', 34, 1),
(127, 'memantau dan mengevaluasi pertanggungjawaban pelaksanaan kegiatan dan anggaran Biro MKOK', 34, 1),
(128, '\'- memantau dan mengevaluasi nilai SKP PNS Biro MKOK Tahun 2018 - Reviu dan finalisasi SKP PNS Biro MKOK tahun 2019	', 34, 1),
(129, '\'- memantau dan mengevaluasi hasil survei kepuasan pemangku kepentingan terhadap pelayanan Biro MKOK - melaksanakan koordinasi perbaikan kualitas pelayanan Biro MKOK', 34, 1),
(130, ' <html itemscope itemtype=\"http://schema.org/QAPage\" class=\"html__responsive\">\r\n\r\n    <head>\r\n\r\n        <title>What is the MySQL VARCHAR max size? - Stack Overflow</title>\r\n        <link rel=\"shortcut icon\" href=\"https://cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico?v=4f32ecc8f43d\">\r\n        <link rel=\"apple-touch-icon image_src\" href=\"https://cdn.sstatic.net/Sites/stackoverflow/img/apple-touch-icon.png?v=c78bd457575a\">\r\n        <link rel=\"search\" type=\"application/opensearchdescription+xml\" title=\"Stack Overflow\" href=\"/opensearch.xml\">\r\n        <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0\">\r\n\r\n\r\n', 0, 0),
(131, 'Penilaian mandiri unit kerja yang akan diusulkan ZI menuju WBK/WBBM', 6, 1);

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
(0, 'Risiko Kebijakan/ Stratejik'),
(1, 'Risiko Operasional'),
(2, 'Risiko Kepatuhan'),
(3, 'Risiko Finansial');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tujuan_sasaran` text NOT NULL,
  `id_manajemen_risiko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nomor`, `tanggal`, `tujuan_sasaran`, `id_manajemen_risiko`) VALUES
(2, '123', '2020-01-05', 'ada', 3),
(3, 'ada', '2020-01-05', 'aja', 8);

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
(3, '8', '2019', 1),
(5, '3', '2019', 1),
(6, '6', '2019', 1),
(7, '4', '2019', 1),
(8, '5', '2019', 1),
(9, '1', '2019', 1),
(10, '2', '2019', 1),
(11, '7', '2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengendalian`
--

CREATE TABLE `pengendalian` (
  `id_pengendalian` int(11) NOT NULL,
  `pengendalian` text NOT NULL,
  `id_risiko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengendalian`
--

INSERT INTO `pengendalian` (`id_pengendalian`, `pengendalian`, `id_risiko`) VALUES
(1, 'Cobax', 4),
(2, 'coba2', 4),
(3, 'coba3', 4),
(4, 'coba4', 4),
(5, 'Memberikan sosialisasi dan bimbingan teknis kepada SDM di daerah untuk meningkatkan pemahaman mengenai instrumen IPP (UU No. 25 Tahun 2009 Tentang Pelayanan Publik)', 13),
(6, 'Melakukan sosialisasi dan bimbingan teknis terkait pelayanan publik terhadap SDM di wilayah timur dan melakukan evaluasi serta memberikan rekomendasi perbaikan dan pemenuhan sarpras (UU No. 25 Tahun 2009 Tentang Pelayanan Publik)', 14),
(7, 'Sosialisasi dan Bimbingan Teknis PermenPANRB Nomor 23 Tahun 2017 tentang Penyelenggaraan Mal Pelayanan Publik (PermenPANRB Nomor 23 Tahun 2017 tentang Penyelenggaraan Mal Pelayanan Publik)', 15),
(8, 'Sosialisasi peraturan kepada instansi Pemerintah terkait PermenPANRB No. 14 tahun 2017 tentang pedoman penyusunan survei kepuasan masyarakat unit penyelenggaraan pelayanan publik (PermenPANRB No. 14 tahun 2017 tentang pedoman penyusunan survei kepuasan masyarakat unit penyelenggaraan pelayanan publik)', 16),
(9, 'Sosialisasi dan coaching mengenai proses bisnis/tata kerja/tata laksana serta penilaian terhadap pegawai (Peraturan Menpan 19 Tahun 2018 tentang Penyusunan Peta Proses Bisnis Instansi Pemerintah)', 17),
(10, 'Sosialisasi dan coaching mengenai proses bisnis/tata kerja/tata laksana serta penilaian terhadap pegawai (Peraturan Menpan 19 Tahun 2018 tentang Penyusunan Peta Proses Bisnis Instansi Pemerintah)', 18),
(11, 'Sosialisasi dan coaching mengenai proses bisnis/tata kerja/tata laksana serta penilaian terhadap pegawai (Peraturan Menpan 19 Tahun 2018 tentang Penyusunan Peta Proses Bisnis Instansi Pemerintah)', 19),
(12, 'Perbaikan Manajemen Data', 20),
(13, 'Perbaikan SOP Manajemen Hospitality', 21),
(14, 'Sosialisasi SOP Verifikasi (Peraturan Menpan 12 Tahun 2019 tentang Verifikasi Pertanggungjawaban Keuangan Negara Di Lingkungan Kementerian Pendayagunaan Aparatur Negara Dan Reformasi Birokrasi)', 22),
(15, 'Surat Edaran dari BKN', 23),
(16, 'Memberikan sosialisasi dan bimbingan teknis kepada SDM di daerah untuk meningkatkan pemahaman mengenai pengisian  instrumen sesuai dengan Permenpan 40 Tahun 2018', 25),
(17, 'Sudah dilakukan survei kesejahteraan', 26),
(18, 'Permenpan 20 Tahun 2018 tentang Pedoman Evaluasi Kelembagaan Instansi Pemerintah ', 31),
(19, 'Bersurat kepada K/L/D untuk melakukan evaluasi Mandiri', 31),
(20, 'Sosialisasi reformasi birokrasi internal', 27),
(21, 'Pembentukan tim reformasi birokrasi', 27),
(22, 'Monitoring secara berkala', 27),
(23, 'Koordinasi dengan BPS', 26),
(24, 'Pengukuran berdasarkan kajian penelitian', 26),
(25, 'Permenpan 20 Tahun 2018 tentang Pedoman Evaluasi Kelembagaan Instansi Pemerintah', 32),
(26, 'Bersurat kepada K/L/D untuk melakukan evaluasi Mandiri', 32),
(27, 'Sosialisasi PermenPANRB 38 Th 2018 tentang Pengukuran Indeks Profesionalitas ASN', 23),
(28, 'Melakukan koordinasi dengan BKN dalam hal pengukuran dan evaluasi', 23),
(29, 'Manajemen data', 28),
(30, 'Mekanisme/ SOP verifikasi yang diterapkan', 29),
(31, 'Melaporakan kerusakan kepada bagian Barang Milik Negara untuk perbaikan alat/penggantian', 30),
(32, 'Pembuatan standar bahan sosialisasi yang lebih aplikatif dan menarik', 34),
(33, 'Optimalisasi in house training secara berkala, terutama pada isu-isu terkini terkait Reformasi Birorkasi', 34),
(34, 'Melaksanakan sertifikasi atas pelaksana sosialisasi, saat ini sedang dikembangkan materi sertifikasi dengan Deputi SDM aparatur', 34),
(35, '	Sosialisasi/Bimte Permenpan Nomor 5 Tahun 2018 Pedoman Evaluasi SPBE', 35),
(36, 'Sosialisasi/Bimtek Peraturan Preside No. 95 Tahun 2018 sebagai dasar dalam perencanaan dan penganggaran dalam pelaksanaan SPBE', 35),
(37, 'Bersurat kepada K/L untuk melakukan evaluasi Mandiri', 35),
(38, '	Sosialisasi/Bimte Permenpan Nomor 5 Tahun 2018 Pedoman Evaluasi SPBE', 36),
(39, 'Sosialisasi/Bimtek Peraturan Preside No. 95 Tahun 2018 sebagai dasar dalam perencanaan dan penganggaran dalam pelaksanaan SPBE', 36),
(40, 'Bersurat kepada K/L untuk melakukan evaluasi Mandiri', 36),
(41, 'Pembentukan SK Tim RB & ZI', 43),
(42, 'Pembentukan SK Tim Aseso', 43),
(43, 'Pembentukan Peta Rencana RB', 43),
(44, 'Monev Capaian RB', 43),
(45, 'PMK  No 32/PMK.02/2018 tentang Standar Biaya MasukanTA 2019', 42),
(46, 'Keputusan Menpan RB No 3 Tahun 2019 ttg Daftar Harga Satuan TA 2019 di lingkungan Kementerian PANRB ', 42),
(47, 'PMK 178 thn 2018  ttg perubahan PMK 190 thn 2012 ttg tata cara pembayaran dalam rangka pelaksanaan APBN                                      ', 42),
(48, 'Evaluasi SAKIP', 45),
(49, 'Bimbingan teknis dan pendampingan terkait sakip', 45),
(50, 'Penggunaan aplikasi SiMona', 46),
(51, 'PMK tNo 255 thn 2015 tentang Standar Reviu Laporan Keuangan Kementerian Negara/Lembaga                                                           ', 46),
(52, 'Reviu Berjenjang pelaksanaan pengawasan', 46),
(53, 'Menggunakan sistem aplikasi dalam evaluasi yang dapat menyuarakan aspirasi secara personal', 48),
(54, ' Perka BPKP Nomor 3 Tahun 2019  Tentang Pedoman Umum Pengawasan Intern Atas Pengadaan Barang/Jasa                                                    ', 49),
(55, ' Peraturan LKPP Nomor 7 Tahun 2018 tentang Pedoman Perencanaan Pengadaan Barang/Jasa Pemerintah', 49),
(56, 'Pelaksanaan SOP evalausi secara efektif.', 50),
(57, 'Penguatan monev keuangan secara berkala atas pelaksanaan anggaran', 50),
(58, 'Sosialisasi kepada unit kerja mengenai peran unit kerja dalam penyelenggaraan SPIP                                                                                  ', 51),
(59, 'Perka BPKP Nomor 4 Tahun 2016 tentang Pedoman Peniilaian dan Strategi Peningkatan Maturitas  SPIP', 51),
(60, 'Pendampingan SAKIP kepada unit kerja', 52),
(61, 'Monev Kinerja dan Anggaran Triwulan', 52),
(62, 'Pemantauan semesteran oleh Inspektorat atas tindak lanjut rekomendasi BPK melalui aplikasi SIPTL                                                              ', 53),
(63, 'SOP Pemantauan Tindak Lanjut Hasil Pengawasan ', 53),
(64, 'Pemantauan semesteran oleh Inspektorat atas tindak lanjut hasil evaluasi internal', 54),
(65, 'Monev capaian RBI unit kerja', 56),
(66, 'Pembentukan Tim Asesor', 56),
(67, 'Bimbingan teknis dan sosialisasi kepada unit kerja                                                                            ', 56),
(68, 'Menggunakan media penyimpanan cloud', 56),
(69, 'Sosialisasi atas penanganan gratifikasi, pengaduan masyarakat, WBS, benturan kepentingan                                                                   ', 57),
(70, 'SOP Pelaksanaan Pengelolaan Gratifikasi', 57),
(71, 'Mengirimkan Nota Dinas dalam rangka menghimbau pegawai untuk melaporkan harta kekayaan yang dimiliki', 59),
(72, 'Pelatihan Manajemen Risiko', 61),
(73, 'Adanya standar, maklumat, dan SOP pelayanan', 62),
(74, 'Adanya standar, maklumat, dan SOP pelayanan', 63),
(75, 'Adanya banner sebagai media sosialisasi anti korupsi', 63),
(76, 'Monev Kinerja dan Anggaran Triwulan', 64),
(77, 'Pelaksanaan SOP evalausi secara efektif', 55),
(78, 'Penguatan reviu secara berkala atas pelaksanaan Evaluasi', 55),
(79, 'Verifikasi internal oleh Inspektorat', 65),
(80, 'Verifikasi oleh Bagian Keuangan', 65),
(81, 'Penilaian SKP pegawai dilakukan pada akhir tahun', 67),
(82, 'Adanya SOP pelayanan', 66),
(83, 'Pembuatan PKPT', 69),
(84, 'Optimalisasi sosialisasi dan bimbingan teknis pelaksanaan RB [ada K/L/P, terutama pada instansi pemerintah yang belum tersentuh]', 68),
(85, 'Pelibatan tim provinsi dan akademisi sebagai perpanjangan tangan dalam sosialisasi dan bimbingan teknis pelaksanaan RB', 68),
(86, 'Pelibatan tim independen RB Nasional dalam upaya terbosan membumikan RB pada K/L/P', 68),
(87, 'Melakukan koordinasi dengan unit kerja melalui rapat', 71),
(88, 'Penggunaan aplikasi SiLAHKAN', 72),
(89, 'Pembuatan SOP', 73),
(90, 'Mengeluarkan SE Menteri No. 6 Tahun 2013 tentang penggunaan e-mail kedinasan', 74),
(91, 'Sosialisasi ke seluruh unit kerja', 75),
(92, 'Peraturan perundang-undangan tentang verifikasi dokumen keuangan', 37),
(93, 'SOP verifikasi dokumen keuangan', 37),
(94, 'Pembagian wilayah pengiriman surat untuk mempercepat pengiriman surat dinas', 76),
(95, 'Kontrol pimpinan pada saat dilaksanakannya penginputan surat masuk', 77),
(96, 'Peraturan perundang-undangan tentang verifikasi dokumen keuangan', 38),
(97, 'SOP verifikasi dokumen keuangan', 38),
(98, 'Pembinaan secara berkala, baik dilakukan secara mandiri maupun dengan mengundang narasumber dari ANRI', 79),
(99, 'Internalisasi dan sosialisasi atas peran dan tanggung jawab unit pengolah terhadap penyelenggaraan kearsipan, ketersediaan arsip, dan keandalan arsip', 79),
(100, 'Pengembangan dan sosialisasi arsip elektronis (SIBARI) yang diintegrasikan dengan SMART sebagai e-office KemenPANRB sekaligus mendukung implementasi SPBE', 79),
(101, 'Pemeliharaan record center berupa fumigasi dan pemeliharaan berkala', 79),
(102, 'Akuisisi arsip retensi inaktif dari unit pengolah ke unit kearsipan', 79),
(103, 'Penyusunan rancangan peraturan menteri tentang tata kelola yang kontennya dikonsultasikan dan disupervisi oleh ANRI', 80),
(104, 'Penyewaan tempat penyimpanan arsip inaktif pada Pusat Jasa Penyimpanan Arsip ANRI', 81),
(105, 'Pembuatan standar bahan sosialisasi yang lebih aplikastif dan menarik', 78),
(106, 'Optimalisasi in house training secara berkala, terutama pada isu-isu terkini terkait Reformasi Birorkasi', 78),
(107, 'Melaksanakan sertifikasi atas pelaksana sosialisasi, saat ini sedang dikembangkan materi sertifikasi dengan Deputi SDM aparatur', 78),
(108, 'Monev Triwulan', 39),
(109, 'Monitoring IKPA di aplikasi OMSPAN', 39),
(110, 'Monev Triwulan', 82),
(111, 'Monitoring IKPA di aplikasi OMSPAN', 82),
(112, 'Optimalisasi ruang perpustakaan lantai 5 untuk penyimpanan sebagian koleksi', 83),
(113, 'Dilakukan rekapitulasi pertanggungjawaban penyelesaian tagihan kemudian dikomunikasikan ke unit kerja melalui nota dinas', 84),
(114, 'Membuat standing banner terkait peminjaman buku koleksi perpustakaan', 85),
(115, 'Dilakukan rekapitulasi pertanggungjawaban penyelesaian tagihan kemudian dikomunikasikan ke unit kerja melalui nota dinas', 40),
(116, 'Berkoordinasi dengan bagian data dan teknologi informasi untuk mengatasi hack', 86),
(117, 'Mengubah metode pengadaan lelang menjadi pengadaan langsung', 87),
(118, 'Monev Triwulan', 41),
(119, 'Memastikan pekerjaan pengadaan website PPID telah diverifikasi oleh BSSN', 88),
(120, 'Dilakukan rekapitulasi pertanggungjawaban penyelesaian tagihan kemudian dikomunikasikan ke unit kerja melalui nota dinas sebulan sekali', 44),
(121, 'Monev Triwulan', 47),
(122, 'Pelaksanaan SOP evaluasi secara efektif', 89),
(123, 'Penguatan reviu secara berkala atas pelaksanaan Evaluasi', 89),
(124, 'Merevisi kembali rencana aksi sesuai arah kebijkan pimpinan', 90),
(125, 'Dilakukan diklat Akuntansi PP berbasis akrual', 58),
(126, 'Konsultasi ke APIP dan pembina APK', 58),
(127, 'SOP verifikasi internal', 91),
(128, 'Memberikan teguran kepada PNS bersangkutan', 92),
(129, 'Optimalisasi sosialisasi dan bimbingan teknis pelaksanaan RB [ada K/L/P, terutama pada instansi pemerintah yang belum tersentuh]', 93),
(130, 'Pelibatan tim provinsi dan akademisi sebagai perpanjangan tangan dalam sosialisasi dan bimbingan teknis pelaksanaan RB', 93),
(131, 'Pelibatan tim independen RB Nasional dalam upaya terbosan membumikan RB pada K/L/P', 93),
(132, 'Masing-masing Bagian membuat SOP Pelayanan stakeholders', 94),
(133, 'Agenda pimpinan', 60),
(134, 'Aplikasi E-Pro', 60),
(135, 'Melakukan Koordinasi dengan seluruh Instansi', 95),
(136, 'Mengirimkan surat edaran terkait pelaporan kinerja', 95),
(137, 'Pembaharuan SOP', 70),
(138, 'Pembaharuan Probis', 70),
(139, 'Pembuatan standar bahan sosialisasi yang lebih aplikatif dan mudah dipahami', 96),
(140, 'Melakukan pelatihan secara berkala pada evaluator mitigasi: 1. optimalisasi in house training secara berkala, terutama pada isu-isu terkini terkait penguatan integritas. 2. melaksanakan sertifikasi atas pelaksana sosialisasi, saat ini sedang dikembangkan materi sertifikasi dengan Deputi SDM aparatur.', 96),
(141, 'Penyusunan proyeksi anggaran', 97),
(142, 'Penyusunan rencana penarikan dana', 97),
(143, 'Optimalisasi sosialisasi dan bimbingan teknis pelaksanaan penguatan integritas pada K/L/P, terutama pada instansi pemerintah yang belum tersentuh', 98),
(144, 'Pelibatan KPK, ORI dan akademisi dalam pembuatan terobosan penguatan integritas', 98),
(145, 'Optimalisasi kegiatan regional forum komunikasi PAN RB sebagai upaya penyebaran informasi pelaksanaan penguatan integritas terutama pada pemerintah daerah wilayah timur', 98),
(146, 'Peran aktif dalam rencana aksi pencegahan dan pemberantasan korupsi bersama bappenas, KSP, Setneg, KPK', 98),
(147, 'Laporan progres pelaksanaan kegiatan pengadaan', 99),
(148, 'Pelaksanaan SOP evalausi secra efektif', 100),
(149, 'Penguatan reviu secara berkala atas pelaksanaan Evaluasi', 100),
(150, 'Monev atas pelaksanaan evaluasi terutama dalam ketaatan pelaksanaan SOP untuk memastikan ketaaatn pelaksanaan SOP dan meningkatkan kualitas LHE yang dihasilakn', 100),
(151, 'Pelibatan KPK, ORI dan akademisi dalam pembuatan terobosan penguatan integritas', 100),
(152, 'Pelaksanaaan sosialisasi dan bimbingan teknis pelaporan harta melalui LKHASN pada K/L/P', 101),
(153, 'Optimalisasi sosialisasi dan bimbingan teknis pelaporan harta melalui LKHASN pada K/L/P', 101),
(154, 'Memasukkan pelaporan LHKASN menjadi unsur penilaian pelaksanaan RB', 101),
(155, 'Berkerja sama dengan KPK terutama untuk mendorong pemenuhan pelaporan dan analisis atas pelaporan LHKASN', 101),
(156, 'Ekspose kasus dan koordinasi lintas instansi pemerintah dan membentuk tim gabungan penyelesaian Kasus', 102),
(157, 'Optimalisasi tim gabungan penanganan pengaduan masyarakat', 102),
(158, 'Penguatan kelembagaan pengelola pengaduan masyarakat', 102),
(159, 'Menyelenggarakan forum komunikasi penanganan pengaduan secara berkala', 102),
(160, 'Ekspose kasus dan koordinasi lintas instansi pemerintah dan membentuk tim gabungan penyelesaian Kasus', 105),
(161, 'Optimalisasi tim gabungan penanganan pengaduan masyarakat', 105),
(162, 'Penguatan kelembagaan pengelola pengaduan masyarakat', 105),
(163, 'Menyelenggarakan forum komunikasi penanganan pengaduan secara berkala', 105),
(164, 'Pembuatan aplikasi monev BMN', 103),
(165, 'Daftar barang ruangan', 103),
(166, 'Daftar pengguna BMN', 103),
(167, 'Membuat database terkait evidence masing-masing area perubahan', 107),
(168, 'Pelaksanaan Monev RBI unit kerja', 107),
(169, 'Aplikasi  SIMAK BMN', 104),
(170, 'Standarisasi ruangan dengan membuat kebijakan tentang sarana dan prasarana', 104),
(171, 'Melakukan perencanaan lebih awal dari sebelumnya', 108),
(172, 'Membuat database Laporan Kinerja yang terstruktur dan sistemastis', 108),
(173, 'Penyusunan kontrak pengendalian hama untuk 1 tahun', 106),
(174, 'Melakukan perencanaan lebih awal dari sebelumnya', 109),
(175, 'Membuat database Laporan Kinerja yang terstruktur dan sistemastis', 109),
(176, 'Melakukan sosialisasi dalam rangka penyamaan persepsi terkait kinerja yang akan dilakukan', 110),
(177, 'Melakukan perbaikan layanan terhadap pelayanan yang survei nya kurang baik', 112),
(178, 'Sistem merit', 111),
(179, 'Pelaksanaan SOP Pengelolaan Keuangan secara efektif dan efisien', 113),
(180, 'Penguatan monev keuangan secara berkala atas pelaksanaan Anggaran', 113),
(181, 'SKP Online', 114),
(182, 'Melakukan pemahaman/knowledge sharing di lingkungan internal', 115),
(183, 'Pembuatan timeline (jadwal) pelaksanaan revisi anggaran', 116),
(184, 'Revisi online pada aplikasi SiPebe', 116),
(185, 'Perencanaan kinerja dan penganggaran berbasis resiko', 116),
(186, 'Melakukan pemahaman/knowledge sharing di lingkungan internal', 117),
(187, 'Melakukan penajaman perumusan indikator kinerja per triwulan', 118),
(188, 'Pembuatan timeline (jadwal) pelaksanaan penyusunan Laporan Kinerja Kementerian PANRB', 119),
(189, 'Membuat payung hukum untuk penggunaan sistem aplikasi perencanaan dan pelaporan kinerja', 120),
(190, 'Rekomendasi atas hasil evaluasi RB 2017 dinyatakan bahwa perlu revisi komposisi agen perubahan pada 2018', 121),
(191, 'Pada Lampiran hal.3 Permenpan 16/2015 tentang Road Map RB KemenPANRB 2015-2019 dinyatakan Tim RBI melakukan pertemuan setiap seminggu untuk membahas isu aktual RB', 122),
(192, 'Pada Lampiran hal.4 Permenpan 16/2015 tentang Road Map RB KemenPANRB 2015-2019 dinyatakan bahwa Reform Corner dilakukan setiap bulan sebagai forum seluruh pegawai', 123),
(193, 'Target nilai dari hasil survey memiliki nilai tertinggi (3.5) dari total skor area manajemen perubahan (5)', 124),
(194, 'Ada dalam Renaksi RBI', 124),
(195, 'PermenPANRB 20/2018 Pasal 3 menyatakan setiap instansi pemerintah pusat wajib melaksanakan evaluasi kelembagaan', 125),
(196, ' Disusun kertas kerja dan deskripsi atas pertanyaan pada kuesioner untuk memudahkan pengisian', 125),
(197, 'Melakukan sosialisasi/internalisasi serta pendampingan terhadap pegawai Kementerian PANRB terkait pedoman evaluasi organisasi', 125),
(198, 'Draf PermenPANRB tentang penataan dan evaluasi organisasi di lingkungan Kementerian PANRB', 126),
(199, 'Melakukan sosialisasi/internalisasi/pendampingan pedoman penataan dan evaluasi organisasi di lingkungan Kementerian PANRB, format naskah akademik dan SiREOG', 126),
(200, 'Membuat rencana aksi dan kertas kendali penyelesaian Draf KepmenPANRB tentang Penataan dan Evaluasi Organisasi', 127),
(201, 'Menyusun rencana aksi penyelesaian ANJAB, ABK', 128),
(202, 'Memberikan sosialisasi/internalisasi/pendampingan dalam penyusunan dokumen Anjab dan ABK kepada unit kerja', 128),
(203, 'Menyusun konsep Tata Kelola RBI Kementerian dan Unit Kerja', 128),
(204, 'Menyepakati Tata Kelola RBI Kementerian dan Unit Kerja', 128),
(205, ' Menyusun Tim RBI di unit kerja', 128),
(206, 'Pada lampiran hal.1 PermenPANRB 19/2018 tentang Penyusunan Proses Bisnis Instansi Pemerintah dinyatakan bahwa setiap organisasi memerlukan peta proses bisnis yang mampu menggambarkan proses bisnis yang dilakukan', 129),
(207, 'Mengadakan sosialisasi/internalisasi/pendampingan kepada pegawai Kementerian PANRB terkait best practice peta proses bisnis', 129),
(208, 'Peraturan MenPANRB 24 Tahun 2016 Perubahan Atas Peraturan Menteri Pendayagunaan Aparatur Negara Dan Reformasi Birokrasi Nomor 16 Tahun 2013 Tentang Standar Pelayanan Di Lingkungan Kementerian Pendayagunaan Aparatur Negara Dan Reformasi Birokrasi, dan Draf Reviu atas Standar Pelayanan', 130),
(209, 'Melakukan reviu standar pelayanan existing', 130),
(212, 'Sistem akuntabilitas dan pengendalian internal', 131),
(213, 'Penyelesaian Draft Permenpanrb tentang kerja sama dan Sosialisasi SOP Pengusulan Kerja Sama', 132),
(214, 'Penyelesaian Draft Permenpanrb tentang kerja sama dan Pembuatan SOP Pelaksanaan dan Monev Kerja Sama', 133),
(215, 'Monev rutin (triwulan) dan SOP pencairan anggaran', 134),
(216, 'SOP terkait tata kelola dan pertanggungjawaban keuangan dan sistem pengawasan internal', 135),
(217, 'Coaching dan counselling dari atasan/pimpinan', 136),
(218, 'Knowledge sharing/tutor sebaya', 136),
(219, 'Pelatihan/workshop', 136),
(220, 'SOP Layanan', 137),
(221, 'Pelatihan hospitality dan manajemen perubahan', 137),
(222, 'Penilaian RBI', 138),
(223, 'Evaluasi analisis jabatan dan analisis beban kerja', 139),
(224, 'Disusun standar kelulusan seleksi JPT', 140),
(225, 'Penggunaan aplikasi SILABI', 33),
(226, 'SOP Bendahara Pengeluaran', 33),
(227, 'SOP Pertanggungjawaban belanja yang menggunakan mekanisme UP/GU/TUP', 33),
(228, 'SOP Mekanisme UP', 141),
(229, 'Nota dinas', 141),
(230, 'Memberikan fasilitasi penginputan kontrak untuk unit kerja yang mendekati batas akhir pendaftaran', 142),
(231, 'SOP Pengajuan dokumen kontrak atau pihak ketiga >50 juta rupiah', 142),
(232, 'Sosialiasasi ZI', 143),
(233, 'Pembuatan SKP Online', 144),
(234, 'Rekrutmen dan seleksi yang tepat sasaran', 145),
(235, 'Anjab dan ABKnya harus dibuat sesuai dengan kebutuhan', 146),
(236, 'Penyelesaian Draft Permenpanrb tentang kerja sama dan Pembuatan SOP Pelaksanaan dan Monev Kerja Sama', 147),
(237, '1) Melakukan audit/evaluasi secara berkala terhap pengelolaan keuangan/BMN ', 148),
(238, '2) Membuat laporan hasil audit pengelolaan keuangan yang sudah kompehensif antara lain memuat Kesimpulan hasil audit yang menjelaskan kondisi, kriteria, sebab dan akibat serta saran untuk perbaikan', 148),
(239, '1) Penggunaan aplikasi SiMona dan SPAN', 149),
(240, '2) reviu berjenjang penyusunan LK', 149),
(241, '1) Semua PPK, Panitia/Pejabat pengadaan telah lulus sertifikasi ', 150),
(242, '2) Verifikasi / Evaluasi PBJ', 150),
(243, '1) Sosialisasi kepada unit kerja mengenai peran unit kerja dalam penyelenggaraan SPIP   ', 151),
(244, '2) Membuat laporan hasil assesment maturitas SPIP unit kerja', 151),
(245, '1) Melakukan evaluasi atas penerapan MR yang dilakukan unit kerja ', 152),
(246, '2) Sosialisasi dan bimbingan teknis tentang MR', 152),
(247, '1) PKS terkait manajemen risiko di internal Inspektorat', 153),
(248, '1) Reviu LKj es.1,2 dan Kementerian', 154),
(249, '2) Reviu PK es 1 dan 2 ', 154),
(250, '3) Evaluasi SAKIP Unit Kerja', 154),
(251, '4) Ikut serta dalam Monev kinerja dan anggaran tiap triwulan', 154),
(252, '1) Monev capaian RBI unit kerja', 155),
(253, '2) Menggunakan aplikasi evalrb dalam evaluasi RB', 155),
(254, '3) Sosialisasi penggunaan sistem evalrb', 155),
(255, '4) Validasi RB unit kerja ', 155),
(256, 'PKS tentang ZI kepada seluruh pegawai di Inspektorat', 156),
(257, 'Menggunakan aplikasi PMPZI untuk menilai unit kerja', 157);

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
  `penyebab` text NOT NULL,
  `sisa_risiko` varchar(255) DEFAULT NULL,
  `level_kemungkinan` int(11) DEFAULT NULL,
  `level_dampak` int(11) DEFAULT NULL,
  `besaran_risiko` int(11) DEFAULT NULL,
  `level_risiko` varchar(255) DEFAULT NULL,
  `prioritas_risiko` int(11) DEFAULT NULL,
  `id_indikator_organisasi` int(11) NOT NULL,
  `perbaikan_pengendalian` text NOT NULL,
  `waktu_awal` date DEFAULT NULL,
  `waktu_akhir` date DEFAULT NULL,
  `rencana_pembiayaan` varchar(200) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `risiko`
--

INSERT INTO `risiko` (`id_risiko`, `kejadian`, `id_kategori`, `sumber`, `tipe`, `penyebab`, `sisa_risiko`, `level_kemungkinan`, `level_dampak`, `besaran_risiko`, `level_risiko`, `prioritas_risiko`, `id_indikator_organisasi`, `perbaikan_pengendalian`, `waktu_awal`, `waktu_akhir`, `rencana_pembiayaan`, `keterangan`) VALUES
(4, 'Kesalahan posting akun dalam laporan keuangan', 0, 0, 0, 'Kurangnya pemahaman SDM mengenai peraturan pelaporan keuangan', '', 1, 2, 2, NULL, NULL, 4, 'c', '2019-10-16', '2019-10-19', 'c', 'd'),
(13, 'IP yang dievaluasi tidak melakukan tindak lanjut atas rekomendasi perbaikan yang telah diberikan', 1, 0, 0, 'Pemahaman SDM di daerah masih kurang terkait penyelenggaraan pelayanan publik yang baik', 'IP yang dievaluasi belum melakukan tindak lanjut atas rekomendasi perbaikan yang telah diberikan', 2, 4, 8, NULL, NULL, 8, '', NULL, NULL, '', ''),
(14, 'SDM dan sarpras yang tidak memadai terutama di wilayah timur', 1, 0, 0, 'Kurangnya kompetensi SDM dan keterbatasan ketersediaan sarpras Pelayanan Publik belum merata', 'SDM dan sarpras yang masih belum memadai terutama di wilayah timur', 4, 4, 16, NULL, NULL, 11, '', NULL, NULL, '', ''),
(15, 'Daerah tidak mampu untuk membentuk Mal Pelayanan Publik', 1, 4, 0, '1) Anggaran Pemerintah setiap daerah berbeda\r\n2) Kondisi Geografis\r\n3) Kurangnya komitmen Kepala Daerah', 'Masih terdapat daerah yang belum mampu untuk membentuk Mal Pelayanan Publik', 4, 4, 16, NULL, NULL, 9, '', NULL, NULL, '', ''),
(16, 'Terjadi perubahan SDM yang mengelola Survei Kepuasan Masyarakat dan tidak sesuainya SKM yang dilakukan dengan PermenPANRB No.14 tahun 2017 tentang pedoman penyusunan survei kepuasan masyarakat unit penyelenggara pelayanan publik', 1, 0, 1, 'Komitmen pimpinan terhadap pengelolaan survei kepuasan masyarakat di instansi terkait masih rendah', NULL, 4, 4, 16, NULL, NULL, 10, '', NULL, NULL, '', ''),
(17, 'Pegawai kurang kreatif dalam melaksanakan tugas', 1, 0, 1, '1) Kurangnya pemahaman SDM mengenai proses bisnis/tata kerja/tata laksana\r\n2) Kurangnya pemahaman mengenai penilaian terhadap pegawai', 'Pegawai masih kurang kreatif dalam melaksanakan tugas', 2, 3, 6, NULL, NULL, 12, '', NULL, NULL, '', ''),
(18, 'Tidak dilaksanakan assesment terhadap pegawai', 1, 0, 1, '1) Kurangnya pemahaman SDM mengenai proses bisnis/tata kerja/tata laksana\r\n2) Kurangnya pemahaman mengenai penilaian terhadap pegawai', 'Belum dilaksanakan assesment terhadap pegawai', 2, 3, 6, NULL, NULL, 13, '', NULL, NULL, '', ''),
(19, 'SDM tidak melaksanakan tupoksi sesuai SOP', 1, 0, 1, '1) Kurangnya pemahaman SDM mengenai proses bisnis/tata kerja/tata laksana\r\n2) Kurangnya pemahaman mengenai penilaian terhadap pegawai', 'Masih terdapat SDM yang belum melaksanakan tupoksi sesuai SOP', 2, 3, 6, NULL, NULL, 14, '', NULL, NULL, '', ''),
(20, 'Terjadi kesalahan dalam proses perencanaan kinerja', 1, 0, 1, 'Historical Data (Data Series) yang tidak terinvestarisasi dengan baik', 'Masih terdapat kesalahan dalam proses perencanaan kinerja', 2, 3, 6, NULL, NULL, 15, '', NULL, NULL, '', ''),
(21, 'Pelayanan yang diberikan tidak maksimal', 1, 0, 1, 'Keengganan dalam menemui tamu untuk konsultasi', 'Masih terdapat pemberian pelayanan yang belum maksimal', 2, 3, 6, NULL, NULL, 16, '', NULL, NULL, '', ''),
(22, 'Terjadi kesalahan akun ketika melakukan posting', 1, 0, 1, 'Terjadinya kelalaian dalam melakukan posting akun', 'Masih terdapat kesalahan posting akun', 2, 3, 6, NULL, NULL, 17, '', NULL, NULL, '', ''),
(23, 'Instansi Pemerintah tidak melakukan update aplikasi SAPK', 2, 0, 1, 'Kurangnya pemahaman tentang pentingnya update data pegawai', 'Sebagian Instansi Pemerintah tidak melakukan update aplikasi SAPK', 4, 4, 16, NULL, NULL, 30, '', NULL, NULL, '', ''),
(25, 'Terjadinya keterlambatan pengisian instrumen penilaian sendiri terhadap pelaksanaan sistem merit dari setiap IP', 2, 0, 1, '1) Kurang sosialisasi\r\n2) Komitmen pimpinan terutama di daerah masih rendah', 'Masih terjadi keterlambatan pengisian instrumen penilaian sendiri terhadap pelaksanaan sistem merit dari setiap IP', 4, 4, 16, NULL, NULL, 31, '', NULL, NULL, '', ''),
(26, 'Indeks kesejahteraan ASN nasional tidak mampu merepresentasikan kesejahteraan ASN nasional yang ada saat ini', 0, 0, 1, 'Kapasitas SDM yang tidak memadai sehingga proses perencanaan yang kurang matang', 'Indeks kesejahteraan ASN nasional masih belum mampu merepresentasikan kesejahteraan ASN nasional yang ada saat ini', 4, 5, 20, NULL, NULL, 32, '', NULL, NULL, '', ''),
(27, 'Unit kerja tidak paham dengan komponen pelaksanaan reformasi birokrasi Deputi SDM Aparatur', 1, 0, 1, 'Adanya perbedaan persepsi pemahaman komponen indeks RB antara tim pelaksana dan evaluator', NULL, 3, 2, 6, NULL, NULL, 33, '', NULL, NULL, '', ''),
(28, 'Terjadi kesalahan dalam proses perencanaan kinerja', 1, 0, 1, 'Historical data (data series) yang tidak terinventarisasi dengan baik', 'Masih terjadi kesalahan dalam proses perencanaan kinerja', 3, 3, 9, NULL, NULL, 34, '', NULL, NULL, '', ''),
(29, 'Terjadi kesalahan akun ketika melakukan posting', 1, 0, 1, 'Pemahaman SDM yang masih kurang mengenai pembukuan', 'Masih terjadi kesalahan akun ketika melakukan posting', 3, 3, 9, NULL, NULL, 35, '', NULL, NULL, '', ''),
(30, 'Rusaknya alat pengukur kepuasan layanan tamu', 1, 0, 1, 'Tidak dilakukan permajaan/perawatan secara berkala', 'Masih ada alat pengukur kepuasan layanan tamu yang rusak', 2, 3, 6, NULL, NULL, 36, '', NULL, NULL, '', ''),
(31, 'Hasil evaluasi atas Indeks kelembagaan tidak mencapai skor cukup efektif', 0, 0, 1, 'Kurangnya sosialisasi, pembinaan dan pengawasan', 'Masih terdapat risiko hasil indeks kelembagaan tidak mencapai skor cukup efektif', 4, 3, 12, NULL, NULL, 62, '', NULL, NULL, '', ''),
(32, 'Tidak seluruh K/L/D melakukan evaluasi kelembagaan', 0, 0, 1, 'Kurangnya sosialisasi, pembinaan dan pengawasan', 'Masih terdapat risiko K/L/D tidak melakukan evaluasi kelembagaan', 2, 4, 8, NULL, NULL, 62, '', NULL, NULL, '', ''),
(33, 'Bendahara pengeluaran terlambat menyampaikan LPJ', 1, 0, 1, '1. Aplikasi sering tidak berjalan/bermasalah\r\n2. Penggunaan Corporate credit card yang tidak sesuai dengan peruntukkan\r\n3. Penyusunan LPJ Bendahara dilakukan mendekati batas akhir waktu penyampaian', 'Masih terdapat keterlambatan dalam penyampaian LPJ oleh Bendahara Pengeluaran', 2, 2, 4, NULL, NULL, 18, '', NULL, NULL, '', ''),
(34, 'Peserta Sosialisasi kebijakan RB Gagal Menerima Maksud Sosialisasi', 1, 0, 1, 'Sosialisator Tidak Kompeten', 'Masih terdapat peserta sosialisasi kebijakan RB yang gagal menerima maksud sosialisasi', 2, 4, 8, NULL, NULL, 49, '', NULL, NULL, '', ''),
(35, 'Tidak seluruh K/L/D melakukan evaluasi SPBE', 0, 0, 1, 'Kurangnya kesadaran K/L/D untuk memahami pentingnya Evaluasi', 'Masih terdapat risiko K/L/D tidak melakukan evaluasi SPBE', 2, 4, 8, NULL, NULL, 63, '', NULL, NULL, '', ''),
(36, 'Indeks SPBE K/L/D lebih dominan pada kriteria ', 0, 0, 1, 'K/L/D tidak memiliki komitmen dalam melaksanakan SPBE, tidak memahami cara meningkatkan penerapan SPBE dan Indeks SPBE', 'Masih terdapat risiko indeks SPBE pada kriteria cukup dan kurang', 5, 3, 15, NULL, NULL, 63, '', NULL, NULL, '', ''),
(37, 'Kesalahan dalam penulisan redaksi dan konten SPP', 1, 0, 1, 'Ketidakcermatan pengelola keuangan unit kerja, verifikator dan PPSPM', 'Masih ditemui kesalahan dalam penulisan redaksi dan konten SPP', 3, 2, 6, NULL, NULL, 21, '', NULL, NULL, '', ''),
(38, 'Informasi terkait rekening pihak ketiga tidak valid', 1, 0, 1, '1. Ketidakcermatan pengelola keuangan unit kerja, verifikator dan PPSPM\r\n2. Kelalaian pengelola keuangan yang tidak melakukan konfirmasi nomor rekening bank dengan penyedia barang/jasa', 'Informasi terkait rekening pihak ketiga masih terdapat yang tidak valid', 3, 2, 6, NULL, NULL, 21, '', NULL, NULL, '', ''),
(39, 'Perencanaan penarikan dana tidak akurat dan tidak up to date', 1, 0, 1, '1. Pelaksana lalai menginput RPD di aplikasi SAS\r\n2. Kebijakan pimpinan', 'Perencanaan penarikan dana masih terdapat yang belum akurat dan belum up to date', 3, 3, 9, NULL, NULL, 22, '', NULL, NULL, '', ''),
(40, 'Pengajuan renkas terlambat', 1, 0, 1, 'Unit kerja lemah dalam monitoring penyelesaian tagihan yang nilainya lebih dari 1M', 'Masih terdapat keterlambatan dalam pengajuan renkas', 3, 3, 9, NULL, NULL, 25, '', NULL, NULL, '', ''),
(41, 'Realisasi penyerapan anggaran dibawah target tiap triwulan', 1, 0, 1, '1. Perencanaan unit kerja tidak baik\r\n2. PPK tidak pernah menyusun RPD', 'Masih terdapat kekurangan dalam pemenuhan target realisasi penyerapan anggaran', 4, 3, 12, NULL, NULL, 26, '', NULL, NULL, '', ''),
(42, 'Kegagalan mengidentifikasi adanya suatu penyimpangan dalam pelaksanaan anggaran', 1, 0, 1, 'Kompetensi Auditor kurang memadai\r\n', '', 4, 4, 16, NULL, NULL, 64, '', NULL, NULL, '', ''),
(43, 'Skor Pelaksanaan RB rendah', 2, 0, 1, '1.	Kurangnya kesadaran masing-masing unit dalam melaksanaan RB <br>\r\n2.	Masing-masing unit menganggap RB hanya tugas Setdep<br>\r\n3.	Tidak adanya komitmen untuk meningkatkan RB', 'Capaian nilai RB masih rendah', 3, 3, 9, NULL, NULL, 68, '', NULL, NULL, '', ''),
(44, 'Keterlambatan penyelesaian tagihan di akhir tahun', 1, 0, 1, 'Unit kerja tidak cermat untuk segera menyelesaikan dokumen pertanggungjawaban', 'Masih terdapat keterlambatan dalam penyelesaian tagihan di akhir tahun', 3, 4, 12, NULL, NULL, 27, '', NULL, NULL, '', ''),
(45, 'Skor Pelaksanaan Evaluasi SAKIP rendah', 2, 0, 1, '1.	Rekomendasi atas hasil evaluasi SAKIP oleh BPKP tidak ditindaklanjuti<br>\r\n2.	Kurangnya komitmen unit kerja dalam menyelenggarakan SAKIP', 'Masih terdapat risiko hasil evaluasi pelaksanaan SAKIP  rendah', 3, 2, 6, NULL, NULL, 69, '', NULL, NULL, '', ''),
(46, 'Kesalahan dalam memberikan rekomendasi reviu Laporan Keuangan', 1, 0, 1, 'Kompetensi Auditor  kurang memadai\r\n', 'Masih terdapat rekomendasi atas reviu laporan keuangan yang tidak tepat', 5, 4, 20, NULL, NULL, 65, '', NULL, NULL, '', ''),
(47, 'Terjadi salah posting akun pada laporan keuangan', 1, 0, 1, '1. Kegagalan verifikasi akun beban/belanja yang digunakan selama proses pembayaran\r\n2. Kesalahan identifikasi penggunaan akun beban/belanja dalam menggunakan anggaran', 'Masih terdapat kesalahan posting akun pada laporan keuangan', 3, 5, 15, NULL, NULL, 28, '', NULL, NULL, '', ''),
(48, 'Masyarakat tidak dapat menyampaikan evaluasi pelayanan', 1, 0, 1, 'Aplikasi untuk evaluasi tidak dapat menyuarakan aspirasi hanya skor saja', 'Masih terdapat risiko masyarakat mengalami kesulitan menyampaikan evaluasi pelayanan yang diterimanya', 2, 3, 6, NULL, NULL, 70, '', NULL, NULL, '', ''),
(49, 'Kesalahan dalam memberikan rekomendasi reviu PAPBJ', 1, 0, 1, 'Kompetensi Auditor  kurang memadai\r\n', 'Masih terdapat rekomendasi atas reviu PABJ masih salah', 3, 4, 12, NULL, NULL, 66, '', NULL, NULL, '', ''),
(50, 'Temuan material oleh BPK atas Pelaksanaan Anggaran', 3, 0, 1, 'Bukti penggunaan anggaran tidak lengkap', 'Masih ada risiko temuan material oleh BPK atas pelaksanaan anggaran', 2, 3, 6, NULL, NULL, 71, '', NULL, NULL, '', ''),
(51, 'Kesalahan merumuskan strategi peningkatan maturitas penyelenggaraan SPIP dalam upayameningkatkan kualitas penyelenggaraan SPIP', 1, 3, 0, 'Kompetensi Auditor  kurang memadai\r\n', 'Tahapan penilaian tingkat maturitas SPIP (persiapan, pelaksanaan, pelaporan) belum matang', 2, 3, 6, NULL, NULL, 67, '', NULL, NULL, '', ''),
(52, 'Kesalahan dalam memberikan rekomendasi atas Evaluasi SAKIP unit kerja', 1, 0, 1, 'Kompetensi Auditor  kurang memadai\r\n', 'Niilai hasil evaluasi SAKIP masih rendah', 4, 3, 12, NULL, NULL, 72, '', NULL, NULL, '', ''),
(53, 'Kesalahan unit kerja dalam menafsirkan rekomendasi yang diberikan oleh BPK', 1, 0, 0, 'Kurangnya pemahaman SDM\r\n', 'Masih terdapat kesalahan dalam penafsiran rekomendasi yang diberikan oleh BPK', 3, 2, 6, NULL, NULL, 73, '', NULL, NULL, '', ''),
(54, 'Rekomendasi yang diberikan oleh Inspektorat tidak ditindaklanjuti oleh unit kerja', 1, 2, 0, 'Belum adanya aplikasi untuk memantau tindak lanjut\r\n', 'Belum semua unit kerja yang menindaklanjuti rekomendasi dari Inspektorat', 4, 2, 8, NULL, NULL, 74, '', NULL, NULL, '', ''),
(55, 'Hasil evaluasi RB Sub Standar', 1, 3, 1, '1. Bukti/ evidence tidak didapat pada saat evaluasi;\r\n2. Evaluator gagal memberikan rekomendasi yang efektif dalam upaya percepatan RB', 'Masih terdapat hasil evaluasi RB yang sub standar', 2, 4, 8, NULL, NULL, 50, '', NULL, NULL, '', ''),
(56, 'Rekomendasi  atas pemenuhan dokumen pendukung tidak sesuai dengan pertanyaan pada komponen masing-masing area perubahan ', 1, 2, 0, 'Kesalahan dalam melengkapi dokumen pendukung pada media penyimpanan  yang dilakukan secara manual\r\n', 'capaian nilai komponen penilaian RB Unit Kerja masih rendah', 3, 4, 12, NULL, NULL, 75, '', NULL, NULL, '', ''),
(57, 'Implementasi atas penanganan gratifikasi, pengaduan masyarakat, WBS, benturan kepentingan rendah', 1, 0, 0, 'Kurangnya pengendalian APIP dalam pemantauan penanganan pengaduan masyarakat, WBS, dan benturan kepentingan\r\n', 'Implementasi atas penanganan gratifikasi, pengaduan masyarakat, WBS, benturan kepentingan  masih rendah', 3, 3, 9, NULL, NULL, 76, '', NULL, NULL, '', ''),
(58, 'Pengakuan transaksi keuangan yang belum sepenuhnya menggunakan prinsip akrual', 1, 0, 1, 'Belum ditemukan mekanisme yang dapat mengakui tagihan yang belum dibayar secara realtime', 'Belum sepenuhnya prinsip akrual digunakan dalam pengakuan transaksi keuangan', 3, 5, 15, NULL, NULL, 28, '', NULL, NULL, '', ''),
(59, 'Tingkat kepatuhan pelaporan LHKPN dan LHKASN rendah', 2, 0, 0, 'Kurangnya pengendalian APIP dalam pemantauan implementasi LHKASN di lingkungan Kementerian PANRB\r\n', 'Masih terdapat keterlambatan dalam pelaporan LHKPN dan LHKASN', 1, 3, 3, NULL, NULL, 77, '', NULL, NULL, '', ''),
(60, 'Perubahan jadwal kegiatan pimpinan berubah-ubah dan tidak bisa diprediksi', 1, 0, 1, 'Undangan prioritas yang mendadak atau terlambat diproses', 'Jadwal kegiatan pimpinan terkadang masih berubah-ubah dan sulit untuk diprediksi', 4, 3, 12, NULL, NULL, 29, '', NULL, NULL, '', ''),
(61, 'Kesalahan dalam mengidentifikasi, analisis dan evaluasi risiko yang ada', 1, 0, 0, 'Kurangnya pemahaman SDM dalam mengidentifikasi risiko, analisis, dan evaluasi risiko\r\n', 'Masih terdapat risiko yang belum teridentifiasi dan/atau belum ditentukan pengendaliannya', 3, 2, 6, NULL, NULL, 78, '', NULL, NULL, '', ''),
(62, 'Hasil survei tidak menggambarkan kualitas pelayanan  di unit kerja', 1, 0, 0, 'Penyelenggaraan survei persepsi kualitas pelayanan belum optimal', 'belum semua unit kerja mendapatkan nilai survei persepsi kualitas pelayanan yang memenuhi syarat pengajuan WBK/WBBM', 3, 3, 9, NULL, NULL, 79, '', NULL, NULL, '', ''),
(63, 'Hasil survei tidak menggambarkan perilaku antikorupsi  di unit kerja', 1, 0, 0, 'Penyelenggaraan survei persepsi kualitas pelayanan belum optimal\r\n', 'belum semua unit kerja mendapatkan nilai survei persepsi korupsi yang memenuhi syarat pengajuan WBK/WBBM', 3, 3, 9, NULL, NULL, 80, '', NULL, NULL, '', ''),
(64, 'Target penyerapan anggaran Inspektorat tidak tercapai', 1, 0, 1, 'Kegiatan tidak terlaksana sesuai dengan rencana aksi yang telah ditetapkan\r\n', 'Tidak semua anggaran yang dianggarkan tercapai', 1, 3, 3, NULL, NULL, 81, '', NULL, NULL, '', ''),
(65, 'Pertanggungjawaban keuangan/Barang Milik Negara (BMN) Inspektorat tidak sesuai dengan ketentuan', 1, 0, 1, 'Kompetensi SDM pengelola keuangan di Inspektorat belum memadai\r\n', 'Masih terdapat pertanggungjawaban keuangan/Barang Milik Negara (BMN) Inspektorat tidak sesuai dengan ketentuan', 1, 2, 2, NULL, NULL, 82, '', NULL, NULL, '', ''),
(66, 'Data yang dihasilkan dari survei kepuasan pemangku kepentingan tidak menggambarkan kepuasan atas pelayanan', 1, 2, 1, 'Tools Pelayanan Inspektorat belum optimal\r\n', 'Masih terdapat kesalahan dalam pengisian survei kepuasan pemangku kepentingan ', 1, 2, 2, NULL, NULL, 84, '', NULL, NULL, '', ''),
(67, 'Pertanggungjawaban keuangan/Barang Milik Negara (BMN) Inspektorat tidak sesuai dengan ketentuan', 1, 0, 1, '1) Pegawai tidak melaksanakan pekerjaan sesuai dengan tugas dan fungsi masing-masing\r\n2) Pegawai tidak disiplin', 'Target atas sasaran kinerja pegawai di inspektorat belum semua terpenuhi', 1, 2, 2, NULL, NULL, 83, '', NULL, NULL, '', ''),
(68, 'Kebijakan RB tidak dilaksanakan oleh K/L/Pemda', 0, 3, 1, 'Kurangnya Komitmen Pimpinan K/L/Pemda Dalam Pelaksanaan RB; Kurangnya analisis kondisi dan kemampuan  K/L/Pemda; Belum dilakukanya trial and balance atas kebijakan yang dibuat', 'Masih terdapat beberapa K/L/Pemda yang tidak melaksanakan kebijakan RB', 3, 5, 15, NULL, NULL, 50, '', NULL, NULL, '', ''),
(69, 'Capaian nilai elemen penilaian kapabilitas APIP masih di bawah 3', 1, 0, 1, '\"1) PKPT berbasis risiko belum tersusun\r\n2) Belum diperbaharuinya Internal Audit Charter\r\n3) Belum dilakukan telaah sejawat\"\r\n', 'Capaian nilai elemen penilaian kapabilitas APIP masih di bawah 3', 3, 3, 9, NULL, NULL, 85, '', NULL, NULL, '', ''),
(70, 'Pelayanan tidak sesuai SOP', 1, 3, 1, 'Pelayanan tidak optimal', 'Masih terdapat pelayanan yang belum sesuai SOP', 2, 3, 6, NULL, NULL, 37, '', NULL, NULL, '', ''),
(71, 'Kalah dalam persidangan gugatan', 1, 0, 1, 'Kurang responsif pada unit kerja pada penanganan gugatan', 'Penanganan gugatan terkadang belum maksimal', 1, 3, 3, NULL, NULL, 89, '', NULL, NULL, '', ''),
(72, 'Tumpang tindih aturan dengan instansi lainnya', 1, 0, 1, 'Unit kerja tidak melampirkan policy note', 'Database tidak dapat diakses karena server down Sosialisasi aplikasi masih kurang optimal', 1, 3, 3, NULL, NULL, 90, '', NULL, NULL, '', ''),
(73, 'Ketidaksesuaian Permen yang diupload di JDIH dengan dokumen fisiknya', 1, 0, 1, 'Kelalaian dalam upload soft file salinan peraturan menteri', 'Ketidaksesuaian Permen yang diupload di JDIH dengan dokumen fisiknya karena unit kerja memberikan dokumen yang tidak sesuai (typo, substansi yang berbeda)', 1, 4, 4, NULL, NULL, 91, '', NULL, NULL, '', ''),
(74, 'Sebagian pimpinan/pegawai belum menggunakan e-mail dinas', 1, 0, 1, 'Sebagian pimpinan di unit kerja tidak melaksanakan dan mendorong penggunaan e-gov', 'Sebagian pimpinan/pegawai belum menggunakan e-mail dinas', 3, 3, 9, NULL, NULL, 92, '', NULL, NULL, '', ''),
(75, 'Belum semua pegawai menggunakan layanan perkantoran yang berbasis elektronik', 1, 0, 1, 'Sebagian pimpinan di unit kerja tidak melaksanakan dan mendorong penggunaan e-gov', 'Belum semua pegawai menggunakan layanan perkantoran yang berbasis elektronik', 3, 3, 9, NULL, NULL, 93, '', NULL, NULL, '', ''),
(76, 'Pengiriman surat kepada instansi luar terlambat disampaikan', 1, 0, 1, '1) Alamat pengiriman tidak sesuai dengan alamat tujuan\r\n2) Keterlambatan unit kerja dalam menyampaikan surat dinas ke bagian persuratan  (kurir sudah berada di luar kantor)', 'Masih terdapat pengiriman surat kepada instansi luar terlambat disampaikan', 2, 4, 8, NULL, NULL, 94, '', NULL, NULL, '', ''),
(77, 'Terjadi kesalahan dalam penginputan nomor/agenda pada surat-surat yang masuk ke Kementerian', 1, 0, 1, 'Kelalaian dalam pengelolaan persuratan', 'Masih terdapat terjadi kesalahan dalam penginputan nomor/agenda pada surat-surat yang masuk ke Kementerian', 2, 4, 8, NULL, NULL, 95, '', NULL, NULL, '', ''),
(78, 'Peserta Sosialisasi Gagal Menerima Maksud Sosialisasi AKIP', 1, 0, 1, 'Sosialisator Tidak Kompeten', 'Masih terdapat beberapa peserta yang belum mengerti maksud sosialisasi AKIP', 2, 4, 8, NULL, NULL, 51, '', NULL, NULL, '', ''),
(79, 'Ketersediaan dan validitas arsip', 1, 0, 1, '1) Rendahnya tanggung jawab dan peran serta penyelenggaraan kearsipan seluruh pegawai guna ketersediaan dan validitas arsip\r\n2) Rendahnya komitmen pimpinan dan seluruh pegawai atas nilai guna dan pentingnya arsip', 'Monitoring tertib penyelenggaraan arsip terhadap unit pengolah oleh unit kearsipan, dan terhadap KemenPANRB oleh ANRI; Peningkatan standar dan penyelenggaraan kearsipan dengan merujuk implementasi dan standar kearsipan internasional', 4, 4, 16, NULL, NULL, 96, '', NULL, NULL, '', ''),
(80, 'Panduan tertib penyelenggaraan arsip', 1, 0, 1, 'Belum tersedianya kebijakan teknis pengelolaan kearsipan sebagai panduan penyelenggaraan kearsipan', 'Penerbitan menjadi Peraturan Menteri PANRB ', 2, 3, 6, NULL, NULL, 97, '', NULL, NULL, '', ''),
(81, 'Solusi keterbatasan ruang penyimpanan arsip inaktif', 1, 0, 1, 'Keterbatasan tempat, sarana, dan prasarana penyimpanan arsip inaktif', 'Monitoring berkala retensi arsip', 2, 3, 6, NULL, NULL, 98, '', NULL, NULL, '', ''),
(82, 'Pengajuan revisi DIPA melebihi batas frekuensi revisi yang ditetapkan oleh DJA', 1, 3, 1, 'Unit Kerja tidak akurat dalam melakukan perencanaan anggaran', 'Masih terdapat pengajuan revisi DIPA yang melebihi batas frekuensi revisi yang ditetapkan oleh DJA', 4, 2, 8, NULL, NULL, 23, '', NULL, NULL, '', ''),
(83, 'Koleksi buku perpustakaan rusak', 1, 0, 1, 'Keterbatasan ruang penyimpanan buku di perpustakaan', 'Pengendalian sudah meminimalisasi terjadinya risiko.', 2, 4, 8, NULL, NULL, 99, '', NULL, NULL, '', ''),
(84, 'Keterlambatan penyelesaian tagihan di unit kerja', 1, 3, 1, 'Unit kerja lalai dalam menindaklanjuti penyelesaian tagihan', 'Masih terdapat keterlambatan dalam penyelesaian tagihan oleh unit kerja', 3, 3, 9, NULL, NULL, 24, '', NULL, NULL, '', ''),
(85, 'Buku koleksi perpustakaan tidak dikembalikan tepat waktu', 1, 0, 1, 'Adanya kendala dalam pengembalian buku perpustakaan yang dipinjam (pihak peminjam sedang dinas luar, dll)', 'Pengendalian sudah meminimalisasi terjadinya risiko.', 2, 4, 8, NULL, NULL, 100, '', NULL, NULL, '', ''),
(86, 'Website perpustakaan yang diretas', 1, 0, 1, 'Tingkat keamanan website masih rendah', 'Pengendalian sudah meminimalisasi terjadinya risiko.', 3, 4, 12, NULL, NULL, 101, '', NULL, NULL, '', ''),
(87, 'Survei tidak terlaksana', 1, 0, 1, 'Pengadaan tidak berjalan/mengalami kegagalan lelang', 'Pengendalian sudah meminimalisasi terjadinya risiko.', 2, 4, 8, NULL, NULL, 102, '', NULL, NULL, '', ''),
(88, 'Website PPID bermasalah (diretas)', 1, 0, 1, 'Tingkat keamanan website masih rendah', 'Website PPID stagnan karena pengembangan website tergantung pada pihak ketiga', 3, 4, 12, NULL, NULL, 103, '', NULL, NULL, '', ''),
(89, 'Hasil evaluasi AKIP Dibawah Standar', 1, 3, 1, '1. Bukti/evidence tidak didapat pada saat evaluasi;\r\n2. Evaluator gagal memberikan rekomendasi yang efektif dalam upaya percepatan RB.', 'Masih terdapat beberapa hasil evaluasi yang dibawah standar', 2, 4, 8, NULL, NULL, 52, '', NULL, NULL, '', ''),
(90, 'Tidak terlaksana rencana aksi kegiatan', 1, 0, 1, 'Perubahan prioritas', 'Tidak terdapat pembukaan revisi', 1, 4, 4, NULL, NULL, 104, '', NULL, NULL, '', ''),
(91, 'Pembayaran/pengeluaran uang negara pada suatu kegiatan tidak sesuai dengan output dari kegiatan tersebut', 1, 0, 1, 'Kurangnya pemahaman dalam pertanggungjawaban pengeluaran uang negara oleh pelaksana dalam melaksanakan kegiatan', 'Masih terdapat pembayaran/pengeluaran uang negara pada suatu kegiatan tidak sesuai dengan output dari kegiatan tersebut', 2, 4, 8, NULL, NULL, 105, '', NULL, NULL, '', ''),
(92, 'Kinerja PNS Biro HUKIP tidak tercapai', 1, 0, 1, 'Tingkat kehadiran rendah', 'Masih terdapat beberapa PNS Biro HUKIP kinerja yang tidak tercapai', 1, 4, 4, NULL, NULL, 106, '', NULL, NULL, '', ''),
(93, 'Kebijakan AKIP tidak dilaksanakan oleh K/L/Pemda', 0, 3, 1, 'Kurangnya Komitmen Pimpinan K/L/Pemda dalam Pelaksanaan RB', 'Masih terdapat beberapa K/L/Pemda yang tidak melaksanakan kebijakan AKIP', 3, 5, 15, NULL, NULL, 52, '', NULL, NULL, '', ''),
(94, 'Keluhan dari unit kerja atas pelayanan Biro HUKIP', 1, 0, 1, 'Tidak tercapainya waktu yang ditargetkan oleh unit kerja dalam sebuah layanan', 'Masih terdapat keluhan dari unit kerja atas pelayanan Biro HUKIP', 1, 3, 3, NULL, NULL, 107, '', NULL, NULL, '', ''),
(95, 'LKJPP Tidak Tepat Waktu', 2, 0, 1, 'Internal: Data yang dibutuhkan dalam LKJPP belum sepenuhnya tersaji dalam laporan kinerja K/L.\r\nEksternal: Banyak instansi pemerintah yang tidak tepat waktu menyampaikan kinerjanya ke Kemenpan', 'Penyusunan LKJPP kurang berkualitas', 2, 4, 8, NULL, NULL, 53, '', NULL, NULL, '', ''),
(96, 'Peserta Sosialisasi penguatan integritas gagal menerima maksud sosialisasi', 1, 0, 1, 'Sosialisator Tidak Kompeten', 'Masih terdapat beberapa peserta yang belum mengerti maksud sosialisasi Penguatan Integritas', 2, 4, 8, NULL, NULL, 54, '', NULL, NULL, '', ''),
(97, 'Jadwal pelaksanaan kegiatan bersifat tentatif', 1, 0, 1, 'Penyerapan tidak maksimal', 'Masih terdapat jadwal pelaksanaan kegiatan yang sifatnya tentatif', 4, 4, 16, NULL, NULL, 38, '', NULL, NULL, '', ''),
(98, 'Kebijakan penguatan integritas tidak dilaksanakan oleh K/L/Pemda', 0, 3, 1, 'Kurangnya komitmen pimpinan K/L/Pemda dalam pelaksanaan penguatan integritas', 'Masih terdapat beberapa K/L/Pemda yang tidak melaksanakan kebijakan penguatan integritas', 3, 5, 15, NULL, NULL, 55, '', NULL, NULL, '', ''),
(99, 'PPHP tidak cermat dalam mengukur prestasi pekerjaan pihak ketiga/penyedia barang dan jasa dan PPK tidak cermat dalam menganalisis pengadaan barang dan jasa', 2, 0, 1, 'Penurunan reputasi dan beban keuangan negara', 'PPHP masih kurang cermat dalam mengukur prestasi pekerjaan pihak ketiga/penyedia barang dan jasa serta PPK masih kurang cermat dalam manganalisis pengadaan barang dan jasa', 4, 5, 20, NULL, NULL, 39, '', NULL, NULL, '', ''),
(100, 'Hasil evaluasi ZI sub standar', 1, 3, 1, '1. Bukti tidak didapat \r\n2. Evaluator gagal memberikan rekomendasi yang efektif dalam upaya percepatan penguatan integritas dan menetapkan hasil yang tepat', 'Masih terdapat hasil evaluasi ZI yang sub standar', 3, 5, 15, NULL, NULL, 55, '', NULL, NULL, '', ''),
(101, 'Rendahnya pegawai yang melaporkan LHKASN', 2, 0, 1, 'Kebijakan LHKASN tidak dipandang strategis dan urgent', 'Masih terdapat beberapa pegawai yang tidak melaporkan LHKASN', 5, 2, 10, NULL, NULL, 56, '', NULL, NULL, '', ''),
(102, 'Tindak lanjut tidak mampu memperbaiki kondisi yang ada', 1, 0, 1, 'Instansi pemerintah tidak memiliki kewenangan untuk melakukan menindaklanjuti pengaduan', 'Masih terdapat beberapa kondisi yang tidak mampu ditangani dengan tindak lanjut pengaduan masyarakat', 4, 2, 8, NULL, NULL, 57, '', NULL, NULL, '', ''),
(103, 'BMN yang dipinjamkan kepada pegawai rusak dan/atau hilang', 1, 0, 1, '1. Belum ditemukan sistem monitoring BMN yang dipinjamkan kepada pegawai yang dapat diandalkan.\r\n2. Pegawai yang tidak bertanggungjawab atas BMN yang digunakan.', 'Terdapat beberapa BMN yang dipinjamkan kepada pegawai rusak dan/atau hilang', 2, 5, 10, NULL, NULL, 42, '', NULL, NULL, '', ''),
(104, 'Tidak tersedianya ruangan untuk menampung seluruh jumlah pejabat dan pegawai sesuai dengan pedoman standar', 1, 0, 1, 'Luas gedung yang tidak mampu menampung kebutuhan ruang kerja untuk seluruh pejabat dan pegawai', 'Masih terdapat ketidaktersediaan ruangan untuk menampung seluruh jumlah pejabat dan pegawai sesuai dengan pedoman standar', 4, 4, 16, NULL, NULL, 42, '', NULL, NULL, '', ''),
(105, 'Instansi pemerintah tidak melaksanaan tindak lanjut penanganan pengaduan masyarakat', 1, 0, 1, 'Instansi pemerintah tidak memiliki kewenangan untuk melakukan menindaklanjuti pengaduan', 'Masih terdapat beberapa instansi pemerintah yang tidak melaksanakan tindak lanjut penanganan pengaduan masyarakat', 4, 2, 8, NULL, NULL, 57, '', NULL, NULL, '', ''),
(106, 'Gangguan pada jaringan internet kantor', 1, 1, 1, '1. Wabah tikus yang merusak jaringan kabel\r\n2. Belum dibuat peta jaringan kabel yang terlindung dari serangan tikus', 'Masih terdapat gangguan pada jaringan internet kantor', 4, 3, 12, NULL, NULL, 42, '', NULL, NULL, '', ''),
(107, 'Capaian nilai komponen area perubahan rendah', 1, 3, 1, 'Karena penyediaan bukti/evidence terhadap setiap pertanyaan tidak bisa terlengkapi dengan sempurna', 'Masih ada beberapa capaian nilai komponen area perubahan yang rendah', 3, 3, 9, NULL, NULL, 58, '', NULL, NULL, '', ''),
(108, 'Dokumen Perencanaan dan Pelaporan tidak selesai tepat waktu', 1, 0, 1, 'Kurangnya koordinasi dalam pengumpulan rencana dan laporan kinerja', 'Masih terdapat beberapa dokumen  perencanaan dan pelaporan yang tidak selesai tepat waktu', 3, 3, 9, NULL, NULL, 59, '', NULL, NULL, '', ''),
(109, 'Renstra tidak menggambarkan kinerja strategis dan tujuan strategis yang akan dicapai', 1, 3, 1, 'Kurangnya koordinasi dalam pengumpulan rencana dan laporan kinerja', 'Renstra masih belum menggambarkan kinerja strategis dan tujuan strategis yang akan dicapai', 3, 3, 9, NULL, NULL, 59, '', NULL, NULL, '', ''),
(110, 'Dokumen Perencanaan dan Pelaporan kurang berkualitas', 1, 3, 1, '1. Karena kurang paham terhadap sebagian kinerja yang akan dicapai\r\n2. Resistensi Pegawai', 'Dokumen perencanaan dan pelaporan masih belum berkualitas', 1, 3, 3, NULL, NULL, 59, '', NULL, NULL, '', ''),
(111, 'Pengembangan kompetensi seluruh pegawai tidak dilakukan sesuai dengan rencana', 1, 0, 1, 'Informasi mengenai pengembangan kompetensi pegawai tidak sepenuhnya diketahui pegawai', 'Masih terdapat ketidaksesuaian dalam pengembangan kompetensi pada beberapa pegawai yang dilakukan tidak sesuai dengan rencana', 4, 4, 16, NULL, NULL, 44, '', NULL, NULL, '', ''),
(112, 'Stakeholder kurang puas terhadap layanan', 1, 0, 1, 'Karena pegawai tidak memberikan pelayanan secara prima', 'Masih terdapat stakeholder yang belum puas terhadap layanan', 2, 3, 6, NULL, NULL, 60, '', NULL, NULL, '', ''),
(113, 'Temuan material oleh BPK atas Pelaksanaan Anggaran', 3, 3, 1, 'Bukti penggunaan anggaran tidak lengkap', 'Terdapat temuan yang tidak material dari BPK atas pengelolaan keuangan di Deputi RB Kunwas', 2, 3, 6, NULL, NULL, 61, '', NULL, NULL, '', ''),
(114, 'Penilaian SKP tidak objektif dan tidak reliable', 2, 0, 1, 'Belum ada instrumen pengukuran kinerja yang memadai', 'Masih terdapat penilaian SKP yang kurang objektif dan kurang reliable', 3, 3, 9, NULL, NULL, 45, '', NULL, NULL, '', ''),
(115, 'Unit Kerja belum benar-benar memahami kegiatan yang akan dilakukan', 1, 0, 1, 'Perencanaan kegiatan kurang terarah', 'Masih terdapat unit kerja yang belum memahami kegiatan yang akan dilakukan', 3, 5, 15, NULL, NULL, 108, '', NULL, NULL, '', ''),
(116, 'Banyaknya permintaan revisi anggaran yang mendadak dalam jumlah besar akibat perubahan rencana kegiatan di unit kerja ', 1, 0, 1, '1. Pelaksanaan kegiatan menjadi terhambat karena menunggu proses revisi\r\n2. Penilaian pengelolaan anggaran Kementerian PANRB yang dilakukan Kementerian Keuangan menjadi kurang bagus', 'Masih terjadi permintaan revisi anggaran yang mendadak dalam jumlah besar akibat perubahan rencana kegiatan di unit kerja', 5, 5, 25, NULL, NULL, 109, '', NULL, NULL, '', ''),
(117, 'Indikator Kinerja Utama (IKU) di unit-unit kerja belum memenuhi kriteria indikator yang baik', 1, 0, 1, 'Sulit untuk menilai kinerja (keberhasilan atau ketidak berhasilan) kebijakan/program/kegiatan dan pada akhirnya kinerja instansi/unit kerja pelaksananya.', 'Masih terdapat IKU pada unit kerja yang belum memenuhi kriteria indikator yang baik', 3, 4, 12, NULL, NULL, 110, '', NULL, NULL, '', ''),
(118, 'Indikator Kinerja Utama unit kerja belum selaras dengan IKU Kementerian ', 1, 0, 1, 'Sulit untuk menilai kinerja (keberhasilan atau ketidak berhasilan) kebijakan/program/kegiatan dan pada akhirnya kinerja instansi/unit kerja pelaksananya.', 'Masih terdapat IKU unit kerja yang belum selaras dengan IKU Kementerian', 3, 4, 12, NULL, NULL, 110, '', NULL, NULL, '', ''),
(119, 'Penyusunan Laporan Kinerja Kementerian PANRB  tidak selesai tepat waktu', 1, 0, 1, 'Tidak ada motivasi baik individu maupun unit kerja untuk mencapai kinerja yang lebih baik', '-', 2, 4, 8, NULL, NULL, 111, '', NULL, NULL, '', ''),
(120, 'Unit kerja tidak menginput data ke dalam sistem aplikasi SiPebe', 1, 0, 1, '1. Data kinerja tidak terdokumentasikan dengan baik\r\n2.  Proses perencanaan untuk selanjutnya menjadi kurang terarah', 'Masih terdapat unit kerja yang tidak menginput data ke dalam sistem aplikasi Sipebe', 4, 5, 20, NULL, NULL, 112, '', NULL, NULL, '', ''),
(121, 'Tim RBI dan Agen Perubahan gagal terbentuk', 1, 0, 1, 'Tidak ada penyegaran komposisi anggota tim dan agen perubahan sebagai akselerasi pelaksanaan RBI', '-', 2, 2, 4, NULL, NULL, 113, '', NULL, NULL, '', ''),
(122, 'Rapat monitoring dan evaluasi pelaksanaan rencana aksi RBI tidak optimal', 1, 0, 1, 'Capaian dan hambatan pelaksanaan rencana aksi RBI tidak diketahui', 'Rapat monitoring dan evaluasi pelaksanaan rencana aksi RBI masih belum optimal', 4, 2, 8, NULL, NULL, 114, '', NULL, NULL, '', ''),
(123, 'Frekuensi dan kualitas penyelenggaraan Reform Corner tidak optimal', 1, 0, 1, 'Rendahnya pengetahuan pegawai terhadap isu-isu dan perkembangan baik peraturan maupun program KemenPANRB', 'Frekuensi dan kualitas penyelenggaraan Reform Corner masih belum optimal', 3, 1, 3, NULL, NULL, 115, '', NULL, NULL, '', ''),
(124, 'Survei tentang pelaksanaan RBI gagal dilakukan', 1, 0, 1, 'Tidak mendapat masukan perbaikan, karena diketahui bagaimana persepsi pegawai terhadap program RBI', 'Survei tentang pelaksanaan RBI masih gagal dilakukan', 2, 2, 4, NULL, NULL, 116, '', NULL, NULL, '', ''),
(125, 'Evaluasi kelembagaan tidak terlaksana', 0, 0, 1, 'Evaluasi kelembagaan unit tidak selesai sesuai dengan waktu yang ditentukan', 'Evaluasi kelembagaan belum terlaksana', 4, 3, 12, NULL, NULL, 117, '', NULL, NULL, '', ''),
(126, 'Tidak ada kajian dan kegiatan reorganisasi', 1, 0, 1, 'Struktur organisasi cenderung tidak tepat ukuran, terdapat tumpang tindih tugas dan fungsi sehingga pencapaian tujuan dan sasaran dengan berbagai indikatornya tidak efektif', 'Belum ada kajian dan kegiatan reorganisasi', 2, 3, 6, NULL, NULL, 118, '', NULL, NULL, '', ''),
(127, 'Tidak terselesaikannya Pedoman Penataan dan Evaluasi Organisasi', 1, 0, 1, 'Tidak adanya mekanisme yang komprehensif dalam melakukan penataan organisasi', 'Belum terselesaikannya Pedoman Penataan dan Evaluasi Organisasi', 2, 2, 4, NULL, NULL, 119, '', NULL, NULL, '', ''),
(128, 'Tidak terselesaikannya ANJAB/ABK di lingkungan Kementerian PANRB, salah satu terkait Beban Kerja pengelolaan RB unit kerja pada Sesdep', 1, 0, 1, 'Perhitungan Beban Kerja seluruh unit kerja tidak didasari dengan kebijakan yang berlaku sehingga usulan kebutuhan pegawai tidak proporsional dan tepat fungsi', 'Belum terselesaikannya ANJAB/ABK di lingkungan Kementerian PANRB, salah satu terkait Beban Kerja pengelolaan RB unit kerja pada Sesdep', 2, 2, 4, NULL, NULL, 120, '', NULL, NULL, '', ''),
(129, 'Penyusunan peta proses bisnis tidak selesai tepat waktu', 1, 0, 1, 'Ketiadaan peta probis berdampak pada tidak diketahuinya sinergitas atau duplikasi antar fungsi, kegiatan, atau peran unit organisasi, sehingga upaya peningkatan efektivitas dan efisiensi tata kerja sulit dilakukan', 'Penyusunan peta proses bisnis belum selesai tepat waktu ', 5, 3, 15, NULL, NULL, 121, '', NULL, NULL, '', ''),
(130, 'Penyusunan standar pelayanan tidak selesai tepat waktu', 1, 0, 1, 'Ketiadaan standar pelayanan yang mutakhir berdampak pada kualitas pemberian layanan karena tidak adanya panduan bagi penyedia dan tidak adanya kejelasan bagi pemohon layanan', 'Penyusunan standar pelayanan belum selesai tepat waktu', 4, 4, 16, NULL, NULL, 122, '', NULL, NULL, '', ''),
(131, 'Hasil evaluasi implementasi SAKIP beserta rekomendasi tidak ditindaklanjuti', 1, 0, 1, 'Nilai SAKIP menurun', 'Hasil evaluasi implementasi SAKIP beserta rekomendasi belum ditindaklanjuti', 3, 5, 15, NULL, NULL, 123, '', NULL, NULL, '', ''),
(132, 'Pelaksanaan perikatan kerja sama antara unit pemrakarsa dan mitra kerja sama tidak melalui fasilitasi biro MKOK', 0, 0, 1, 'Konten perikatan tidak sesuai dengan renstra dan tugas fungsi serta kebutuhan kementerian karena tidak melalui telaah substansi serta perikatan mengandung risiko hukum karena tidak melalui telaah hukum. ', 'Pelaksanaan perikatan kerja sama antara unit pemrakarsa dan mitra kerja sama belum melalui fasilitasi biro MKOK', 3, 4, 12, NULL, NULL, 124, '', NULL, NULL, '', ''),
(133, 'Pelaksanaan kegiatan kerja sama unit pemrakarsa dengan mitra kerja tidak terpantau dan terevaluasi', 1, 0, 1, 'Efektivitas dan manfaat dari hasil pelaksanaan kerja sama tidak terukur ', 'Pelaksanaan kegiatan kerja sama unit pemrakarsa dengan mitra kerja belum terpantau dan terevaluasi', 4, 4, 16, NULL, NULL, 125, '', NULL, NULL, '', ''),
(134, 'Rendahnya persentase penyerapan anggaran sampai akhir tahun', 3, 0, 1, 'Anggaran terisisa banyak', 'Masih rendahnya persentase penyerapan anggaran sampai akhir tahun', 3, 3, 9, NULL, NULL, 126, '', NULL, NULL, '', ''),
(135, 'Terdapat temuan material oleh auditor eksternal (BPK)', 3, 0, 1, 'Opini BPK WDP atau TMP', 'Masih terdapat temuan material oleh auditor eksternal (BPK)', 2, 2, 4, NULL, NULL, 127, '', NULL, NULL, '', ''),
(136, 'Adanya PNS Biro MKOK yang nilai kinerjanya “Buruk”', 1, 0, 1, 'Target kinerja individu sulit tercapai', 'Masih ada PNS Biro MKOK yang nilai kinerjanya “Buruk”', 2, 2, 4, NULL, NULL, 128, '', NULL, NULL, '', ''),
(137, 'Rendahnya hasil survey kepuasan terhadap layanan Biro MKOK', 1, 0, 0, 'Persepsi negatif stakeholder/unit kerja terhadap profesionalitas dan akuntabilitas Biro MKOK', 'Hasil survey kepuasan terhadap layanan Biro MKOK masih rendah', 2, 2, 4, NULL, NULL, 129, '', NULL, NULL, '', ''),
(138, 'Terjadinya pelanggaran kode etik/disiplin pegawai', 2, 0, 1, 'Majelis kode etik tidak bersinergi', 'Masih terjadi beberapa pelanggaran kode etik/disiplin pegawai', 2, 5, 10, NULL, NULL, 46, '', NULL, NULL, '', ''),
(139, 'Kualifikasi pejabat/pegawai dengan jabatan tidak sesuai', 1, 0, 1, 'Tidak menerapkan sistem merit', 'Masih terdapat ketidaksesuaian kualifikasi pejabat/pegawai dengan jabatan', 2, 3, 6, NULL, NULL, 47, '', NULL, NULL, '', ''),
(140, 'Hasil seleksi terbuka tidak sesuai dengan kualitas yang diharapkan organisasi', 1, 0, 1, 'Belum ada standar kelulusan kualifikasi bagi peserta seleksi', 'Masih terdapat ketidaksesuaian antara hasil seleksi terbuka dengan kualitas yang diharapkan organisasi', 3, 4, 12, NULL, NULL, 48, '', NULL, NULL, '', ''),
(141, 'Kewajiban melakukan revolving UP setiap bulan tidak terpenuhi', 1, 0, 1, '1. Unit kerja kurang memahami akun belanja yang dapat dipertanggungjawabkan melalui mekanisme UP\r\n2. Bendahara kurang proaktif dalam mengoordinasikan pertanggungjawaban belanja unit kerja yang dapat menggunakan mekanisme UP/GU.', 'Masih terdapat kekurangan dalam pemenuhan kewajiban revolving UP setiap bulan', 2, 2, 4, NULL, NULL, 19, '', NULL, NULL, '', ''),
(142, 'PPK terlambat mendaftarkan kontrak ke KPPN', 1, 0, 1, 'Tidak memiliki instrumen untuk melakukan monitoring pendaftaran kontrak', 'Masih terdapat keterlambatan PPK dalam mendaftarkan kontrak ke KPPN', 2, 3, 6, NULL, NULL, 20, '', NULL, NULL, '', ''),
(143, 'Beberapa pegawai kurang memahami setiap indikator dalam survey ZI', 1, 0, 1, 'Mindset pegawai tidak berubah', 'Beberapa pegawai masih kurang memahami setiap indikator dalam survey ZI', 2, 2, 4, NULL, NULL, 40, '', NULL, NULL, '', ''),
(144, 'Pegawai tidak mengumpulkan SKP sesuai jadwal', 2, 3, 1, 'Pegawai kurang memahami pentingnya SKP', 'Masih terdapat beberapa pegawai yang mengumpulkan SKP tidak sesuai dengan jadwal', 2, 2, 4, NULL, NULL, 41, '', NULL, NULL, '', ''),
(145, 'Kesalahan dalam melakukan analisis jabatan dan analisis beban kerja untuk seluruh jabatan', 1, 0, 1, 'Unit kerja tidak memberikan masukan berupa rencana kebutuhan pegawai ke Bagian Kepegawaian', 'Masih terdapat kesalahan dalam melakukan analisis jabatan dan analisis beban kerja untuk seluruh jabatan', 1, 4, 4, NULL, NULL, 43, '', NULL, NULL, '', ''),
(146, 'Kesalahan perhitungan dalam perencanaan jumlah kebutuhan pegawai', 1, 0, 1, 'Rencana kebutuhan pegawai dari unit kerja tidak disampaikan kepada unit bagian kepegawaian', 'Masih terdapat kesalahan perhitungan dalam perencanaan beberapa jumlah kebutuhan pegawai', 1, 4, 4, NULL, NULL, 43, '', NULL, NULL, '', ''),
(147, 'Pelaksanaan kegiatan kerja sama unit pemrakarsa dengan mitra kerja tidak terpantau dan terevaluasi', 1, 0, 1, 'Efektivitas dan manfaat dari hasil pelaksanaan kerja sama tidak terukur', 'Pelaksanaan kegiatan kerja sama unit pemrakarsa dengan mitra kerja belum terpantau dan terevaluasi', 4, 4, 16, NULL, NULL, 124, '', NULL, NULL, '', ''),
(148, 'Kesalahan dalam pelaksanaan pengelolaan keuangan/BMN', 1, 0, 0, '1) Kurangnya pemahaman pengelola keuangan/BMN unit kerja terhadap ketentuan \r\n2) Kompetensi pengelola keuangan/BMN kurang memadai\"', 'Masih terdapat unit kerja melakukan kesalahan pengeloaan keuangan', 3, 5, 15, NULL, NULL, 64, '', NULL, NULL, '', ''),
(149, 'Kesalahan dalam penyajian laporan keuangan', 1, 0, 0, 'Kompetensi SDM bagian keuangan  untuk penyusunan laporan keuangan  kurang memadai', 'Masih terdapat kesalahan dalam penyajian LK', 3, 5, 15, NULL, NULL, 65, '', NULL, NULL, '', ''),
(150, 'Kesalahan dalam pelaksanaan PBJ', 1, 0, 0, 'Kurangnya SDM di unit kerja  yang memahami PBJ', 'Masih terdapat kesalahan dalam pengadaan barang/jasa di unit kerja', 3, 4, 12, NULL, NULL, 66, '', NULL, NULL, '', ''),
(151, 'Tingkat maturitas SPIP di unit kerja masih rendah', 1, 3, 1, 'Kurangnya komitmen unit kerja dalam menyelenggarakan SPIP', 'Masih terdapat unit kerja yang nilai self assessment maturitas SPIP dibawah target', 3, 2, 6, NULL, NULL, 67, '', NULL, NULL, '', ''),
(152, 'Kesalahan dalam mengidentifikasi, analisis dan evaluasi risiko yang ada', 1, 0, 1, 'Kurangnya pemahaman SDM dalam mengidentifikasi risiko, analisis, dan evaluasi risiko', 'Masih terdapat risiko yang belum teridentifikasi dan/atau belum ditentukan pengendaliannya', 4, 3, 12, NULL, NULL, 67, '', NULL, NULL, '', ''),
(153, 'Kesalahan dalam memberikan rekomendasi terkait identifikasi, analisis dan evaluasi risiko', 1, 0, 1, 'Kurangnya pemahaman Auditor dalam memberikan bimbingan terkait identifikasi, analisis, dan evaluasi risiko', 'Masih terdapat pegawai di Inspektorat yang belum memahami manajemen risiko', 4, 3, 12, NULL, NULL, 67, '', NULL, NULL, '', ''),
(154, 'Kesalahan dalam penerapan SAKIP di Unit Kerja', 1, 0, 0, 'Kompetensi SDM di unit kerja dalam penerapan SAKIP yang kurang memadai', 'Masih terdapat unit kerja yang nilai SAKIP masih dibawah A', 3, 4, 12, NULL, NULL, 72, '', NULL, NULL, '', ''),
(155, 'Nilai capaian area perubahan RB Unit Kerja masih rendah', 1, 0, 1, '1) Kesalahan unit kerja dalam melengkapi dokumen pendukung pada media evalrb\r\n2) Unit kerja belum berkomitmen untuk meningkatkan implementasi RB di unit kerjanya\"', 'Capaian nilai komponen penilaian RB Unit Kerja masih rendah', 3, 4, 12, NULL, NULL, 75, '', NULL, NULL, '', ''),
(156, 'Tidak ada unit kerja yang layak diusulkan ZI menuju WBK/WBBM', 1, 0, 1, 'SDM di Inspektorat belum siap mendorong unit kerja untuk diusulkan ZI menuju WBK/WBBM', 'Masih banyak unit kerja yang belum mendapat predikat ZI menuju WBK/WBBM', 2, 1, 2, NULL, NULL, 131, '', NULL, NULL, '', ''),
(157, 'Tidak ada unit kerja yang layak diusulkan ZI menuju WBK/WBBM', 1, 0, 0, 'Unit kerja belum  serius  untuk berkomitmen  menjadi unit yang layak diusulkan menjadi  ZI menuju WBK/WBBM', 'Unit kerja tidak lolos dalam kriteria penilaian ZI menuju WBK/WBBM oleh Tim Nasional', 2, 1, 2, NULL, NULL, 131, '', NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rtl`
--

CREATE TABLE `rtl` (
  `id_rtl` int(11) NOT NULL,
  `perbaikan_pengendalian` text,
  `mulai` date DEFAULT NULL,
  `selesai` date DEFAULT NULL,
  `pembiayaan` text,
  `ket` text NOT NULL,
  `pemilik_risiko` text NOT NULL,
  `id_risiko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rtl`
--

INSERT INTO `rtl` (`id_rtl`, `perbaikan_pengendalian`, `mulai`, `selesai`, `pembiayaan`, `ket`, `pemilik_risiko`, `id_risiko`) VALUES
(1, 'Membangun peningkatan komitmen pimpinan tertinggi di Instansi Pemerintah', '2019-04-01', '2019-09-01', '', '', 'Eselon III Deputi Yanlik', 14),
(2, 'Mengirimkan surat edaran MenpanRB terkait pembentukan MPP kepada Kepala Daerah', '2019-04-01', '2019-06-01', '', '', 'Eselon III Deputi Yanlik', 15),
(3, 'Mendorong kepala daerah untuk membuat SK tim pengelola survei kepuasan masyarakat', '2019-04-01', '2019-06-01', '', '', 'Eselon III Deputi Yanlik', 16),
(4, 'Membangun sistem monitoring dan tindak lanjut', '2019-04-01', '2019-09-01', '', '', 'Eselon III Deputi Yanlik', 13),
(5, 'Melakukan rekonsiliasi akun dan review berjenjang oleh atasan', '2019-01-01', '2019-12-01', '', '', 'Eselon III Deputi Yanlik', 22),
(6, 'Memberikan reward and punishment atas pelaksanaan tugas pegawai', '2019-01-01', '2019-03-01', '', '', 'Eselon III Deputi Yanlik', 17),
(7, 'Reviu berjenjang oleh atasan', '2019-01-01', '2019-12-01', '', '', 'Eselon III Deputi Yanlik', 18),
(8, 'Melakukan penilaian berjenjang oleh atasan, memberikan reward dan punishment kepada pegawai atas pelaksnaan tugas dan fungsi, melaksanakan sosialisasi dan bimtek SOP kepada seluruh pegawai', '2019-01-01', '2019-03-01', '', '', 'Eselon III Deputi Yanlik', 19),
(9, 'Menetapkan standar kinerja yang harus dicapai, melakukan reviu dengan renstra kementerian', '2019-10-01', '2019-12-01', '', '', 'Eselon III Deputi Yanlik', 20),
(10, 'Merapkan budaya melayani pada organisasi dari level pimpinan sampai staff, memberikan pelatihan kepada seluruh pejabat dan pegawai agar dapat memberikan pelayanan yang maksimal kepada stakeholder', '2019-01-01', '2019-03-01', '', '', 'Eselon III Deputi Yanlik', 21),
(11, 'Melakukan monitoring progres kepada unit kerja yang bersangkutan agar segera menyelesaikan penyusunan kebijakan', '2019-01-01', '2019-12-01', '-', '', 'Eselon III di Asdep Kesejahteraan', 26),
(12, '1) Surat Edaran dari BKN\r\n2) Sosialisasi PermenPANRB 38 Th 2018 tentang Pengukuran Indeks Profesionalitas ASN\r\n3) Melakukan monitoring dan evaluasi secara berkala terkait Surat Edaran dan sosialisasi', '2019-01-01', '2019-12-01', '-', '', 'Eselon III di Asdep Pembinaan Integritas dan Pembinaan Disiplin', 23),
(13, '1) Memberikan sosialisasi dan bimbingan teknis kepada SDM di daerah untuk meningkatkan pemahaman mengenai pengisian  instrumen\r\nsesuai dengan Permenpan 40 Tahun 2018\r\n2) Melakukan monitoring dan evaluasi secara berkala', '2019-01-01', '2019-12-01', '-', '', 'Eselon III di Asdep Perencanaan dan Pengadaan', 25),
(14, 'Koordinasi dengan stakeholder', '2019-01-01', '2019-12-01', '-', '', 'Eselon III di Sesdep SDMA', 28),
(15, 'Koordinasi dengan stakeholder', '2019-01-01', '2019-12-01', '-', '', 'Eselon III di Sesdep SDMA', 29),
(16, 'Sosialisasi pemahaman tentang reformasi birokrasi yang meliputi 8 area perubahan', '2019-01-01', '2019-12-01', '-', '', 'Eselon III di Sesdep SDMA', 27),
(17, 'Perawatan secara berkala', '2019-01-01', '2019-12-01', '-', '', 'Eselon III di Sesdep SDMA', 30),
(18, '1. .	Membuat surat rekomendasi pembangunan infrastruktur telekomunikasi di daerah tertinggal/belum terjangkau internet\r\n2.	Melakukan asistensi dan pilotting kepada K/L/D\r\n3.	Membuat surat rekomendasi diklat khusus pegawai kominfo kepada pusdiklat bersangkutan untuk pengembangan SDM masing-masing K/L/D', '2019-01-01', '2019-12-01', 'Rp.0,-', '', 'PIC adalah Eselon III di Asisten Deputi Perumusan Kebijakan dan Koordinasi Pelaksanaan Sistem Administrasi Pemerintahan dan Penerapan Sistem Pemerintahan Berbasis Elektronik', 36),
(19, '	Mengadakan Asistensi dan Monitoring dalam Evaluasi Kelembagaan Instansi Pemerintah', '2019-01-01', '2019-09-01', 'Rp.0,-', '', 'PIC adalah Eselon III di Asisten Deputi Perumusan Kebijakan dan Koordinasi Pelaksanaan Sistem Administrasi Pemerintahan dan Penerapan Sistem Pemerintahan Berbasis Elektronik', 31),
(20, 'Meningkatkan kesadaran melalui komitmen pimpinan', '2019-01-01', '2019-03-01', 'Rp.0,-', '', 'PIC adalah Eselon III di Sekretariat Deputi', 43),
(21, 'Sosialisasi/Bimtek Peraturan Menteri tentang Evaluasi Kelembagaan ', '2019-01-01', '2019-03-01', 'Rp.0,-', '', 'PIC adalah Eselon III di Asisten Deputi Perumusan Kebijakan Sistem Kelembagaan dan Tata Laksana', 32),
(22, 'Melakukan evaluasi dengan sistem \"jemput bola\" ke tiap-tiap daerah yang belum melakukan evaluasi SPBE', '2019-10-01', '2019-12-01', 'Rp.0,-', '', 'PIC adalah Eselon III di Asisten Deputi Perumusan Kebijakan dan Koordinasi Pelaksanaan Sistem Administrasi Pemerintahan dan Penerapan Sistem Pemerintahan Berbasis Elektronik', 35),
(23, 'Melakukan pengecekan berkas, rekonsiliasi berkas keuangan dengan bag. Keuangan untuk meminimalisir terjadinya fraud salam pengelolaan keuangan Deputi Bidang Kelembagaan dan Tata Laksana', '2019-01-01', '2019-03-01', 'Rp.0,-', '', 'PIC adalah Eselon III di  Sekretariat Deputi', 45),
(24, 'Diskusi terlebih dahulu dengan unit SI agar dapat mencari solusi terbaik sehingga tamu dapat memberi saran dan masukan secara personal tidak hanya nilai vote saja baru setelah menemukan solusinya lsg tindakan.', '2019-04-01', '2019-06-01', 'Rp.0,-', '', '\'PIC adalah Eselon III di Sekretariat Deputi', 48),
(25, 'Memanggil unit RB Kunwas untuk memberikan coaching khusus dan inspektorat untuk mendampingi unit Deputi Bidang Kelembagaan dan tata laksana untuk meningkatkan nilai evaluasi Sakip', '2019-04-01', '2019-04-01', 'Rp.0,-', '', 'PIC adalah Eselon III di Sekretariat Deputi', 50),
(26, 'Pelatihan keuangan untuk penyusun laporan keuangan dan auditor untuk melakukan reviu\r\n', '2019-07-01', '2019-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 46),
(27, 'PKS/Pelatihan mandiri terkait keuangan \r\n', '2019-01-01', '2019-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 42),
(28, 'Pelatihan perencanaan pengadaan barang dan jasa', '2019-07-01', '2019-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 49),
(29, 'Pemantauan tindak lanjut atas hasil evaluasi SAKIP unit kerja\r\n', '2019-07-01', '2019-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 52),
(30, 'Membangun sistem evalrb unit kerja sebagai media penyimpanan data pendukung', '1970-07-01', '1970-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 56),
(31, 'Menindaklanjuti rekomendasi atas hasil evaluasi penanganan gratifikasi, pengaduan masyarakat, WBS, benturan kepentingan', '1970-07-01', '1970-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 57),
(32, 'Menggunakan tools gogle form untuk pelaksanaan survei', '1970-07-01', '1970-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 62),
(33, 'Menggunakan tools gogle form untuk pelaksanaan survei', '1970-07-01', '1970-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 63),
(34, '1) Penyusunan PKPT berbasis risiko dan Internal Audit Charter\r\n<br>2) Melakukan telaah sejawat\r\n<br>3) Pembangunan Aplikasi Penilaian Mandiri Level Kapabilitas APIP (PMLKA)', '1970-04-01', '1970-09-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 69),
(35, 'Membangun sistem pemantauan tindak lanjut hasil evaluasi internal', '1970-07-01', '1970-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 54),
(36, 'Membuat PKS peningkatan maturitas SPIP', '1970-07-01', '1970-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 51),
(37, 'Memberikan Asistensi dalam memberikan pemahaman atas rekomendasi dari BPK', '1970-07-01', '1970-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 53),
(38, 'Transfer Knowladge pegawai yang telah melaksanakan Pelatihan Manajemen Risiko', '1970-07-01', '1970-12-01', 'Rp.0,-', '', 'Jabatan Fungsional Auditor', 61),
(39, '-', '1970-01-01', '1970-01-01', '-', '', '-', 59),
(40, '-', '1970-01-01', '1970-01-01', '-', '', '-', 64),
(41, '-', '1970-01-01', '1970-01-01', '-', '', '-', 65),
(42, '-', '1970-01-01', '1970-01-01', '-', '', '-', 66),
(43, '-', '1970-01-01', '1970-01-01', '-', '', '-', 67),
(44, '1. Intensitas dan proaktif dalam melakukan pembinaan\r\n2. Penggunaan lebih ragam media dalam mengkampanyekan materi kearsipan\r\n3. Berkoordinasi dengan lintas unit dalam hal menggiatkan penggunaan SMART; intensitas kampanye fitur kearsipan dalam SMART\r\n4. Penambahan anggaran pemeliharaan\r\n5. Penyediaan tempat penyimpanaan arsip inaktif; sosialisasi retensi arsip', '2019-10-01', '2019-12-01', '-', '', 'Kabag Persuratan, Kearsipan, dan Perpustakaan', 79),
(45, 'Optimalisasi kerja sama dengan Bagian Datin untuk memonitoring website', '2019-01-01', '2019-12-01', '-', '', 'Kabag Persuratan, Kearsipan, dan Perpustakaan', 86),
(46, 'Bekerja sama dengan Bagian Datin untuk memonitoring website', '2019-01-01', '2019-12-01', '-', '', 'Kabag Komunikasi Publik dan Pelayanan Informasi', 88),
(47, 'Optimalisasi sosialisasi melalui RB Corner ', '2019-10-01', '2019-12-01', '-', '', 'Kabag Data dan Teknologi Informasi', 74),
(48, '1. Optimalisasi sosialisasi melalui RB Corner \r\n2. Penayangan rekap penggunaan e-office di media tayang Kementerian PANRB', '2019-07-01', '2019-12-01', '-', '', 'Kabag Data dan Teknologi Informasi', 75),
(49, 'Menerapkan sistem pengiriman surat berbasis elektronik', '2019-04-01', '2019-12-01', '-', '', 'Kabag Persuratan, Kearsipan, dan Perpustakaan', 76),
(50, 'Penyusunan SOP penginputan nomor/agenda surat masuk', '2019-04-01', '2019-12-01', '-', '', 'Kabag Persuratan, Kearsipan, dan Perpustakaan', 77),
(51, 'Menata layout ruangan untuk pemanfaatan ruang koleksi perpustakaan', '2019-07-01', '2019-12-01', '-', '', 'Kabag Persuratan, Kearsipan, dan Perpustakaan', 83),
(52, 'Menyusun SOP perpustakaan terkait pengembalian koleksi buku yang tidak tepat waktu', '2019-07-01', '2019-12-01', '-', '', 'Kabag Persuratan, Kearsipan, dan Perpustakaan', 85),
(53, 'Tidak bergantung pada pihak ketiga untuk melakukan survei. Sehingga survei dapat dilakukan secara swakelola, dengan membuat pedoman terlebih dahulu', '2019-10-01', '2019-12-01', '-', '', 'Kabag Komunikasi Publik dan Pelayanan Informasi', 87),
(54, 'Sosialisasi peraturan pengeluaran uang negara sesuai dengan peraturan yang berlaku (PMK)', '2019-10-01', '2019-12-01', '-', '', 'Seluruh Kabag Biro Hukip', 91),
(55, 'Penerbitan menjadi Peraturan Menteri PANRB ', '2019-10-01', '2016-12-01', '-', '', 'Kabag Persuratan, Kearsipan, dan Perpustakaan dan Kabag Hukum', 80),
(56, 'Monitoring berkala retensi arsip', '2019-01-01', '2019-03-01', '-', '', 'Kabag Persuratan, Kearsipan, dan Perpustakaan', 81),
(57, '', NULL, NULL, '', '', '', 73),
(58, '', NULL, NULL, '', '', '', 90),
(59, '', NULL, NULL, '', '', '', 92),
(60, '', NULL, NULL, '', '', '', 71),
(61, '', NULL, NULL, '', '', '', 72),
(62, '', NULL, NULL, '', '', '', 94),
(63, '', '2019-07-01', '2019-12-01', '', '', 'Eselon III di Asdep I', 68),
(64, '', '2019-07-01', '2019-12-01', '', '', 'Eselon III di Asdep I', 93),
(65, '', '2019-07-01', '2019-12-01', '', '', 'Eselon III di Asdep I', 98),
(66, '', '2019-01-01', '2019-07-01', '', '', 'Eselon III di Sesdep', 100),
(67, '', '2019-01-01', '2019-12-01', '', '', 'Eselon III di Sesdep', 101),
(68, '', '2019-01-01', '2019-08-01', '', '', 'Eselon III di Sesdep', 107),
(69, '', '2019-01-01', '2019-08-01', '', '', 'Eselon III di Sesdep', 108),
(70, '', '2019-06-01', '2019-09-01', '', '', 'Eselon III di Sesdep', 109),
(71, '', '2019-01-01', '2019-06-01', '', '', 'Eselon III di Sesdep dan Asdep I', 34),
(72, '', '2019-07-01', '2019-12-01', '', '', 'Eselon III di Sesdep', 55),
(73, '', '2019-01-01', '2019-06-01', '', '', 'Eselon III di Sesdep dan Asdep I', 78),
(74, '', '2019-01-01', '2019-03-01', '', '', 'Eselon III di Sesdep', 95),
(75, '', '2019-01-01', '2019-06-01', '', '', 'Eselon III di Sesdep dan Asdep I', 96),
(76, '', '2019-09-01', '2019-12-01', '', '', 'Eselon III di Sesdep', 102),
(77, '', '2019-01-01', '2019-12-01', '', '', 'Eselon III di Asdep V', 105),
(78, '', '2019-01-01', '2019-12-01', '', '', 'Eselon III di Sesdep', 112),
(79, '', '2019-01-01', '2019-12-01', '', '', 'Eselon III di Sesdep', 113),
(80, '', '2019-01-01', '2019-12-01', '', '', 'Eselon III di Sesdep', 110),
(81, '', '2019-07-01', '2019-12-01', '', '', 'Eselon III di Sesdep', 89),
(82, 'Membuat ceklist/ kerta kerja BAPP dibandingkan dengan BAST dan pengadaan yang diterima', '2019-01-01', '2019-12-01', '', '', 'Kepala Biro SDMU', 99),
(83, 'Membuat SOP penyusunan RPD', '2019-01-01', '2019-12-01', '', '', 'Seluruh bagian pada Biro SDMU', 97),
(84, 'Spesifikasi kebutuhan meubelair dan ruangan terhadap jumlah pegawai', '2019-01-01', '2019-12-01', '', '', 'Bagian Rumah Tangga dan Perlengkapan', 104),
(85, 'Bank data kebutuhan pendidikan dan pelatihan seluruh pegawai kementerian PANRB', '2019-01-01', '2019-12-01', '', '', 'Bagian Sumber Daya Manusia', 111),
(86, 'Penilaian IKPA oleh KPPN', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 47),
(87, 'Reviu dan audit oleh Aparat Pengawas Internal (APIP)', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 58),
(88, 'Penilaian IKPA oleh KPPN', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 41),
(89, '1. Penilaian IKPA oleh KPPN\r\n2. Reviu dan audit oleh Aparat Pengawas Internal dan Auditor Eksternal', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 44),
(90, 'Membuat daftar kunjungan kerja pimpinan Menteri dan/atau Eselon I', '2019-01-01', '2019-12-01', '', '', 'Seluruh bagian pada Biro SDMU', 60),
(91, '', '2019-01-01', '2019-12-01', '', '', 'Bagian Rumah Tangga dan Perlengkapan', 106),
(92, '', '2019-01-01', '2019-12-01', '', '', 'Bagian Sumber Daya Manusia', 140),
(93, 'Mencatat setiap barang masuk atau keluar dengan mengganti/menambahkan nomor urut pendaftaran pada BMN setiap BMN baru dan/atau lama', '2019-01-01', '2019-12-01', '', '', 'Bagian Rumah Tangga dan Perlengkapan', 103),
(94, '', '2019-01-01', '2019-12-01', '', '', 'Bagian Sumber Daya Manusia', 138),
(95, 'Penilaian IKPA oleh KPPN', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 39),
(96, '', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 40),
(97, 'Penilaian IKPA oleh KPPN', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 84),
(98, '', '2019-01-01', '2019-12-01', '', '', 'Bagian Sumber Daya Manusia', 114),
(99, 'Penilaian IKPA oleh KPPN', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 82),
(100, '1. Bimbingan teknis SAS sesuai dengan Peraturan Dirjen Perbendaharaan Kementerian Keuangan untuk menuliskan narasi pada SPP\r\n2. SOP Pertanggungjawaban keuangan', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 37),
(101, 'SOP verifikasi pertanggungjawaban keuangan mekanisme uang persediaan dan/atau langsung', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 38),
(102, '', '2019-01-01', '2019-12-01', '', '', 'Seluruh bagian pada Biro SDMU', 70),
(103, '', '2019-01-01', '2019-12-01', '', '', 'Bagian Sumber Daya Manusia', 139),
(104, '1.  Mengetahui kontrak melalui aplikasi SIMONA\r\n2. SOP Pertanggungjawaban keuangan', '2019-01-01', '2019-12-01', '', '', 'Bagian Keuangan', 142),
(105, '', '1970-01-01', '1970-01-01', '', '', '', 33),
(106, '', '1970-01-01', '1970-01-01', '', '', '', 141),
(107, '', '1970-01-01', '1970-01-01', '', '', '', 143),
(108, '', '1970-01-01', '1970-01-01', '', '', '', 144),
(109, '', '1970-01-01', '1970-01-01', '', '', '', 145),
(110, '', '1970-01-01', '1970-01-01', '', '', '', 146),
(111, '1. Meningkatkan komunikasi dengan pimpinan unit kerja untuk lebih  memperhatikan perencanaan anggarannya\r\n2. Memberikan informasi termasuk mekanisme revisi anggaran minimal H-3  dari jadwal pelaksanaan revisi anggaran yang telah  di tentukan,\r\n3. memberikan bimbingan teknis kepada unit kerja terkait revisi anggaran,\r\n4.Meningkatkan komunikasi kepada unit kerja agar unit kerja aktif dalam proses revisi anggaran\r\n5. membuat Forum WhastAPP\r\n6. memperkuat database serapan anggaran unit kerja ybs sebagai dasar perencanaan/revisi anggaran', '2019-01-01', '2019-12-01', 'DIPA Biro MKOK \r\n048.01.1.427950.2815', '', '', 116),
(112, ' Membuat payung hukum untuk penggunaan sistem aplikasi perencanaan dan pelaporan kinerja', '1970-01-01', '1970-01-01', '', '', '', 120),
(113, '1. Peraturan MenPANRB 24 Tahun 2016 Perubahan Atas Peraturan Menteri Pendayagunaan Aparatur Negara Dan Reformasi Birokrasi Nomor 16 Tahun 2013 Tentang Standar Pelayanan Di Lingkungan Kementerian Pendayagunaan Aparatur Negara Dan Reformasi Birokrasi, dan Draf Reviu atas Standar Pelayanan\r\n2. Melakukan reviu standar pelayanan existing', '2019-04-01', '2019-09-01', '', '', '', 130),
(114, ' Penyelesaian Draft Permenpanrb tentang kerja sama dan Pembuatan SOP Pelaksanaan dan Monev Kerja Sama', NULL, NULL, '', '', '', 133),
(115, 'Melakukan pemahaman/knowledge sharing di lingkungan internal', '1970-01-01', '1970-01-01', '', '', '', 115),
(116, '1. Pada lampiran hal.1 PermenPANRB 19/2018 tentang Penyusunan Proses Bisnis Instansi Pemerintah dinyatakan bahwa setiap organisasi memerlukan peta proses bisnis yang mampu menggambarkan proses bisnis yang dilakukan\r\n2. Mengadakan sosialisasi/internalisasi/pendampingan kepada pegawai Kementerian PANRB terkait best practice peta proses bisnis', '2019-04-01', '2019-12-01', '', '', '', 129),
(117, 'Sistem akuntabilitas dan pengendalian internal', '1970-01-01', '1970-01-01', '', '', '', 131),
(118, 'Melakukan pemahaman/knowledge sharing di lingkungan internal', '1970-01-01', '1970-01-01', '', '', '', 117),
(119, 'Melakukan penajaman perumusan indikator kinerja per triwulan', '1970-01-01', '1970-01-01', '', '', '', 118),
(120, '1. PermenPANRB 20/2018 Pasal 3 menyatakan setiap instansi pemerintah pusat wajib melaksanakan evaluasi kelembagaan\r\n2. Disusun kertas kerja dan deskripsi atas pertanyaan pada kuesioner untuk memudahkan pengisian\r\n3. Melakukan sosialisasi/internalisasi serta pendampingan terhadap pegawai Kementerian PANRB terkait pedoman evaluasi organisasi', '2019-01-01', '2019-09-01', '', '', '', 125),
(121, 'Penyelesaian Draft Permenpanrb tentang kerja sama dan Sosialisasi SOP Pengusulan Kerja Sama', '1970-01-01', '1970-01-01', '', '', '', 132),
(122, 'Monev rutin (triwulan) dan SOP pencairan anggaran', '1970-01-01', '1970-01-01', '', '', '', 134),
(123, 'Pembuatan timeline (jadwal) pelaksanaan penyusunan Laporan Kinerja Kementerian PANRB', '1970-01-01', '1970-01-01', '', '', '', 119),
(124, 'Pada Lampiran hal.3 Permenpan 16/2015 tentang Road Map RB KemenPANRB 2015-2019 dinyatakan Tim RBI melakukan pertemuan setiap seminggu untuk membahas isu aktual RB', '2019-07-01', '2019-12-01', '', '', '', 122),
(125, '1. Draf PermenPANRB tentang penataan dan evaluasi organisasi di lingkungan Kementerian PANRB\r\n2. Melakukan sosialisasi/internalisasi/pendampingan pedoman penataan dan evaluasi organisasi di lingkungan Kementerian PANRB, format naskah akademik dan SiREOG', '1970-01-01', '1970-01-01', '', '', '', 126),
(126, 'Rekomendasi atas hasil evaluasi RB 2017 dinyatakan bahwa perlu revisi komposisi agen perubahan pada 2018', '1970-01-01', '1970-01-01', '', '', '', 121),
(127, '1. Target nilai dari hasil survey memiliki nilai tertinggi (3.5) dari total skor area manajemen perubahan (5)\r\n2. Ada dalam Renaksi RBI', '1970-01-01', '1970-01-01', '', '', '', 124),
(128, 'Membuat rencana aksi dan kertas kendali penyelesaian Draf KepmenPANRB tentang Penataan dan Evaluasi Organisasi', '1970-01-01', '1970-01-01', '', '', '', 127),
(129, '1. Menyusun rencana aksi penyelesaian ANJAB, ABK\r\n2. Memberikan sosialisasi/internalisasi/pendampingan dalam penyusunan dokumen Anjab dan ABK kepada unit kerja\r\n3. Menyusun konsep Tata Kelola RBI Kementerian dan Unit Kerja\r\n4. Menyepakati Tata Kelola RBI Kementerian dan Unit Kerja\r\n5. Menyusun Tim RBI di unit kerja', '1970-01-01', '1970-01-01', '', '', '', 128),
(130, 'SOP terkait tata kelola dan pertanggungjawaban keuangan dan sistem pengawasan internal', '1970-01-01', '1970-01-01', '', '', '', 135),
(131, '1. Coaching dan counselling dari atasan/pimpinan\r\n2. Knowledge sharing/tutor sebaya\r\n3. Pelatihan/workshop', '1970-01-01', '1970-01-01', '', '', '', 136),
(132, '1. SOP Layanan\r\n2. Pelatihan hospitality dan manajemen perubahan', '1970-01-01', '1970-01-01', '', '', '', 137),
(133, 'Pada Lampiran hal.4 Permenpan 16/2015 tentang Road Map RB KemenPANRB 2015-2019 dinyatakan bahwa Reform Corner dilakukan setiap bulan sebagai forum seluruh pegawai', '1970-01-01', '1970-01-01', '', '', '', 123),
(134, '', NULL, NULL, '', '', '', 147);

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
(7, 'Terwujudnya Inspektorat yang efektif, efisien, bersih dan berkinerja tinggi', 1, 3),
(9, 'Meningkatnya Kualitas Manajemen Pelayanan Publik', 1, 5),
(10, 'Terwujudnya Deputi Bidang Pelayanan Publik yang efektif, efisien, bersih, akuntabel dan berkinerja tinggi', 1, 5),
(11, 'Meningkatnya kualitas peraturan perundang-undangan', 1, 6),
(12, 'Meningkatnya pelaksanaan e-government Kementerian PANRB', 1, 6),
(13, 'Meningkatnya kualitas pelayanan persuratan, kearsipan, dan perpustakaan', 1, 6),
(14, 'Meningkatnya kualitas pelayanan informasi dan komunikasi publik', 1, 6),
(15, 'Terwujudnya Biro HUKIP yang efektif, efisien, bersih, akuntabel, dan berkinerja tinggi', 1, 6),
(16, 'Meningkatnya kualitas pelayanan pengelolaan keuangan', 1, 8),
(17, 'Meningkatnya kinerja keprotokolan', 1, 8),
(18, 'Terwujudnya Biro SDMU yang efektif, efisien, bersih, akuntabel dan berkinerja tinggi', 1, 8),
(19, 'Meningkatnya ketersediaan sarana dan prasarana Kementerian PANRB', 1, 8),
(20, 'Meningkatnya profesionalisme ASN Kementerian PANRB', 1, 8),
(21, 'Terwujudnya SDM Aparatur yang kompeten dan kompetitif', 1, 9),
(22, 'Terwujudnya Deputi SDM Aparatur yang efektif, efisien, bersih, akuntabel dan berkinerja tinggi', 1, 9),
(23, 'Peningkatan efektivitas pelaksanaan Reformasi Birokrasi Nasional', 1, 7),
(24, 'Meningkatnya akuntabilitas kinerja nasional ', 1, 7),
(25, 'Meningkatnya penerapan sistem integritas nasional ', 1, 7),
(26, 'Terwujudnya pengawasan atas pelaksanaan kebijakan ASN dan administrasi pemerintahan ', 1, 7),
(27, 'Terwujudnya Deputi RB, Akuntabilitas dan Pengawasan yang efektif, efisien, bersih, akuntabel, dan berkinerja tinggi ', 1, 7),
(28, 'Terwujudnya Organisasi K/L/D yang tepat fungsi, tepat ukuran, dan tepat proses', 1, 10),
(29, 'Terwujudnya Tata Kelola Pemerintahan yang berbasis elektronik', 1, 10),
(30, 'Terwujudnya Deputi Bidang Kelembagaan dan Tata Laksana yang efektif, efisien, bersih, dan berkinerja tinggi', 1, 10),
(31, 'Terwujudnya Kementerian PANRB yang akuntabel', 1, 11),
(32, 'Terwujudnya Sekretariat Kementerian PANRB yang akuntabel', 1, 11),
(33, 'Terwujudnya pengelolaan kerja sama yang efisien dan efektif', 1, 11),
(34, 'Terwujudnya Biro MKOK yang efektif, efisien, bersih dan berkinerja tinggi', 1, 11);

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
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

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
-- Indexes for table `rtl`
--
ALTER TABLE `rtl`
  ADD PRIMARY KEY (`id_rtl`);

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
  MODIFY `id_dampak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `indikator_organisasi`
--
ALTER TABLE `indikator_organisasi`
  MODIFY `id_indikator_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `kategori_risiko`
--
ALTER TABLE `kategori_risiko`
  MODIFY `id_kategori_risiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manajemen_risiko`
--
ALTER TABLE `manajemen_risiko`
  MODIFY `id_manajemen_risiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengendalian`
--
ALTER TABLE `pengendalian`
  MODIFY `id_pengendalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `risiko`
--
ALTER TABLE `risiko`
  MODIFY `id_risiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `rtl`
--
ALTER TABLE `rtl`
  MODIFY `id_rtl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `sasaran_organisasi`
--
ALTER TABLE `sasaran_organisasi`
  MODIFY `id_sasaran_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
