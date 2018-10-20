-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 11:55 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graph1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banktransfer`
--

CREATE TABLE `banktransfer` (
  `userid` varchar(40) NOT NULL,
  `t_date` varchar(300) NOT NULL,
  `amount` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banktransfer`
--

INSERT INTO `banktransfer` (`userid`, `t_date`, `amount`) VALUES
('nikhi@ddjk.com', '18/08/18', '45.97'),
('nikhi@ddjk.com', '19/08/18', '1288.94'),
('nikhi@ddjk.com', '26/08/18', '574.48'),
('nikhi@ddjk.com', 'Total', '1909.39');

-- --------------------------------------------------------

--
-- Table structure for table `concern`
--

CREATE TABLE `concern` (
  `co_id` int(50) NOT NULL,
  `username` varchar(300) NOT NULL,
  `co_mp` varchar(300) NOT NULL,
  `concern` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concern`
--

INSERT INTO `concern` (`co_id`, `username`, `co_mp`, `concern`, `description`, `status`) VALUES
(1, 'nikhi@ddjk.com', 'Amazon', 'listing', 'product is faulty', 'no'),
(2, 'kusharg@gmail.com', 'Amazon', 'listing', 'product is not working', 'yes'),
(3, 'nikhi@ddjk.com', 'flipkart', 'images', 'images are not good', 'yes'),
(4, 'kusharg@gmail.com', 'snapdeal', 'images', 'images are not in hd', 'yes'),
(5, 'kusharg@gmail.com', 'ebay', 'shipping', 'shippinf is too costly', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `mp`
--

CREATE TABLE `mp` (
  `userid` varchar(40) NOT NULL,
  `marketPlace` varchar(500) NOT NULL,
  `orders` varchar(300) NOT NULL,
  `amount` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mp`
--

INSERT INTO `mp` (`userid`, `marketPlace`, `orders`, `amount`) VALUES
('nikhi@ddjk.com ', 'Amazon', '32', '57700.73'),
('nikhi@ddjk.com ', 'Flipkart', '10', '12370.1'),
('nikhi@ddjk.com ', 'PayTM', '1', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `userid` varchar(40) NOT NULL,
  `dates` varchar(60) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`userid`, `dates`, `amount`) VALUES
('nikhi@ddjk.com', '01/09/18', '6128.3'),
('nikhi@ddjk.com', '04/09/18', '7045.7'),
('nikhi@ddjk.com', '05/09/18', '2823'),
('nikhi@ddjk.com', '06/09/18', '22843.6'),
('nikhi@ddjk.com', '07/09/18', '941'),
('nikhi@ddjk.com', '08/09/18', '4310.03'),
('nikhi@ddjk.com', '11/09/18', '10809.7'),
('nikhi@ddjk.com', '25/09/18', '2799.4');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `userid` varchar(40) NOT NULL,
  `states` varchar(30) NOT NULL,
  `orders` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`userid`, `states`, `orders`) VALUES
('nikhi@ddjk.com', 'AP', 3),
('nikhi@ddjk.com', 'CG', 1),
('nikhi@ddjk.com', 'GJ', 1),
('nikhi@ddjk.com', 'JK', 1),
('nikhi@ddjk.com', 'MH', 4),
('nikhi@ddjk.com', 'RJ', 1),
('nikhi@ddjk.com', 'TN', 2),
('nikhi@ddjk.com', 'TS', 1),
('nikhi@ddjk.com', 'UP', 1),
('nikhi@ddjk.com', 'WB', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `userid` varchar(100) NOT NULL,
  `transaction` varchar(200) NOT NULL,
  `amount` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`userid`, `transaction`, `amount`) VALUES
('nikhi@ddjk.com ', 'Order', '5250.68'),
('nikhi@ddjk.com ', 'Shipping Services', '1394.76'),
('nikhi@ddjk.com ', 'Transfer', '1909.39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cid` int(20) NOT NULL,
  `cname` varchar(300) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cid`, `cname`, `username`, `password`, `role`) VALUES
(1, 'Inocorp ', 'nikhi@ddjk.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(2, '', 'kusharg@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(3, 'Ola', 'ola@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(4, 'Raghvendra', 'raghu@gmail.com', '425b961f5750da865d28782a7e15258c', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concern`
--
ALTER TABLE `concern`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cid`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concern`
--
ALTER TABLE `concern`
  MODIFY `co_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
