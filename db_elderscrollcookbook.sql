-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-11-22 20:21:29
-- 服务器版本： 10.4.21-MariaDB
-- PHP 版本： 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `db_elderscrollcookbook`
--

-- --------------------------------------------------------

--
-- 表的结构 `recipe`
--

CREATE TABLE `recipe` (
  `r_ID` int(11) NOT NULL,
  `r_title` varchar(128) NOT NULL,
  `r_thumbnail` blob NOT NULL,
  `r_type` varchar(128) NOT NULL,
  `r_race` varchar(128) NOT NULL,
  `r_time` varchar(128) NOT NULL,
  `r_origin` text NOT NULL,
  `r_ingredients` varchar(128) NOT NULL,
  `r_steps` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `uID` int(11) NOT NULL,
  `u_firstName` varchar(128) NOT NULL,
  `u_lastName` varchar(128) NOT NULL,
  `u_username` varchar(128) NOT NULL,
  `u_email` varchar(128) NOT NULL,
  `u_pwd` varchar(128) NOT NULL,
  `u_isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`uID`, `u_firstName`, `u_lastName`, `u_username`, `u_email`, `u_pwd`, `u_isAdmin`) VALUES
(1, 'Sylar', ' Li', 'owosas', 'zl484@drexel.edu,', 'adminSylar_', 1),
(2, 'Amanda', 'Ma', 'wontonMa', 'atm99@drexel.edu', 'wontonma99', 0),
(9, 'Test_fst_name', 'Test_lst_name', 'Test_username', 'testemail@gmail.com', '$2y$10$giZnX6xHc80sNXx60Hc23.9.rR7AtAzEUZxAK.EEQZD3yLoZ7mHty', 0);

--
-- 转储表的索引
--

--
-- 表的索引 `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`r_ID`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `recipe`
--
ALTER TABLE `recipe`
  MODIFY `r_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
