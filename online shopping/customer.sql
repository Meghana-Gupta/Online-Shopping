-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2015 at 12:04 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meghana`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `name` char(30) DEFAULT NULL,
  `password` char(15) DEFAULT NULL,
  `address` char(250) DEFAULT NULL,
  `sex` char(10) DEFAULT NULL,
  `city` char(30) DEFAULT NULL,
  `state` char(30) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `emailid` char(30) DEFAULT NULL,
  `dob` char(30) DEFAULT NULL,
  `mobileno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `password`, `address`, `sex`, `city`, `state`, `pincode`, `emailid`, `dob`, `mobileno`) VALUES
('amanjain', '', 'doorno:33 xi block chennai 600025', 'male', 'Chennai', 'TamilNadu', 600025, '', '', 0),
('amanjain', 'amanjainjain', 'doorno:33 xi block chennai 600025', 'male', 'Chennai', 'TamilNadu', 600025, 'amanjain61@gmail.com', '1994-07-15', 955172919),
('alka', 'alkameghana', 'bhv gr', 'Female', 'New Delhi', 'Mumbai', 612234, 'alkameghana@gmail.com', '2012-03-15', 2147483647),
('', 'hgfcutfcut', '', '', '-1', '-1', 0, '', '', 0),
('meena', 'meena', 'adfku', 'Female', 'New Delhi', 'Goa', 600000, 'meena@gmail.com', '2015-03-26', 2147483647),
('meghana', 'munish', 'bhavani nagar', 'Female', 'Patna', 'Mumbai', 900876, 'meghanaa@gmail.com', '2015-03-18', 970142609);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
