-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 07:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nisitid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phonenum` varchar(255) NOT NULL,
  `urole` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nisitid`, `firstname`, `lastname`, `email`, `password`, `phonenum`, `urole`, `created_at`) VALUES
(1, '', 'asd', 'asd', 'asd@asd.com', '$2y$10$N72WI.zCYFILTwisQ2DkcO8J3UG.e/W8tC6ToRUBiVwAlMqmlsw8y', '', 'user', '2023-02-19 11:55:52'),
(2, '', 'asd', 'asd', 'asddd@asddd.com', '$2y$10$1.dM/tvslUHC34mChwZrUeiCSNxxS1q7S8b7GBO6vfVIx458bHlsi', '', 'user', '2023-02-19 11:56:32'),
(3, '', 'asdasdasd', 'sdafrewg', 'asdas@aslomd.com', '$2y$10$Wp7JakOGGp/LkL89n5PVDupv8mplPkUWbQpt7qYXdLp0KggKoMAs.', '', 'user', '2023-02-19 11:56:57'),
(4, '6230200000', 'ca', 'min', 'asdasd@sadas.com', '$2y$10$V2cL5cClxp87b8IG6zVK4.9LRp6KMSGNxGO47cpr0KXJkyTvD5dNG', '', 'user', '2023-02-19 12:44:21'),
(5, '', 'asdasd', 'asdasd', 'sadsadas@asd.com', '$2y$10$SMlDO3wtQVkhffphQq7D3uukWYoAq/xaGelq..nTDdft.V6ssw.Ey', '', 'user', '2023-02-19 12:51:22'),
(6, '', 'qqwwee', 'qqwwee', 'qqwwee@qwe.com', '$2y$10$/NVCPBsa03CyHrsE733GOuy2FHugG1Bmt8zWEwft6MiwcXGhA3IvW', '', 'user', '2023-02-19 12:55:11'),
(7, '', 'asdasdsa', 'asdas', 'psaokd@asdsa.com', '$2y$10$8TiGxEb.FmXYx4bdnBmgG.fX2Y4HbsYwIZ4dZ4RMesIPtdo6CmKZ6', '', 'user', '2023-02-19 12:57:55'),
(8, '12345678', 'sadsa', 'spaodkapsoo', 'asdasdwq@asdascz.com', '$2y$10$JJ2BmycIjdFtycY3tkM6QOwVSEqk7qzkxjyN6cjf7sreCyG6F.jn2', '01321610', 'admin', '2023-02-19 13:03:02'),
(9, '654321', 'asdsad', 'aspkod', 'ospaspidj@sad.com', '$2y$10$pNRRYskYcadxocMGMEdwz.jgFa/XBdIhN8X4IPpBZCZ1UMK75dYFK', '0136468484', 'user', '2023-02-19 16:20:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
