-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 07:11 PM
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
-- Table structure for table `tbl_actions_list`
--

CREATE TABLE `tbl_actions_list` (
  `action_id` int(11) NOT NULL,
  `action_coin_id` int(11) NOT NULL,
  `action_count` int(11) NOT NULL,
  `action_counter` int(11) NOT NULL,
  `action_user_id` int(11) NOT NULL,
  `action_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_actions_list`
--

INSERT INTO `tbl_actions_list` (`action_id`, `action_coin_id`, `action_count`, `action_counter`, `action_user_id`, `action_updated`) VALUES
(1, 1, 55, 300, 1, '2018-03-16 18:06:40'),
(2, 2, 66, 323, 2, '2018-03-16 18:09:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_actions_list`
--
ALTER TABLE `tbl_actions_list`
  ADD PRIMARY KEY (`action_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_actions_list`
--
ALTER TABLE `tbl_actions_list`
  MODIFY `action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
