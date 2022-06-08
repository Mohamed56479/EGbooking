-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 09:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `book_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `hotel_name` varchar(250) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaint_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `city`, `price`) VALUES
(1, 'Baron resort', 'Sharm El sheikh\r\n', 5063),
(2, 'Cancun Resort & villas\r\n', 'RasSudr', 5014),
(3, 'Caribbean house', 'Dahab', 1850),
(4, 'Coral hill resort ', '\r\nSharm El sheikh\r\n\r\n', 1110),
(5, 'Fanar hotel\r\n', 'RasSudr', 2331),
(6, 'Four seasons resort', 'Sharm El sheikh', 8062),
(7, 'Gaddis Hotel\r\n', 'Luxor', 649),
(8, 'Heru pyramids view Hotel', 'Cairo', 1146),
(9, 'Hilton Alexandria Green plaza', 'Alexandria ', 3085),
(10, 'Iaru nub\r\n', 'Dahab', 3608),
(11, 'Kemet Hotel', 'Luxor', 651),
(12, 'La sirena Hotel & Resort', 'RasSudr', 899),
(13, 'Miramar Hotel\r\n', 'Alexandria', 925),
(14, 'Neptune Residence', 'Dahab\r\n', 1203),
(15, 'Number One pyramids Hotel', 'Cairo', 1062),
(16, 'Pharaoh Azur Resort', 'Hurghada\r\n', 2498),
(17, 'Porto sokhna pyramids hotel', 'Ain Sokhna ', 851),
(18, 'Seagull beach resort', 'Hurghada\r\n', 3094),
(19, 'Sunrise garden beach resort', 'Hurghada', 15512),
(20, 'Tanoak resort', 'Ain Sokhna ', 12728),
(21, 'Telal ain sokhna villa ', 'Ain Sokhna', 2415),
(22, 'Thebes Hotel\r\n', 'Luxor\r\n', 790),
(23, 'Tolip Hotel Alexandria', 'Alexandria ', 3074),
(24, 'Valencia hotel', 'Cairo', 940);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `rate_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `hotel_name` varchar(250) NOT NULL,
  `rate_value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(250) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` int(15) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `type` int(3) NOT NULL,
  `Isactive` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `userName`, `email`, `password`, `birthdate`, `phone`, `gender`, `type`, `Isactive`) VALUES
(1, 'Admin', 'Admin@gmail.com', '1234', '2000-07-22', 12345678, 'male', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `hotel_name` (`hotel_name`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `hotel_name` (`hotel_name`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_name`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`rate_id`),
  ADD KEY `hotel_name` (`hotel_name`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaint_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `rate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`hotel_name`) REFERENCES `hotels` (`hotel_name`);

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`hotel_name`) REFERENCES `hotels` (`hotel_name`),
  ADD CONSTRAINT `complaints_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_ibfk_1` FOREIGN KEY (`hotel_name`) REFERENCES `hotels` (`hotel_name`),
  ADD CONSTRAINT `rates_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
