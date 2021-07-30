-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 08:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spectrumintregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolioform`
--

CREATE TABLE `portfolioform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `phonenum` varchar(255) NOT NULL,
  `collname` varchar(255) NOT NULL,
  `byear` varchar(255) NOT NULL,
  `cbranch` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `techskills` varchar(255) NOT NULL,
  `matname` varchar(255) NOT NULL,
  `matper` varchar(255) NOT NULL,
  `intername` varchar(255) NOT NULL,
  `interper` varchar(255) NOT NULL,
  `gradname` varchar(255) NOT NULL,
  `gradper` varchar(255) NOT NULL,
  `projone` varchar(255) NOT NULL,
  `projonegit` varchar(255) NOT NULL,
  `projtwo` varchar(255) NOT NULL,
  `projtwogit` varchar(255) NOT NULL,
  `projthr` varchar(255) NOT NULL,
  `projthrgit` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `year` text NOT NULL,
  `branch` text NOT NULL,
  `domain` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `email`, `phone`, `year`, `branch`, `domain`, `password`, `confirmpassword`) VALUES
(3, 'Satyam Siba Prasad Das Mohapatra', 'satyamdasmohapatra@gmail.com', '07978472931', 'third', 'eie', 'soft', '$2y$10$0OksMO68EF3oVQxqlNC/j.eUlXX/sepSx0xtCVl8kEqcBIDAy0mwW', '$2y$10$2uRFlUQoQDxeH2nNwDdN3ur.Tut98foxxDSMHZdUT4jfroyTmRqhG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolioform`
--
ALTER TABLE `portfolioform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolioform`
--
ALTER TABLE `portfolioform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
