-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 09:50 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livesettings`
--

-- --------------------------------------------------------

--
-- Table structure for table `livesettings`
--

CREATE TABLE `livesettings` (
  `id` int(11) NOT NULL,
  `credential` varchar(30) NOT NULL,
  `value` varchar(500) NOT NULL COMMENT 'page1: timer page 2"live page 3: home redirection',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livesettings`
--

INSERT INTO `livesettings` (`id`, `credential`, `value`, `status`) VALUES
(1, 'day', '27', 1),
(2, 'month', 'Oct', 1),
(3, 'year', '2018', 1),
(4, 'time', '19:30:00', 1),
(5, 'iframe', '<iframe src=\"https://www.youtube.com/embed/vpthKDXBypI?ecver=3\" width=\"100%\" height=\"445\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 1),
(6, 'page', '2', 1),
(7, 'home', 'http://www.indywood.tv2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livesettings`
--
ALTER TABLE `livesettings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livesettings`
--
ALTER TABLE `livesettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
