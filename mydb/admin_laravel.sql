-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 03:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `pcode` varchar(50) DEFAULT NULL,
  `psale` varchar(10) DEFAULT NULL,
  `pbuy` varchar(10) DEFAULT NULL,
  `pcategory` varchar(50) DEFAULT NULL,
  `pstock` varchar(10) DEFAULT NULL,
  `pimg` varchar(1000) DEFAULT NULL,
  `pdesc` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pcode`, `psale`, `pbuy`, `pcategory`, `pstock`, `pimg`, `pdesc`, `created_at`, `updated_at`) VALUES
(1, 'Muazan Qureshi', '45', '420000', '450000', 'Mobile', '78', NULL, 'asdasdasdasdasd', '2021-03-12 12:08:50', '2021-03-12 12:08:50'),
(2, 'Muazan', '45', 'das', 'asd', 'asd', 'asd', NULL, 'asddsa', '2021-03-12 12:09:27', '2021-03-12 12:09:27'),
(3, 'asd', 'asd', 'sad', 'asd', 'asd', 'sad', NULL, 'asdasdasd', '2021-03-12 12:10:13', '2021-03-12 12:10:13'),
(4, 'asdasdmghmhgm', 'mgh', 'hg', 'mgmg', 'hgmhg', 'gmg', NULL, 'mhgmhmgmh', '2021-03-12 12:23:49', '2021-03-12 12:23:49'),
(5, 'wedding script', '45', '420000', '450000', 'Mobile', '78', NULL, 'asdsad', '2021-03-12 21:27:58', '2021-03-12 21:27:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
