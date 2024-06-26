-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-27 00:27:23
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai08_db1`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai08_db1_table`
--

CREATE TABLE `kadai08_db1_table` (
  `id` int(12) NOT NULL,
  `date` date NOT NULL,
  `point_name` varchar(64) NOT NULL,
  `comment` text NOT NULL,
  `wind_direction` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `kadai08_db1_table`
--

INSERT INTO `kadai08_db1_table` (`id`, `date`, `point_name`, `comment`, `wind_direction`) VALUES
(1, '2024-06-24', '黒島北', '', '西南西'),
(2, '2024-06-24', '自津留', '', '南西'),
(3, '2024-06-24', '黒島南', '', '南'),
(4, '2024-06-23', '運瀬', '', '西'),
(6, '2024-06-25', 'point1', '', '0.0'),
(7, '2024-06-27', 'point1', 'あああ', '西');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai08_db1_table`
--
ALTER TABLE `kadai08_db1_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai08_db1_table`
--
ALTER TABLE `kadai08_db1_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
