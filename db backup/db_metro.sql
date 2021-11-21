-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 04:24 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_metro`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `id` int(255) NOT NULL,
  `aid` varchar(23) NOT NULL,
  `pid` varchar(23) NOT NULL,
  `vehicleRegNum` varchar(30) NOT NULL,
  `vehicleColor` varchar(15) NOT NULL,
  `streetAddress` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `appointmentDate` date NOT NULL,
  `appointmentTime` varchar(18) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `aid`, `pid`, `vehicleRegNum`, `vehicleColor`, `streetAddress`, `city`, `appointmentDate`, `appointmentTime`, `firstName`, `lastName`, `email`, `phone`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '5c33bc247c0cb1.18605998', '5bec1g53832290.39083839', 'arg-3655', 'black', 'melbourne26', 'Melbourne', '2019-01-10', '9:00am to 11:00am', 'moin', 'khan', 'melissiajbrown@mail.ru', '0400000000', 0, '2019-01-07 21:52:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '5c33bc9e4f08e9.03339363', '5bec1b53832290.36683850', 'gtr3-96', 'red', 'melbourne26', 'Melbourne', '2019-01-18', '10:00am to 12:00pm', 'kamal', 'khan', 'voter@shaharakhatun.com', '0400000000', 0, '2019-01-07 21:54:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '5c33c1a3791472.86879912', '5c33cfd48fc672.60976957', 'ghy-6958', 'black', 'melbourne26', 'Melbourne', '2019-01-18', '9:30am to 11:30am', 'kamal', 'khan', 'voter@shaharakhatun.com', '0400000000', 0, '2019-01-07 22:16:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '5c33d01ad126b9.54366242', '5c33cfd48fc672.60976957', 'dkjkf-38748', 'green', 'nai', 'Melbourne', '2019-01-12', '10:30am to 12:30pm', 'robi', 'bhai', 'robi@gmail.com', '0400000000', 0, '2019-01-07 23:18:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '5c5edd57c14852.05843626', '5bec1b53832290.36083836', 'arg-2569', 'black', 'mirpur', 'Melbourne', '2019-09-02', '10:30am to 12:30pm', 'moin', 'khan', 'monin@gmail.com', '0400000000', 0, '2019-02-09 15:01:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '5c64551fd52201.62965197', '5bec6b53832270.39083835', 'h569-985', 'pink', 'dhaka', 'Melbourne', '2019-02-14', '10:30am to 12:30pm', 'Sakib', 'Khan', 'sakib@gmail.com', '0400000025', 0, '2019-02-13 18:34:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '5c645939842be9.11673161', '5c33cfd48fc672.60976957', 'arg-2569', 'black', 'melbourne26', 'Melbourne', '2019-02-14', '9:30am to 11:30am', 'kamal', 'khan', 'abishar14@gmail.com', '0400000000', 0, '2019-02-13 18:51:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batteries`
--

CREATE TABLE `tbl_batteries` (
  `id` int(255) NOT NULL,
  `uId` varchar(23) NOT NULL,
  `vehicleMake` varchar(30) NOT NULL,
  `vehicleModel` varchar(30) NOT NULL,
  `vehicleYear` varchar(12) NOT NULL,
  `vehicleVariant` varchar(50) NOT NULL,
  `vehicleType` varchar(25) NOT NULL,
  `ccaRating` varchar(4) NOT NULL,
  `partNumber` varchar(6) NOT NULL,
  `warranty` int(3) NOT NULL,
  `price` varchar(10) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_batteries`
--

INSERT INTO `tbl_batteries` (`id`, `uId`, `vehicleMake`, `vehicleModel`, `vehicleYear`, `vehicleVariant`, `vehicleType`, `ccaRating`, `partNumber`, `warranty`, `price`, `comment`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '5bec1b53832290.39093836', 'Alfa Romeo', '75', '1986 to 1992', '2.5, 3.0, Petrol', 'Extra Heavy Duty', '600', '3554', 2, '250', 'nai', 1, '2019-01-05 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '5bec6b53832270.39083835', 'Alfa Romeo', '75', '1986 to 1992', '2.5, 3.0, Petrol', 'AGM', '640', '5526', 2, '399', 'na', 1, '2019-01-04 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '5bec1g53832290.39083839', 'ALFA ROMEO', '90', '1985 to 1988', 'ALL', 'Extra Heavy Duty', '530', '5344', 2, '203', 'na', 1, '2019-01-03 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '5bec1b53832290.36683850', 'ALFA ROMEO', '90', '1985 to 1988', 'ALL', 'Premium', '500', '3552', 3, '247', '', 1, '2019-01-04 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '5hec1b8382290.36083836', 'ARMSTRONG SIDDELEY', ' STAR SAPPHIRE', '1960', 'all', 'Extra Heavy Duty', '720', '4503', 2, '237', '', 1, '2019-01-04 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '5c33cfd48fc672.60976957', 'alfa romeo', '33', '1984 to 1992', 'all', 'Extra Heavy Duty', '600', '3372', 2, '203', 'na', 1, '2019-01-07 23:16:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '5c64d9da9d0dd3.67755269', 'alfa romeo', '33', '1984 to 1992', 'Petrol', 'Heavy Duty', '650', '3265', 1, '256', 'bolbo na', 1, '2019-02-14 04:00:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_batteries`
--
ALTER TABLE `tbl_batteries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_batteries`
--
ALTER TABLE `tbl_batteries`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
