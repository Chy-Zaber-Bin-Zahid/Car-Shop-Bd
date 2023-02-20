-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 11:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `client` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `mecId` int(11) NOT NULL,
  `liNum` varchar(50) NOT NULL,
  `enNum` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `mecName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `row` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`client`, `phone`, `color`, `mecId`, `liNum`, `enNum`, `date`, `mecName`, `email`, `row`) VALUES
('Kuddus Miah', '01733849573', 'Red', 1, '123431', '12345', '2023-03-03', 'Hakim Ullah', 'Kuddus@gmail.com', 1),
('Kuddus Miah', '01811738493', 'Purple', 3, '123123', '12321', '2023-03-02', 'Ladies Washurum', 'Kuddus@gmail.com', 2),
('Bilkis Begum', '01833746590', 'Black', 2, '123456', '12347', '2023-02-20', 'Alison Burger', 'bilkis@gmail.com', 3),
('Kuddus Miah', '01733849573', 'Red', 1, '123123', '12321', '2023-03-03', 'Hakim Ullah', 'Kuddus@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `id` int(11) NOT NULL,
  `mecName` varchar(100) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`id`, `mecName`, `available`) VALUES
(1, 'Hakim Ullah', 10),
(2, 'Alison Burger', 1),
(3, 'Ladies Washurum', 5),
(4, 'Emploies Mushwasha', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `b_date` date NOT NULL,
  `Password` varchar(20) NOT NULL,
  `p_number` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `Email`, `b_date`, `Password`, `p_number`, `Gender`) VALUES
(3, 'Bilkis', 'Begum', 'bilkis@gmail.com', '2014-02-13', 'bilkis', 1733846579, 'Female'),
(1, 'Chy Zaber', 'Bin Zahid', 'czaber47@gmail.com', '1999-06-13', 'hello47', 1732948392, 'Male'),
(2, 'Kuddus', 'Miah', 'Kuddus@gmail.com', '2009-02-07', 'amikuddus', 1833762536, 'Male'),
(4, 'Ladies', 'Washurum', 'washurum@gmail.com', '2016-02-10', 'aladin', 1733846578, 'Other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`row`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
