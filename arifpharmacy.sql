-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 03:28 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arifpharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_company`
--

CREATE TABLE `tb_company` (
  `company_invoice_id` int(10) NOT NULL,
  `company_name` varchar(15) NOT NULL,
  `company_phone_no` varchar(15) NOT NULL,
  `company_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_company`
--

INSERT INTO `tb_company` (`company_invoice_id`, `company_name`, `company_phone_no`, `company_address`) VALUES
(121, 'Nirob', '1773611681', 'Uttara'),
(133, 'Akash Pharmacy', '1828432875', 'Sector-10, Uttara,Dhaka-1230'),
(154, 'Arafat Pharmacy', '1748534633', 'Dhaka'),
(3098, 'Arif', '0178658976', 'Kamar Para');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(15) NOT NULL,
  `customer_phone_no` varchar(15) NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`customer_id`, `customer_name`, `customer_phone_no`, `customer_address`) VALUES
(345, 'Akash', '1382874623', 'Dkaha'),
(1134, 'ADD', '01773611681', 'uttara'),
(1135, 'Ariful Islam', '01773611681', 'Dhaka'),
(1136, 'Ariful Islam', '01773611681', 'Dhaka'),
(1137, 'Ariful Islam', '01773611681', 'Dhaka'),
(1138, 'Ariful Islam', '02887278', 'dhaka'),
(1139, 'Arif', '01773611681', 'Dhaka'),
(1140, 'Arif', '01773611681', 'Dhaka'),
(1141, 'Arif', '01773611681', 'Dhaka'),
(1142, 'Arif', '01773611681', 'Dhaka'),
(1143, 'Ariful islam', '01773611681', 'Dhaka'),
(1144, 'Ariful islam', '01773611681', 'Dhaka'),
(1145, 'Ariful islam', '01773611681', 'Dhaka'),
(1146, 'Ariful islam', '01773611681', 'Dhaka'),
(1147, 'Ariful islam', '01773611681', 'Dhaka'),
(1148, 'Ariful islam', '01773611681', 'Dhaka'),
(1149, 'Ariful islam', '01773611681', 'Dhaka'),
(1150, 'Ariful islam', '01773611681', 'Dhaka'),
(1151, 'Ariful islam', '01773611681', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `tb_drug`
--

CREATE TABLE `tb_drug` (
  `drug_id` int(10) NOT NULL,
  `drug_name` varchar(15) NOT NULL,
  `drug_category` varchar(15) NOT NULL,
  `drug_company` varchar(20) NOT NULL,
  `drug_desp` text NOT NULL,
  `drug_qty` int(10) NOT NULL,
  `drug_cost` varchar(30) NOT NULL,
  `discount` int(10) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_drug`
--

INSERT INTO `tb_drug` (`drug_id`, `drug_name`, `drug_category`, `drug_company`, `drug_desp`, `drug_qty`, `drug_cost`, `discount`, `amount`) VALUES
(23, 'Napa Extra', 'Tablet', 'Square', 'Fever', 0, '2', 0, ''),
(122, 'Sinamin', 'Tablet', 'Square', 'used for cough', 10, '100', 0, ''),
(123, 'Histasin', 'Tablet', 'Square', 'Used for Sordi, Cough', 10, '100', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_manager`
--

CREATE TABLE `tb_manager` (
  `manager_id` int(10) NOT NULL,
  `manager_name` varchar(15) NOT NULL,
  `manager_phone_no` varchar(15) NOT NULL,
  `manager_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_manager`
--

INSERT INTO `tb_manager` (`manager_id`, `manager_name`, `manager_phone_no`, `manager_address`) VALUES
(1, 'Akram', '1773611681', 'Kamar Para,Uttara,Dhaka'),
(2, 'Abey', '1111111111111', 'Uttara,'),
(3, 'Mostafa', '2147483647', ' Dhaka'),
(11, 'Arif', '1777777757', 'Uttara'),
(1111, 'Fariha', '17737333', 'Uttara');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `payment_id` int(10) NOT NULL,
  `payment_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`payment_id`, `payment_name`) VALUES
(11, 'Dutch Bangla Credit Card'),
(344, 'Brack Bank Credit Card'),
(2323, 'Cash ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stock`
--

CREATE TABLE `tb_stock` (
  `stock_id` int(10) NOT NULL,
  `stock_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_stock`
--

INSERT INTO `tb_stock` (`stock_id`, `stock_status`) VALUES
(121, 'Not Available'),
(162646, 'Not Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_company`
--
ALTER TABLE `tb_company`
  ADD PRIMARY KEY (`company_invoice_id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tb_drug`
--
ALTER TABLE `tb_drug`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `tb_manager`
--
ALTER TABLE `tb_manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tb_stock`
--
ALTER TABLE `tb_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1152;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
