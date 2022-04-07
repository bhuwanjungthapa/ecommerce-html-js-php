-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 04:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(250) NOT NULL,
  `contact_email` varchar(250) NOT NULL,
  `contact_country` varchar(250) NOT NULL,
  `contact_msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cooler`
--

CREATE TABLE `cooler` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `f_price` int(50) NOT NULL,
  `f_stock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cooler`
--

INSERT INTO `cooler` (`f_id`, `f_name`, `f_price`, `f_stock`) VALUES
(4000, 'Samsung Cooler', 2500, 1),
(4001, 'Sony Cooler', 2000, 1),
(4003, 'Apple Cooler', 30000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `c_price` int(50) NOT NULL,
  `c_stock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`c_id`, `c_name`, `c_price`, `c_stock`) VALUES
(1046, 'r9-xseries CPU', 50000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(250) NOT NULL,
  `g_price` int(50) NOT NULL,
  `g_stock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`g_id`, `g_name`, `g_price`, `g_stock`) VALUES
(2000, 'gpu', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderlist1`
--

CREATE TABLE `orderlist1` (
  `oid` int(50) NOT NULL,
  `oname` varchar(250) NOT NULL,
  `ophone` int(100) NOT NULL,
  `0address` varchar(250) NOT NULL,
  `0item` varchar(250) NOT NULL,
  `oprice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderlist1`
--

INSERT INTO `orderlist1` (`oid`, `oname`, `ophone`, `0address`, `0item`, `oprice`) VALUES
(10002, 'ForgePC', 2147483647, 'Kathmandhu', 'Samsung Cooler, gpu, ', 2501),
(10003, 'orchid', 1111111111, 'ktm', 'Samsung Cooler, ', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(250) NOT NULL,
  `r_price` int(50) NOT NULL,
  `r_stock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`r_id`, `r_name`, `r_price`, `r_stock`) VALUES
(3000, 'ram', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userName` varchar(250) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `phone` int(10) NOT NULL,
  `home` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userName`, `fullName`, `phone`, `home`, `pass`) VALUES
(4, 'admin', 'orchid', 123456789, 'ktm', 'admin'),
(7, 'orchid', '', 0, '', 'asd'),
(8, 'orchid1', '', 0, '', 'orchid1'),
(9, 'admin1', '', 0, '', 'admin1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `cooler`
--
ALTER TABLE `cooler`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `orderlist1`
--
ALTER TABLE `orderlist1`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `oid` (`oid`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5000;

--
-- AUTO_INCREMENT for table `cooler`
--
ALTER TABLE `cooler`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4011;

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1062;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2008;

--
-- AUTO_INCREMENT for table `orderlist1`
--
ALTER TABLE `orderlist1`
  MODIFY `oid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3007;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
