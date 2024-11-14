-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 07:16 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quality`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `eprice` varchar(1000) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earth`
--

INSERT INTO `earth` (`eid`, `ename`, `elink`, `esize`, `eprice`, `about`) VALUES
(1, 'Apartment', 'https://earth.google.com/web/data=MkEKPwo9CiExSTdadExiYWIxbDF4TzJYa1FSNjJBSzBIWjhrVTlsaVESFgoUMEFCNjk2NTg3MTIyQ0Y1MkY2NDIgAQ', '1500', '100000', 'Goood location');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `aid` varchar(100) NOT NULL,
  `agid` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`aid`, `agid`, `message`) VALUES
('danush', '8884644589', ' hello  i need organ'),
('sachin', '888464458', ' hello'),
('abc', '3454566b76khknkjnjnjnkjnjlkj', ' tyh6yh6y5'),
('ramu', '8884644589', ' we need information ');

-- --------------------------------------------------------

--
-- Table structure for table `fres`
--

CREATE TABLE `fres` (
  `rid` varchar(100) NOT NULL,
  `response` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fres`
--

INSERT INTO `fres` (`rid`, `response`) VALUES
('danush', ' hello');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `utype`, `pname`, `lg`, `lt`, `sf`, `price`, `img`) VALUES
(1, 'admin', 'S4 colony', '72.300', '52.3000', '45899', '500', 'a.jpg'),
(4, 'admin', 'Brigade', '76.6345216', '12.2519552', '1000', '1500000', 'download (1).jpg'),
(8, 'sachin', 'Brigade', '76.6083072', '12.2847232', '1500', '500', '30d3fa29c2b7462ecbd657f1ab1b23eb.jpg'),
(9, 'ramu', 'Vidya vardaka', '76.615217', '12.338098', '1200', '500000', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reqest`
--

CREATE TABLE `reqest` (
  `rid` int(11) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reqest`
--

INSERT INTO `reqest` (`rid`, `pid`, `uid`) VALUES
(1, '1', 'sachin'),
(2, '8', 'ramesh'),
(3, '8', 'ramu');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `userid` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(17, 'user', 'madan', 'madan@gmail.com', '8884644589', 'mysore', '8884644589', 'madan');

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
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reqest`
--
ALTER TABLE `reqest`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
