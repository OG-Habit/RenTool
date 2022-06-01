-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 12:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentool`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_item`
--

CREATE TABLE `add_item` (
  `user_id` bigint(20) NOT NULL,
  `item_id` bigint(20) NOT NULL,
  `item_image` varchar(100) NOT NULL,
  `item_name` varchar(25) NOT NULL,
  `item_sname` varchar(25) NOT NULL,
  `item_location` varchar(25) NOT NULL,
  `item_category` varchar(25) NOT NULL,
  `item_about` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_address` varchar(55) NOT NULL,
  `user_phone` bigint(20) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_item`
--
ALTER TABLE `add_item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_name` (`item_name`),
  ADD KEY `item_location` (`item_location`),
  ADD KEY `item_category` (`item_category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_item`
--
ALTER TABLE `add_item`
  MODIFY `item_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
