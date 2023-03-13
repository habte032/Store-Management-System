-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 11:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `id` int(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Code` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Unit_Price` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Total_price` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id`, `Name`, `Code`, `Category`, `Date`, `Unit_Price`, `Quantity`, `Total_price`, `Type`) VALUES
(1, 'Big Grinder', 'L/B/S/0001', 'Grinder', '2022-08-12', '100 ', 3, '', 'Fixed'),
(2, 'Small Grinder', 'L/B/S/0002', 'Grinder', '2022-08-10', '100 ', 7, '', 'Fixed'),
(3, 'Charger Drill', 'L/B/S/0003', 'Drill', '2022-08-10', '100 ', 6, '', 'Fixed'),
(4, 'Drill', 'L/B/S/0004', 'Drill', '2022-08-10', '100 ', 6, '', 'Fixed'),
(5, 'Concrete Drill', 'L/B/S/0005', 'Drill', '2022-08-10', '100 ', 4, '', 'Fixed'),
(6, 'Rotor', 'L/B/S/0006', 'Other', '2022-08-10', '100 ', 2, '', 'Fixed'),
(7, 'Portable Welding-machine', 'L/B/S/0007', 'WeldingMachine', '2022-08-11', '100 ', 1, '', 'Fixed'),
(8, 'Welding-Machine', 'L/B/S/0008', 'WeldingMachine', '2022-08-11', '100 ', 2, '', 'Fixed'),
(9, 'Aluminum Welding-Machine', 'L/B/S/0009', 'WeldingMachine', '2022-08-11', '250', 1, '', 'Fixed'),
(10, 'Aluminum Cutter', 'L/B/S/0010', 'Other', '2022-08-11', '200', 2, '', 'Fixed'),
(11, 'Wheel Hammer', 'L/B/S/0011', 'Hammer', '2022-08-11', '100 ', 2, '', 'Fixed'),
(12, 'Hammer', 'L/B/S/0012', 'Hammer', '2022-08-12', '150', 6, '', 'Fixed'),
(13, 'Shooter', 'L/B/S/0013', 'Hammer', '2022-08-12', '300', 2, '', 'Fixed'),
(14, 'Foam-Heater', 'L/B/S/0014', 'Other', '2022-08-12', '500 ', 3, '', 'Fixed'),
(15, 'Mica-Folding', 'L/B/S/0015', 'Other', '2022-08-12', '250', 4, '', 'Fixed'),
(16, 'Scissor', 'L/B/S/0016', 'Other', '2022-08-12', '150', 4, '', 'Fixed'),
(17, 'Lead-Welding', 'L/B/S/0017', 'WeldingMachine', '2022-08-12', '500', 2, '', 'Fixed'),
(18, 'Pinsa', 'L/B/S/0018', 'Pinsa', '2022-08-12', '200', 7, '', 'Fixed'),
(19, 'Screwdriver-24', 'L/B/S/0019', 'Screwdriver', '2022-08-12', '250', 6, '', 'Fixed'),
(20, 'Screwdriver-25', 'L/B/S/0020', 'Screwdriver', '2022-08-12', '260', 3, '', 'Fixed'),
(21, 'Screwdriver-13', 'L/B/S/0021', 'Screwdriver', '2022-08-12', '250', 5, '', 'Fixed'),
(22, 'Screwdriver-10', 'L/B/S/0022', 'Screwdriver', '2022-08-12', '150', 3, '', 'Fixed'),
(23, 'Screwdriver-14', 'L/B/S/0023', 'Screwdriver', '2022-08-12', '120', 1, '', 'Fixed'),
(24, 'Screwdriver-16', 'L/B/S/0024', 'Screwdriver', '2022-08-12', '190', 1, '', 'Fixed'),
(25, 'Screwdriver 6/7', 'L/B/S/0025', 'Screwdriver', '2022-08-12', '100', 2, '', 'Fixed'),
(26, 'Screwdriver 9/8', 'L/B/S/0026', 'Screwdriver', '2022-08-12', '100 ', 2, '', 'Fixed'),
(27, 'Screwdriver-Ameica', 'L/B/S/0027', 'Screwdriver', '2022-08-12', '450', 11, '', 'Fixed'),
(28, 'Screwdriver-Flat', 'L/B/S/0028', 'Screwdriver', '2022-08-12', '300', 13, '', 'Fixed'),
(29, 'Mored', 'L/B/S/0029', 'Other', '2022-08-12', '350', 17, '', 'Fixed'),
(30, 'Squadron ', 'L/B/S/0030', 'Other', '2022-08-12', '650', 7, '', 'Fixed'),
(31, 'Morsa-Big', 'L/B/S/0031', 'Morsa', '2022-08-12', '400', 7, '', 'Fixed'),
(32, 'Morsa-Small', 'L/B/S/0032', 'Morsa', '2022-08-12', '400', 4, '', 'Fixed'),
(33, 'LD-Package', 'L/B/S/0032', 'Other', '2022-08-13', '100 ', 1, '', 'Temporary');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`) VALUES
(1, 'user', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Itemname` varchar(100) NOT NULL,
  `Code` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Remark` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `Name`, `Itemname`, `Code`, `Category`, `Date`, `Quantity`, `Remark`, `Status`) VALUES
(1, 'Abebe', 'LD-Package', 'L/B/S/0032', 'Other', '2022-08-13', 1, '', 'Rejected'),
(2, 'Abebe', 'White-Cable', 'L/B/S/0023', 'Other', '2022-08-13', 1, '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `storekeeper`
--

CREATE TABLE `storekeeper` (
  `id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storekeeper`
--

INSERT INTO `storekeeper` (`id`, `username`, `password`) VALUES
(1, 'user', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storekeeper`
--
ALTER TABLE `storekeeper`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `storekeeper`
--
ALTER TABLE `storekeeper`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
