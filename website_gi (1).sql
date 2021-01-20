-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 05:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_gi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_about`
--

CREATE TABLE `tabel_about` (
  `idAbout` int(11) NOT NULL,
  `visiAbout` text NOT NULL,
  `misiAbout` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_about`
--

INSERT INTO `tabel_about` (`idAbout`, `visiAbout`, `misiAbout`) VALUES
(1, 'To be a global company in the garment industry that always make continuous improvements on quality, security and work safety as well as legality. Long-term oriented relationships on mutual benefit of internal and external parties.', 'To be a global company in the garment industry that always make continuous improvements on quality, security and work safety as well as legality. Long-term oriented relationships on mutual benefit of internal and external parties.');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_achi`
--

CREATE TABLE `tabel_achi` (
  `idAchi` int(50) NOT NULL,
  `kategoriAchi` varchar(100) NOT NULL,
  `namaAchi` varchar(100) NOT NULL,
  `fotoAchi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_achi`
--

INSERT INTO `tabel_achi` (`idAchi`, `kategoriAchi`, `namaAchi`, `fotoAchi`) VALUES
(0, '', 'API-certificate', 'API-certificate.jpg'),
(0, '', 'bpjs', 'bpjs.jpg'),
(0, '', 'Disabilitas-certificate', 'Disabilitas-certificate.jpg'),
(0, '', 'KPPBC-certificate', 'KPPBC-certificate.jpg'),
(0, '', 'Oekotex-certificate', 'Oekotex-certificate.jpg'),
(0, '', 'Vokasi-certificate', 'Vokasi-certificate.jpg'),
(0, '', 'WRAP-Certificate', 'WRAP-Certificate.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `idAdmin` int(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_event`
--

CREATE TABLE `tabel_event` (
  `idEvent` int(11) NOT NULL,
  `namaEvent` varchar(100) NOT NULL,
  `deskripsiEvent` text NOT NULL,
  `tanggalEvent` date NOT NULL,
  `fotoEvent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_event`
--

INSERT INTO `tabel_event` (`idEvent`, `namaEvent`, `deskripsiEvent`, `tanggalEvent`, `fotoEvent`) VALUES
(1, 'Assistance Vocational', 'assistancevocational', '2020-12-12', 'assistancevocational.png');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kontak`
--

CREATE TABLE `tabel_kontak` (
  `idKontak` int(50) NOT NULL,
  `emailKontak` varchar(50) NOT NULL,
  `telephoneKontak` varchar(20) NOT NULL,
  `messageKontak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kontak`
--

INSERT INTO `tabel_kontak` (`idKontak`, `emailKontak`, `telephoneKontak`, `messageKontak`) VALUES
(1, 'efaef@fadf.co', '55655', 'saff'),
(2, 'adf2GFW@FGD', '4646', ''),
(3, 'adf2GFW@FGD', '4646', 'kyhf'),
(4, 'adf2GFW@FGD', '4646', 'kyhf'),
(5, 'af@d', '4646', 'asf'),
(6, 'af@d', '4646', 'asf'),
(7, 'af@d', '4646', 'asf'),
(8, 'af@d', '4646', 'asf'),
(9, 'af@d', '4646', 'asf'),
(10, 'af@d', '4646', 'asf'),
(11, 'af@d', '4646', 'asf'),
(12, 'af@d', '4646', 'asf'),
(13, 'af@d', '4646', 'asf'),
(14, 'af@d', '4646', 'asf'),
(15, 'af@d', '4646', 'asf'),
(16, 'af@d', '4646', 'asf'),
(17, 'af@d', '4646', 'asf'),
(18, 'af@d', '4646', 'asf'),
(19, 'af@d', '4646', 'asf'),
(20, 'af@d', '4646', 'asf'),
(21, 'af@d', '4646', 'asf'),
(22, 'af@d', '4646', 'asf'),
(23, 'adf2GFW@FGD', '4646', 'j57'),
(24, 'adf2GFW@FGD', '4646', 'j57'),
(25, 'adf2GFW@FGD', '4646', 'j57'),
(26, 'af@d', '4646', 'asc'),
(27, 'adf2GFW@FGD', '4646', 'as'),
(28, 'adf2GFW@FGD', '4646', 'as'),
(29, 'adf2GFW@FGD', '4646', 'as'),
(30, 'adf2GFW@FGD', '4646', 'as'),
(31, 'adf2GFW@FGD', '4646', 'as'),
(32, 'adf2GFW@FGD', '4646', 'as'),
(33, 'adf2GFW@FGD', 'a', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_produk`
--

CREATE TABLE `tabel_produk` (
  `idProduk` int(11) NOT NULL,
  `namaProduk` varchar(25) NOT NULL,
  `fotoProduk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_produk`
--

INSERT INTO `tabel_produk` (`idProduk`, `namaProduk`, `fotoProduk`) VALUES
(1, 'FILA', 'FILA.jpg'),
(10, 'nurse uniform', 'nurseuniform.jpg'),
(11, 'puma hitam', 'pumahitam.jpg'),
(12, 'SBW Panty', 'SBWPanty.jpg'),
(13, 'Spelding Cln', 'SpeldingCln.jpg'),
(14, 'suster', 'suster.jpg'),
(15, 't-shirt', 't-shirt.jpg'),
(16, 'vf 2', 'vf2.jpg'),
(17, 'bikini', 'bikini.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_visit`
--

CREATE TABLE `tabel_visit` (
  `idVisitor` int(11) NOT NULL,
  `idCard` int(50) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `visitDate` date NOT NULL DEFAULT current_timestamp(),
  `tujuan` varchar(25) NOT NULL,
  `test1` int(11) NOT NULL,
  `test2` int(11) NOT NULL,
  `test3` int(11) NOT NULL,
  `test4` int(11) NOT NULL,
  `test5` int(11) NOT NULL,
  `test6` int(11) NOT NULL,
  `test7` int(11) NOT NULL,
  `test8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_visit`
--

INSERT INTO `tabel_visit` (`idVisitor`, `idCard`, `fullname`, `wa`, `email`, `visitDate`, `tujuan`, `test1`, `test2`, `test3`, `test4`, `test5`, `test6`, `test7`, `test8`) VALUES
(45, 2147483647, 'budi susanto', '08249525', 'rezha@globalindointimates.com', '2021-01-21', 'Tamu', 1, 0, 1, 1, 0, 1, 1, 1),
(46, 1254, 'Andi', '082848458', 'andi@globalindointimates.com', '2021-01-24', 'Tamu', 1, 0, 0, 0, 0, 0, 0, 1),
(47, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(48, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(49, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(50, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(51, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(52, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(53, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(54, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(55, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(56, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(57, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(58, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(59, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(60, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(61, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(62, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(63, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(64, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(65, 645, 'ffg', '05285525', 'wd@fae.vom', '2021-01-14', 'Pelamar Pekerjaan', 0, 1, 0, 0, 0, 0, 1, 0),
(66, 0, '', '', '', '0000-00-00', '', 0, 0, 0, 0, 0, 0, 0, 0),
(67, 0, '', '', '', '0000-00-00', '', 0, 0, 0, 0, 0, 0, 0, 0),
(68, 0, '', '', '', '0000-00-00', '', 0, 0, 0, 0, 0, 0, 0, 0),
(69, 0, '', '', '', '0000-00-00', '', 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_about`
--
ALTER TABLE `tabel_about`
  ADD PRIMARY KEY (`idAbout`);

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tabel_event`
--
ALTER TABLE `tabel_event`
  ADD PRIMARY KEY (`idEvent`);

--
-- Indexes for table `tabel_kontak`
--
ALTER TABLE `tabel_kontak`
  ADD PRIMARY KEY (`idKontak`);

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `tabel_visit`
--
ALTER TABLE `tabel_visit`
  ADD PRIMARY KEY (`idVisitor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_about`
--
ALTER TABLE `tabel_about`
  MODIFY `idAbout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `idAdmin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_event`
--
ALTER TABLE `tabel_event`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_kontak`
--
ALTER TABLE `tabel_kontak`
  MODIFY `idKontak` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tabel_visit`
--
ALTER TABLE `tabel_visit`
  MODIFY `idVisitor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
