-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 01:28 PM
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
-- Database: `file_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `PID`) VALUES
(8, 'RAI', 4),
(10, 'asdas', 0),
(11, 'Policy', 0),
(12, 'hello', 0),
(13, 'new', 0),
(14, 'new1', 0),
(15, 'wee', 0),
(16, 'asads', 0),
(68, 'RAI', 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('add', 'add12');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `DOWNLOAD` int(11) NOT NULL DEFAULT 0,
  `upload_date` datetime NOT NULL DEFAULT current_timestamp(),
  `CUSTOM_NAME` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `unique_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`ID`, `NAME`, `DOWNLOAD`, `upload_date`, `CUSTOM_NAME`, `description`, `unique_id`) VALUES
(1, '1285118.jpg', 1, '2024-07-05 15:43:03', NULL, 'New Food Menu', NULL),
(2, '1285118.jpg', 3, '2024-07-05 17:25:16', 'askjgjh', 'Special Trains', NULL),
(513352, 'Final Vocational Report.pdf', 0, '2024-07-15 11:53:02', 'NALCO Training', 'Training Report', NULL),
(513353, 'Wifi issue.pdf', 0, '2024-07-15 11:54:51', 'WIFI Issue', 'New Wifi List', NULL),
(513354, 'Ethernet and RJ45.pdf', 0, '2024-07-15 11:58:30', 'Ethernet', 'New RJ45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upload_files1`
--

CREATE TABLE `upload_files1` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `DOWNLOAD` int(11) NOT NULL DEFAULT 0,
  `CUSTOM_NAME` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `UPLOAD_DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `unique_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_files1`
--

INSERT INTO `upload_files1` (`ID`, `NAME`, `DOWNLOAD`, `CUSTOM_NAME`, `description`, `UPLOAD_DATE`, `unique_id`) VALUES
(100005, '2101105476 pdf.pdf', 0, 'PDF', 'PPT', '2024-07-15 06:01:34', NULL),
(100007, '2101105476 pdf.pdf', 0, 'PDF', 'PPT', '2024-07-15 06:21:19', NULL),
(100008, 'InnoTech Elites.pdf', 0, 'IOT group', 'Farming IOT', '2024-07-15 06:23:34', NULL),
(100009, 'Share_your_Module_details_for_Salesforce_Virtual_Internship_ProgramCohort.pdf', 0, 'Internship', 'Virtual Internship', '2024-07-15 06:25:34', NULL),
(100010, 'DeltaX - Associate Product Engineer -  Job Description 2025.pdf', 1, 'Delta', 'Product Engineering', '2024-07-15 06:29:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `upload_files1`
--
ALTER TABLE `upload_files1`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=513356;

--
-- AUTO_INCREMENT for table `upload_files1`
--
ALTER TABLE `upload_files1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
