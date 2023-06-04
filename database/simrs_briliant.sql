-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 05:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrs_briliant`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `uid` int(11) NOT NULL,
  `no_bpjs` bigint(20) NOT NULL,
  `no_rm` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `jaminan_kesehatan` enum('BPJS','Umum') DEFAULT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `gol_darah` enum('AB','A','B','O','-') NOT NULL,
  `pekerjaan` text NOT NULL,
  `status_menikah` enum('belum menikah','menikah') NOT NULL DEFAULT 'belum menikah',
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir` enum('TK','SD','SMP','SMA','S1','S2','S3','-') NOT NULL DEFAULT '-',
  `nama_ibu` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `deleted_at` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`uid`, `no_bpjs`, `no_rm`, `nama_pasien`, `nik`, `jaminan_kesehatan`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `gol_darah`, `pekerjaan`, `status_menikah`, `agama`, `pendidikan_terakhir`, `nama_ibu`, `nama_ayah`, `tanggal_daftar`, `deleted_at`) VALUES
(1, 162866992, 192400051, 'Nasrul Hakim', 199918817716615514, 'BPJS', 'Pekalongan', '2001-02-12', 'Wonoyoso Gg. 5 Buaran Pekalongan', '-', 'Programer', 'belum menikah', 'Islam', 'S1', 'Fatichah', 'Tochairi', '2023-05-28', '-'),
(7, 1288817725, 192400052, 'Budi', 33494881621122, 'BPJS', 'Pekalongan', '2000-04-04', 'bligo', 'A', 'Mahasiswa', 'menikah', 'Kristen', 'SMA', 'rokhayah', 'sudhan', '0000-00-00', NULL),
(8, 881772615, 192400053, 'Sandi', 3346615518817, 'BPJS', 'Pekalongan', '1999-01-19', 'Kertijayan', '-', 'siswa', 'belum menikah', 'Islam', 'SMA', 'misyati', 'Miftah', '0000-00-00', NULL),
(9, 6615514413, 192400054, 'Ridwan', 3344522345554553, 'Umum', 'Pekalongan', '2008-05-01', 'bligo', 'A', 'siswa', 'belum menikah', 'Islam', 'SMP', 'Wati', 'Naryo', '0000-00-00', NULL),
(10, 155244166, 192400055, 'M. Rizqi', 334992772661, 'BPJS', 'Sapugarut', '1998-03-12', 'bligo', 'A', 'Buruh', 'menikah', 'Islam', 'SMP', 'Narti', 'idris', '0000-00-00', NULL),
(11, 88177255155, 192400056, 'angga', 33884772554, 'Umum', 'Banten', '2001-07-03', 'pekiringan alit', 'A', 'Buruh', 'belum menikah', 'Islam', 'S1', 'Nur Kasmirah', 'Majid', '0000-00-00', NULL),
(12, 771661442, 192400057, 'Efendi Gazali', 3377166155, 'Umum', 'Pekalongan', '2002-05-05', 'Kedungwuni Barat', 'B', 'Petani', 'belum menikah', 'Islam', 'SMP', 'Ningrum', 'fauzan', '0000-00-00', NULL),
(14, 123313323, 192400058, 'Rikaatzy', 3324088788767, 'BPJS', 'Batang', '1996-10-08', 'Semarang gg 7', 'A', 'pengaca', 'belum menikah', 'Islam', 'S3', 'sulis', 'sunandar', '2023-06-03', NULL),
(15, 33188277, 45118998, 'Lukman Effendi', 33247888008, 'BPJS', 'Pekalongan', '2004-06-13', 'batang', '-', 'proplayer', 'menikah', 'Islam', 'S1', 'Afifah', 'Ludiman', '2023-06-04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id` int(11) NOT NULL,
  `kode_dokter` varchar(10) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `no_izin_praktek` varchar(50) NOT NULL,
  `deleted_at` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id`, `kode_dokter`, `nama_dokter`, `spesialis`, `no_izin_praktek`, `deleted_at`) VALUES
(1, 'DOK244', 'Bambang Pangestu', 'Syaraf', 'p0007665', NULL),
(2, 'DOK233', 'Nasrul Hakim', 'Mata', 'Ha781525', NULL),
(3, 'DOK266', 'Thalita. S,Kep', 'Fisioterapi', 'Ha7815666', NULL),
(4, 'DOK299', 'dr. Brilian M.Kom', 'Anak', 'baq575442', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE `tb_poli` (
  `uid` int(11) NOT NULL,
  `kode_poli` varchar(3) NOT NULL,
  `nama_poli` text NOT NULL,
  `mulai_praktek` time NOT NULL,
  `selesai_praktek` time NOT NULL,
  `kode_dokter` varchar(10) NOT NULL,
  `deleted_at` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_poli`
--

INSERT INTO `tb_poli` (`uid`, `kode_poli`, `nama_poli`, `mulai_praktek`, `selesai_praktek`, `kode_dokter`, `deleted_at`) VALUES
(1, 'O', 'Obgyn', '18:00:00', '22:00:00', 'Dkiay12', NULL),
(2, 'L', 'Syaraf', '16:00:00', '12:00:00', 'D001', NULL),
(3, 'J', 'Syaraf', '16:00:00', '12:00:00', 'D001', '2023-05-31 12:56:10'),
(4, 'Z', 'Anak', '16:00:00', '12:00:00', 'D001', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `uid_2` (`uid`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `kode_dokter` (`kode_dokter`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `uid_2` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
