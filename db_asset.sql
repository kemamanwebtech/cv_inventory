-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 01:29 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_asset`
--
CREATE DATABASE IF NOT EXISTS `db_asset` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_asset`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asset`
--

DROP TABLE IF EXISTS `tbl_asset`;
CREATE TABLE IF NOT EXISTS `tbl_asset` (
  `product_serial` varchar(150) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_model` varchar(150) NOT NULL,
  `product_remarks` varchar(150) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_asset`
--

INSERT INTO `tbl_asset` (`product_serial`, `product_name`, `product_model`, `product_remarks`, `date`) VALUES
('HTYJ232', 'dell', 'latitude 3440', 'Office laptop Razzi', '2016-06-11 22:14:16'),
('JN19532', 'dell', 'Office Laptop', 'Staff Usage-razzi', '2016-06-12 00:06:15'),
('JY6MD32', 'dell', 'Office Laptop', 'Staff Usage-fariz', '2016-06-12 00:08:18'),
('NU1234', 'nutanix', 'Nutanix12', 'Meh Nutanix', '2016-06-12 03:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issued`
--

DROP TABLE IF EXISTS `tbl_issued`;
CREATE TABLE IF NOT EXISTS `tbl_issued` (
  `product_name` varchar(150) NOT NULL,
  `serial_no` varchar(150) NOT NULL,
  `product_desc` varchar(150) NOT NULL,
  `unit` varchar(150) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `issued_by` varchar(150) NOT NULL,
  `issued_date` date NOT NULL,
  `issued_customer` varchar(150) NOT NULL,
  `customer_contact` varchar(300) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `work_order` varchar(150) NOT NULL,
  `param1` varchar(150) NOT NULL,
  `param2` varchar(150) NOT NULL,
  `param3` varchar(150) NOT NULL,
  `param4` varchar(150) NOT NULL,
  `param5` varchar(150) NOT NULL,
  `param6` varchar(150) NOT NULL,
  `param7` varchar(150) NOT NULL,
  `last_modified_by` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_issued`
--

INSERT INTO `tbl_issued` (`product_name`, `serial_no`, `product_desc`, `unit`, `quantity`, `issued_by`, `issued_date`, `issued_customer`, `customer_contact`, `remarks`, `work_order`, `param1`, `param2`, `param3`, `param4`, `param5`, `param6`, `param7`, `last_modified_by`) VALUES
('Kedai Dobi', '21212', 'Kedai Dobi Bukit Lampu', '1', '23', 'raf', '2016-06-01', 'Google Inc', '999', 'Mahal', '1', 'Mahal', 'Mahal', 'Mahal', 'Mahal', 'Mahal', 'Mahal', 'Mahal', 'Mahal'),
('nutanix', 'KL8989', 'Kedai Mamak', '1', '34', 'raf', '2016-02-06', 'Dell Inc', '999', 'Boleh Beli', '1', 'Murah', 'Murah', 'Murah', 'Murah', 'Murah', 'Murah', 'Murah', 'raf'),
('dell', 'Hn122', 'Lenovo ', '1', '22', 'raf', '2016-10-06', 'Dell Inc', '999', 'Still OK', '1', 'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'Murah', 'raf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_received`
--

DROP TABLE IF EXISTS `tbl_received`;
CREATE TABLE IF NOT EXISTS `tbl_received` (
  `product_name` varchar(150) NOT NULL,
  `serial_no` varchar(150) NOT NULL,
  `product_desc` varchar(150) NOT NULL,
  `unit` varchar(150) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `received_from` varchar(150) NOT NULL,
  `received_date` date NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `item_owner` varchar(150) NOT NULL,
  `work_order` varchar(150) NOT NULL,
  `param1` varchar(150) NOT NULL,
  `param2` varchar(150) NOT NULL,
  `param3` varchar(150) NOT NULL,
  `param4` varchar(150) NOT NULL,
  `param5` varchar(150) NOT NULL,
  `param6` varchar(150) NOT NULL,
  `param7` varchar(150) NOT NULL,
  `last_modified_by` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_received`
--

INSERT INTO `tbl_received` (`product_name`, `serial_no`, `product_desc`, `unit`, `quantity`, `received_from`, `received_date`, `remarks`, `item_owner`, `work_order`, `param1`, `param2`, `param3`, `param4`, `param5`, `param6`, `param7`, `last_modified_by`) VALUES
('Dell Laptop', 'hn22', 'Dell Laptop for office use', '1', '10', 'Dell Sdn Bhd', '2016-06-01', 'For office use', 'raf', '1', 'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'param7', 'raf'),
('dell', 'Hn122', 'Lenovo ', '1', '22', 'Lenovo Company', '1970-01-01', 'Still OK', 'raf', '1', 'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'param7', 'raf'),
('dell', 'AS2233', 'Kedai Kopi', '1', '22', 'Google Inc', '1970-01-01', 'Still OK', 'raf', '1', 'Besar', 'Bersih', 'Murah', 'Maju macam Kedai Mamak', 'Murah', 'Murah', 'Mari Beli', 'raf'),
('dell', 'AS2233', 'Kedai Kopi', '1', '22', 'Google Inc', '1970-01-01', 'Still OK', 'raf', '1', 'Besar', 'Bersih', 'Murah', 'Maju macam Kedai Mamak', 'Murah', 'Murah', 'Mari Beli', 'raf'),
('dell', 'AS2233', 'Kedai Kopi', '1', '22', 'Google Inc', '1970-01-01', 'Still OK', 'raf', '1', 'Besar', 'Bersih', 'Murah', 'Maju macam Kedai Mamak', 'Murah', 'Murah', 'Mari Beli', 'raf'),
('dell', 'AS2233', 'Kedai Kopi', '1', '22', 'Google Inc', '1970-01-01', 'Still OK', 'raf', '1', 'Besar', 'Bersih', 'Murah', 'Maju macam Kedai Mamak', 'Murah', 'Murah', 'Mari Beli', 'raf'),
('dell', 'AS2233', 'Kedai Kopi', '1', '22', 'Google Inc', '1970-01-01', 'Still OK', 'raf', '1', 'Besar', 'Bersih', 'Murah', 'Maju macam Kedai Mamak', 'Murah', 'Murah', 'Mari Beli', 'raf'),
('dell', '', '', '', '', '', '1970-01-01', '', 'raf', '', '', '', '', '', '', '', '', 'raf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

DROP TABLE IF EXISTS `tbl_stock`;
CREATE TABLE IF NOT EXISTS `tbl_stock` (
  `stock_serial` varchar(150) NOT NULL,
  `stock_model` varchar(150) NOT NULL,
  `stock_product` varchar(150) NOT NULL,
  `stock_qty` varchar(150) NOT NULL,
  `stock_location` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `name`, `date_registered`) VALUES
('raf', '1', 'raf', '2016-06-12 11:07:09'),
('yie', '1', 'yie', '2016-06-12 11:07:23'),
('engineer3', '1', 'Engineer3', '2016-06-12 11:07:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
