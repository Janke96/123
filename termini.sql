-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 11:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `termini`
--

CREATE TABLE `termini` (
  `ID` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `Vrijeme` time NOT NULL,
  `VrstaServisa` text NOT NULL,
  `ImeKlijenta` text NOT NULL,
  `PrezimeKlijenta` text NOT NULL,
  `ImeServisera` text NOT NULL,
  `PrezimeServisera` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `termini`
--

INSERT INTO `termini` (`ID`, `Datum`, `Vrijeme`, `VrstaServisa`, `ImeKlijenta`, `PrezimeKlijenta`, `ImeServisera`, `PrezimeServisera`) VALUES
(1, '2009-10-10', '10:10:00', 'redovni', 'Marko', 'Polo', 'Milos', 'Jankovic'),
(2, '2020-01-09', '11:11:00', 'ugradnja', 'Ana', 'Stasija', 'Milos', 'Jankovic'),
(3, '2099-11-11', '10:10:00', 'popravka', 'Viktor', 'Viktorevic', 'Milos', 'Jankovic'),
(5, '2025-01-01', '01:01:00', 'ugradnja', 'Taser', 'Ristic', 'Milos', 'Jankovic'),
(6, '1111-11-11', '23:23:00', 'ugradnja', 'Mirko', 'Mirkovic', 'Milos', 'Jankovic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `termini`
--
ALTER TABLE `termini`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `termini`
--
ALTER TABLE `termini`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
