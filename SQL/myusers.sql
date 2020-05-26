-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 04:02 PM
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
-- Table structure for table `myusers`
--

CREATE TABLE `myusers` (
  `userId` int(11) NOT NULL,
  `captcha` int(10) NOT NULL,
  `sname` varchar(55) NOT NULL,
  `smobile` varchar(55) NOT NULL,
  `semail` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `saddress` varchar(300) NOT NULL,
  `tofpkts` int(11) NOT NULL,
  `actualwt` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `rname` varchar(55) NOT NULL,
  `rmobile` varchar(20) NOT NULL,
  `remail` varchar(55) NOT NULL,
  `raddress` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cost` int(11) NOT NULL,
  `nofpkts` int(11) NOT NULL,
  `chargewt` varchar(20) NOT NULL,
  `descri` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myusers`
--

INSERT INTO `myusers` (`userId`, `captcha`, `sname`, `smobile`, `semail`, `saddress`, `tofpkts`, `actualwt`, `date`, `rname`, `rmobile`, `remail`, `raddress`, `cost`, `nofpkts`, `chargewt`, `descri`) VALUES
(1, 2147483647, 'Avinash Singh', '0902 672 3943', 'avinash@gmail.com', 'KAUSHLAYA VATIKA, C/o POONAM DEVI KASHIPUR NEW COLONY,NEAR KADAM CHAURAHA BALL', 0, '250Kg', '', 'Raman Singh', '0902 672 3943', 'raman@gmail.com', 'KAUSHLAYA VATIKA, C/o POONAM DEVI KASHIPUR NEW COLONY,NEAR KADAM CHAURAHA BALL', 2250, 25, '260Kg', 'asdcasd'),
(2, 255373, 'Avinash Singh', '0902 672 3943', 'nau@gmail.com', 'KAUSHLAYA VATIKA, C/o POONAM DEVI KASHIPUR NEW COLONY,NEAR KADAM CHAURAHA BALL', 0, '250Kg', '20/08/2019', 'Ram Singh', '0902 672 3943', 'raman@gmail.com', 'KAUSHLAYA VATIKA, C/o POONAM DEVI KASHIPUR NEW COLONY,NEAR KADAM CHAURAHA BALL', 2250, 25, '260Kg', 'bn/b,nb,,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myusers`
--
ALTER TABLE `myusers`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myusers`
--
ALTER TABLE `myusers`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
