-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 09:57 AM
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
(1000, 'AKSHAT', 'SAXENA', 'AMIT KUMAR SAXENA', 'VARTIKA SAXENA', 'GENERAL', 'MALE', 'INDIAN', '2018-12-12', 'A+', '1', 'fms'),
(1001, 'ANAND', 'TIGGA', 'RANJEET TIGGA', 'URMILLA TIGGA', 'GENERAL', 'MALE', 'INDIAN', '2018-08-05', 'A+', '1', 'fms'),
(1002, 'AYUSMAN ', 'SATI', 'KAMAL SATI', 'DEEPA SATI', 'GENERAL', 'MALE', 'INDIAN', '2018-11-04', 'A+', '1', 'fms'),
(1003, 'BHASKER SINGH', 'NAINWAL', 'MADAN SINGH', 'HEMA DEVI', 'GENERAL', 'MALE', 'INDIAN', '2018-07-08', 'A+', '1', 'fms'),
(1004, 'DEEPIKA ', 'PANT', 'UMESH CHANDRA PANT', 'LATA PANT', 'GENERAL', 'MALE', 'INDIAN', '2018-06-11', 'B+', '1', 'fms'),
(1005, 'DEVAM ', 'KHATI', 'RAMESH SINGH KHATI', 'BHAGWATI KHATI', 'GENERAL', 'MALE', 'INDIAN', '2018-04-23', 'A+', '1', 'fms'),
(1006, 'DIKSHITA ', 'TIWARI', 'AJAY TIWARI', 'HEENA TIWARI', 'GENERAL', 'FEMALE', 'INDIAN', '2018-07-09', 'A+', '1', 'fms'),
(1007, 'GAURAV ', 'PANDEY', 'BACCHI DUTT PANDEY', 'KAMLA DEVI', 'GENERAL', 'MALE', 'INDIAN', '2018-06-04', 'O+', '1', 'fms'),
(1008, 'GEETANJALI', ' JOSHI', 'DEEPAK CHANDRA JOSHI', 'BABITA JOSHI', 'GENERAL', 'FEMALE', 'INDIAN', '2018-07-02', 'A+', '1', 'fms'),
(1009, 'GUNJAN ', 'PANDEY', 'SHYAM SUNDAR PANDEY', 'BHAWNA DEVI', 'GENERAL', 'FEMALE', 'INDIAN', '2018-06-03', 'B+', '1', 'fms'),
(1010, 'HARSHITA ', 'DWIVEDI', 'HARI OM DWIVEDI', 'NEEMA DWIVEDI', 'GENERAL', 'FEMALE', 'INDIAN', '2018-07-03', 'A+', '1', 'fms'),
(1011, 'JHILMIL ', 'PANT', 'SUBHASH PANT', 'SUSHILA PANT', 'GENERAL', 'FEMALE', 'INDIAN', '2018-06-19', 'A+', '1', 'fms'),
(1012, 'KAPIL ', 'MEHRA', 'SURESH CHANDRA SINGH', 'UMA DEVI', 'GENERAL', 'MALE', 'INDIAN', '2018-02-06', 'AB', '1', 'fms'),
(1013, 'KHUSBOO ', 'TIWARI', 'GOPAL TIWARI', 'LALITA TIWARI', 'GENERAL', 'FEMALE', 'INDIAN', '2018-02-27', 'A+', '1', 'fms'),
(1014, 'KOMAL ', 'ARYA', 'DEEPAK KUMAR', 'NANDI DEVI', 'SC', 'FEMALE', 'INDIAN', '2018-06-12', 'O+', '1', 'fms'),
(1015, 'LAKSHITA ', 'JOSHI', 'PRAKASH CHANDRA JOSH', 'MAMTA JOSHI', 'GENERAL', 'FEMALE', 'INDIAN', '2019-05-19', 'A+', '1', 'fms'),
(1016, 'LOVELESH ', 'JOSHI', 'HARISH CHANDRA JOSHI', 'PUSHPA JOSHI', 'GENERAL', 'MALE', 'INDIAN', '2018-08-19', 'A+', '1', 'fms'),
(1017, 'MANISHA ', 'CHADDA', 'KAUSHAL SINGH CHADDA', 'ANITA CHADDA', 'GENERAL', 'FEMALE', 'INDIAN', '2018-07-31', 'A+', '1', 'fms'),
(1018, 'MAYANK ', 'SINGH', 'LALIT MOHAN', 'USHA DEVI', 'GENERAL', 'MALE', 'INDIAN', '2018-05-06', 'A+', '1', 'fms'),
(1019, 'NAVYA ', 'SHUKLA', 'MUNNA LAL SHUKLA', 'BABITA SHUKLA', 'GENERAL', 'FEMALE', 'INDIAN', '2018-06-04', 'A+', '1', 'fms'),
(1020, 'NEHA ', 'BARGALI', 'HARENDRA BARGALI', 'PUSHPA BARGALI', 'GENERAL', 'FEMALE', 'INDIAN', '2018-04-08', 'A+', '1', 'fms'),
(1021, 'NIHARIKA', ' BHATT', 'MANOJ BHATT', 'BHAWNA BHATT', 'GENERAL', 'FEMALE', 'INDIAN', '2017-01-16', 'A+', '1', 'fms'),
(1022, 'NIVEDITA ', 'DANU', 'RAJENDRA SINGH DANU', 'BHAWNA DEVI', 'GENERAL', 'FEMALE', 'INDIAN', '2018-07-08', 'A+', '1', 'fms'),
(1023, 'POORVA ', 'LOHIYA', 'HEM CHANDRA', 'MEENA LOHIYA', 'GENERAL', 'FEMALE', 'INDIAN', '2018-07-09', 'A+', '1', 'fms'),
(1024, 'PRANSHU ', 'BHATT', 'DEEP CHANDRA BHATT', 'RUKMANI BHATT', 'GENERAL', 'MALE', 'INDIAN', '2018-07-24', 'A+', '1', 'fms'),
(1025, 'PRIYANJAL ', 'BHANDARI', 'SHYAM SINGH BHANDARI', 'REKHA BHANDARI', 'GENERAL', 'FEMALE', 'INDIAN', '2018-08-28', 'A+', '1', 'fms'),
(1026, 'PRIYANK ', 'OJHA', 'HARISH CHANDRA', 'UMA', 'GENERAL', 'MALE', 'INDIAN', '2018-06-12', 'A+', '1', 'fms'),
(1027, 'RAHUL ', 'JOSHI', 'RAJENDRA PRASAD JOSH', 'KIRAN JOSHI', 'GENERAL', 'MALE', 'INDIAN', '2018-07-22', 'O+', '1', 'fms'),
(1028, 'RIYA ', 'KARNATAK', 'GIRISH CHANDRA KARNA', 'VIMLA KARNATAK', 'GENERAL', 'FEMALE', 'INDIAN', '2019-05-12', 'A+', '1', 'fms'),
(1029, 'RIYA ', 'RANA', 'MOHAN SINGH RANA', 'DEEPA RANA', 'GENERAL', 'FEMALE', 'INDIAN', '2018-09-25', 'A+', '1', 'fms'),
(1030, 'ROHAN ', 'FARTYAL', 'KRIPAL SINGH FARTYAL', 'BHWANA FARTIYAL', 'GENERAL', 'MALE', 'INDIAN', '2018-07-09', 'A+', '1', 'fms'),
(1031, 'ROSHNI ', 'SHARMA', 'CHANDRA SHEKHAR SHAR', 'KAMLESH SHARMA', 'GENERAL', 'FEMALE', 'INDIAN', '2018-06-19', 'A+', '1', 'fms'),
(1032, 'SAGAR ', 'KASHYAP', 'PAPPU KASHYAP', 'PRITI KASHYAP', 'GENERAL', 'MALE', 'INDIAN', '2018-09-03', 'B+', '1', 'fms'),
(1033, 'SAHIL ', 'SINGH', 'JITENDRA SINGH', 'DEEPA DEVI', 'GENERAL', 'MALE', 'INDIAN', '2018-10-22', 'A+', '1', 'fms'),
(1034, 'SARITA ', 'RAUTELA', 'RAJENDRA SINGH', 'HEMA DEVI', 'GENERAL', 'FEMALE', 'INDIAN', '2018-07-08', 'A+', '1', 'fms'),
(1035, 'SAURABH ', 'DANU', 'MADHO SINGH DANU', 'BASANTI DEVI', 'GENERAL', 'MALE', 'INDIAN', '2018-05-08', 'A+', '1', 'fms'),
(1036, 'SONU', 'SINGH PADIYAR', 'PRAKASH SINGH', 'PREMA', 'GENERAL', 'MALE', 'INDIAN', '2018-07-10', 'A+', '1', 'fms'),
(1037, 'VAIBHAV ', 'MISHRA', 'DEEPAK MISHRA', 'ASHA MISHRA', 'GENERAL', 'MALE', 'INDIAN', '2018-06-17', 'A+', '1', 'fms'),
(1038, 'VANSHIKA', 'DURGAPAL', 'BASANT BALLABH', 'GEETA DURGAPAL', 'GENERAL', 'FEMALE', 'INDIAN', '2018-08-12', 'A+', '1', 'fms'),
(1039, 'VIDHI', 'KANDPAL', 'VINOD KANDPAL', 'SAROJ KANDPAL', 'GENERAL', 'FEMALE', 'INDIAN', '2018-09-23', 'O-', '1', 'fms'),
(1040, 'VINAY ', 'GOSWAMI', 'SHANKAR PURI GOSWAMI', 'MEENA GOSWAMI', 'GENERAL', 'MALE', 'INDIAN', '2018-05-19', 'A+', '1', 'fms'),
(1041, 'YAMAN', 'SINGH KOSHYARI', 'KUNDAN KOSHYARI', 'REKHA DEVI', 'GENERAL', 'MALE', 'INDIAN', '2018-09-03', 'A+', '1', 'fms'),
(1042, 'YASHASWI ', 'PADIYAR', 'PRATAP SINGH PADIYAR', 'GOVINDI', 'GENERAL', 'MALE', 'INDIAN', '2018-07-09', 'A+', '1', 'fms'),
(1043, 'ROHAN ', 'SINGH', 'KAMAL SINGH', 'KAMLA', 'GENERAL', 'MALE', 'INDIAN', '2018-09-10', 'A+', '1', 'fms'),
(1044, 'SHIV', 'KUMAR', 'Jitendra kumar', 'SAROJ ', 'GENERAL', 'MALE', 'INDIAN', '2018-11-26', 'A+', '1', 'fms'),
(1045, 'Ram', 'SINGH', 'Ravi Singh', 'ANJU', 'GENERAL', 'MALE', 'INDIAN', '2018-06-03', 'A+', '1', 'fms'),
(1046, 'SHUBHAM', 'PANDEY', 'KESHAV PANDEY', 'ANANDI', 'GENERAL', 'MALE', 'INDIAN', '2018-11-12', 'A+', '1', 'fms'),
(1047, 'AMIT', 'RAWAT', 'KAMAL RAWAT', 'CHAMPA RAWAT', 'GENERAL', 'MALE', 'INDIAN', '2019-04-06', 'B+', '1', 'fms'),
(1048, 'ABHISHEK', 'RAWAT', 'VIMAL RAWAT', 'SHEELA RAWAT', 'GENERAL', 'MALE', 'INDIAN', '2019-04-06', 'B+', '1', 'fms'),
(1049, 'ANKIT', 'PATHAK', 'JITENDRA PATHAK', 'REKHA PATHAK', 'GENERAL', 'MALE', 'INDIAN', '2019-04-09', 'B+', '1', 'fms'),
(1051, 'NEEETA', 'SAXENA', 'AMIT KUMAR SAXENA', 'VARTIKA SAXENA', 'GENERAL', 'MALE', 'INDIAN', '2018-12-12', 'A+', '1', 'fms'),
(1053, 'ANIL', 'HARIKOTA', 'BINDAL HARIKOTA', 'Beena Harikota', 'SC', 'MALE', 'INDIAN', '2019-04-01', 'O+', '1', 'fms');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_details` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
