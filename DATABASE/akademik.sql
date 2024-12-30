-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 06:42 AM
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
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` int(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `isdel` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `tahun`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `isdel`) VALUES
(1, 'BOBO', 1998, 0, '2024-12-09 08:02:21', NULL, NULL, NULL, NULL, 0),
(2, 'BOBO', 1998, 0, '2024-12-09 08:02:47', NULL, NULL, 0, '2024-12-16 08:02:32', 1),
(3, 'sang ', 2024, 0, '2024-12-16 06:53:26', NULL, NULL, 0, '2024-12-16 08:02:30', 1),
(4, 'sang ', 2024, 0, '2024-12-16 06:54:34', NULL, NULL, 0, '2024-12-16 08:02:33', 1),
(5, 'mutiara peggia', 2024, 0, '2024-12-16 07:00:33', 0, '2024-12-18 03:36:26', 0, '2024-12-21 12:31:45', 1),
(6, 'mutiii', 2024, 0, '2024-12-16 07:02:35', NULL, NULL, 0, '2024-12-16 08:03:51', 1),
(7, 'mutiara', 2021, 0, '2024-12-21 12:31:53', 0, '2024-12-23 06:43:00', 0, '2024-12-23 06:43:02', 1),
(8, 'BOBO', 2024, 0, '2024-12-21 12:42:25', 0, '2024-12-23 06:40:53', NULL, NULL, 0),
(9, 'makanan', 2023, 0, '2024-12-23 06:40:48', NULL, NULL, 0, '2024-12-23 06:40:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `active`) VALUES
(1, 'lab2j', 'example@example.com', 'e10adc3949ba59abbe56e057f20f883e\r\n', 1),
(2, 'ivan@gmail.com', 'ivan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(3, 'lab 2j', 'example@example.com', '202cb962ac59075b964b07152d234b70', 1),
(4, 'Mutiara', 'mutiara@gmail.com', '491b0ef09d68656789acad87084c8b55', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
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
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
