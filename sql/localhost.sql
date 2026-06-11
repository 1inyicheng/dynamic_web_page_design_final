-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2026 年 06 月 11 日 07:46
-- 伺服器版本： 8.0.42
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `user_name_and_password`
--
CREATE DATABASE IF NOT EXISTS `user_name_and_password` DEFAULT CHARACTER SET utf32 COLLATE utf32_unicode_ci;
USE `user_name_and_password`;

-- --------------------------------------------------------

--
-- 資料表結構 `account_list`
--

CREATE TABLE `account_list` (
  `user_name` varchar(10) NOT NULL,
  `pass_word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- 資料表結構 `player_stats`
--

CREATE TABLE `player_stats` (
  `user_name_stats` varchar(20) NOT NULL,
  `used_time_stats` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account_list`
--
ALTER TABLE `account_list`
  ADD PRIMARY KEY (`user_name`);

--
-- 資料表索引 `player_stats`
--
ALTER TABLE `player_stats`
  ADD PRIMARY KEY (`user_name_stats`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
