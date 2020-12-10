-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 06:36 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelancerpanna`
--

-- --------------------------------------------------------

--
-- Table structure for table `details_ip`
--

CREATE TABLE `details_ip` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `currencysymbole` varchar(255) NOT NULL,
  `lati` varchar(255) NOT NULL,
  `longl` varchar(255) NOT NULL,
  `region_code` varchar(255) NOT NULL,
  `exchange_rate` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details_ip`
--



-- --------------------------------------------------------

--
-- Table structure for table `get_ipaddress`
--

CREATE TABLE `get_ipaddress` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `cpu_type` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_ipaddress`
--



-- --------------------------------------------------------

--
-- Table structure for table `get_iplist`
--

CREATE TABLE `get_iplist` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `cpu_type` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `get_iplist`
--


-- --------------------------------------------------------

--
-- Table structure for table `portfoilio`
--


--
-- Indexes for dumped tables
--


--
-- Indexes for table `details_ip`
--
ALTER TABLE `details_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_ipaddress`
--
ALTER TABLE `get_ipaddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_iplist`
--
ALTER TABLE `get_iplist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

-- AUTO_INCREMENT for table `details_ip`
--
ALTER TABLE `details_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `get_ipaddress`
--
ALTER TABLE `get_ipaddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `get_iplist`
--
ALTER TABLE `get_iplist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
