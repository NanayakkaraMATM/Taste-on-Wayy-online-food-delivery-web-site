-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 10:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwtproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactUs_No` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(10) NOT NULL,
  `Feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactUs_No`, `Name`, `Email`, `Subject`, `Feedback`) VALUES
(14, '', '', '', ''),
(15, 'oshidhie', 'aaaa', '', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `customerreg`
--

CREATE TABLE `customerreg` (
  `Title` varchar(5) NOT NULL,
  `First_Name` varchar(12) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Postal_Code` int(8) NOT NULL,
  `Contact_No_Country_Code` varchar(5) NOT NULL,
  `Contact_No` int(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `NIC_No` varchar(13) NOT NULL,
  `Birthday` date NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Re_Enter_Password` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerreg`
--

INSERT INTO `customerreg` (`Title`, `First_Name`, `Last_Name`, `Address`, `Country`, `Postal_Code`, `Contact_No_Country_Code`, `Contact_No`, `Email`, `NIC_No`, `Birthday`, `Password`, `Re_Enter_Password`) VALUES
('madam', 'Oshidhie', 'Peiris', 'Malwatta Road', 'Sri Lanka', 10350, '+94', 771414181, 'oshidhie@gmail.com', '200057200430', '2000-03-12', 'qwe123', 'qwe123');

-- --------------------------------------------------------

--
-- Table structure for table `driverreg`
--

CREATE TABLE `driverreg` (
  `Title` varchar(5) NOT NULL,
  `First_Name` varchar(12) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Country` varchar(15) NOT NULL,
  `Postal_Code` varchar(7) NOT NULL,
  `Contact_No_Country_Code` varchar(5) NOT NULL,
  `Contact_No` int(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `NIC_No` varchar(13) NOT NULL,
  `License_No` varchar(20) NOT NULL,
  `Licence_Exp` date NOT NULL,
  `Vehicle_Type` varchar(10) NOT NULL,
  `Vehicle_No` varchar(11) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Re_Enter_Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `Order_ID` int(11) NOT NULL,
  `Item_Name` varchar(100) COLLATE utf8_bin NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`Order_ID`, `Item_Name`, `Quantity`, `Total`) VALUES
(4, 'Cheesy Vege Pizza', 3, 5280),
(5, 'Grilled Cheese Burger', 3, 1560);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Name_On_Card` varchar(20) NOT NULL,
  `Card_No` int(11) NOT NULL,
  `Exp_Month` varchar(10) NOT NULL,
  `Exp_Year` int(11) NOT NULL,
  `Cvv` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Name_On_Card`, `Card_No`, `Exp_Month`, `Exp_Year`, `Cvv`, `Email`) VALUES
('', 0, '', 0, 0, ''),
('Oshidhie', 11112222, 'March', 2020, 123, 'oshidhie@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `promotionmail`
--

CREATE TABLE `promotionmail` (
  `Subscribed_Mail` varchar(100) NOT NULL,
  `No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `ID` int(11) NOT NULL,
  `Stars` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FeedbackText` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`ID`, `Stars`, `Name`, `FeedbackText`) VALUES
(19, 0, '', ''),
(21, 3, 'Kamal', 'Good'),
(22, 5, 'Priyanga', 'Very good quality Food');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantreg`
--

CREATE TABLE `restaurantreg` (
  `Restaurant_Name` varchar(20) NOT NULL,
  `Restaurant_Address` varchar(100) NOT NULL,
  `Floor_Suite` varchar(3) NOT NULL,
  `First_Name` varchar(10) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Mobile_Country_Code` varchar(5) NOT NULL,
  `Mobile_Number` int(10) NOT NULL,
  `Email_Address` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm_Password` varchar(20) NOT NULL,
  `Number_Of_Locations` varchar(40) NOT NULL,
  `Type_Of_Cuisine` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `special_msg`
--

CREATE TABLE `special_msg` (
  `id` int(11) NOT NULL,
  `special_text` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactUs_No`);

--
-- Indexes for table `customerreg`
--
ALTER TABLE `customerreg`
  ADD PRIMARY KEY (`NIC_No`);

--
-- Indexes for table `driverreg`
--
ALTER TABLE `driverreg`
  ADD PRIMARY KEY (`Vehicle_No`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Card_No`);

--
-- Indexes for table `promotionmail`
--
ALTER TABLE `promotionmail`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `restaurantreg`
--
ALTER TABLE `restaurantreg`
  ADD PRIMARY KEY (`Email_Address`);

--
-- Indexes for table `special_msg`
--
ALTER TABLE `special_msg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactUs_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promotionmail`
--
ALTER TABLE `promotionmail`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `special_msg`
--
ALTER TABLE `special_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
