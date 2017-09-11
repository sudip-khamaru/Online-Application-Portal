-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 03:56 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(100) NOT NULL,
  `fname` text NOT NULL,
  `caste` text NOT NULL,
  `gender` text NOT NULL,
  `per_x` decimal(50,2) NOT NULL,
  `year_x` int(100) NOT NULL,
  `board_x` text NOT NULL,
  `per_xii` decimal(50,2) NOT NULL,
  `year_xii` int(100) NOT NULL,
  `board_xii` text NOT NULL,
  `qualifying` text NOT NULL,
  `per_gradu` decimal(50,2) NOT NULL,
  `year_gradu` int(100) NOT NULL,
  `university` text NOT NULL,
  `college` text NOT NULL,
  `roll` varchar(100) NOT NULL,
  `gate_rank` int(100) NOT NULL,
  `father` text NOT NULL,
  `mother` text NOT NULL,
  `income` int(100) NOT NULL,
  `guardian` text NOT NULL,
  `occupation` text NOT NULL,
  `guardian_phone` bigint(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `religion` text NOT NULL,
  `resi_address` varchar(100) NOT NULL,
  `per_address` varchar(100) NOT NULL,
  `nationality` text NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` text NOT NULL,
  `pin` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `disability` text NOT NULL,
  `blood` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `sign` text NOT NULL,
  `challan_no` int(100) NOT NULL,
  `challan_date` date NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `reg_id`, `fname`, `caste`, `gender`, `per_x`, `year_x`, `board_x`, `per_xii`, `year_xii`, `board_xii`, `qualifying`, `per_gradu`, `year_gradu`, `university`, `college`, `roll`, `gate_rank`, `father`, `mother`, `income`, `guardian`, `occupation`, `guardian_phone`, `dob`, `religion`, `resi_address`, `per_address`, `nationality`, `district`, `state`, `pin`, `email`, `phone`, `mobile`, `disability`, `blood`, `photo`, `sign`, `challan_no`, `challan_date`, `status`) VALUES
(62, 'KUCSE3355428', 'Sudip Khamaru', 'General', 'Male', '72.25', 2008, 'WBBSE', '73.00', 2010, 'WBCHSE', 'Graduation', '45.64', 2014, 'WBSU', 'Barasat Govt. College', '117', 0, 'Basudev Khamaru', 'Gita Khamaru', 96000, 'Basudev Khamaru', 'Ex-Serviceman', 9474122765, '1992-04-11', 'Hinduism', 'C/O - UTTAM GHOSH; N.S.ROAD; VILL - KAMARTHUBA (EAST); P.O.+P.S. - HABRA', 'C/O - UTTAM GHOSH; N.S.ROAD; VILL - KAMARTHUBA (EAST); P.O.+P.S. - HABRA', 'Indian', 'North 24 Parganas', 'West Bengal', 743263, 'sudipkhamaru@gmail.com', 9851588610, 8972055333, 'No', 'O+', 'PHOTO FOR WORK.jpg', 'SIGNATURE.JPG', 338, '2017-05-10', 'Success'),
(63, 'KUCSE8427890', 'kk', 'OBC-A', 'Male', '5.00', 6, 'j', '1.00', 8, 'i', 'BCA', '6.00', 2, 'g', 'g', '2', 1, 'g', 'g', 2, 'h', 'h', 2, '2010-01-01', 'Christian', 'g', 'u', 'Indian', 'j', 'West Bengal', 743263, 'bh', 1234567891, 89720553333, 'No', 'hh', 'Photo 2_3.jpg', 'FormatFactorySIGNATURE.jpg', 7, '2015-01-01', 'Success'),
(64, 'KUCSE0849999', 'ss', 'ST', 'Female', '72.00', 2008, 'hhh', '55.00', 655, 'ii', 'BTECH', '55.00', 55, 'jj', 'jj', '88', 0, 'hh', 'hh', 5, 'hh', 'hh', 9, '0000-00-00', 'Hinduism', 'hhh', 'hhh', 'Indian', '55bb', 'West Bengal', 55, 'hh', 55, 55, 'No', 'hh', 'PHOTO.jpg', 'SIGNATURE_2.JPG', 3, '2017-05-11', 'Success'),
(65, 'KUCSE4632749', 'Gulshan Kumar', 'General', 'Male', '89.80', 2009, 'CBSE', '79.80', 2011, 'CBSE', 'Graduation', '62.60', 2014, 'Patna University', 'Patna Science College', '1207', 0, 'Suresh Prasad', 'Geeta Devi', 400000, 'Suresh Prasad', 'Central Govt.', 8939106698, '1993-11-14', 'Hinduism', 'PG-II', 'PG-II', 'Indian', 'Kalyani', 'West Bengal', 741235, 'g14kumar@gmail.com', 0, 7059279997, 'No', 'B+', 'Photo 2_3.jpg', 'SIGNATURE.JPG', 1, '2017-05-12', 'Success'),
(66, 'tmp6177042', 'kk', 'SC', 'Female', '5.00', 2010, 'j', '1.00', 8, 'i', 'BCA', '6.00', 2, 'mm', 'nn', '2', 1, 'g', 'g', 2, 'h', 'h', 1234567890, '2017-05-30', 'Hinduism', 'jj', 'jj', 'Indian', 'Bankura', 'Others', 743263, 'washi.washi786@gmail.com', 1234567891, 89720553333, 'Yes', 'a+', '4523.jpg', '5250.jpg', 0, '0000-00-00', 'Pending'),
(67, 'tmp8304626', 'jgghkjdfgjdfjg', 'General', 'Male', '64.00', 2007, 'wbbse', '61.00', 2009, 'wbchse', 'Graduation', '61.00', 2013, 'nbu', 'zedca', 'jdgjgfhj', 4444, 'dfjgdfg', 'hjhjhj', 87989, 'jhjkhk', 'jhkjkjkjj', 876767676787, '2017-06-07', 'Christian', 'hjgjdfgdgh', 'hgdfhgdfhg', 'Indian', 'Alipurduar', 'West Bengal', 2147483647, 'dfjghdfjg@gmail.com', 34534534534, 3453453453, 'No', 'a+', 'didi me.jpg', 'didi me.jpg', 0, '0000-00-00', 'Pending'),
(68, 'tmp7840243', 'jgghkjdfgjdfjg', 'General', 'Male', '64.00', 2007, 'wbbse', '61.00', 2009, 'wbchse', 'Graduation', '61.00', 2013, 'nbu', 'zedca', 'jdgjgfhj', 4444, 'dfjgdfg', 'hjhjhj', 87989, 'jhjkhk', 'jhkjkjkjj', 876767676787, '2017-06-07', 'Christian', 'hjgjdfgdgh', 'hgdfhgdfhg', 'Indian', 'Alipurduar', 'West Bengal', 2147483647, 'dfjghdfjg@gmail.com', 34534534534, 3453453453, 'No', 'a+', 'didi me.jpg', 'didi me.jpg', 0, '0000-00-00', 'Pending'),
(69, 'tmp6540004', 'Washiul Hoque', 'General', 'Male', '61.00', 2007, 'wbbse', '61.00', 2009, 'wbchse', 'BCA', '61.00', 2013, 'North Bengal University', 'ZedCA', 'hghg666', 3890, 'M. Hoque', 'N. Begume', 600000, 'M. Hoque', 'Service', 7679012979, '02-06-1992', 'Islam', 'vill- kanduri,p.o- eroali, p.s- khargram', 'vill- kanduri,p.o- eroali, p.s- khargram', 'Indian', 'Murshidabad', 'West Bengal', 742147, 'washi.washi786@gmail.com', 23646324323432, 7679012979, 'No', 'a+', 'logo.jpg', 'notice.jpg', 0, '0000-00-00', 'Pending'),
(70, 'tmp8855184', 'Washiul Hoque', 'General', 'Male', '61.00', 2007, 'wbbse', '61.00', 2009, 'wbchse', 'BCA', '61.00', 2013, 'North Bengal University', 'ZedCA', 'hghg666', 3890, 'M. Hoque', 'N. Begume', 600000, 'M. Hoque', 'Service', 7679012979, '1992-02-06', 'Islam', 'vill- kanduri,p.o- eroali, p.s- khargram', 'vill- kanduri,p.o- eroali, p.s- khargram', 'Indian', 'Murshidabad', 'West Bengal', 742147, 'washi.washi786@gmail.com', 23646324323432, 7679012979, 'No', 'a+', 'logo.jpg', 'notice.jpg', 0, '0000-00-00', 'Pending'),
(71, 'tmp4813643', 'Washiul Hoque', 'General', 'Male', '61.00', 2007, 'wbbse', '61.00', 2009, 'wbchse', 'BCA', '61.00', 2013, 'North Bengal University', 'ZedCA', 'hghg666', 3890, 'M. Hoque', 'N. Begume', 600000, 'M. Hoque', 'Service', 7679012979, '1992-02-06', 'Islam', 'vill- kanduri,p.o- eroali, p.s- khargram', 'vill- kanduri,p.o- eroali, p.s- khargram', 'Indian', 'Murshidabad', 'West Bengal', 742147, 'washi.washi786@gmail.com', 23646324323432, 7679012979, 'No', 'a+', 'logo.jpg', 'notice.jpg', 0, '0000-00-00', 'Pending'),
(72, 'tmp6072167', 'Washiul Hoque', 'General', 'Male', '61.00', 2007, 'wbbse', '61.00', 2009, 'wbchse', 'BCA', '61.00', 2013, 'North Bengal University', 'ZedCA', 'hghg666', 3890, 'M. Hoque', 'N. Begume', 600000, 'M. Hoque', 'Service', 7679012979, '1992-02-06', 'Islam', 'vill- kanduri,p.o- eroali, p.s- khargram', 'vill- kanduri,p.o- eroali, p.s- khargram', 'Indian', 'Murshidabad', 'West Bengal', 742147, 'washi.washi786@gmail.com', 23646324323432, 7679012979, 'No', 'a+', 'logo.jpg', 'notice.jpg', 0, '0000-00-00', 'Pending'),
(73, 'tmp1960567', 'Washiul Hoque', 'General', 'Male', '61.00', 2007, 'wbbse', '61.00', 2009, 'wbchse', 'BCA', '61.00', 2013, 'North Bengal University', 'ZedCA', 'hghg666', 3890, 'M. Hoque', 'N. Begume', 600000, 'M. Hoque', 'Service', 7679012979, '1992-02-06', 'Islam', 'vill- kanduri,p.o- eroali, p.s- khargram', 'vill- kanduri,p.o- eroali, p.s- khargram', 'Indian', 'Murshidabad', 'West Bengal', 742147, 'washi.washi786@gmail.com', 23646324323432, 7679012979, 'No', 'a+', 'logo.jpg', 'notice.jpg', 0, '0000-00-00', 'Pending'),
(74, 'tmp3515518', 'Washiul Hoque', 'General', 'Male', '60.00', 2010, 'jhghg', '66.00', 2010, 'fghj', 'Graduation', '77.00', 2013, 'north bengal university', 'zedca', 'hdfjg44', 7777, 'dfngdfgdfj', 'hjhkjjkk', 77988, 'bjmkjhjjh', 'hjjkjkjhj', 556677665556, '2017-06-08', 'Christian', 'jghhjgghg', 'jhkjkjj', 'Indian', 'Kolkata', 'West Bengal', 76768767, 'dsghfff@gmail.com', 34563476564375, 3875637456, 'No', 'a+', 'logo.jpg', 'notice.jpg', 0, '0000-00-00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE IF NOT EXISTS `qa` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL,
  `answer` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `qa`
--

