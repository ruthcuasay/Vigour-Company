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
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `card` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dd` varchar(2) NOT NULL,
  `mm` varchar(2) NOT NULL,
  `yyyy` varchar(4) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `cnum` varchar(19) NOT NULL,
  `amount` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `fname`, `card`, `email`, `address`, `dd`, `mm`, `yyyy`, `gender`, `cnum`, `amount`) VALUES
(1, 'Ruth Cuasay', 'Ruth Cuasay', 'ruthcuasay28@gmail.com', 'San Pablo City, Laguna', '11', '11', '0000', 'F', '1111-2222-3333-4444', '350'),
(2, 'Ruth Cuasay', 'Ruth Cuasay', 'ruthcuasay28@gmail.com', 'San Pablo City, Laguna', '11', '11', '2000', 'F', '1111-2222-3333-4444', '350'),
(3, 'Ellaine Escano', 'Ellaine David Escano', 'ellainejoy06@gmail.com', 'San Pablo City, Laguna', '11', '06', '2000', 'F', '2222-1111-3333-4444', '1200'),
(4, 'Steffany Lopera', 'Steffany May Lopera', 'steffanylopera28@gmail.com', 'San Pablo City', '05', '28', '2001', 'F', '3333-1111-2222-4444', '500'),
(5, 'Sherwin Pedro', 'Sherwin Irlandez Pedro', 'sherwinpedro0928@gmail.com', 'Nagcarlan, Laguna', '01', '24', '2001', 'M', '4444-1111-2222-3333', '1200');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
