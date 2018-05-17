-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 17 May 2018, 16:37:29
-- Sunucu sürümü: 5.7.21
-- PHP Sürümü: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `comporision`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `brandid` int(11) NOT NULL AUTO_INCREMENT,
  `brandname` varchar(200) NOT NULL,
  PRIMARY KEY (`brandid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `brand`
--

INSERT INTO `brand` (`brandid`, `brandname`) VALUES
(1, 'Gree'),
(2, 'Beko'),
(3, 'Beko'),
(4, 'Beko2'),
(6, 'deneme5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `groupname`
--

DROP TABLE IF EXISTS `groupname`;
CREATE TABLE IF NOT EXISTS `groupname` (
  `groupid` int(11) NOT NULL AUTO_INCREMENT,
  `groupName` varchar(15) NOT NULL,
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `groupname`
--

INSERT INTO `groupname` (`groupid`, `groupName`) VALUES
(1, '12000 BTU2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `isproductfeatures`
--

DROP TABLE IF EXISTS `isproductfeatures`;
CREATE TABLE IF NOT EXISTS `isproductfeatures` (
  `isproductfeaturesid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `productfeaturesid` int(11) NOT NULL,
  `featuresname` varchar(250) NOT NULL,
  PRIMARY KEY (`isproductfeaturesid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `isproductfeatures`
--

INSERT INTO `isproductfeatures` (`isproductfeaturesid`, `productid`, `productfeaturesid`, `featuresname`) VALUES
(26, 30, 2, '-'),
(27, 31, 1, 'Dış Ünite'),
(28, 31, 2, '-'),
(25, 30, 1, 'Dış Ünite');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productbrandid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `productimage` varchar(200) NOT NULL,
  `productprice` varchar(100) DEFAULT '0',
  PRIMARY KEY (`productid`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`productid`, `productbrandid`, `groupid`, `productname`, `productimage`, `productprice`) VALUES
(30, 1, 1, 'U-Crown Inverter', 'ss_u-crown-cropped-2-1-300x105-1.jpg', '100000'),
(31, 2, 1, '61210 AA Ev Tipi Klima', 'ss_beko-klima-ariza-kodlari-1.jpg', '4199');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `productfeatures`
--

DROP TABLE IF EXISTS `productfeatures`;
CREATE TABLE IF NOT EXISTS `productfeatures` (
  `productfeaturesid` int(11) NOT NULL AUTO_INCREMENT,
  `productfeatures` varchar(100) NOT NULL,
  PRIMARY KEY (`productfeaturesid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `productfeatures`
--

INSERT INTO `productfeatures` (`productfeaturesid`, `productfeatures`) VALUES
(1, 'Besleme'),
(2, 'Faz/Gerilim/Frekans');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `settingId` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(200) NOT NULL,
  `sitelogo` varchar(50) NOT NULL,
  PRIMARY KEY (`settingId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `useremail` varchar(150) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `userfullname` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`userid`, `useremail`, `userpassword`, `userfullname`) VALUES
(1, 'batuhansaygili94@gmail.com', 'batuhan07', 'Batuhan SAYGILI');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
