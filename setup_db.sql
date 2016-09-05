-- Run this file in MySQL with root to create database and tables

-- create database and use it
create database myqueueo_db_main;
use myqueueo_db_main;

-- create table tbl_asset
CREATE TABLE IF NOT EXISTS `tbl_asset` (
  `product_owner` varchar(150) NOT NULL,
  `product_serial` varchar(150) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_model` varchar(150) NOT NULL,
  `product_remarks` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_asset` (`product_owner`,`product_serial`, `product_name`, `product_model`, `product_remarks`, `date`) VALUES
('Cloud Vision', 'dell_1234', 'Dell Laptop', 'Dell Latitude 200', 'For Office Use', '2016-06-12 18:53:43'),
('Cloud Vision','HTYJ232', 'dell', 'latitude 3440', 'Office laptop Razzi', '2016-06-11 14:14:16'),
('Cloud Vision','JN19532', 'dell', 'Office Laptop', 'Staff Usage-razzi', '2016-06-11 16:06:15'),
('Cloud Vision','JY6MD32', 'dell', 'Office Laptop', 'Staff Usage-fariz', '2016-06-11 16:08:18'),
('Cloud Vision','NU1234', 'nutanix', 'Nutanix12', 'Meh Nutanix', '2016-06-11 19:16:14');




-- create table tbl_issued
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

INSERT INTO `tbl_issued` (`product_name`, `serial_no`, `product_desc`, `unit`, `quantity`, `issued_by`, `issued_date`, `issued_customer`, `customer_contact`, `remarks`, `work_order`, `param1`, `param2`, `param3`, `param4`, `param5`, `param6`, `param7`, `last_modified_by`) VALUES
('Kedai Dobi', '21212', 'Kedai Dobi Bukit Lampu', '1', '23', 'raf', '2016-06-01', 'Google Inc', '999', 'Mahal', '1', 'Mahal', 'Mahal', 'Mahal', 'Mahal', 'Mahal', 'Mahal', 'Mahal', 'Mahal'),
('nutanix', 'KL8989', 'Kedai Mamak', '1', '34', 'raf', '2016-02-06', 'Dell Inc', '999', 'Boleh Beli', '1', 'Murah', 'Murah', 'Murah', 'Murah', 'Murah', 'Murah', 'Murah', 'raf'),
('dell', 'Hn122', 'Lenovo ', '1', '22', 'raf', '2016-10-06', 'Dell Inc', '999', 'Still OK', '1', 'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'Murah', 'raf'),
('Dell Laptop', 'gdfgdf', 'dfgd', 'fgdfg', 'dfgdf', 'raf', '2016-08-06', 'dfgdfg', 'dfgdf', 'gdfgdf', 'dfgdfg', '435345', '34534', '534534', '535345', '345345', '34534', '535345', 'raf'),
('Dell Laptop', '', '', '', '', 'raf', '1969-12-31', '', '', '', '', '', '', '', '', '', '', '', 'raf');



-- create table tbl_received
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

INSERT INTO `tbl_received` (`product_name`, `serial_no`, `product_desc`, `unit`, `quantity`, `received_from`, `received_date`, `remarks`, `item_owner`, `work_order`, `param1`, `param2`, `param3`, `param4`, `param5`, `param6`, `param7`, `last_modified_by`) VALUES
('Dell Laptop', 'hn22', 'Dell Laptop for office use', '1', '10', 'Dell Sdn Bhd', '2016-06-01', 'For office use', 'raf', '1', 'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'param7', 'raf'),
('dell', 'Hn122', 'Lenovo ', '1', '22', 'Lenovo Company', '1970-01-01', 'Still OK', 'raf', '1', 'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'param7', 'raf'),
('dell', 'AS2233', 'Kedai Kopi', '1', '22', 'Google Inc', '1970-01-01', 'Still OK', 'raf', '1', 'Besar', 'Bersih', 'Murah', 'Maju macam Kedai Mamak', 'Murah', 'Murah', 'Mari Beli', 'raf'),
('dell', 'AS2233', 'Kedai Kopi', '1', '22', 'Google Inc', '1970-01-01', 'Still OK', 'raf', '1', 'Besar', 'Bersih', 'Murah', 'Maju macam Kedai Mamak', 'Murah', 'Murah', 'Mari Beli', 'raf'),
('dell', 'AS2233', 'Kedai Kopi', '1', '22', 'Google Inc', '1970-01-01', 'Still OK', 'raf', '1', 'Besar', 'Bersih', 'Murah', 'Maju macam Kedai Mamak', 'Murah', 'Murah', 'Mari Beli', 'raf'),
('dell', 'AS2233', 'Kedai Kopi', '1', '22', 'Google Inc', '1970-01-01', 'Still OK', 'raf', '1', 'Besar', 'Bersih', 'Murah', 'Maju macam Kedai Mamak', 'Murah', 'Murah', 'Mari Beli', 'raf'),
('dell', 'AS2233', 'Kedai Kopi', '1', '22', 'Google Inc', '1970-01-01', 'Still OK', 'raf', '1', 'Besar', 'Bersih', 'Murah', 'Maju macam Kedai Mamak', 'Murah', 'Murah', 'Mari Beli', 'raf'),
('dell', '', '', '', '', '', '1970-01-01', '', 'raf', '', '', '', '', '', '', '', '', 'raf'),
('Dell Laptop', 'q', '1', '1', '1', '1', '1969-12-31', '1', 'raf', '1', '1', '1', '1', '1', '1', '1', '1', 'raf'),
('Dell Laptop', 'q', '1', '1', '1', '1', '1969-12-31', '1', 'raf', '1', '1', '1', '1', '1', '1', '1', '1', 'raf'),
('Dell Laptop', 'dawda', 'asdas', 'asda', 'asdad', 'asda', '2016-01-06', 'asdasd', 'raf', 'asdas', 'asdas', 'asdas', 'dasdas', 'dasd', 'asdas', 'dad', 'asdas', 'raf'),
('nutanix', 'HTYJ232', 'model', '1', '1', '1', '1969-12-31', '1', 'raf', '1', '1', '1', '1', '1', '1', '1', '1', 'yie'),
('Dell Laptop', '', '', '', '', '', '1969-12-31', '', 'raf', '', '', '', '', '', '', '', '', 'raf'),
('Dell Laptop', '', '', '', '', '', '1969-12-31', '', 'raf', '', '', '', '', '', '', '', '', 'raf'),
('Dell Laptop', '', '', '', '', '', '1969-12-31', '', 'raf', '', '', '', '', '', '', '', '', 'raf'),
('nutanix', '', '', '', '', '', '1969-12-31', '', 'raf', '', '', '', '', '', '', '', '', 'yie');



-- create table tbl_stock
CREATE TABLE IF NOT EXISTS `tbl_stock` (
  `stock_serial` varchar(150) NOT NULL,
  `stock_model` varchar(150) NOT NULL,
  `stock_product` varchar(150) NOT NULL,
  `stock_qty` varchar(150) NOT NULL,
  `stock_location` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `date_registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- create table tbl_user
INSERT INTO `tbl_user` (`username`, `password`, `name`, `date_registered`) VALUES
('raf', '1', 'raf', '2016-06-12 11:07:09'),
('yie', '1', 'yie', '2016-06-12 11:07:23'),
('engineer3', '1', 'Engineer3', '2016-06-12 11:07:39');