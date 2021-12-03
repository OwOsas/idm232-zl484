-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-12-03 07:20:03
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
-- 表的结构 `recipes`
--

CREATE TABLE `recipes` (
  `r_ID` int(11) NOT NULL,
  `r_title` varchar(128) NOT NULL,
  `r_imgName` varchar(128) NOT NULL,
  `r_difficulty` int(11) NOT NULL,
  `r_region` varchar(128) NOT NULL,
  `r_type` varchar(128) NOT NULL,
  `r_prepTime` int(11) NOT NULL,
  `r_cookTime` int(11) NOT NULL,
  `r_origin` text NOT NULL,
  `r_ingredients` text NOT NULL,
  `r_steps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `recipes`
--

INSERT INTO `recipes` (`r_ID`, `r_title`, `r_imgName`, `r_difficulty`, `r_region`, `r_type`, `r_prepTime`, `r_cookTime`, `r_origin`, `r_ingredients`, `r_steps`) VALUES
(9, 'Strewed Apples and Eidar Cheese', '61a1408a4d4bf3.87856339.png', 3, 'Dumer', 'Sides', 10, 10, 'Try this recipe alongside a hearty slice of meat after a long and arduous quest-you won&#039;t be disappointed. Most apples work well in this recipe, but be sure to avoid any poisoned ones by eschewing any apples you find sitting alone on a table with no other food present. As a bonus, this versatile side dish can also do double duty as a dessert. If you&#039;re not a fan of eidar cheese&#039;s distinct ripeness, try a milder goat cheese crumble or leave it off altogether for a sweeter version. ', '3 tablespoons unsalted butter||\r\n4 or 5 large sweet apples,peeled, cored, and diced ||\r\n¼ cup dried currants ||\r\n½ cup packed brown sugar ||\r\nI teaspoon Nord Spices ||\r\nPinch of salt ||\r\nDash of vanilla extract ||\r\n2 teaspoons cornstarch ||\r\n¼ cup cold water ||\r\n¼ cup crumbled blue cheese for topping ||', '1. Melt the butter in a large saute pan or skillet over medium heat.\r\nAdd the apples and cook, stirring occasionally, for about 6 minutes,\r\nor until the apples are somewhat tender. Stir in the currants, brown\r\nsugar, Nord Spices, salt, and vanilla.\r\n||\r\n2 . In a small bowl, mix together the cornstarch and water, then add to\r\nthe pan with the apples. Cook another minute or so, until the whole\r\nmixture has thickened somewhat. Spoon into serving dishes and top\r\nwith crumbled blue cheese to taste.'),
(13, 'Strewed Apples and Eidar Cheese', '61a1408a4d4bf3.87856339.png', 3, 'Dumer', 'Sides', 10, 10, 'Try this recipe alongside a hearty slice of meat after a long and arduous quest-you won&#039;t be disappointed. Most apples work well in this recipe, but be sure to avoid any poisoned ones by eschewing any apples you find sitting alone on a table with no other food present. As a bonus, this versatile side dish can also do double duty as a dessert. If you&#039;re not a fan of eidar cheese&#039;s distinct ripeness, try a milder goat cheese crumble or leave it off altogether for a sweeter version. ', '3 tablespoons unsalted butter||\r\n4 or 5 large sweet apples,peeled, cored, and diced ||\r\n¼ cup dried currants ||\r\n½ cup packed brown sugar ||\r\nI teaspoon Nord Spices ||\r\nPinch of salt ||\r\nDash of vanilla extract ||\r\n2 teaspoons cornstarch ||\r\n¼ cup cold water ||\r\n¼ cup crumbled blue cheese for topping ||', '1. Melt the butter in a large saute pan or skillet over medium heat.\r\nAdd the apples and cook, stirring occasionally, for about 6 minutes,\r\nor until the apples are somewhat tender. Stir in the currants, brown\r\nsugar, Nord Spices, salt, and vanilla.\r\n||\r\n2 . In a small bowl, mix together the cornstarch and water, then add to\r\nthe pan with the apples. Cook another minute or so, until the whole\r\nmixture has thickened somewhat. Spoon into serving dishes and top\r\nwith crumbled blue cheese to taste.');

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
(9, 'Test_fst_name', 'Test_lst_name', 'Test_username', 'testemail@gmail.com', '$2y$10$giZnX6xHc80sNXx60Hc23.9.rR7AtAzEUZxAK.EEQZD3yLoZ7mHty', 0),
(10, 'Master', 'MX', 'masterMX_', 'masterMX@gmail.com', '$2y$10$C6XVIFuY.cNW6Jt0l1Mc7egv2GDnKuVRPEP9mrzl7fWSfV.PMXvSO', 0);

--
-- 转储表的索引
--

--
-- 表的索引 `recipes`
--
ALTER TABLE `recipes`
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
-- 使用表AUTO_INCREMENT `recipes`
--
ALTER TABLE `recipes`
  MODIFY `r_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
