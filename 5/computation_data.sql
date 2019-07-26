-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2015 at 11:46 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `computation_data`
--

CREATE TABLE IF NOT EXISTS `computation_data` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `op1` int(20) NOT NULL,
  `op2` int(20) NOT NULL,
  `operator` varchar(2) NOT NULL,
  `result` double NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `computation_data`
--

INSERT INTO `computation_data` (`sno`, `op1`, `op2`, `operator`, `result`) VALUES
(1, 5, 2, '+', 7),
(2, 5, 2, '-', 3),
(3, 5, 2, '*', 10),
(4, 5, 5, '/', 1),
(5, 5, 2, '%', 1),
(7, 5, 2, '/', 2.5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
