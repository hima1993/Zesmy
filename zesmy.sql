-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 05:15 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zesmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `addressId` int(11) NOT NULL AUTO_INCREMENT,
  `customerId` int(11) NOT NULL,
  `addressLine` varchar(250) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `postalCode` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`addressId`),
  KEY `fk_address_customer1_idx` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminId` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `pin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `username`, `email`, `password`, `pin`) VALUES
(1, 'Hima3993', 'hima@gmail.com', '00c66aaf5f2c3f49946f15c1ad2ea0d3', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `persontypeId` int(11) NOT NULL,
  PRIMARY KEY (`categoryId`),
  KEY `fk_category_persontype1_idx` (`persontypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

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

CREATE TABLE IF NOT EXISTS `customer` (
  `customerId` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) DEFAULT NULL,
  `middleName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `contactNumber` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `firstName`, `middleName`, `lastName`, `contactNumber`, `email`, `username`, `password`) VALUES
(1, 'Lahiru', '124', 'Abe', '0755896555', 'lahiru@gmail.com', 'lahiru123', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `invoiceId` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(45) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `discount` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `customerId` int(11) NOT NULL,
  PRIMARY KEY (`invoiceId`),
  KEY `fk_invoice_customer1_idx` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoiceitemid`
--

CREATE TABLE IF NOT EXISTS `invoiceitemid` (
  `invoicceItemId` int(11) NOT NULL AUTO_INCREMENT,
  `specialOffer` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `invoiceId` int(11) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  PRIMARY KEY (`invoicceItemId`),
  KEY `fk_invoiceItemId_invoice1` (`invoiceId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `itemId` int(11) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(40) NOT NULL,
  `image1` varchar(45) DEFAULT NULL,
  `image2` varchar(45) DEFAULT NULL,
  `image3` varchar(45) DEFAULT NULL,
  `categoryId` int(11) NOT NULL,
  PRIMARY KEY (`itemId`),
  KEY `fk_item_category1_idx` (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `itemsize` (
  `itemSizeId` int(11) NOT NULL AUTO_INCREMENT,
  `price` varchar(45) DEFAULT NULL,
  `discount` varchar(45) DEFAULT NULL,
  `stock` varchar(45) DEFAULT NULL,
  `sizeId` int(11) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  PRIMARY KEY (`itemSizeId`),
  KEY `fk_itemSize_size1_idx` (`sizeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
--
CREATE TABLE IF NOT EXISTS `item_view` (
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

CREATE TABLE IF NOT EXISTS `log` (
  `logId` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(45) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `adminId` int(11) NOT NULL,
  PRIMARY KEY (`logId`),
  KEY `fk_log_admin1_idx` (`adminId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `persontype`
--

CREATE TABLE IF NOT EXISTS `persontype` (
  `personId` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`personId`)
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

CREATE TABLE IF NOT EXISTS `size` (
  `sizeId` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`sizeId`)
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `item_view` AS select `item`.`itemId` AS `itemId`,`item`.`categoryId` AS `categoryId`,`item`.`image1` AS `image1`,`item`.`image2` AS `image2`,`item`.`itemName` AS `itemName`,`item`.`image3` AS `image3`,`itemsize`.`itemSizeId` AS `itemSizeid`,`itemsize`.`price` AS `price`,`itemsize`.`discount` AS `discount`,`category`.`name` AS `name`,`category`.`description` AS `description`,`category`.`persontypeId` AS `persontypeId` from ((`item` join `itemsize`) join `category`) where ((`item`.`itemId` = `itemsize`.`itemId`) and (`item`.`categoryId` = `category`.`categoryId`));

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
