-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 09:29 AM
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
-- Table structure for table `class_fee_session`
--

CREATE TABLE IF NOT EXISTS `class_fee_session` (
  `class_fee_sess_ID` varchar(20) NOT NULL,
  `class_fee_ID` varchar(20) NOT NULL,
  `class_sess_ID` varchar(20) NOT NULL,
  `session_ID` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`class_fee_sess_ID`),
  KEY `class_sess_id` (`class_sess_ID`),
  KEY `class_id` (`session_ID`),
  KEY `user_name` (`username`),
  KEY `class_fee_id` (`class_fee_ID`),
  KEY `class_fee_ID_2` (`class_fee_ID`),
  KEY `class_sess_ID_2` (`class_sess_ID`),
  KEY `session_ID` (`session_ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_in_session`
--

CREATE TABLE IF NOT EXISTS `class_in_session` (
  `class_sess_ID` varchar(20) NOT NULL DEFAULT '',
  `session_ID` varchar(20) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`class_sess_ID`),
  KEY `session_ID` (`session_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_in_session`
--

INSERT INTO `class_in_session` (`class_sess_ID`, `session_ID`, `class`) VALUES
('BCAivA201819', '2018-19', 'BCA_iv_A'),
('BCAvA201819', '2018-19', 'BCA_v_A'),
('BCAviA201920', '2019-20', 'BCA_vi_A'),
('BCAViiA202122', '2021-22', 'BCA_Vii_A');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE IF NOT EXISTS `course_details` (
  `course_ID` varchar(20) NOT NULL DEFAULT '',
  `course` varchar(20) DEFAULT NULL,
  `university` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`course_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_ID`, `course`, `university`) VALUES
('cc1', 'bba', 'kumaon university'),
('cc2', 'bca', 'kumaon university'),
('cc3', 'btech', 'kumaon university'),
('cc4', 'mba', 'kumaon university');

-- --------------------------------------------------------

--
-- Table structure for table `discount_details`
--

CREATE TABLE IF NOT EXISTS `discount_details` (
  `discount_ID` varchar(20) NOT NULL DEFAULT '',
  `discount_Type` varchar(10) DEFAULT NULL,
  `discount_Amount` decimal(10,0) DEFAULT NULL,
  `unit` varchar(5) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`discount_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount_details`
--

INSERT INTO `discount_details` (`discount_ID`, `discount_Type`, `discount_Amount`, `unit`, `category`, `status`) VALUES
('D100', 'reference', '100', 'Rs', 'General', '1'),
('D101', 'refrence', '500', 'Rs.', 'general', '1'),
('D102', 'refrence', '500', 'Rs.', 'General', '1'),
('D104', 'refrence', '500', 'Rs.', 'General', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fee_flexible_head`
--

CREATE TABLE IF NOT EXISTS `fee_flexible_head` (
  `flexible_head_ID` varchar(20) NOT NULL,
  `fee_Head` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_flexible_head`
--

INSERT INTO `fee_flexible_head` (`flexible_head_ID`, `fee_Head`, `amount`, `username`, `date`) VALUES
('ff10', 'tution', 1000, 'fms', '2019-03-04'),
('ff11', 'tution', 1000, 'kanika', '2019-03-08'),
('ff22', 'tution', 700, 'lp', '2019-03-09'),
('ff33', 'tution', 600, 'mng', '2019-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `fee_invoice`
--

CREATE TABLE IF NOT EXISTS `fee_invoice` (
  `invoice_ID` varchar(20) NOT NULL,
  `session_ID` varchar(20) NOT NULL,
  `class_sess_ID` varchar(20) NOT NULL,
  `year_From` int(10) NOT NULL,
  `month_From` int(10) NOT NULL,
  `year_To` int(10) NOT NULL,
  `month_To` int(10) NOT NULL,
  `no_of_Month` int(10) NOT NULL,
  `description` varchar(20) NOT NULL,
  `student_ID` varchar(20) NOT NULL,
  `static_head_ID` varchar(20) NOT NULL,
  `static_head_Amount` int(10) NOT NULL,
  `flexible_head_ID` varchar(20) NOT NULL,
  `flexible_head_Amount` int(10) NOT NULL,
  `actual_Amount` int(10) NOT NULL,
  `applicable_discount_Amount` int(10) NOT NULL,
  `actual_due_Amount` int(10) NOT NULL,
  `previous_due_Amount` int(10) NOT NULL,
  `due_Amount` int(10) NOT NULL,
  PRIMARY KEY (`invoice_ID`),
  KEY `sess_id` (`session_ID`),
  KEY `class_sem_id` (`class_sess_ID`),
  KEY `student_id` (`student_ID`),
  KEY `session_ID` (`session_ID`),
  KEY `class_sess_ID` (`class_sess_ID`),
  KEY `student_ID_2` (`student_ID`),
  KEY `static_head_ID` (`static_head_ID`),
  KEY `flexible_head_ID` (`flexible_head_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_invoice`
--

INSERT INTO `fee_invoice` (`invoice_ID`, `session_ID`, `class_sess_ID`, `year_From`, `month_From`, `year_To`, `month_To`, `no_of_Month`, `description`, `student_ID`, `static_head_ID`, `static_head_Amount`, `flexible_head_ID`, `flexible_head_Amount`, `actual_Amount`, `applicable_discount_Amount`, `actual_due_Amount`, `previous_due_Amount`, `due_Amount`) VALUES
('i2001', '2018-19', 'BCAivA201819', 2012, 0, 2019, 0, 12, 'present', 's20000', 'st11', 500, 'ff10', 1000, 1200, 500, 200, 100, 600),
('i2002', '2019-20', 'BCAvA201819', 2012, 0, 2019, 0, 12, 'Present', 's20001', 'st22', 500, 'ff11', 500, 600, 50, 70, 200, 500),
('i2003', '2020-21', 'BCAviA201920', 2012, 0, 2019, 0, 12, 'present', 's20002', 'st33', 600, 'ff22', 400, 500, 100, 100, 200, 300),
('i2004', '2021-22', 'BCAViiA202122', 2012, 0, 201, 0, 12, 'present', 's20003', 'st44', 500, 'ff33', 200, 1000, 100, 200, 300, 500);

-- --------------------------------------------------------

--
-- Table structure for table `fee_receipt`
--

CREATE TABLE IF NOT EXISTS `fee_receipt` (
  `receipt_ID` varchar(20) NOT NULL,
  `invoice_ID` varchar(20) NOT NULL,
  `student_ID` varchar(20) NOT NULL,
  `discount_ID` varchar(20) NOT NULL,
  `discount_Status` int(2) NOT NULL,
  `discount_Amount` int(10) NOT NULL,
  `description` varchar(10) NOT NULL,
  `actual_paid_Amount` int(10) NOT NULL,
  `paid` int(10) NOT NULL,
  `fine` int(10) NOT NULL,
  `type_ID` varchar(20) NOT NULL,
  `fee_Mode` varchar(10) NOT NULL,
  `bank_Name` varchar(20) NOT NULL,
  `cheque_No` int(10) NOT NULL,
  `cheque_Date` date NOT NULL,
  `date_of_Entry` date NOT NULL,
  `session_ID` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`receipt_ID`),
  KEY `invoice_ID` (`invoice_ID`),
  KEY `student_ID` (`student_ID`),
  KEY `discount_ID` (`discount_ID`),
  KEY `type_ID` (`type_ID`),
  KEY `session_ID` (`session_ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_receipt`
--

INSERT INTO `fee_receipt` (`receipt_ID`, `invoice_ID`, `student_ID`, `discount_ID`, `discount_Status`, `discount_Amount`, `description`, `actual_paid_Amount`, `paid`, `fine`, `type_ID`, `fee_Mode`, `bank_Name`, `cheque_No`, `cheque_Date`, `date_of_Entry`, `session_ID`, `username`, `date`) VALUES
('rec11', 'i2001', 's20000', 'D100', 1, 500, 'paid', 1000, 500, 100, 'typ1', 'cash', 'bob', 2222, '2019-03-06', '2019-03-04', '2018-19', 'fms', '2019-03-06'),
('rec12', 'i2002', 's20001', 'D101', 0, 500, 'paid', 1500, 1500, 100, 'typ2', 'cash', 'bob', 3333, '2019-03-08', '2019-03-07', '2019-20', 'fms', '2019-03-19'),
('rec123', 'i2004', 's20003', 'D104', 1, 500, 'paid', 1000, 500, 200, 'typ4', 'cash', 'bob', 1123, '2019-03-16', '2019-03-08', '2021-22', 'fms', '2019-03-06'),
('rec13', 'i2003', 's20002', 'D102', 1, 100, 'paid', 200, 100, 100, 'typ3', 'cash', 'bob', 4444, '2019-03-01', '2019-03-12', '2020-21', 'fms', '2019-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `fee_static_head`
--

CREATE TABLE IF NOT EXISTS `fee_static_head` (
  `static_head_ID` varchar(20) NOT NULL,
  `fee_Head` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `discount_Applicable` int(2) NOT NULL,
  PRIMARY KEY (`static_head_ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_static_head`
--

INSERT INTO `fee_static_head` (`static_head_ID`, `fee_Head`, `username`, `date`, `amount`, `discount_Applicable`) VALUES
('st11', 'tution', 'fms', '2019-03-05', 99, 500),
('st22', 'tution', 'fms', '2019-03-06', 99, 100),
('st33', 'tution', 'fms', '2019-03-14', 99, 100),
('st44', 'tution', 'fms', '2019-03-13', 99, 100),
('st55', 'tution', 'fms', '2019-03-20', 99, 100);

-- --------------------------------------------------------

--
-- Table structure for table `fee_type`
--

CREATE TABLE IF NOT EXISTS `fee_type` (
  `type_ID` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`type_ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_type`
--

INSERT INTO `fee_type` (`type_ID`, `type`, `username`, `date`) VALUES
('typ1', 'cash', 'fms', '2019-03-06'),
('typ2', 'cash', 'fms', '2019-03-06'),
('typ3', 'cash', 'fms', '2019-03-05'),
('typ4', 'cash', 'fms', '2019-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status_ID` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `status_ID` (`status_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`, `status_ID`, `date`, `status`) VALUES
('fms', '111', '1', '2019-03-04', '1'),
('kanika', '123', '2', '2019-03-13', '1'),
('lp', '334', '4', '2019-03-20', '1'),
('mng', '234', '3', '2019-03-19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `semester_details`
--

CREATE TABLE IF NOT EXISTS `semester_details` (
  `sem_ID` varchar(20) NOT NULL DEFAULT '',
  `course_ID` varchar(20) DEFAULT NULL,
  `sem` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`sem_ID`),
  KEY `Course_ID` (`course_ID`),
  KEY `course_ID_2` (`course_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_details`
--

INSERT INTO `semester_details` (`sem_ID`, `course_ID`, `sem`) VALUES
('ss1', 'cc1', 'sem1'),
('ss2', 'cc2', 'sem1');

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
('2018-19', 2018, 2019, '2019-02-23'),
('2019-20', 2019, 2020, '2019-02-23'),
('2020-21', 2020, 20121, '2019-02-22'),
('2021-22', 2021, 2022, '2019-02-23'),
('2022-23', 2022, 2023, '2019-02-23'),
('2023-24', 2023, 2024, '2019-02-24'),
('2024-25', 2024, 2025, '2019-02-25'),
('2025-26', 2025, 2026, '2019-01-26'),
('2026-27', 2026, 2027, '2019-04-26'),
('2027-28', 2027, 2028, '0000-00-00'),
('2028-29', 2028, 2029, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `staff_address_details`
--

CREATE TABLE IF NOT EXISTS `staff_address_details` (
  `address_ID` varchar(20) NOT NULL DEFAULT '',
  `staff_ID` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`address_ID`),
  KEY `staff_ID` (`staff_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_address_details`
--

INSERT INTO `staff_address_details` (`address_ID`, `staff_ID`, `address`, `date`, `status`) VALUES
('a11', '1', 'Haldwani', '1997-02-03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `staff_contact_details`
--

CREATE TABLE IF NOT EXISTS `staff_contact_details` (
  `staff_ID` varchar(20) DEFAULT NULL,
  `contact_ID` varchar(20) NOT NULL DEFAULT '',
  `contact` decimal(10,0) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`contact_ID`),
  KEY `staff_ID` (`staff_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE IF NOT EXISTS `staff_details` (
  `staff_ID` varchar(20) NOT NULL DEFAULT '',
  `first_Name` varchar(20) DEFAULT NULL,
  `second_Name` varchar(20) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_email_details`
--

CREATE TABLE IF NOT EXISTS `staff_email_details` (
  `email_ID` varchar(20) NOT NULL DEFAULT '',
  `staff_ID` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`email_ID`),
  KEY `staff_ID` (`staff_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `static_fee_associate_class`
--

CREATE TABLE IF NOT EXISTS `static_fee_associate_class` (
  `class_fee_ID` varchar(20) NOT NULL,
  `session_ID` varchar(20) NOT NULL,
  `total_Fee` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`class_fee_ID`),
  KEY `user_name` (`username`),
  KEY `class_sess_ID` (`session_ID`),
  KEY `username` (`username`),
  KEY `session_ID` (`session_ID`),
  KEY `username_2` (`username`),
  KEY `session_ID_2` (`session_ID`),
  KEY `session_ID_3` (`session_ID`),
  KEY `session_ID_4` (`session_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `static_fee_associate_class_details`
--

CREATE TABLE IF NOT EXISTS `static_fee_associate_class_details` (
  `class_fee_detail_ID` varchar(20) NOT NULL,
  `class_fee_ID` varchar(20) NOT NULL,
  `static_head_ID` int(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`class_fee_detail_ID`),
  KEY `static_head_id` (`static_head_ID`),
  KEY `user_name` (`username`),
  KEY `class_fee_ID` (`class_fee_ID`),
  KEY `static_head_ID_2` (`static_head_ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_details`
--

CREATE TABLE IF NOT EXISTS `status_details` (
  `status_ID` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`status_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_details`
--

INSERT INTO `status_details` (`status_ID`, `name`, `status`) VALUES
('1', 'System Admin', '1'),
('2', 'DEO', '1'),
('3', 'Accountant', '1'),
('4', 'Student', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_academic_details`
--

CREATE TABLE IF NOT EXISTS `student_academic_details` (
  `student_ID` varchar(20) NOT NULL DEFAULT '',
  `course_ID` varchar(20) DEFAULT NULL,
  `sem_ID` varchar(20) DEFAULT NULL,
  `batch` decimal(10,0) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  `class_session_ID` varchar(20) NOT NULL,
  PRIMARY KEY (`student_ID`),
  KEY `course_ID` (`course_ID`),
  KEY `sem_ID` (`sem_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_academic_details`
--

INSERT INTO `student_academic_details` (`student_ID`, `course_ID`, `sem_ID`, `batch`, `status`, `class_session_ID`) VALUES
('s2000', 'cc1', 'ss1', '1', '1', 'BCAvA201819');

-- --------------------------------------------------------

--
-- Table structure for table `student_address_details`
--

CREATE TABLE IF NOT EXISTS `student_address_details` (
  `address_ID` varchar(20) NOT NULL DEFAULT '',
  `student_ID` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`address_ID`),
  KEY `Student_ID` (`student_ID`),
  KEY `student_ID_2` (`student_ID`),
  KEY `student_ID_3` (`student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_contact_details`
--

CREATE TABLE IF NOT EXISTS `student_contact_details` (
  `contact_ID` varchar(20) NOT NULL DEFAULT '',
  `student_ID` varchar(20) DEFAULT NULL,
  `contact` decimal(10,0) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`contact_ID`),
  KEY `Student_ID` (`student_ID`),
  KEY `student_ID_2` (`student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `student_ID` varchar(20) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_ID`, `first_Name`, `last_Name`, `fathers_Name`, `mothers_Name`, `category`, `gender`, `nationality`, `dob`, `blood_Group`, `status`, `username`) VALUES
('s20000', 'AKSHAT', 'SAXENA', 'AMIT KUMAR SAXENA', 'VARTIKA SAXENA', 'GENERAL', 'MALE', 'INDAIN', '2018-12-12', 'A+', '1', 'fms'),
('s20001', 'ANAND', 'TIGGA', 'RANJEET TIGGA', 'URMILLA TIGGA', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20002', 'AYUSMAN ', 'SATI', 'KAMAL SATI', 'DEEPA SATI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20003', 'BHASKER SINGH', 'NAINWAL', 'MADAN SINGH', 'HEMA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20004', 'DEEPIKA ', 'PANT', 'UMESH CHANDRA PANT', 'LATA PANT', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20005', 'DEVAM ', 'KHATI', 'RAMESH SINGH KHATI', 'BHAGWATI KHATI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20006', 'DIKSHITA ', 'TIWARI', 'AJAY TIWARI', 'HEENA TIWARI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20007', 'GAURAV ', 'PANDEY', 'BACCHI DUTT PANDEY', 'KAMLA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20008', 'GEETANJALI', ' JOSHI', 'DEEPAK CHANDRA JOSHI', 'BABITA JOSHI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20009', 'GUNJAN ', 'PANDEY', 'SHYAM SUNDAR PANDEY', 'BHAWNA DEVI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'B+', '1', 'fms'),
('s20010', 'HARSHITA ', 'DWIVEDI', 'HARI OM DWIVEDI', 'NEEMA DWIVEDI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20011', 'JHILMIL ', 'PANT', 'SUBHASH PANT', 'SUSHILA PANT', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20012', 'KAPIL ', 'MEHRA', 'SURESH CHANDRA SINGH', 'UMA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20013', 'KHUSBOO ', 'TIWARI', 'GOPAL TIWARI', 'LALITA TIWARI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20014', 'KOMAL ', 'ARYA', 'DEEPAK KUMAR', 'NANDI DEVI', 'SC', 'FEMALE', 'INDIAN', '0000-00-00', 'O+', '1', 'fms'),
('s20015', 'LAKSHITA ', 'JOSHI', 'PRAKASH CHANDRA JOSH', 'MAMTA JOSHI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20016', 'LOVELESH ', 'JOSHI', 'HARISH CHANDRA JOSHI', 'PUSHPA JOSHI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20017', 'MANISHA ', 'CHADDA', 'KAUSHAL SINGH CHADDA', 'ANITA CHADDA', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20018', 'MAYANK ', 'SINGH', 'LALIT MOHAN', 'USHA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20019', 'NAVYA ', 'SHUKLA', 'MUNNA LAL SHUKLA', 'BABITA SHUKLA', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20020', 'NEHA ', 'BARGALI', 'HARENDRA BARGALI', 'PUSHPA BARGALI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20021', 'NIHARIKA', ' BHATT', 'MANOJ BHATT', 'BHAWNA BHATT', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20022', 'NIVEDITA ', 'DANU', 'RAJENDRA SINGH DANU', 'BHAWNA DEVI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20023', 'POORVA ', 'LOHIYA', 'HEM CHANDRA', 'MEENA LOHIYA', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20024', 'PRANSHU ', 'BHATT', 'DEEP CHANDRA BHATT', 'RUKMANI BHATT', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20025', 'PRIYANJAL ', 'BHANDARI', 'SHYAM SINGH BHANDARI', 'REKHA BHANDARI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20026', 'PRIYANK ', 'OJHA', 'HARISH CHANDRA', 'UMA', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20027', 'RAHUL ', 'JOSHI', 'RAJENDRA PRASAD JOSH', 'KIRAN JOSHI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'O+', '1', 'fms'),
('s20028', 'RIYA ', 'KARNATAK', 'GIRISH CHANDRA KARNA', 'VIMLA KARNATAK', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20029', 'RIYA ', 'RANA', 'MOHAN SINGH RANA', 'DEEPA RANA', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20030', 'ROHAN ', 'FARTYAL', 'KRIPAL SINGH FARTYAL', 'BHWANA FARTIYAL', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20031', 'ROSHNI ', 'SHARMA', 'CHANDRA SHEKHAR SHAR', 'KAMLESH SHARMA', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20032', 'SAGAR ', 'KASHYAP', 'PAPPU KASHYAP', 'PRITI KASHYAP', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'B+', '1', 'fms'),
('s20033', 'SAHIL ', 'SINGH', 'JITENDRA SINGH', 'DEEPA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20034', 'SARITA ', 'RAUTELA', 'RAJENDRA SINGH', 'HEMA DEVI', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20035', 'SAURABH ', 'DANU', 'MADHO SINGH DANU', 'BASANTI DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20036', 'SONU', 'SINGH PADIYAR', 'PRAKASH SINGH', 'PREMA', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20037', 'VAIBHAV ', 'MISHRA', 'DEEPAK MISHRA', 'ASHA MISHRA', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20038', 'VANSHIKA', 'DURGAPAL', 'BASANT BALLABH', 'GEETA DURGAPAL', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20039', 'VIDHI', 'KANDPAL', 'VINOD KANDPAL', 'SAROJ KANDPAL', 'GENERAL', 'FEMALE', 'INDIAN', '0000-00-00', 'O-', '1', 'fms'),
('s20040', 'VINAY ', 'GOSWAMI', 'SHANKAR PURI GOSWAMI', 'MEENA GOSWAMI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20041', 'YAMAN', 'SINGH KOSHYARI', 'KUNDAN KOSHYARI', 'REKHA DEVI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms'),
('s20042', 'YASHASWI ', 'PADIYAR', 'PRATAP SINGH PADIYAR', 'GOVINDI', 'GENERAL', 'MALE', 'INDIAN', '0000-00-00', 'A+', '1', 'fms');

-- --------------------------------------------------------

--
-- Table structure for table `student_email_details`
--

CREATE TABLE IF NOT EXISTS `student_email_details` (
  `email_ID` varchar(20) NOT NULL DEFAULT '',
  `student_ID` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`email_ID`),
  KEY `Student_ID` (`student_ID`),
  KEY `student_ID_2` (`student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_register_discount`
--

CREATE TABLE IF NOT EXISTS `student_register_discount` (
  `student_ID` varchar(20) NOT NULL DEFAULT '',
  `discount_ID` varchar(20) DEFAULT NULL,
  `discount_Offered` decimal(2,0) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `status` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`student_ID`),
  KEY `discount_ID` (`discount_ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_fee_session`
--
ALTER TABLE `class_fee_session`
  ADD CONSTRAINT `class_fee_session_ibfk_1` FOREIGN KEY (`class_fee_ID`) REFERENCES `static_fee_associate_class` (`class_fee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_fee_session_ibfk_2` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_fee_session_ibfk_3` FOREIGN KEY (`class_fee_ID`) REFERENCES `static_fee_associate_class` (`class_fee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_fee_session_ibfk_4` FOREIGN KEY (`class_sess_ID`) REFERENCES `class_in_session` (`class_sess_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_in_session`
--
ALTER TABLE `class_in_session`
  ADD CONSTRAINT `class_in_session_ibfk_1` FOREIGN KEY (`session_ID`) REFERENCES `session_master` (`session_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_flexible_head`
--
ALTER TABLE `fee_flexible_head`
  ADD CONSTRAINT `fee_flexible_head_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_invoice`
--
ALTER TABLE `fee_invoice`
  ADD CONSTRAINT `fee_invoice_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_invoice_ibfk_2` FOREIGN KEY (`session_ID`) REFERENCES `session_master` (`session_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_invoice_ibfk_3` FOREIGN KEY (`class_sess_ID`) REFERENCES `class_in_session` (`class_sess_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_invoice_ibfk_4` FOREIGN KEY (`static_head_ID`) REFERENCES `fee_static_head` (`static_head_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_invoice_ibfk_5` FOREIGN KEY (`flexible_head_ID`) REFERENCES `fee_flexible_head` (`flexible_head_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_receipt`
--
ALTER TABLE `fee_receipt`
  ADD CONSTRAINT `fee_receipt_ibfk_1` FOREIGN KEY (`invoice_ID`) REFERENCES `fee_invoice` (`invoice_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_receipt_ibfk_2` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_receipt_ibfk_3` FOREIGN KEY (`discount_ID`) REFERENCES `discount_details` (`discount_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_receipt_ibfk_4` FOREIGN KEY (`type_ID`) REFERENCES `fee_type` (`type_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_receipt_ibfk_5` FOREIGN KEY (`session_ID`) REFERENCES `session_master` (`session_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_receipt_ibfk_6` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `login_details_ibfk_1` FOREIGN KEY (`status_ID`) REFERENCES `status_details` (`status_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semester_details`
--
ALTER TABLE `semester_details`
  ADD CONSTRAINT `semester_details_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course_details` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `semester_details_ibfk_2` FOREIGN KEY (`course_ID`) REFERENCES `course_details` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_address_details`
--
ALTER TABLE `staff_address_details`
  ADD CONSTRAINT `staff_address_details_ibfk_1` FOREIGN KEY (`staff_ID`) REFERENCES `status_details` (`status_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `static_fee_associate_class_ibfk_2` FOREIGN KEY (`session_ID`) REFERENCES `session_master` (`session_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `static_fee_associate_class_details`
--
ALTER TABLE `static_fee_associate_class_details`
  ADD CONSTRAINT `static_fee_associate_class_details_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `static_fee_associate_class_details_ibfk_2` FOREIGN KEY (`class_fee_ID`) REFERENCES `static_fee_associate_class` (`class_fee_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `student_address_details_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_address_details_ibfk_2` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_contact_details`
--
ALTER TABLE `student_contact_details`
  ADD CONSTRAINT `student_contact_details_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_contact_details_ibfk_2` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_email_details`
--
ALTER TABLE `student_email_details`
  ADD CONSTRAINT `student_email_details_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_email_details_ibfk_2` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_register_discount`
--
ALTER TABLE `student_register_discount`
  ADD CONSTRAINT `student_register_discount_ibfk_1` FOREIGN KEY (`discount_ID`) REFERENCES `discount_details` (`discount_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_register_discount_ibfk_2` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
