-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 11:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines_table`
--

CREATE TABLE `airlines_table` (
  `id` varchar(100) NOT NULL,
  `flight_name` varchar(100) NOT NULL,
  `takeOffpoint` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL,
  `takeOffdate` varchar(100) NOT NULL,
  `totalSeat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airlines_table`
--

INSERT INTO `airlines_table` (`id`, `flight_name`, `takeOffpoint`, `destination`, `route`, `takeOffdate`, `totalSeat`) VALUES
('', 'bbb air', 'adsa', 'LA', 'Business', '2023-07-19', 4),
('', 'hip22', 'adsa', 'SA', '1st Class', '2023-07-29', 400),
('feswr354545', 'Ghana Airway', 'Takoradi', 'Accra', 'Striaght', '2023-08-05', 12);

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `flight_no` varchar(100) NOT NULL,
  `airline_name` varchar(100) NOT NULL,
  `takeOffpoint` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `cabin` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`) VALUES
(75, 'admin', 'admin@gmail.com', 'k2k2k2k2', 'admin'),
(76, 'fredrick', 'gyasi@gmail.com', '$2y$10$BxN55Ce5aC2awPI0E.ZYS.gNExG0whK09bdMjXknIksUPsPXUTm66', 'client'),
(77, 'fredrick', 'gyasi222@gmail.com', '$2y$10$V/aj.ha3f2WiRx2t9B87Rew95PqChum3mBwdFduncDIHanIWfBXWq', 'client'),
(78, 'fredrick', 'fredgyasi@gmail.com', '$2y$10$wwVvYH82o8Ndg9FWzsPWg.IfJjPy2aAfgI4Kd1DcfY2rWA.cQMQS2', 'client'),
(79, 'fredrick', 'freddddgyasi@gmail.com', '$2y$10$sLZonncyuSFQiJJgHfvIJu3kAs3g9L92d6vwJA8kCZc/42lu.JIt6', 'client'),
(80, 'fredrick', 'freddddddddgyasi@gmail.com', '$2y$10$HJRm4OHHZce8dGeIUWh.ReGA5rTEHVWwKO0.guhvXUSSziyBt6ghK', 'client'),
(81, 'fredrick', 'dddddgyasi@gmail.com', '$2y$10$KKDgT5Dz0Pu/6sxJhrJGe.C9/z20oIpr2GAuq.UPgpBHrnnH8Zwei', 'client'),
(82, 'fredrick', 'dasi@gmail.com', '$2y$10$ciw40TP1bpYf/CCj5Y7Xi.9cJJzbXBvVcoRITiUalb3aFvSeHxSbe', 'client'),
(83, 'fredrick', 'fredrickgyasi@gmail.com', '$2y$10$idwCw1hJ8PpoeekuC3o5GeyBRu88gdJzKDhE9PexYZQgvf4sd/iMO', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
