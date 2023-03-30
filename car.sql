-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 09:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `plate` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `name`, `address`, `plate`, `category`, `price`, `quantity`, `avatar`, `description`, `date`) VALUES
(4, 'abc', 'Rwanda', 'RAC3928', 'track', 60000000, 1, 't1.jfif', '2021-06-09', 'New track'),
(6, 'Strong', 'USA', 'RAC3900', 'bus', 80000000, 6, 'b6.JPG', '2022-03-03', 'Its new'),
(7, 'Sky', 'UK', 'RAC3976', 'bus', 70000000, 12, 'c2.png', '', 'Its new'),
(8, 'Lgt', 'Chine', 'RAC3008', 'pickup', 2000000, 1, 'c4.jpg', '2013-02-06', 'Used'),
(10, 'Toyota', 'Chine', 'Rac3813', 'bus', 80000, 0, 'b6.JPG', '2023-03-20', ''),
(40, 'Tasha', 'Kicukiro', 'Rac3813', 'bus', 2333, 1, 'james-kovin-ITiJrBI3XnE-unsplash.jpg', '2023-03-21', 'yes'),
(41, 'abcd', 'Rwanda', 'RAC3928a', 'pickup', 60000000, 1, 'CASE1a.jpg', '', '2023-03-22'),
(42, 'Nissan', 'Kenya', 'Rac3813', 'truck', 30000, 2, 'Mbundikira Concert Post 1.jpg', '', '2023-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_orders`
--

CREATE TABLE `confirmed_orders` (
  `co_id` int(12) NOT NULL,
  `order_id` int(12) NOT NULL,
  `car_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confirmed_orders`
--

INSERT INTO `confirmed_orders` (`co_id`, `order_id`, `car_id`, `user_id`, `date`) VALUES
(3, 1, 4, 2, ' '),
(15, 3, 7, 2, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(12) NOT NULL,
  `car_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `quantity` int(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `car_id`, `user_id`, `quantity`, `date`) VALUES
(4, 4, 2, 1, '2023-03-08 13:57:06'),
(8, 4, 0, 1, '2023-03-20 04:13:27'),
(9, 8, 0, 1, '2023-03-20 04:15:03'),
(14, 10, 6, 1, '2023-03-20 06:55:38'),
(20, 8, 0, 1, '2023-03-23 13:35:36'),
(22, 6, 0, 1, '2023-03-28 00:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(12) NOT NULL,
  `car_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `receipt` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `car_id`, `user_id`, `receipt`, `description`, `date`) VALUES
(17, 0, 3, '', 'yes', '2023-03-21 13:57:40'),
(21, 8, 3, 'background2.jpg', '', '2023-03-21 14:15:25'),
(24, 0, 3, 'Kagarama.jpg', '', '2023-03-22 14:20:10');

-- --------------------------------------------------------

--
-- Table structure for table `stockout`
--

CREATE TABLE `stockout` (
  `out_id` int(12) NOT NULL,
  `car_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stockout`
--

INSERT INTO `stockout` (`out_id`, `car_id`, `user_id`, `quantity`, `date`) VALUES
(1, 7, 3, '1', 'now()'),
(2, 9, 3, '1', '2023-03-12 12:36:43'),
(3, 9, 3, '1', '2023-03-12 12:41:46'),
(4, 9, 3, '1', '2023-03-12 12:44:05'),
(5, 9, 3, '1', '2023-03-12 12:45:13'),
(6, 9, 3, '1', '2023-03-12 12:47:08'),
(7, 9, 3, '1', '2023-03-12 12:47:09'),
(8, 9, 3, '1', '2023-03-12 12:47:09'),
(9, 9, 3, '1', '2023-03-12 12:47:36'),
(10, 9, 3, '1', '2023-03-19 12:46:06'),
(11, 7, 3, '1', '2023-03-19 12:58:33'),
(12, 7, 3, '1', '2023-03-20 02:45:04'),
(13, 7, 3, '1', '2023-03-20 03:14:56'),
(14, 8, 3, '1', '2023-03-20 04:23:16'),
(15, 10, 7, '1', '2023-03-20 06:54:12'),
(16, 8, 6, '1', '2023-03-20 07:05:50'),
(17, 7, 3, '1', '2023-03-21 14:00:51'),
(18, 7, 3, '1', '2023-03-21 14:01:10'),
(19, 7, 3, '1', '2023-03-21 14:10:23'),
(20, 8, 3, '1', '2023-03-21 14:12:46'),
(21, 10, 3, '1', '2023-03-22 12:39:29'),
(22, 8, 3, '1', '2023-03-22 14:21:26'),
(23, 41, 3, '1', '2023-03-28 00:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `names` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gander` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `names`, `address`, `phone`, `email`, `gander`, `username`, `password`, `usertype`) VALUES
(2, 'Tuyizere Bizaza Alain', 'Karongi', '0788253521', 'bizaza@gmail.com', 'Male', 'bizaza_alain', 'bizaza1234', 'user'),
(3, 'Iradukunda Feza', 'Rwanda', '0788775643', 'feza@gmail.com', 'Female', 'feza', 'feza1234', 'user'),
(4, 'Admin', 'none', '0789910203', 'info@classiccar.org', 'Male', 'admin', 'admin', 'admin'),
(5, 'Tasha', 'Kicukiro', '0785289566', 'bonneyvette22@gmail.com', 'Female', 'Tasha', '0785289556', 'user'),
(6, 'Uwera Bonnefĕte yvette', 'Kicukiro', '0785289566', 'bonneyvette22@gmail.com', 'Female', 'Tasha50', '0785289566', 'user'),
(7, 'Clarisse UWASE ', 'Huye ', '0781960663', 'uwaseblessclark@gmail.com', 'Female', 'Clark', 'Eminedebuh', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `confirmed_orders`
--
ALTER TABLE `confirmed_orders`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `stockout`
--
ALTER TABLE `stockout`
  ADD PRIMARY KEY (`out_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `confirmed_orders`
--
ALTER TABLE `confirmed_orders`
  MODIFY `co_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `stockout`
--
ALTER TABLE `stockout`
  MODIFY `out_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
