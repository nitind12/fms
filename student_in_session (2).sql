-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 10:01 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `student_in_session`
--

INSERT INTO `student_in_session` (`std_ID`, `student_ID`, `class_sess_ID`, `session_ID`, `class_ID`, `username`, `status`, `date`) VALUES
(1, 1000, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-27'),
(2, 1001, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-02-23'),
(3, 1002, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-04-09'),
(4, 1003, 'BCA2018-19_I', '2018-19', 2, 'charu', '1', '2019-04-10'),
(5, 1004, 'BCA2018-19_I', '2018-19', 2, 'charu', '1', '2019-04-05'),
(6, 1005, 'BCA2018-19_I', '2018-19', 2, 'charu', '1', '2019-04-17'),
(7, 1006, 'BCA2018-19_I', '2018-19', 3, 'charu', '1', '2019-04-15'),
(8, 1007, 'BCA2018-19_I', '2018-19', 3, 'charu', '1', '2019-04-01'),
(9, 1008, 'BCA2018-19_I', '2018-19', 3, 'charu', '1', '2019-04-15'),
(10, 1009, 'BCA2018-19_I', '2018-19', 4, 'charu', '1', '2019-04-08'),
(11, 1010, 'BCA2018-19_I', '2018-19', 4, 'charu', '1', '2019-05-13'),
(12, 1011, 'BCA2018-19_I', '2018-19', 4, 'charu', '1', '2019-05-14'),
(13, 1012, 'BCA2018-19_I', '2018-19', 5, 'charu', '1', '2019-05-29'),
(14, 1013, 'BCA2018-19_I', '2018-19', 5, 'charu', '1', '2019-02-14'),
(15, 1014, 'BCA2018-19_I', '2018-19', 5, 'charu', '1', '2019-05-28'),
(16, 1015, 'BCA2018-19_I', '2018-19', 6, 'charu', '1', '2019-01-06'),
(17, 1016, 'BCA2018-19_I', '2018-19', 6, 'charu', '1', '2019-08-08'),
(18, 1017, 'BCA2018-19_I', '2018-19', 6, 'charu', '1', '2019-07-05'),
(19, 1018, 'BCA2018-19_I', '2018-19', 7, 'charu', '1', '2019-06-27'),
(20, 1019, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-06-15'),
(21, 1020, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-05-29'),
(22, 1021, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-07-25'),
(23, 1022, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-06-14'),
(24, 1023, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-06-15'),
(25, 1024, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-09-04'),
(26, 1025, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-01-11'),
(27, 1026, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-06-14'),
(28, 1027, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-07-11'),
(29, 1028, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-06-14'),
(30, 1029, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-06-13'),
(31, 1030, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-06-13'),
(32, 1031, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-06-14'),
(33, 1032, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-07-25'),
(34, 1033, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-07-26'),
(35, 1034, 'BCA2018-19_I', '2018-19', 1, 'charu', '1', '2019-07-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
