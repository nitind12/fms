-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 04:17 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fms`
--
CREATE DATABASE IF NOT EXISTS `fms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fms`;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_ID` int(20) NOT NULL AUTO_INCREMENT,
  `course_ID` int(10) NOT NULL,
  `sem_ID` int(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  PRIMARY KEY (`class_ID`),
  KEY `class_ID` (`class_ID`),
  KEY `course_ID` (`course_ID`),
  KEY `sem_ID` (`sem_ID`),
  KEY `course_ID_2` (`course_ID`),
  KEY `sem_ID_2` (`sem_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_ID`, `course_ID`, `sem_ID`, `section`) VALUES
(1, 101, 1, 'A'),
(2, 101, 1, 'B'),
(3, 101, 2, 'A'),
(4, 101, 2, 'B'),
(5, 101, 3, 'A'),
(6, 101, 3, 'B'),
(7, 101, 4, 'A'),
(8, 101, 4, 'B'),
(9, 101, 5, 'A'),
(10, 101, 5, 'B'),
(11, 101, 6, 'A'),
(12, 101, 6, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `class_fee_session`
--

CREATE TABLE IF NOT EXISTS `class_fee_session` (
  `class_fee_sess_ID` varchar(20) NOT NULL,
  `flexible_class_fee_ID` int(10) NOT NULL,
  `class_sess_ID` varchar(20) NOT NULL,
  `session_ID` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`class_fee_sess_ID`),
  KEY `class_sess_id` (`class_sess_ID`),
  KEY `class_id` (`session_ID`),
  KEY `user_name` (`username`),
  KEY `class_fee_id` (`flexible_class_fee_ID`),
  KEY `class_fee_ID_2` (`flexible_class_fee_ID`),
  KEY `class_sess_ID_2` (`class_sess_ID`),
  KEY `session_ID` (`session_ID`),
  KEY `username` (`username`),
  KEY `flexible_class_fee_ID` (`flexible_class_fee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_in_session`
--

CREATE TABLE IF NOT EXISTS `class_in_session` (
  `class_sess_ID` varchar(20) NOT NULL DEFAULT '',
  `class_ID` int(20) DEFAULT NULL,
  `session_ID` varchar(20) NOT NULL,
  PRIMARY KEY (`class_sess_ID`),
  KEY `class_ID` (`class_ID`),
  KEY `session_ID` (`session_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_in_session`
--

INSERT INTO `class_in_session` (`class_sess_ID`, `class_ID`, `session_ID`) VALUES
('BCA2018-19_I', 1, '2018-19'),
('BCA2018-19_II', 3, '2018-19'),
('BCA2018-19_III', 5, '2018-19'),
('BCA2018-19_IV', 7, '2018-19'),
('BCA2018-19_V', 9, '2018-19'),
('BCA2018-19_VI', 11, '2018-19');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE IF NOT EXISTS `course_details` (
  `course_ID` int(10) NOT NULL AUTO_INCREMENT,
  `course` varchar(20) DEFAULT NULL,
  `university` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`course_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_ID`, `course`, `university`) VALUES
(101, 'BCA', 'Kumaun University'),
(102, 'MCA', 'UTU');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
  `disc_ID` int(10) NOT NULL AUTO_INCREMENT,
  `discount_offered` varchar(20) NOT NULL,
  `student_ID` int(20) NOT NULL,
  `discount_on` text NOT NULL,
  PRIMARY KEY (`disc_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`disc_ID`, `discount_offered`, `student_ID`, `discount_on`) VALUES
(1, '', 1000, ''),
(2, '', 1001, ''),
(3, '', 1002, ''),
(4, '', 1003, ''),
(5, '', 1004, ''),
(6, '', 1005, ''),
(7, '', 1006, ''),
(8, '', 1007, ''),
(9, '', 1008, ''),
(10, '', 1009, ''),
(11, '', 1010, ''),
(12, '', 1011, ''),
(13, '', 1012, ''),
(14, 'Reference', 1013, 'Reference'),
(15, '', 1014, ''),
(16, '', 1015, ''),
(17, '', 1016, ''),
(18, '', 1017, ''),
(19, '', 1018, ''),
(20, '', 1019, ''),
(21, 'Select', 1053, '');

-- --------------------------------------------------------

--
-- Table structure for table `discount_details`
--

CREATE TABLE IF NOT EXISTS `discount_details` (
  `discount_ID` int(10) NOT NULL AUTO_INCREMENT,
  `discount_Type` varchar(10) DEFAULT NULL,
  `discount_Amount` decimal(10,0) DEFAULT NULL,
  `unit` varchar(5) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`discount_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `discount_details`
--

INSERT INTO `discount_details` (`discount_ID`, `discount_Type`, `discount_Amount`, `unit`, `category`, `status`) VALUES
(10, 'Reference', '400', 'Rs', 'Other', '1'),
(11, 'Siblings', '200', 'Rs', 'Other', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fee_flexible_head`
--

CREATE TABLE IF NOT EXISTS `fee_flexible_head` (
  `flexible_head_ID` int(10) NOT NULL AUTO_INCREMENT,
  `fee_Head` varchar(10) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`flexible_head_ID`),
  UNIQUE KEY `user_name_4` (`username`),
  KEY `user_name` (`username`),
  KEY `user_name_2` (`username`),
  KEY `user_name_3` (`username`),
  KEY `user_name_5` (`username`),
  KEY `user_name_6` (`username`),
  KEY `user_name_7` (`username`),
  KEY `user_name_8` (`username`),
  KEY `user_name_9` (`username`),
  KEY `user_name_10` (`username`),
  KEY `user_name_11` (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fee_flexible_head`
--

INSERT INTO `fee_flexible_head` (`flexible_head_ID`, `fee_Head`, `amount`, `username`, `date`) VALUES
(1, 'Bus', 600, 'fms', '2019-04-25'),
(2, 'Karate', 400, 'manish', '2019-04-25'),
(3, 'Hostel', 700, 'kanika', '2019-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `fee_invoice`
--

CREATE TABLE IF NOT EXISTS `fee_invoice` (
  `invoice_ID` int(10) NOT NULL AUTO_INCREMENT,
  `session_ID` varchar(20) NOT NULL,
  `class_sess_ID` varchar(20) NOT NULL,
  `year_From` int(10) NOT NULL,
  `month_From` varchar(10) NOT NULL,
  `year_To` int(10) NOT NULL,
  `month_To` varchar(10) NOT NULL,
  `no_of_Month` int(10) NOT NULL,
  `description` varchar(20) NOT NULL,
  `student_ID` int(20) NOT NULL,
  `static_head_ID` varchar(150) NOT NULL,
  `static_head_Amount` varchar(20) NOT NULL,
  `flexible_head_ID` varchar(150) NOT NULL,
  `flexible_head_Amount` varchar(10) NOT NULL,
  `actual_Amount` int(10) NOT NULL,
  `applicable_discount_Amount` int(10) NOT NULL,
  `previous_due_Amount` int(10) NOT NULL,
  `due_Amount` int(10) NOT NULL,
  PRIMARY KEY (`invoice_ID`),
  KEY `sess_id` (`session_ID`),
  KEY `class_sem_id` (`class_sess_ID`),
  KEY `session_ID` (`session_ID`),
  KEY `class_sess_ID` (`class_sess_ID`),
  KEY `student_ID` (`student_ID`),
  KEY `static_head_ID` (`static_head_ID`),
  KEY `flexible_head_ID` (`flexible_head_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `fee_invoice`
--

INSERT INTO `fee_invoice` (`invoice_ID`, `session_ID`, `class_sess_ID`, `year_From`, `month_From`, `year_To`, `month_To`, `no_of_Month`, `description`, `student_ID`, `static_head_ID`, `static_head_Amount`, `flexible_head_ID`, `flexible_head_Amount`, `actual_Amount`, `applicable_discount_Amount`, `previous_due_Amount`, `due_Amount`) VALUES
(25, '2018-19', 'BCA2018-19_I', 2019, 'April', 2019, 'May', 1, 'x', 1000, 'Registrati,Books', '1000,800', 'Bus,Karate', '600,400', 2800, 400, 0, 2400),
(26, '2018-19', 'BCA2018-19_I', 2019, 'April', 2019, 'May', 1, 'x', 1000, 'Registrati,Books', '1000,800', 'Bus,Karate', '600,400', 2800, 400, 0, 2400);

-- --------------------------------------------------------

--
-- Table structure for table `fee_receipt`
--

CREATE TABLE IF NOT EXISTS `fee_receipt` (
  `receipt_ID` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_ID` int(10) NOT NULL,
  `student_ID` int(20) NOT NULL,
  `discount_ID` varchar(20) NOT NULL,
  `discount_Status` int(2) NOT NULL,
  `discount_Amount` int(10) NOT NULL,
  `description` varchar(10) NOT NULL,
  `actual_paid_Amount` int(10) NOT NULL,
  `paid` int(10) NOT NULL,
  `fine` int(10) NOT NULL,
  `type_ID` int(10) NOT NULL,
  `fee_Mode` varchar(10) NOT NULL,
  `bank_Name` varchar(20) NOT NULL,
  `cheque_No` int(10) NOT NULL,
  `cheque_Date` date NOT NULL,
  `date_of_Entry` date NOT NULL,
  `session_ID` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`receipt_ID`),
  KEY `discount_ID` (`discount_ID`),
  KEY `type_ID` (`type_ID`),
  KEY `session_ID` (`session_ID`),
  KEY `username` (`username`),
  KEY `invoice_ID` (`invoice_ID`),
  KEY `invoice_ID_2` (`invoice_ID`),
  KEY `student_ID` (`student_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `fee_receipt`
--

INSERT INTO `fee_receipt` (`receipt_ID`, `invoice_ID`, `student_ID`, `discount_ID`, `discount_Status`, `discount_Amount`, `description`, `actual_paid_Amount`, `paid`, `fine`, `type_ID`, `fee_Mode`, `bank_Name`, `cheque_No`, `cheque_Date`, `date_of_Entry`, `session_ID`, `username`, `date`) VALUES
(1, 2, 1001, '10,11', 1, 600, '', 2400, 1850, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '2019-05-06'),
(2, 4, 1002, '11', 1, 200, '', 2400, 2250, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '2019-05-06'),
(3, 6, 1003, '10,11', 1, 600, 'xx', 2800, 2250, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(4, 21, 1000, '10', 1, 400, 'xx', 2800, 2450, 50, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(5, 21, 1000, '10', 1, 400, '', 2800, 0, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(6, 21, 1000, '10', 1, 400, 'xx', 2800, 2400, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(7, 21, 1000, '10', 1, 400, '', 2800, 2400, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(8, 21, 1000, '10', 1, 400, '', 2800, 0, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(9, 21, 1000, '10', 1, 400, '', 2800, 0, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(10, 31, 1005, '', 1, 0, 'xx', 1800, 500, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(11, 31, 1005, '', 1, 0, 'x', 1800, 500, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(12, 31, 1005, '', 1, 0, 'xx', 1800, 500, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(13, 31, 1005, '', 1, 0, 'xx', 1800, 500, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00'),
(14, 1, 1000, '10', 1, 400, 'xx', 2800, 2400, 0, 11, 'cash', 'SBI', 123, '0000-00-00', '0000-00-00', '2018-19', 'fms', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `fee_static_head`
--

CREATE TABLE IF NOT EXISTS `fee_static_head` (
  `static_head_ID` int(10) NOT NULL AUTO_INCREMENT,
  `fee_Head` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `discount_Applicable` int(2) NOT NULL,
  PRIMARY KEY (`static_head_ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `fee_static_head`
--

INSERT INTO `fee_static_head` (`static_head_ID`, `fee_Head`, `username`, `date`, `amount`, `discount_Applicable`) VALUES
(100, 'Registrati', 'fms', '2019-04-06', 1000, 0),
(101, 'Exam', 'fms', '2019-04-06', 500, 0),
(102, 'Books', 'fms', '2019-04-06', 800, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fee_type`
--

CREATE TABLE IF NOT EXISTS `fee_type` (
  `type_ID` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`type_ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fee_type`
--

INSERT INTO `fee_type` (`type_ID`, `type`, `username`, `date`) VALUES
(1, 'cash', 'fms', '2019-04-06'),
(2, 'cash', 'fms', '2019-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `flexible_fee_associate_class`
--

CREATE TABLE IF NOT EXISTS `flexible_fee_associate_class` (
  `flexible_class_fee_ID` int(10) NOT NULL AUTO_INCREMENT,
  `student_ID` int(10) NOT NULL,
  `flexible_head_ID` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`flexible_class_fee_ID`),
  KEY `user_name` (`username`),
  KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `student_ID` (`student_ID`),
  KEY `flexible_head_ID_2` (`flexible_head_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `flexible_fee_associate_class`
--

INSERT INTO `flexible_fee_associate_class` (`flexible_class_fee_ID`, `student_ID`, `flexible_head_ID`, `amount`, `username`, `date`) VALUES
(10, 1000, 1, 600, 'fms', '2019-04-29'),
(11, 1000, 2, 400, 'fms', '2019-04-29'),
(12, 1001, 1, 600, 'fms', '2019-04-29'),
(13, 1002, 1, 600, 'fms', '2019-04-29'),
(14, 1003, 1, 600, 'fms', '2019-04-29'),
(15, 1004, 1, 600, 'fms', '2019-04-29'),
(16, 1003, 2, 400, 'fms', '2019-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status_ID` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `status_ID` (`status_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`, `status_ID`, `date`, `status`) VALUES
('fms', '1234', 1, '2019-04-06', '1'),
('kanika', '1234', 1, '2019-04-06', '1'),
('manish', '1234', 1, '2019-04-06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `manage_flexible_head`
--

CREATE TABLE IF NOT EXISTS `manage_flexible_head` (
  `fhead_ID` int(20) NOT NULL AUTO_INCREMENT,
  `New_Flexible_Head` varchar(20) NOT NULL,
  `Amount` int(20) NOT NULL,
  `How_Many_Times` varchar(20) NOT NULL,
  PRIMARY KEY (`fhead_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `manage_flexible_head`
--

INSERT INTO `manage_flexible_head` (`fhead_ID`, `New_Flexible_Head`, `Amount`, `How_Many_Times`) VALUES
(1, 'Bus Fees', 1000, 'One Time'),
(2, 'Music Fee', 100, 'One Time'),
(3, 'Sports Fee', 150, 'One Time'),
(4, 'Swimming', 100, 'One Time'),
(5, 'Karate Fee', 150, 'One Time'),
(7, 'Cultural Participati', 200, 'One Time'),
(8, 'Lab Fees', 50, 'One Time'),
(10, 'Dance Fees', 250, 'One Time');

-- --------------------------------------------------------

--
-- Table structure for table `semester_details`
--

CREATE TABLE IF NOT EXISTS `semester_details` (
  `sem_ID` int(10) NOT NULL AUTO_INCREMENT,
  `course_ID` int(10) NOT NULL,
  `sem` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`sem_ID`),
  KEY `course_ID` (`course_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `semester_details`
--

INSERT INTO `semester_details` (`sem_ID`, `course_ID`, `sem`) VALUES
(1, 101, 'First'),
(2, 102, 'First');

-- --------------------------------------------------------

--
-- Table structure for table `session_master`
--

CREATE TABLE IF NOT EXISTS `session_master` (
  `session_ID` varchar(20) NOT NULL,
  `session_Start` int(10) NOT NULL,
  `session_End` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`session_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_master`
--

INSERT INTO `session_master` (`session_ID`, `session_Start`, `session_End`, `date`) VALUES
('', 0, 0, '0000-00-00'),
('2018-19', 2018, 2019, '2019-04-06'),
('2019-20', 2019, 2020, '2019-04-06'),
('2020-21', 2020, 2021, '2019-04-05'),
('2021-22', 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `siblings`
--

CREATE TABLE IF NOT EXISTS `siblings` (
  `sib_ID` int(10) NOT NULL AUTO_INCREMENT,
  `siblings` text NOT NULL,
  `student_ID` int(20) NOT NULL,
  PRIMARY KEY (`sib_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `siblings`
--

INSERT INTO `siblings` (`sib_ID`, `siblings`, `student_ID`) VALUES
(1, '1004', 1000),
(2, '', 1001),
(3, '1001', 1002),
(4, '', 1003),
(5, '', 1004),
(6, '', 1005),
(7, '', 1006),
(8, '', 1007),
(9, '', 1008),
(10, '', 1009),
(11, '', 1010),
(12, '', 1011),
(13, '', 1012),
(14, '', 1013),
(15, '', 1014),
(16, '', 1015),
(17, '', 1016),
(18, '', 1017),
(19, '', 1018),
(20, '', 1019),
(21, '', 1020),
(22, '', 1021),
(23, '', 1022),
(24, '', 1023),
(25, '', 1024),
(26, '', 1025),
(27, '', 1026),
(28, '', 1027),
(29, '', 1028),
(30, '', 1029),
(31, '', 1030),
(32, '', 1031),
(33, '', 1032),
(34, '', 1033),
(35, '', 1034),
(36, '', 1035),
(37, '1004', 1051),
(38, '', 1053);

-- --------------------------------------------------------

--
-- Table structure for table `staff_address_details`
--

CREATE TABLE IF NOT EXISTS `staff_address_details` (
  `address_ID` int(10) NOT NULL AUTO_INCREMENT,
  `staff_ID` int(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `area` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`address_ID`),
  KEY `staff_ID` (`staff_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `staff_address_details`
--

INSERT INTO `staff_address_details` (`address_ID`, `staff_ID`, `address`, `area`, `city`, `district`, `pincode`, `state`, `date`, `status`) VALUES
(1, 1, 'near state bank of india kusum', 'Kusumkhera', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-02-23', '1'),
(2, 2, 'Lamachaur', 'Lamachaur', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-23', '1'),
(3, 3, 'Kaladhungi', 'Kaladhungi', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-17', '1'),
(4, 4, 'Kamaluaganja', 'kamaluaganja', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-05', '1'),
(5, 5, 'Halduchaur', 'Lalkuan', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-10', '1'),
(6, 6, 'Near Walkways Mall', 'Kathgodam', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-23', '1'),
(7, 7, 'Near MBPG College', 'Kathgodam', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2018-09-12', '1'),
(8, 8, 'Near Roadways bus station', 'Haldwani', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-23', '1'),
(9, 9, 'Near Corbette Falls', 'Ramnagar', 'Ramnagar', 'Nainital', '244715', 'Uttarakhand', '2019-04-23', '1'),
(10, 10, 'Near Kathgodam Railway Station', 'Kathgodam', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-23', '1'),
(11, 11, 'Kashipur Road', 'Ramnagar', 'Ramnagar', 'Nainital', '244715', 'Uttarakhand', '2019-04-23', '1'),
(12, 12, 'Near Vishal Mega Mart', 'Kathgodam', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-23', '1'),
(13, 13, 'Near Mukhani chauraha', 'Haldwani', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-23', '1'),
(14, 14, 'Railway Bazar', 'Haldwani', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-23', '1'),
(15, 15, 'Near Mukhani chauraha', 'Haldwani', 'Haldwani', 'Nainital', '263139', 'Uttarakhand', '2019-04-23', '1');

-- --------------------------------------------------------

--
-- Table structure for table `staff_contact_details`
--

CREATE TABLE IF NOT EXISTS `staff_contact_details` (
  `contact_ID` int(10) NOT NULL AUTO_INCREMENT,
  `staff_ID` int(20) DEFAULT NULL,
  `contact` decimal(10,0) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`contact_ID`),
  KEY `staff_ID` (`staff_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `staff_contact_details`
--

INSERT INTO `staff_contact_details` (`contact_ID`, `staff_ID`, `contact`, `date`, `status`) VALUES
(1, 1, '9419233333', '2019-04-17', '1'),
(2, 2, '9419233334', '2019-04-10', '1'),
(3, 3, '7658433467', '2019-04-23', '1'),
(4, 4, '8765402110', '2019-04-23', '1'),
(5, 5, '7658433476', '2019-04-23', '1'),
(6, 6, '8976543009', '2019-04-23', '1'),
(7, 7, '7658433467', '2019-04-23', '1'),
(8, 8, '7778543209', '2019-04-23', '1'),
(9, 9, '9857645321', '2019-04-23', '1'),
(10, 10, '7778543201', '2019-04-23', '1'),
(11, 11, '9857645321', '2019-04-23', '1'),
(12, 12, '8765402342', '2019-04-23', '1'),
(13, 13, '7658433476', '2019-04-23', '1'),
(14, 14, '8765402341', '2019-04-23', '1'),
(15, 15, '8856754300', '2019-04-23', '1');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE IF NOT EXISTS `staff_details` (
  `staff_ID` int(20) NOT NULL AUTO_INCREMENT,
  `first_Name` varchar(20) DEFAULT NULL,
  `last_Name` varchar(20) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nationality` varchar(10) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `blood_Group` varchar(10) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`staff_ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_ID`, `first_Name`, `last_Name`, `gender`, `dob`, `nationality`, `category`, `blood_Group`, `designation`, `username`, `status`) VALUES
(1, 'Rahul', 'Kaushik', 'MALE', '2019-04-03', 'Indian', 'GENERAL', 'O+', 'Faculty', 'fms', '1'),
(2, 'Pawan', 'Shah', 'MALE', '2019-04-16', 'Indian', 'GENERAL', 'A+', 'Accountant', 'fms', '1'),
(3, 'Ashish', 'Pant', 'MALE', '1988-02-10', 'Indian', 'GENERAL', 'O+', 'Faculty', 'fms', '1'),
(4, 'Abhishek', 'Pandey', 'MALE', '2019-04-28', 'indian', 'GENERAL', 'O+', 'Accountant', 'fms', '1'),
(5, 'Ankit', 'Pathak', 'MALE', '2019-04-23', 'indian', 'GENERAL', 'O+', 'Faculty', 'fms', '1'),
(6, 'Manish', 'Kumar', 'Male', '1991-03-12', 'Indian', 'SC', 'AB', 'Faculty', 'fms', '1'),
(7, 'Kamla', 'Tiwari', 'Femal', '1988-02-04', 'Indian', 'GENERAL', 'A+', 'Faculty', 'fms', '1'),
(8, 'Om', 'Prakash', 'Male', '1991-08-19', 'Indian', 'SC', 'A+', 'Faculty', 'fms', '1'),
(9, 'Pramod', 'Dubey', 'Femal', '1986-01-07', 'Indian', 'GENERAL', 'A+', 'FACULTY', 'fms', '1'),
(10, 'Rohit', 'Mehra', 'Male', '1986-09-14', 'Indian', 'GENERAL', 'A+', 'Faculty', 'fms', '1'),
(11, 'Harish', 'Shah', 'Male', '1989-11-07', 'Indian', 'GENERAL', 'A+', 'FACULTY', 'fms', '1'),
(12, 'Manisha', 'Bisht', 'Femal', '1991-07-19', 'Indian', 'GENERAL', 'AB', 'Faculty', 'fms', '1'),
(13, 'Krishna', 'Bhatt', 'Male', '1986-09-22', 'Indian', 'GENERAL', 'AB', 'FACULTY', 'fms', '1'),
(14, 'Hemant', 'Mishra', 'Male', '1991-03-12', 'Indian', 'GENERAL', 'A+', 'Faculty', 'fms', '1'),
(15, 'Kusumlata', 'Shah', 'Femal', '1986-09-22', 'Indian', 'GENERAL', 'AB', 'FACULTY', 'fms', '1');

-- --------------------------------------------------------

--
-- Table structure for table `staff_email_details`
--

CREATE TABLE IF NOT EXISTS `staff_email_details` (
  `email_ID` int(10) NOT NULL AUTO_INCREMENT,
  `staff_ID` int(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`email_ID`),
  KEY `staff_ID` (`staff_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `staff_email_details`
--

INSERT INTO `staff_email_details` (`email_ID`, `staff_ID`, `email`, `date`, `status`) VALUES
(1, 1, 'rahul@gmail.com', '2019-04-17', '1'),
(2, 2, 'pawan@gmail.com', '2019-04-10', '1'),
(3, 3, 'Ashish@gmail.com', '2019-03-03', '1'),
(4, 4, 'abhishek@gmail.com', '2019-04-04', '1'),
(5, 5, 'ankit@gmail.com', '2019-01-01', '1'),
(6, 6, 'Manish1@gmail.com', '2019-01-01', '1'),
(7, 7, 'Kamla@gmail.com', NULL, NULL),
(8, 8, 'Om@gmail.com', '2019-01-01', '1'),
(9, 9, 'pramod@gmail.com', '2019-01-01', '1'),
(10, 10, 'rohit@gmail.com', '2019-01-01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `static_fee_associate_class`
--

CREATE TABLE IF NOT EXISTS `static_fee_associate_class` (
  `static_class_fee_ID` int(10) NOT NULL AUTO_INCREMENT,
  `class_sess_ID` varchar(20) NOT NULL,
  `static_head_ID` int(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`static_class_fee_ID`),
  KEY `static_head_id` (`static_head_ID`),
  KEY `user_name` (`username`),
  KEY `static_head_ID_2` (`static_head_ID`),
  KEY `username` (`username`),
  KEY `class_sess_ID` (`class_sess_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `static_fee_associate_class`
--

INSERT INTO `static_fee_associate_class` (`static_class_fee_ID`, `class_sess_ID`, `static_head_ID`, `amount`, `username`, `date`) VALUES
(1, 'BCA2018-19_I', 100, 1000, 'fms', '2019-04-29'),
(2, 'BCA2018-19_I', 102, 800, 'fms', '2019-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `status_details`
--

CREATE TABLE IF NOT EXISTS `status_details` (
  `status_ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`status_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `status_details`
--

INSERT INTO `status_details` (`status_ID`, `name`, `status`) VALUES
(1, 'DEO', '1'),
(2, 'Accountant', '1'),
(3, 'Director', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_academic_details`
--

CREATE TABLE IF NOT EXISTS `student_academic_details` (
  `acad_ID` int(10) NOT NULL AUTO_INCREMENT,
  `student_ID` int(20) NOT NULL,
  `course_ID` int(10) NOT NULL,
  `sem_ID` int(10) NOT NULL,
  `batch` decimal(10,0) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`acad_ID`),
  KEY `course_ID` (`course_ID`),
  KEY `sem_ID` (`sem_ID`),
  KEY `student_ID` (`student_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `student_academic_details`
--

INSERT INTO `student_academic_details` (`acad_ID`, `student_ID`, `course_ID`, `sem_ID`, `batch`, `status`) VALUES
(1, 1000, 101, 1, '2018', '1'),
(2, 1001, 101, 1, '2018', '1'),
(3, 1002, 101, 1, '2018', '1'),
(4, 1003, 101, 1, '2018', '1'),
(5, 1004, 101, 1, '2018', '1'),
(6, 1005, 101, 1, '2018', '1'),
(7, 1006, 101, 1, '2018', '1'),
(8, 1007, 101, 1, '2018', '1'),
(9, 1008, 101, 1, '2018', '1'),
(10, 1009, 101, 1, '2018', '1'),
(11, 1010, 101, 1, '2018', '1'),
(12, 1011, 101, 1, '2018', '1'),
(13, 1012, 101, 1, '2018', '1'),
(14, 1013, 101, 1, '2018', '1'),
(15, 1014, 101, 1, '2018', '1'),
(16, 1015, 101, 1, '2018', '1'),
(17, 1016, 101, 1, '2018', '1'),
(18, 1017, 101, 1, '2018', '1'),
(19, 1018, 101, 1, '2018', '1'),
(20, 1019, 101, 1, '2018', '1'),
(21, 1020, 101, 1, '2018', '1'),
(22, 1021, 101, 1, '2018', '1'),
(23, 1022, 101, 1, '2018', '1'),
(24, 1023, 101, 1, '2018', '1'),
(25, 1024, 101, 1, '2018', '1'),
(26, 1025, 101, 1, '2018', '1'),
(27, 1026, 101, 1, '2018', '1'),
(28, 1027, 101, 1, '2018', '1'),
(29, 1028, 101, 1, '2018', '1'),
(30, 1029, 101, 1, '2018', '1'),
(31, 1030, 101, 1, '2018', '1'),
(32, 1031, 101, 1, '2018', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_address_details`
--

CREATE TABLE IF NOT EXISTS `student_address_details` (
  `address_ID` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(30) DEFAULT NULL,
  `student_ID` int(20) NOT NULL,
  `area` varchar(25) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`address_ID`),
  KEY `student_ID` (`student_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `student_address_details`
--

INSERT INTO `student_address_details` (`address_ID`, `address`, `student_ID`, `area`, `district`, `city`, `state`, `pincode`, `date`, `status`) VALUES
(1, 'near state bank of india', 1000, 'Kusumkhera', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-02-23', '1'),
(2, 'Lamachaur', 1001, 'Lamachaur', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(3, 'Near Jal Nigam Office,', 1002, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(4, 'Near Kathgodam Railway Station', 1003, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(5, 'Railway Bazar', 1004, 'Haldwani', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(6, 'Bareilly Road', 1005, 'Halduchaur', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(7, 'Near Roadways bus station', 1006, 'Haldwani', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(8, 'Near Mukhani chauraha', 1007, 'Haldwani', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(9, 'Near Vishal Mega Mart', 1008, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(10, 'Gas Godam Road', 1009, 'Kusumkhera', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(11, 'Near Char Dham Mandir', 1010, 'Fatehpur', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(12, 'Near MBPG College', 1011, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(13, 'Near Kamaluaganja Chauraha', 1012, 'Kamaluaganja', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(14, 'Kaladhungi Chauraha', 1013, 'Kaladhungi', 'Nainital', 'Haldwani', 'Uttarakhand', 263140, '2019-04-23', '1'),
(15, 'Near Walkways Mall', 1014, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(16, 'Near Kosi Barrage', 1015, 'Ramnagar', 'Nainital', 'Ramnagar', 'Uttarakhand', 244715, '2019-04-23', '1'),
(17, 'Near Jim Corbette Museum', 1016, 'Kaladhungi', 'Nainital', 'Haldwani', 'Uttarakhand', 263140, '2019-04-23', '1'),
(18, 'Near HP Petrol Pump', 1017, 'Kaladhungi', 'Nainital', 'Haldwani', 'Uttarakhand', 263140, '2019-04-23', '1'),
(19, 'Near Tiwari Sweets', 1018, 'Ramnagar', 'Nainital', 'Ramnagar', 'Uttarakhand', 244715, '2019-04-23', '1'),
(20, 'Ramnagar Main Market', 1019, 'Ramnagar', 'Nainital', 'Ramnagar', 'Uttarakhand', 244715, '2019-04-23', '1'),
(21, 'Near Big Bazar', 1020, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(22, 'RTO Office Road', 1021, 'Kusumkhera', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(23, 'Near Jal Nigam Office,', 1022, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(24, 'Bareilly Road', 1023, 'Halduchaur', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(25, 'Near MIET Kumaun', 1024, 'Lamachaur', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(26, 'Near DPS Haldwani', 1025, 'Lamachaur', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(27, 'Bartan Bazar', 1026, 'Haldwani', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(28, 'Near Hanuman Mandir', 1027, 'Kusumkhera', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(29, 'Near Vishal Mega Mart', 1028, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(30, 'Kashipur Road', 1029, 'Ramnagar', 'Nainital', 'Ramnagar', 'Uttarakhand', 244715, '2019-04-23', '1'),
(31, 'Near Walkways Mall', 1030, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(32, 'Near Corbette Falls', 1031, 'Kaladhungi', 'Nainital', 'Haldwani', 'Uttarakhand', 263140, '2019-04-23', '1'),
(35, 'Near Hydel Gate', 1032, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(36, 'Near Hotel Devashish', 1033, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(37, 'Near Corbette Resort', 1034, 'Ramnagar', 'Nainital', 'Ramnagar', 'Uttarakhand', 244715, '2019-04-23', '1'),
(38, 'Civil Lines', 1035, 'Rudrapur', 'U. S. Nagar', 'Rudrapur', 'Uttarakhand', 263153, '2019-04-23', '1'),
(39, 'Amba Nagar, Lal Danth    ', 1036, 'Haldwani', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(40, 'Azad Nagar, Heera Nagar    ', 1037, 'Haldwani', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(41, 'Barsati Road, Indira Nagar   ', 1038, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(42, 'Near Sidcul', 1039, 'Rudrapur', 'U. S. Nagar', 'Rudrapur', 'Uttarakhand', 263153, '2019-04-23', '1'),
(43, 'Alliance Colony', 1040, 'Rudrapur', 'US Nagar', 'Rudrapur', 'Uttarakhand', 263154, '2019-04-23', '1'),
(44, 'Kashipur Road', 1041, 'Ramnagar', 'Nainital', 'Ramnagar', 'Uttarakhand', 244715, '2019-04-23', '1'),
(45, 'Charayal Nayabad   ', 1042, 'Haldwani', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(46, 'Beersheba Road, Subhash Nagar ', 1043, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(47, 'Near Vishal Mega Mart', 1044, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(48, 'Near Corbette Museum', 1045, 'Kaladhungi', 'Nainital', 'Haldwani', 'Uttarakhand', 263140, '2019-04-23', '1'),
(49, 'Near Jal Nigam Office,', 1046, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(50, 'Near MBPG College', 1047, 'Kathgodam', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(51, 'Railway Bazar', 1048, 'Haldwani', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(52, 'Near Mukhani chauraha', 1049, 'Haldwani', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, '2019-04-23', '1'),
(53, 'near state bank of india', 1051, 'Kusumkhera', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, NULL, NULL),
(54, 'Kotabagh', 1053, 'Hari Nagar', 'Nainital', 'Haldwani', 'Uttarakhand', 263139, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_contact_details`
--

CREATE TABLE IF NOT EXISTS `student_contact_details` (
  `contact_ID` int(10) NOT NULL AUTO_INCREMENT,
  `contact` decimal(10,0) DEFAULT NULL,
  `student_ID` int(20) NOT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`contact_ID`),
  KEY `student_ID` (`student_ID`),
  KEY `status` (`status`),
  KEY `student_ID_2` (`student_ID`),
  KEY `student_ID_3` (`student_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `student_contact_details`
--

INSERT INTO `student_contact_details` (`contact_ID`, `contact`, `student_ID`, `status`, `date`) VALUES
(1, '9412929975', 1009, '1', '2019-02-23'),
(2, '9412929973', 1000, '1', '2019-04-18'),
(3, '6784377886', 1010, '1', '2019-04-16'),
(4, '9281233882', 1001, '1', '2019-02-23'),
(5, '8765677886', 1002, '1', '2019-04-25'),
(6, '8765544665', 1003, '1', '2019-02-23'),
(7, '6788977886', 1004, '1', '0000-00-00'),
(8, '9888988776', 1005, '1', '2019-02-23'),
(9, '8765677886', 1006, '1', '2019-04-16'),
(10, '9412929973', 1007, '1', '2019-01-30'),
(11, '8764677886', 1008, '1', '2019-04-16'),
(12, '9857645321', 1011, '1', '2019-04-23'),
(13, '8765402341', 1012, '1', '2019-03-22'),
(14, '7658433476', 1013, '1', '2019-03-22'),
(15, '8765402342', 1014, '1', '0000-00-00'),
(16, '7658433467', 1015, '1', '2019-04-23'),
(17, '7778543209', 1016, '1', '2019-04-23'),
(18, '8856754300', 1017, '1', '2019-04-23'),
(19, '8976543009', 1018, '1', '2019-04-23'),
(20, '7776786543', 1019, '1', '2019-04-23'),
(21, '8765402110', 1020, '1', '2019-04-23'),
(22, '9857645674', 1021, '1', '2019-04-23'),
(23, '7778543201', 1022, '1', '2019-04-23'),
(24, '7895443321', 1023, '1', '2019-04-23'),
(25, '9990087612', 1024, '1', '2019-04-23'),
(26, '7865554490', 1025, '1', '2019-04-23'),
(27, '7987770665', 1026, '1', '2019-04-23'),
(28, '9857645356', 1027, '1', '2019-04-23'),
(29, '8754446001', 1028, '1', '2019-04-23'),
(30, '7776786510', 1029, '1', '2019-04-23'),
(31, '9563458001', 1030, '1', '2019-04-23'),
(32, '9857640910', 1031, '1', '2019-04-23'),
(33, '8765401009', 1032, '1', '2019-04-23'),
(34, '7658430023', 1033, '1', '2019-04-23'),
(35, '8765402011', 1034, '1', '2019-04-23'),
(36, '9927234562', 1035, '1', '2019-04-23'),
(37, '8976543001', 1036, '1', '2019-04-23'),
(38, '8856756771', 1037, '1', '2019-04-23'),
(39, '8765402222', 1038, '1', '2019-04-23'),
(40, '8876543001', 1039, '1', '2019-04-23'),
(41, '8834545423', 1040, '1', '2019-04-23'),
(42, '7098854320', 1041, '1', '2019-04-23'),
(43, '7060028260', 1042, '1', '2019-04-23'),
(44, '9887603468', 1043, '1', '2019-04-23'),
(45, '6005603423', 1044, '1', '2019-04-23'),
(46, '8006802343', 1045, '1', '2019-04-23'),
(47, '7060034560', 1046, '1', '2019-04-23'),
(48, '7890654400', 1047, '1', '2019-04-23'),
(49, '8756778901', 1048, '1', '2019-04-23'),
(50, '9934567801', 1049, '1', '2019-04-23'),
(51, '9412929973', 1051, NULL, '2019-04-18'),
(52, '9456895715', 1053, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `student_ID` int(20) NOT NULL AUTO_INCREMENT,
  `first_Name` varchar(20) DEFAULT NULL,
  `last_Name` varchar(20) DEFAULT NULL,
  `fathers_Name` varchar(20) DEFAULT NULL,
  `mothers_Name` varchar(20) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `blood_Group` varchar(5) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`student_ID`),
  KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `username_3` (`username`),
  KEY `username_4` (`username`),
  KEY `username_5` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1054 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_ID`, `first_Name`, `last_Name`, `fathers_Name`, `mothers_Name`, `category`, `gender`, `nationality`, `dob`, `blood_Group`, `status`, `username`) VALUES
(1000, 'AKSHAT', 'SAXENA', 'AMIT KUMAR SAXENA', 'VARTIKA SAXENA', 'GENERAL', NULL, 'INDIAN', '2018-12-12', 'A+', '1', 'fms'),
(1001, 'ANAND', 'TIGGA', 'RANJEET TIGGA', 'URMILLA TIGGA', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1002, 'AYUSMAN ', 'SATI', 'KAMAL SATI', 'DEEPA SATI', 'GENERAL', NULL, 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1003, 'BHASKER SINGH', 'NAINWAL', 'MADAN SINGH', 'HEMA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1004, 'DEEPIKA ', 'PANT', 'UMESH CHANDRA PANT', 'LATA PANT', 'GENERAL', NULL, 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1005, 'DEVAM ', 'KHATI', 'RAMESH SINGH KHATI', 'BHAGWATI KHATI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1006, 'DIKSHITA ', 'TIWARI', 'AJAY TIWARI', 'HEENA TIWARI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1007, 'GAURAV ', 'PANDEY', 'BACCHI DUTT PANDEY', 'KAMLA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1008, 'GEETANJALI', ' JOSHI', 'DEEPAK CHANDRA JOSHI', 'BABITA JOSHI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1009, 'GUNJAN ', 'PANDEY', 'SHYAM SUNDAR PANDEY', 'BHAWNA DEVI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'B+', '1', 'fms'),
(1010, 'HARSHITA ', 'DWIVEDI', 'HARI OM DWIVEDI', 'NEEMA DWIVEDI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1011, 'JHILMIL ', 'PANT', 'SUBHASH PANT', 'SUSHILA PANT', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1012, 'KAPIL ', 'MEHRA', 'SURESH CHANDRA SINGH', 'UMA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1013, 'KHUSBOO ', 'TIWARI', 'GOPAL TIWARI', 'LALITA TIWARI', 'GENERAL', NULL, 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1014, 'KOMAL ', 'ARYA', 'DEEPAK KUMAR', 'NANDI DEVI', 'SC', NULL, 'INDIAN', '0000-00-00', 'O+', '1', 'fms'),
(1015, 'LAKSHITA ', 'JOSHI', 'PRAKASH CHANDRA JOSH', 'MAMTA JOSHI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1016, 'LOVELESH ', 'JOSHI', 'HARISH CHANDRA JOSHI', 'PUSHPA JOSHI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1017, 'MANISHA ', 'CHADDA', 'KAUSHAL SINGH CHADDA', 'ANITA CHADDA', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1018, 'MAYANK ', 'SINGH', 'LALIT MOHAN', 'USHA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1019, 'NAVYA ', 'SHUKLA', 'MUNNA LAL SHUKLA', 'BABITA SHUKLA', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1020, 'NEHA ', 'BARGALI', 'HARENDRA BARGALI', 'PUSHPA BARGALI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1021, 'NIHARIKA', ' BHATT', 'MANOJ BHATT', 'BHAWNA BHATT', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1022, 'NIVEDITA ', 'DANU', 'RAJENDRA SINGH DANU', 'BHAWNA DEVI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1023, 'POORVA ', 'LOHIYA', 'HEM CHANDRA', 'MEENA LOHIYA', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1024, 'PRANSHU ', 'BHATT', 'DEEP CHANDRA BHATT', 'RUKMANI BHATT', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1025, 'PRIYANJAL ', 'BHANDARI', 'SHYAM SINGH BHANDARI', 'REKHA BHANDARI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1026, 'PRIYANK ', 'OJHA', 'HARISH CHANDRA', 'UMA', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1027, 'RAHUL ', 'JOSHI', 'RAJENDRA PRASAD JOSH', 'KIRAN JOSHI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'O+', '1', 'fms'),
(1028, 'RIYA ', 'KARNATAK', 'GIRISH CHANDRA KARNA', 'VIMLA KARNATAK', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1029, 'RIYA ', 'RANA', 'MOHAN SINGH RANA', 'DEEPA RANA', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1030, 'ROHAN ', 'FARTYAL', 'KRIPAL SINGH FARTYAL', 'BHWANA FARTIYAL', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1031, 'ROSHNI ', 'SHARMA', 'CHANDRA SHEKHAR SHAR', 'KAMLESH SHARMA', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1032, 'SAGAR ', 'KASHYAP', 'PAPPU KASHYAP', 'PRITI KASHYAP', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'B+', '1', 'fms'),
(1033, 'SAHIL ', 'SINGH', 'JITENDRA SINGH', 'DEEPA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1034, 'SARITA ', 'RAUTELA', 'RAJENDRA SINGH', 'HEMA DEVI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1035, 'SAURABH ', 'DANU', 'MADHO SINGH DANU', 'BASANTI DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1036, 'SONU', 'SINGH PADIYAR', 'PRAKASH SINGH', 'PREMA', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1037, 'VAIBHAV ', 'MISHRA', 'DEEPAK MISHRA', 'ASHA MISHRA', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1038, 'VANSHIKA', 'DURGAPAL', 'BASANT BALLABH', 'GEETA DURGAPAL', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1039, 'VIDHI', 'KANDPAL', 'VINOD KANDPAL', 'SAROJ KANDPAL', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'O-', '1', 'fms'),
(1040, 'VINAY ', 'GOSWAMI', 'SHANKAR PURI GOSWAMI', 'MEENA GOSWAMI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1041, 'YAMAN', 'SINGH KOSHYARI', 'KUNDAN KOSHYARI', 'REKHA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1042, 'YASHASWI ', 'PADIYAR', 'PRATAP SINGH PADIYAR', 'GOVINDI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1043, 'ROHAN ', 'Singh', 'Kamal Singh', 'Kamla', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1044, 'Shiv', 'Kumar', 'Jitendra kumar', 'SAROJ ', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1045, 'Ram', 'Singh', 'Ravi Singh', 'Anju', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1046, 'Shubham', 'Pandey', 'Keshav Pandey', 'Anandi', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
(1047, 'Amit', 'Rawat', 'Kamal Rawat', 'Champa Rawat', 'General', 'Male', 'Indian', '2019-04-06', 'B+', '1', 'fms'),
(1048, 'Abhishek', 'Rawat', 'Vimal Rawat', 'Sheela Rawat', 'General', 'Male', 'Indian', '2019-04-06', 'B+', '1', 'fms'),
(1049, 'Ankit', 'Pathak', 'Jitendra Pathak', 'Rekha Pathak', 'GENERAL', NULL, 'Indian', '2019-04-09', 'B+', '1', 'fms'),
(1051, 'neeta', 'SAXENA', 'AMIT KUMAR SAXENA', 'VARTIKA SAXENA', 'GENERAL', NULL, 'INDIAN', '2018-12-12', 'A+', '1', 'fms'),
(1053, 'ANIL', 'HARIKOTA', 'Bindal Harikota', 'Beena Harikota', 'select', NULL, 'INDIAN', '2019-04-01', 'O+', '1', 'fms');

-- --------------------------------------------------------

--
-- Table structure for table `student_email_details`
--

CREATE TABLE IF NOT EXISTS `student_email_details` (
  `email_ID` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) DEFAULT NULL,
  `student_ID` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`email_ID`),
  KEY `student_ID` (`student_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `student_email_details`
--

INSERT INTO `student_email_details` (`email_ID`, `email`, `student_ID`, `date`, `status`) VALUES
(1, 'akshat@gmail.com', 1000, '2019-04-18', '1'),
(2, 'anand@gmail.com', 1001, '2019-04-16', '1'),
(3, 'ayushman@gmial.com', 1002, '2019-04-25', '1'),
(4, 'bhaskar@gmail.com', 1003, '2019-04-16', '1'),
(5, 'devam@gmail.com', 1004, '2019-04-18', '1'),
(6, 'dikshita@gmail.com', 1005, '2019-06-23', '1'),
(8, 'gaurav@gmail.cpm', 1007, '2019-03-21', '1'),
(9, 'geetanjali@gmail.com', 1008, '2019-03-22', '1'),
(10, 'gunjan@gmail.com', 1009, '2019-11-21', '1'),
(11, 'harshita@gmail.com', 1010, '2019-02-22', '1'),
(12, 'jhilmil@gmail.com', 1011, '2019-03-22', '1'),
(13, 'kapil@gmail.com', 1012, '2019-03-22', '1'),
(14, 'khusboo@gmail.com', 1013, '2019-03-22', '1'),
(15, 'komalA@gmail.com', 1014, '2019-04-24', '1'),
(16, 'lakshitaK@gmail.com', 1015, '2019-02-01', '1'),
(17, 'Lovelesh@gmail.com', 1016, '2019-03-01', '1'),
(18, 'akshat@gmail.com', 1051, '2019-04-18', NULL),
(19, 'anil@gmail.com', 1053, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_in_session`
--

CREATE TABLE IF NOT EXISTS `student_in_session` (
  `std_ID` int(10) NOT NULL AUTO_INCREMENT,
  `student_ID` int(20) NOT NULL,
  `class_sess_ID` varchar(20) NOT NULL,
  `session_ID` varchar(20) NOT NULL,
  `class_ID` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` decimal(2,0) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`std_ID`),
  KEY `class_sess_ID` (`class_sess_ID`),
  KEY `session_ID` (`session_ID`),
  KEY `username` (`username`),
  KEY `student_ID` (`student_ID`),
  KEY `class_ID` (`class_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student_in_session`
--

INSERT INTO `student_in_session` (`std_ID`, `student_ID`, `class_sess_ID`, `session_ID`, `class_ID`, `username`, `status`, `date`) VALUES
(1, 1000, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-27'),
(2, 1001, 'BCA2018-19_I', '2018-19', 2, 'charu', '1', '2019-02-23'),
(3, 1002, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-09'),
(4, 1003, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-10'),
(5, 1004, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-05'),
(6, 1005, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-17'),
(7, 1006, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-15'),
(8, 1007, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-01'),
(9, 1008, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-15'),
(10, 1009, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `student_register_discount`
--

CREATE TABLE IF NOT EXISTS `student_register_discount` (
  `d_ID` int(10) NOT NULL AUTO_INCREMENT,
  `student_ID` int(20) NOT NULL,
  `discount_ID` int(10) NOT NULL,
  `discount_Offered` int(3) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`d_ID`),
  KEY `username` (`username`),
  KEY `student_ID` (`student_ID`),
  KEY `discount_ID` (`discount_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student_register_discount`
--

INSERT INTO `student_register_discount` (`d_ID`, `student_ID`, `discount_ID`, `discount_Offered`, `date`, `username`, `status`) VALUES
(1, 1000, 10, 1, '2019-04-06', 'fms', '1'),
(2, 1001, 10, 1, '2019-04-06', 'fms', '1'),
(3, 1001, 11, 2, '2019-04-06', 'fms', '1'),
(4, 1002, 11, 1, '2019-04-06', 'fms', '1'),
(5, 1003, 10, 1, '2019-04-06', 'fms', '1'),
(6, 1003, 11, 1, '2019-04-06', 'fms', '1');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE IF NOT EXISTS `testing` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `hobby` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`ID`, `name`, `hobby`) VALUES
(1, 'kanika', 'xyz');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_fee_session`
--
ALTER TABLE `class_fee_session`
  ADD CONSTRAINT `class_fee_session_ibfk_2` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_fee_session_ibfk_4` FOREIGN KEY (`class_sess_ID`) REFERENCES `class_in_session` (`class_sess_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_fee_session_ibfk_6` FOREIGN KEY (`session_ID`) REFERENCES `session_master` (`session_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_in_session`
--
ALTER TABLE `class_in_session`
  ADD CONSTRAINT `class_in_session_ibfk_3` FOREIGN KEY (`session_ID`) REFERENCES `session_master` (`session_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_flexible_head`
--
ALTER TABLE `fee_flexible_head`
  ADD CONSTRAINT `fee_flexible_head_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_invoice`
--
ALTER TABLE `fee_invoice`
  ADD CONSTRAINT `fee_invoice_ibfk_2` FOREIGN KEY (`session_ID`) REFERENCES `session_master` (`session_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_invoice_ibfk_3` FOREIGN KEY (`class_sess_ID`) REFERENCES `class_in_session` (`class_sess_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_invoice_ibfk_4` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_static_head`
--
ALTER TABLE `fee_static_head`
  ADD CONSTRAINT `fee_static_head_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_type`
--
ALTER TABLE `fee_type`
  ADD CONSTRAINT `fee_type_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flexible_fee_associate_class`
--
ALTER TABLE `flexible_fee_associate_class`
  ADD CONSTRAINT `flexible_fee_associate_class_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `flexible_fee_associate_class_ibfk_2` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `flexible_fee_associate_class_ibfk_3` FOREIGN KEY (`flexible_head_ID`) REFERENCES `fee_flexible_head` (`flexible_head_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `login_details_ibfk_1` FOREIGN KEY (`status_ID`) REFERENCES `status_details` (`status_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semester_details`
--
ALTER TABLE `semester_details`
  ADD CONSTRAINT `semester_details_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course_details` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_contact_details`
--
ALTER TABLE `staff_contact_details`
  ADD CONSTRAINT `staff_contact_details_ibfk_1` FOREIGN KEY (`staff_ID`) REFERENCES `staff_details` (`staff_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD CONSTRAINT `staff_details_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_email_details`
--
ALTER TABLE `staff_email_details`
  ADD CONSTRAINT `staff_email_details_ibfk_1` FOREIGN KEY (`staff_ID`) REFERENCES `staff_details` (`staff_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `static_fee_associate_class`
--
ALTER TABLE `static_fee_associate_class`
  ADD CONSTRAINT `static_fee_associate_class_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `static_fee_associate_class_ibfk_2` FOREIGN KEY (`class_sess_ID`) REFERENCES `class_in_session` (`class_sess_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_academic_details`
--
ALTER TABLE `student_academic_details`
  ADD CONSTRAINT `student_academic_details_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course_details` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_academic_details_ibfk_2` FOREIGN KEY (`sem_ID`) REFERENCES `semester_details` (`sem_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_address_details`
--
ALTER TABLE `student_address_details`
  ADD CONSTRAINT `student_address_details_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_contact_details`
--
ALTER TABLE `student_contact_details`
  ADD CONSTRAINT `student_contact_details_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`);

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_email_details`
--
ALTER TABLE `student_email_details`
  ADD CONSTRAINT `student_email_details_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_register_discount`
--
ALTER TABLE `student_register_discount`
  ADD CONSTRAINT `student_register_discount_ibfk_2` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_register_discount_ibfk_3` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_register_discount_ibfk_4` FOREIGN KEY (`discount_ID`) REFERENCES `discount_details` (`discount_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
