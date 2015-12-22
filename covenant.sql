-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2015 at 08:44 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `covenant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(128) NOT NULL,
  `admin_salt` varchar(60) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_salt`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '$2y$11$.phSWInHPAB17yH6u3kY/eWuhfJQq/9lB1lInx98fnUb6R.2t.U6S'),
(2, 'pixer', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '$2y$11$.phSWInHPAB17yH6u3kY/eWuhfJQq/9lB1lInx98fnUb6R.2t.U6S');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_credit` float NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_credit`) VALUES
(101, 'Object Oriented Programming', 1.5),
(102, 'Software Engineering', 2.5),
(103, 'Peripheral and Interfacing', 3.5),
(121, 'Digital Logic', 3);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(3) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(111, 'CSE'),
(112, 'ECE'),
(113, 'BBA');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE IF NOT EXISTS `mark` (
  `mark_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_roll` int(11) NOT NULL,
  `mark_number` varchar(3) NOT NULL,
  PRIMARY KEY (`mark_id`),
  KEY `student_roll` (`student_roll`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`mark_id`, `student_roll`, `mark_number`) VALUES
(1, 1117, '105'),
(2, 1172, '213'),
(3, 6543, '321');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_roll` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_sex` char(1) NOT NULL,
  `student_semester` varchar(5) NOT NULL,
  `student_department` int(3) NOT NULL,
  `student_session` varchar(9) NOT NULL,
  `student_address` text NOT NULL,
  PRIMARY KEY (`student_roll`),
  KEY `student_department` (`student_department`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_roll`, `student_name`, `student_email`, `student_sex`, `student_semester`, `student_department`, `student_session`, `student_address`) VALUES
(1101, 'Issac Asimov', 'asdf@g.com', 'M', '3rd', 111, '2010-2011', 'Seattle'),
(1102, 'Dan Brown', 'asdf@g.com', 'M', '6th', 113, '2009-2010', 'New Jersy'),
(1117, 'Arther Cleck', 'asdf@g.com', 'M', '8th', 111, '200-2009', 'Miami'),
(1172, 'Edith Hamilton', 'psf@g.com', 'F', '2nd', 112, '2012-2013', 'Boston'),
(1215, 'Joost Van', 'stu@s.com', 'M', '2nd', 113, '2005-2006', 'Texas'),
(1253, 'Model Mamun', 'm@m.com', 'M', '7th', 111, '2010-2011', 'Dhaka'),
(1535, 'Castor Troy', 'castor@c.com', 'M', '2nd', 112, '2010-2011', 'North Carolina'),
(6543, 'Peace Maker', 'uti@g.com', 'M', '3rd', 111, '2001-2002', 'Las Vegas');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `mark_ibfk_1` FOREIGN KEY (`student_roll`) REFERENCES `student` (`student_roll`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`student_department`) REFERENCES `department` (`department_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
