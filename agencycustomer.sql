-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 11:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agencycustomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencyreviewadd`
--

CREATE TABLE `agencyreviewadd` (
  `sherereview` varchar(1000) NOT NULL,
  `rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customersignup`
--

CREATE TABLE `customersignup` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `password` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `paddress` varchar(500) NOT NULL,
  `peraddress` varchar(500) NOT NULL,
  `websitelink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customersignup`
--

INSERT INTO `customersignup` (`fname`, `lname`, `dob`, `gender`, `nationality`, `password`, `username`, `phone`, `email`, `paddress`, `peraddress`, `websitelink`) VALUES
('sumon', 'islam', '2021-12-01', 'male', 'Bangladesh', 123456, 'sumon01', 1707448261, 'sumon61@gmail.com', 'kaunia,rongpur', 'Dhaka', 'https://www.google.com/search?q=tourist+places+in+bangladesh&amp;rlz=1C1UEAD_enBD970BD970&amp;oq=tourist&amp;aqs=chrome.1.69i57j0i512l2j0i457i512j0i402j0i512l5.20829j0j7&amp;sourceid=chrome&amp;ie=UTF-8');

-- --------------------------------------------------------

--
-- Table structure for table `hotelandtransportation`
--

CREATE TABLE `hotelandtransportation` (
  `hpref` varchar(100) NOT NULL,
  `rpref` varchar(100) NOT NULL,
  `rcin` date NOT NULL,
  `rcout` date NOT NULL,
  `tpref` varchar(100) NOT NULL,
  `ttime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotelandtransportation`
--

INSERT INTO `hotelandtransportation` (`hpref`, `rpref`, `rcin`, `rcout`, `tpref`, `ttime`) VALUES
('3 star', 'Presidential Suite', '2021-12-01', '2021-12-08', 'BUS', 'FULLTIME'),
('4 Star', 'Presidential Suite', '2021-12-08', '2021-12-08', 'VIP', 'FULLTIME');

-- --------------------------------------------------------

--
-- Table structure for table `tourpackageadd`
--

CREATE TABLE `tourpackageadd` (
  `selecting` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourpackageadd`
--

INSERT INTO `tourpackageadd` (`selecting`) VALUES
('preminum Pakage'),
('preminum Pakage'),
('Exclusive Pakage'),
('Deluxe Pakage'),
('Exclusive Pakage'),
('Exclusive Pakage'),
('preminum Pakage'),
('Deluxe Pakage'),
('Deluxe Pakage'),
('Deluxe Pakage'),
('preminum Pakage'),
('Exclusive Pakage'),
('preminum Pakage'),
('Deluxe Pakage');

-- --------------------------------------------------------

--
-- Table structure for table `umrahpackageadd`
--

CREATE TABLE `umrahpackageadd` (
  `selecting` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umrahpackageadd`
--

INSERT INTO `umrahpackageadd` (`selecting`) VALUES
('Economy Umrah Package'),
('Economy Umrah Package'),
('Economy Umrah Package'),
('Deluxe Pakage'),
('6 night Budget friendly Package'),
('6 night Budget friendly Package'),
('Exclusive Pakage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customersignup`
--
ALTER TABLE `customersignup`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
