-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2021-04-14 04:06:56
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
-- 資料表結構 `twfood`
--

DROP TABLE IF EXISTS `twfood`;
CREATE TABLE IF NOT EXISTS `twfood` (
  `bid` int(8) NOT NULL AUTO_INCREMENT,
  `foodname` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `area` int(1) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `twfood`
--

INSERT INTO `twfood` (`bid`, `foodname`, `area`, `date`, `address`, `price`, `time`, `phone`, `intro`) VALUES
(1, '高雄春捲老店.三代春捲.60年春捲老店.捷運美麗島美食.碗粿/四神湯/肉粽.高雄小吃推薦', 3, '2021-04-13', '高雄市新興區中山橫路1號', '春捲  45元\r\n碗粿 30元\r\n肉粽 / 花生粽 35\r\n元四神湯   35元                  ', ' 11:00~19:00', ' （07）285-8490', ' 春捲皮已經是事先煎好的， 裡面會包上超過的高麗菜、豆乾豆芽菜、豬肉、香菜、香腸與糖粉'),
(2, '高雄美食.大碗公冰甜品.HERSHEY’S巧克力聯名雪花冰X霸氣台式馬卡龍!超強新品報到！', 3, '2021-04-02', ' 高雄市苓雅區和平一路162號', '  Hershey’s巧克力x焦糖花生冰 95元\r\n  活益乳酸多酸奶水果綿綿冰 100元\r\n  芋泥球雙圓豆花55元', '11:00~22:00', ' （07）223-0608', ' <p>今年更推出最強<strong>Hershey’s</strong><strong>巧克力x焦糖花生綿綿冰</strong>，讓綿綿冰上開始下起可可雪，從古到今最美式風格的甜點口味跟冰品結合啦，4月1日正式開吃，就是要搶攻你的胃~自1995年創立於西子灣渡船頭旁<strong>大碗公冰.甜品</strong>，是不少人到西子灣的必吃冰店。尤其以巨無霸30倍大碗公冰而出名，主打刨冰、綿綿冰、手工豆花、手工嫩仙草、鮮果汁、甜品飲品。</p>\r\n'),
(3, '台東美食.林家臭豆腐.正氣路臭豆腐名店.阿鋐炸雞對面人氣爆棚臭豆腐.九層塔豆腐超罕見', 4, '2021-05-01', '台東縣台東市正氣路130號', ' 小份60元\r\n大分120元，', ' 14：00~賣完休息', ' （08）933-4637', ' <p>林家臭豆腐炸起來屬於比較扁型的豆腐，淋了獨門的醬汁，還加了新鮮的九層塔，更多了一股獨特的草本香味。</p>\r\n\r\n<p>吸附醬汁的臭豆腐咬起來很有嚼勁，我覺得他的臭豆腐吃起來很像豆乾炸的，沒有像關山臭豆腐那麼膨那麼大。臭豆腐咬起來裡面很濕潤。</p>\r\n'),
(4, 'assad', 2, '2021-04-13', 'asd', ' asd', ' asd', ' asd', ' <p>asd</p>\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
