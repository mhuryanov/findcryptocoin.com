-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 06:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmap`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coin_list`
--

CREATE TABLE `tbl_coin_list` (
  `coin_id` int(11) NOT NULL,
  `coin_name` varchar(256) NOT NULL,
  `coin_status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `coin_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_coin_list`
--

INSERT INTO `tbl_coin_list` (`coin_id`, `coin_name`, `coin_status`, `coin_updated`) VALUES
(1, 'ETH', 'active', '2018-03-16 17:10:24'),
(2, 'Altcoin', 'active', '2018-03-16 17:10:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_coin_list`
--
ALTER TABLE `tbl_coin_list`
  ADD PRIMARY KEY (`coin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_coin_list`
--
ALTER TABLE `tbl_coin_list`
  MODIFY `coin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
