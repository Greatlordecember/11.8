-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-10-16 15:29:59
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `myprj`
--

-- --------------------------------------------------------

--
-- 資料表結構 `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `buyer_password` varchar(225) NOT NULL,
  `telephone` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `restriction` tinyint(1) NOT NULL,
  `regist_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `deal_record`
--

CREATE TABLE `deal_record` (
  `id` int(11) NOT NULL,
  `auction_ID` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `price_for_one` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `deal_date_time` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `seller_name` varchar(225) NOT NULL,
  `seller_password` varchar(225) NOT NULL,
  `telephone` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `restriction` tinyint(1) NOT NULL,
  `regist_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `seller`
--

INSERT INTO `seller` (`id`, `seller_name`, `seller_password`, `telephone`, `email`, `address`, `grade`, `restriction`, `regist_date`) VALUES
(2, 'seller01', 'seller01', '091234567', 'seller01@gmail.com', '', 0, 0, NULL),
(3, 'seller02', 'seller02', '092468135', 'seller02@gmail.com', '', 0, 0, NULL),
(4, 'seller03', 'seller03', '093456789', 'seller03@gmail.com', '', 0, 0, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `deal_record`
--
ALTER TABLE `deal_record`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `deal_record`
--
ALTER TABLE `deal_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
