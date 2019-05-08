-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 09:59 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

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
(12, 101, 6, 'B'),
(13, 102, 1, 'A'),
(14, 102, 1, 'B'),
(15, 102, 2, 'A'),
(16, 102, 2, 'B'),
(17, 102, 3, 'A'),
(18, 102, 3, 'B'),
(19, 102, 4, 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
