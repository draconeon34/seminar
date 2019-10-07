-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 05:00 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_nilai`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('anggun@gmail.com', 'admin'),
('gustipamungkass@gmail.com', 'draco3793');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `Kode` char(4) NOT NULL,
  `MaPel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`Kode`, `MaPel`) VALUES
('BI01', 'Bhs. Indonesia'),
('BI02', 'Pendidikan Agama'),
('BI03', 'PPKn'),
('BI04', 'Matematika'),
('BI05', 'Kesenian'),
('BI06', 'Pendidikan Jasmani dan Olahraga Kesehatan'),
('BI07', 'Pengetahuan Umum');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `NIS` int(12) NOT NULL,
  `Nama_Siswa` varchar(50) NOT NULL,
  `Mata_Pelajaran` char(4) NOT NULL,
  `Kelas` char(3) NOT NULL,
  `Semester` varchar(6) NOT NULL,
  `UTS` float NOT NULL,
  `UAS` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`NIS`, `Nama_Siswa`, `Mata_Pelajaran`, `Kelas`, `Semester`, `UTS`, `UAS`) VALUES
(22131, 'Bambang', 'BI05', '1 A', 'Genap', 70, 80),
(9991101, 'Karomah Almunawar', 'BI01', '1 C', 'Ganjil', 70, 80),
(9991102, 'Budi Prasetio', 'BI01', '1 A', 'Genap', 70, 80),
(9991103, 'Tamtama', 'BI01', '1 C', 'Ganjil', 30, 50),
(9991104, 'Agistia Mufti', 'BI01', '1 A', 'Ganjil', 30, 20),
(9991105, 'Adittya Subagja', 'BI01', '1 A', 'Genap', 90, 10),
(9991106, 'Gusti Pamungkas', 'BI01', '1 B', 'Genap', 70, 75),
(9991107, 'Uzy ', 'BI01', '1 A', 'Ganjil', 40, 60),
(9991108, 'Beryl Bhagoes', 'BI01', '1 A', 'Genap', 90, 90);

-- --------------------------------------------------------

--
-- Stand-in structure for view `report_nilai`
-- (See below for the actual view)
--
CREATE TABLE `report_nilai` (
`Kode` char(4)
,`MaPel` varchar(50)
,`NIS` int(12)
,`Nama_Siswa` varchar(50)
,`Mata_Pelajaran` char(4)
,`Kelas` char(3)
,`Semester` varchar(6)
,`UTS` float
,`UAS` float
);

-- --------------------------------------------------------

--
-- Structure for view `report_nilai`
--
DROP TABLE IF EXISTS `report_nilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report_nilai`  AS  select `mata_pelajaran`.`Kode` AS `Kode`,`mata_pelajaran`.`MaPel` AS `MaPel`,`nilai`.`NIS` AS `NIS`,`nilai`.`Nama_Siswa` AS `Nama_Siswa`,`nilai`.`Mata_Pelajaran` AS `Mata_Pelajaran`,`nilai`.`Kelas` AS `Kelas`,`nilai`.`Semester` AS `Semester`,`nilai`.`UTS` AS `UTS`,`nilai`.`UAS` AS `UAS` from (`mata_pelajaran` join `nilai`) where `mata_pelajaran`.`Kode` = `nilai`.`Mata_Pelajaran` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `Mata_Pelajaran` (`Mata_Pelajaran`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`Mata_Pelajaran`) REFERENCES `mata_pelajaran` (`Kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
