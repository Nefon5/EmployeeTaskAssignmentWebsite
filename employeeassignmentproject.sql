-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2026 at 09:05 PM
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
-- Database: `employeeassignmentproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE `employeeinfo` (
  `id` int(11) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `passcode` text NOT NULL,
  `email` text NOT NULL,
  `Welding` tinyint(4) NOT NULL,
  `FDMPrinting` tinyint(4) NOT NULL,
  `CAD` tinyint(4) NOT NULL,
  `Lathes` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`id`, `fName`, `lName`, `passcode`, `email`, `Welding`, `FDMPrinting`, `CAD`, `Lathes`) VALUES
(1, 'Nefon', 'B', '1234', 'nefonbr6@gmail.com', 0, 1, 1, 0),
(2, 'Giannis', 'papadopoulos', '1234', 'gpapad@gmail.com', 1, 0, 1, 1),
(3, 'maria', 'mariopoulou', '12345', 'maria@gmail.com', 1, 1, 1, 1),
(4, 'John', 'Smith', '2000', 'johnsmith@gmail.com', 0, 0, 1, 0),
(5, 'Test', 'Bot', '123', 'beepboop@gmail.com', 1, 0, 0, 0),
(7, 'Lucky', 'Luke', 'shadow', 'luckyluke@gmail.com', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobinfo`
--

CREATE TABLE `jobinfo` (
  `JobID` int(11) NOT NULL,
  `JobDescr` text NOT NULL,
  `Assigneremail` text NOT NULL,
  `Assigned` tinyint(4) NOT NULL,
  `AssignedToemail` text NOT NULL,
  `Deadline` date NOT NULL,
  `Welding` tinyint(4) NOT NULL,
  `FDMPrinting` tinyint(4) NOT NULL,
  `CAD` tinyint(4) NOT NULL,
  `Lathes` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobinfo`
--

INSERT INTO `jobinfo` (`JobID`, `JobDescr`, `Assigneremail`, `Assigned`, `AssignedToemail`, `Deadline`, `Welding`, `FDMPrinting`, `CAD`, `Lathes`) VALUES
(1, 'Repair Gate', 'bossman@gmail.com', 1, 'gpapad@gmail.com', '2026-06-18', 1, 0, 0, 1),
(2, 'Test New Axles', 'bossman2@gmail.com', 1, 'maria@gmail.com', '2026-06-09', 1, 1, 1, 1),
(3, 'BringCofee', 'caffeine@gmail.com', 0, '', '2026-06-08', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobinfo`
--
ALTER TABLE `jobinfo`
  ADD PRIMARY KEY (`JobID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobinfo`
--
ALTER TABLE `jobinfo`
  MODIFY `JobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
