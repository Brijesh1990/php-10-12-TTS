-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2026 at 07:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignto`
--

CREATE TABLE `tbl_assignto` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_assignto`
--

INSERT INTO `tbl_assignto` (`userid`, `username`) VALUES
(1, 'viraj'),
(2, 'vipul'),
(3, 'rensi'),
(4, 'brijesh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `taskid` int(11) NOT NULL,
  `taskname` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`taskid`, `taskname`, `userid`, `status`, `added_date`) VALUES
(1, 'angular js api integrations', 3, 'pending', '2026-01-01'),
(2, 'react js crud app', 4, 'pending', '2026-01-01'),
(3, 'vore php task manager  app', 2, 'pending', '2026-01-01'),
(4, 'mvc app crud ', 1, 'pending', '2026-01-01'),
(5, 'flutter crud app', 1, 'pending', '2026-01-01'),
(6, 'android app', 2, 'pending', '2025-12-31'),
(7, 'node js crud', 4, 'pending', '2025-12-30'),
(8, 'laravel crud app', 2, 'pending', '2026-01-01'),
(9, 'kotlin crud', 1, 'pending', '2026-12-01'),
(10, 'php file handeling', 2, 'pending', '2026-01-01'),
(11, 'ajax php', 2, 'completed', '2026-12-01'),
(12, 'ajax crud app', 2, 'pending', '2026-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_assignto`
--
ALTER TABLE `tbl_assignto`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`taskid`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_assignto`
--
ALTER TABLE `tbl_assignto`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
