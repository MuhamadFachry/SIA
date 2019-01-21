-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 11:29 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no_admin` varchar(8) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no_admin`, `username`, `password`, `nama`, `email`) VALUES
('17113270', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Rangga kusuma', 'ranggavskusuma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(30) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `username`, `password`, `nama`, `jenis_kelamin`, `tempat`, `tgl_lahir`, `telepon`, `alamat`, `foto`) VALUES
('000000', '000000', '670b14728ad9902aecba32e22fa4f6bd', '-', 'Laki-laki', 'jakarta', '1993-01-01', 'telepon', 'disini', 'avatar.jpg'),
('1234567890135353536', 'saipullah', 'b4cae574b0e6a7a2db37c9246aafb659', 'Saipullah, S. Pd. I', 'Laki-laki', 'Bogor', '1980-09-24', '089649557643', 'Kp. Kekupu Pasir Putih', 'avatar.jpg'),
('3424525', 'sisti', '33a7adb882e2488a346380c69ab7e419', 'Sisti Safitri, S. Pd', 'Perempuan', 'Depok', '1993-09-27', '083874801050', 'Jl. H. Daing Cilodong', 'avatar.jpg'),
('34645654', 'fitriyah', '333a33b7401778a89c716eac346d9f99', 'Ety Fitriyah, S. Pd', 'Perempuan', 'Bogor', '1991-10-30', '089624666752', 'Jl. Abdul Wahab Sawangan', 'avatar.jpg'),
('3543344', 'rahmat', 'af2a4c9d4c4956ec9d6ba62213eed568', 'Rahmat Hidayat, S. Pd', 'Laki-laki', 'Bogor', '1974-06-12', '085288870289', 'Kp. Perigi Bedahan', 'avatar.jpg'),
('43254254', 'emah', '38c300be14c32a8f869042f917f2acb4', 'Emah Setianah, S. E', 'Perempuan', 'Bogor', '1976-02-08', '087882967991', 'Jl. Sukatani No. 4 Sawangan', 'avatar.jpg'),
('5654356', 'erni', '6e59bb96b06c40e477ba58d02cbe2b84', 'Erni Setiawati, S. Pd. I', 'Perempuan', 'Bogor', '1985-02-14', '089675688765', 'Bedahan Barat', 'avatar.jpg'),
('9924848', 'abdurohim', '82498f75a7f1abb42fd4eb375ba35738', 'Abdurrohim, MM. Pd', 'Laki-laki', 'Bogor', '1963-07-03', '085695651754', 'Kp. Perigi Bedahan', 'avatar.jpg'),
('999999', '-', '-', '-', 'Laki-laki', 'jakarta', '1993-01-01', 'telepon', 'disini', '-');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_matpel`
--

CREATE TABLE `jadwal_matpel` (
  `idjadwal` int(11) NOT NULL,
  `idkelas` int(11) NOT NULL,
  `idmatpel` int(11) NOT NULL,
  `hari` int(11) NOT NULL,
  `jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_matpel`
--

INSERT INTO `jadwal_matpel` (`idjadwal`, `idkelas`, `idmatpel`, `hari`, `jam`) VALUES
(253, 8, 4, 0, 1),
(254, 8, 4, 0, 2),
(255, 8, 1, 0, 3),
(256, 8, 0, 0, 4),
(257, 8, 5, 0, 5),
(258, 8, 4, 0, 6),
(259, 8, 0, 0, 7),
(260, 8, 4, 0, 8),
(261, 8, 4, 1, 1),
(262, 8, 4, 1, 2),
(263, 8, 1, 1, 3),
(264, 8, 0, 1, 4),
(265, 8, 4, 1, 5),
(266, 8, 4, 1, 6),
(267, 8, 0, 1, 7),
(268, 8, 4, 1, 8),
(269, 8, 5, 2, 1),
(270, 8, 4, 2, 2),
(271, 8, 1, 2, 3),
(272, 8, 0, 2, 4),
(273, 8, 4, 2, 5),
(274, 8, 5, 2, 6),
(275, 8, 0, 2, 7),
(276, 8, 4, 2, 8),
(277, 8, 5, 3, 1),
(278, 8, 4, 3, 2),
(279, 8, 1, 3, 3),
(280, 8, 0, 3, 4),
(281, 8, 4, 3, 5),
(282, 8, 4, 3, 6),
(283, 8, 0, 3, 7),
(284, 8, 4, 3, 8),
(285, 8, 3, 4, 1),
(286, 8, 5, 4, 2),
(287, 8, 1, 4, 3),
(288, 8, 0, 4, 4),
(289, 8, 3, 4, 5),
(290, 8, 4, 4, 6),
(291, 8, 0, 4, 7),
(292, 8, 4, 4, 8),
(293, 8, 4, 5, 1),
(294, 8, 3, 5, 2),
(295, 8, 1, 5, 3),
(296, 8, 0, 5, 4),
(297, 8, 4, 5, 5),
(298, 8, 5, 5, 6),
(299, 8, 0, 5, 7),
(300, 8, 4, 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_ujian`
--

CREATE TABLE `jadwal_ujian` (
  `idjadwal_ujian` int(11) NOT NULL,
  `file` text NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_ujian`
--

INSERT INTO `jadwal_ujian` (`idjadwal_ujian`, `file`, `status`) VALUES
(4, '22-09-2017-1506062494-cvku.pdf', 'uts'),
(6, '22-09-2017-1506063530-CV-rangga.docx', 'uas');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `idjurusan` int(11) NOT NULL,
  `jurusan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`idjurusan`, `jurusan`) VALUES
(4, 'Teknik Komputer Jaringan'),
(5, 'Keperawatan'),
(6, 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(11) NOT NULL,
  `idjurusan` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tingkat` varchar(11) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `idjurusan`, `nip`, `tingkat`, `kelas`) VALUES
(12, 4, '34645654', 'XI', 'TKJ1'),
(13, 5, '5654356', 'XI', 'Kep1'),
(14, 6, '3424525', 'XI', 'MM1');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `idmateri` int(11) NOT NULL,
  `idmatpel` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`idmateri`, `idmatpel`, `nip`, `judul`, `file`) VALUES
(6, 5, '123456', 'materi1', '16-09-2017-1505552610-sff.pdf'),
(7, 5, '123456', 'test', '16-09-2017-1505558807-CV-rangga.docx');

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `idmatpel` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_matpel` varchar(30) NOT NULL,
  `kkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`idmatpel`, `nip`, `nama_matpel`, `kkm`) VALUES
(0, '0', 'Istirahat', 0),
(1, '0', 'Sholat dhuha', 0),
(2, '0', 'Sholat Jum\'at', 0),
(13, '1', 'Ekstrakulikuler', 0),
(16, '9924848', 'Baca Tulis Quran', 75),
(25, '1234567890135353536', 'PPKn', 75),
(26, '34645654', 'Bahasa Indonesia', 78),
(27, '3543344', 'PJOK', 77),
(28, '43254254', 'Seni Budaya', 75),
(29, '5654356', 'Seni Budaya', 75);

-- --------------------------------------------------------

--
-- Table structure for table `matpel_kelas`
--

CREATE TABLE `matpel_kelas` (
  `idmatpel_kelas` int(11) NOT NULL,
  `idkelas` int(11) NOT NULL,
  `idmatpel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matpel_kelas`
--

INSERT INTO `matpel_kelas` (`idmatpel_kelas`, `idkelas`, `idmatpel`) VALUES
(2, 8, 3),
(3, 8, 4),
(4, 8, 5),
(5, 9, 3),
(6, 8, 13),
(7, 8, 2),
(8, 12, 25);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int(11) NOT NULL,
  `idmatpel` int(11) NOT NULL,
  `idkelas` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`idnilai`, `idmatpel`, `idkelas`, `nis`, `nilai`) VALUES
(4, 3, 8, 123456, 80),
(5, 4, 8, 123456, 75),
(6, 5, 8, 123456, 80);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(10) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `idkelas` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `idkelas`, `username`, `password`, `nama`, `jenis_kelamin`, `tempat`, `tgl_lahir`, `telepon`, `alamat`, `foto`) VALUES
('123232', '2323232', 8, 'kampret', 'b6ecbac45c48a94105a88bf44a9eaf46', 'kampret', 'Laki-laki', 'tangerang', '1999-01-01', '0834387483743', 'kampret', 'avatar.jpg'),
('123456', '12334567', 8, 'subroto', '82b69bda80aeaa0d9f3d96e61b75ceaf', 'Subroto', 'Laki-laki', 'Tangerang', '1993-01-02', '087809845964', 'serdang', '22-09-2017-1506060575-bukti.PNG'),
('312321', '0012012948', 13, 'afriyanti', '0bfdcd8914a53e117fda8d10954810e8', 'Afriyanti', 'Perempuan', 'Jakarta', '2001-04-07', '08976547765', 'Puri Bukit Depok', 'avatar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `jadwal_matpel`
--
ALTER TABLE `jadwal_matpel`
  ADD PRIMARY KEY (`idjadwal`);

--
-- Indexes for table `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  ADD PRIMARY KEY (`idjadwal_ujian`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`idjurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`idmateri`);

--
-- Indexes for table `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`idmatpel`);

--
-- Indexes for table `matpel_kelas`
--
ALTER TABLE `matpel_kelas`
  ADD PRIMARY KEY (`idmatpel_kelas`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_matpel`
--
ALTER TABLE `jadwal_matpel`
  MODIFY `idjadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT for table `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  MODIFY `idjadwal_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `idjurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `idmateri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `matpel`
--
ALTER TABLE `matpel`
  MODIFY `idmatpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `matpel_kelas`
--
ALTER TABLE `matpel_kelas`
  MODIFY `idmatpel_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
