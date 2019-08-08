-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 12:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment5`
--

-- --------------------------------------------------------

--
-- Table structure for table `readinglist`
--

CREATE TABLE `readinglist` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(50) NOT NULL,
  `URL` varchar(500) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `readinglist`
--

INSERT INTO `readinglist` (`ID`, `Date`, `Name`, `URL`, `Description`) VALUES
(12, '2019-05-01', 'updated', 'there', 'ertert'),
(13, '2019-05-01', 'testinsert', 'there', 'ertert'),
(15, '2019-05-01', 'newentry', 'blha', 'bfdfjgg'),
(16, '2019-05-01', 'justChecking', 'a', 'a'),
(19, '2019-05-01', 'testingIndex', 'uel', 'desc'),
(24, '2019-05-02', 'hello', 'peentw', 'ertert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `readinglist`
--
ALTER TABLE `readinglist`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `readinglist`
--
ALTER TABLE `readinglist`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
