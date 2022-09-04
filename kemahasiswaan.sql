-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 11:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kemahasiswaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `judul_banner` varchar(100) NOT NULL DEFAULT '0',
  `deskripsi` text NOT NULL,
  `gambar_banner` varchar(150) DEFAULT NULL,
  `create_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `judul_banner`, `deskripsi`, `gambar_banner`, `create_at`) VALUES
(1, 'Banner 11', 'iki jnnsasajsbaksas 12222', '5.jpg', 20220127),
(2, 'Banner 2', 'asasa sdddsdvfsdfsf  fdsdw dawa qQSsas', '2.jpg', 1643786127),
(3, 'Banner 5', 'hfghfghfgf fgbfgfdgrdg 33443', '4.jpg', 20220127),
(5, 'Banner 4', 'SDSDSDAdgfdsfsdf fdvdfdsfs', '3.jpg', 20220127);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL DEFAULT '0',
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(150) NOT NULL DEFAULT '',
  `create_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `create_at`) VALUES
(1, 'Berita 1', 'ini adalah berita oenting yaaa', '5.jpg', 20220128),
(2, 'Berita 2', 'sdhsdhsuidhasuda sdaiusdhaiusdhiasd asdasd7asgdasdasydgasiydgasd asdasgdasiydgiasd asdasudyhausdhasd asdasdoiasdoiashdas dsdygsiydgasyd asdaysgdaiysdga sdaysgdiuasdgiasd asdahsudgasidas7das dasudguaisdgaisd asdiasduiasgidagsidas', '19.JPG', 1643819547),
(4, 'Berita 3', 'daushdasgda sdausdhasgd sadiuashdsad sdsauidhasgdyasgd sadusahdiuasgdasd asdhasdg8asyd asdadhiasgdasd asdasludiagsdas dasgdiuasgda sdashdiadgayd asdashdasid asdiuashdasiud asdausidhasd asduaisdiuasda sdiuashdiasgds', '31.JPG', 1643819631);

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `judul_berkas` varchar(150) NOT NULL DEFAULT '0',
  `nama_ormawa` varchar(150) NOT NULL DEFAULT '0',
  `jenis_berkas` varchar(150) NOT NULL DEFAULT '0',
  `berkas` varchar(150) NOT NULL DEFAULT '0',
  `create_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `judul_berkas`, `nama_ormawa`, `jenis_berkas`, `berkas`, `create_at`) VALUES
(3, 'berkas 1', 'Bem Faperta', 'Proposal', 'perilaku_siswa_mingguan_13-01-2022_(2).pdf', 20220128),
(4, 'berkas 2', 'Bem FEB', 'Proposal', 'file1.pdf', 1643727327);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_here`
--

CREATE TABLE `feedback_here` (
  `id_feedback_here` int(11) NOT NULL,
  `email` varchar(200) NOT NULL DEFAULT '0',
  `create_at` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_here`
--

INSERT INTO `feedback_here` (`id_feedback_here`, `email`, `create_at`) VALUES
(1, 'admin@uwp.ac.id', 1643860015),
(2, 'develop@gmail.com', 1643860062),
(3, 'ddsds', 1643860121),
(4, 'ft@uwp.ac.id', 1643862423);

-- --------------------------------------------------------

--
-- Table structure for table `foto_kegiatan`
--

CREATE TABLE `foto_kegiatan` (
  `id_foto_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(150) NOT NULL DEFAULT '0',
  `nama_ormawa` varchar(150) NOT NULL DEFAULT '0',
  `deskripsi_kegiatan` text NOT NULL,
  `foto_kegiatan` varchar(150) NOT NULL DEFAULT '',
  `status_acc` int(11) NOT NULL DEFAULT '0',
  `create_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto_kegiatan`
--

INSERT INTO `foto_kegiatan` (`id_foto_kegiatan`, `judul_kegiatan`, `nama_ormawa`, `deskripsi_kegiatan`, `foto_kegiatan`, `status_acc`, `create_at`) VALUES
(1, 'Kegiatan 1', 'Bem FEB', 'ygygduysd sysydyedgwyeud yygygygdededehhdgsdsdyuydsdgtfeuyr ergeyeetydgdvtysdsuyds sgdyusdsdusfds sdbsygfdusdgvusd sdbsyudsduysd sdgsbdyusgd sdysgdyusd sdgsdysgdyusds dsygdsygdsd sgydvsygdsd sydgsy', '8.JPG', 1, 1643874929),
(2, 'Kegiatan 2', 'Bem FBS', 'euwew89ew ew7ew9ey9w e7ehiufedifu efhfhudhdufhudiufd iugisgds dasygaydas dasydgasdgasd asdysadyasgdaysd sadysgadysagdas dasydgsaydgyasds dshdsuidgisdgisad sadsagdyasgdsa dsaygdsyudgyasgdyagsdgy', '7.JPG', 1, 1643876884),
(3, 'Kegiatan 3', 'Bem F.Psi', 'sygbusdgas dasygdasydas dasgdasiydgasuyd saduashdiusgdad sdgasyidgasd asdabsydgsaydas dsaydgasydgasd sadygsadyiasgdasd sadgbasyduigasud asdyasgbdyuasgdfasyd asdyasgdyausgdasjbduasd asudvasuydfas', '13.JPG', 0, 1643876937);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL DEFAULT '0',
  `isi_informasi` text NOT NULL,
  `file` varchar(200) NOT NULL DEFAULT '',
  `status_publik` varchar(100) NOT NULL DEFAULT '',
  `create_at` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul_informasi`, `isi_informasi`, `file`, `status_publik`, `create_at`) VALUES
(2, 'informasi 1', 'asddsds dysgda8da dasydgaisudgtas asdygasiudags8d7as ini umtuk umum aja ya', 'file2.pdf', 'umum', 1643878233),
(3, 'informasi 2', 'sdadsadassadsad asdasd asduiasd asduiasd aiusda sd', 'file4.pdf', 'ormawa', 1643731452),
(4, 'informasi 1 - 1', 'ini hanyab unutk simulasi informasi saja ya.. ', 'file5.pdf', 'bem', 1643736970),
(5, 'informasi 2 untuk umum', 'hyuw wyqgwqywgqygyqgwqqqqqqqqqyuyugwyuq qgwyqugwqw qwyqgwyqgwq wqwyqgwyqgyqgwyqgwydsydgs sdbsdygsyudsysus sysgys sdbsydsyudv', 'BUKU_Pendidikan_Kewarganegaraan_(1).pdf', 'umum', 1643878358);

-- --------------------------------------------------------

--
-- Table structure for table `informasi_kesejahteraan`
--

CREATE TABLE `informasi_kesejahteraan` (
  `id_informasi_kesejahteraan` int(11) NOT NULL,
  `judul_informasi` varchar(150) NOT NULL DEFAULT '0',
  `isi_informasi` text NOT NULL,
  `file_informasi` varchar(150) NOT NULL DEFAULT '',
  `create_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_kesejahteraan`
--

INSERT INTO `informasi_kesejahteraan` (`id_informasi_kesejahteraan`, `judul_informasi`, `isi_informasi`, `file_informasi`, `create_at`) VALUES
(2, 'informasi 2', 'eadsiodhsd sdusdhsdus dsudhsoidhsdos', 'perilaku_siswa_mingguan_13-01-2022_(1).pdf', 1643473388),
(3, 'informasi 1', 'ini informasi  kesejahteraan gyfauysagys asahsvuasa sasvuaysyuyuyyu yuuyuyuuy uyuyuyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyuuuuuuuuuuuu uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu uuuuuuuuuuuu uuuuuuuuuuuuuuuuuuuuuuuuug uhuhuuuuuuuuuuuuuuhuh  guyyf uhhhhhhhhhhhhhhhhhhhhhbbbbbyyyyyyyy uyyyyu  iu iuiiiiii iiiiiiiiiii iiiiiihhhhhhhhhhhyyyyyyyyyyyyyy 66666666666667777777 7777777777', 'file6.pdf', 1643877852);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_kesejahteraan`
--

CREATE TABLE `pengajuan_kesejahteraan` (
  `id_pengajuan_kesejahteraan` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL DEFAULT '0',
  `npm` int(11) NOT NULL DEFAULT '0',
  `prodi` varchar(50) NOT NULL DEFAULT '0',
  `semester` int(11) NOT NULL DEFAULT '0',
  `fakultas` varchar(50) NOT NULL DEFAULT '0',
  `ktm` varchar(150) NOT NULL DEFAULT '0',
  `ktp` varchar(150) DEFAULT NULL,
  `khs` varchar(150) DEFAULT NULL,
  `surat_aktif` varchar(150) NOT NULL DEFAULT '0',
  `sktm` varchar(150) NOT NULL DEFAULT '0',
  `surat_pernyataan_terdampak_covid` varchar(150) NOT NULL DEFAULT '0',
  `bidang_kesejahteraan` varchar(150) NOT NULL DEFAULT '0',
  `create_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_kesejahteraan`
--

INSERT INTO `pengajuan_kesejahteraan` (`id_pengajuan_kesejahteraan`, `nama`, `npm`, `prodi`, `semester`, `fakultas`, `ktm`, `ktp`, `khs`, `surat_aktif`, `sktm`, `surat_pernyataan_terdampak_covid`, `bidang_kesejahteraan`, `create_at`) VALUES
(2, 'Imilda Rahmi', 12344323, 'Administrasi Negara', 2, 'Fakultas Ilmu Sosial dan Politik', '5.JPG', '6.JPG', '7.JPG', '8.JPG', '12.JPG', '17.JPG', 'Internal', 1643622116),
(8, 'Aji Jaya', 1234221, 'Ekonomi Pembangunan', 4, 'Fakultas Ilmu Sosial dan Politik', 'data11.pdf', 'data21.pdf', 'data31.pdf', 'data41.pdf', 'data51.pdf', 'data61.pdf', 'Internal', 1643629409);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `judul_prestasi` varchar(100) NOT NULL DEFAULT '0',
  `isi_prestasi` text NOT NULL,
  `gambar_prestasi` varchar(150) NOT NULL DEFAULT '',
  `create_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `judul_prestasi`, `isi_prestasi`, `gambar_prestasi`, `create_at`) VALUES
(2, 'Prestasi 2', 'dksjdiossdnsds sdhsiods sdsdoisd sd9usdsud', '12.JPG', 1643475372),
(3, 'Prestasi 1', 'sADASDASDSYIADBIYSA uhduiwd edwyedgwdwe dwe87dgwd78gwd we87dgwedgwe dewydgewidgwe dewygfdewiudgw dwe6dgwedgwed wedgweuidgwe dweydgweuidgwe dweygdwudiweudgeuwyhfouwegfyuwetifdgjhewuf ewfyewgfyewofgwe fewuyfgweyufgwefgwe fwehygfweuiygfweuhfguywef', 'wpu.JPG', 1643813527),
(4, 'Prestasi 3', 'axasdhsuadhas dsauhdsaiud asd9ashdasud asd98has98das dasudasudgasd asdhasdgasd asdiuashduashdsaid as7dgasiuydhasiudhiuasd asdiuashduoashdiuashdiausdiuasd asdiuasdgiasgdiusgdas', '188926787_3949782631785106_3377613927334068713_n.jpg', 1643815063);

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kemahasiswaan`
--

CREATE TABLE `tentang_kemahasiswaan` (
  `id_tentang_kemahasiswaan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL DEFAULT '0',
  `isi` text NOT NULL,
  `gambar` varchar(150) NOT NULL DEFAULT '',
  `create_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kemahasiswaan`
--

INSERT INTO `tentang_kemahasiswaan` (`id_tentang_kemahasiswaan`, `judul`, `isi`, `gambar`, `create_at`) VALUES
(1, 'Profil Biro Kemahasiswaan dan Alumni', 'Biro yang menaungi kegiatan mahasiswa di bidang minat dan bakat di universitas wijaya putra.', '1.jpg', 1643884691);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama_depan`, `nama_belakang`, `username`, `password`, `role`, `foto`, `created_at`) VALUES
(11, 'admin', 'kemahasiswaan', 'kemahasiswaan@uwp.ac.id', '$2y$10$GZ3alqlm9sTiyatbn7QGLeZWR8y7BILeyyrpGHvdsdQviVI8p03y2', 'administrator', 'default.jpg', 20220127),
(13, 'admin', 'Bem FEB', 'feb@uwp.ac.id', '$2y$10$FeW4HR967Jvrd9Sj1yEq8u565yRwnarpis6qBIsvwT.h2cJccj0cS', 'bem', 'default.jpg', 2022),
(14, 'admin', 'UKM Terafo', 'terafo@uwp.ac.id', '$2y$10$BkcUrDNzSJlNO/rYKh/oxeb58Lju/8fRo/2C03SkPwEIEAURKlxba', 'ormawa', 'default.jpg', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id_visitor` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `online` varchar(300) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id_visitor`, `ip`, `date`, `hits`, `online`, `time`) VALUES
(1, '::1', '2022-02-02', 235, '1643821186', '2022-02-02 00:06:44'),
(2, '::1', '2022-02-03', 135, '1643884881', '2022-02-03 00:00:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `feedback_here`
--
ALTER TABLE `feedback_here`
  ADD PRIMARY KEY (`id_feedback_here`);

--
-- Indexes for table `foto_kegiatan`
--
ALTER TABLE `foto_kegiatan`
  ADD PRIMARY KEY (`id_foto_kegiatan`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `informasi_kesejahteraan`
--
ALTER TABLE `informasi_kesejahteraan`
  ADD PRIMARY KEY (`id_informasi_kesejahteraan`);

--
-- Indexes for table `pengajuan_kesejahteraan`
--
ALTER TABLE `pengajuan_kesejahteraan`
  ADD PRIMARY KEY (`id_pengajuan_kesejahteraan`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tentang_kemahasiswaan`
--
ALTER TABLE `tentang_kemahasiswaan`
  ADD PRIMARY KEY (`id_tentang_kemahasiswaan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id_visitor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback_here`
--
ALTER TABLE `feedback_here`
  MODIFY `id_feedback_here` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `foto_kegiatan`
--
ALTER TABLE `foto_kegiatan`
  MODIFY `id_foto_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `informasi_kesejahteraan`
--
ALTER TABLE `informasi_kesejahteraan`
  MODIFY `id_informasi_kesejahteraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajuan_kesejahteraan`
--
ALTER TABLE `pengajuan_kesejahteraan`
  MODIFY `id_pengajuan_kesejahteraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tentang_kemahasiswaan`
--
ALTER TABLE `tentang_kemahasiswaan`
  MODIFY `id_tentang_kemahasiswaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id_visitor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
