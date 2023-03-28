-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 10:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_supply`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `child_id` int(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `fk_member_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`child_id`, `full_name`, `gender`, `fk_member_id`) VALUES
(3, 'Moncy', 'male', 0),
(9, 'Moncy', 'male', 0),
(10, 'Moncy', 'male', 0),
(11, 'Moncy', 'male', 0),
(12, 'Moncy', 'male', 3),
(13, 'Moncy', 'male', 3),
(14, 'Moncy', 'male', 3),
(15, 'Moncy', 'male', 3),
(16, 'Moncy', 'male', 3),
(17, 'james', 'male', 3),
(18, 'james', 'male', 3),
(19, 'james', 'male', 3),
(20, 'asd', 'male', 3),
(21, 'vishal', 'male', 8),
(22, 'Jinu', 'male', 9);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(200) NOT NULL,
  `food_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_title`) VALUES
(1, 'biscut'),
(2, 'biscut'),
(3, 'Egg'),
(5, 'Amrutham');

-- --------------------------------------------------------

--
-- Table structure for table `food_stock`
--

CREATE TABLE `food_stock` (
  `stock_id` int(200) NOT NULL,
  `fk_food_id` int(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_stock`
--

INSERT INTO `food_stock` (`stock_id`, `fk_food_id`, `qty`, `date`) VALUES
(1, 1, '6', '2023-03-10'),
(2, 1, '7', '2023-03-10'),
(3, 1, '9', '2023-03-10'),
(4, 2, '5', '2023-03-16'),
(5, 3, '9', '2023-03-25'),
(6, 1, '9', '2023-03-02'),
(7, 5, '20', '2023-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `food_supply`
--

CREATE TABLE `food_supply` (
  `supply_id` int(200) NOT NULL,
  `fk_food_id` int(200) NOT NULL,
  `fk_member_id` int(200) NOT NULL,
  `supply_date` date NOT NULL,
  `qty` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_supply`
--

INSERT INTO `food_supply` (`supply_id`, `fk_food_id`, `fk_member_id`, `supply_date`, `qty`) VALUES
(1, 1, 3, '2023-03-11', '10'),
(2, 3, 7, '2023-03-16', '12'),
(3, 3, 9, '2023-03-16', '2');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 'admin'),
(3, 'johan', 'johan', 'worker');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `aadhar_no` int(200) NOT NULL,
  `dob` date NOT NULL,
  `place` varchar(200) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `fullname`, `address`, `aadhar_no`, `dob`, `place`, `reg_date`) VALUES
(3, 'johan', 'johan', 2147483647, '2023-02-16', 'ekm', '2023-03-15'),
(8, 'Abhishek', 'Abhishek villa', 2147483647, '2017-07-01', 'chry', '2023-03-16'),
(9, 'James', 'James Villa', 2147483647, '2010-07-28', 'tvla', '2023-03-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `food_stock`
--
ALTER TABLE `food_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `food_supply`
--
ALTER TABLE `food_supply`
  ADD PRIMARY KEY (`supply_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `child_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food_stock`
--
ALTER TABLE `food_stock`
  MODIFY `stock_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `food_supply`
--
ALTER TABLE `food_supply`
  MODIFY `supply_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
