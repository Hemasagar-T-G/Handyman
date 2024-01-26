-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 07:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raj_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'albin', 'a@gmail.com', 'I have some new ideas for the interior designs.'),
(2, 'al bin', 'ain@gmail.com', 'So what is the pricing model for consulting?');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`EMAIL`, `PASSWORD`) VALUES
('albin123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `name` varchar(1111) NOT NULL,
  `email` varchar(1111) NOT NULL,
  `ph` varchar(1111) NOT NULL,
  `address` varchar(1111) NOT NULL,
  `product_id` varchar(1111) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `email`, `ph`, `address`, `product_id`, `status`) VALUES
(12, 'albin', 'a@gmail.com', '900099999', '560015', '4', '20%'),
(17, 'JAYA SURYA', 'JAY@gmail.com', '981732123', '560015', '2', 'STARTED');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Pro_id` int(11) NOT NULL,
  `Pro_Name` varchar(255) NOT NULL,
  `Pro_desc` varchar(255) DEFAULT NULL,
  `Pro_price` int(11) DEFAULT NULL,
  `Pro_img` varchar(255) DEFAULT NULL,
  `category` varchar(1101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Pro_id`, `Pro_Name`, `Pro_desc`, `Pro_price`, `Pro_img`, `category`) VALUES
(2, 'HOUSE MODEL 1', '3BHK 800Sq Feet', 2000000, 'WhatsApp Image 2023-08-22 at 10.46.29.jpeg', 'Architecture Consulting'),
(4, 'HOUSE MODEL 3', '4BHK 1100Sq FEET', 1500000, 'WhatsApp Image 2023-08-22 at 10.46.43.jpeg', 'Architecture Consulting'),
(44, 'HOUSE MODEL 4', '3BHK 800Sq Feet', 2000000, 'WhatsApp Image 2023-08-22 at 19.59.38 (1).jpeg', 'Architecture Consulting'),
(45, 'HOUSE MODEL 5', '4BHK 1100Sq FEET', 2000000, 'WhatsApp Image 2023-08-22 at 19.59.37.jpeg', 'Architecture Consulting'),
(46, 'HOUSE MODEL 6', '6BHK 1500sq Feet', 2500000, 'WhatsApp Image 2023-08-22 at 19.59.38.jpeg', 'Architecture Consulting');

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `id` int(255) NOT NULL,
  `Cement` varchar(1000) NOT NULL,
  `Bricks` varchar(1000) NOT NULL,
  `Steel_Rods` varchar(1000) NOT NULL,
  `Sand` varchar(1000) NOT NULL,
  `grand_total` varchar(1000) NOT NULL,
  `order_id` int(255) NOT NULL,
  `tot_cement` varchar(1000) NOT NULL,
  `tot_sand` varchar(1000) NOT NULL,
  `tot_bricks` varchar(1000) NOT NULL,
  `tot_rods` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quantity`
--

INSERT INTO `quantity` (`id`, `Cement`, `Bricks`, `Steel_Rods`, `Sand`, `grand_total`, `order_id`, `tot_cement`, `tot_sand`, `tot_bricks`, `tot_rods`, `date`) VALUES
(7, '1', '1', '1', '1', '9500', 12, '250', '250', '5000', '4000', '2023-08-26'),
(8, '2', '2', '2', '2', '19000', 12, '500', '500', '10000', '8000', '2023-08-26'),
(9, '2', '3', '1', '1', '19750', 17, '500', '250', '15000', '4000', '2023-08-26'),
(10, '2', '3', '2', '2', '24000', 17, '500', '500', '15000', '8000', '2023-08-26'),
(11, '1', '1', '1', '1', '9550', 12, '300', '250', '5000', '4000', '2023-08-27'),
(12, '1', '1', '1', '1', '9550', 12, '300', '250', '5000', '4000', '2023-08-27'),
(13, '1', '1', '1', '1', '9550', 12, '300', '250', '5000', '4000', '2023-08-27'),
(14, '1', '1', '1', '1', '9550', 12, '300', '250', '5000', '4000', '2023-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `raw_mat_price`
--

CREATE TABLE `raw_mat_price` (
  `id` int(244) NOT NULL,
  `raw_mat` varchar(1000) NOT NULL,
  `raw_price` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raw_mat_price`
--

INSERT INTO `raw_mat_price` (`id`, `raw_mat`, `raw_price`) VALUES
(1, 'Cement', '300'),
(2, 'Sand', '260'),
(3, 'Bricks', '5000'),
(4, 'Steel rodes', '4000');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(10000) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `phone`, `category`, `status`) VALUES
(1, 'albin', 'a@gmail.com', '983247912', 'Architecture Consulting', 'Accepted'),
(2, 'ashwin', 'a@gmail.com', '987394287', 'Architecture Consulting', 'pending'),
(3, 'Snake', 'sna@gmail.com', '918273123', 'Turkey Consulting', 'Accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Pro_id`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raw_mat_price`
--
ALTER TABLE `raw_mat_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `raw_mat_price`
--
ALTER TABLE `raw_mat_price`
  MODIFY `id` int(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
