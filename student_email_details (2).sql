-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 11:02 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `student_email_details`
--

INSERT INTO `student_email_details` (`email_ID`, `email`, `student_ID`, `date`, `status`) VALUES
(1, 'Akshat@gmail.com', 1000, '2019-04-18', '1'),
(2, 'Anand@gmail.com', 1001, '2019-04-16', '1'),
(3, 'Ayushman@gmial.com', 1002, '2019-04-25', '1'),
(4, 'Bhaskar@gmail.com', 1003, '2019-04-16', '1'),
(5, 'Devam@gmail.com', 1004, '2019-04-18', '1'),
(6, 'Dikshita@gmail.com', 1005, '2019-06-23', '1'),
(8, 'Gaurav@gmail.cpm', 1007, '2019-03-21', '1'),
(9, 'Geetanjali@gmail.com', 1008, '2019-03-22', '1'),
(10, 'Gunjan@gmail.com', 1009, '2019-11-21', '1'),
(11, 'Harshita@gmail.com', 1010, '2019-02-22', '1'),
(12, 'Jhilmil@gmail.com', 1011, '2019-03-22', '1'),
(13, 'kapil@gmail.com', 1012, '2019-03-22', '1'),
(14, 'khusboo@gmail.com', 1013, '2019-03-22', '1'),
(15, 'komalA@gmail.com', 1014, '2019-04-24', '1'),
(16, 'LakshitaK@gmail.com', 1015, '2019-02-01', '1'),
(17, 'Lovelesh@gmail.com', 1016, '2019-03-01', '1'),
(18, 'Akshat@gmail.com', 1017, '2019-04-18', '1'),
(19, 'Anil@gmail.com', 1018, '2019-05-07', '1'),
(20, 'Bhawna@gmail.com', 1019, '2019-06-07', '1'),
(21, 'Vikram12@gmail.com', 1020, '2019-04-14', '1'),
(22, 'Ayushman45@gmail.com', 1021, '2019-06-11', '1'),
(23, 'Himanshi234@gmail.co', 1022, '2019-01-17', '1'),
(24, 'Shubham12@gmail.com', 1023, '2019-03-22', '1'),
(25, 'Deepak501@gmail.com', 1024, '2019-02-24', '1'),
(26, 'Aayushi500@gmail.com', 1025, '2019-05-31', '1'),
(27, 'Bishtsatyam95@gmail.', 1026, '2019-05-29', '1'),
(28, 'Aashima893@gmail.com', 1027, '2019-02-14', '1'),
(29, 'Puran23@gmail.com', 1028, '2019-05-22', '1'),
(30, 'Chitra@gmail.com', 1029, '2019-05-28', '1'),
(31, 'Vinay21@gmail.com', 1030, '2019-05-29', NULL),
(32, 'Vijay123@gmail.com', 1031, '2019-06-21', '1'),
(33, 'Nikhil12@gmail.com', 1032, '2019-04-08', '1'),
(34, 'Joshiabhay1@gmail.co', 1033, '2019-04-21', '1'),
(35, 'Prateek12@gmail.com', 1034, '2019-03-03', '1'),
(36, 'Divyansh34@gmail.com', 1035, '2019-07-18', '1'),
(37, 'Deepak51@gmail.com', 1036, '2019-06-26', '1'),
(38, 'Vineet101@gmail.com', 1037, '2019-06-07', '1'),
(39, 'Gaurav12@gmail.com', 1038, '2019-09-06', '1'),
(40, 'Rohit2423@gmail.com', 1039, '2019-04-15', '1'),
(41, 'Priyank1@gmail.com', 1040, '2019-02-12', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_email_details`
--
ALTER TABLE `student_email_details`
  ADD CONSTRAINT `student_email_details_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
