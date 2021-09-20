-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 02:44 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `captaincruise`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_ID` int(40) NOT NULL,
  `Orderer_name` varchar(100) NOT NULL,
  `Orderer_ID` varchar(100) NOT NULL,
  `Booking_date` text NOT NULL,
  `Booking_time` varchar(50) NOT NULL,
  `Adult` int(50) NOT NULL,
  `Child` int(60) NOT NULL,
  `Location` varchar(60) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_no` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Meals` varchar(60) NOT NULL,
  `Adult_cost` varchar(60) NOT NULL,
  `Child_cost` varchar(60) NOT NULL,
  `Meal_cost` varchar(60) NOT NULL,
  `Total_cost` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_ID`, `Orderer_name`, `Orderer_ID`, `Booking_date`, `Booking_time`, `Adult`, `Child`, `Location`, `Address`, `Contact_no`, `Email`, `Meals`, `Adult_cost`, `Child_cost`, `Meal_cost`, `Total_cost`) VALUES
(12, 'Lahiru', '6879890', '2021-09-23', '20:43', 2, 2, 'Madu', '27-Djdeyfdtyui', '092645765987', 'Lahirupramod41@gmail.com', 'Yes', '1000.00', '500.00', '1200.00', '2700.00'),
(13, 'Lahiru', '6879890', '2021-09-23', '20:43', 2, 2, 'Madu', '27-Djdeyfdtyui', '092645765987', 'Lahirupramod41@gmail.com', 'Yes', '1000.00', '500.00', '1200.00', '2700.00'),
(14, 'Lahiru', '199802310093', '2021-09-29', '13:45', 2, 2, 'Madu', '27-D', '0711438249', 'Lahirupramod41@gmail.com', 'Yes', '1000.00', '500.00', '1200.00', '2700.00'),
(15, 'Lahiru', '199802310093', '2021-09-29', '13:45', 2, 2, 'Madu', '27-D', '0711438249', 'Lahirupramod41@gmail.com', 'Yes', '1000.00', '500.00', '1200.00', '2700.00'),
(16, 'kumara', '23918563', '2021-09-24', '14:43', 1, 1, 'Madu', '27-D', '0711438249', 'Lahirupramod41@gmail.com', 'Yes', '500.00', '250.00', '600.00', '1350.00');

-- --------------------------------------------------------

--
-- Table structure for table `managerlogin`
--

CREATE TABLE `managerlogin` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managerlogin`
--

INSERT INTO `managerlogin` (`Email`, `Password`) VALUES
('Manager@gmail.com', '28342e8cc628b4366db11a89cbdd07c4b7f7fb78');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `ID` int(11) NOT NULL,
  `Adult` varchar(50) NOT NULL,
  `child` varchar(50) NOT NULL,
  `meal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`ID`, `Adult`, `child`, `meal`) VALUES
(1, '600', '250', '250');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Email`, `Password`) VALUES
(1, 'Admin123@gmail.com', '7af2d10b73ab7cd8f603937f7697cb5fe432c7ff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_ID`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
