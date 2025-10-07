-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 03, 2025 at 09:28 AM
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
-- Database: `appointment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` text DEFAULT NULL,
  `whom_to_meet` text DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `status` enum('Inside','Outside') DEFAULT 'Outside',
  `Aadhar` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `email`, `phone`, `appointment_date`, `created_at`, `address`, `whom_to_meet`, `department`, `reason`, `status`, `Aadhar`) VALUES
(1, 'vikki', 'ndanw@gmail.com', '12', '2025-05-30', '2025-05-30 08:34:09', 'jdwqd', 'jdwqedn', 'Technical', 'o', 'Outside', NULL),
(2, 'fuwefenfwubd', 'uweduq@gmail.com', '894y4', '2025-06-13', '2025-06-03 05:45:32', 'bruew', 'idwied', 'Administration', 'uidbpqwbd', 'Outside', NULL),
(3, 'hiwe', 'iuwer@gmail.com', 'uier823', '2025-06-27', '2025-06-03 05:51:24', 'djwqd', 'adiuqwd', 'HR', 'ir32e', 'Outside', NULL),
(4, 'hiwe', 'iuwer@gmail.com', 'uier823', '2025-06-27', '2025-06-03 05:51:55', 'djwqd', 'adiuqwd', 'HR', 'ir32e', 'Outside', NULL),
(5, 'ir2r', 'djwbqd@gmail.com', '24278423', '2025-07-10', '2025-06-03 06:21:02', 'uiwqwd', 'djbwiud', 'Technical', 'fiw', 'Outside', NULL),
(6, 'sjwef', 'sofnw@gmail.com', 'euwe', '2025-07-03', '2025-06-03 06:23:14', 'ouefowe', 'iodnqw', 'Technical', 'iowqe', 'Outside', NULL),
(7, 'wruqerj', 'jwndwq@gmail.com', 'e21e', '2025-07-05', '2025-06-03 06:32:31', 'ijd', 'odwqoid', 'HR', 'diowd', 'Outside', NULL),
(8, 'jwdnqwd', 'nqwdqwd@gmaiol.com', 'qwjdnqwoid', '2025-06-25', '2025-06-03 06:33:13', 'ndfqiod', 'dnqoid', 'Administration', 'odqwd', 'Outside', NULL),
(9, 'vignesh', 'mmmmm@gmail.com', '1234567890', '2025-06-19', '2025-06-03 06:40:21', 'fsfw', 'jfwon', 'Finance', 'jnewd', 'Outside', NULL),
(10, 'vignesh', 'mmmmm@gmail.com', '1234567890', '2025-06-19', '2025-06-03 06:40:59', 'fsfw', 'jfwon', 'Finance', 'jnewd', 'Outside', NULL),
(11, 'vignesh', 'mmmmm@gmail.com', '1234567890', '2025-06-19', '2025-06-03 06:48:22', 'fsfw', 'jfwon', 'Finance', 'jnewd', 'Outside', NULL),
(12, 'uwern', 'bwef@gmail.com', 'fnqwdnqwd', '2025-06-19', '2025-06-03 06:48:53', 'nfdiwqnd', 'jonwqiod', 'Administration', 'qwjodqw', 'Outside', NULL),
(13, 'wew', 'wqwd@gmail.com', 'e8e12e', '2025-06-28', '2025-06-03 06:50:52', 'aodwqd', 'qwiodwqoi', 'HR', 'jwndqw', 'Outside', NULL),
(14, 'nidnwqd', 'qwjndwq@gmail.com', '1232343456', '2025-06-23', '2025-06-03 07:06:41', 'jn\'dqweq', 'jadnd', 'Administration', 'oweqwe', 'Outside', '32132342424'),
(15, 'nidnwqd', 'qwjndwq@gmail.com', '1232343456', '2025-06-23', '2025-06-03 07:20:36', 'jn\'dqweq', 'jadnd', 'Administration', 'oweqwe', 'Outside', '32132342424'),
(16, 'nidnwqd', 'qwjndwq@gmail.com', '1232343456', '2025-06-23', '2025-06-03 07:23:04', 'jn\'dqweq', 'jadnd', 'Administration', 'oweqwe', 'Outside', '32132342424'),
(17, 'nidnwqd', 'qwjndwq@gmail.com', '1232343456', '2025-06-23', '2025-06-03 07:25:00', 'jn\'dqweq', 'jadnd', 'Administration', 'oweqwe', 'Outside', '32132342424'),
(18, 'ufhwqud', 'hifbweuir@gmail.com', '2421424', '2025-06-19', '2025-06-03 07:25:38', 'whruwqh', 'wruhwque', 'HR', 'uhwpergqe', 'Outside', '24242');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
