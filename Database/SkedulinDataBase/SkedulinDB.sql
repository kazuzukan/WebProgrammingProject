-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 12:49 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skedulindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_id` varchar(25) NOT NULL,
  `Event_nama` varchar(250) NOT NULL,
  `Event_tanggal` date NOT NULL,
  `Event_start` time NOT NULL,
  `Event_stop` time NOT NULL,
  `Person_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_id`, `Event_nama`, `Event_tanggal`, `Event_start`, `Event_stop`, `Person_Id`) VALUES
('5c18d318ea03c', 'Skedulin Meeting', '2018-12-23', '20:00:00', '22:00:00', 14008),
('5c18d33d4c7d2', 'Natal bersama keluarga', '2018-12-25', '10:00:00', '22:00:00', 14008),
('5c18d396ced12', 'Tahun Baru-an', '2018-12-31', '20:00:00', '23:59:00', 14008),
('5c18d3c81e1c3', 'Liburan ke rumah nenek', '2019-01-03', '08:00:00', '15:00:00', 14008),
('5c18d42868439', 'Skedulin Meeting III', '2019-01-05', '19:00:00', '21:00:00', 14008);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `Jadwal_Id` date DEFAULT NULL,
  `Person_Id` int(10) DEFAULT NULL,
  `Event_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Person_Id` int(10) NOT NULL,
  `Person_nama` varchar(250) DEFAULT NULL,
  `Person_status` varchar(250) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `displayname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Person_Id`, `Person_nama`, `Person_status`, `password`, `displayname`) VALUES
(14006, 'dimas', NULL, '1234', 'Dimas Satria'),
(14007, 'mute', NULL, '1234', 'Mutia Karimah'),
(14008, 'haris', NULL, '1234', 'Haris Putratama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD KEY `Person_Id` (`Person_Id`),
  ADD KEY `Event` (`Event_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Person_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `Person_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14009;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `Jadwal_ibfk_1` FOREIGN KEY (`Person_Id`) REFERENCES `person` (`Person_Id`),
  ADD CONSTRAINT `Jadwal_ibfk_2` FOREIGN KEY (`Event_id`) REFERENCES `event` (`Event_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
