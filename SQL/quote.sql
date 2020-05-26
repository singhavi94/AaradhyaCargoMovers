-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 08:55 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addcourier`
--

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `userId` int(11) NOT NULL,
  `qname` varchar(30) NOT NULL,
  `qemail` varchar(50) NOT NULL,
  `qphone` varchar(12) NOT NULL,
  `fstate` varchar(30) NOT NULL,
  `tstate` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `qcoment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`userId`, `qname`, `qemail`, `qphone`, `fstate`, `tstate`, `date`, `qcoment`) VALUES
(5, 'PRITI SINGH', 'avin@gmail.com', '0902 672 394', 'Karnataka', 'Uttar Pradesh', '20/08/2019', 'Looking for some already great color combinations?'),
(6, 'Avinash Singh', 'avinashsingh4494@gmail.com', '9450473559', 'Assam', 'Karnataka', '2019-08-28', 'Looking for some already great color combinations? Our color chart features flat design colors,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
