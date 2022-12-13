-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 12:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` int(11) NOT NULL,
  `open_time` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `username`, `file_name`, `type`, `size`, `modify`, `deleted`, `open_time`, `image`) VALUES
(1, 'vytg2903@gmail.com', 'don-de-nghi-hoan-thi.doc', 'doc', 44032, '2022-12-13 10:51:06', 0, '2013-12-21 22:32:28', 'CSS/images/doc.png'),
(2, 'vytg2903@gmail.com', 'BMTT_N2_1.pdf', 'pdf', 4234189, '2022-12-13 10:51:02', 0, '2013-12-21 22:50:27', 'CSS/images/pdf.png'),
(3, 'vytg2903@gmail.com', 'BaibaoK-meanvaf-SVM.pdf', 'pdf', 841306, '2013-12-21 22:52:02', 0, '2013-12-21 22:52:02', 'CSS/images/pdf.png'),
(4, 'vytg2903@gmail.com', 'z3931326177525_406aa6549a7cfdff2be4131bd874c960.jpg', 'jpg', 410113, '2013-12-21 22:56:53', 0, '2013-12-21 22:56:53', 'files/vytg2903@gmail.com/z3931326177525_406aa6549a7cfdff2be4131bd874c960.jpg'),
(5, 'vytg2903@gmail.com', 'README.txt', 'txt', 140, '2013-12-21 22:57:46', 0, '2013-12-21 22:57:46', 'CSS/images/txt.png'),
(6, 'vytg2903@gmail.com', 'growup.png', 'png', 1372, '2013-12-21 22:58:00', 0, '2013-12-21 22:58:00', 'files/vytg2903@gmail.com/growup.png'),
(7, 'vyy2903@gmail.com', 'txt.txt', 'txt', 46, '2013-12-21 22:58:50', 0, '2013-12-21 22:58:50', 'CSS/images/txt.png');

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password`
--

CREATE TABLE `forgot_password` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `size_page` int(11) DEFAULT NULL,
  `use_size` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `verify_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `size_page`, `use_size`, `name`, `token`, `verify_at`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, 0, 'admin', '', NULL),
(2, 'vytu2903@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, 0, 'vy', '', NULL),
(3, 'vytg2903@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, 0, 'Huỳnh Nguyễn Tường Vy', '', NULL),
(4, 'vyy2903@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, 0, 'vyvy', '650291c53476c63610f2a55f1cc6f56d', NULL),
(5, 'p.thihc@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, NULL, 0, 'Pham Hoc', '8c56f5a3a755580c65bbe3bf16b2aa9a', NULL),
(6, 'vytuong2903@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, NULL, 0, 'Huỳnh Nguyễn Tường Vy', 'ea2fdef01be49e4fd61999768a5d59a1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgot_password`
--
ALTER TABLE `forgot_password`
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
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `forgot_password`
--
ALTER TABLE `forgot_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
