-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2017 at 12:41 AM
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

INSERT INTO `cart` (`USERID`, `SERVICE_CODE`, `PROBLEM_DESCRIPTION`) VALUES
('Rohit', 'S1', 'DSSDFDSF'),
('Aashna', 'S1', 'sdfgdsf');

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
  `SERVICE_CHARGE` int(5) NOT NULL,
  PRIMARY KEY (`SERVICE_CODE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_service_code`
--

INSERT INTO `mst_service_code` (`SERVICE_CODE`, `SERVICE`, `SERVICE_CHARGE`) VALUES
('E1', 'Electrical Fittings and Repair', 800),
('E2', 'Electrical Wiring', 400),
('E3', 'Electric Meter Panel Fault', 300),
('E4', 'Generator Maintainance', 500),
('E5', 'Invertor Maintainance', 300),
('C1', 'Data Recovery Services', 300),
('C2', 'Virus Removal and Potection', 300),
('C3', 'OS Installation and Recovery', 350),
('C4', 'Laptop/Desktop Recovery', 300),
('C5', 'Software Installation Services', 300),
('S1', 'Camera Installation and Repair', 1350),
('S2', 'Guarding', 4000),
('S3', 'Electronic Safe Locker', 550),
('S4', 'Intercom System Services', 300),
('S5', 'Door Phone Repairing', 300),
('HA1', 'TV Repair', 300),
('HA2', 'Microwave Repair', 300),
('HA3', 'Audio System Repair', 300),
('HA4', 'Refrigerator Repair', 300),
('HA5', 'Washing Machine Repair', 300);

-- --------------------------------------------------------

--
-- Table structure for table `mst_timeslots`
--

CREATE TABLE IF NOT EXISTS `mst_timeslots` (
  `SLOT_CODE` int(5) NOT NULL,
  `SLOT_TIME` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(500) NOT NULL,
  PRIMARY KEY (`SLOT_CODE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_timeslots`
--

INSERT INTO `mst_timeslots` (`SLOT_CODE`, `SLOT_TIME`, `DESCRIPTION`) VALUES
(1, '10:00 A.M to 12:00 P.M', ''),
(2, '02:00 P.M to 04:00 P.M', ''),
(3, '04:00 P.M to 06:00 P.M', '');

-- --------------------------------------------------------

--
-- Table structure for table `orderbook`
--

CREATE TABLE IF NOT EXISTS `orderbook` (
  `ORDERNO` int(5) NOT NULL,
  `USERID` varchar(50) NOT NULL,
  `ORDERDATE` date NOT NULL,
  `COMMENTS` varchar(255) NOT NULL,
  `STATUS` varchar(50) NOT NULL DEFAULT 'OPEN',
  PRIMARY KEY (`ORDERNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderbook`
--


-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
  `REF_ORDERNO` int(5) NOT NULL,
  `ITEMNO` int(5) NOT NULL,
  `SERVICE_CODE` varchar(5) NOT NULL,
  `PROBLEM_DESC` varchar(255) NOT NULL,
  `STATUS` varchar(50) NOT NULL DEFAULT 'OPEN'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_assignment`
--

CREATE TABLE IF NOT EXISTS `order_assignment` (
  `ORDERNO` int(5) NOT NULL,
  `SERVICE_CODE` varchar(5) NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `ASSIGNMENT_NO` int(10) NOT NULL AUTO_INCREMENT,
  `SLOT_CODE` int(5) NOT NULL,
  `ASSIGNMENT_DATE` date NOT NULL,
  `MOBILENO` bigint(10) NOT NULL,
  PRIMARY KEY (`ASSIGNMENT_NO`),
  KEY `ORDERNO` (`ORDERNO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11964 ;

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
  `MOBILENO` bigint(10) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `USER_TYPE` varchar(50) NOT NULL,
  PRIMARY KEY (`MOBILENO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILENO`, `PASSWORD`, `USER_TYPE`) VALUES
('Rohit', 'ROHIT', 'ROHIT@ROHIT.COM', 1234512345, '1234512345', 'C'),
('Aashna', 'AASHNA', 'AASHNA@AASHNA.COM', 1234567890, '1234567890', 'E'),
('Bhavin', 'BHAVIN', 'Bhavin@Bhavin.com', 9987345317, '9987345317', 'E'),
('Vivaan', 'VIVAAN', 'Vivaan@Vivaan.com', 1987654321, '1987654321', 'E'),
('Dhritil', 'DHRITIL', 'DHRITIL@DHRITIL.COM', 8901234555, '8901234555', 'A'),
('TestUser', 'TestUser', 'TestUser@TestUser.com', 6789067890, '6789067890', 'E'),
('TestUserTwo', 'TestUserTwo', 'TestUser2@TestUser2.com', 6789054321, '6789054321', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `temp_tb`
--

CREATE TABLE IF NOT EXISTS `temp_tb` (
  `MOBILENO` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_tb`
--

INSERT INTO `temp_tb` (`MOBILENO`) VALUES
('2017-10-23 22:56:44');

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ASSIGN_TASK`()
BEGIN
  DECLARE done INT DEFAULT FALSE;
  DECLARE A_AVAILABLE_SLOT INT DEFAULT 10;
  DECLARE A_MOBILENO BIGINT(10);
  DECLARE A_ORDERNO INT DEFAULT 0;
  DECLARE A_CODE VARCHAR(10); 
    DECLARE LST_ASSIGNED_ORDER INT DEFAULT 0;
  DECLARE LST_ASSIGNED_SCODE VARCHAR(10); 
  DECLARE empCur CURSOR FOR SELECT MOBILENO FROM REGISTRATION WHERE USER_TYPE = 'E';
  DECLARE orderCur CURSOR FOR SELECT O.ORDERNO,OI.SERVICE_CODE FROM ORDERBOOK O, ORDERITEMS OI WHERE O.ORDERNO=OI.REF_ORDERNO AND O.STATUS = 'OPEN' AND OI.STATUS = 'OPEN';

  DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;

OPEN orderCur;

outer_loop: LOOP 
	FETCH orderCur INTO A_ORDERNO, A_CODE;
	IF done THEN
		LEAVE outer_loop;
	else
	SET LST_ASSIGNED_ORDER = '';
	SET LST_ASSIGNED_SCODE = '';
        OPEN empCur;  
	  read_loop: LOOP  
	  FETCH empCur INTO A_MOBILENO;    
		  IF done THEN
			LEAVE read_loop;
		  ELSE 
			select AVAILABLE_TIMESLOT(A_MOBILENO) into A_AVAILABLE_SLOT;
			
			IF(LST_ASSIGNED_ORDER = A_ORDERNO AND LST_ASSIGNED_SCODE = A_CODE) THEN
				LEAVE read_loop;
			END IF;
			
			if(A_AVAILABLE_SLOT IS NOT NULL AND A_AVAILABLE_SLOT > 0) then
			INSERT INTO ORDER_ASSIGNMENT(ORDERNO,SERVICE_CODE,STATUS,SLOT_CODE,ASSIGNMENT_DATE,MOBILENO)
			VALUES(A_ORDERNO,A_CODE,'ASSIGNED',A_AVAILABLE_SLOT,CURDATE(),A_MOBILENO);
			COMMIT;
			UPDATE ORDERITEMS SET STATUS = 'ASSIGNED' WHERE REF_ORDERNO = A_ORDERNO AND SERVICE_CODE = A_CODE;
			COMMIT;

			SET LST_ASSIGNED_ORDER = A_ORDERNO;
			SET LST_ASSIGNED_SCODE = A_CODE;
			END IF;
		  END IF;
	  END LOOP read_loop;   
	CLOSE empCur;
	END IF;
END LOOP outer_loop;
CLOSE orderCur;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CLOSE_ORDER`(IN PORDERNO INT(5))
BEGIN
DECLARE C_OCOUNT INT;
DECLARE T_OCOUNT INT;
SELECT COUNT(*) AS COUNT INTO C_OCOUNT FROM ORDER_ASSIGNMENT WHERE ORDERNO = PORDERNO AND STATUS = 'COMPLETED';
SELECT COUNT(*) AS COUNT INTO T_OCOUNT FROM ORDERITEMS WHERE REF_ORDERNO = PORDERNO;
IF (C_OCOUNT = T_OCOUNT) THEN
 UPDATE ORDERBOOK SET STATUS = 'CLOSE' WHERE ORDERNO = PORDERNO;
 COMMIT;

END IF;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `AVAILABLE_TIMESLOT`(MOBILENO BIGINT) RETURNS int(5)
BEGIN
DECLARE A_AVAILABLE_SLOT BIGINT DEFAULT 10;
SELECT MIN(SLOT_CODE) AS SLOT_CODE INTO A_AVAILABLE_SLOT FROM MST_TIMESLOTS WHERE MST_TIMESLOTS.SLOT_CODE NOT IN (SELECT SLOT_CODE FROM ORDER_ASSIGNMENT WHERE ASSIGNMENT_DATE  = DATE_ADD(CURDATE(), INTERVAL 0 DAY) AND ORDER_ASSIGNMENT.MOBILENO = MOBILENO AND ORDER_ASSIGNMENT.STATUS = 'ASSIGNED');
RETURN A_AVAILABLE_SLOT;
END$$

--
-- Events
--
CREATE EVENT `DO_ASSIGNMENT` ON SCHEDULE EVERY 1 MINUTE STARTS '2017-10-23 22:38:44' ON COMPLETION NOT PRESERVE ENABLE DO INSERT INTO TEMP_TB VALUES(LOCALTIMESTAMP())$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
