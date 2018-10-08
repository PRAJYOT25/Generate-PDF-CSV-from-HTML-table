-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 04:55 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empId` int(11) NOT NULL,
  `empName` varchar(45) NOT NULL,
  `position` varchar(2000) NOT NULL,
  `salary` float NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empId`, `empName`, `position`, `salary`, `age`, `sex`) VALUES
(1, 'Tiger Nixon', 'System Architect', 320800, 61, 'male'),
(2, 'Garrett Winters', 'Accountant', 170750, 63, 'male'),
(3, 'Ashton Cox', 'Junior Technical Author', 86000, 66, 'male'),
(4, 'Cedric Kelly', 'Senior Javascript Developer', 432060, 22, 'female'),
(5, 'Airi Satou', 'Accountant', 162700, 33, 'female'),
(6, 'Brielle Williamson', 'Integration Specialist', 372000, 62, 'female'),
(7, 'Herrod Chandler', 'Sales Assistant', 139500, 59, 'male'),
(8, 'Rhona Davidson', 'Integration Specialist', 327900, 55, 'female'),
(9, 'Colleen Hurst', 'Javascript Developer', 205500, 39, 'female'),
(10, 'Sonya Frost', 'Software Engineer', 103600, 23, 'female'),
(11, 'Jena Gaines', 'Office Manager', 90560, 30, 'female'),
(12, 'Quinn Flynn', 'Support Lead', 342000, 22, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
