-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 05:30 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `examdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `testtb`
--

CREATE TABLE IF NOT EXISTS `testtb` (
`id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testtb`
--

INSERT INTO `testtb` (`id`, `name`, `surname`) VALUES
(1, 'à¸ˆà¸²à¸£à¸¸à¸“à¸µ', 'à¸ à¸±à¸—à¸£à¸§à¸‡à¸©à¹Œà¸˜à¸™à¸²'),
(2, 'one', 'one'),
(4, '', ''),
(5, '1111', '111'),
(6, '15455', '15589'),
(7, '15455', '15589'),
(8, '15455', '15589'),
(9, '15455', '15589'),
(10, '15455', '15589'),
(11, 'one', 'on'),
(12, 'one', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testtb`
--
ALTER TABLE `testtb`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testtb`
--
ALTER TABLE `testtb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
