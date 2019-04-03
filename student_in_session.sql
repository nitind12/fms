-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 09:29 AM
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
  `std_ID` varchar(20) NOT NULL,
  `student_ID` varchar(20) NOT NULL,
  `class_sess_ID` varchar(20) NOT NULL,
  `session_ID` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` decimal(2,0) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`std_ID`),
  KEY `std_ID` (`std_ID`),
  KEY `student_ID` (`student_ID`),
  KEY `class_sess_ID` (`class_sess_ID`),
  KEY `session_ID` (`session_ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_in_session`
--
ALTER TABLE `student_in_session`
  ADD CONSTRAINT `student_in_session_ibfk_4` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_in_session_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student_details` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_in_session_ibfk_2` FOREIGN KEY (`class_sess_ID`) REFERENCES `class_in_session` (`class_sess_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_in_session_ibfk_3` FOREIGN KEY (`session_ID`) REFERENCES `session_master` (`session_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
