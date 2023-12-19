
create database customer_db;

use customer_db;

CREATE TABLE `customer` (
  `id` int(11) NOT NULL auto_increment,
  `Name` varchar(100),
  `Address` varchar(100),
  `CustomerNumber` int(100),
  `MeterSerialNumber` int(15),
  PRIMARY KEY  (`id`)
);
customer_db