-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 04:33 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myqueueo_db_asset`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asset`
--

DROP TABLE IF EXISTS `tbl_asset`;
CREATE TABLE IF NOT EXISTS `tbl_asset` (
  `product_serial` varchar(150) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_model` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `product_location` varchar(150) NOT NULL,
  `product_qty` varchar(150) NOT NULL,
  `owner` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issued`
--

DROP TABLE IF EXISTS `tbl_issued`;
CREATE TABLE IF NOT EXISTS `tbl_issued` (
  `product_name` varchar(150) NOT NULL,
  `serial_no` varchar(150) NOT NULL,
  `product_desc` varchar(150) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `issued_by` varchar(150) NOT NULL,
  `issued_date` date NOT NULL,
  `issued_customer` varchar(150) NOT NULL,
  `customer_contact` varchar(300) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `last_modified_by` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nutanix`
--

DROP TABLE IF EXISTS `tbl_nutanix`;
CREATE TABLE IF NOT EXISTS `tbl_nutanix` (
  `ntnx_model` varchar(150) NOT NULL,
  `ntnx_serial` varchar(150) NOT NULL,
  `ntnx_sata` varchar(150) NOT NULL,
  `ntnx_ssd` varchar(150) NOT NULL,
  `ntnx_ram` varchar(150) NOT NULL,
  `ntnx_cpu` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nutanix`
--

INSERT INTO `tbl_nutanix` (`ntnx_model`, `ntnx_serial`, `ntnx_sata`, `ntnx_ssd`, `ntnx_ram`, `ntnx_cpu`) VALUES
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_name` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_name`) VALUES
('nutanix'),
('zebra'),
('brocade'),
('SecureKi'),
('Dell Laptop'),
('Dell Server');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_received`
--

DROP TABLE IF EXISTS `tbl_received`;
CREATE TABLE IF NOT EXISTS `tbl_received` (
  `product_name` varchar(150) NOT NULL,
  `serial_no` varchar(150) NOT NULL,
  `product_desc` varchar(150) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `received_from` varchar(150) NOT NULL,
  `received_date` date NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `item_owner` varchar(150) NOT NULL,
  `last_modified_by` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

DROP TABLE IF EXISTS `tbl_status`;
CREATE TABLE IF NOT EXISTS `tbl_status` (
  `job_status` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`job_status`) VALUES
(''),
('POC START'),
('POC COMPLETED'),
('LOAN'),
('SOLD'),
('NEW ARRIVAL');

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
  `date_registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `name`, `date_registered`) VALUES
('raf', '1', 'raf', '2016-06-12 11:07:09'),
('yie', '1', 'yie', '2016-06-12 11:07:23'),
('engineer3', '1', 'Engineer3', '2016-06-12 11:07:39'),
('Izwan', 'P@ssw0rd', 'Izwan', '2016-06-16 00:00:00'),
('Jafni', 'P@ssw0rd', 'Jafni', '2016-06-16 00:00:00'),
('Razzi', 'P@ssw0rd', 'Razzi', '2016-06-16 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
