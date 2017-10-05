-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2017 at 09:25 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `USERID` varchar(50) NOT NULL,
  `SERVICE_CODE` varchar(15) NOT NULL,
  `PROBLEM_DESCRIPTION` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `CUSTOMER_NAME` varchar(50) NOT NULL,
  `EMAIL_ADDRESS` varchar(50) NOT NULL,
  `MOBILE_NO` varchar(15) NOT NULL,
  `MESSAGE` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `mst_service_code`
--

CREATE TABLE IF NOT EXISTS `mst_service_code` (
  `SERVICE_CODE` varchar(5) NOT NULL,
  `SERVICE` varchar(50) NOT NULL,
  PRIMARY KEY (`SERVICE_CODE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_service_code`
--

INSERT INTO `mst_service_code` (`SERVICE_CODE`, `SERVICE`) VALUES
('E1', 'Electrical Fittings and Repair'),
('E2', 'Electrical Wiring'),
('E3', 'Electric Meter Panel Fault'),
('E4', 'Generator Maintainance'),
('E5', 'Invertor Maintainance'),
('C1', 'Data Recovery Services'),
('C2', 'Virus Removal and Potection'),
('C3', 'OS Installation and Recovery'),
('C4', 'Laptop/Desktop Recovery'),
('C5', 'Software Installation Services'),
('S1', 'Camera Installation and Repai'),
('S2', 'Guarding'),
('S3', 'Electronic Safe Locker'),
('S4', 'Intercom System Services'),
('S5', 'Door Phone Repairing'),
('HA1', 'TV Repair'),
('HA2', 'Microwave Repair'),
('HA3', 'Audio System Repair'),
('HA4', 'Refrigerator Repair'),
('HA5', 'Washing Machine Repair');

-- --------------------------------------------------------

--
-- Table structure for table `orderbook`
--

CREATE TABLE IF NOT EXISTS `orderbook` (
  `ORDERNO` int(5) NOT NULL,
  `USERID` varchar(50) NOT NULL,
  `ORDERDATE` date NOT NULL,
  `COMMENTS` varchar(255) NOT NULL,
  PRIMARY KEY (`ORDERNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
  `REF_ORDERNO` int(5) NOT NULL,
  `ITEMNO` int(5) NOT NULL,
  `SERVICE_CODE` varchar(5) NOT NULL,
  `PROBLEM_DESC` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




-- --------------------------------------------------------

--
-- Table structure for table `order_assignment`
--

CREATE TABLE IF NOT EXISTS `order_assignment` (
  `ORDERNO` int(5) NOT NULL,
  `SERVICE_CODE` varchar(5) NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `ASSIGNMENT_NO` int(10) NOT NULL,
  PRIMARY KEY (`ASSIGNMENT_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_assignment`
--


-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `FIRSTNAME` varchar(50) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `MOBILENO` int(10) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  PRIMARY KEY (`MOBILENO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
