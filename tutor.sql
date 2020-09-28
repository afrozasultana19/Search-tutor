-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 10:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
CREATE DATABASE `tutor`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Admin', 'admin@tutor.com', '78567834yhu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_as_student`
--

CREATE TABLE `tbl_user_as_student` (
  `s_id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `suname` varchar(356) NOT NULL,
  `dob` datetime NOT NULL,
  `gender` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `state` varchar(256) NOT NULL,
  `contactnum` varchar(15) DEFAULT NULL,
  `email` varchar(356) NOT NULL,
  `pass1` varchar(8) DEFAULT NULL,
  `pass2` varchar(8) DEFAULT NULL,
  `lastlogout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_as_student`
--

INSERT INTO `tbl_user_as_student` (`s_id`, `fname`, `lname`, `suname`, `dob`, `gender`, `city`, `state`, `contactnum`, `email`, `pass1`, `pass2`, `lastlogout`) VALUES
(1, 'Senoara', 'Begum', 'Senoara Begum', '2000-10-29 00:00:00', 'female', 'Abashik,192', 'Chittagong', '1815367924', 'senoara@gmail.com', '0', '0', '2020-09-27 19:07:29'),
(2, 'Israt', 'Jahan', 'Israt Jahan', '1997-12-27 00:00:00', 'female', 'Chawkbazar', 'Chittagong', '8801634113644', 'isratjahan1122@gmail.com', '0', '0', '2020-09-27 19:13:14'),
(3, 'Israt', 'Jahan', 'Israt Jahan', '1997-12-27 00:00:00', 'female', 'Chawkbazar', 'Chittagong', '8801634113644', 'isratjahan1122@gmail.com', '0', '0', '2020-09-27 19:30:31'),
(4, 'Raihan', 'Chowdhury', 'Raihan Chowdhury', '1998-11-27 00:00:00', 'male', 'Hazigong,dogra', 'Chittagong', '01634113644', 'stephenraihan12@gmail.com', '0', '0', '2020-09-27 19:39:14'),
(5, 'Sabrina', 'Hani', 'Hani', '2005-10-20 00:00:00', 'female', 'Abashik,192', 'Chittagong', '01815367924', 'sab@gmail.com', 'sab567', 'sab567', '2020-09-27 19:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_as_tutor`
--

CREATE TABLE `tbl_user_as_tutor` (
  `t_id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `uname` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `city` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `level_study` varchar(40) NOT NULL,
  `name_of_ins` varchar(256) NOT NULL,
  `session` varchar(100) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pass1` varchar(10) NOT NULL,
  `pass2` varchar(10) NOT NULL,
  `last_logout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_as_tutor`
--

INSERT INTO `tbl_user_as_tutor` (`t_id`, `fname`, `lname`, `uname`, `dob`, `gender`, `city`, `state`, `level_study`, `name_of_ins`, `session`, `dept`, `semester`, `email`, `pass1`, `pass2`, `last_logout`) VALUES
(1, 'Israt', 'Jahan', 'Israt Jahan', '1997-12-27', 'female', 'Abashik', 'Chittagong', '', 'Premier University', 'spring 2020', 'CSE', '5th', 'isratjahan1122@gmail.com', '34df23', '34df23', '2020-09-26 18:43:27'),
(2, 'Israt', 'Jahan', 'Israt Jahan', '1997-12-27', 'female', 'Abashik', 'Chittagong', '', 'Premier University', 'spring 2020', 'CSE', '5th', 'isratjahan1122@gmail.com', '34df23', '34df23', '2020-09-26 18:43:27'),
(3, 'Tasnia', 'Sultana', 'tasnia sultana', '1998-12-22', 'female', 'Hazigong,dogra', 'Chittagong', 'Intermediate', 'Ahsanullah University', 'spring 2020', 'CSE', '5th', 'nia34@gmai.com', 'tre123', 'tre123', '2020-09-26 18:43:27'),
(4, 'Alifa', 'Khanam', 'alifa', '2000-10-12', 'female', 'Abashik,192', 'Chittagong', 'Intermediate', 'Premier University', 'spring 2020', 'BBA', '5th', 'alifa12@gmail.com', 'fg567', 'fg567', '2020-09-26 18:43:27'),
(5, 'Alifa', 'Khanam', 'alifa', '2000-10-12', 'female', 'Abashik,192', 'Chittagong', 'Intermediate', 'Premier University', 'spring 2020', 'BBA', '5th', 'alifa12@gmail.com', 'fg567', 'fg567', '2020-09-26 18:43:27'),
(6, 'Habiba', 'Tasnim', 'habiba tasnim', '1990-10-10', 'female', 'Hazigong,dogra', 'Chittagong', 'Intermediate', 'CU', 'spring 2020', 'BBA', '5th', 'habiba@gmail.com', 'fred56', 'fred56', '2020-09-26 18:43:27'),
(7, 'habiba ', 'Jasmine', 'Habiba Jesmin', '2000-10-12', 'female', 'Chawkbazar', 'Chittagong', 'Intermediate', 'CU', 'spring 2020', 'CSE', '5th', 'habiab2@gmail.com', 'iu456', 'iu456', '2020-09-26 18:49:29'),
(8, 'Yeasmin', 'Chowdhury', 'Yeasmin Chowdhury', '1995-06-22', 'female', 'Abashik,192', 'Chittagong', 'Intermediate', 'Premier University', 'spring 2020', 'CSE', '5th', 'yeasmin@gmail.com', 'yeasmin45', 'yeasmin45', '2020-09-27 18:03:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_as_student`
--
ALTER TABLE `tbl_user_as_student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_user_as_tutor`
--
ALTER TABLE `tbl_user_as_tutor`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_as_student`
--
ALTER TABLE `tbl_user_as_student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user_as_tutor`
--
ALTER TABLE `tbl_user_as_tutor`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
