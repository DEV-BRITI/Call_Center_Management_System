-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 03:53 PM
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
-- Database: `ccmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `issue` varchar(500) NOT NULL,
  `issuecounteredonandfrom` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `firstname`, `middlename`, `lastname`, `mobile`, `email`, `address`, `issue`, `issuecounteredonandfrom`, `status`) VALUES
(2, 'Sumit', '', 'Ganguly', '7679043845', 'sumit@gmail.com', 'N0033', 'Product Exchange', '2023-08-01', 'pending'),
(3, 'Nitesh', '', 'Singh', '7564673463', 'nitesh@example.com', 'NO 1 Colony', 'Product Exchange', '2023-07-01', 'solved'),
(4, 'Bijay', '', 'Roy', '6747647712', 'bijay@example.com', 'ABC Colony, Kolkata', 'Product Exchange', '2023-06-15', 'forwarded'),
(5, 'Sayantoni', '', 'Routela', '9933776543', 'sayantani@example.com', 'Durgapur, West Bengal', 'Product Exchange', '2023-08-05', 'forwarded'),
(6, 'Sonai', 'Kumari', 'Saha', '8756387459', 'sonai@example.com', 'Fuljhore, Durgapur, West Bengal', 'Refund', '2023-08-05', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `ID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `expiry_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`ID`, `email`, `token`, `expiry_time`) VALUES
(1, 'britisundar789j@gmail.com', '7fb7fa18bb6a0c8c80a53069c7aeb72d175a9d751fc31c91bae80bd70d8f6c04', '1691095418'),
(2, 'britisundar789j@gmail.com', 'bbf631e9aab08459c0125407e9fe7dff5bd3e788b6b3396b9dcc54b0f1833f7e', '1691095757'),
(3, 'britisundar789j@gmail.com', 'a274438d716567b9068c2767caf083b1c53afbd83ecf9e11a1eddb79dcaf80fa', '1691095876'),
(5, 'britisundar789j@gmail.com', 'f430bc31eca050d6c9ad201acfe153a7187b1d8649504b9d50c8e12d2ab5c73e', '1691227243'),
(6, 'britisundar789j@gmail.com', 'e43bcc4e4915303f97cf4ab32cfb854512a4c8bb0a766fd839e246e9be267f9d', '1691227295');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `usertype` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstname`, `middlename`, `lastname`, `dob`, `address`, `mobile`, `email`, `gender`, `city`, `state`, `password`, `usertype`) VALUES
(1, 'Briti', '', 'Das', '2000-07-30', 'NIVEDITA PLACE', '8101144903', 'britisundar789j@gmail.com', 'male', 'Durgapur', 'West Bengal', '$2y$10$djTdY9HDiA5PdQgZDVCYg.AF2.Affe/YfepMrGFmK/keeBUQtZ0EC', 'admin'),
(2, 'Om', '', 'Singh', '2000-10-18', 'ABC Colony', '8765432104', 'omsingh@example.com', 'male', 'Durgapur', 'West Bengal', '$2y$10$sVPRD2VmzQN3DBcaIxe7z.R5L.6Grf/SZOTyvEqAQ2Mi6C7MoWuu6', 'user'),
(3, 'Arnab', '', 'Majhi', '2002-11-30', 'ABC Colony', '6464723741', 'arnab@example.com', 'male', 'Kolkata', 'West Bengal', '$2y$10$QWy2rRgcG9PRUIlO7hWvGuyDO57RZK0jk6pvFG0dMb3la6lkO0UK6', 'user'),
(4, 'Sujit', '', 'Chatterjee', '2002-02-14', 'Bidhannagar', '7563668766', 'sujit@example.com', 'male', 'Durgapur', 'West Bengal', '$2y$10$6glVkI117hj3Vl0kj3CVC.gdOigvdPro5XR3E/LxNdEajL/BqY1I6', 'user'),
(5, 'Indrajit', '', 'Gon', '2003-11-27', 'Benachity', '9749922604', 'indrajit@example.com', 'male', 'Durgapur', 'West Bengal', '$2y$10$61Vh1di2F5FImQ7TEEDSQO.YXnjVMOa4eRHHqs4vhKmJ3XL23cwjK', 'user'),
(6, 'Moumita', '', 'Patra', '2002-07-22', 'Arrah', '8509037282', 'moumita@example.com', 'female', 'Durgapur', 'West Bengal', '$2y$10$b9BZAg3ZpTAfc7BE0e5aR.MRu1yJrq9ZH6R0EDCc8AbXuqMgGEhgu', 'user'),
(7, 'Isha', '', 'Debnath', '2003-12-29', 'Dhandabag', '7810938106', 'isha@example.com', 'female', 'Durgapur', 'West Bengal', '$2y$10$F0LYanh/950Z0BGJ9o6NNOHAoK3qekSPXI.WniYoG0hlZpGK7fNle', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
