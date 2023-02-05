-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2022 at 12:39 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `session` enum('FS','HS') NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `code` varchar(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `fname`, `mname`, `lname`, `bdate`, `session`, `gender`, `code`, `address`, `email`) VALUES
(1, 'Ruth', 'Trumata', 'Cuasay', 'November 11, 2000', 'FS', 'F', '+639155111031', ' San Pablo City', 'ruthcuasay28@gmail.com'),
(2, 'Ellaine Joy', 'David', 'Escano', 'November 6, 2000', 'HS', 'F', '+639776176864', '  \r\nSan Pablo City', 'ellainejoy06@gmail.com'),
(3, 'Steffany May', 'Noquiao', 'Lopera', 'May 28, 2001', 'FS', 'F', '+639086634774', 'San Pablo City\r\n', 'steffanylopera28@gmail.com'),
(4, 'Sherwin', 'Irlandez', 'Pedro', 'January 24, 2001', 'HS', 'M', '+639268448265', 'Nagcarlan, Laguna\r\n', 'sherwinpedro0928@gmail.com'),
(5, 'Sherwin', 'Irlandez', 'Pedro', 'January 24, 2001', 'HS', 'M', '+639268448265', 'Nagcarlan, Laguna\r\n', 'sherwinpedro0928@gmail.com'),
(6, 'Sherwin', 'Irlandez', 'Pedro', 'January 24, 2001', 'HS', 'M', '+639268448265', 'Nagcarlan, Laguna\r\n', 'sherwinpedro0928@gmail.com'),
(7, 'Sherwin', 'Irlandez', 'Pedro', 'January 24, 2001', 'HS', 'M', '+639268448265', 'Nagcarlan, Laguna\r\n', 'sherwinpedro0928@gmail.com'),
(8, 'Sherwin', 'Irlandez', 'Pedro', 'January 24, 2001', 'HS', 'M', '+639268448265', 'Nagcarlan, Laguna\r\n', 'sherwinpedro0928@gmail.com'),
(9, 'Sherwin', 'Irlandez', 'Pedro', 'January 24, 2001', 'HS', 'M', '+639268448265', 'Nagcarlan, Laguna\r\n', 'sherwinpedro0928@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
