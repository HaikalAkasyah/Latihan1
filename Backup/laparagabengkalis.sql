-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 05:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laparagabengkalis`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id_booking` int(11) NOT NULL,
  `Tgl_booking` date NOT NULL,
  `jam_main` int(11) NOT NULL,
  `durasi` int(11) NOT NULL,
  `Id_lapangan` varchar(11) NOT NULL,
  `Status` enum('Dipakai','sedang diproses','Ready') NOT NULL,
  `metode_bayar` varchar(15) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id_booking`, `Tgl_booking`, `jam_main`, `durasi`, `Id_lapangan`, `Status`, `metode_bayar`, `bukti_bayar`) VALUES
(17, '0000-00-00', 19, 1, 'Planet', 'Dipakai', 'transfer', 'NO 1 MODUL 6.jpg'),
(18, '0000-00-00', 10, 2, 'Keybon', 'Dipakai', 'transfer', 'N0 3 MODUL 6.jpg'),
(19, '0000-00-00', 12, 3, 'Planet', 'Dipakai', 'transfer', 'NO 3 MODUL7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `Id_fasilitas` varchar(15) NOT NULL,
  `Nama_fasilitas` varchar(50) NOT NULL,
  `Keterangan` varchar(15) NOT NULL,
  `Id_lapangan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`Id_fasilitas`, `Nama_fasilitas`, `Keterangan`, `Id_lapangan`) VALUES
('565', 'Tempat Duduk', 'Sedang', 'Advas'),
('5655', 'Ruang ganti', 'Sedang', 'Planet'),
('567', 'Bola jupiter', 'Baik', 'Jupiter'),
('787665', 'Bola kaki', 'Baik', 'Keybon');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `Id_lapangan` varchar(11) NOT NULL,
  `Nama_lapangan` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `Id_pemilik` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`Id_lapangan`, `Nama_lapangan`, `alamat`, `Id_pemilik`) VALUES
('12345', '12345', '12345', 'Ardian'),
('Advas', 'Advas ae', 'Jl.parit bangkong', 'Sulastri'),
('Jupiter', 'Jupiter Futsal', 'senggoro', 'Jupiter'),
('Keybon', 'Keybon Futsal', 'Jl.kelapapati', 'mbohneh'),
('Planet', 'Planet Futsal', 'Jl.Satlantass', 'Ardian');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `Id_pemilik` varchar(15) NOT NULL,
  `Nama_pemilik` varchar(20) NOT NULL,
  `Alamat` varchar(15) NOT NULL,
  `Jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `No_hp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`Id_pemilik`, `Nama_pemilik`, `Alamat`, `Jenis_kelamin`, `No_hp`) VALUES
('Ardian', 'Ardian ramdonii', 'Bengkalis', 'laki-laki', 823655),
('Jupiter', 'Jupiter ahmad', 'Siak', 'laki-laki', 8675),
('mbohneh', 'mbohneh', 'tameran', 'laki-laki', 67675665),
('Muriza', 'Muriza', 'tameran', 'laki-laki', 1445),
('Sulastri', 'Sulastri', 'Bengkalis', 'perempuan', 8675);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `Id_registrasi` int(11) NOT NULL,
  `nama_pembooking` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(11) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`Id_registrasi`, `nama_pembooking`, `username`, `password`, `no_hp`, `email`, `status`) VALUES
(1, 'rahmat hidayat', 'dayat', '1212', '12121212', 'asas@gmail.com', ''),
(2, 'joanda ade darma', 'admin', '1234', '08127085672', 'joandajoanda@gmail.com', 'aktif'),
(3, 'amy', 'rama', 'dsasd', '121212', '1212@gmail.com', ''),
(4, 'qw', 'qwqwq', '123', '1212212', 'joandajoanda3@gmail.com', ''),
(5, 'ade', 'Joanda123', '1123', '081270856726', 'joandajoanda33@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbljurusan`
--

CREATE TABLE `tbljurusan` (
  `kodeJurusan` varchar(5) NOT NULL,
  `namaJurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbljurusan`
--

INSERT INTO `tbljurusan` (`kodeJurusan`, `namaJurusan`) VALUES
('AN', 'Jurusan administrasi niaga'),
('BI', 'Jurusan Bahasa'),
('MAR', 'Jurusan Kemaritiman'),
('TE', 'Jurusan Teknik Elektro'),
('TI', 'Jurusan Teknik Informatika'),
('TM', 'Jurusan Teknik Mesin'),
('TP', 'Jurusan Teknik Perkapalan'),
('TS', 'Jurusan Teknik Sipil');

-- --------------------------------------------------------

--
-- Table structure for table `tblprodi`
--

CREATE TABLE `tblprodi` (
  `kodeProdi` varchar(10) NOT NULL,
  `namaProdi` varchar(100) NOT NULL,
  `kodeJurusan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblprodi`
--

INSERT INTO `tblprodi` (`kodeProdi`, `namaProdi`, `kodeJurusan`) VALUES
('D2AJK', 'Administrasi Jaringan Komputer', 'TI'),
('D3TM', 'Diploma III Teknik Mesin', 'TM'),
('D4ABI', 'Sarjana Terapan Administrasi Bisnis International', 'AN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `Jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `No_hp` int(11) NOT NULL,
  `Id_pemilik` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `pass`, `nama`, `Jenis_kelamin`, `Alamat`, `No_hp`, `Id_pemilik`) VALUES
('AdminJupit', 'JupiterOKee', 'Jupiterok', 'Ahmad Jupiter', 'laki-laki', 'senggoro', 9876, 'Jupiter'),
('Ahmad', 'Ahmad@gmail.com', 'AhmadOkee', 'Ahmad sholihin', 'laki-laki', 'Rimbas', 56545, 'Muriza'),
('Ilman', 'Ilman@gmail.com', 'IlmanOKe', 'Ilman Sholihin', 'laki-laki', 'Pematang Duku', 9876, 'Ardian'),
('Muriza', 'Sadhan M', 'pass', 'mboh kemak', 'laki-laki', 'tameran', 9876, 'mbohneh'),
('Sadhan', 'SadhanMuriza@gm', 'enamlima', 'Syahdan', 'laki-laki', 'Tameran', 85272, 'Muriza'),
('Safran', 'SafranHarada', 'Safran', 'Safran harada', 'laki-laki', 'Tameran', 82229, 'Ardian');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `Id_jadwal` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Id_lapangan` varchar(11) NOT NULL,
  `hari` varchar(40) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `jam_main` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`Id_jadwal`, `Tanggal`, `Id_lapangan`, `hari`, `nama_pelanggan`, `jam_main`) VALUES
(12343, '2023-11-15', '0909009', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `Nik` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(1) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`Nik`, `username`, `password`, `level`, `status`) VALUES
('08765', 'Faldi dungu', '56394093e93ddd34841ef9e210d6bf63', '2', '1'),
('1234', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '1'),
('22242', 'gopal', '21232f297a57a5a743894a0e4a801fc3', '2', '1'),
('987654', 'mhs', '0357a7592c4734a8b1e12bc48e29e9e9', '2', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id_booking`),
  ADD KEY `Id_lapangan` (`Id_lapangan`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`Id_fasilitas`),
  ADD KEY `Id_lapangan` (`Id_lapangan`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`Id_lapangan`),
  ADD KEY `Id_pemilik` (`Id_pemilik`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`Id_pemilik`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`Id_registrasi`);

--
-- Indexes for table `tbljurusan`
--
ALTER TABLE `tbljurusan`
  ADD PRIMARY KEY (`kodeJurusan`);

--
-- Indexes for table `tblprodi`
--
ALTER TABLE `tblprodi`
  ADD PRIMARY KEY (`kodeProdi`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `Id_pemilik` (`Id_pemilik`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`Id_jadwal`),
  ADD KEY `Id_lapangan` (`Id_lapangan`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`Nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `Id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `Id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12344;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`Id_lapangan`) REFERENCES `lapangan` (`Id_lapangan`);

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`Id_lapangan`) REFERENCES `lapangan` (`Id_lapangan`);

--
-- Constraints for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD CONSTRAINT `lapangan_ibfk_1` FOREIGN KEY (`Id_pemilik`) REFERENCES `pemilik` (`Id_pemilik`);

--
-- Constraints for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD CONSTRAINT `tbl_admin_ibfk_1` FOREIGN KEY (`Id_pemilik`) REFERENCES `pemilik` (`Id_pemilik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
