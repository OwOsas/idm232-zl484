-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 26, 2021 at 06:01 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elderScrollCookbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `r_ID` int(11) NOT NULL,
  `r_title` varchar(128) NOT NULL,
  `r_imgName` varchar(128) NOT NULL,
  `r_region` varchar(128) NOT NULL,
  `r_type` varchar(128) NOT NULL,
  `r_prepTime` int(11) NOT NULL,
  `r_cookTime` int(11) NOT NULL,
  `r_origin` text NOT NULL,
  `r_ingredients` text NOT NULL,
  `r_steps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uID` int(11) NOT NULL,
  `u_firstName` varchar(128) NOT NULL,
  `u_lastName` varchar(128) NOT NULL,
  `u_username` varchar(128) NOT NULL,
  `u_email` varchar(128) NOT NULL,
  `u_pwd` varchar(128) NOT NULL,
  `u_isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `u_firstName`, `u_lastName`, `u_username`, `u_email`, `u_pwd`, `u_isAdmin`) VALUES
(1, 'Sylar', ' Li', 'owosas', 'zl484@drexel.edu,', 'adminSylar_', 1),
(2, 'Amanda', 'Ma', 'wontonMa', 'atm99@drexel.edu', 'wontonma99', 0),
(9, 'Test_fst_name', 'Test_lst_name', 'Test_username', 'testemail@gmail.com', '$2y$10$giZnX6xHc80sNXx60Hc23.9.rR7AtAzEUZxAK.EEQZD3yLoZ7mHty', 0),
(10, 'Master', 'MX', 'masterMX_', 'masterMX@gmail.com', '$2y$10$P3V40iZ08GmPnPK3JePSyOuFAC8zzQLPNCW5Ye7VnddsSargsq5Om', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`r_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `r_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
