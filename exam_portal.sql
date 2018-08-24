-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 01:42 PM
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
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `computer_system` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, '10.10.10.109', 9),
(8, '10.10.10.132', 2),
(9, '10.10.10.112', 3);

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
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_name`, `student_id`, `branch`, `gender`, `mobile`, `section`, `year`, `email`) VALUES
(1, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '2147483647', 'CS 1', 2, 'ashu@gmail.com'),
(2, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '2147483647', 'CS 1', 2, 'ashu@gmail.com'),
(3, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '2147483647', 'CS 1', 2, 'ashu@gmail.com'),
(4, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '2147483647', 'CS 1', 2, 'ramashankaryada'),
(5, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '2147483647', 'CS 1', 2, 'ashu@gmail.com'),
(6, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '2147483647', 'CS 1', 2, 'ashu@gmail.com'),
(7, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '2147483647', 'CS 1', 2, 'ashu@gmail.com'),
(8, 'kjjhj', 6454465, 'CSE', 'Male', '963629554', 'CS 1', 3, 'ramashankaryada'),
(9, 'kjjhj', 6454465, 'CSE', 'Male', '963629554', 'CS 1', 3, 'ramashankaryada'),
(10, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '9636295852', 'CS 1', 2, 'ashu@gmail.com'),
(11, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '9636291481', 'CS 1', 2, 'ramashankaryada'),
(12, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '9636291481', 'CS 1', 2, 'ramashankaryada'),
(13, 'raja', 1702710050, 'cse', 'Male', '9636291481', 'CS 1', 2, 'ramashankaryada'),
(14, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '9636291481', 'CS 1', 2, 'ramashankaryada'),
(15, 'ashutosh yadav', 1702710050, 'CSE', 'Male', '9636291481', 'CS 1', 2, 'ramashankaryada'),
(16, 'satyam', 1710096, 'cse', 'Male', '9140945299', '3', 2, 'satyamsingh54@r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fetch_ip`
--
ALTER TABLE `fetch_ip`
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
-- AUTO_INCREMENT for table `allocation`
--
ALTER TABLE `allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fetch_ip`
--
ALTER TABLE `fetch_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
