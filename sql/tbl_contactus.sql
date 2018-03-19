-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 06:56 PM
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
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `contact_id` int(11) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(256) NOT NULL,
  `contact_msg` text NOT NULL,
  `contact_reply` text,
  `contact_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`contact_id`, `contact_email`, `contact_subject`, `contact_msg`, `contact_reply`, `contact_updated`) VALUES
(1, 'test@mail.com', 'test', 'test', NULL, '2018-03-19 17:40:10'),
(2, 'rubby.star@hotmail.com', 'test', 'test', NULL, '2018-03-19 17:44:19'),
(3, 'rubby.star@hotmail.com', 'eeee', 'eee', NULL, '2018-03-19 17:45:49'),
(4, 'rubby.star@hotmail.com', 'asdfjalskd ', 'alsdjflaksjd fa ', NULL, '2018-03-19 17:54:25'),
(5, 'rubby.star@hotmail.com', 'asdfasdf', 'asdfasdf', NULL, '2018-03-19 17:54:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
