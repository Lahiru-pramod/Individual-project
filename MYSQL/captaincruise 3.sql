-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 04:28 PM
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
  `package` varchar(100) NOT NULL,
  `Location` varchar(60) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_no` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Meals` varchar(60) NOT NULL,
  `Adult_cost` varchar(60) NOT NULL,
  `Child_cost` varchar(60) NOT NULL,
  `Meal_cost` varchar(60) NOT NULL,
  `Total_cost` varchar(60) NOT NULL,
  `Guide` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_ID`, `Orderer_name`, `Orderer_ID`, `Booking_date`, `Booking_time`, `Adult`, `Child`, `package`, `Location`, `Address`, `Contact_no`, `Email`, `Meals`, `Adult_cost`, `Child_cost`, `Meal_cost`, `Total_cost`, `Guide`) VALUES
(17, 'Lahiru', '199802310093', '2021-10-19', '14:20', 2, 2, 'normal', 'Madu', '27-D, Pathegama', '0711438249', 'Lahirupramod41@gmail.com', 'Yes', '1000.00', '500.00', '1200.00', '2700.00', ''),
(18, 'Lahiru', '199802310093', '2021-09-30', '2-4', 2, 2, 'normal', 'Madu', '27-D,Galle', '0711438249', 'Lahirupramod41@gmail.com', 'Yes', '1000.00', '500.00', '1200.00', '2700.00', ''),
(19, 'D.K. Dharmasiri', '5478329 v', '2021-09-26', '4-6', 10, 4, '10up', 'Madu', 'Colombo -08', '0752419739', 'dharma@gmail.com', 'Yes', '5000.00', '1400.00', '4900.00', '8500.00', 'Damith'),
(20, 'Lahiru', '6879890', '2021-09-16', 'select time...', 2, 2, 'normal', 'Madu', '27-D', '9698890', 'bandu@gmail.com', 'Yes', '1600.00', '600.00', '1080.00', '3280.00', 'choose');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bill_ID` int(40) NOT NULL,
  `Orderer_name` varchar(100) NOT NULL,
  `Orderer_ID` varchar(100) NOT NULL,
  `Booking_date` text NOT NULL,
  `Booking_time` varchar(50) NOT NULL,
  `Adult` int(50) NOT NULL,
  `Child` int(60) NOT NULL,
  `package` varchar(100) NOT NULL,
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
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bill_ID`, `Orderer_name`, `Orderer_ID`, `Booking_date`, `Booking_time`, `Adult`, `Child`, `package`, `Location`, `Address`, `Contact_no`, `Email`, `Meals`, `Adult_cost`, `Child_cost`, `Meal_cost`, `Total_cost`) VALUES
(14, 'ygyu8h', '23918563', '2021-09-02', '2 pm - 4 pm', 2, 2, 'normal', 'Madu', '27-D', '092645765987', 'kuu@gmail.com', 'No', '1600.00', '600.00', '', '2200.00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(100) NOT NULL,
  `EmNIC` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `JobDate` date NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Birthdate` date NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `EmNIC`, `Name`, `Position`, `JobDate`, `Address`, `Contact`, `Birthdate`, `Picture`) VALUES
(1, '1706543v', 'N.K.Kumarasiri', 'Guide', '2021-05-08', 'Balapitiya', '773214378', '1966-07-05', '');

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
(1, '800', '300', '270'),
(2, '500', '350', '150'),
(3, '450', '250', '140'),
(4, '400', '220', '130');

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
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bill_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `bill_ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bill_ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
