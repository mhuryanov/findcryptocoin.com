-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 08:51 AM
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
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `footer_id` int(11) NOT NULL,
  `about_us_target` varchar(1024) NOT NULL,
  `about_us_status` enum('active','deactive') NOT NULL,
  `careers_target` varchar(1024) NOT NULL,
  `careers_status` enum('active','deactive') NOT NULL,
  `press_target` varchar(1024) NOT NULL,
  `press_status` enum('active','deactive') NOT NULL,
  `legal_target` varchar(1024) NOT NULL,
  `legal_status` enum('active','deactive') NOT NULL,
  `faq_target` varchar(1024) NOT NULL,
  `faq_status` enum('active','deactive') NOT NULL,
  `company_status` enum('active','deactive') NOT NULL,
  `blog_target` varchar(1024) NOT NULL,
  `blog_status` enum('active','deactive') NOT NULL,
  `contact_us_status` enum('active','deactive') NOT NULL,
  `affilate_target` varchar(1024) NOT NULL,
  `affilate_status` enum('active','deactive') NOT NULL,
  `donate_target` varchar(1024) NOT NULL,
  `donate_status` enum('active','deactive') NOT NULL,
  `footer_status` enum('active','deactive') NOT NULL,
  `footer_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`footer_id`, `about_us_target`, `about_us_status`, `careers_target`, `careers_status`, `press_target`, `press_status`, `legal_target`, `legal_status`, `faq_target`, `faq_status`, `company_status`, `blog_target`, `blog_status`, `contact_us_status`, `affilate_target`, `affilate_status`, `donate_target`, `donate_status`, `footer_status`, `footer_updated`) VALUES
(1, '', 'active', '', 'active', '', 'active', '', 'active', '', 'active', 'active', '', 'active', 'active', '', 'active', '', 'active', 'active', '2018-03-21 07:24:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
