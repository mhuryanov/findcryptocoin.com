-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 10:40 AM
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
-- Table structure for table `tbl_broadcast`
--

CREATE TABLE `tbl_broadcast` (
  `bro_id` int(11) NOT NULL,
  `bro_title` varchar(256) NOT NULL,
  `bro_content` text NOT NULL,
  `bro_style` enum('primary','success','secondary','danger','warning','info','light','dark') NOT NULL,
  `bro_status` enum('active','deactive') NOT NULL,
  `bro_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_broadcast`
--

INSERT INTO `tbl_broadcast` (`bro_id`, `bro_title`, `bro_content`, `bro_style`, `bro_status`, `bro_updated`) VALUES
(1, 'Well done!', '<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>\r\n  <hr>\r\n  <p class=\"mb-0\">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>', 'success', 'active', '2018-03-19 09:37:59'),
(2, 'Maintenance', 'we are going to maintenace from 2:00 to 4:00', 'danger', 'active', '2018-03-19 09:37:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_broadcast`
--
ALTER TABLE `tbl_broadcast`
  ADD PRIMARY KEY (`bro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_broadcast`
--
ALTER TABLE `tbl_broadcast`
  MODIFY `bro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
