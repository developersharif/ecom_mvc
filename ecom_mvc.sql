-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2021 at 07:06 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` text NOT NULL,
  `cookie` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(15) DEFAULT NULL,
  `region` varchar(15) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `ip` varchar(32) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `role`, `lname`, `email`, `password`, `cookie`, `phone`, `country`, `region`, `postal_code`, `city`, `ip`, `date`, `status`) VALUES
(8, 'sharif', 'user', NULL, 'developersharif@yahoo.com', '$2y$10$VPpC3wm9CKtm2p.lNFfqIOLNhgp6XescSAtd7AqhXeD5Qvtc3Nn..', '6452a76cd357cfc2d933602c090121809155a59d', '01772352212', NULL, 'dhaka', NULL, 'dhaka', NULL, '2021-01-02 13:47:04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `model` varchar(50) NOT NULL,
  `size` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `vat` int(11) DEFAULT NULL,
  `thumb` varchar(100) NOT NULL,
  `images` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `uid`, `name`, `model`, `size`, `color`, `price`, `vat`, `thumb`, `images`, `description`, `status`, `date`) VALUES
(1, 8, 'head phone', 'model', 'size', 'color', 123, NULL, 'headp.png', 'headp.png', 'description', 1, ''),
(2, 8, 'head phone2', 'model2', 'size2', 'color2', 123, NULL, 'headp.png', 'headp.png', 'description', 1, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
