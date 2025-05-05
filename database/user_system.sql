-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2025 at 04:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(20) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `password`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_mst`
--

CREATE TABLE `cart_mst` (
  `cart_id` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `model_id` varchar(30) NOT NULL,
  `oder_st` varchar(30) NOT NULL,
  `Delivery_date` varchar(30) NOT NULL,
  `pyament` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_mst`
--

INSERT INTO `cart_mst` (`cart_id`, `id`, `model_id`, `oder_st`, `Delivery_date`, `pyament`) VALUES
(16, 5, '3', '1', '02-18-2025', 0),
(21, 5, '12', '1', '02-25-2025', 1),
(22, 5, '5', '1', '02-25-2025', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `b_name` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`b_name`, `img`) VALUES
('iphone', 'logo/apple.png'),
('MI', 'logo/mi.png'),
('motorola', 'logo/motorola.png'),
('ONE+', 'logo/oneplus.png\r\n'),
('oppo', 'logo/oppo.png'),
('realme', 'logo/realme.png\r\n'),
('samsung', 'logo/samsung.png\r\n'),
('vivo', 'logo/vivo.png');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_mst`
--

CREATE TABLE `mobile_mst` (
  `model_id` int(11) NOT NULL,
  `b_name` varchar(250) NOT NULL,
  `model_name` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `rem` int(11) NOT NULL,
  `rom` int(11) NOT NULL,
  `display_size` varchar(250) NOT NULL,
  `back_camera` varchar(250) NOT NULL,
  `front_camera` varchar(250) NOT NULL,
  `battery` int(11) NOT NULL,
  `processor` varchar(250) NOT NULL,
  `warranty` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `offer` int(11) NOT NULL,
  `ratings` int(11) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile_mst`
--

INSERT INTO `mobile_mst` (`model_id`, `b_name`, `model_name`, `color`, `rem`, `rom`, `display_size`, `back_camera`, `front_camera`, `battery`, `processor`, `warranty`, `price`, `offer`, `ratings`, `img`) VALUES
(1, 'realme', 'NARZO 10', 'blue', 4, 128, '6.7', '50 + 18', '16', 5000, 'Octa core 2.2', '1 year', 13000, 10, 5, 'realmenarzo10(4).png'),
(2, 'realme', 'NARZO 10', 'blue', 6, 128, '6.7', '50 + 18', '16', 5000, 'Octa core 2.2', '1 year', 13000, 10, 5, 'realmenarzo10.png'),
(3, 'MI', '5A', 'blue', 4, 128, '6.7', '50 + 18', '16', 5000, 'Octa core 2.2', '1 year', 13000, 10, 5, 'mi.png'),
(4, 'vivo', 't3x', 'blue', 8, 256, '17.22', '50', '16', 5000, 'Octa core 2.2', '1 year', 13001, 10, 5, 't3.png'),
(5, 'iphone', '16promax', 'golden', 12, 256, '17.53 cm (6.9 inch) Super Retina XDR Display', '48mp back cameras', '48MP + 48MP + 12MP | 12MP Front Camera', 6000, 'A18 Pro Chip, 6 Core Processor Processor', '1 year warranty for phone and 1 year warranty for in Box Accessories.', 164900, 7, 5, 'iphone16promax.png'),
(6, 'iphone', '16', 'black', 6, 128, '15.49 cm (6.1 inch) Super Retina XDR Display', '48MP ', '12MP ', 6500, 'A18 Chip, 6 Core Processor Processor', '1 year warranty for phone and 1 year warranty for in Box Accessories.', 79900, 5, 5, 'iphone16.png'),
(7, 'iphone', '14', 'white', 12, 512, '15.49 cm (6.1 inch) Super Retina XDR Display', '12MP ', '12MP Front Camera', 6000, 'A15 Bionic Chip, 6 Core Processor Processor', '1 year warranty for phone and 1 year warranty for in Box Accessories.', 59900, 5, 4, 'iphone14.png'),
(8, 'iphone', '15', 'green', 8, 256, '15.49 cm (6.1 inch) Super Retina XDR Display', '48MP + 12MP ', '12MP Front Camera', 5000, 'A16 Bionic Chip, 6 Core Processor Processor', '1 year warranty for phone and 1 year warranty for in Box Accessories', 69900, 9, 5, 'iphone15.png'),
(12, 'motorola', 'Razr 50 Ultra ', 'red', 12, 512, '17.53 cm (6.9 inch) Full HD+ Display', '50MP + 50MP', '12MP', 4000, 'Octa-core Processor', 'The Motorola Razr 50 Ultra Spring Green comes with a 10-day replacement warranty. If you receive a damaged, defective, or incorrect product, you can request a replacement within 10 days of delivery 1 year warranty', 119000, 10, 5, 'motorola.png'),
(13, 'samsung', 's23ultra', 'white', 12, 512, '17.27 cm (6.8 inch) Quad HD+ Display', '200MP + 10MP + 12MP + 10MP ', '12MP Front Camera', 5000, 'Qualcomm Snapdragon 8 Gen 2 Processor', '1 Year Manufacturer Warranty for Device and 6 Months Manufacturer Warranty for In-Box Accessories', 161999, 5, 5, 'samsung.png'),
(14, 'oppo', 'reno10 5g', 'Glossy Purple', 12, 256, '17.02 cm (6.7 inch) Full HD+ Display', '50MP + 32MP + 8MP ', '32MP Front Camera', 4600, 'Snapdragon 778G 5G Processor', '1 Year Manufacturer Warranty for Phone and 6 Months Warranty for In the Box Accessories', 44999, 7, 4, 'oppo.png\r\n'),
(15, 'realme', '11 pro ', 'Oasis Green', 8, 128, '17.02 cm (6.7 inch) Full HD+ Display', '100MP (OIS) + 2MP ', '16MP Front Camera', 5000, 'Dimensity 7050 Processor', '1 Year Manufacturer Warranty for Device and 6 Months Manufacturer Warranty for In-Box Accessories', 25999, 2, 5, 'realme.png'),
(16, 'samsung', 'A34', 'Awesome Violet', 8, 128, '16.76 cm (6.6 inch) Full HD+ Display', '48MP + 8MP + 5MP ', '13MP Front Camera', 5000, 'Dimensity 1080, Octa Core Processor', '1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories', 35499, 8, 4, 'samsungA34.png'),
(17, 'samsung', 'A23 5g', 'Orange', 6, 128, '16.76 cm (6.6 inch) Full HD+ Display', '50MP + 5MP ', '8MP Front Camera', 5000, 'Qualcomm Snapdragon 695 (SM6375) Processor', '1 Year Manufacturer Warranty for Device and 6 Months Manufacturer Warranty for In-Box Accessories', 28990, 13, 4, 'samsungA235g.png'),
(18, 'samsung', 'A15 5g', 'Light Blue', 6, 128, '16.51 cm (6.5 inch) Full HD+ Display', '50MP + 5MP + 2MP', '13MP Front Camera', 5000, 'Dimensity 6100+ Processor', '1 Year Manufacturer Warranty for Device and 6 Months for In-Box Accessories', 19999, 5, 3, 'samsungA15.png\r\n'),
(19, 'motorola', 'motorola eagle 20 light', 'Midnight Sky', 8, 128, '17.02 cm (6.7 inch) Full HD+ Display', '108MP + 16MP + 8MP ', '32MP Front Camera', 4500, 'Qualcomm Snapdragon 870 5G (SM8250-AC) Processor', '1 Year on Handset and 6 Months on Accessories', 45999, 20, 3, 'motorolaegal.png'),
(20, 'motorola', 'MOTOROLA Edge 50', 'Peach Fuzz', 8, 256, '16.94 cm (6.67 inch) Display', '50MP + 13MP + 10MP', '32MP Front Camera', 5000, 'Snapdragon 7 Gen 1 Accelerated Edition Processor', '1 Year Warranty on Handset and 6 Months Warranty on Accessories', 32999, 9, 4, 'motorolaedge.png'),
(21, 'vivo', 'v40', 'Lotus Purple', 12, 512, '17.22 cm (6.78 inch) Full HD+ Display', '50MP + 50MP ', '50MP Front Camera', 5500, 'Snapdragon 7 Gen 3 Processor', '1 Year Warranty on Handset and 6 Months Warranty on Accessories', 46999, 3, 5, 'vivo40.png'),
(22, 'vivo', 'T3 Pro 5G', 'Emerald Green', 8, 256, '17.2 cm (6.77 inch) Full HD+ AMOLED Display', '50MP + 8MP ', '16MP Front Camera', 5500, 'Snapdragon 7 Gen 3 Processor', '1 Year Warranty on Handset and 6 Months Warranty on Accessories', 31999, 7, 4, 'vivoT3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mobile`, `gender`, `address`) VALUES
(1, 'harit_patel2', '$2y$10$a7FvVrF6gDPp9Pr8OUX86OIKd1NeEyzmB4JZKjvPT.EUh4KGiS4s2', '7433836461', 'Male', 'anand112'),
(2, 'yash', '$2y$10$JbIMSRacR8qNpxaZt8boM.50jykC8Ml1RnZJHQrBYfcezfeiOVSWi', '9106236280', 'Male', ''),
(5, 'harit_patel0', '$2y$10$b1JN/Lj7kxST2L.deUZZseUHv7DuoWni1vdKPs3Uvvixd9Ae8GNui', '7433836461', 'Male', 'anand');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_mst`
--
ALTER TABLE `cart_mst`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`b_name`);

--
-- Indexes for table `mobile_mst`
--
ALTER TABLE `mobile_mst`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `b_name` (`b_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_mst`
--
ALTER TABLE `cart_mst`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mobile_mst`
--
ALTER TABLE `mobile_mst`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobile_mst`
--
ALTER TABLE `mobile_mst`
  ADD CONSTRAINT `b_name` FOREIGN KEY (`b_name`) REFERENCES `category` (`b_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
