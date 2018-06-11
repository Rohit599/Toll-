-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 09:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toll`
--

-- --------------------------------------------------------

--
-- Table structure for table `one_time_user`
--

CREATE TABLE `one_time_user` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `To_city` varchar(255) NOT NULL,
  `From_city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `one_time_user`
--

INSERT INTO `one_time_user` (`id`, `rid`, `uid`, `To_city`, `From_city`) VALUES
(23, 0, 0, 'Lucknow', 'Lucknow'),
(24, 0, 0, 'Varansi', 'Jaunpur'),
(25, 0, 0, 'Varansi', 'Jaunpur'),
(26, 0, 0, 'Varansi', 'Lucknow'),
(27, 0, 0, 'Varansi', 'Allahabad'),
(28, 2, 27, 'Lucknow', 'Allahabad'),
(29, 2, 27, 'Varansi', 'Lucknow'),
(30, 2, 27, 'Jaunpur', 'Varansi'),
(31, 2, 27, 'Lucknow', 'Varansi'),
(32, 2, 27, 'Lucknow', 'Varansi'),
(33, 2, 27, 'Lucknow', 'Varansi');

-- --------------------------------------------------------

--
-- Table structure for table `rto`
--

CREATE TABLE `rto` (
  `id` int(11) NOT NULL,
  `Customer Name` varchar(14) DEFAULT NULL,
  `adhaar` varchar(14) DEFAULT NULL,
  `Address` varchar(46) DEFAULT NULL,
  `Phone Number` varchar(12) DEFAULT NULL,
  `date_of_birth` varchar(10) DEFAULT NULL,
  `vehicle_no` varchar(13) DEFAULT NULL,
  `vehicle_type` varchar(5) DEFAULT NULL,
  `government_official` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rto`
--

INSERT INTO `rto` (`id`, `Customer Name`, `adhaar`, `Address`, `Phone Number`, `date_of_birth`, `vehicle_no`, `vehicle_type`, `government_official`) VALUES
(1, 'Anuj Kapoor', '111111111111', 'D-2/108, Vinay Khand, Gomtinagar, Lucknow', '909 597 2343', '18-10-1986', 'MH 12 DE 1433', 'Truck', 'No'),
(2, 'Darshan Chopra', '8956 6787 2343', '20/12, C block, Sector 12, Noida', '890 456 2345', '14-02-1988', 'MH 01 AE 8017', 'Car', 'No'),
(3, 'Eesha Tripathi', '7889 2378 9001', '41, Faizabad Road, Faizabad', '898 678 1234', '28-01-1984', 'TN 45 BK 9199', 'Car', 'No'),
(4, 'Farah Rai', '2390 8910 6722', '20/18, LDA colony, Flat no. 12, Varanasi', '113 783 8939', '19-03-1990', 'KA 03 MG 2784', 'Car', 'No'),
(5, 'Harshita Singh', '2989 4056 1200', '11/15, Premjyoti Rambaug-5, Assam', '984 567 7893', '29-02-1987', 'TN 37 CS 2765', 'Car', 'Yes'),
(6, 'Kunal Singh', '3478 1290 2311', '31/2 Firingi Danga Road, Serampore-3, Calcutta', '235 145 6721', '23-05-1988', 'KA 09 MA 2662', 'Truck', 'No'),
(7, 'Mahi Vaish', '9967 2387 1299', 'House no. 7, Ulubari, lachit nagar, Kosi', '576 823 8834', '18-06-1984', 'UP 32 LA 2334', 'Car', 'No'),
(8, 'Priya Raj', '1203 3409 1678', '22/9, F block, Sector 9, Malahari Road,Agra ', '134 785 2345', '12/9/1985', 'AB 44 MS 8887', 'Car', 'Yes'),
(9, 'Shivangi Jain', '4562 8791 1297', '89/1, D block, Kala Marg,  Moradabad', '889 565 7783', '12/8/1985', 'CC 01 AA 0001', 'Car', 'No'),
(10, 'utkarsh', '123412341234', 'jss', '7042250761', '10-08-1997', 'up7802', 'Car', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(200) NOT NULL,
  `vehcileno` varchar(200) NOT NULL,
  `vehciletype` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adhar` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `government_official` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'nyd'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `rid`, `username`, `email`, `phone`, `vehcileno`, `vehciletype`, `address`, `password`, `adhar`, `trn_date`, `government_official`, `user_type`) VALUES
(27, 2, 'ishika', 'eshicagupta3@gmail.com', 2147483647, 'MH 01 AE 8017', 'Car', 'dfghjk', '064d6f413fb035c56c9fd1aad577779e', '8956 6787 2343', '2018-05-29 19:49:54', 'No', 'f'),
(28, 5, 'divya', 'eshicagupta3@gmail.com', 456789, 'TN 37 CS 2765', 'Car', 'gjdfghjk', '064d6f413fb035c56c9fd1aad577779e', '2989 4056 1200', '2018-05-31 21:02:24', 'Yes', 'nyd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `one_time_user`
--
ALTER TABLE `one_time_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rto`
--
ALTER TABLE `rto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `one_time_user`
--
ALTER TABLE `one_time_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `rto`
--
ALTER TABLE `rto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
