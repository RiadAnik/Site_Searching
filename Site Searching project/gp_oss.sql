-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2016 at 11:58 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gp_oss`
--

-- --------------------------------------------------------

--
-- Table structure for table `sitenames`
--

CREATE TABLE IF NOT EXISTS `sitenames` (
  `site_id` int(11) NOT NULL,
  `Sub_center` varchar(20) NOT NULL,
  `3G` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `NTTN` varchar(20) NOT NULL,
  `HRS` varchar(20) NOT NULL,
  `Site_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitenames`
--

INSERT INTO `sitenames` (`site_id`, `Sub_center`, `3G`, `Type`, `NTTN`, `HRS`, `Site_name`) VALUES
(1, 'bbb', 'NO', 'z', 'nnn', 'NO', 'DHBS-1'),
(2, 'bbb', 'NO', 'a', 'nnn', 'NO', 'CDBS-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sitenames`
--
ALTER TABLE `sitenames`
  ADD PRIMARY KEY (`site_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sitenames`
--
ALTER TABLE `sitenames`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
