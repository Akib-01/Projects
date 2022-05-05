-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 06:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`) VALUES
(54, 'akib', 's'),
(55, 'akib', 's'),
(56, 'akib', 'ljn'),
(57, 'akib', 'gvhhvjvhvh'),
(58, 'akib', 'ldakwjafkjbf'),
(59, 'akib', 'ldakwjafkjbf'),
(60, 'akib', 'good'),
(61, 'akib', 'good'),
(62, 'akib', 'good'),
(63, 'akib', 'good'),
(64, 'akib', 'good'),
(65, 'akib', 'good'),
(66, 'akib', 'good'),
(67, 'akib', 'v'),
(68, 'akib', 'v'),
(69, 'akib', 'v'),
(70, 'akib', 'v'),
(71, 'akib', 'v'),
(72, 'akib', 'v'),
(73, 'akib', 'v'),
(74, 'akib', 'v'),
(75, 'akib', 'v'),
(76, 'akib', 'v'),
(77, 'akib', 'v'),
(78, 'akib', 'v'),
(79, 'akib', 'vv'),
(80, 'akib', 'vv'),
(81, 'akib', 'ddd'),
(82, 'akib', 'ddd'),
(83, 'akib', 'ddd'),
(84, 'akib', 'ddd'),
(85, 'akib', 's');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `oname`, `event`, `amount`) VALUES
(1, 'charitable', 'Iftar for poor Muslims', 500),
(2, 'charitable', 'Iftar for poor Muslims', 500),
(3, 'charitable', 'Education for street children', 50000),
(4, 'shopno', 'Iftar for poor Muslims', 50000),
(5, 'shopno', 'Share the joy in this Eid', 60000),
(6, 'Bidyonondo', 'Education for street children', 8646),
(7, 'Bidyonondo', '1 takar ahar', 100000),
(8, 'charity', 'Share the joy in this Eid', 9000),
(9, 'charity', 'Iftar for poor Muslims', 6000),
(10, 'charitable', '1 takar ahar', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `join_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `join_status`) VALUES
(1, 'Iftar for poor Muslims', 1),
(2, 'Education for street children', 1),
(3, 'Share the joy in this Eid', 1),
(4, 'Free medical camp', 0),
(5, 'one taka meal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organization_list`
--

CREATE TABLE `organization_list` (
  `Oname` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `cpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization_list`
--

INSERT INTO `organization_list` (`Oname`, `Phone`, `Email`, `username`, `pass`, `cpass`) VALUES
('charitable', '01795849553', 'abdullahakib1999@gmail.com', 'akib', '1111', '1111'),
('Bidyonondo', '01556699884', 'bidyanondo@gmail.com', 'bidyanondo', '5555', '5555'),
('charity', '+880236584565', 'chariy@charity.com', 'charity', '55555', '55555'),
('aa', 'dd', 'dd', 'dd', '1234', '1234'),
('d', 'd', 'd', 'ddd', 'ddd', 'ddd'),
('dw', 'dw', 'wd', 'ddddw', 'dd', 'dd'),
('dw', 'dw', 'wd', 'dw', 'dw', 'dw'),
('dwdwd', 'dwdwd', 'vvvv', 'f', 'f', 'g'),
('dddd', 'ddadwd', 'ff', 'ff', 'ff', 'ff'),
('shopno', '01999150210', 'shpno@gmail.com', 'sopno', '2222', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(100) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `oname`, `reason`, `amount`) VALUES
(1, 'charitable', 'a', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_list`
--
ALTER TABLE `organization_list`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
