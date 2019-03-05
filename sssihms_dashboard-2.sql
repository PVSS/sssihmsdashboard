-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2019 at 05:57 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sssihms_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'OPTHOMOLOGY'),
(2, 'CARDIOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`) VALUES
(122, 'SSSIHMS-PUTTAPARTHI'),
(123, 'SSIHMS-BANGALORE');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_stats`
--

CREATE TABLE `monthly_stats` (
  `id` int(11) NOT NULL,
  `year` date NOT NULL,
  `month` date NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `op_ip` varchar(2) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly_stats`
--

INSERT INTO `monthly_stats` (`id`, `year`, `month`, `hospital_id`, `department_id`, `op_ip`, `count`) VALUES
(2, '2018-00-00', '2018-01-00', 123, 1, 'op', 400),
(3, '2018-00-00', '2018-02-00', 123, 1, 'op', 345),
(4, '2019-00-00', '2019-01-00', 122, 1, 'ip', 234),
(5, '2019-00-00', '2019-01-00', 122, 1, 'ip', 234),
(6, '2019-00-00', '2019-02-00', 122, 1, 'ip', 2),
(7, '2018-00-00', '2018-02-00', 122, 1, 'ip', 23),
(8, '2018-00-00', '2018-03-00', 122, 1, 'op', 40),
(9, '2018-00-00', '2018-04-00', 122, 1, 'ip', 34),
(10, '2018-00-00', '2018-01-00', 123, 1, 'op', 500),
(11, '2018-00-00', '2018-03-00', 123, 1, 'op', 456),
(12, '2018-00-00', '2018-04-00', 123, 1, 'op', 678),
(13, '2018-00-00', '2018-05-00', 123, 1, 'op', 45),
(14, '2018-00-00', '2018-06-00', 123, 1, 'op', 156),
(15, '2019-00-00', '2019-01-00', 123, 1, 'op', 235),
(16, '2019-00-00', '2019-02-00', 123, 1, 'op', 215),
(17, '2019-00-00', '2019-03-00', 123, 1, 'op', 178);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `monthly_stats`
--
ALTER TABLE `monthly_stats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monthly_stats`
--
ALTER TABLE `monthly_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
