-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 12:02 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mktest`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `StuffID` int(11) DEFAULT NULL,
  `Date_out` date DEFAULT NULL,
  `Bill_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`StuffID`, `Date_out`, `Bill_ID`) VALUES
(3, '2018-04-10', 1),
(29, '0000-00-00', 2),
(29, '0000-00-00', 3),
(29, '0000-00-00', 4),
(28, '0000-00-00', 5),
(28, '0000-00-00', 6),
(27, '0000-00-00', 7),
(27, '0000-00-00', 8),
(27, '0000-00-00', 9),
(27, '0000-00-00', 10),
(27, '0000-00-00', 11),
(27, '0000-00-00', 12),
(27, '0000-00-00', 13),
(27, '0000-00-00', 14),
(27, '0000-00-00', 15),
(27, '0000-00-00', 16),
(27, '0000-00-00', 17),
(27, '0000-00-00', 18),
(27, '0000-00-00', 19),
(27, '0000-00-00', 20),
(27, '0000-00-00', 21),
(27, '0000-00-00', 22),
(27, '0000-00-00', 23),
(27, '0000-00-00', 24),
(27, '0000-00-00', 25),
(27, '0000-00-00', 26),
(27, '0000-00-00', 27),
(27, '0000-00-00', 28),
(6, '0000-00-00', 29),
(6, '0000-00-00', 30),
(6, '0000-00-00', 31),
(27, '0000-00-00', 32),
(27, '0000-00-00', 33),
(27, '0000-00-00', 34),
(27, '0000-00-00', 35),
(27, '0000-00-00', 36),
(27, '0000-00-00', 37),
(27, '0000-00-00', 38),
(27, '0000-00-00', 39),
(27, '0000-00-00', 40),
(27, '0000-00-00', 41),
(27, '0000-00-00', 42),
(27, '0000-00-00', 43),
(27, '0000-00-00', 44),
(27, '0000-00-00', 45),
(27, '0000-00-00', 46),
(27, '0000-00-00', 47),
(27, '0000-00-00', 48),
(6, '0000-00-00', 49),
(6, '0000-00-00', 50),
(6, '0000-00-00', 51),
(6, '0000-00-00', 52),
(6, '0000-00-00', 53),
(6, '0000-00-00', 54),
(6, '0000-00-00', 55),
(6, '0000-00-00', 56),
(27, '0000-00-00', 57);

-- --------------------------------------------------------

--
-- Table structure for table `catigiorise`
--

CREATE TABLE `catigiorise` (
  `Name` varchar(255) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catigiorise`
--

INSERT INTO `catigiorise` (`Name`, `ID`) VALUES
('milks123', 4),
('chickens', 5),
('meet', 6),
('vegetabels', 7);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Product_ID` int(11) DEFAULT NULL,
  `Order_ID` int(11) DEFAULT NULL,
  `Item_Name` varchar(255) DEFAULT NULL,
  `item_number` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Product_ID`, `Order_ID`, `Item_Name`, `item_number`, `item_price`) VALUES
(32, 7, 'pro1', 2, 10659),
(33, 25, 'jjhjhaa', 20, 123),
(33, 25, 'jjhjhaa', 20, 123),
(33, 25, 'jjhjhaa', 20, 123),
(33, 25, 'jjhjhaa', 20, 123),
(33, 25, 'jjhjhaa', 20, 123),
(32, 25, 'pro1', 1, 10659),
(32, 25, 'pro1', 1, 10659),
(32, 25, 'pro1', 50, 10659),
(32, 25, 'pro1', 50, 10659),
(32, 25, 'pro1', 50, 10659),
(32, 25, 'pro1', 1, 10659),
(32, 26, 'pro1', 28, 10659),
(32, 26, 'pro1', 28, 10659),
(32, 26, 'pro1', 28, 10659),
(32, 27, 'pro1', 1, 10659),
(32, 33, 'pro1', 50, 10659),
(32, 34, 'pro1', 50, 10659),
(32, 35, 'pro1', 50, 10659),
(32, 35, 'pro1', 40, 10659);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `Stuff_ID` int(11) DEFAULT NULL,
  `total_order` varchar(255) DEFAULT NULL,
  `Date` date NOT NULL,
  `Bill_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `Stuff_ID`, `total_order`, `Date`, `Bill_ID`) VALUES
(1, 3, '250', '2018-04-09', 1),
(3, NULL, '11110', '0000-00-00', 3),
(4, NULL, '11110', '0000-00-00', 4),
(5, NULL, '12221', '0000-00-00', 5),
(6, NULL, '2222', '0000-00-00', 6),
(7, NULL, '25000', '0000-00-00', 7),
(8, 27, '21318', '0000-00-00', 11),
(9, 27, '0', '0000-00-00', 12),
(10, 27, '0', '0000-00-00', 13),
(11, 27, '0', '0000-00-00', 14),
(12, 27, '0', '0000-00-00', 15),
(13, 27, '0', '0000-00-00', 16),
(14, 27, '0', '0000-00-00', 17),
(15, 27, '0', '0000-00-00', 18),
(16, 27, '0', '0000-00-00', 19),
(17, 27, '0', '0000-00-00', 20),
(18, 27, '0', '0000-00-00', 21),
(19, 27, '0', '0000-00-00', 22),
(20, 27, '0', '0000-00-00', 23),
(21, 27, '0', '0000-00-00', 24),
(22, 27, '0', '0000-00-00', 25),
(23, 27, '0', '0000-00-00', 26),
(24, 27, '0', '0000-00-00', 27),
(25, 27, '0', '0000-00-00', 28),
(26, 27, '1076559', '0000-00-00', 47),
(27, 27, '852720', '0000-00-00', 48),
(28, 6, '10659', '0000-00-00', 49),
(29, 6, '0', '0000-00-00', 50),
(30, 6, '0', '0000-00-00', 51),
(31, 6, '0', '0000-00-00', 52),
(32, 6, '0', '0000-00-00', 53),
(33, 6, '0', '0000-00-00', 54),
(34, 6, '532950', '0000-00-00', 55),
(35, 6, '532950', '0000-00-00', 56),
(36, 27, '959310', '0000-00-00', 57);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Name` varchar(255) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `Amount` varchar(255) DEFAULT NULL,
  `CatigioriseID` int(11) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `Offer` varchar(255) DEFAULT NULL,
  `ProductImage` varchar(255) DEFAULT NULL,
  `ExpireDate` date DEFAULT NULL,
  `ProductDate` date DEFAULT NULL,
  `Describtion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Name`, `ID`, `Amount`, `CatigioriseID`, `Price`, `Offer`, `ProductImage`, `ExpireDate`, `ProductDate`, `Describtion`) VALUES
('pro1', 32, '281', 4, '10659', '', '', '2018-01-01', '2018-01-01', 'kjlk'),
('jjhjhaa', 33, '800', 4, '123', '123', '6687_[.PNG', '2018-01-01', '2018-01-01', 'jhjhjhghggh'),
('veta', 34, '50', 4, '50', '0', '8212_788_download.jpg', '2018-01-01', '2017-01-20', 'veta plus'),
('fresh meet', 35, '56', 6, '50', '0', '1359_788_download.jpg', '2018-01-01', '2017-01-20', 'fresh meet'),
('fresh chickens', 36, '70', 5, '45', '0', '4695_c2.jpg', '2018-01-01', '2017-01-20', 'fresh chekens'),
('milk', 37, '5', 4, '10', '0', '2729_c2.jpg', '2018-01-01', '2018-01-01', 'be5ro milk'),
('tomato', 38, '10', 7, '10', '0', '4442_c2.jpg', '2018-01-01', '2018-12-30', 'expired tomato');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ID` int(11) NOT NULL,
  `Describtion` text,
  `Date` date DEFAULT NULL,
  `type` varchar(255) DEFAULT 'fast cashier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `Describtion`, `Date`, `type`) VALUES
(59, 'saas', '2018-04-09', 'fast cashier'),
(66, 'iiif', '2018-04-09', 'fast cashier'),
(67, 'mostafa', '2018-04-02', 'list cashier orders');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Fullname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `Regestration` date DEFAULT NULL,
  `BirthData` date DEFAULT NULL,
  `UserImage` varchar(255) DEFAULT NULL,
  `WorkHours` int(11) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Address` text NOT NULL,
  `Phone` int(13) NOT NULL,
  `GroupID` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Fullname`, `Email`, `salary`, `Regestration`, `BirthData`, `UserImage`, `WorkHours`, `Age`, `Address`, `Phone`, `GroupID`) VALUES
(1, 'maieid', 'mai', 'mai', 'mai@yahoo.com', '12.36', '2018-04-11', '2018-04-26', '407_p5.png', 25, 12, 'school', 0, 1),
(3, 'samy', '123', 'samy Ali', 'samy@', '12', '2018-04-09', '0000-00-00', '407_p5.png', 0, 0, 'mmary', 0, 1),
(6, 'manar', '123', '', 'a', '2', '2018-04-09', '0000-00-00', 'k', 4, 0, '', 0, 2),
(14, 'menna', 'kdcj', 'Menna ahmed mohammed', 'menna@yahoo.com', '12365', '2018-04-26', '0000-00-00', '407_p5.png', 0, NULL, '', 0, 1),
(27, 'Amin', '123', '', 'Amin549@yahoo.com', '1200', '2018-04-19', '2018-01-01', '8819_p6.png', 544, 0, 'sshholl', 0, 3),
(28, 'mostafa', '123', 'mostafa mahmoud', 'mostafa300mmm@gmail.com', '1110', NULL, NULL, NULL, NULL, NULL, '', 0, 3),
(29, 'admin', '123', 'mostafa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1),
(35, 'karim hamdy', '123', 'karim hamdy', 'karimz19299@gmail.com', '2000', '2018-04-26', '1998-03-30', '6513_p1.png', 8, 20, '3 street al warraq', 1278047614, 3),
(37, 'mohamed', '123', 'mohamed ahmed', 'karimz19299@gmail.com', '2000', '2018-04-26', '1999-01-19', '5715_p2.png', 8, 19, '3 street', 12345678, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_ID`),
  ADD KEY `StuffID` (`StuffID`);

--
-- Indexes for table `catigiorise`
--
ALTER TABLE `catigiorise`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `Order_ID` (`Order_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Stuff_ID` (`Stuff_ID`),
  ADD KEY `Bill_ID` (`Bill_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Catig_ID` (`CatigioriseID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Bill_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `catigiorise`
--
ALTER TABLE `catigiorise`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `Bill_ibfk_1` FOREIGN KEY (`StuffID`) REFERENCES `users` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`Order_ID`) REFERENCES `orders` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Stuff_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Bill_ID`) REFERENCES `bill` (`Bill_ID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Products_ibfk_1` FOREIGN KEY (`CatigioriseID`) REFERENCES `catigiorise` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
