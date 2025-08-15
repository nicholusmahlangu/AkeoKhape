-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2025 at 11:02 AM
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
-- Database: `akeokhapedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `passengerID` int(10) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `pswd` varchar(255) DEFAULT NULL,
  `fileUpload` varchar(255) NOT NULL,
  `verify_token` varchar(255) DEFAULT NULL,
  `verify_status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`passengerID`, `fullName`, `email`, `phoneNumber`, `pswd`, `fileUpload`, `verify_token`, `verify_status`, `created_at`) VALUES
(1, 'Nicholus Mahlangu', 'nicolasmahlangu52@gmail.com', '0766180918', '$2y$10$KM0FlX1WNXoart4uiOc6R.0EfIuy9YA1VbrJJRGMBdrB9pH9Z6/Bm', 'uploads/1755248259_Busisiwe Chauke_merged.pdf', NULL, NULL, NULL),
(2, 'Nicholus Mahlangu', 'nicolasmahlangu52@gmail.com', '0766180918', '$2y$10$LwCvgL4A65T9BdyjMbAr2uLByNQ8Xoom/InolMz96IgVRtvo0TIRC', 'uploads/1755248378_Busisiwe Chauke_merged.pdf', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`passengerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `passengerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
