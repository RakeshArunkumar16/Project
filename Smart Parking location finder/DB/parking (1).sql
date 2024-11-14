-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 11:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `password`, `id`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `earth`
--

CREATE TABLE `earth` (
  `eid` int(11) NOT NULL,
  `ename` varchar(1000) NOT NULL,
  `elink` varchar(1000) NOT NULL,
  `esize` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `earth`
--

INSERT INTO `earth` (`eid`, `ename`, `elink`, `esize`, `img`, `price`) VALUES
(3, 'sharadevi Public Parking', 'Sharadadevinagar,mysore,karnataka', '100', 'download (4).jpeg', '10');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `aid` varchar(100) NOT NULL,
  `agid` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`aid`, `agid`, `message`) VALUES
('danush', '8884644589', ' hello  i need organ'),
('sachin', '888464458', ' hello'),
('abc', '3454566b76khknkjnjnjnkjnjlkj', ' tyh6yh6y5'),
('ramu', '8884644589', ' we need information '),
('abc', '123467890', ' very Nyc And Cheat Rate');

-- --------------------------------------------------------

--
-- Table structure for table `fres`
--

CREATE TABLE `fres` (
  `rid` varchar(100) NOT NULL,
  `response` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fres`
--

INSERT INTO `fres` (`rid`, `response`) VALUES
('danush', ' hello');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `tid` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `uid`, `price`, `tid`, `status`) VALUES
(3, 'abc', '30', '123456789012345', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `pid` int(11) NOT NULL,
  `utype` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `lg` varchar(100) NOT NULL,
  `lt` varchar(100) NOT NULL,
  `sf` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `utype`, `pname`, `lg`, `lt`, `sf`, `price`, `img`) VALUES
(3, 'admin', 'vijayanagar Parking', '76.6213621', '12.3379428', '100', '30', 'download (2).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reqest`
--

CREATE TABLE `reqest` (
  `rid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `ft` varchar(50) NOT NULL,
  `rt` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'booked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reqest`
--

INSERT INTO `reqest` (`rid`, `pname`, `uid`, `ft`, `rt`, `status`) VALUES
(4, 'vijayanagar Parking', 'abc', '15:40', '16:40', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `userid` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`userid`, `title`, `info`) VALUES
('rohit', 'hello', ' hello thanks for donation ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `utype` varchar(100) NOT NULL,
  `usid` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `utype`, `usid`, `uemail`, `password`, `address`, `phone`, `fullname`) VALUES
(8, '', 'suresh', 'mpsuresh@gmail.com', '123', 'mysore', NULL, NULL),
(10, 'user', 'harshitha', 'harshitha@gmail.com', '132', 'mysore', NULL, NULL),
(12, 'user', 'abc', 'abc@gmail.com', 'abc', '', NULL, NULL),
(13, 'user', 'sachin', 'sachin@gmail.com', '123', 'mysore', NULL, NULL),
(15, 'user', 'ramesh', 'ramesh@gmail.com', '123', 'mysore', NULL, NULL),
(16, 'user', 'ramu', 'ramu@gmail.com', '123', 'mysore', NULL, NULL),
(17, 'user', 'madan', 'madan@gmail.com', '8884644589', 'mysore', '8884644589', 'madan'),
(18, 'user', 'sagar D', 'sagarsmarty84@gmail.com', 'sagar', '', '9071198727', 'sagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earth`
--
ALTER TABLE `earth`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reqest`
--
ALTER TABLE `reqest`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `earth`
--
ALTER TABLE `earth`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reqest`
--
ALTER TABLE `reqest`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
