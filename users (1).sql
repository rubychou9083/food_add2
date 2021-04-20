-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2021-04-14 14:35:27
-- 伺服器版本： 5.7.31
-- PHP 版本： 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `food`
--

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `to_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `to_date`) VALUES
(1, 'ruby', '$2y$10$vD9G4wwzzh/QWbwCzVSkkuNw427mOp0FTx1n4Ye9RcAOBSKmfKitq', 'wrwerwer@sffsfs', '2021-04-14 21:28:31'),
(2, 'ruby', '$2y$10$9H/ooAsi1QXJ1yX4Q.vZluqIExtJu7jWXcUfoEAMNw37FQZnUOfJm', 'wrwerwer@sffsfs', '2021-04-14 21:32:56'),
(3, '', '$2y$10$kFC9gnjBud/R/pCtAQRsHOb9M8aFz7guNF9YujS4tDB8N5VaTjyfy', '', '2021-04-14 21:54:31'),
(4, '', '$2y$10$SECP0XPnpwWFtbOWcmEY4eM.a42vYODODVOfxA6yQk9GHuZjI2UIi', '', '2021-04-14 22:10:27'),
(5, '', '$2y$10$QnSnQOsAjWFHqKH/q35B0ebiYrsO9xIfMkMtMVF7IHwus3tofRDmm', '', '2021-04-14 22:17:24'),
(6, 'ww', '$2y$10$wLLQAOCsabfBgfin50tTFOdsoSAoKsYkNemU/t.szYQN42ei7B.eq', 'asd@sadd', '2021-04-14 22:20:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
