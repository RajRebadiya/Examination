-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 08:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'Test@123');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_data`
--

CREATE TABLE `faculty_data` (
  `data_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `duration` varchar(400) NOT NULL,
  `exam_type` varchar(400) NOT NULL,
  `exam_pettarn` varchar(400) NOT NULL,
  `department_name` varchar(400) NOT NULL,
  `amout` int(50) NOT NULL,
  `payment_status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_data`
--

INSERT INTO `faculty_data` (`data_id`, `f_id`, `f_name`, `class_name`, `duration`, `exam_type`, `exam_pettarn`, `department_name`, `amout`, `payment_status`) VALUES
(130, 72, ' murli ', ' F-1', ' 1 Hour', ' Regular', ' Theory', '  BSC CHE', 100, 'pending'),
(131, 72, ' murli ', ' T-3', ' 2 Hour', ' Mid sem', ' Exam pettarn', '  BSC MB', 200, 'pending'),
(132, 72, ' murli ', ' F-4', ' 2 Hour', ' ATKT', ' Prectical', '  BSC PHY', 200, 'pending'),
(133, 73, ' kd ', ' T-1', ' 3 Hour', ' Mid sem', ' Theory', '  BSC CHE', 300, 'pending'),
(134, 73, ' kd ', ' T-3', ' 1 Hour', ' Mid sem', ' Theory', '  BSC MB', 100, 'pending'),
(135, 73, ' kd ', ' T-4', ' 2 Hour', ' ATKT', ' Prectical', '  BSC MB', 200, 'pending'),
(136, 74, ' dm ', ' T-3', ' 1 Hour', ' Regular', ' Prectical', '  BSC CS', 100, 'pending'),
(137, 74, ' dm ', ' F-2', ' 1 Hour', ' ATKT', ' Theory', '  BSC CS', 100, 'pending'),
(138, 75, ' rp ', ' F-3', ' 1 Hour', ' Regular', ' Prectical', '  BSC CHE', 100, 'pending'),
(139, 75, ' rp ', ' T-5', ' 2 Hour', ' Mid sem', ' Theory', '  BCA', 200, 'pending'),
(140, 76, ' pk ', ' S-1', ' Duration', ' Regular', ' Prectical', '  BSC CHE', 0, 'pending'),
(141, 76, ' pk ', ' T-5', ' 3 Hour', ' ATKT', ' Exam pettarn', '  BSC PHY', 300, 'pending'),
(142, 77, ' mina ', ' T-5', ' 2 Hour', ' ATKT', ' Prectical', '  BSC CHE', 200, 'pending'),
(143, 77, ' mina ', ' S-2', ' 2 Hour', ' ATKT', ' Prectical', '  BSC CHE', 200, 'pending'),
(144, 78, ' tina ', ' F-1', ' 3 Hour', ' Regular', ' Theory', '  BSC PHY', 300, 'pending'),
(145, 78, ' tina ', ' S-4', ' 3 Hour', ' Regular', ' Prectical', '  BSC PHY', 300, 'pending'),
(146, 80, ' dina ', ' T-2', ' 2 Hour', ' Regular', ' Prectical', '  BSC MB', 200, 'pending'),
(147, 80, ' dina ', ' F-3', ' 2 Hour', ' Mid sem', ' Theory', '  BSC CHE', 200, 'pending'),
(148, 81, ' rrr ', ' T-3', ' 2 Hour', ' Mid sem', ' Theory', '  BSC MB', 200, 'pending'),
(149, 81, ' rrr ', ' S-5', ' 3 Hour', ' ATKT', ' Theory', '  BSC CHE', 300, 'pending'),
(150, 82, ' nnn ', ' F-4', ' 1 Hour', ' Mid sem', ' Prectical', '  BSC CHE', 100, 'pending'),
(151, 82, ' nnn ', ' S-3', ' 3 Hour', ' Regular', ' Prectical', '  BCA', 300, 'pending'),
(152, 83, ' aaa ', ' T-3', ' 1 Hour', ' ATKT', ' Prectical', '  BSC MB', 100, 'pending'),
(153, 83, ' aaa ', ' S-5', ' 3 Hour', ' Regular', ' Theory', '  BCA', 300, 'pending'),
(154, 84, ' keyur ', ' T-2', ' 3 Hour', ' Mid sem', ' Theory', '  BSC CS', 300, 'pending'),
(155, 84, ' keyur ', ' S-4', ' 2 Hour', ' Regular', ' Prectical', '  BSC CHE', 200, 'pending'),
(156, 85, ' vasu ', ' T-3', ' 1 Hour', ' Mid sem', ' Prectical', '  BSC CHE', 100, 'pending'),
(157, 85, ' vasu ', ' S-4', ' 1 Hour', ' Regular', ' Prectical', '  BSC CS', 100, 'pending'),
(158, 86, ' kd ', ' T-4', ' 3 Hour', ' Mid sem', ' Prectical', '  BSC MB', 300, 'pending'),
(159, 86, ' kd ', ' S-5', ' 1 Hour', ' Mid sem', ' Theory', '  BSC CS', 100, 'pending'),
(160, 87, ' nidhi ', ' F-2', ' 1 Hour', ' Mid sem', ' Prectical', '  BSC MB', 100, 'pending'),
(161, 87, ' nidhi ', ' S-1', ' 2 Hour', ' Mid sem', ' Theory', '  BCA', 200, 'pending'),
(162, 88, ' deep ', ' T-3', ' 1 Hour', ' ATKT', ' Prectical', '  BCA', 100, 'pending'),
(163, 88, ' deep ', ' T-5', ' 1 Hour', ' Regular', ' Prectical', '  BSC CS', 100, 'pending'),
(164, 89, ' piyush ', ' S-1', ' 3 Hour', ' Mid sem', ' Prectical', '  BSC CHE', 300, 'pending'),
(165, 89, ' piyush ', ' F-2', ' 1 Hour', ' Mid sem', ' Theory', '  BCA', 100, 'pending'),
(167, 90, ' raj ', ' S-3', ' 1 Hour', ' Mid sem', ' Theory', '  BSC CHE', 100, 'pending'),
(168, 92, ' Divya ', ' F-5', ' 3 Hour', ' ATKT', ' Theory', '  BSC CHE', 300, 'pending'),
(169, 92, ' Divya ', ' T-5', ' 2 Hour', ' Mid sem', ' Prectical', '  BCA', 200, 'pending'),
(170, 93, ' ayush ', ' F-3', ' 1 Hour', ' ATKT', ' Prectical', '  BSC CHE', 100, 'pending'),
(171, 93, ' ayush ', ' S-2', ' 1 Hour', ' ATKT', ' Prectical', '  BSC CS', 100, 'pending'),
(172, 94, ' priyank ', ' F-3', ' 1 Hour', ' ATKT', ' Prectical', '  BSC PHY', 100, 'pending'),
(173, 94, ' priyank ', ' T-4', ' 3 Hour', ' ATKT', ' Prectical', '  BSC CHE', 300, 'pending'),
(175, 95, ' raj ', 'S-1', '1 Hour', 'Regular', 'Theory', 'BSC CS', 100, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` text NOT NULL,
  `mobileno` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `cpassword` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `mobileno`, `email`, `password`, `cpassword`, `date`, `status`) VALUES
(72, 'murli', '6353272524', 'murli123@gmail.com', '123', '123', '2024-03-27 13:17:56', 'approved'),
(73, 'kd', '3456', 'kd@gmail.com', '123', '123', '2024-03-28 17:13:43', 'approved'),
(74, 'dm', '34567', 'dm@gmail.com', '123', '123', '2024-03-28 17:23:25', 'approved'),
(75, 'rp', '34567', 'rp@gmail.com', '123', '123', '2024-03-28 17:46:02', 'approved'),
(76, 'pk', '4567', 'pk@gmail.com', '123', '123', '2024-03-28 17:49:06', 'approved'),
(77, 'mina', '1234', 'mina@gmail.com', '123', '123', '2024-03-29 09:57:35', 'approved'),
(78, 'tina', '234', 'tina@gmail.com', '123', '123', '2024-03-29 10:06:15', 'approved'),
(79, 'rit', '1234', 'rita@gmail.com', '123', '123', '2024-03-29 10:11:47', 'approved'),
(80, 'dina', '1234', 'dina@gmail.com', '123', '123', '2024-03-29 10:12:17', 'approved'),
(81, 'rrr', '345', 'rrr@gmail.com', '123', '123', '2024-03-29 10:21:34', 'approved'),
(82, 'nnn', '23', 'nnn@gmail.com', '123', '123', '2024-03-29 10:24:15', 'approved'),
(83, 'aaa', '33', 'aaa@gmail.com', '123', '123', '2024-03-29 10:25:46', 'approved'),
(84, 'keyur', '2345', 'keyur@gmail.com', '123', '123', '2024-03-29 10:40:45', 'approved'),
(85, 'vasu', '34', 'vasu@gmail.com', '123', '123', '2024-03-29 10:47:27', 'approved'),
(86, 'kd', '1234', 'kd@gmail.com', '123', '123', '2024-03-29 10:50:14', 'approved'),
(87, 'nidhi', '567', 'nidhi@gmail.com', '123', '123', '2024-03-29 10:52:38', 'approved'),
(88, 'deep', '345', 'deep@gmail.com', '123', '123', '2024-03-29 10:57:51', 'approved'),
(89, 'piyush', '12345678', 'piyush@gmail.com', '123', '123', '2024-03-29 11:33:08', 'approved'),
(90, 'raj', '1122334455', 'raj@gmail.com', '123', '123', '2024-04-12 15:36:24', 'approved'),
(91, 'Rebadiya Raj', '1234567890', 'm@gmail.com', '123456', '123456', '2024-04-13 09:02:14', 'approved'),
(92, 'Divya', '1122334455', 'divya@gmail.com', '123456', '123456', '2024-04-13 09:03:24', 'approved'),
(93, 'ayush', '1234567890', 'ayush@gmail.com', 'ayush123', 'ayush123', '2024-04-13 10:03:37', 'approved'),
(94, 'priyank', '1234567890', 'priyank@gmail.com', 'priyank', 'priyank', '2024-04-13 10:28:21', 'approved'),
(95, 'raj', '1234567809', 'raj@gmail.com', 'raj123', 'raj123', '2024-04-13 11:59:57', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_data`
--
ALTER TABLE `faculty_data`
  ADD PRIMARY KEY (`data_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_data`
--
ALTER TABLE `faculty_data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_data`
--
ALTER TABLE `faculty_data`
  ADD CONSTRAINT `faculty_data_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
