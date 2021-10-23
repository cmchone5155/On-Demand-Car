-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 07:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `car info`
--

CREATE TABLE `car info` (
  `Make` varchar(10) NOT NULL,
  `Model` varchar(10) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Mileage` varchar(10) NOT NULL,
  `Color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car info`
--

INSERT INTO `car info` (`Make`, `Model`, `Year`, `Mileage`, `Color`) VALUES
('Toyota', 'Tacoma', '2015', '65,000', 'Dark Grey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car info`
--
ALTER TABLE `car info`
  ADD PRIMARY KEY (`Mileage`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
