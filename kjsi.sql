-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2016 at 11:46 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kjsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dana`
--

CREATE TABLE `dana` (
  `id_dana` int(11) NOT NULL,
  `nama_dana` varchar(100) NOT NULL,
  `id_lpj` int(11) NOT NULL,
  `total_dana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_dana`
--

CREATE TABLE `detail_dana` (
  `id_detaildana` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `jumlah_dibeli` int(11) NOT NULL,
  `id_dana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_people`
--

CREATE TABLE `detail_people` (
  `id` int(11) NOT NULL,
  `id_people` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_lpj`
--

CREATE TABLE `dokumen_lpj` (
  `id_dokumen` int(11) NOT NULL,
  `nama_dokumen` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_lpj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kop_organisasi`
--

CREATE TABLE `kop_organisasi` (
  `id_koporganisasi` int(11) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kop_organisasi`
--

INSERT INTO `kop_organisasi` (`id_koporganisasi`, `nama_organisasi`, `deskripsi`) VALUES
(1, 'oke', 'okeeee');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_lpj`
--

CREATE TABLE `lampiran_lpj` (
  `id_lampiranlpj` int(11) NOT NULL,
  `nama_lampiran` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_lpj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_proposal`
--

CREATE TABLE `lampiran_proposal` (
  `id_lampiran` int(11) NOT NULL,
  `nama_lampiran` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_proposal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lpj`
--

CREATE TABLE `lpj` (
  `id_lpj` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nama_lpj` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tanggal_pemberian` date NOT NULL,
  `status_lpj` varchar(100) NOT NULL,
  `tanggal_persetujuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id_people` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(11) NOT NULL,
  `judul` text NOT NULL,
  `latar_belakang` text NOT NULL,
  `tujuan` text NOT NULL,
  `tema` text NOT NULL,
  `kegiatan` text NOT NULL,
  `peserta` text NOT NULL,
  `waktu` text NOT NULL,
  `tempat` text NOT NULL,
  `susunan_acara` text NOT NULL,
  `id_koporganisasi` int(11) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `status_proposal` varchar(32) NOT NULL,
  `tanggal_persetujuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `judul`, `latar_belakang`, `tujuan`, `tema`, `kegiatan`, `peserta`, `waktu`, `tempat`, `susunan_acara`, `id_koporganisasi`, `tanggal_pengajuan`, `status_proposal`, `tanggal_persetujuan`) VALUES
(1, 'ganti', 'dklfhsgjsgf', 'shdzshfshfs', 'dghsghjdfhgksq', 'skgshgsdh', 'smgoiyry', 'fjsghrhi', 'djghsjh', 'kasfnsghjh', 1, '0000-00-00', '', '0000-00-00'),
(2, 'coba ganti', 'dklfhsgjsgf', 'shdzshfshfs', 'dghsghjdfhgksq', 'skgshgsdh', 'smgoiyry', 'hiyaa', 'hati ', 'kasfnsghjh', 1, '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_koporganisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dana`
--
ALTER TABLE `dana`
  ADD PRIMARY KEY (`id_dana`),
  ADD KEY `id_lpj` (`id_lpj`);

--
-- Indexes for table `detail_dana`
--
ALTER TABLE `detail_dana`
  ADD PRIMARY KEY (`id_detaildana`),
  ADD KEY `id_dana` (`id_dana`);

--
-- Indexes for table `detail_people`
--
ALTER TABLE `detail_people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_people` (`id_people`,`id_proposal`),
  ADD KEY `id_proposal` (`id_proposal`);

--
-- Indexes for table `dokumen_lpj`
--
ALTER TABLE `dokumen_lpj`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_lpj` (`id_lpj`);

--
-- Indexes for table `kop_organisasi`
--
ALTER TABLE `kop_organisasi`
  ADD PRIMARY KEY (`id_koporganisasi`);

--
-- Indexes for table `lampiran_lpj`
--
ALTER TABLE `lampiran_lpj`
  ADD PRIMARY KEY (`id_lampiranlpj`),
  ADD KEY `id_lpj` (`id_lpj`);

--
-- Indexes for table `lampiran_proposal`
--
ALTER TABLE `lampiran_proposal`
  ADD PRIMARY KEY (`id_lampiran`),
  ADD KEY `id_proposal` (`id_proposal`);

--
-- Indexes for table `lpj`
--
ALTER TABLE `lpj`
  ADD PRIMARY KEY (`id_lpj`),
  ADD KEY `id_proposal` (`id_proposal`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id_people`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`),
  ADD KEY `id_koporganisasi` (`id_koporganisasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_koporganisasi` (`id_koporganisasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dana`
--
ALTER TABLE `dana`
  MODIFY `id_dana` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_dana`
--
ALTER TABLE `detail_dana`
  MODIFY `id_detaildana` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_people`
--
ALTER TABLE `detail_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokumen_lpj`
--
ALTER TABLE `dokumen_lpj`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kop_organisasi`
--
ALTER TABLE `kop_organisasi`
  MODIFY `id_koporganisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lampiran_lpj`
--
ALTER TABLE `lampiran_lpj`
  MODIFY `id_lampiranlpj` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lampiran_proposal`
--
ALTER TABLE `lampiran_proposal`
  MODIFY `id_lampiran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lpj`
--
ALTER TABLE `lpj`
  MODIFY `id_lpj` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id_people` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dana`
--
ALTER TABLE `dana`
  ADD CONSTRAINT `dana_ibfk_1` FOREIGN KEY (`id_lpj`) REFERENCES `lpj` (`id_lpj`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_dana`
--
ALTER TABLE `detail_dana`
  ADD CONSTRAINT `detail_dana_ibfk_1` FOREIGN KEY (`id_dana`) REFERENCES `dana` (`id_dana`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_people`
--
ALTER TABLE `detail_people`
  ADD CONSTRAINT `detail_people_ibfk_1` FOREIGN KEY (`id_proposal`) REFERENCES `proposal` (`id_proposal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_people_ibfk_2` FOREIGN KEY (`id_people`) REFERENCES `people` (`id_people`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dokumen_lpj`
--
ALTER TABLE `dokumen_lpj`
  ADD CONSTRAINT `dokumen_lpj_ibfk_1` FOREIGN KEY (`id_lpj`) REFERENCES `lpj` (`id_lpj`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lampiran_lpj`
--
ALTER TABLE `lampiran_lpj`
  ADD CONSTRAINT `lampiran_lpj_ibfk_1` FOREIGN KEY (`id_lpj`) REFERENCES `lpj` (`id_lpj`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lampiran_proposal`
--
ALTER TABLE `lampiran_proposal`
  ADD CONSTRAINT `lampiran_proposal_ibfk_1` FOREIGN KEY (`id_proposal`) REFERENCES `proposal` (`id_proposal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lpj`
--
ALTER TABLE `lpj`
  ADD CONSTRAINT `lpj_ibfk_1` FOREIGN KEY (`id_proposal`) REFERENCES `proposal` (`id_proposal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`id_koporganisasi`) REFERENCES `kop_organisasi` (`id_koporganisasi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_koporganisasi`) REFERENCES `kop_organisasi` (`id_koporganisasi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
