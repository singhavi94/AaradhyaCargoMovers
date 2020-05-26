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
-- Table structure for table `usercoment`
--

CREATE TABLE `usercoment` (
  `id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cphone` varchar(20) NOT NULL,
  `ccoment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercoment`
--

INSERT INTO `usercoment` (`id`, `cname`, `cemail`, `cphone`, `ccoment`) VALUES
(8, 'PRITI SINGH', 'avinash@gmail.com', '0902 672 3943', 'afsdfssssssssssssssssssasd'),
(9, 'Avinash Singh', 'avinashsingh4494@gmail.com', '9450473559', 'This is the wonderful website for logistics.\r\nThank You'),
(10, 'Raman Singh', 'ramansingh@gmail.com', '9584745874', '$_SESSION["favcolor"] = "green";\r\n$_SESSION["favanimal"] = "cat";\r\necho "Session variables are set.";');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usercoment`
--
ALTER TABLE `usercoment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usercoment`
--
ALTER TABLE `usercoment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
