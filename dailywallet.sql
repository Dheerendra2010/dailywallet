-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 04:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailywallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments_details`
--

CREATE TABLE `payments_details` (
  `id` int(6) UNSIGNED NOT NULL,
  `paymentSCSH` varchar(30) NOT NULL,
  `secrate_code` varchar(30) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments_details`
--

INSERT INTO `payments_details` (`id`, `paymentSCSH`, `secrate_code`, `message`) VALUES
(3, 'banner2.jpg', '123450', 'hii iam kapil'),
(4, 'banner5.jpg', '123451', 'hi i am tony'),
(5, 'banner5.jpg', '123452', 'hii iam stew'),
(6, 'banner5.jpg', '123453', 'hi i am ander'),
(7, 'banner5.jpg', '123455', 'hi is jhub'),
(8, 'banner1.jpg', '643185', 'hfhgfuygikgkig');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dob` varchar(11) DEFAULT NULL,
  `gen` varchar(100) DEFAULT NULL,
  `dcode` int(6) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `profile_image` varchar(100) NOT NULL,
  `approvel_status` varchar(10) NOT NULL,
  `refer_code` varchar(100) NOT NULL,
  `refer_by` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `dob`, `gen`, `dcode`, `password`, `profile_image`, `approvel_status`, `refer_code`, `refer_by`, `role`) VALUES
(42, 'kpc', 'kpdeveloper@gmail.com', 'kpdeveloper@gmail.com', '06/07/1997', 'male', 643185, '12345', 'banner2.jpg', '1', '643185', '', 'user'),
(43, 'tom', 'jkbkhb', 'tom@gmail.com', '11/11/1111', 'male', 171489, '11111', 'male.jpg', '0', '39575', '643185', 'user'),
(44, 'lazy', 'smith', 'lazy@gmail.omc', '11/11/1111', 'female', 945249, '11111', 'male.jpg', '0', '790640', '643185', 'user'),
(46, 'first', 'USER', 'firstadmin@gmail.com', '11/11/1111', 'male', 344543, '12345', 'male.jpg', '0', '783007', '', 'admin'),
(47, 'customer1', 'test', 'customer1@gmail.com', '11/11/2000', 'male', 883961, '12345', 'male.jpg', '0', '387659', '643185', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments_details`
--
ALTER TABLE `payments_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments_details`
--
ALTER TABLE `payments_details`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
