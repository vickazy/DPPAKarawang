-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 06:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dppa_karawang`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti_pegawai`
--

CREATE TABLE `cuti_pegawai` (
  `id_cutipegawai` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `jenis_cuti` varchar(255) NOT NULL,
  `alasan_cuti` varchar(255) NOT NULL,
  `lama_cuti` varchar(255) NOT NULL,
  `ket_lama_cuti` varchar(225) NOT NULL,
  `dari_tanggal` varchar(255) NOT NULL,
  `sampai_dengan` varchar(255) NOT NULL,
  `panmud_kasubag` varchar(255) DEFAULT NULL,
  `panitera_sekretaris` varchar(255) DEFAULT NULL,
  `ketua` varchar(255) DEFAULT NULL,
  `app_panmud_kasubag` int(25) NOT NULL,
  `app_panitera_sekretaris` int(25) NOT NULL,
  `app_ketua` int(25) NOT NULL,
  `status_cuti` varchar(255) NOT NULL,
  `ket_status_cuti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti_pegawai`
--

INSERT INTO `cuti_pegawai` (`id_cutipegawai`, `id_pegawai`, `jenis_cuti`, `alasan_cuti`, `lama_cuti`, `ket_lama_cuti`, `dari_tanggal`, `sampai_dengan`, `panmud_kasubag`, `panitera_sekretaris`, `ketua`, `app_panmud_kasubag`, `app_panitera_sekretaris`, `app_ketua`, `status_cuti`, `ket_status_cuti`) VALUES
(13, 30, 'Cuti Besar', 'Liburan', '1', 'Minggu', '2020-07-15', '2020-07-24', NULL, '197208161994031002', NULL, 1, 1, 1, 'Disetujui', 'Pengajuan Cuti Diterima'),
(14, 34, 'Cuti Besar', 'Keluarga', '1', 'Minggu', '2020-07-11', '2020-07-03', '197006181990032001', '197208161994031002', NULL, 1, 1, 1, 'Disetujui', 'Pengajuan Cuti Diterima'),
(15, 14, 'Cuti Besar', 'Anak 3', '2', 'Minggu', '2020-07-15', '2020-07-10', NULL, NULL, '196507021992031005', 1, 1, 1, 'Disetujui', 'Pengajuan Cuti Diterima'),
(16, 30, 'Cuti Besar', 'Liburan', '1', 'Minggu', '2020-07-25', '2020-07-10', NULL, '197208161994031002', NULL, 1, 0, 1, 'Diajukan', 'Menunggu Approval Sekretaris'),
(17, 30, 'Cuti Besar', 'Liburan', '1', 'Tahun', '2020-07-18', '2020-07-02', NULL, '197208161994031002', NULL, 1, 0, 1, 'Diajukan', 'Menunggu Approval Sekretaris'),
(18, 31, 'Cuti Besar', 'Liburan', '1', 'Hari', '2020-07-17', '2020-07-10', NULL, '197208161994031002', NULL, 1, 0, 1, 'Diajukan', 'Menunggu Approval Sekretaris');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(25) NOT NULL,
  `nama_golongan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `nama_golongan`) VALUES
(1, 'IV A'),
(2, 'IV B'),
(3, 'IV C'),
(4, 'IV D'),
(5, 'IV E'),
(6, 'III A'),
(7, 'III B'),
(8, 'III C'),
(9, 'III D');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(25) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'KETUA'),
(2, 'WAKIL KETUA'),
(3, 'HAKIM UTAMA MUDA'),
(4, 'HAKIM MADYA UTAMA'),
(5, 'PANITERA'),
(6, 'SEKRETARIS'),
(7, 'PANMUD HUKUM'),
(8, 'PANMUD  GUGATAN'),
(9, 'PANMUD PERMOHONAN'),
(10, 'STAFF PELAKSANA PANMUD HUKUM'),
(11, 'STAFF PELAKSANA PANMUD GUGATAN'),
(12, 'STAFF PELAKSANA PANMUD PERMOHONAN'),
(13, 'PANITERA PENGGANTI'),
(14, 'KASUBAG KEPEGAWAIAN DAN ORTALA'),
(15, 'KASUBAG PERNCANAAN, IT DAN PELAPORAN'),
(16, 'KASUBAG UMUM DAN KEUANGAN'),
(17, 'STAFF PELAKSANA KEPEGAWAIAN DAN ORTALA'),
(18, 'STAFF PELAKSANA PERNCANAAN, IT DAN PELAPORAN'),
(19, 'STAFF PELAKSANA UMUM DAN KEUANGAN'),
(20, 'JURU SITA'),
(21, 'JURU SITA PENGGANTI');

-- --------------------------------------------------------

--
-- Table structure for table `kgb_pegawai`
--

CREATE TABLE `kgb_pegawai` (
  `id_kgbpegawai` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `kgb_terakhir` varchar(225) DEFAULT NULL,
  `kgb_datang` varchar(225) DEFAULT NULL,
  `keterangan` varchar(225) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kgb_pegawai`
--

INSERT INTO `kgb_pegawai` (`id_kgbpegawai`, `id_pegawai`, `kgb_terakhir`, `kgb_datang`, `keterangan`, `timestamp`) VALUES
(1, 18, '2020-07-03', '2020-08-07', 'S', '02-Jul-2020 / 23:41:56 pm'),
(2, 6, '2020-07-11', '2020-07-11', 'sdasd', '03-Jul-2020 / 00:32:36 am');

-- --------------------------------------------------------

--
-- Table structure for table `knp_pegawai`
--

CREATE TABLE `knp_pegawai` (
  `id_knppegawai` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `knp_terakhir` varchar(225) DEFAULT NULL,
  `knp_datang` varchar(225) DEFAULT NULL,
  `keterangan` varchar(225) NOT NULL,
  `pensiun` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knp_pegawai`
--

INSERT INTO `knp_pegawai` (`id_knppegawai`, `id_pegawai`, `knp_terakhir`, `knp_datang`, `keterangan`, `pensiun`, `timestamp`) VALUES
(1, 2, '2020-07-02', '2020-07-04', 'III B', '2020-07-25', '02-Jul-2020 / 23:38:45 pm'),
(2, 6, '2020-07-03', '2020-07-18', 'IV D', '2020-07-11', '03-Jul-2020 / 00:30:58 am');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(50) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `nip` varchar(225) NOT NULL,
  `id_jabatan` int(25) NOT NULL,
  `id_golongan` int(25) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `id_jabatan`, `id_golongan`, `unit_kerja`) VALUES
(1, 'Dr. M. BASIR, M.H.', '196507021992031005', 1, 3, 'PENGADILAN AGAMA KARAWANG'),
(2, 'Drs. H. ABU AEMAN, S.H., M.H.', '196008161988031007', 3, 4, 'PENGADILAN AGAMA KARAWANG'),
(3, 'Drs. H. R. A. SATIBI, S.H., M.H.', '196202151992031002', 4, 3, 'PENGADILAN AGAMA KARAWANG'),
(4, 'Dra. Hj. ERAWATI, S.H., M.H.', '195704071992032001', 4, 3, 'PENGADILAN AGAMA KARAWANG'),
(5, 'Drs. H. SYARIFUDIN, M.H.', '197002061994031004', 4, 3, 'PENGADILAN AGAMA KARAWANG'),
(6, 'H. ABDILLAH, S.H., M.H.', '195708191984031002', 3, 4, 'PENGADILAN AGAMA KARAWANG'),
(7, 'Dra. SITI MUNAWAROH, S.H.', '196708131992032001', 4, 3, 'PENGADILAN AGAMA KARAWANG'),
(8, 'Drs. MOCHAMAD SUMANTRI, S.H.', '196410301992031005', 4, 3, 'PENGADILAN AGAMA KARAWANG'),
(9, 'Drs. H. MOHD. ABDU A. RAMLY', '196305071991031004', 3, 4, 'PENGADILAN AGAMA KARAWANG'),
(10, 'Drs. H. A. SYUYUTI, M.Sy.', '196901031995031001', 4, 3, 'PENGADILAN AGAMA KARAWANG'),
(11, 'Drs. TAUHID, S.H., M.H.', '196403151991031002', 4, 3, 'PENGADILAN AGAMA KARAWANG'),
(12, 'Drs. Test Wakil Ketua S.kom', '196507021992031006', 2, 3, 'PENGADILAN AGAMA KARAWANG'),
(13, 'Drs. E. ARIFUDIN', '196311151993031004', 5, 1, 'PENGADILAN AGAMA KARAWANG'),
(14, 'ATO SUNARTO, S.Ag', '197208161994031002', 6, 1, 'PENGADILAN AGAMA KARAWANG'),
(15, 'ABDUL HAKIM, SH., SHI, M.H.', '196709172000121002', 7, 1, 'PENGADILAN AGAMA KARAWANG'),
(16, 'YUYU YULIANI, S.Ag.M.H.', '196211051983032004', 8, 1, 'PENGADILAN AGAMA KARAWANG'),
(17, 'ASNALI, S.Ag', '196303071992031005', 9, 9, 'PENGADILAN AGAMA KARAWANG'),
(18, 'Drs. Staff Panmud Hukum S.Kom', '196709172000121004', 10, 6, 'PENGADILAN AGAMA KARAWANG'),
(19, 'Drs. Staff Panmud Gugatan S.Kom', '196211051983032005', 11, 6, 'PENGADILAN AGAMA KARAWANG'),
(20, 'Drs. Staff Panmud Permohonan S.Kom', '196303071992031006', 12, 6, 'PENGADILAN AGAMA KARAWANG'),
(21, 'KHALIDA, S.Ag, M.H.', '197411022003122002', 13, 1, 'PENGADILAN AGAMA KARAWANG'),
(22, 'AHYA SYARIFUDDIN', '196011261981021003', 13, 8, 'PENGADILAN AGAMA KARAWANG'),
(23, 'AHMAD WASKITO, SEI', '197606082009041001', 13, 8, 'PENGADILAN AGAMA KARAWANG'),
(24, 'WAHYU, S.Sy', '197209212003121004', 13, 7, 'PENGADILAN AGAMA KARAWANG'),
(25, 'FADHLILLAH MUBARAK, S.Sy', '197908112006041002', 13, 7, 'PENGADILAN AGAMA KARAWANG'),
(26, 'ENY KURNIASIH, S.H.', '196511091989102001', 20, 9, 'PENGADILAN AGAMA KARAWANG'),
(27, 'SOLIKHIN, S.H.', '196512101992031001', 20, 8, 'PENGADILAN AGAMA KARAWANG'),
(28, 'ADE SOLAHUDIN, SHI', '197905172014051001', 21, 7, 'PENGADILAN AGAMA KARAWANG'),
(29, 'DWI YUNIANTI, S.H.', '198212132006042002', 14, 8, 'PENGADILAN AGAMA KARAWANG'),
(30, 'USMANIAH, S.H.', '197006181990032001', 15, 9, 'PENGADILAN AGAMA KARAWANG'),
(31, 'RATUSISKA ARIES TIANI, S.E.', '198304212011012013', 16, 8, 'PENGADILAN AGAMA KARAWANG'),
(32, 'DESYANA RAHMA YUSTINI, S.I.A', '199612022019032004', 17, 6, 'PENGADILAN AGAMA KARAWANG'),
(33, 'INTAN MAHARANI, S.I.A', '199602122019032014', 19, 6, 'PENGADILAN AGAMA KARAWANG'),
(34, 'Drs. Staff Pelaksana Perencanaan IT', '199602122019032015', 18, 6, 'PENGADILAN AGAMA KARAWANG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `nip` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nip`, `password`, `role`, `foto`) VALUES
(1, '196507021992031005', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(2, '196008161988031007', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(3, '196202151992031002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(4, '195704071992032001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(5, '197002061994031004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(6, '195708191984031002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(7, '196708131992032001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(8, '196410301992031005', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(9, '196305071991031004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(10, '196901031995031001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(11, '196403151991031002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(12, '196311151993031004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(13, '197208161994031002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(14, '196709172000121002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(15, '196303071992031005', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(16, '196211051983032005', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(17, '197411022003122002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(18, '196011261981021003', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(19, '197606082009041001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(20, '197209212003121004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(21, '197908112006041002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(22, '196511091989102001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(23, '197905172014051001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(24, '196512101992031001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(25, '198212132006042002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(26, '197006181990032001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(27, '199612022019032004', '21232f297a57a5a743894a0e4a801fc3', 'Admin', NULL),
(28, '199602122019032014', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(29, '198304212011012013', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(30, '196507021992031006', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(31, '196211051983032004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(32, '199602122019032015', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(33, '196709172000121004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(34, '196303071992031006', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti_pegawai`
--
ALTER TABLE `cuti_pegawai`
  ADD PRIMARY KEY (`id_cutipegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kgb_pegawai`
--
ALTER TABLE `kgb_pegawai`
  ADD PRIMARY KEY (`id_kgbpegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `knp_pegawai`
--
ALTER TABLE `knp_pegawai`
  ADD PRIMARY KEY (`id_knppegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_golongan` (`id_golongan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti_pegawai`
--
ALTER TABLE `cuti_pegawai`
  MODIFY `id_cutipegawai` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kgb_pegawai`
--
ALTER TABLE `kgb_pegawai`
  MODIFY `id_kgbpegawai` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `knp_pegawai`
--
ALTER TABLE `knp_pegawai`
  MODIFY `id_knppegawai` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti_pegawai`
--
ALTER TABLE `cuti_pegawai`
  ADD CONSTRAINT `cuti_pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kgb_pegawai`
--
ALTER TABLE `kgb_pegawai`
  ADD CONSTRAINT `kgb_pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `knp_pegawai`
--
ALTER TABLE `knp_pegawai`
  ADD CONSTRAINT `knp_pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_golongan`) REFERENCES `golongan` (`id_golongan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
