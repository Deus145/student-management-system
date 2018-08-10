-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2018 at 10:45 AM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_room`
--

DROP TABLE IF EXISTS `class_room`;
CREATE TABLE IF NOT EXISTS `class_room` (
  `classroom_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `student_count` int(20) NOT NULL,
  `hall_charge` int(20) NOT NULL,
  PRIMARY KEY (`classroom_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_room`
--

INSERT INTO `class_room` (`classroom_id`, `name`, `student_count`, `hall_charge`) VALUES
(1, 'Class A', 100, 25),
(2, 'Class B', 75, 30);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_name` text NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `faculty_name` text NOT NULL,
  PRIMARY KEY (`course_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_name`, `course_code`, `faculty_name`) VALUES
('Business Administration', 'BA', ''),
('Software Engineering', 'SE', ''),
('Computer Science', 'CS', ''),
('Civil Engineering', 'CV', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` varchar(11) NOT NULL,
  `faculty_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`) VALUES
('F01', 'Faculty of Business'),
('F02', 'Faculty of Technology'),
('F03', 'Faculty of Engineering'),
('F04', 'Faculty of Short Courses');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` text NOT NULL,
  `course_name` text NOT NULL,
  `course_code` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `course_code` (`course_code`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `email`, `contact`, `course_name`, `course_code`) VALUES
(1, 'AGABA', 'DEUS', 'duxna72@gmail.com', '0784354183', '', 'SE');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` text NOT NULL,
  `faculty_id` varchar(11) NOT NULL,
  PRIMARY KEY (`teacher_id`),
  UNIQUE KEY `faculty_id` (`faculty_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `first_name`, `last_name`, `email`, `contact`, `faculty_id`) VALUES
(1, 'Ninyesiga', 'Allan', 'aninyesiga@utamu.ac.ug', '0701275624', 'F02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'byaruhanga');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
