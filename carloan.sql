-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 08:57 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `carloan`
--

CREATE TABLE `carloan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cartype` varchar(20) DEFAULT NULL,
  `precar` varchar(20) DEFAULT NULL,
  `currenlive` varchar(20) DEFAULT NULL,
  `comname` varchar(40) DEFAULT NULL,
  `grosssalary` varchar(10) DEFAULT NULL,
  `salaryaccount` varchar(10) DEFAULT NULL,
  `joiningdate` varchar(10) DEFAULT NULL,
  `workexperience` int(11) DEFAULT NULL,
  `movecity` varchar(30) DEFAULT NULL,
  `movecurrent` varchar(30) DEFAULT NULL,
  `age` varchar(30) DEFAULT NULL,
  `Emi` int(11) DEFAULT '-1',
  `monthlyincentive` int(11) DEFAULT '-1',
  `residencetype` varchar(50) DEFAULT NULL,
  `savetype` varchar(50) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `createdAt` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carloan`
--

INSERT INTO `carloan` (`id`, `name`, `phone`, `email`, `cartype`, `precar`, `currenlive`, `comname`, `grosssalary`, `salaryaccount`, `joiningdate`, `workexperience`, `movecity`, `movecurrent`, `age`, `Emi`, `monthlyincentive`, `residencetype`, `savetype`, `cid`, `createdAt`) VALUES
(47, 'Kulshreshtha Goyal', '9414729073', '', 'New Car', 'Maruti Alto 800', 'Banglore', 'facebook', '234888', 'HDFC', '2018-06-01', 1, '2018-06-15', '2018-06-23', '2018-06-14', NULL, NULL, 'Hostel', 'Draft', 2, '1530169325'),
(48, 'Naveen Satyarthi', '9414729073', '', 'New Car', 'Maruti Alto 800', 'New Delhi', 'girnarsoft', '2300000', 'ICICI', '2018-06-07', 1, '2018-06-14', '2018-06-30', '2018-06-22', NULL, NULL, 'Rented - staying alone', 'Draft', 2, '1530169961');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carloan`
--
ALTER TABLE `carloan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carloan`
--
ALTER TABLE `carloan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carloan`
--
ALTER TABLE `carloan`
  ADD CONSTRAINT `carloan_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
