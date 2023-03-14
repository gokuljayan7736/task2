-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2023 at 06:24 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_users`
--

CREATE TABLE `add_users` (
  `sl_no` int NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `id_no` varchar(20) DEFAULT NULL,
  `total_leaves` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `date_of_joining` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `add_users`
--

INSERT INTO `add_users` (`sl_no`, `name`, `id_no`, `total_leaves`, `role`, `date_of_joining`, `username`, `password`) VALUES
(9, 'Rahul', '1', '20', 'managing team', '2023-01-02', 'rahul@gmail.com', 'rahul'),
(14, 'anand', '03', '18', 'staff', '2023-02-02', 'anand@gmail.com', 'anand'),
(16, 'adam', '05', '16', 'staff', '2023-02-13', 'adam@gmail.com', 'adam'),
(32, 'admin', '001', '20', 'admin', '1/1/2012', 'admin@gmail.com', 'admin'),
(33, 'gautham', '005', '18', 'managing team', '2023-03-01', 'gautham@gmail.com', 'gautham'),
(46, 'Ajay', '007', '16', 'training', '2023-03-01', 'ajay@gmail.com', 'ajay');

-- --------------------------------------------------------

--
-- Table structure for table `apply_leave`
--

CREATE TABLE `apply_leave` (
  `sl_no` int NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `id_no` varchar(20) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `to_date` varchar(200) NOT NULL,
  `no_of_days` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `apply_leave`
--

INSERT INTO `apply_leave` (`sl_no`, `name`, `username`, `id_no`, `reason`, `role`, `date`, `to_date`, `no_of_days`, `status`) VALUES
(90, 'Rahul', 'rahul@gmail.com', '1', 'qwert', 'managing team', '2023-03-04', '2023-03-06', '', 'approved'),
(92, 'Rahul', 'rahul@gmail.com', '1', 'aa', 'managing team', '2023-03-03', '2023-03-09', '6', 'rejected'),
(93, 'Rahul', 'rahul@gmail.com', '1', 'aa', 'managing team', '2023-03-03', '2023-03-09', '6', 'approved'),
(94, 'Rahul', 'rahul@gmail.com', '1', 'aa', 'managing team', '2023-03-03', '2023-03-09', '6', 'approved'),
(95, 'Rahul', 'rahul@gmail.com', '1', 'aa', 'managing team', '2023-03-03', '2023-03-09', '0', 'pending'),
(96, 'Rahul', 'rahul@gmail.com', '1', 'aa', 'managing team', '2023-03-03', '2023-03-09', '6', 'approved'),
(97, 'Rahul', 'rahul@gmail.com', '1', 'aa', 'managing team', '2023-03-03', '2023-03-09', '6', 'rejected'),
(101, 'adam', 'adam@gmail.com', '05', 'afg', 'staff', '2023-03-01', '2023-03-03', '2', 'approved'),
(103, 'anand', 'anand@gmail.com', '03', 'Fever', 'staff', '2023-03-01', '2023-03-02', '1', 'rejected'),
(104, 'anand', 'anand@gmail.com', '03', 'Fever', 'staff', '2023-03-01', '2023-03-02', '1', 'approved'),
(105, 'anand', 'anand@gmail.com', '03', 'aa', 'staff', '2023-03-01', '2023-03-04', '3', 'pending'),
(106, 'gautham', 'gautham@gmail.com', '005', 'fever', 'managing team', '2023-03-01', '2023-03-02', '1', 'pending'),
(107, 'Ajay', 'ajay@gmail.com', '007', 'aaaa', 'training', '2023-03-01', '2023-03-02', '1', 'approved'),
(108, 'gautham', 'gautham@gmail.com', '005', 'qq', 'managing team', '2023-03-01', '2023-03-02', '1', 'pending'),
(109, 'Ajay', 'ajay@gmail.com', '007', 'aaaa', 'training', '2023-03-01', '2023-03-02', '1', 'pending'),
(110, 'anand', 'anand@gmail.com', '03', '', 'staff', '2023-03-03', '2023-03-11', '8', 'rejected'),
(111, 'anand', 'anand@gmail.com', '03', '', 'staff', '2023-03-03', '2023-03-11', '8', 'rejected'),
(112, 'Ajay', 'ajay@gmail.com', '007', 'aaa', 'training', '2023-03-02', '2023-03-02', '0', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_users`
--
ALTER TABLE `add_users`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `apply_leave`
--
ALTER TABLE `apply_leave`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_users`
--
ALTER TABLE `add_users`
  MODIFY `sl_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `apply_leave`
--
ALTER TABLE `apply_leave`
  MODIFY `sl_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
