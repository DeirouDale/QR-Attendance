-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 10:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qr_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `prototype`
--

CREATE TABLE `prototype` (
  `stud_num` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(5) NOT NULL,
  `year` int(2) NOT NULL,
  `section` varchar(2) NOT NULL,
  `time_in` varchar(10) DEFAULT NULL,
  `time_out` varchar(10) DEFAULT NULL,
  `state` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prototype`
--

INSERT INTO `prototype` (`stud_num`, `name`, `course`, `year`, `section`, `time_in`, `time_out`, `state`) VALUES
(20051012, 'Dale M. Panganiban', 'CpE', 4, 'A', '09:51 AM', '09:55 AM', 2),
(23050183, 'Balbas, Ma. Imee Kathrina Agpalza', 'CES', 1, 'A', '10:29 AM', '10:31 AM', 2),
(23050186, 'Mendoza, Dessaney Anne Balanay', 'CES', 1, 'A', '10:31 AM', '10:32 AM', 2),
(23050192, 'Antang, Jerome Ballesteros', 'CES', 1, 'A', NULL, NULL, 0),
(23050196, 'Rabi, Mariel Jamaica Balantac', 'CES', 1, 'A', NULL, NULL, 0),
(23050203, 'Luis, Princess Angel Pascual', 'CES', 1, 'A', NULL, NULL, 0),
(23050358, 'Cariaga, Vonn Collin Ramos', 'CES', 1, 'A', NULL, NULL, 0),
(23050366, 'Calivoso, John Dave Ganno', 'CES', 1, 'A', NULL, NULL, 0),
(23050422, 'Lazaro, John Lloyd Sanorjo', 'CES', 1, 'A', NULL, NULL, 0),
(23050476, 'de Guzman, Pauleen Joy Cacayorin', 'CES', 1, 'A', NULL, NULL, 0),
(23050508, 'Baquiren, Mark Ryan Espiritu', 'CES', 1, 'A', '10:47 AM', NULL, 1),
(23050641, 'Oamil, Leniemar Grace Pascua', 'CES', 1, 'A', NULL, NULL, 0),
(23050667, 'Paligat, Cyrel Ipac', 'CES', 1, 'A', NULL, NULL, 0),
(23050668, 'Calacal, Jade Marie Asilan', 'CES', 1, 'A', NULL, NULL, 0),
(23050699, 'Ramos, John curvy Ostonal', 'CES', 1, 'A', NULL, NULL, 0),
(23050704, 'Quitang, Chalesther Manarpaac', 'CES', 1, 'A', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prototype`
--
ALTER TABLE `prototype`
  ADD PRIMARY KEY (`stud_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
