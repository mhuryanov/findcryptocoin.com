-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 02:34 PM
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
-- Table structure for table `tbl_email_tpl`
--

CREATE TABLE `tbl_email_tpl` (
  `email_id` int(11) NOT NULL,
  `email_tpl` enum('delete','disable','signup') NOT NULL,
  `email_subject` varchar(1024) NOT NULL,
  `email_body` text NOT NULL,
  `email_status` enum('active','deactive') NOT NULL,
  `email_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_tpl`
--

INSERT INTO `tbl_email_tpl` (`email_id`, `email_tpl`, `email_subject`, `email_body`, `email_status`, `email_updated`) VALUES
(1, 'signup', 'Singup Success', 'Your signup is successed', 'active', '2018-03-26 08:55:25'),
(2, 'delete', 'User delete', 'Your Account has beed deleted', 'active', '2018-03-26 11:16:09'),
(3, 'disable', 'Account Disabled', 'Your account has been disabled.\r\nYou can login, and change that option as enable.', 'active', '2018-03-26 11:27:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_email_tpl`
--
ALTER TABLE `tbl_email_tpl`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_email_tpl`
--
ALTER TABLE `tbl_email_tpl`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
