-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-09-29 04:51:23
-- 伺服器版本： 10.4.20-MariaDB
-- PHP 版本： 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `vote`
--
CREATE DATABASE IF NOT EXISTS `vote` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `vote`;

-- --------------------------------------------------------

--
-- 資料表結構 `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL DEFAULT '',
  `introduction` text NOT NULL,
  `score` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `introduction`, `score`) VALUES
(1, '宋芸樺', '代表作「等一個人咖啡」、「我的少女時代」\r\n', 8051),
(2, '郭采潔', '代表作「小時代」系列', 7597),
(3, '陳意涵', '代表作「痞子英雄」、「新步步驚心」', 12895),
(4, '張鈞甯', '代表作「你照亮我星球」、「少年四大名捕」', 14857),
(5, '林依晨', '代表作「我可能不會愛你」、「蘭陵王」', 10875);

-- --------------------------------------------------------

--
-- 資料表結構 `id_number`
--

CREATE TABLE `id_number` (
  `id` varchar(10) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
