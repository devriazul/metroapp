-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 02:10 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saifelif_metro`
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
  `appointmentTime` varchar(17) NOT NULL,
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
(1, '5c33bc247c0cb1.18605998', '5bec1b53832290.39083836', 'arg-3655', 'black', 'melbourne26', 'Melbourne', '2019-01-10', '9:00am to 11:00am', 'moin', 'khan', 'melissiajbrown@mail.ru', '0400000000', 0, '2019-01-07 21:52:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '5c33bc9e4f08e9.03339363', '5hec1b83832290.36083836', 'gtr3-96', 'red', 'melbourne26', 'Melbourne', '2019-01-18', '10:00am to 12:00p', 'kamal', 'khan', 'voter@shaharakhatun.com', '0400000000', 0, '2019-01-07 21:54:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '5c33c1a3791472.86879912', '5hec1b83832290.36083836', 'ghy-6958', 'black', 'melbourne26', 'Melbourne', '2019-01-18', '9:30am to 11:30am', 'kamal', 'khan', 'voter@shaharakhatun.com', '0400000000', 0, '2019-01-07 22:16:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '5c33d01ad126b9.54366242', '5c33cfd48fc672.60976957', 'dkjkf-38748', 'green', 'nai', 'Melbourne', '2019-01-12', '10:30am to 12:30p', 'robi', 'bhai', 'robi@gmail.com', '0400000000', 0, '2019-01-07 23:18:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '5c33ddde9ddb16.29380194', '5c33d52f400996.03362294', 'joy', 'blue', 'dhaka, bd', 'Melbourne', '2019-01-16', '10:30am to 12:30p', 'joy', 'ganguly', 'joy@gmail.com', '0400000000', 0, '2019-01-07 18:16:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '5c6a9a1aaa95d0.45825885', '5bec1b53832290.36083836', 'arg-3698', 'black', '24 ,shom', 'Melbourne', '2022-02-02', '9:00am to 11:00am', 'nai', 'nai', 'nai@gmail.com', '0400000000', 0, '2019-02-18 12:42:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '5c6a9a85008851.99872627', '5bec1b53832290.36083836', 'arg-3698', 'black', '24 ,shom', 'Melbourne', '2022-02-02', '9:00am to 11:00am', 'nai', 'nai', 'nai@gmail.com', '0400000000', 0, '2019-02-18 12:44:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '5c6a9aa0657708.06564966', '5bec1b53832290.36083836', 'arg-3698', 'black', '24 ,shom', 'Melbourne', '2022-02-02', '9:00am to 11:00am', 'nai', 'nai', 'nai@gmail.com', '0400000000', 0, '2019-02-18 12:44:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '5c6a9aa45dd823.66032594', '5bec1b53832290.36083836', 'arg-3698', 'black', '24 ,shom', 'Melbourne', '2022-02-02', '9:00am to 11:00am', 'nai', 'nai', 'nai@gmail.com', '0400000000', 0, '2019-02-18 12:44:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '5c6a9c42dace01.13715221', '5bec1b53832290.36083836', 'arg-3698', 'black', '24 ,shom', 'Melbourne', '2022-02-02', '9:00am to 11:00am', 'nai', 'nai', 'nai@gmail.com', '0400000000', 0, '2019-02-18 12:51:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '5c6a9c8b042e80.21644473', '5bec1b53832290.36083836', 'arg-3698', 'black', '24 ,shom', 'Melbourne', '2022-02-02', '9:00am to 11:00am', 'nai', 'nai', 'nai@gmail.com', '0400000000', 0, '2019-02-18 12:52:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '5c6a9e1aad32c0.34139754', '5bec1b53832290.39083836', 'ere', 'reer', 'rer', 'Melbourne', '2018-12-31', '9:00am to 11:00am', 'ere', 'erer', 'er@gakl.com', '046477979', 0, '2019-02-18 12:59:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '5c6a9e35d89d11.61147413', '5bec1b53832290.39083836', 'ere', 'reer', 'rer', 'Melbourne', '2018-12-31', '9:00am to 11:00am', 'ere', 'erer', 'er@gakl.com', '046477979', 0, '2019-02-18 12:59:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, '5bec1b53832290.39083836', 'Alfa Romeo', '75', '1986 to 1992', '2.5, 3.0, Petrol', 'Extra Heavy Duty', '600', '3554', 2, '250', 'nai', 1, '2019-01-05 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '5bec6b53832290.39083835', 'Alfa Romeo', '75', '1986 to 1992', '2.5, 3.0, Petrol', 'AGM', '640', '5526', 2, '399', 'na', 1, '2019-01-04 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '5bec1g53832290.39083839', 'ALFA ROMEO', '90', '1985 to 1988', 'ALL', 'Extra Heavy Duty', '530', '5344', 2, '203', 'na', 1, '2019-01-03 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '5bec1b53832290.36083836', 'ALFA ROMEO', '90', '1985 to 1988', 'ALL', 'Premium', '500', '3552', 3, '247', '', 1, '2019-01-04 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '5hec1b83832290.36083836', 'ARMSTRONG SIDDELEY', ' STAR SAPPHIRE', '1960', 'all', 'Extra Heavy Duty', '720', '4503', 2, '237', '', 1, '2019-01-04 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '5c33cfd48fc672.60976957', 'alfa romeo', '33', '1984 to 1992', 'all', 'Extra Heavy Duty', '600', '3372', 2, '203', 'na', 1, '2019-01-07 23:16:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '5c33d52f400996.03362294', 'alfa romeo', '147', '2001 to 2005', '2.0, Petrol', 'Premium', '900', '3662', 3, '262', 'na', 1, '2019-01-07 17:39:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '5c695e0c38feb5.67883335', 'alfa romio test', 'test model', '2025', 'test', 'Extra Heavy Duty', '', '', 4, '259', '', 1, '2019-02-17 08:13:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '5c695f6d4d1708.72917405', 'test 2', 'dhur', '2019', 'valo lage na', 'Heavy Duty', '', '', 1, '269', '', 1, '2019-02-17 08:19:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '5c69600198eef3.30038718', 'dhur', 'valo lage na2025', 'all', 'nai', 'Heavy Duty', '', '', 2, '256', '', 1, '2019-02-17 08:22:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(255) NOT NULL,
  `cid` varchar(23) NOT NULL,
  `oid` varchar(23) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `streetAddress` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(255) NOT NULL,
  `oid` varchar(23) NOT NULL,
  `cid` varchar(23) NOT NULL,
  `pid` varchar(23) NOT NULL,
  `vehicleMake` varchar(30) NOT NULL,
  `vehicleModel` varchar(30) NOT NULL,
  `vehicleYear` varchar(12) NOT NULL,
  `vehicleVariant` varchar(50) NOT NULL,
  `vehicleType` varchar(25) NOT NULL,
  `ccaRating` varchar(4) NOT NULL,
  `partNumber` varchar(6) NOT NULL,
  `warranty` int(3) NOT NULL,
  `price` varchar(10) NOT NULL,
  `vehicleRegNum` varchar(30) NOT NULL,
  `vehicleColor` varchar(15) NOT NULL,
  `streetAddress` varchar(40) NOT NULL,
  `appointmentDate` date NOT NULL,
  `appointmentTime` varchar(17) NOT NULL,
  `city` varchar(20) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_batteries`
--
ALTER TABLE `tbl_batteries`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
