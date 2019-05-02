-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 05:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dayextra`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_favourite`
--

CREATE TABLE `add_to_favourite` (
  `fav_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `fav_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_to_favourite`
--

INSERT INTO `add_to_favourite` (`fav_id`, `product_id`, `customer_id`, `fav_date`) VALUES
(1, 55, 4, '2018-04-13 02:21:32'),
(2, 52, 4, '2018-04-13 02:25:05'),
(8, 22, 5, '2018-04-13 02:44:05'),
(9, 20, 5, '2018-04-13 15:53:49'),
(10, 51, 5, '2018-04-13 15:56:10'),
(11, 41, 5, '2018-04-13 20:05:30'),
(14, 52, 5, '2018-04-13 20:08:36'),
(15, 55, 5, '2018-04-13 20:28:13'),
(16, 54, 5, '2018-04-13 20:28:21'),
(17, 21, 5, '2018-04-13 20:28:41'),
(20, 55, 19, '2018-04-18 18:25:31'),
(21, 52, 19, '2018-04-18 18:25:50'),
(22, 51, 19, '2018-04-19 00:04:46'),
(23, 51, 19, '2018-04-19 00:04:50'),
(24, 52, 1, '2018-09-11 13:13:29'),
(25, 51, 1, '2018-09-12 04:07:22'),
(26, 51, 1, '2018-09-12 04:07:33'),
(27, 51, 1, '2018-09-12 04:07:34'),
(28, 51, 1, '2018-09-12 04:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `role`, `admin_img`) VALUES
(5, 'SAUNG HNIN OO', '', '12345678', 'Admin', '333583.png'),
(6, 'INGYIN MHWE', '', '12345678', 'Admin', '813054.png'),
(7, 'Thantnandarzaw', '', '12345678', 'Manager', '575010.jpeg'),
(8, 'YIN MIN', 'yinmin@gmail.com', '12345678', 'Manager', '749244.png'),
(9, 'MYO THANDAR ', 'myothandar@gmail.com', '12345678', 'Admin', '270566.png'),
(10, 'HLAING NADI PHYO', 'hlaingnadiphyo@acedatasystems.com', '12345678', 'Manager', '882778.png');

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `attr_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attr_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`attr_id`, `name`, `value`, `attr_img`) VALUES
(1, 'color', 'black', 'black.PNG'),
(2, 'color', 'grey', 'grey.PNG'),
(3, 'size', 'XS', ''),
(4, 'size', 'S', ''),
(5, 'size', 'M', ''),
(6, 'size', 'L', ''),
(7, 'color', 'red', 'red.PNG'),
(8, 'color', 'white', 'white.PNG'),
(9, 'size2', '41', ''),
(10, 'size2', '42', ''),
(11, 'size2', '43', ''),
(12, 'size2', '44', ''),
(13, 'size', 'XL', ''),
(14, 'size', 'XXL', ''),
(15, 'size2', '28', ''),
(16, 'size2', '29', ''),
(17, 'size2', '30', ''),
(18, 'size2', '31', ''),
(19, 'size2', '32', ''),
(20, 'size2', '33', ''),
(21, 'size2', '34', ''),
(22, 'size2', '35', ''),
(28, 'size3', 'ONE SIZE', ''),
(29, 'color', 'blue', 'blue.PNG'),
(30, 'color', 'blue2', 'blue2.PNG'),
(31, 'color', 'blue3', 'blue3.PNG'),
(32, 'color', 'blue4', 'blue4.PNG'),
(33, 'color', 'blue5', 'blue5.PNG'),
(34, 'color', 'green', 'green.PNG'),
(35, 'color', 'green3', 'green3.PNG'),
(36, 'color', 'green4', 'green4.PNG'),
(37, 'color', 'black2', 'black2.PNG'),
(38, 'color', 'grey2', 'grey2.PNG'),
(39, 'size', 'US 7, UK 6.5, F 40', ''),
(40, 'size', 'US 8, UK 7, F 41', ''),
(41, 'size', 'US 8, UK 7.5, F 41.5', ''),
(42, 'size', 'US 9, UK 8, F 42', ''),
(43, 'size', 'US 10, UK 9, F 43', ''),
(44, 'size', 'US 11, UK 10, F 44', ''),
(45, 'size', 'US 11, UK 10.5, F 44.5', ''),
(46, 'size', 'US 6, UK 5, F 39', ''),
(47, 'size', 'US 5, UK 4, F 38', ''),
(48, 'size', 'US 5, UK 4.5, F 38.5', ''),
(49, 'size', 'US 4, UK 3, F 37', ''),
(50, 'size', 'US 4, UK 3.5, F 37.5', '');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_cover`, `created_date`, `modified_date`) VALUES
(1, 'Uniqlo', 'a (4).png', '2018-01-16 13:15:19', '0000-00-00 00:00:00'),
(2, 'Addias', 'a (7).png', '2018-01-16 13:15:19', '0000-00-00 00:00:00'),
(3, 'ZARA', 'a (2).png', '2018-01-16 13:15:58', '0000-00-00 00:00:00'),
(4, 'NIKE', 'a (8).png', '2018-01-16 13:15:58', '0000-00-00 00:00:00'),
(5, 'H&M', 'a (1).png', '2018-01-24 20:07:53', '0000-00-00 00:00:00'),
(10, 'Gap', 'gap.jpg', '2018-02-22 03:51:23', '0000-00-00 00:00:00'),
(11, 'BeanPole', 'cropped-19632487f1e7c995b9c6f504964d07b8-top-beans.jpg', '2018-02-27 17:17:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `created_date`, `modified_date`) VALUES
(9, 'T-Shirts', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Shirts', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'SweaterShirts and SweaterPants', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Socks and Tights', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Accessories and Shoes', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Innerwear', '0000-00-00 00:00:00', '2018-03-03 19:07:30'),
(19, 'SportWear', '2018-01-16 11:22:53', '0000-00-00 00:00:00'),
(20, 'Jeans and Pants', '2018-01-16 11:22:53', '0000-00-00 00:00:00'),
(21, 'Jacket', '2018-01-19 17:24:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `sender_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `parent_comment_id`, `comment`, `sender_name`, `product_id`, `date`) VALUES
(1, 0, '  sdfasfsdaf', 'haha', 0, '2018-04-18 17:52:54'),
(2, 0, 'Nice Quality T-shirt! ', 'Saunghninoo', 0, '2018-04-18 18:42:31'),
(3, 0, '  It is fit to me thank CAPITAL-A', 'Saunghninoo', 52, '2018-04-18 18:50:49'),
(4, 0, 'Good Quality Uniqlo product!', 'Sumyat', 52, '2018-04-18 19:28:33'),
(6, 0, 'fair price and good quality products ever!', 'fafsdf', 52, '2018-04-18 20:59:54'),
(7, 0, '', '', 0, '2018-09-23 08:00:59'),
(8, 0, '', '', 0, '2018-09-23 08:01:00'),
(9, 0, '', '', 0, '2018-09-23 08:01:01'),
(10, 0, '', '', 0, '2018-09-23 08:01:01'),
(11, 0, '', '', 0, '2018-09-23 08:01:01'),
(12, 0, '', '', 0, '2018-09-23 08:01:02'),
(13, 0, '', '', 0, '2018-09-23 08:01:02'),
(14, 0, '', '', 0, '2018-09-23 08:01:02'),
(15, 0, '', '', 0, '2018-09-23 08:01:02'),
(16, 0, '', '', 0, '2018-09-23 08:01:02'),
(17, 0, '', '', 0, '2018-09-23 08:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `pass`, `customer_img`) VALUES
(1, 'zinmyo', 'overmidnight12@gmail.com', '12345678', 'default.png'),
(2, 'phyuma', 'linsandar96@gmail.com', '12345678', 'default.png'),
(3, 'Ingyin', 'ingyin@gmail.com', '12345678', 'default.png'),
(4, 'Saunghninoo', 'Saunghninoo@acedatasystems.com', '12345678', 'default.png'),
(5, 'Sumyat', 'sumyat@gmail.com', '12345678', 'default.png'),
(6, 'testing', 'haha@gmail.com', '12345678', 'default.png'),
(7, 'testing2', '22@gmail.com', '12345678', 'default.png'),
(8, 'toetoe', 'toeote@gmail.com', '123456789', 'default.png'),
(9, 'fdsfsafsad', 'hoho@gmail.com', '12345678', 'default.png'),
(10, 'gaga', 'gaga@gmail.com', '12345678', 'default.png'),
(11, 'jaja', 'jaja@gmail.com', '12345678', 'default.png'),
(12, 'yoyo', 'yoyo@gmail.com', '12345678', 'default.png'),
(13, 'Hlaing Nadi Phyo', 'hlaing@gmail.com', '12345678', 'default.png'),
(19, 'fafsdf', 'sss@gmail.com', '12345678', 'default.png'),
(20, 'gigi', 'gigi@gmail.com', '12345678', 'default.png'),
(21, 'pupu', 'pupu@gmail.com', '12345678', 'default.png'),
(22, 'suthinzarmaung', 'suthinzarmaung@gmail.com', '12345678', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `discount_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`discount_id`, `product_id`, `percentage`, `created_date`, `duration`, `end_date`) VALUES
(1, 55, 10, '0000-00-00', '', '0000-00-00'),
(2, 51, 15, '0000-00-00', '', '0000-00-00'),
(3, 40, 35, '09/21/2018', '', '10/21/2018');

-- --------------------------------------------------------

--
-- Table structure for table `image_attributes`
--

CREATE TABLE `image_attributes` (
  `img_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image_attributes`
--

INSERT INTO `image_attributes` (`img_id`, `product_id`, `image`) VALUES
(1, 9, '1516266393-medicine-(4).png'),
(2, 9, '1516266393-medicine-(10).png'),
(3, 9, '1516266393-book-(2).png'),
(25, 1, '1516269260-cloth-(10).png'),
(26, 1, '1516269260-shirt-(3).png'),
(41, 11, '1516340472-sweater2.png'),
(48, 19, '1516373409-e1.PNG'),
(49, 19, '1516373409-e3.PNG'),
(50, 19, '1516373409-e4.PNG'),
(51, 18, '1516447846-f2.PNG'),
(52, 18, '1516447846-f3.PNG'),
(53, 18, '1516447846-f4.PNG'),
(54, 14, '1516447913-k2.PNG'),
(55, 14, '1516447913-k3.PNG'),
(56, 13, '1516447965-j2.PNG'),
(57, 13, '1516447965-j3.PNG'),
(58, 16, '1516448122-g2.PNG'),
(59, 16, '1516448122-g3.PNG'),
(60, 16, '1516448122-g4.PNG'),
(61, 12, '1516448299-a.PNG'),
(62, 12, '1516448299-a4.PNG'),
(63, 12, '1516448299-a5.PNG'),
(64, 12, '1516448299-a1.PNG'),
(65, 15, '1516529058-i2.PNG'),
(66, 15, '1516529058-i3.PNG'),
(67, 20, '1516627066-n2.PNG'),
(68, 20, '1516627066-n3.PNG'),
(69, 20, '1516627066-n4.PNG'),
(70, 20, '1516627066-n5.PNG'),
(71, 21, '1516698288-l2.PNG'),
(72, 21, '1516698289-l3.PNG'),
(73, 21, '1516698289-l4.PNG'),
(74, 21, '1516698289-l5.PNG'),
(75, 22, '1516698383-m2.PNG'),
(76, 22, '1516698383-m3.PNG'),
(77, 22, '1516698383-m4png.PNG'),
(78, 22, '1516698383-m5.PNG'),
(79, 33, '1516813513-o4.PNG'),
(80, 33, '1516813513-o2.PNG'),
(81, 33, '1516813514-o5.PNG'),
(82, 33, '1516813514-o6.PNG'),
(83, 34, '1517085930-q2.PNG'),
(84, 34, '1517085931-q3.PNG'),
(85, 25, '1518259698-q2.PNG'),
(86, 25, '1518259698-q1.PNG'),
(87, 23, '1518516512-o2.PNG'),
(88, 23, '1518516512-o4.PNG'),
(89, 23, '1518516512-o5.PNG'),
(90, 23, '1518516512-o6.PNG'),
(91, 47, '1518699127-jj4.PNG'),
(92, 47, '1518699127-jj2.PNG'),
(93, 48, '1519098074-aa2.PNG'),
(94, 48, '1519098074-aa3.PNG'),
(97, 49, '1519362704-kk2.PNG'),
(98, 49, '1519362704-kk3.PNG'),
(101, 51, '1523245379-ddd1-(2).PNG'),
(102, 51, '1523245379-ddd1-(3).PNG'),
(103, 51, '1523245379-ddd1-(4).PNG'),
(104, 51, '1523245379-ddd1-(5).PNG'),
(105, 52, '1523246472-eee2-(1).PNG'),
(106, 52, '1523246472-ddd1-(3).PNG'),
(107, 52, '1523246472-ddd1-(4).PNG'),
(108, 54, '1523278411-jjj7-(2).PNG'),
(109, 54, '1523278411-jjj7-(3).PNG'),
(110, 54, '1523278411-jjj7-(5).PNG'),
(111, 54, '1523278411-jjj7-(6).PNG'),
(112, 54, '1523278412-jjj7-(7).PNG'),
(113, 55, '1523279566-hhh5-(4).PNG'),
(114, 55, '1523279566-hhh5-(5).PNG'),
(115, 55, '1523279566-hhh5-(1).PNG'),
(116, 55, '1523279566-hhh5-(3).PNG'),
(117, 56, '1524762534-ggg2-(1).PNG'),
(118, 56, '1524762534-ddd1-(2).PNG');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `total_amt` float NOT NULL,
  `total_qty` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer`, `shipping_id`, `status`, `total_amt`, `total_qty`, `payment_type`, `created_date`, `modified_date`) VALUES
(23, 'shweli', 0, 0, 0, 0, '', '2018-01-15 12:30:48', '2018-01-15 12:30:48'),
(24, 'shweli', 0, 0, 0, 0, '', '2018-01-18 11:38:51', '2018-01-18 11:38:51'),
(25, 'shweli', 0, 0, 0, 0, '', '2018-01-22 23:49:55', '2018-01-22 23:49:55'),
(26, 'shweli', 0, 0, 0, 0, '', '2018-01-23 00:49:54', '2018-02-13 18:27:57'),
(27, 'shweli', 0, 1, 0, 0, '', '2018-01-23 00:50:22', '2018-02-13 20:50:28'),
(28, 'shweli', 0, 0, 0, 0, '', '2018-01-28 03:00:44', '2018-01-28 03:00:44'),
(29, 'overmidnight12@gmail.com', 0, 1, 0, 0, '', '2018-02-13 15:44:00', '2018-02-21 11:22:19'),
(30, 'linsandar96@gmail.com', 9, 2, 0, 0, '', '2018-02-15 01:08:20', '2018-02-15 01:08:20'),
(31, 'ingyin@gmail.com', 10, 2, 0, 0, '', '2018-02-23 13:29:29', '2018-02-23 13:29:29'),
(32, '', 7, 2, 0, 0, '', '2018-02-27 10:58:59', '2018-02-27 10:58:59'),
(33, 'ingyin@gmail.com', 10, 2, 0, 0, '', '2018-02-27 11:11:27', '2018-02-27 11:11:27'),
(34, 'overmidnight12@gmail.com', 6, 2, 0, 0, '', '2018-02-27 11:20:07', '2018-02-27 11:20:07'),
(35, 'ingyin@gmail.com', 10, 2, 0, 0, '', '2018-02-27 11:34:07', '2018-02-27 11:34:07'),
(36, 'linsandar96@gmail.com', 9, 2, 0, 0, '', '2018-02-27 11:46:56', '2018-02-27 11:46:56'),
(37, 'linsandar96@gmail.com', 9, 2, 0, 0, '', '2018-02-27 11:52:18', '2018-02-27 11:52:18'),
(38, 'overmidnight12@gmail.com', 7, 3, 47.66, 3, 'ATM', '2018-02-27 13:35:06', '2018-03-15 10:03:54'),
(39, 'linsandar96@gmail.com', 12, 4, 41.22, 1, 'ATM', '2018-03-13 04:19:06', '2018-03-15 10:04:15'),
(40, 'saunghninoo@acedatasystems.com', 24, 5, 60.66, 3, 'Cash', '2018-03-13 14:49:54', '2018-03-15 10:03:18'),
(41, 'ingyin@gmail.com', 10, 5, 178.88, 4, 'ATM', '2018-03-13 15:00:09', '2018-03-15 07:25:40'),
(42, 'overmidnight12@gmail.com', 8, 2, 165.44, 2, 'Cash', '2018-03-28 00:12:11', '2018-03-28 00:12:11'),
(43, 'overmidnight12@gmail.com', 7, 3, 87.44, 2, 'Credit', '2018-03-28 00:22:07', '2018-03-28 00:22:07'),
(44, 'sumyat@gmail.com', 25, 3, 365.88, 4, 'Credit', '2018-03-28 00:58:59', '2018-03-28 00:58:59'),
(45, 'sumyat@gmail.com', 25, 3, 62.22, 1, 'Credit', '2018-03-28 01:04:01', '2018-03-28 01:04:01'),
(46, 'saunghninoo@acedatasystems.com', 24, 5, 14.22, 1, 'Cash', '2018-04-09 10:46:54', '2018-04-09 10:49:38'),
(47, 'saunghninoo@acedatasystems.com', 24, 2, 42.66, 3, 'Cash', '2018-04-09 14:18:24', '2018-04-09 14:18:24'),
(48, 'saunghninoo@acedatasystems.com', 24, 3, 156.42, 11, 'Cash', '2018-04-09 14:20:11', '2018-04-09 14:21:04'),
(49, 'sumyat@gmail.com', 25, 5, 35.22, 1, 'ATM', '2018-04-20 16:49:49', '2018-04-20 16:54:43'),
(50, 'sumyat@gmail.com', 25, 2, 94.22, 1, 'Cash', '2018-04-25 18:27:06', '2018-04-25 18:27:06'),
(51, 'sumyat@gmail.com', 25, 5, 56.88, 4, 'ATM', '2018-04-26 07:17:15', '2018-04-26 17:41:30'),
(52, 'saunghninoo@gmail.com', 26, 2, 56.22, 1, 'Cash', '2018-08-18 18:21:16', '2018-08-18 18:21:16'),
(53, 'overmidnight12@gmail.com', 27, 2, 69.66, 3, 'Cash', '2018-09-06 18:38:45', '2018-09-06 18:38:45'),
(54, 'overmidnight12@gmail.com', 8, 3, 105.44, 2, 'Credit', '2018-09-07 21:52:24', '2018-09-07 21:52:24'),
(55, 'overmidnight12@gmail.com', 27, 2, 104.44, 2, 'ATM', '2018-09-08 00:21:51', '2018-09-08 00:21:51'),
(56, 'overmidnight12@gmail.com', 27, 2, 14.22, 1, 'ATM', '2018-09-10 22:31:32', '2018-09-10 22:31:32'),
(57, 'overmidnight12@gmail.com', 8, 2, 63.66, 3, 'Cash', '2018-09-13 12:31:47', '2018-09-13 12:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `units` int(11) NOT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `product_name`, `price`, `units`, `total`, `customer`) VALUES
(3, 0, 1, 'NIKE Tshirt', '12.22', 1, '12.22', 'phyuma'),
(4, 0, 2, 'Addias Super star shoes', '28.99', 1, '28.99', 'phyuma'),
(5, 0, 1, 'NIKE Tshirt', '12.22', 1, '12.22', 'phyuma'),
(6, 0, 2, 'Addias Super star shoes', '28.99', 2, '57.98', 'phyuma'),
(7, 18, 1, 'NIKE Tshirt', '12.22', 1, '12.22', 'phyuma'),
(8, 18, 2, 'Addias Super star shoes', '28.99', 1, '28.99', 'phyuma'),
(9, 19, 7, 'HTML&CSS', '16.22', 1, '16.22', 'phyuma'),
(10, 19, 6, 'Learning PHP,MYSQL& Javascript 4th Edition with JQuery', '26.22', 1, '26.22', 'phyuma'),
(11, 19, 2, 'Addias Super star shoes', '28.99', 1, '28.99', 'phyuma'),
(12, 20, 2, 'Addias Super star shoes', '28.99', 1, '28.99', 'phyuma'),
(13, 21, 1, 'NIKE Tshirt', '12.22', 2, '24.44', 'phyuma'),
(14, 21, 5, 'Adobe IllustratorCC Video Tutorial 2015 release', '13.34', 1, '13.34', 'phyuma'),
(15, 23, 1, 'NIKE Tshirt', '12.22', 2, '24.44', 'shweli'),
(16, 23, 7, 'HTML&CSS', '16.22', 2, '32.44', 'shweli'),
(17, 24, 3, 'Adobe InDesign CC Video Tutorial 2015 release', '14.99', 3, '44.97', 'shweli'),
(18, 24, 1, 'NIKE Tshirt', '12.22', 1, '12.22', 'shweli'),
(19, 24, 6, 'Learning PHP,MYSQL& Javascript 4th Edition with JQuery', '26.22', 1, '26.22', 'shweli'),
(20, 26, 19, 'NMD TRACK JACKET', '65.22', 1, '65.22', 'shweli'),
(21, 26, 15, 'DESIGNED 2 MOVE TRACK PANTS', '39.22', 1, '39.22', 'shweli'),
(22, 26, 17, 'UNIQLO CREW NECK SWEATER', '32.22', 1, '32.22', 'shweli'),
(23, 26, 15, 'DESIGNED 2 MOVE TRACK PANTS', '39.22', 2, '78.44', 'shweli'),
(24, 26, 14, 'TREFOIL TEE', '22.22', 2, '44.44', 'shweli'),
(25, 26, 14, 'TREFOIL TEE', '22.22', 3, '66.66', 'shweli'),
(26, 27, 11, 'UNIQLO V-Neck Sweater ', '42.99', 1, '42.99', 'shweli'),
(27, 28, 15, 'DESIGNED 2 MOVE TRACK PANTS', '39.22', 3, '117.66', 'shweli'),
(28, 29, 15, 'DESIGNED 2 MOVE TRACK PANTS', '39.22', 2, '78.44', 'overmidnight12@gmail.com'),
(29, 29, 24, 'Easy-sliver Shirt Slim fit', '12.22', 1, '12.22', 'overmidnight12@gmail.com'),
(35, 30, 36, 'WASHED STRIPED LONG-SLEEVE T-SHIRT', '32.22', 1, '32.22', 'linsandar96@gmail.com'),
(36, 30, 38, 'SUPIMAÂ® COTTON CREWNECK SHORT-SLEEVE T-SHIRT', '12.22', 1, '12.22', 'linsandar96@gmail.com'),
(37, 31, 49, 'WASHED STRIPED LONG-SLEEVE T-SHIRT', '42.22', 2, '84.44', 'ingyin@gmail.com'),
(38, 0, 49, 'WASHED STRIPED LONG-SLEEVE T-SHIRT', '42.22', 2, '84.44', ''),
(39, 0, 45, 'MICRO-PERFORATED PLIMSMAT SHOE', '94.22', 1, '94.22', ''),
(40, 0, 43, 'WESTERN STUDENT JACKET', '49.22', 1, '49.22', ''),
(41, 0, 38, 'SUPIMAÂ® COTTON CREWNECK SHORT-SLEEVE T-SHIRT', '12.22', 2, '24.44', ''),
(42, 32, 38, 'SUPIMAÂ® COTTON CREWNECK SHORT-SLEEVE T-SHIRT', '12.22', 1, '12.22', ''),
(43, 32, 40, 'SUPIMAÂ® COTTON V-NECK SHORT SLEEVE T-SHIRT', '12.22', 2, '24.44', ''),
(44, 33, 39, 'MEN SUPIMAÂ® COTTON V-NECK SHORT SLEEVE T-SHIRT', '12.22', 1, '12.22', 'ingyin@gmail.com'),
(45, 33, 35, 'WASHED STRIPED LONG-SLEEVE T-SHIRT', '43.22', 2, '86.44', 'ingyin@gmail.com'),
(46, 34, 34, 'SLIM-FIT DAMAGED JEANS', '32.22', 2, '64.44', 'overmidnight12@gmail.com'),
(47, 34, 21, 'JOJE PACk BACKPACK', '34.22', 1, '34.22', 'overmidnight12@gmail.com'),
(48, 35, 23, 'NMD_XR2 SHOES', '43.22', 1, '43.22', 'ingyin@gmail.com'),
(49, 36, 43, 'WESTERN STUDENT JACKET', '49.22', 1, '49.22', 'linsandar96@gmail.com'),
(50, 37, 48, 'testing', '23.22', 1, '23.22', 'linsandar96@gmail.com'),
(51, 38, 37, 'MEN SUPIMAÂ® COTTON CREWNECK SHORT-SLEEVE T-SHIRT', '12.22', 2, '24.44', 'overmidnight12@gmail.com'),
(52, 38, 32, 'OXFORD SLIM-FIT LONG-SLEEVE SHIRT', '23.22', 1, '23.22', 'overmidnight12@gmail.com'),
(53, 39, 47, 'MEN WASHED STRIPED LONG-SHOUUKU T-SHIRT', '41.22', 1, '41.22', 'linsandar96@gmail.com'),
(54, 40, 26, ' MEN EXTRA FINE COTTON CHECKED LONG-SLEEVE SHIRT', '14.22', 1, '14.22', 'saunghninoo@acedatasystems.com'),
(55, 40, 37, 'MEN SUPIMAÂ® COTTON CREWNECK SHORT-SLEEVE T-SHIRT', '12.22', 1, '12.22', 'saunghninoo@acedatasystems.com'),
(56, 40, 21, 'JOJE PACk BACKPACK', '34.22', 1, '34.22', 'saunghninoo@acedatasystems.com'),
(57, 41, 47, 'MEN WASHED STRIPED LONG-SHOUUKU T-SHIRT', '41.22', 1, '41.22', 'ingyin@gmail.com'),
(58, 41, 15, 'DESIGNED 2 MOVE TRACK PANTS', '39.22', 1, '39.22', 'ingyin@gmail.com'),
(59, 41, 43, 'WESTERN STUDENT JACKET', '49.22', 2, '98.44', 'ingyin@gmail.com'),
(60, 42, 49, 'WASHED STRIPED LONG-SLEEVE T-SHIRT', '142.22', 1, '142.22', 'overmidnight12@gmail.com'),
(61, 42, 13, 'ESSENTIALS TEE', '23.22', 1, '23.22', 'overmidnight12@gmail.com'),
(62, 43, 18, 'SUPERNOVA STORM JACKET', '62.22', 1, '62.22', 'overmidnight12@gmail.com'),
(63, 43, 28, 'EXTRA FINE COTTON BROADCLOTH LONG SLEEVE SHIRT', '25.22', 1, '25.22', 'overmidnight12@gmail.com'),
(64, 44, 31, 'DENIM SLIM-FIT LONG-SLEEVE SHIRT', '32.22', 1, '32.22', 'sumyat@gmail.com'),
(65, 44, 49, 'WASHED STRIPED LONG-SLEEVE T-SHIRT', '142.22', 2, '284.44', 'sumyat@gmail.com'),
(66, 44, 10, 'UNIQLO sweater crew neck', '49.22', 1, '49.22', 'sumyat@gmail.com'),
(67, 45, 18, 'SUPERNOVA STORM JACKET', '62.22', 1, '62.22', 'sumyat@gmail.com'),
(68, 46, 52, 'KARAKAMI KARACHO SHORT-SLEEVE GRAPHIC T-SHIRT', '14.22', 1, '14.22', 'saunghninoo@acedatasystems.com'),
(69, 47, 51, 'SPRZ NY EAMES SHORT-SLEEVE GRAPHIC T-SHIRT', '14.22', 2, '28.44', 'saunghninoo@acedatasystems.com'),
(70, 47, 52, 'KARAKAMI KARACHO SHORT-SLEEVE GRAPHIC T-SHIRT', '14.22', 1, '14.22', 'saunghninoo@acedatasystems.com'),
(71, 48, 52, 'KARAKAMI KARACHO SHORT-SLEEVE GRAPHIC T-SHIRT', '14.22', 11, '156.42', 'saunghninoo@acedatasystems.com'),
(72, 49, 54, '3-STRIPES POWER BACKPACK MEDIUM', '35.22', 1, '35.22', 'sumyat@gmail.com'),
(73, 50, 45, 'MICRO-PERFORATED PLIMSMAT SHOE', '94.22', 1, '94.22', 'sumyat@gmail.com'),
(74, 51, 51, 'SPRZ NY EAMES SHORT-SLEEVE GRAPHIC T-SHIRT', '14.22', 2, '28.44', 'sumyat@gmail.com'),
(75, 51, 55, 'MEN KAWS X PEANUTS SHORT-SLEEVE GRAPHIC T-SHIRT', '14.22', 2, '28.44', 'sumyat@gmail.com'),
(76, 52, 41, 'JACKET WITH SIDE STRIPES', '56.22', 1, '56.22', 'saunghninoo@gmail.com'),
(77, 53, 51, 'SPRZ NY EAMES SHORT-SLEEVE GRAPHIC T-SHIRT', '14.22', 1, '14.22', 'overmidnight12@gmail.com'),
(78, 53, 55, 'MEN KAWS X PEANUTS SHORT-SLEEVE GRAPHIC T-SHIRT', '14.22', 1, '14.22', 'overmidnight12@gmail.com'),
(79, 53, 47, 'MEN WASHED STRIPED LONG-SHOUUKU T-SHIRT', '41.22', 1, '41.22', 'overmidnight12@gmail.com'),
(80, 54, 41, 'JACKET WITH SIDE STRIPES', '56.22', 1, '56.22', 'overmidnight12@gmail.com'),
(81, 54, 43, 'WESTERN STUDENT JACKET', '49.22', 1, '49.22', 'overmidnight12@gmail.com'),
(82, 55, 44, 'MICRO-PERFORATED PLIMSOLLS SHOE', '92.22', 1, '92.22', 'overmidnight12@gmail.com'),
(83, 55, 40, 'SUPIMAÂ® COTTON V-NECK SHORT SLEEVE T-SHIRT', '12.22', 1, '12.22', 'overmidnight12@gmail.com'),
(84, 56, 51, 'SPRZ NY EAMES SHORT-SLEEVE GRAPHIC T-SHIRT', '14.22', 1, '14.22', 'overmidnight12@gmail.com'),
(85, 57, 54, '3-STRIPES POWER BACKPACK MEDIUM', '35.22', 1, '35.22', 'overmidnight12@gmail.com'),
(86, 57, 51, 'SPRZ NY EAMES SHORT-SLEEVE GRAPHIC T-SHIRT', '14.22', 2, '28.44', 'overmidnight12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` float NOT NULL,
  `payamount` float NOT NULL,
  `payment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `order_id`, `payment_type`, `amount`, `payamount`, `payment_date`) VALUES
(7, 41, 'ATM', 178.88, 178.88, '2018-03-14 12:21:48'),
(8, 40, 'Cash', 60.66, 60.66, '2018-03-14 13:32:38'),
(9, 39, 'ATM', 41.22, 41.22, '2018-03-15 04:20:19'),
(10, 38, 'ATM', 47.66, 47.66, '2018-03-15 10:03:54'),
(11, 43, 'Credit', 87.44, 87.44, '2018-03-28 00:22:07'),
(12, 44, 'Credit', 365.88, 365.88, '2018-03-28 00:59:00'),
(13, 45, 'Credit', 62.22, 62.22, '2018-03-28 01:04:02'),
(14, 46, 'Cash', 14.22, 14.22, '2018-04-09 10:48:38'),
(15, 48, 'Cash', 156.42, 156.42, '2018-04-09 14:21:04'),
(16, 49, 'ATM', 35.22, 35.22, '2018-04-20 16:53:54'),
(17, 51, 'ATM', 56.88, 56.88, '2018-04-26 17:38:10'),
(18, 51, 'ATM', 56.88, 0, '2018-04-26 17:38:40'),
(19, 54, 'Credit', 105.44, 105.44, '2018-09-07 21:52:25'),
(20, 55, 'ATM', 104.44, 104.44, '2018-09-08 00:21:52'),
(21, 56, 'ATM', 14.22, 14.22, '2018-09-10 22:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `payment_detail_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_no` int(50) NOT NULL,
  `exp_month` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `exp_year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `security_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`payment_detail_id`, `payment_id`, `name`, `card_no`, `exp_month`, `exp_year`, `security_code`, `created_date`) VALUES
(1, 12, '', 0, '', '', '', '2018-03-28 00:59:00'),
(2, 13, 'test', 2147483647, 'August', '2019', '12312', '2018-03-28 01:04:02'),
(3, 19, 'Thantnandarzaw', 2147483647, 'November', '2030', '54678', '2018-09-07 21:52:25'),
(4, 20, 'zinzintun', 2147483647, '', '', '76543', '2018-09-08 00:21:52'),
(5, 21, 'zinzintun', 2147483647, '', '', '435678', '2018-09-10 22:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `categories`, `sub_cat`, `brand`, `supplier`, `description`, `price`, `cover`, `qty`, `created_date`, `modified_date`) VALUES
(10, 'UNIQLO sweater crew neck', '13', '14', '1', '5', '', '49.22', 'sweater5.PNG', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'UNIQLO V-Neck Sweater ', '13', '12', '1', '5', '', '42.99', 'sweater.PNG', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'ADDIAS SUPERNOVA LEE PANTS', '20', '16', '2', '10', '', '49.22', 'a3.PNG', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'ESSENTIALS TEE', '9', '', '2', '10', '', '23.22', 'j1.PNG', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'TREFOIL TEE', '9', '', '2', '10', '', '22.22', 'k1.PNG', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'DESIGNED 2 MOVE TRACK PANTS', '20', '17', '2', '10', '', '39.22', 'i1.PNG', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'TIRO 17 TRAINING PANTS', '20', '16', '2', '10', '', '57.22', 'g1.PNG', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'UNIQLO CREW NECK SWEATER', '13', '14', '1', '5', '', '32.22', 'sweater3.PNG', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'SUPERNOVA STORM JACKET', '20', '16', '2', '10', '', '62.22', 'f1.PNG', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'NMD TRACK JACKET', '21', '18', '2', '10', '', '65.22', 'e2.PNG', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'NMD_XR1 SHOES', '17', '21', '2', '9', '', '32.22', 'n1.PNG', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'JOJE PACk BACKPACK', '17', '20', '2', '5', '', '34.22', 'l1.PNG', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'TOTE PACK II BACKPACK', '17', '20', '2', '9', '', '28.99', 'm1.PNG', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'NMD_XR2 SHOES', '17', '20', '2', '10', '', '43.22', 'o1.PNG', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Easy-sliver Shirt Slim fit', '10', '7', '5', '5', '', '12.22', 'q5.PNG', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Easy-iron Shirt Slim fit', '10', '7', '5', '5', '', '16.22', 'q3.PNG', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, ' MEN EXTRA FINE COTTON CHECKED LONG-SLEEVE SHIRT', '10', '8', '1', '5', '', '14.22', 'aa1.PNG', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'EXTRA FINE COTTON BROADCLOTH LONG SLEEVE SHIRT', '10', '9', '1', '5', '', '24.22', 'bb1.PNG', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'EXTRA FINE COTTON BROADCLOTH LONG SLEEVE SHIRT', '10', '9', '1', '9', '', '25.22', 'bb6.PNG', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'EXTRA FINE COTTON BROADCLOTH LONG-LINES SHIRT', '10', '24', '1', '9', '', '23.22', 'cc1.PNG', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'DENIM SLIM-FIT LONG-SLEEVE SHIRT', '10', '10', '1', '9', '', '32.22', 'ee1.PNG', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'OXFORD SLIM-FIT LONG-SLEEVE SHIRT', '10', '7', '1', '9', '', '23.22', 'ff4.PNG', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'OXFORD SLIM-FIT LONG-SLEEVE SHIRT', '10', '8', '1', '9', '', '32.22', 'gg1.PNG', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'SLIM-FIT DAMAGED JEANS', '20', '16', '1', '9', '', '32.22', 'ii1.PNG', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'WASHED STRIPED LONG-SLEEVE T-SHIRT', '9', '25', '1', '9', '', '43.22', 'jj3.PNG', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'MEN SUPIMAÂ® COTTON CREWNECK SHORT-SLEEVE T-SHIRT', '9', '26', '1', '9', '', '12.22', 'll1.PNG', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'SUPIMAÂ® COTTON CREWNECK SHORT-SLEEVE T-SHIRT', '9', '26', '1', '9', '', '12.22', 'll3.PNG', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'MEN SUPIMAÂ® COTTON V-NECK SHORT SLEEVE T-SHIRT', '9', '26', '1', '9', '', '12.22', 'mm4.PNG', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'SUPIMAÂ® COTTON V-NECK SHORT SLEEVE T-SHIRT', '9', '26', '1', '9', '', '12.22', 'mm3.PNG', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'JACKET WITH SIDE STRIPES', '21', '18', '3', '6', '', '56.22', 'nn1.PNG', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'LIGHTWEIGHT FAUX SUEDE BOMBER JACKET', '21', '18', '3', '6', '', '65.22', 'pp1.PNG', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'WESTERN STUDENT JACKET', '21', '18', '3', '6', '', '49.22', 'oo1.PNG', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'MICRO-PERFORATED PLIMSOLLS SHOE', '17', '27', '3', '6', '', '92.22', 'haha.PNG', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'MICRO-PERFORATED PLIMSMAT SHOE', '17', '27', '3', '6', '', '94.22', 'qq1.PNG', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'MEN WASHED STRIPED LONG-SHOUUKU T-SHIRT', '9', '25', '1', '13', '', '41.22', 'jj1.PNG', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'WASHED STRIPED LONG-SLEEVE T-SHIRT', '9', '25', '1', '13', '<p>Description</p>', '142.22', 'kk1.PNG', 25, '0000-00-00 00:00:00', '2018-03-17 16:30:58'),
(51, 'SPRZ NY EAMES SHORT-SLEEVE GRAPHIC T-SHIRT', '9', '26', '1', '9', 'Description ', '14.22', 'ddd1 (1).PNG', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'KARAKAMI KARACHO SHORT-SLEEVE GRAPHIC T-SHIRT', '9', '26', '1', '10', 'Description ', '14.22', 'fff2 (2).PNG', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '3-STRIPES POWER BACKPACK MEDIUM', '17', '20', '2', '9', '<p>Description</p>', '35.22', 'jjj7 (4).PNG', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'MEN KAWS X PEANUTS SHORT-SLEEVE GRAPHIC T-SHIRT', '9', '26', '1', '9', '<p>MEN KAWS X PEANUTS SHORT-SLEEVE GRAPHIC T-SHIRT</p>', '14.22', 'hhh5 (2).PNG', 9, '0000-00-00 00:00:00', '2018-04-26 10:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `pro_attr_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `size2` int(11) NOT NULL,
  `pro_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`pro_attr_id`, `product_id`, `color`, `size`, `size2`, `pro_qty`) VALUES
(2, 17, 1, 5, 0, 3),
(11, 16, 1, 5, 0, 6),
(12, 16, 2, 5, 0, 7),
(13, 13, 1, 5, 0, 10),
(14, 13, 1, 6, 0, 3),
(15, 13, 1, 13, 0, 4),
(16, 15, 1, 5, 0, 3),
(17, 15, 1, 4, 0, 4),
(18, 15, 1, 6, 0, 3),
(19, 15, 2, 5, 0, 5),
(20, 15, 2, 6, 0, 4),
(21, 34, 1, 5, 0, 3),
(22, 34, 1, 4, 0, 4),
(23, 34, 2, 5, 0, 2),
(24, 34, 24, 6, 0, 2),
(25, 34, 23, 5, 0, 3),
(26, 47, 1, 5, 0, 3),
(27, 47, 2, 5, 0, 4),
(28, 47, 2, 4, 0, 3),
(29, 38, 1, 5, 0, 2),
(30, 38, 2, 5, 0, 3),
(31, 38, 37, 3, 0, 4),
(32, 38, 38, 4, 0, 2),
(33, 38, 8, 5, 0, 1),
(39, 48, 29, 3, 0, 1),
(40, 48, 30, 3, 0, 2),
(41, 48, 31, 4, 0, 1),
(42, 48, 32, 5, 0, 4),
(43, 48, 33, 4, 0, 1),
(44, 49, 1, 5, 0, 2),
(45, 49, 1, 4, 0, 3),
(46, 49, 2, 5, 0, 2),
(47, 49, 38, 5, 0, 3),
(48, 51, 8, 4, 0, 4),
(49, 51, 8, 5, 0, 3),
(50, 51, 33, 5, 0, 3),
(51, 51, 33, 6, 0, 4),
(52, 52, 8, 4, 0, 2),
(53, 52, 8, 5, 0, 9),
(54, 52, 8, 6, 0, 2),
(55, 52, 8, 13, 0, 3),
(56, 54, 1, 0, 0, 14),
(57, 55, 1, 4, 0, 1),
(58, 55, 1, 5, 0, 1),
(59, 55, 1, 6, 0, 1),
(60, 55, 8, 5, 0, 1),
(61, 55, 8, 6, 0, 1),
(62, 55, 8, 13, 0, 1),
(63, 54, 1, 0, 0, 1),
(64, 22, 38, 0, 0, 1),
(65, 21, 1, 0, 0, 1),
(66, 23, 1, 39, 0, 3),
(67, 23, 1, 40, 0, 3),
(68, 23, 1, 41, 0, 2),
(69, 23, 1, 42, 0, 5),
(70, 23, 2, 40, 0, 4),
(71, 23, 2, 43, 0, 5),
(72, 56, 1, 5, 0, 4),
(73, 56, 1, 6, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `purchase_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_id` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `shipping_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `full_name`, `email`, `store_id`, `phone`, `status`, `shipping_type`, `street_address`, `country`, `state`, `city`, `zipcode`, `created_date`, `modified_date`, `shipping_time`) VALUES
(6, 'testing', 'overmidnight12@gmail.com', 0, '095057545', 'register', 'home', 'no(241),aung thiri street,DAWBON TOWNSHIP', 'MYANMAR', 'YANGON', 'YANGON', 12312, '2018-02-09 15:50:11', '0000-00-00 00:00:00', '2018-02-09 15:50:11'),
(7, 'shishi', 'overmidnight12@gmail.com', 0, '0923212121', 'register', 'home', 'bahan,', 'MYANMAR', 'YANGON', 'YANGON', 12311, '2018-02-09 16:17:09', '0000-00-00 00:00:00', '2018-02-09 16:17:09'),
(8, 'Thantnandarzaw', 'overmidnight12@gmail.com', 0, '0979223411', 'register', 'home', 'no(21)B,51st street,Botataung', 'MYANMAR', 'YANGON', 'YANGON', 6421, '2018-02-10 02:21:41', '0000-00-00 00:00:00', '2018-02-10 02:21:41'),
(9, 'toetoe', 'linsandar96@gmail.com', 0, '09432111332', 'register', 'home', '12/B,2nd floor,sanchaung street', 'MYANMAR', 'MON STATE', 'MUDON', 3425, '2018-02-14 17:12:57', '0000-00-00 00:00:00', '2018-02-14 17:12:57'),
(10, 'Ingyin Mhwe', 'ingyin@gmail.com', 0, '09772321331', 'Deliver', 'home', 'no21/B,22street,Tharkayta', 'MYANMAR', 'YANGON', 'YANGON', 3214, '2018-02-23 13:21:16', '2018-03-15 07:25:41', '2018-02-23 13:21:16'),
(11, 'TestingShipping', 'linsandar96@gmail.com', 0, '2434131', 'register', 'home', 'sdafsdafsadf', 'sfsdf', 'safa', 'sddfsa', 0, '2018-03-12 03:59:19', '0000-00-00 00:00:00', '2018-03-12 03:59:19'),
(12, 'hlahaa', 'linsandar96@gmail.com', 0, '2313', 'Shipping', 'home', 'no(21)B,51st street,Botataung', 'MYANMAR', 'YANGON', 'YANGON', 23131, '2018-03-12 06:28:29', '2018-03-15 10:04:15', '2018-03-12 06:28:29'),
(22, 'TTTYYYY', 'linsandar96@gmail.com', 4, '21331412', 'register', 'store', '', '', '', '', 0, '2018-03-12 14:28:22', '2018-03-12 14:28:22', '2018-03-12 14:28:22'),
(23, 'dsafdsa', 'linsandar96@gmail.com', 2, '23322', 'register', 'store', '', '', '', '', 0, '2018-03-12 14:34:13', '2018-03-12 14:34:13', '2018-03-12 14:34:13'),
(24, 'SaungOo', 'saunghninoo@acedatasystems.com', 0, '41412421', 'Deliver', 'home', '21/C,Latha street, Latha Township', 'MYANMAR', 'YANGON', 'YANGON', 2423, '2018-03-13 14:49:46', '2018-04-09 10:49:38', '2018-03-13 14:49:46'),
(25, 'Su Myat', 'sumyat@gmail.com', 0, '423423434', 'Deliver', 'home', '1128, Sanchaung Street, sanchaung Township', 'MYANMAR', 'YANGON', 'YANGON', 13432, '2018-03-17 09:56:41', '2018-04-26 17:41:30', '2018-03-17 09:56:41'),
(26, 'hninoohlaing', 'saunghninoo@gmail.com', 0, '095057545', 'register', 'home', '12/BPS Building, Hlaing Township', 'Myanmar', 'Yangon', 'Yangon', 15332, '2018-08-18 14:09:57', '2018-08-18 14:09:57', '2018-08-18 14:09:57'),
(27, 'zinzintun', 'overmidnight12@gmail.com', 0, '09772843040', 'register', 'home', '22,B, Latha Street', 'Myanmar', 'Yangon', 'Latha', 32421, '2018-09-05 21:16:10', '2018-09-05 21:16:10', '2018-09-05 21:16:10'),
(40, 'PAN ASTHESTIC', 'overmidnight12@gmail.com', 0, '09772843040', 'register', 'home', 'No 8 , ground floor, Coner of Kannar Street and Sin min Street', 'Myanmar', 'Yangon', 'Alone Township', 90001, '2018-09-17 13:05:16', '2018-09-17 13:05:16', '2018-09-17 13:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `sold_out`
--

CREATE TABLE `sold_out` (
  `sold_out_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sold_out`
--

INSERT INTO `sold_out` (`sold_out_id`, `email`, `product_id`, `created_date`) VALUES
(3, 'myothandar@gmail.com', 52, '2018-09-08 02:04:24'),
(4, 'htethtet@gmail.com', 52, '2018-09-08 02:08:16'),
(5, 'suthinzarmaung@gmail.com', 52, '2018-09-10 21:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_ph` text COLLATE utf8_unicode_ci NOT NULL,
  `store_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `store_address`, `store_ph`, `store_country`, `store_state`, `store_city`, `created_date`, `modified_date`) VALUES
(1, 'Kantaw Lay-CapitalA ', '', '', '', '', '', '2018-02-08 10:33:05', '0000-00-00 00:00:00'),
(2, 'Hlen Tan-CapitalA ', '', '', '', '', '', '2018-02-08 10:33:05', '0000-00-00 00:00:00'),
(3, 'Taw Win Center-CapitalA', '', '', '', '', '', '2018-02-08 10:33:05', '0000-00-00 00:00:00'),
(4, 'Junction Square-CapitalA', '', '', '', '', '', '2018-02-08 10:33:05', '0000-00-00 00:00:00'),
(5, 'Myanmar Plaza-CapitalA', '', '', '', '', '', '2018-02-08 10:33:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `sub_name`, `category_id`, `created_date`, `modified_date`) VALUES
(7, 'Oxford', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Flannnel', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Extra Fine Cotton Broad Cloth', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Denim', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Hoodies', 13, '2018-01-16 11:37:02', '0000-00-00 00:00:00'),
(12, 'Pullovers', 13, '2018-01-16 11:37:02', '0000-00-00 00:00:00'),
(13, 'Sweater Pants', 13, '2018-01-16 11:38:32', '0000-00-00 00:00:00'),
(14, 'Active Sweats', 13, '2018-01-16 11:38:32', '0000-00-00 00:00:00'),
(15, 'TIGHT', 20, '2018-01-19 17:25:46', '0000-00-00 00:00:00'),
(16, 'SLIM', 20, '2018-01-19 17:25:46', '0000-00-00 00:00:00'),
(17, 'LOOSE', 20, '2018-01-19 17:27:52', '0000-00-00 00:00:00'),
(18, 'CAUSAL WEAR', 21, '2018-01-19 17:27:52', '0000-00-00 00:00:00'),
(19, 'SPORT', 21, '2018-01-19 17:28:58', '0000-00-00 00:00:00'),
(20, 'Bags&Bagpacks', 17, '2018-01-22 19:45:15', '0000-00-00 00:00:00'),
(21, 'Shoes', 17, '2018-01-22 19:45:15', '0000-00-00 00:00:00'),
(22, 'Belt', 17, '2018-01-22 19:45:15', '0000-00-00 00:00:00'),
(23, 'Watches', 17, '2018-01-22 19:45:15', '0000-00-00 00:00:00'),
(24, 'LINES', 10, '2018-02-13 22:22:29', '0000-00-00 00:00:00'),
(25, 'LONG T-SHIRT', 9, '2018-02-13 22:33:11', '0000-00-00 00:00:00'),
(26, 'SHORT T-SHIRT', 9, '2018-02-13 22:33:11', '0000-00-00 00:00:00'),
(27, 'Sneaker Shoes', 17, '2018-02-13 22:47:17', '0000-00-00 00:00:00'),
(28, 'Smart Shoes', 17, '2018-02-13 22:47:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `email`, `address`, `phone`, `supplier_cover`, `created_date`, `modified_date`) VALUES
(4, 'UNIQUE Co.,Ltd', 'unique@gmail.com', 'Ygn', '09781195374', 'default.png', '2017-08-17 09:54:01', '2017-08-17 09:54:01'),
(5, 'Tap Myanmar Co.,Ltd', 'tapmyanmar@gmail.com', 'Ygn', '01229823', 'default.png', '2017-08-17 09:57:34', '2017-08-17 09:57:34'),
(6, 'Zara Co.,Ltd', 'zara@gmail.com', 'French', '09923424112', 'zara.jpg', '2017-08-17 10:21:05', '2017-08-17 10:21:05'),
(9, 'ACE Data Systems', 'acedatasystems@gmail.com', '', '', 'a (1).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'ACE Plus', 'aceplus@gmail,com', 'MICT PARK Building(5)', '01623921', 'a (3).png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'BLANCO', 'BLANCO@gmail.com', 'Taw win center', '01772291', 'b (1).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'NIKE', 'NIKE@gmail.com', 'ADSA', '092836', 'b (2).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'DIR ACE', '', '', '', 'a (5).png', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_favourite`
--
ALTER TABLE `add_to_favourite`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`attr_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `image_attributes`
--
ALTER TABLE `image_attributes`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`payment_detail_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`pro_attr_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sold_out`
--
ALTER TABLE `sold_out`
  ADD PRIMARY KEY (`sold_out_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_favourite`
--
ALTER TABLE `add_to_favourite`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image_attributes`
--
ALTER TABLE `image_attributes`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `payment_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `pro_attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sold_out`
--
ALTER TABLE `sold_out`
  MODIFY `sold_out_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
