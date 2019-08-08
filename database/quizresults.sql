-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 03:01 PM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quizresults`
--

CREATE TABLE `quizresults` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizresults`
--

INSERT INTO `quizresults` (`Username`, `Password`, `Result`) VALUES
('', '', 0),
('Anotherdamntest', ' ', 1),
('BigOldTest', ' thepasswordsareuselessatthemo', 0),
('bjk', ' jnk', 5),
('BleepBloop', ' Baababa', 1),
('delete1', ' ', 0),
('delete2', ' ', 0),
('delete3', ' ', 1),
('delete4', ' whatever', 2),
('DELETETHIS', ' ', 3),
('fdutyduty', ' uydufyu', 0),
('fgdjfkgfdg', ' gfhfghfgh', 0),
('FirstUser', 'Password', 1),
('gfdgfhg', ' fghfghfgh', 1),
('ggg', ' ', 0),
('gggvb', ' hhfgh', 0),
('Jon', ' jonn', 3),
('Liam', ' O', 0),
('Liamooo', ' ', 2),
('party263', ' party263', 1),
('Ralf', ' 123abc', 0),
('test1', ' 2', 0),
('TestScore', ' ', 0),
('TestUpdateScore', ' ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quizresults`
--
ALTER TABLE `quizresults`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
