-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2017 at 03:32 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `fachead`
--

CREATE TABLE IF NOT EXISTS `fachead` (
`id` int(255) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(100) NOT NULL,
  `address` text NOT NULL,
  `mobi` int(15) NOT NULL,
  `purpose` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `fact` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fachead`
--

INSERT INTO `fachead` (`id`, `fac_id`, `name`, `gender`, `age`, `address`, `mobi`, `purpose`, `email`, `password`, `fact`) VALUES
(6, 545465, 'Manish', 'Male', 22, 'hghj', 7897897, 'account', 'man@f.com', '123', NULL),
(7, 23545, 'Rajesh Jaiswal', 'Male', 21, 'Karol Bagh', 885545665, 'Hostel Facility', 'raj@gmail.com', '123', NULL),
(8, 205, 'Sajal Sachan', 'Male', 24, 'MIG FLAT NO.2,Lane 3', 2147483647, 'Food Incharge', 'sajalsachan@gmail.com', '456', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
`notify_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `stud_id` int(11) NOT NULL,
  `fac_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notify_id`, `note`, `stud_id`, `fac_id`) VALUES
(1, 'you have to issue pass of 500/- for food', 1, 6),
(2, 'no charge for vehicles', 1, 6),
(3, 'pay 500 for mess', 3, 6),
(4, '250/- for vehicle', 3, 6),
(5, '250/- for vehicle', 1, 6),
(7, 'ok for vehicle', 3, 6),
(8, 'fhfngffg', 3, 6),
(9, 'You will get it soon', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
`query_id` int(255) NOT NULL,
  `stud_id` int(255) NOT NULL,
  `query` text NOT NULL,
  `flag` int(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_id`, `stud_id`, `query`, `flag`) VALUES
(1, 1, 'hostel facility is required', 2),
(2, 1, 'want gate pass', 1),
(3, 1, 'food service', 2),
(4, 1, 'vehicle service', 2),
(5, 1, 'food service', 2),
(6, 1, 'attendance problem', 1),
(7, 1, 'shopping facility', 2),
(8, 1, 'Want vehicle facility', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`id` int(255) NOT NULL,
  `stud_id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(100) NOT NULL,
  `address` text NOT NULL,
  `mobi` int(12) NOT NULL,
  `stream` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stud_id`, `name`, `gender`, `age`, `address`, `mobi`, `stream`, `email`, `password`) VALUES
(1, '101', 'Amit', 'Male', 20, 'H no.3 ,Khanpur,Delhi', 456465446, 'CSE', 'abc@gmail.com', '123'),
(3, '102', 'Kriti', 'Female', 20, 'H No 3 ,Fouza Bagan,New Baridih', 456465446, 'CSE', 'ktj@gmail.com', '123'),
(4, '105', 'Amitabh Shetty', 'Male', 21, 'H NO.3 KarolBagh,Jatindas Chowk', 2147483647, 'CSE', 'amitabh001@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fachead`
--
ALTER TABLE `fachead`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`notify_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
 ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fachead`
--
ALTER TABLE `fachead`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `notify_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
MODIFY `query_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
