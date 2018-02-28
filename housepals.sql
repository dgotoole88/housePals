-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 03:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housepals`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `billID` int(10) UNSIGNED NOT NULL,
  `billName` varchar(255) NOT NULL,
  `amountDue` int(10) UNSIGNED NOT NULL,
  `dueDate` date NOT NULL,
  `houseID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chatline`
--

CREATE TABLE `chatline` (
  `chatLineID` bigint(20) UNSIGNED NOT NULL,
  `lineText` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `houseChatID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chore`
--

CREATE TABLE `chore` (
  `choreID` int(10) UNSIGNED NOT NULL,
  `choreName` varchar(255) NOT NULL,
  `completed` enum('yes','no') NOT NULL DEFAULT 'no',
  `dateAssigned` date NOT NULL,
  `houseID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `houseID` int(10) UNSIGNED NOT NULL,
  `houseName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iou`
--

CREATE TABLE `iou` (
  `iouID` int(10) UNSIGNED NOT NULL,
  `reason` varchar(255) NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `userOwed` int(10) UNSIGNED NOT NULL,
  `ower` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemlist`
--

CREATE TABLE `itemlist` (
  `itemID` int(10) UNSIGNED NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `quantity` int(99) UNSIGNED NOT NULL DEFAULT '1',
  `listID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginID` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoppinglist`
--

CREATE TABLE `shoppinglist` (
  `listID` int(10) UNSIGNED NOT NULL,
  `listName` varchar(255) NOT NULL,
  `houseID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `loginID` int(10) UNSIGNED NOT NULL,
  `houseID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `whopaid`
--

CREATE TABLE `whopaid` (
  `paidID` int(10) UNSIGNED NOT NULL,
  `paid` enum('yes','no') NOT NULL DEFAULT 'no',
  `userID` int(10) UNSIGNED NOT NULL,
  `billID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`billID`),
  ADD KEY `billsHouseID` (`houseID`);

--
-- Indexes for table `chatline`
--
ALTER TABLE `chatline`
  ADD PRIMARY KEY (`chatLineID`),
  ADD KEY `chatUserID` (`userID`),
  ADD KEY `houseChatID` (`houseChatID`);

--
-- Indexes for table `chore`
--
ALTER TABLE `chore`
  ADD PRIMARY KEY (`choreID`),
  ADD KEY `choreHouseID` (`houseID`),
  ADD KEY `choreUserID` (`userID`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`houseID`);

--
-- Indexes for table `iou`
--
ALTER TABLE `iou`
  ADD PRIMARY KEY (`iouID`),
  ADD KEY `userOwed` (`userOwed`),
  ADD KEY `userOwer` (`ower`);

--
-- Indexes for table `itemlist`
--
ALTER TABLE `itemlist`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `shoppingListID` (`listID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexes for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
  ADD PRIMARY KEY (`listID`),
  ADD KEY `housePalID` (`houseID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `loginID` (`loginID`),
  ADD KEY `houseID` (`houseID`);

--
-- Indexes for table `whopaid`
--
ALTER TABLE `whopaid`
  ADD PRIMARY KEY (`paidID`),
  ADD KEY `groupBillID` (`billID`),
  ADD KEY `userWhoOwes` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `billID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chatline`
--
ALTER TABLE `chatline`
  MODIFY `chatLineID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chore`
--
ALTER TABLE `chore`
  MODIFY `choreID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `houseID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iou`
--
ALTER TABLE `iou`
  MODIFY `iouID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itemlist`
--
ALTER TABLE `itemlist`
  MODIFY `itemID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
  MODIFY `listID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whopaid`
--
ALTER TABLE `whopaid`
  MODIFY `paidID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `billsHouseID` FOREIGN KEY (`houseID`) REFERENCES `house` (`houseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chatline`
--
ALTER TABLE `chatline`
  ADD CONSTRAINT `chatUserID` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `houseChatID` FOREIGN KEY (`houseChatID`) REFERENCES `house` (`houseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chore`
--
ALTER TABLE `chore`
  ADD CONSTRAINT `choreHouseID` FOREIGN KEY (`houseID`) REFERENCES `house` (`houseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `choreUserID` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `iou`
--
ALTER TABLE `iou`
  ADD CONSTRAINT `userOwed` FOREIGN KEY (`userOwed`) REFERENCES `login` (`loginID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userOwer` FOREIGN KEY (`ower`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `itemlist`
--
ALTER TABLE `itemlist`
  ADD CONSTRAINT `shoppingListID` FOREIGN KEY (`listID`) REFERENCES `shoppinglist` (`listID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
  ADD CONSTRAINT `housePalID` FOREIGN KEY (`houseID`) REFERENCES `house` (`houseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `houseID` FOREIGN KEY (`houseID`) REFERENCES `house` (`houseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `loginID` FOREIGN KEY (`loginID`) REFERENCES `login` (`loginID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `whopaid`
--
ALTER TABLE `whopaid`
  ADD CONSTRAINT `groupBillID` FOREIGN KEY (`billID`) REFERENCES `bills` (`billID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userWhoOwes` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
