-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 06:22 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findcryptocoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_communications`
--

CREATE TABLE `tbl_communications` (
  `com_id` int(11) NOT NULL,
  `com_kind` enum('in','out') NOT NULL,
  `com_from` int(11) NOT NULL,
  `com_to` int(11) NOT NULL,
  `com_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_communications`
--

INSERT INTO `tbl_communications` (`com_id`, `com_kind`, `com_from`, `com_to`, `com_updated`) VALUES
(1, 'in', 4, 2, '2018-03-23 15:08:44'),
(2, 'out', 2, 4, '2018-03-23 15:08:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_communications`
--
ALTER TABLE `tbl_communications`
  ADD PRIMARY KEY (`com_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_communications`
--
ALTER TABLE `tbl_communications`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
