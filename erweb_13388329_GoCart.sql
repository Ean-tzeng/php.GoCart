-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: sql306.er-webs.com
-- 生成日期: 2015 年 03 月 21 日 23:43
-- 服务器版本: 5.6.22-71.0
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `erweb_13388329_GoCart`
--

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `u_name` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `g_id` int(11) NOT NULL,
  `g_name` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `gprice` int(100) NOT NULL,
  `num` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `cart`
--

INSERT INTO `cart` (`c_id`, `u_id`, `u_name`, `g_id`, `g_name`, `gprice`, `num`, `date`) VALUES
(31, 11, '水庫', 2, 'acer liquid e1', 6000, 1, '2013-08-01'),
(25, 11, '水庫', 3, 'acer a1-810平板電腦', 5500, 10, '2013-07-26'),
(26, 11, '水庫', 1, 'sony xperia neo v', 5000, 1, '2013-07-26'),
(27, 11, '水庫', 1, 'sony xperia neo v', 5000, 1, '2013-07-26'),
(32, 11, '水庫', 8, 'sony xperia neo v', 5000, 1, '2013-08-01');

-- --------------------------------------------------------

--
-- 表的结构 `glist`
--

CREATE TABLE IF NOT EXISTS `glist` (
  `gtid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `gname` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `gprice` int(11) NOT NULL,
  `gphoto` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `gbrief` text COLLATE utf8_unicode_ci NOT NULL,
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gdescript` text COLLATE utf8_unicode_ci NOT NULL,
  `boolp` int(2) NOT NULL,
  `date` date NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `glist`
--

INSERT INTO `glist` (`gtid`, `type`, `gname`, `gprice`, `gphoto`, `gbrief`, `gid`, `gdescript`, `boolp`, `date`, `pid`) VALUES
(1, 1, 'sony xperia neo v', 5000, '', '1G單核心\r\n3.7吋螢幕\r\n512M ram', 1, '1G單核心處理器\r\n3.7吋小螢幕\r\n512M超小RAM\r\n以上都不是優點，但是...這貨...絕對夠你日常使用~\r\n你真的需要大到幾乎握不住的螢幕?\r\n你真的需要多到嚇死人的核心數?\r\n你真的需要的~只是一支順暢日常使用的手機\r\n\r\n這支...剛好可以滿足您的需求!', 1, '2013-07-24', 1),
(1, 1, 'acer liquid e1', 6000, '', '1G雙核心\r\n1GRAM\r\n500/30萬鏡頭\r\n4.3吋大螢幕', 2, '什麼?', 1, '2013-07-24', 1),
(4, 1, 'acer a1-810平板電腦', 5500, '', '1.2G四核心\r\n8吋螢幕\r\n500/30萬畫素鏡頭\r\nTouch Wakeup技術', 3, '超值配備', 1, '2013-07-23', 1),
(3, 1, '三陽冰箱', 3000, '', '95L\r\n冷藏/冷凍', 4, '不知道啦~', 0, '2013-07-22', 0),
(1, 1, 'sony xperia neo v', 5000, '', '1G單核心\r\n3.7吋螢幕\r\n512M ram', 5, '1G單核心處理器\r\n3.7吋小螢幕\r\n512M超小RAM\r\n以上都不是優點，但是...這貨...絕對夠你日常使用~\r\n你真的需要大到幾乎握不住的螢幕?\r\n你真的需要多到嚇死人的核心數?\r\n你真的需要的~只是一支順暢日常使用的手機\r\n\r\n這支...剛好可以滿足您的需求!', 1, '2013-07-24', 1),
(1, 1, 'sony xperia neo v', 5000, '', '1G單核心\r\n3.7吋螢幕\r\n512M ram', 6, '1G單核心處理器\r\n3.7吋小螢幕\r\n512M超小RAM\r\n以上都不是優點，但是...這貨...絕對夠你日常使用~\r\n你真的需要大到幾乎握不住的螢幕?\r\n你真的需要多到嚇死人的核心數?\r\n你真的需要的~只是一支順暢日常使用的手機\r\n\r\n這支...剛好可以滿足您的需求!', 1, '2013-07-24', 1),
(1, 1, 'sony xperia arcs', 6000, '', '不要再問了', 7, '就是好貨!', 1, '2013-07-27', 1),
(1, 1, 'sony xperia neo v', 5000, '', '1G單核心\r\n3.7吋螢幕\r\n512M ram', 8, '1G單核心處理器\r\n3.7吋小螢幕\r\n512M超小RAM\r\n以上都不是優點，但是...這貨...絕對夠你日常使用~\r\n你真的需要大到幾乎握不住的螢幕?\r\n你真的需要多到嚇死人的核心數?\r\n你真的需要的~只是一支順暢日常使用的手機\r\n\r\n這支...剛好可以滿足您的需求!', 1, '2013-07-24', 1),
(1, 1, 'sony xperia arcs', 6000, '', '不要再問了', 9, '就是好貨!', 1, '2013-07-27', 1),
(1, 1, 'acer liquid e1', 6000, '', '1G雙核心\r\n1GRAM\r\n500/30萬鏡頭\r\n4.3吋大螢幕', 10, '什麼?', 1, '2013-07-24', 1),
(1, 1, 'acer liquid e1', 6000, '', '1G雙核心\r\n1GRAM\r\n500/30萬鏡頭\r\n4.3吋大螢幕', 11, '什麼?', 1, '2013-07-24', 1),
(1, 1, 'acer liquid e1', 6000, '', '1G雙核心\r\n1GRAM\r\n500/30萬鏡頭\r\n4.3吋大螢幕', 12, '什麼?', 1, '2013-07-24', 1);

-- --------------------------------------------------------

--
-- 表的结构 `gtype`
--

CREATE TABLE IF NOT EXISTS `gtype` (
  `gtid` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(5) NOT NULL,
  `typename` char(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`gtid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `gtype`
--

INSERT INTO `gtype` (`gtid`, `type`, `typename`) VALUES
(1, 1, '手機'),
(2, 1, '電腦'),
(3, 1, '冰箱'),
(4, 1, '平板'),
(5, 2, '男鞋'),
(6, 2, '衣服'),
(7, 2, '褲子'),
(11, 2, '鞋子'),
(13, 2, '配件'),
(14, 3, '裙子'),
(15, 3, '襯衫'),
(16, 3, '靴子'),
(17, 3, '褲子'),
(18, 4, '食品'),
(19, 4, '衣服'),
(20, 4, '鞋子'),
(21, 4, '玩具');

-- --------------------------------------------------------

--
-- 表的结构 `promlist`
--

CREATE TABLE IF NOT EXISTS `promlist` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `pdate` date NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `promlist`
--

INSERT INTO `promlist` (`pid`, `pname`, `pdate`) VALUES
(1, '3C大清倉', '2013-07-24'),
(2, '男性撿好康', '2013-07-24');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `psd` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user`, `name`, `psd`, `u_id`) VALUES
('test', '測試員', '1234', 1),
('s30319', '水庫', '12345678', 11),
('1--', '123', '123', 14),
('dsaf', 'sadf', 'fsda', 15),
('duncan', 'surehigh', '1234', 16),
('eantg', 'eantg', 'snow0413', 17),
('add1', 'Y', '12345678', 18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
