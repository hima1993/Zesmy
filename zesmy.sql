-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 10:01 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zesmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `addressLine` varchar(250) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `postalCode` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `pin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `persontypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name`, `description`, `persontypeId`) VALUES
(1, 'short', 'for men', 1),
(4, 'T-shirts', 'for men', 1),
(5, 'Shirts', 'for men', 1),
(6, 'Jeans', 'for men', 1),
(7, 'Underwear', 'for men', 1),
(8, 'Jackets & Coats', 'for men', 1),
(9, 'Socks', 'for men', 1),
(10, 'Jumpers & Cardigans', 'for men', 1),
(11, 'Trousers & Chinos', 'for men', 1),
(12, 'Swimwear', 'for men', 1),
(13, 'Tops', 'for women', 2),
(14, 'T-shirts & Vests', 'for women', 2),
(15, 'Jeans', 'for women', 2),
(16, 'Trousers & Leggings', 'for women', 2),
(17, 'Skirts', 'for women', 2),
(18, 'Shorts', 'for women', 2),
(19, 'Dresses', 'for women', 2),
(20, 'Lingerie', 'for women', 2),
(21, 'Nightwear', 'for women', 2),
(22, 'Swim & Beachwear', 'for women', 2),
(23, 'Coats & Jackets', 'for women', 2),
(24, 'Suits & Separates', 'for women', 2),
(25, 'Socks & Tights', 'for women', 2),
(26, 'Dresses', 'for kids', 4),
(27, 'Tops', 'for kids', 4),
(28, 'Jeans', 'for kids', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `middleName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `contactNumber` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceId` int(11) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `discount` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoiceitemid`
--

CREATE TABLE `invoiceitemid` (
  `invoicceItemId` int(11) NOT NULL,
  `specialOffer` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `invoiceId` int(11) NOT NULL,
  `itemId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` int(11) NOT NULL,
  `itemName` varchar(40) NOT NULL,
  `image1` varchar(45) DEFAULT NULL,
  `image2` varchar(45) DEFAULT NULL,
  `image3` varchar(45) DEFAULT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemId`, `itemName`, `image1`, `image2`, `image3`, `categoryId`) VALUES
(1, 'black t shirt', 'a1.png', NULL, NULL, 1),
(2, 'Next Blue Blazer', 'a8.png', NULL, NULL, 8),
(3, 'Maroon Puma Tshirt', 'a4.png', NULL, NULL, 5),
(4, 'Air Tshirt Black', 'a3.png', NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Table structure for table `itemsize`
--

CREATE TABLE `itemsize` (
  `itemSizeId` int(11) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `discount` varchar(45) DEFAULT NULL,
  `stock` varchar(45) DEFAULT NULL,
  `sizeId` int(11) NOT NULL,
  `itemId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `itemsize`
--

INSERT INTO `itemsize` (`itemSizeId`, `price`, `discount`, `stock`, `sizeId`, `itemId`) VALUES
(1, '100', '10', 'small siz', 1, 1),
(2, '300', '20', NULL, 1, 2),
(3, '400', '12', NULL, 1, 3),
(4, '240', '34', NULL, 1, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `item_view`
-- (See below for the actual view)
--
CREATE TABLE `item_view` (
`itemId` int(11)
,`categoryId` int(11)
,`image1` varchar(45)
,`image2` varchar(45)
,`itemName` varchar(40)
,`image3` varchar(45)
,`itemSizeid` int(11)
,`price` varchar(45)
,`discount` varchar(45)
,`name` varchar(45)
,`description` varchar(250)
,`persontypeId` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `logId` int(11) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `adminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `persontype`
--

CREATE TABLE `persontype` (
  `personId` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persontype`
--

INSERT INTO `persontype` (`personId`, `type`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'kids_boy'),
(4, 'kids_girl');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `sizeId` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`sizeId`, `name`, `description`) VALUES
(1, 'small', 'small size');

-- --------------------------------------------------------

--
-- Structure for view `item_view`
--
DROP TABLE IF EXISTS `item_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `item_view`  AS  select `item`.`itemId` AS `itemId`,`item`.`categoryId` AS `categoryId`,`item`.`image1` AS `image1`,`item`.`image2` AS `image2`,`item`.`itemName` AS `itemName`,`item`.`image3` AS `image3`,`itemsize`.`itemSizeId` AS `itemSizeid`,`itemsize`.`price` AS `price`,`itemsize`.`discount` AS `discount`,`category`.`name` AS `name`,`category`.`description` AS `description`,`category`.`persontypeId` AS `persontypeId` from ((`item` join `itemsize`) join `category`) where ((`item`.`itemId` = `itemsize`.`itemId`) and (`item`.`categoryId` = `category`.`categoryId`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressId`),
  ADD KEY `fk_address_customer1_idx` (`customerId`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`),
  ADD KEY `fk_category_persontype1_idx` (`persontypeId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceId`),
  ADD KEY `fk_invoice_customer1_idx` (`customerId`);

--
-- Indexes for table `invoiceitemid`
--
ALTER TABLE `invoiceitemid`
  ADD PRIMARY KEY (`invoicceItemId`),
  ADD KEY `fk_invoiceItemId_invoice1` (`invoiceId`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemId`),
  ADD KEY `fk_item_category1_idx` (`categoryId`);

--
-- Indexes for table `itemsize`
--
ALTER TABLE `itemsize`
  ADD PRIMARY KEY (`itemSizeId`),
  ADD KEY `fk_itemSize_size1_idx` (`sizeId`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`logId`),
  ADD KEY `fk_log_admin1_idx` (`adminId`);

--
-- Indexes for table `persontype`
--
ALTER TABLE `persontype`
  ADD PRIMARY KEY (`personId`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`sizeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoiceitemid`
--
ALTER TABLE `invoiceitemid`
  MODIFY `invoicceItemId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itemsize`
--
ALTER TABLE `itemsize`
  MODIFY `itemSizeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `logId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_address_customer1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk_category_persontype1` FOREIGN KEY (`persontypeId`) REFERENCES `persontype` (`personId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_invoice_customer1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoiceitemid`
--
ALTER TABLE `invoiceitemid`
  ADD CONSTRAINT `fk_invoiceItemId_invoice1` FOREIGN KEY (`invoiceId`) REFERENCES `invoice` (`invoiceId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item_category1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `itemsize`
--
ALTER TABLE `itemsize`
  ADD CONSTRAINT `fk_itemSize_size1` FOREIGN KEY (`sizeId`) REFERENCES `size` (`sizeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_log_admin1` FOREIGN KEY (`adminId`) REFERENCES `admin` (`adminId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
