-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2025 at 11:47 AM
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
-- Database: `oneclickagriscience_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `c_id` int(50) NOT NULL,
  `c_name` varchar(225) NOT NULL,
  `c_email` varchar(225) NOT NULL,
  `c_phoneNo` varchar(15) NOT NULL,
  `c_message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`c_id`, `c_name`, `c_email`, `c_phoneNo`, `c_message`) VALUES
(2, 'Akash Tiwari', '09935710775', 'anil123@gmail.c', 'asdf'),
(3, 'Akash Tiwari', '09935710775', 'seoshoppe.canva', 'dnew'),
(4, 'Akash Tiwari', '09935710775', 'seoshoppe.canva', 'dnew'),
(5, 'Akash Tiwari', 'akash31902@gmail.com', '09935710775', 'asdfd'),
(6, 'rohit ', 'rohit@123', '12345678', 'hello'),
(7, 'Akash Tiwari', '9935710775@sd', '09935710775', 'wdewweqwq'),
(8, 'Akash Tiwari', 'anil123@gmail.com', '09935710775', 'asxas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdata`
--
ALTER TABLE `formdata`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formdata`
--
ALTER TABLE `formdata`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
