-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2014 at 09:38 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dataentry`
--
CREATE DATABASE IF NOT EXISTS `dataentry` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dataentry`;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `filename` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `fname`, `lname`, `mname`, `age`, `gender`, `address`, `filename`) VALUES
(13, 'Angel', 'Colmenares', 'Locsin', 29, 'Female', 'Bulacan', 'angel locsin.jpg'),
(14, 'Anne', 'Curtis-Smith', 'Ojales', 29, 'Female', 'Australia', 'Anne Curtis.jpg'),
(15, 'Aubrey', 'Sandel', 'Miles', 36, 'Female', 'Caloocan', 'Aubrey_Miles.jpg'),
(16, 'Sylvia Valerie', 'Garcia', 'Pablo', 26, 'Female', 'Davao City', 'bangs garcia.jpg'),
(17, 'Denise Maria', 'Laurel', 'Sanz', 26, 'Female', 'Manila', 'Denise Laurel.jpg'),
(18, 'Samuelle Lynne', 'Pinto', 'Acosta', 24, 'Female', 'Philippines', 'Sam Pinto.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
