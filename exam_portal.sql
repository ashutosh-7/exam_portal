-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 02:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'gravity', 'newton');

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `computer_system` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`id`, `student_id`, `ip_address`, `computer_system`) VALUES
(36, 1702710050, '', 4),
(37, 1702710049, '', 6),
(38, 1710122, '', 5),
(39, 1710039, '10.10.10.237', 1);

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `qid` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `ans` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `qid`, `sid`, `ans`) VALUES
(415, 1, 1710039, '3'),
(416, 2, 1710039, '2'),
(417, 3, 1710039, '3'),
(418, 4, 1710039, '1'),
(419, 5, 1710039, '1'),
(420, 6, 1710039, '1'),
(421, 7, 1710039, '3'),
(422, 8, 1710039, '3'),
(423, 9, 1710039, '1'),
(424, 10, 1710039, '1'),
(428, 14, 1710039, '1'),
(429, 15, 1710039, '1'),
(430, 12, 1710039, '1'),
(431, 13, 1710039, '1'),
(432, 11, 1710039, '4');

-- --------------------------------------------------------

--
-- Table structure for table `fetch_ip`
--

CREATE TABLE `fetch_ip` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `computer_system` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fetch_ip`
--

INSERT INTO `fetch_ip` (`id`, `ip_address`, `computer_system`) VALUES
(41, '10.10.10.237', 1),
(42, '10.10.10.109', 2);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `langid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correctanswer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`langid`, `qid`, `questions`, `option1`, `option2`, `option3`, `option4`, `correctanswer`) VALUES
(1, 1, '1.What does PHP stand for?', 'Personal Hypertext Preprocessor', 'Private Home Page', 'PHP Hypertext Preprocessor', 'Private Housing Preprocessor', '3'),
(2, 2, '2.All variables in PHP start with which operator?', '#', '$', '%', '&', '2'),
(3, 3, '3.What is the correct way to end a PHP statement?', '(<>)', '%%', ';', 'newline', '3'),
(4, 4, '4.which superglobal variable holds information about header?', '$_GLOBALS', '$_SESSION', '$_GET', '$_SERVER', '4'),
(5, 5, '5.which operator is used to check if two values are equal in PHP?', '==', '===', '=', '!==', '2'),
(6, 6, '6.What does HTML stand for?', 'Hyper Text Markup Language', 'Home Text Markup Language', 'Hyper Tool Markup Language', 'Home Text Markup Language', '1'),
(7, 7, '7.What is making the Web Standards?', 'Microsoft', 'Google', 'WWW', 'Yahoo', '3'),
(8, 8, '8.Choose the correct HTML element for largest Heading?', 'h6', 'heading', 'h1', 'head', '3'),
(9, 9, '9.What is the correct HTML element for for inserting a line break?', 'br', 'linebreak', 'break', 'lb', '1'),
(10, 10, '10.Which character is used to indicate an end tag?', '/', ';', '$', '%', '1'),
(11, 11, '11.Which type of language is C?', 'Procedure Oriented', 'Object Oriented', 'Object Based', 'none of above', '1'),
(12, 12, '12.A Function can return value at a time?', '1', '2', '3', '0', '1'),
(13, 13, '13.C is developed by?', 'Dennis Ritchie', 'Mark Thomson', 'Rickie Masiciite', 'none of above', '1'),
(14, 14, '14.How many Keywords are in C?', '32', '44', '54', '24', '1'),
(15, 15, '15.In Linux Compilation FileExtension of C?', '.cc', '.cpp', '.out', '.exe', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(10) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id`, `sid`, `marks`, `name`) VALUES
(26, 1710039, 11, 'ANIIKET '),
(27, 1710039, 12, 'ANIIKET ');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `student_name` varchar(18) NOT NULL,
  `student_id` int(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `section` varchar(10) NOT NULL,
  `year` int(5) NOT NULL,
  `email` varchar(25) NOT NULL,
  `permi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_name`, `student_id`, `branch`, `gender`, `mobile`, `section`, `year`, `email`, `permi`) VALUES
(17, 'sagar', 1710107, 'cse', 'Female', '9149060815', '3', 2, 'mittalsagar163@', 'Yes'),
(18, 'ajeet kumar', 1710122, 'cse', 'Male', '9795094510', 'cs-01', 4, 'kumarajeet024@g', 'Yes'),
(19, 'ashutosh ', 1702710050, 'me', 'Male', '9636291481', 'CS 1', 4, 'ashu@gmail.com', 'Yes'),
(21, 'ANIIKET ', 1710039, 'CSE', 'Male', '8840095975', 'CS-1', 2, 'aniketpandey353@gmail.com', 'Yes'),
(23, 'HONEY SINGH', 1710084, 'CSE', 'Male', '9453615648', 'CS 1', 2, 'LUVRAJPUT953@GMAIL.COM', 'Yes'),
(24, 'Raja', 1702710049, 'me', 'Male', '9636291481', 'me 1', 2, 'ashu@gmail.com', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fetch_ip`
--
ALTER TABLE `fetch_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`langid`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allocation`
--
ALTER TABLE `allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433;

--
-- AUTO_INCREMENT for table `fetch_ip`
--
ALTER TABLE `fetch_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `langid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
