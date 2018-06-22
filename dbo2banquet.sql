-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 11:59 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbo2banquet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblavailability`
--

CREATE TABLE `tblavailability` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `timefrom` time NOT NULL,
  `timeto` time NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblavailability`
--

INSERT INTO `tblavailability` (`id`, `date`, `timefrom`, `timeto`, `status`) VALUES
(4, '2018-06-23', '10:00:00', '12:00:00', 'book');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourosel`
--

CREATE TABLE `tblcourosel` (
  `id` int(11) NOT NULL,
  `path` varchar(30) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourosel`
--

INSERT INTO `tblcourosel` (`id`, `path`, `datetime`) VALUES
(1, '2.jpg', '2018-06-20 02:10:39'),
(2, '1.jpg', '2018-06-20 12:16:01'),
(3, '3.jpg', '2018-06-20 12:16:01'),
(4, 'g1.jpg', '2018-06-20 12:16:20'),
(5, 'g5.jpg', '2018-06-20 12:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `tblgallary`
--

CREATE TABLE `tblgallary` (
  `id` int(11) NOT NULL,
  `imgpath` varchar(30) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgallary`
--

INSERT INTO `tblgallary` (`id`, `imgpath`, `datetime`) VALUES
(1, 'g8.jpg', '2018-06-20 21:17:10'),
(2, 'myetherwallet-banner-fun.jpg', '2018-06-20 21:17:10'),
(3, '', '2018-06-20 21:17:10'),
(4, 'myetherwallet-banner-fun.jpg', '2018-06-20 21:17:10'),
(5, '', '2018-06-20 21:17:10'),
(6, '', '2018-06-20 21:17:10'),
(7, '', '2018-06-20 21:17:10'),
(8, '', '2018-06-20 21:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblpackage`
--

CREATE TABLE `tblpackage` (
  `id` int(11) NOT NULL,
  `packagename` varchar(15) NOT NULL,
  `packagedesc` varchar(30) NOT NULL,
  `cost` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpackage`
--

INSERT INTO `tblpackage` (`id`, `packagename`, `packagedesc`, `cost`, `datetime`) VALUES
(1, 'vip', 'vip package', 8000, '2018-06-20 21:41:12'),
(2, '', '', 0, '2018-06-20 21:41:12'),
(3, '', '', 0, '2018-06-20 21:41:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblavailability`
--
ALTER TABLE `tblavailability`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblavailability`
--
ALTER TABLE `tblavailability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
