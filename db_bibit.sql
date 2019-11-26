-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2019 at 02:54 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bibit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(191) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `username`, `password`, `level`) VALUES
(1, 'admin', '$2y$10$Nd/nw2rJeBWnmdDHfXF7kuYOYbgeCH04x4d4mPIgSldlXAyU21ZLO', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `informasi_id` int(11) NOT NULL,
  `judul_informasi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`informasi_id`, `judul_informasi`, `keterangan`) VALUES
(1, 'Tentang Kami', '<h3 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>UD. DWI PUTRA<br></strong></span></h3>\r\n<ul><li><br><span style=\"font-size:16px\">&nbsp;Desa Bangun Rejo adalah desa yang terdapat kecamatan kinali \r\nkabupaten Pasaman Barat, Di desa ini banyak pengusaha menengah kebawah \r\nyang meproduksi bibit sawit seerta penjualanya salah satu nya yaitu UD. \r\nDWI PUTRA Merupakan home industri kecil yang menampung serta mwnyalurkan\r\n SDA pada desa Bangun Rejo. \r\n						<br>&nbsp;\r\n						</span></li><li><span style=\"font-size:16px\">Pada tahun 2004  UD DWI PUTRA didirikan Oleh Bapak Jakim \r\nselaku pemilik serta Pimpinan pada UD. DWI PUTRA dan kariawanya hanya \r\ntetangga dan sanak keluarga dan pada akhirnya merekrut anggota dari luar\r\n kota untuk pengantaran yang diluar. Pada UD. DWI PUTRA Hingga Pada \r\ntahun 2017 UD. DWI Putra Memiliki 4 (empat) Kendaraan Truk pribadi dalam\r\n untuk mengantrakan Bibit sawit ke pemesan baik dari dalam kota maupun \r\nluar daerah.\r\n				</span></li></ul>\r\n\r\n<p></p>'),
(2, 'Cara Pemesanan', '<p style=\"text-align:justify\">1. Klik pada tombol \'Beli\' pada barang yang ingin Anda beli/pesan.</p>\r\n\r\n<p style=\"text-align:justify\">2. Barang yang Anda beli/pesan akan masuk ke dalam Keranjang Belanja. Anda dapat menentukan berapa jumlah yang akan dibeli, kemudian klik tombol \'Simpan\'.</p>\r\n\r\n<p style=\"text-align:justify\">3. Jika sudah selesai, klik tombol \'Selesai Belanja\' maka akan tampil data pembeli beserta barang yang dibeli/dipesannya. kemudian klik tombol \'Proses Order\' maka akan tampil total pembayaran serta nomor rekening pembayaran.</p>\r\n\r\n<p style=\"text-align:justify\">4. Apabila telah melakukan pembayaran, maka barang yang dibeli/dipesan akan segera dikirimkan.</p>\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kabkota`
--

CREATE TABLE `tb_kabkota` (
  `kabkota_id` int(4) NOT NULL,
  `nama_kabkota` varchar(50) NOT NULL,
  `provinsi_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kabkota`
--

INSERT INTO `tb_kabkota` (`kabkota_id`, `nama_kabkota`, `provinsi_id`) VALUES
(1, 'JAKARTA PUSAT', 1),
(2, 'JAKARTA BARAT', 1),
(3, 'JAKARTA SELATAN', 1),
(4, 'JAKARTA TIMUR', 1),
(5, 'JAKARTA UTARA', 1),
(6, 'KEPULAUAN SERIBU', 1),
(7, 'TANGERANG', 2),
(8, 'TANGERANG SELATAN', 2),
(9, 'BOGOR', 3),
(10, 'DEPOK', 3),
(11, 'BEKASI', 3),
(12, 'MEDAN', 4),
(13, 'DELI SERDANG', 4),
(14, 'TEBING TINGGI', 4),
(15, 'BINJAI', 4),
(16, 'LANGKAT', 4),
(17, 'SERDANG BEDAGAI', 4),
(18, 'PEMATANG SIANTAR', 4),
(19, 'SIMALUNGUN', 4),
(20, 'ASAHAN', 4),
(21, 'BATU BARA', 4),
(22, 'TANJUNG BALAI', 4),
(23, 'LABUHAN BATU', 4),
(24, 'LABUHAN BATU UTARA', 4),
(25, 'LABUHAN BATU SELATAN', 4),
(26, 'KARO', 4),
(27, 'DAIRI', 4),
(28, 'PAKPAK BHARAT', 4),
(29, 'TOBA SAMOSIR', 4),
(30, 'SAMOSIR', 4),
(31, 'TAPANULI UTARA', 4),
(32, 'HUMBANG HASUNDUTAN', 4),
(33, 'SIBOLGA', 4),
(34, 'TAPANULI TENGAH', 4),
(35, 'PADANG SIDEMPUAN', 4),
(36, 'TAPANULI SELATAN', 4),
(37, 'PADANG LAWAS UTARA', 4),
(38, 'PADANG LAWAS', 4),
(39, 'GUNUNGSITOLI', 4),
(40, 'NIAS BARAT', 4),
(41, 'NIAS UTARA', 4),
(42, 'NIAS', 4),
(43, 'NIAS SELATAN', 4),
(44, 'MANDAILING NATAL', 4),
(45, 'BANDA ACEH', 5),
(46, 'ACEH BESAR', 5),
(47, 'SABANG', 5),
(48, 'ACEH BARAT', 5),
(49, 'ACEH JAYA', 5),
(50, 'NAGAN RAYA', 5),
(51, 'ACEH SELATAN', 5),
(52, 'ACEH BARAT DAYA', 5),
(53, 'SIMEULUE', 5),
(54, 'PIDIE', 5),
(55, 'PIDIE JAYA', 5),
(56, 'BIREUEN', 5),
(57, 'LHOKSEUMAWE', 5),
(58, 'ACEH UTARA', 5),
(59, 'LANGSA', 5),
(60, 'ACEH TIMUR', 5),
(61, 'ACEH TAMIANG', 5),
(62, 'ACEH TENGAH', 5),
(63, 'BENER MERIAH', 5),
(64, 'ACEH TENGGARA', 5),
(65, 'GAYO LUES', 5),
(66, 'SUBULUSSALAM', 5),
(67, 'ACEH SINGKIL', 5),
(68, 'PADANG', 6),
(69, 'KEPULAUAN MENTAWAI', 6),
(70, 'PARIAMAN', 6),
(71, 'PADANG PARIAMAN', 6),
(72, 'PESISIR SELATAN', 6),
(73, 'BUKITTINGGI', 6),
(74, 'AGAM', 6),
(75, 'PAYAKUMBUH', 6),
(76, 'LIMA PULUH KOTO/KOTA', 6),
(77, 'PASAMAN', 6),
(78, 'PASAMAN BARAT', 6),
(79, 'PADANG PANJANG', 6),
(80, 'TANAH DATAR', 6),
(81, 'SOLOK', 6),
(82, 'SAWAH LUNTO', 6),
(83, 'SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)', 6),
(84, 'DHARMASRAYA', 6),
(85, 'SOLOK SELATAN', 6),
(86, 'PEKANBARU', 7),
(87, 'PELALAWAN', 7),
(88, 'KAMPAR', 7),
(89, 'ROKAN HULU', 7),
(90, 'SIAK', 7),
(91, 'BENGKALIS', 7),
(92, 'KEPULAUAN MERANTI', 7),
(93, 'DUMAI', 7),
(94, 'ROKAN HILIR', 7),
(95, 'TANJUNG PINANG', 8),
(96, 'BINTAN', 8),
(97, 'INDRAGIRI HILIR', 7),
(98, 'INDRAGIRI HULU', 7),
(99, 'BATAM', 8),
(100, 'KUANTAN SINGINGI', 7),
(101, 'KARIMUN', 8),
(102, 'NATUNA', 8),
(103, 'KEPULAUAN ANAMBAS', 8),
(104, 'LINGGA', 8),
(105, 'PALEMBANG', 9),
(106, 'OGAN KOMERING ILIR', 9),
(107, 'OGAN ILIR', 9),
(108, 'MUSI BANYUASIN', 9),
(109, 'MUSI RAWAS', 9),
(110, 'BANYUASIN', 9),
(111, 'PRABUMULIH', 9),
(112, 'MUARA ENIM', 9),
(113, 'LAHAT', 9),
(114, 'EMPAT LAWANG', 9),
(115, 'PAGAR ALAM', 9),
(116, 'LUBUK LINGGAU', 9),
(117, 'OGAN KOMERING ULU', 9),
(118, 'OGAN KOMERING ULU TIMUR', 9),
(119, 'OGAN KOMERING ULU SELATAN', 9),
(120, 'PANGKAL PINANG', 10),
(121, 'BANGKA', 10),
(122, 'BANGKA BARAT', 10),
(123, 'BELITUNG', 10),
(124, 'BELITUNG TIMUR', 10),
(125, 'BANGKA TENGAH', 10),
(126, 'BANGKA SELATAN', 10),
(127, 'METRO', 11),
(128, 'LAMPUNG TENGAH', 11),
(129, 'LAMPUNG TIMUR', 11),
(130, 'TULANG BAWANG BARAT', 11),
(131, 'LAMPUNG UTARA', 11),
(132, 'TULANG BAWANG', 11),
(133, 'MESUJI', 11),
(134, 'WAY KANAN', 11),
(135, 'LAMPUNG BARAT', 11),
(136, 'PESISIR BARAT', 11),
(137, 'BANDAR LAMPUNG', 11),
(138, 'LAMPUNG SELATAN', 11),
(139, 'PESAWARAN', 11),
(140, 'PRINGSEWU', 11),
(141, 'TANGGAMUS', 11),
(142, 'JAMBI', 12),
(143, 'MUARO JAMBI', 12),
(144, 'TANJUNG JABUNG BARAT', 12),
(145, 'TANJUNG JABUNG TIMUR', 12),
(146, 'BATANG HARI', 12),
(147, 'SUNGAIPENUH', 12),
(148, 'KERINCI', 12),
(149, 'BUNGO', 12),
(150, 'TEBO', 12),
(151, 'MERANGIN', 12),
(152, 'SAROLANGUN', 12),
(153, 'BENGKULU', 13),
(154, 'BENGKULU UTARA', 13),
(155, 'BENGKULU TENGAH', 13),
(156, 'BENGKULU SELATAN', 13),
(157, 'MUKO MUKO', 13),
(158, 'SELUMA', 13),
(159, 'KAUR', 13),
(160, 'REJANG LEBONG', 13),
(161, 'LEBONG', 13),
(162, 'KEPAHIANG', 13),
(163, 'BANDUNG', 3),
(164, 'BANDUNG BARAT', 3),
(165, 'CIMAHI', 3),
(166, 'PURWAKARTA', 3),
(167, 'SUBANG', 3),
(168, 'KARAWANG', 3),
(169, 'SERANG', 2),
(170, 'PANDEGLANG', 2),
(171, 'LEBAK', 2),
(172, 'CILEGON', 2),
(173, 'SUKABUMI', 3),
(174, 'CIANJUR', 3),
(175, 'GARUT', 3),
(176, 'CIREBON', 3),
(177, 'INDRAMAYU', 3),
(178, 'SUMEDANG', 3),
(179, 'MAJALENGKA', 3),
(180, 'KUNINGAN', 3),
(181, 'TASIKMALAYA', 3),
(182, 'CIAMIS', 3),
(183, 'PANGANDARAN', 3),
(184, 'BANJAR', 3),
(185, 'SEMARANG', 14),
(186, 'SALATIGA', 14),
(187, 'PEKALONGAN', 14),
(188, 'BATANG', 14),
(189, 'KENDAL', 14),
(190, 'TEGAL', 14),
(191, 'BREBES', 14),
(192, 'PEMALANG', 14),
(193, 'BANYUMAS', 14),
(194, 'CILACAP', 14),
(195, 'PURBALINGGA', 14),
(196, 'BANJARNEGARA', 14),
(197, 'PURWOREJO', 14),
(198, 'KEBUMEN', 14),
(199, 'YOGYAKARTA', 15),
(200, 'BANTUL', 15),
(201, 'SLEMAN', 15),
(202, 'KULON PROGO', 15),
(203, 'GUNUNG KIDUL', 15),
(204, 'MAGELANG', 14),
(205, 'TEMANGGUNG', 14),
(206, 'WONOSOBO', 14),
(207, 'SURAKARTA (SOLO)', 14),
(208, 'SUKOHARJO', 14),
(209, 'KARANGANYAR', 14),
(210, 'SRAGEN', 14),
(211, 'BOYOLALI', 14),
(212, 'KLATEN', 14),
(213, 'WONOGIRI', 14),
(214, 'GROBOGAN', 14),
(215, 'BLORA', 14),
(216, 'PATI', 14),
(217, 'REMBANG', 14),
(218, 'KUDUS', 14),
(219, 'JEPARA', 14),
(220, 'DEMAK', 14),
(221, 'SURABAYA', 16),
(222, 'GRESIK', 16),
(223, 'SIDOARJO', 16),
(224, 'MOJOKERTO', 16),
(225, 'JOMBANG', 16),
(226, 'BOJONEGORO', 16),
(227, 'LAMONGAN', 16),
(228, 'TUBAN', 16),
(229, 'MADIUN', 16),
(230, 'MAGETAN', 16),
(231, 'NGAWI', 16),
(232, 'PONOROGO', 16),
(233, 'PACITAN', 16),
(234, 'KEDIRI', 16),
(235, 'NGANJUK', 16),
(236, 'MALANG', 16),
(237, 'BATU', 16),
(238, 'BLITAR', 16),
(239, 'TULUNGAGUNG', 16),
(240, 'TRENGGALEK', 16),
(241, 'PASURUAN', 16),
(242, 'PROBOLINGGO', 16),
(243, 'LUMAJANG', 16),
(244, 'JEMBER', 16),
(245, 'BONDOWOSO', 16),
(246, 'SITUBONDO', 16),
(247, 'BANYUWANGI', 16),
(248, 'BANGKALAN', 16),
(249, 'SAMPANG', 16),
(250, 'PAMEKASAN', 16),
(251, 'SUMENEP', 16),
(252, 'BANJARMASIN', 17),
(253, 'BARITO KUALA', 17),
(254, 'BANJARBARU', 17),
(255, 'TANAH LAUT', 17),
(256, 'TAPIN', 17),
(257, 'HULU SUNGAI SELATAN', 17),
(258, 'HULU SUNGAI TENGAH', 17),
(259, 'HULU SUNGAI UTARA', 17),
(260, 'TABALONG', 17),
(261, 'BALANGAN', 17),
(262, 'KOTABARU', 17),
(263, 'TANAH BUMBU', 17),
(264, 'PALANGKA RAYA', 18),
(265, 'KAPUAS', 18),
(266, 'BARITO TIMUR', 18),
(267, 'BARITO SELATAN', 18),
(268, 'BARITO UTARA', 18),
(269, 'MURUNG RAYA', 18),
(270, 'KOTAWARINGIN BARAT', 18),
(271, 'LAMANDAU', 18),
(272, 'SUKAMARA', 18),
(273, 'SERUYAN', 18),
(274, 'KOTAWARINGIN TIMUR', 18),
(275, 'KATINGAN', 18),
(276, 'GUNUNG MAS', 18),
(277, 'PULANG PISAU', 18),
(278, 'SAMARINDA', 19),
(279, 'KUTAI KARTANEGARA', 19),
(280, 'BONTANG', 19),
(281, 'KUTAI TIMUR', 19),
(282, 'KUTAI BARAT', 19),
(283, 'BALIKPAPAN', 19),
(284, 'PENAJAM PASER UTARA', 19),
(285, 'PASER', 19),
(286, 'TARAKAN', 20),
(287, 'TANA TIDUNG', 20),
(288, 'MALINAU', 20),
(289, 'BULUNGAN (BULONGAN)', 20),
(290, 'BERAU', 19),
(291, 'NUNUKAN', 20),
(292, 'PONTIANAK', 21),
(293, 'KUBU RAYA', 21),
(294, 'SANGGAU', 21),
(295, 'SINTANG', 21),
(296, 'KAPUAS HULU', 21),
(297, 'KETAPANG', 21),
(298, 'KAYONG UTARA', 21),
(299, 'SINGKAWANG', 21),
(300, 'SAMBAS', 21),
(301, 'BENGKAYANG', 21),
(302, 'LANDAK', 21),
(303, 'SEKADAU', 21),
(304, 'MELAWI', 21),
(305, 'DENPASAR', 22),
(306, 'BADUNG', 22),
(307, 'GIANYAR', 22),
(308, 'BANGLI', 22),
(309, 'KLUNGKUNG', 22),
(310, 'KARANGASEM', 22),
(311, 'BULELENG', 22),
(312, 'TABANAN', 22),
(313, 'JEMBRANA', 22),
(314, 'MATARAM', 23),
(315, 'LOMBOK BARAT', 23),
(316, 'LOMBOK UTARA', 23),
(317, 'LOMBOK TENGAH', 23),
(318, 'LOMBOK TIMUR', 23),
(319, 'BIMA', 23),
(320, 'DOMPU', 23),
(321, 'SUMBAWA', 23),
(322, 'SUMBAWA BARAT', 23),
(323, 'KUPANG', 24),
(324, 'SABU RAIJUA', 24),
(325, 'TIMOR TENGAH SELATAN', 24),
(326, 'TIMOR TENGAH UTARA', 24),
(327, 'BELU', 24),
(328, 'ALOR', 24),
(329, 'ROTE NDAO', 24),
(330, 'SIKKA', 24),
(331, 'ENDE', 24),
(332, 'FLORES TIMUR', 24),
(333, 'NGADA', 24),
(334, 'NAGEKEO', 24),
(335, 'MANGGARAI', 24),
(336, 'MANGGARAI TIMUR', 24),
(337, 'LEMBATA', 24),
(338, 'MANGGARAI BARAT', 24),
(339, 'SUMBA TIMUR', 24),
(340, 'SUMBA BARAT', 24),
(341, 'SUMBA BARAT DAYA', 24),
(342, 'SUMBA TENGAH', 24),
(343, 'MAKASSAR', 25),
(344, 'GOWA', 25),
(345, 'BONE', 25),
(346, 'MAROS', 25),
(347, 'PANGKAJENE KEPULAUAN', 25),
(348, 'BARRU', 25),
(349, 'SOPPENG', 25),
(350, 'WAJO', 25),
(351, 'PAREPARE', 25),
(352, 'PINRANG', 25),
(353, 'POLEWALI MANDAR', 26),
(354, 'MAMUJU', 26),
(355, 'MAMASA', 26),
(356, 'MAJENE', 26),
(357, 'MAMUJU UTARA', 26),
(358, 'SIDENRENG RAPPANG/RAPANG', 25),
(359, 'SINJAI', 25),
(360, 'ENREKANG', 25),
(361, 'TANA TORAJA', 25),
(362, 'TORAJA UTARA', 25),
(363, 'LUWU UTARA', 25),
(364, 'PALOPO', 25),
(365, 'LUWU', 25),
(366, 'LUWU TIMUR', 25),
(367, 'TAKALAR', 25),
(368, 'JENEPONTO', 25),
(369, 'BANTAENG', 25),
(370, 'BULUKUMBA', 25),
(371, 'SELAYAR (KEPULAUAN SELAYAR)', 25),
(372, 'KENDARI', 27),
(373, 'KONAWE', 27),
(374, 'KONAWE UTARA', 27),
(375, 'KONAWE SELATAN', 27),
(376, 'KOLAKA', 27),
(377, 'MUNA', 27),
(378, 'BUTON UTARA', 27),
(379, 'BAU-BAU', 27),
(380, 'BUTON', 27),
(381, 'BOMBANA', 27),
(382, 'WAKATOBI', 27),
(383, 'KOLAKA UTARA', 27),
(384, 'PALU', 28),
(385, 'SIGI', 28),
(386, 'DONGGALA', 28),
(387, 'PARIGI MOUTONG', 28),
(388, 'TOLI-TOLI', 28),
(389, 'BUOL', 28),
(390, 'POSO', 28),
(391, 'TOJO UNA-UNA', 28),
(392, 'BANGGAI', 28),
(393, 'BANGGAI KEPULAUAN', 28),
(394, 'MOROWALI', 28),
(395, 'MANADO', 29),
(396, 'MINAHASA SELATAN', 29),
(397, 'MINAHASA UTARA', 29),
(398, 'MINAHASA', 29),
(399, 'TOMOHON', 29),
(400, 'BITUNG', 29),
(401, 'KOTAMOBAGU', 29),
(402, 'BOLAANG MONGONDOW (BOLMONG)', 29),
(403, 'BOLAANG MONGONDOW UTARA', 29),
(404, 'BOLAANG MONGONDOW SELATAN', 29),
(405, 'BOLAANG MONGONDOW TIMUR', 29),
(406, 'KEPULAUAN SANGIHE', 29),
(407, 'KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)', 29),
(408, 'KEPULAUAN TALAUD', 29),
(409, 'MINAHASA TENGGARA', 29),
(410, 'GORONTALO', 30),
(411, 'GORONTALO UTARA', 30),
(412, 'BOALEMO', 30),
(413, 'POHUWATO', 30),
(414, 'BONE BOLANGO', 30),
(415, 'AMBON', 31),
(416, 'MALUKU BARAT DAYA', 31),
(417, 'MALUKU TENGGARA BARAT', 31),
(418, 'MALUKU TENGAH', 31),
(419, 'BURU SELATAN', 31),
(420, 'SERAM BAGIAN TIMUR', 31),
(421, 'SERAM BAGIAN BARAT', 31),
(422, 'BURU', 31),
(423, 'MALUKU TENGGARA', 31),
(424, 'TUAL', 31),
(425, 'KEPULAUAN ARU', 31),
(426, 'TERNATE', 32),
(427, 'HALMAHERA BARAT', 32),
(428, 'HALMAHERA UTARA', 32),
(429, 'HALMAHERA SELATAN', 32),
(430, 'PULAU MOROTAI', 32),
(431, 'KEPULAUAN SULA', 32),
(432, 'TIDORE KEPULAUAN', 32),
(433, 'HALMAHERA TENGAH', 32),
(434, 'HALMAHERA TIMUR', 32),
(435, 'BIAK NUMFOR', 33),
(436, 'SUPIORI', 33),
(437, 'KEPULAUAN YAPEN (YAPEN WAROPEN)', 33),
(438, 'WAROPEN', 33),
(439, 'MAMBERAMO RAYA', 33),
(440, 'MANOKWARI', 34),
(441, 'PEGUNUNGAN ARFAK', 34),
(442, 'MANOKWARI SELATAN', 34),
(443, 'TELUK WONDAMA', 34),
(444, 'TELUK BINTUNI', 34),
(445, 'TAMBRAUW', 34),
(446, 'SORONG', 34),
(447, 'SORONG SELATAN', 34),
(448, 'MAYBRAT', 34),
(449, 'RAJA AMPAT', 34),
(450, 'FAKFAK', 34),
(451, 'KAIMANA', 34),
(452, 'PANIAI', 33),
(453, 'DEIYAI (DELIYAI)', 33),
(454, 'INTAN JAYA', 33),
(455, 'NABIRE', 33),
(456, 'DOGIYAI', 33),
(457, 'PUNCAK JAYA', 33),
(458, 'PUNCAK', 33),
(459, 'JAYAPURA', 33),
(460, 'SARMI', 33),
(461, 'KEEROM', 33),
(462, 'JAYAWIJAYA', 33),
(463, 'MAMBERAMO TENGAH', 33),
(464, 'LANNY JAYA', 33),
(465, 'TOLIKARA', 33),
(466, 'NDUGA', 33),
(467, 'YAHUKIMO', 33),
(468, 'PEGUNUNGAN BINTANG', 33),
(469, 'YALIMO', 33),
(470, 'MERAUKE', 33),
(471, 'BOVEN DIGOEL', 33),
(472, 'ASMAT', 33),
(473, 'MAPPI', 33),
(474, 'MIMIKA', 33);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Sawit Marihat'),
(2, 'Sawit Sucfindo'),
(3, 'Sawit Clone'),
(22, 'Sawit MK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `keranjang_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `tgl_keranjang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`keranjang_id`, `member_id`, `produk_id`, `jumlah_beli`, `tgl_keranjang`) VALUES
(3, 4, 20, 1, '2019-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konfirmasi`
--

CREATE TABLE `tb_konfirmasi` (
  `konfirmasi_id` int(11) NOT NULL,
  `transaksi_id` varchar(50) NOT NULL,
  `bank_pengirim` varchar(50) NOT NULL,
  `bank_penerima` varchar(50) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `tgl_transfer` date NOT NULL,
  `jumlah_transfer` int(11) NOT NULL,
  `bukti_transfer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `member_id` int(11) NOT NULL,
  `member_nama` varchar(50) NOT NULL,
  `member_email` varchar(50) NOT NULL,
  `member_nohp` varchar(50) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `provinsi_id` int(11) NOT NULL,
  `kabkota_id` int(11) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `password` varchar(100) NOT NULL,
  `member_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`member_id`, `member_nama`, `member_email`, `member_nohp`, `tgl_daftar`, `provinsi_id`, `kabkota_id`, `kode_pos`, `password`, `member_alamat`) VALUES
(1, 'Rafi Sahendra', 'rafisaehndra@gmail.com', '085363229539', '2019-11-20', 1, 2, '27684', 'admin', 'Padang Panjang'),
(4, 'PDO Only', 'ayunda@gmail.com', '085656565656', '2019-11-24', 7, 30, '27481', '2df8c55d47933d5ba55c62996a9bb976', 'Sijunjuang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ongkir`
--

CREATE TABLE `tb_ongkir` (
  `ongkir_id` int(11) NOT NULL,
  `kabkota_id` int(11) NOT NULL,
  `provinsi_id` int(11) NOT NULL,
  `ongkos_kirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ongkir`
--

INSERT INTO `tb_ongkir` (`ongkir_id`, `kabkota_id`, `provinsi_id`, `ongkos_kirim`) VALUES
(3, 12, 4, 70000),
(4, 204, 4, 90000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `produk_nama` varchar(50) NOT NULL,
  `gambar_produk` varchar(191) NOT NULL,
  `produk_tgl` date NOT NULL,
  `produk_harga` double NOT NULL,
  `produk_stok` int(11) NOT NULL,
  `produk_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `kategori_id`, `produk_nama`, `gambar_produk`, `produk_tgl`, `produk_harga`, `produk_stok`, `produk_keterangan`) VALUES
(17, 3, 'Sawit pasaman (Kinali)', '2019111907191577.jpg', '2019-11-20', 175000, 25, 'Sawit mantap'),
(18, 2, 'Sawit Dharmasraya', '201911200922177.jpg', '2019-11-20', 50000, 15, 'Padang panjang'),
(19, 22, 'Sawit Medan', '20191120103931sm1.jpg', '2019-11-23', 50000, 10, 'Ullamco perferendis '),
(20, 2, 'Sawit Kinali Raya', '20191124061130V1.jpg', '2019-11-24', 60000, 19, 'Ipsum recusandae Alyes'),
(21, 1, 'Sawit Cambah', '20191125051433cv2.jpg', '2019-11-25', 50000, 20, 'Mantap Syekali detail'),
(22, 2, 'sawit pariaman', '20191125055352flashdisk.jpg', '2019-11-25', 1600, 14, 'Nam ut voluptatem qd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `provinsi_id` int(2) NOT NULL,
  `nama_provinsi` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`provinsi_id`, `nama_provinsi`) VALUES
(1, 'DKI JAKARTA'),
(2, 'BANTEN'),
(3, 'JAWA BARAT'),
(4, 'SUMATERA UTARA'),
(5, 'NANGGROE ACEH DARUSSALAM (NAD)'),
(6, 'SUMATERA BARAT'),
(7, 'RIAU'),
(8, 'KEPULAUAN RIAU'),
(9, 'SUMATERA SELATAN'),
(10, 'BANGKA BELITUNG'),
(11, 'LAMPUNG'),
(12, 'JAMBI'),
(13, 'BENGKULU'),
(14, 'JAWA TENGAH'),
(15, 'DI YOGYAKARTA'),
(16, 'JAWA TIMUR'),
(17, 'KALIMANTAN SELATAN'),
(18, 'KALIMANTAN TENGAH'),
(19, 'KALIMANTAN TIMUR'),
(20, 'KALIMANTAN UTARA'),
(21, 'KALIMANTAN BARAT'),
(22, 'BALI'),
(23, 'NUSA TENGGARA BARAT (NTB)'),
(24, 'NUSA TENGGARA TIMUR (NTT)'),
(25, 'SULAWESI SELATAN'),
(26, 'SULAWESI BARAT'),
(27, 'SULAWESI TENGGARA'),
(28, 'SULAWESI TENGAH'),
(29, 'SULAWESI UTARA'),
(30, 'GORONTALO'),
(31, 'MALUKU'),
(32, 'MALUKU UTARA'),
(33, 'PAPUA'),
(34, 'PAPUA BARAT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `transaksi_id` varchar(15) NOT NULL,
  `tgl_transaksi` date NOT NULL DEFAULT current_timestamp(),
  `member_id` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Menunggu Pembayaran'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`transaksi_id`, `tgl_transaksi`, `member_id`, `total_bayar`, `status`) VALUES
('1', '2019-10-28', 52, 460000, 'Transaksi Selesai'),
('2', '2019-10-28', 52, 1860000, 'Transaksi Selesai'),
('3', '2019-10-28', 52, 280000, 'Proses Pengiriman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_detail`
--

CREATE TABLE `tb_transaksi_detail` (
  `detail_id` int(11) NOT NULL,
  `transaksi_id` varchar(15) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `jumlah_bayar` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`informasi_id`);

--
-- Indexes for table `tb_kabkota`
--
ALTER TABLE `tb_kabkota`
  ADD PRIMARY KEY (`kabkota_id`),
  ADD KEY `id_provinsi` (`provinsi_id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`keranjang_id`);

--
-- Indexes for table `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  ADD PRIMARY KEY (`konfirmasi_id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  ADD PRIMARY KEY (`ongkir_id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`provinsi_id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `id_konsumen` (`member_id`);

--
-- Indexes for table `tb_transaksi_detail`
--
ALTER TABLE `tb_transaksi_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `informasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `keranjang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  MODIFY `konfirmasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  MODIFY `ongkir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `provinsi_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_transaksi_detail`
--
ALTER TABLE `tb_transaksi_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
