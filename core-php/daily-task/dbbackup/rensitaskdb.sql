-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2026 at 06:25 AM
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
-- Database: `rensitaskdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_approved_tasks`
--

CREATE TABLE `tbl_approved_tasks` (
  `apid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `approved_task_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_approved_tasks`
--

INSERT INTO `tbl_approved_tasks` (`apid`, `rid`, `approved_task_name`, `status`) VALUES
(1, 1, 'evening walk ,padhai ki', 'approved'),
(2, 2, 'koi bat nahi jao', 'approved'),
(3, 1, 'khana khaya', 'approved'),
(4, 1, 'morning walk,evening walk ,khana khaya,padhai ki', 'approved'),
(5, 1, 'padhai ki', 'approved'),
(6, 1, 'morning walk,evening walk ,khana khaya,padhai ki', 'approved'),
(7, 3, 'php core crud app,react js crud,laravel crud,todo app,js app', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `rid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`rid`, `name`, `email`, `password`, `phone`) VALUES
(1, 'brijesh', 'brijesh@gmail.com', 'YnJpajEy', 9998003879),
(2, 'viraj', 'viraj@gmail.com', 'MTIzNDU2', 9173357217),
(3, 'sanket', 'sanket@gmail.com', 'c2Fua2V0MTI=', 9998003879);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `taskid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`taskid`, `rid`, `task_name`, `task_description`) VALUES
(1, 1, 'morning walk', 'kar liya'),
(2, 1, 'evening walk ', 'kar liya'),
(3, 1, 'khana khaya', 'kha liya'),
(4, 1, 'padhai ki', 'nahi ki'),
(5, 2, 'bahut jaldi ghar jana hai', 'mammi cal kar rahi hai'),
(6, 2, 'koi bat nahi jao', 'ok'),
(7, 3, 'php core crud app', 'done'),
(8, 3, 'react js crud', 'done'),
(9, 3, 'laravel crud', 'done'),
(10, 3, 'todo app', 'hi'),
(11, 3, 'js app', 'hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_approved_tasks`
--
ALTER TABLE `tbl_approved_tasks`
  ADD PRIMARY KEY (`apid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`taskid`),
  ADD KEY `rid` (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_approved_tasks`
--
ALTER TABLE `tbl_approved_tasks`
  MODIFY `apid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
