-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 11:10 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

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
-- Table structure for table `tbl_student_info`
--

CREATE TABLE `tbl_student_info` (
  `s_id` int(11) NOT NULL,
  `u_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `con_pass` varchar(150) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `street` varchar(150) NOT NULL,
  `cir_title` varchar(150) NOT NULL,
  `sub` varchar(150) NOT NULL,
  `schedul` varchar(150) NOT NULL,
  `days` varchar(15) NOT NULL,
  `num_of_std` varchar(20) NOT NULL,
  `offer_salary` varchar(150) NOT NULL,
  `details` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student_info`
--

INSERT INTO `tbl_student_info` (`s_id`, `u_name`, `email`, `pass`, `con_pass`, `full_name`, `phone`, `street`, `cir_title`, `sub`, `schedul`, `days`, `num_of_std`, `offer_salary`, `details`) VALUES
(1, 'israt', 'israt123@gmail.com', '12345678', '12345678', 'israt jahan', '0123456789', 'chawkbajar,chittagong.', 'Home Tutor Wanted', ' Math', 'Morning', '3 Days/Week', '2', '2000 - 3000', 'Must be teach attentively'),
(2, 'Rashma', 'rashma@gmail.com', '12345678', '12345678', 'Rashma dev', '0123456789', 'Hajari Lane , Ctg.', 'Urgennt Tutor Need', ' All subject', 'Afternoon/Evening', '6 Days/Week', '1', '5000 - 6000', 'Student are very weak,');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_as_student`
--

CREATE TABLE `tbl_user_as_student` (
  `s_id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `suname` varchar(356) NOT NULL,
  `dob` datetime NOT NULL,
  `gender` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `state` varchar(256) NOT NULL,
  `contactnum` varchar(15) DEFAULT NULL,
  `email` varchar(356) NOT NULL,
  `pass1` varchar(8) DEFAULT NULL,
  `pass2` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_as_student`
--

INSERT INTO `tbl_user_as_student` (`s_id`, `fname`, `suname`, `dob`, `gender`, `city`, `state`, `contactnum`, `email`, `pass1`, `pass2`) VALUES
(1, 'Senoara', 'Senoara Begum', '2000-10-29 00:00:00', 'female', 'Abashik,192', 'Chittagong', '1815367924', 'senoara@gmail.com', '0', '0'),
(2, 'Israt', 'Israt Jahan', '1997-12-27 00:00:00', 'female', 'Chawkbazar', 'Chittagong', '8801634113644', 'isratjahan1122@gmail.com', '0', '0'),
(3, 'Israt', 'Israt Jahan', '1997-12-27 00:00:00', 'female', 'Chawkbazar', 'Chittagong', '8801634113644', 'isratjahan1122@gmail.com', '0', '0'),
(4, 'Raihan', 'Raihan Chowdhury', '1998-11-27 00:00:00', 'male', 'Hazigong,dogra', 'Chittagong', '01634113644', 'stephenraihan12@gmail.com', '0', '0'),
(5, 'Sabrina', 'Hani', '2005-10-20 00:00:00', 'female', 'Abashik,192', 'Chittagong', '01815367924', 'sab@gmail.com', 'sab567', 'sab567'),
(6, 'Tina', 'Tina Roy', '1996-10-23 00:00:00', 'female', 'Hazigong,dogra', 'Chittagong', '01856764235', 'tina@gmail.com', 'ty7823', 'ty7823'),
(7, 'lkhljugs', '', '2020-10-20 00:00:00', 'Male', 'jhugyfviuvg', 'hivykv', '6456596945', 'kh@gmail.com', '909090', '909090'),
(8, 'lkhljugs', '', '2020-10-20 00:00:00', 'Male', 'jhugyfviuvg', 'hivykv', '6456596945', 'kh@gmail.com', '909090', '909090'),
(9, 'lkhljugs', '', '2020-10-20 00:00:00', 'Male', 'jhugyfviuvg', 'hivykv', '6456596945', 'kh@gmail.com', '909090', '909090'),
(10, 'rita', 'rita', '2020-10-20 00:00:00', 'Male', 'kjgifyu', 'gyify', '85447854', 'rita@gmail.com', '676767', '676767'),
(11, 'rita', 'rita', '2020-10-20 00:00:00', 'Male', 'kjgifyu', 'gyify', '85447854', 'rita@gmail.com', '676767', '676767'),
(12, 'rita', 'rita', '2020-10-20 00:00:00', 'Male', 'kjgifyu', 'gyify', '85447854', 'rita@gmail.com', '676767', '676767'),
(13, 'klhlojgl', 'khljbj', '2005-10-06 00:00:00', '', 'hhifcguck', 'khljfvkhu', '68449608', 'sd@gmail.com', '09897806', '09897806');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_as_tutor`
--

CREATE TABLE `tbl_user_as_tutor` (
  `t_id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `uname` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `city` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pass1` varchar(10) NOT NULL,
  `pass2` varchar(10) NOT NULL,
  `image` blob NOT NULL,
  `contact_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_as_tutor`
--

INSERT INTO `tbl_user_as_tutor` (`t_id`, `fname`, `uname`, `dob`, `gender`, `city`, `state`, `email`, `pass1`, `pass2`, `image`, `contact_num`) VALUES
(1, 'Israt', 'Israt Jahan', '1997-12-27', 'female', 'Abashik', 'Chittagong', 'isratjahan1122@gmail.com', '34df23', '34df23', '', ''),
(2, 'Israt', 'Israt Jahan', '1997-12-27', 'female', 'Abashik', 'Chittagong', 'isratjahan1122@gmail.com', '34df23', '34df23', '', ''),
(3, 'Tasnia', 'tasnia sultana', '1998-12-22', 'female', 'Hazigong,dogra', 'Chittagong', 'nia34@gmai.com', 'tre123', 'tre123', '', ''),
(4, 'Alifa', 'alifa', '2000-10-12', 'female', 'Abashik,192', 'Chittagong', 'alifa12@gmail.com', 'fg567', 'fg567', '', ''),
(5, 'Alifa', 'alifa', '2000-10-12', 'female', 'Abashik,192', 'Chittagong', 'alifa12@gmail.com', 'fg567', 'fg567', '', ''),
(6, 'Habiba', 'habiba tasnim', '1990-10-10', 'female', 'Hazigong,dogra', 'Chittagong', 'habiba@gmail.com', 'fred56', 'fred56', '', ''),
(7, 'habiba ', 'Habiba Jesmin', '2000-10-12', 'female', 'Chawkbazar', 'Chittagong', 'habiab2@gmail.com', 'iu456', 'iu456', '', ''),
(8, 'Yeasmin', 'Yeasmin Chowdhury', '1995-06-22', 'female', 'Abashik,192', 'Chittagong', 'yeasmin@gmail.com', 'yeasmin45', 'yeasmin45', '', ''),
(9, 'Hdhjb', 'hubhuhg', '2020-10-15', 'Male', 'khug', 'hoguvu', 'df@gmail.com', '7890', '7890', '', ''),
(12, 'Jannat Mawa', 'Jannat Mawa', '2002-10-15', 'Female', 'Chandgaon', 'Chittagong', 'jannat@gmail.com', 'jannat567', 'jannat567', '', ''),
(13, 'Rakib khan Chowdhury', 'Rakib Chowdhury', '2004-01-06', 'Male', 'Chandgaon', 'Chittagong', 'rakib@gmail.com', 'rakib7890', 'rakib7890', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student_info`
--
ALTER TABLE `tbl_student_info`
  ADD PRIMARY KEY (`s_id`);

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
-- AUTO_INCREMENT for table `tbl_student_info`
--
ALTER TABLE `tbl_student_info`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_as_student`
--
ALTER TABLE `tbl_user_as_student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user_as_tutor`
--
ALTER TABLE `tbl_user_as_tutor`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
