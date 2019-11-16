-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2019 at 09:35 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matim`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `tgl_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gambar_seo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_gambar`, `nama_gambar`, `gambar`, `tgl_add`, `gambar_seo`) VALUES
(1, '. Plt Penjabat Sekda Manggarai', 'A2', '2019-11-11 17:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori_seo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `kategori_seo`) VALUES
(2, 'BeritaManggarai Timur', 'beritamanggarai-timur'),
(3, 'Berita Umum', 'berita-umum'),
(4, 'Pemerintahan', 'pemerintahan'),
(5, 'Kesehatan', 'kesehatan'),
(6, 'Ekonomi', 'ekonomi'),
(7, 'Pendidikan', 'pendidikan'),
(8, 'Budaya Dan Wisata', 'budaya-dan-wisata');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id_sub` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_sub` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `sub_seo` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id_sub`, `id_kategori`, `nama_sub`, `gambar`, `sub_seo`, `keterangan`, `tgl_add`) VALUES
(1, 1, 'AGAS ANDREAS TEGASKAN CERDAS, ', 'A2', '', 'Bupati Manggari Timur, Agas Andreas, mengadiri puncak Peringatan hari Bulan Bakti Gotong Royong Masyarakat (BBGRM) ke 16, Hari Kesatuan Gerak (HKG) PKK ke 47, Hari Keluarga Nasional (HARGANAS) ke 26 dan Hari Kelahiran Teknologi Tepat Guna ke-5, Kamis (25/7/2019) di desa Nampar Sepang, Kecamatan Sambi Rampas.\r\n\r\nDihadapan ratusan peserta dan undangan yang hadir, Agas Andreas dalam sambutanya menyampaikan, semangat gotong royong dalam masyarakat, harus terus didorong untuk bertransformasi dalam mendukung pembangunan desa. Oleh karena itu, Agas Andreas mengajak setiap elemen masyarakat desa, terutama Lembaga Kemasyarakatan Desa ( LKD ) untuk menjadi mitra pemerintah desa, sehingga optimalisasi potensi desa mampu berdampak pada kesejahteraan bersama.\r\n\r\n“ Gagasan kita kedepannya adalah, membangun kabupaten Manggarai Timur dengan semangat gotong royong, yang melibatkan seluruh masyarakat. Yang dibutuhkan adalah semangat untuk saling memberi. Salah satu contohnya, membangun rumah masyarakat dengan sistem gotong royong. Dampaknya jelas. Tidak akan timbul, kecemburuan sosial, karena setiap rumah yang dibangun berasal dari keterlibatan banyak pihak “ kata Agas Andreas.\r\n\r\nBagi Agas Andreas, gotong royong harus menjadi cara hidup yang mendukung dan memperkuat kehidupan masyarakat, karena gotong royong merupakan pendekatan komunitas yang melibatkan peran berbagai pihak. Oleh karena itu, modal sosial ini akan dioptimalisasi dalam berbagai kerja bersama, untuk meningkatkan kesejahteraan masyarakat Manggarai di Kabupaten Manggarai Timur. “ Cerdas, sehat dan sejahtera adalah pilihan. Bukan Takdir. Oleh karena itu, kita memilih untuk cerdas, sehat dan sejahtera “ tegas Agas Andreas.\r\n\r\nDalam kesempatan ini, Agas Andreas juga mengklarifikasi berbagai penyesatan informasi yang terutama yang berkaitan dengan isu perbatasan. Hingga saat ini, Pemerintah telah melakukan berbagai langkah strategis, sehingga isu perbatasan bisa segera diselesaikan. Untuk itu, ia juga mengharapkan agar masyarakat menggunakan perangkat teknologi informasi dan komunikasi secara bijak.\r\n\r\nDalam kesempatan ini, Agas Andreas juga menyerahkan bantuan berupa 3 unit alat pertanian dan 5 unit rumah layak huni dari Bank NTT senilai 250 juta rupiah. Selain itu 2 unit posyandu juga diresmikan oleh Ketua PKK Kabupaten Manggarai Timur, Thresia Agas.\r\n\r\nKeberadaan fasilitas kesehatan ini, diharapkan mampu mendorong pembangunan kesehatan ibu dan anak di desa Nampar Sepang, Kacamatan Sambi Rampas. Keberadaan 2 unit Posyandu tersebut, akan melayani masyarakat yang berada di dusun Sambi Lodong dan Golo Mele.\r\n\r\nSebagai lokasi kegiatan BBGRM ke 16, diharapkan potensi desa Nampar Sepang, lebih dikenal masyarakat luas sebagai desa yang memiliki potensi pada sektor perikanan, pertanian dan pariwisata.  Dengan demimkian, BBGRM ini mampu mendorong terintegrasinya, berbagai agenda pembangunan antara Pemerintah Kabupaten dan desa. Serta mendorong keterlibatan pihak swasta untuk berinvestasi. ( MANGGARAITIMUR / MC / MUHAMAD YAMIN )', '2019-11-11 17:00:00'),
(2, 2, 'dsdsd', 'dsdsd.jpg', 'dsdsd', 'adddsd', '2019-11-12 07:41:11'),
(3, 2, 'dsdsd', 'dsdsd.jpg', 'dsdsd', 'adddsd', '2019-11-12 07:41:17'),
(4, 3, 'dsdsd', 'dsdsd.jpg', 'dsdsd', 'xxxx', '2019-11-12 07:42:41'),
(5, 0, 'PUCUK PUCUK KEBANGKITAN PKK KA', 'pucuk-pucuk-kebangkitan-pkk-ka', 'pucuk-pucuk-kebangkitan-pkk-ka', '<b>ManggaraiTimur, MC- </b>Puncak Hari Kesatuan Gerak (HKG) PKK ke 47, tingkat Kabupaten Manggarai Timur diperingati di desa Nampar Sepang, Kecamatan Sambi Rampas, Kamis (25/7/2019). Kegiatan yang digabungkan dengan Peringatan hari Bulan Bakti Gotong Royong Masyarakat (BBGRM) ke 16, Hari Keluarga Nasional (HARGANAS) ke 26 dan Hari Kelahiran Teknologi Tepat Guna ke-5 ini berlangsung meriah.', '2019-11-12 08:32:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id_sub`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
