-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 05:03 PM
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
  `Booking_date` date NOT NULL,
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
  `Guide` varchar(100) NOT NULL,
  `Rider` varchar(100) NOT NULL,
  `Ontime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_ID`, `Orderer_name`, `Orderer_ID`, `Booking_date`, `Booking_time`, `Adult`, `Child`, `package`, `Location`, `Address`, `Contact_no`, `Email`, `Meals`, `Adult_cost`, `Child_cost`, `Meal_cost`, `Total_cost`, `Guide`, `Rider`, `Ontime`) VALUES
(22, 'kumara', '68769', '2021-09-15', '4 pm - 6 pm', 2, 2, '10up', 'Madu', '27-D', '0711438249', 'bandu@gmail.com', 'Yes', '1000.00', '700.00', '600.00', '2300.00', 'weerasinghe', '', ''),
(23, 'Amara', '199802310093', '2021-09-30', '4 pm - 6 pm', 2, 2, '10up', 'Madu', 'Colombo -08', '0752419739', 'Lahirupramod41@gmail.com', 'Yes', '1000.00', '700.00', '600.00', '2300.00', 'R.Damith ', '', ''),
(27, 'Lahiru', '76231874', '2021-10-07', '10am - 12 am', 4, 4, 'normal', 'Madu', 'colombo', '071547298', 'bandu@gmail.com', 'Yes', '2000.00', '1400.00', '1200.00', '4600.00', 'N.K.Kumarasiri', '', ''),
(28, 'Lahiru', '199802310093', '2021-10-19', '8 am - 10 am', 2, 2, 'normal', 'Madu', '27-D', '0914532871', 'yugnu@gmail.com', 'Yes', '2000.00', '600.00', '1080.00', '3680.00', 'N.K.Kumarasiri', '', '2021-10-19'),
(29, 'damith', '199802310093', '2021-10-19', '10am - 12 am', 3, 3, 'normal', 'Madu', '27-D', '0914532871', 'yugnu@gmail.com', 'Yes', '3000.00', '900.00', '1620.00', '5520.00', 'N.K.Kumarasiri', '', '2021-10-19'),
(31, 'Lahiru', '987659869', '2022-02-08', '8 am - 10 am', 3, 2, '10up', 'Madu', 'etuyuuiy', '75676969', 'chamoddisala41@gamil.com', 'Yes', '1500.00', '700.00', '750.00', '2950.00', 'N.K.Kumarasiri', '', '2022-02-08'),
(32, 'giuhyih', 'iuhyuhyi', '2022-02-27', '10am - 12 am', 2, 2, 'normal', 'Madu', 'g7uu7huhu', '0711438249', 'chamoddisala41@gamil.com', 'No', '2400.00', '600.00', '', '3000.00', 'N.K.Kumarasiri', 'N.Y.K Yasiru', '2022-02-27'),
(33, 'Lahiru', '769870987', '2022-02-27', '4 pm - 6 pm', 2, 2, 'normal', 'Madu', 'gjgg', '689689', 'jagath@gmail.com', 'No', '2400.00', '600.00', '', '3000.00', 'R.Damith ', 'N.Y.K Yasiru', '2022-02-27');

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
  `Total_cost` varchar(60) NOT NULL,
  `Ontime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bill_ID`, `Orderer_name`, `Orderer_ID`, `Booking_date`, `Booking_time`, `Adult`, `Child`, `package`, `Location`, `Address`, `Contact_no`, `Email`, `Meals`, `Adult_cost`, `Child_cost`, `Meal_cost`, `Total_cost`, `Ontime`) VALUES
(18, 'Lahiru', '199802310093', '2021-09-23', '10am - 12 am', 3, 2, '10up', 'Madu', '27-D', '0711438249', 'Admin123@gmail.com', 'Yes', '1500.00', '700.00', '750.00', '2950.00', ''),
(21, 'Anura', '9870986', '2021-09-30', '10am - 12 am', 1, 1, '10up', 'Madu', '27-D', '0914532871', 'yugnu@gmail.com', 'Yes', '500.00', '350.00', '300.00', '1150.00', ''),
(22, 'Thumidu', '199802310093', '2021-09-23', '8 am - 10 am', 3, 2, 'normal', 'Madu', 'Ampara', '0711438249', 'kuu@gmail.com', 'Yes', '2400.00', '600.00', '1350.00', '4350.00', ''),
(23, 'Lahiru', '76231874', '2021-10-07', '10am - 12 am', 4, 2, 'normal', 'Madu', 'colombo', '071547298', 'bandu@gmail.com', 'Yes', '3200.00', '600.00', '1620.00', '5420.00', ''),
(24, 'Jagath', '0985976v', '2021-10-20', '2 pm - 4 pm', 3, 3, 'normal', 'Madu', 'Aluthgama 03', '071986309', 'jagath@gmail.com', 'No', '2700.00', '900.00', '', '3600.00', '2021-10-10'),
(25, 'Jagath', '0985976v', '2021-10-20', '2 pm - 4 pm', 3, 3, 'normal', 'Madu', 'Aluthgama 03', '071986309', 'jagath@gmail.com', 'No', '2700.00', '900.00', '', '3600.00', '2021-10-10'),
(26, 'Lahiru', '199802310093', '2021-10-13', '10am - 12 am', 2, 2, '20up', 'Madu', '27-D', '0711438249', 'Manager@gmail.com', 'Yes', '900.00', '500.00', '560.00', '1960.00', '2021-10-13'),
(27, 'kumara', '68769', '2021-10-23', '4 pm - 6 pm', 2, 2, 'normal', 'Madu', '27-D', '0914532871', 'yugnu@gmail.com', 'No', '1800.00', '600.00', '', '2400.00', '2021-10-13'),
(28, 'ygyu8h', '5478329 v', '2021-10-13', '10am - 12 am', 2, 2, 'normal', 'Madu', '27-D', '0752419739', 'yugnu@gmail.com', 'Yes', '1800.00', '600.00', '1080.00', '3480.00', '2021-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(100) NOT NULL,
  `EmNIC` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `JobDate` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Birthdate` varchar(100) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Gender` text NOT NULL,
  `PositionDescribe` varchar(100) NOT NULL,
  `Qualifications` varchar(200) NOT NULL,
  `JobLocation` varchar(50) NOT NULL,
  `Quace` varchar(25) NOT NULL,
  `Medice` varchar(25) NOT NULL,
  `Charce` varchar(25) NOT NULL,
  `Bankaccount` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `EmNIC`, `Name`, `Position`, `JobDate`, `Address`, `Contact`, `Birthdate`, `Picture`, `Gender`, `PositionDescribe`, `Qualifications`, `JobLocation`, `Quace`, `Medice`, `Charce`, `Bankaccount`) VALUES
(1, '1706543v', 'N.K.Kumarasiri', 'Guide', '2021-05-08', 'Balapitiya', '773214378', '1966-07-05', '', '', '', '', '', '', '', '', ''),
(2, '160438v', 'R.Damith ', 'Guide', '2020-05-18', 'Galle', '091235628', '1976-08-21', '', '', '', '', '', '', '', '', ''),
(15, '18353464v', 'N.Y.K Yasiru', 'Boat Rider', '2022-02-27', 'balapitiya', '0773134373', '', 'aliya.JPG', 'male', 'not', 'fuygfiuhgohohui', 'Balapitiya Safari', 'OK', 'OK', 'OK', '90'),
(16, '19837658v', 'lahiru pramod', 'Guide', '2022-02-28', 'galle', '0772354565', '', 'WhatsApp Image 2022-02-28 at 2.14.37 PM.jpeg', 'male', 'good', 'good english knowledge', 'Balapitiya Safari', 'OK', 'OK', 'OK', '90865678');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expenseID` int(11) NOT NULL,
  `expenseName` varchar(200) NOT NULL,
  `expensetype` varchar(100) NOT NULL,
  `refno` varchar(200) NOT NULL,
  `expensevalue` varchar(100) NOT NULL,
  `expensedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expenseID`, `expenseName`, `expensetype`, `refno`, `expensevalue`, `expensedate`) VALUES
(1, 'oil', 'Fuels', '8698899', '8700', '2022-02-27');

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
-- Table structure for table `paymentpre`
--

CREATE TABLE `paymentpre` (
  `preID` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `presentage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentpre`
--

INSERT INTO `paymentpre` (`preID`, `position`, `presentage`) VALUES
(1, 'guide', '20'),
(2, 'boatrider', '10');

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
(1, '1200', '300', '270'),
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
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenseID`);

--
-- Indexes for table `paymentpre`
--
ALTER TABLE `paymentpre`
  ADD PRIMARY KEY (`preID`);

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
  MODIFY `bill_ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bill_ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paymentpre`
--
ALTER TABLE `paymentpre`
  MODIFY `preID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
