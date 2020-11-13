-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Nov 13, 2020 at 10:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_meta`
--

DROP TABLE IF EXISTS `home_meta`;
CREATE TABLE `home_meta` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `meta_title` varchar(225) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `keywords` text NOT NULL,
  `robots` varchar(225) NOT NULL,
  `cononical` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_meta`
--

INSERT INTO `home_meta` (`id`, `title`, `meta_title`, `meta_description`, `keywords`, `robots`, `cononical`) VALUES
(1, 'Opensource Custom PHP MVC Framework - JBS', 'Opensource Custom PHP MVC Framework - JBS', 'Custom Opensource MVC Framework for PHP developers to help build a wide range of bespoke systems by JBSoftware', 'Custom, MVC, Framework, PHP, PHP 7,PHP 8', 'index,follow', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_meta`
--
ALTER TABLE `home_meta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_meta`
--
ALTER TABLE `home_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
