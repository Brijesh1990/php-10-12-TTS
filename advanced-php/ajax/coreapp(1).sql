-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2026 at 08:28 AM
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
-- Database: `coreapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `compid` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`compid`, `companyname`) VALUES
(1, 'tops technology'),
(2, 'Infosys'),
(3, 'TCS'),
(4, 'wipro');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `employeeid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `compid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`employeeid`, `name`, `email`, `salary`, `compid`) VALUES
(1, 'vipul', 'vipul@gmail.com', '45000', 1),
(2, 'viraj', 'viraj@gmail.com', '45500', 1),
(3, 'Brijesh', 'brijesh@gmail.com', '89600', 4),
(4, 'prakruti', 'prakruti@gmail.com', '65000', 3),
(5, 'sanket', 'sanket@gmail.com', '66500', 4),
(6, 'mitesh', 'mitesh@gmail.com', '55500', 3),
(7, 'jignesh', 'jignesh@gmail.com', '75000', 1),
(8, 'rohit', 'rohit@gmail.com', '15500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `rid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`rid`, `name`, `email`, `password`, `added_date`) VALUES
(4, 'viraj', 'viraj@gmail.com', '$2y$10$9fQyanTl2ztN7xcmjQ7OF.U1BYlwu0BvKs6EpAcsoM/q5zw9bXGzC', '2026-04-07 11:27:08'),
(5, 'vipu', 'vipul@gmail.com', '$2y$10$bGmuPZVr/3W97fxi8Pv.5u/RPVqpBzuwrPSJWbOEs/3xRyAM.PUIO', '2026-04-07 11:28:08'),
(6, 'bbbb', 'brijesh@gmail.com', '$2y$10$ArcEDS2yc5YQ4DxaoruQpef24VYhvvkYeguSJziXNWbzuQqBlu5qK', '2026-04-07 11:29:23'),
(7, 'aaaaa', 'brijesh@gmail.com', '$2y$10$am0l5ooRB3exhgjmW4nbMeegz55nE80svp6QfnDGuaXlut0MkqhbC', '2026-04-07 11:29:44'),
(8, 'aaaa', 'brijesh@gmail.com', '$2y$10$ACzXL7IPINvkmaYF6Ca6Y.7lX.EG9LZU8JQXykdaz5KRYVVR9tZvK', '2026-04-07 11:35:23'),
(9, 'aaaa', 'brijesh@gmail.com', '$2y$10$cq7DIPQ8VEX//ZHUpYNIheSnLl1AzHQ0OBvC83mmn6IigsUgmyKqK', '2026-04-07 11:36:20'),
(10, 'aaaa', 'brijesh@gmail.com', '$2y$10$Oh7A/Pn.3VjP.vfEyI/khu42A3A0DF4j62dBbAsRjskfX8OT.Ai3G', '2026-04-07 11:39:12'),
(11, 'aaaa', 'brijesh@gmail.com', '$2y$10$CnHI1sqtOuCp5R8WJyJ1F.r3AgBI1k7.xVk/AYRhyH6w2Pv6Gg2zu', '2026-04-07 11:39:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`compid`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`employeeid`),
  ADD KEY `companyid` (`compid`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `compid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD CONSTRAINT `companyid` FOREIGN KEY (`compid`) REFERENCES `tbl_company` (`compid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
