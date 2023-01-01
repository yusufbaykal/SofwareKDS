-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 15 Ara 2022, 15:37:11
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `stok`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolgeler`
--

DROP TABLE IF EXISTS `bolgeler`;
CREATE TABLE IF NOT EXISTS `bolgeler` (
  `bolge_id` int(3) NOT NULL,
  `bolge_ad` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`bolge_id`),
  KEY `bolge_id` (`bolge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bolgeler`
--

INSERT INTO `bolgeler` (`bolge_id`, `bolge_ad`) VALUES
(1, 'Marmara'),
(2, 'Ege'),
(3, 'Akdeniz'),
(4, 'Doğu Anadolu'),
(5, 'İç Anadolu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `kategori_id` int(3) NOT NULL,
  `kategori_turu` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kategori_id`),
  KEY `kategori_id` (`kategori_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_turu`) VALUES
(1, 'Meyve-Sebze'),
(2, 'Et-Balık-Tavuk'),
(3, 'Temel Gıda'),
(4, 'Temizlik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_adi`, `kullanici_sifre`) VALUES
(1, 'yusufbaykal', 'yusuf19');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veriler`
--

DROP TABLE IF EXISTS `veriler`;
CREATE TABLE IF NOT EXISTS `veriler` (
  `veri_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(3) NOT NULL,
  `tarih` date NOT NULL,
  `stok_miktari` int(11) NOT NULL,
  `bolge_id` int(3) NOT NULL,
  `bolgesel_satis` int(11) NOT NULL,
  PRIMARY KEY (`veri_id`),
  KEY `kategori_id` (`kategori_id`) USING BTREE,
  KEY `bolge_id` (`bolge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `veriler`
--

INSERT INTO `veriler` (`veri_id`, `kategori_id`, `tarih`, `stok_miktari`, `bolge_id`, `bolgesel_satis`) VALUES
(1, 1, '2021-01-01', 22424, 1, 24564),
(2, 1, '2021-01-01', 29051, 2, 27452),
(3, 1, '2021-01-01', 28895, 3, 21453),
(4, 1, '2021-01-01', 28512, 5, 23453),
(5, 1, '2021-06-01', 22425, 4, 30563),
(6, 2, '2021-06-01', 23785, 1, 24632),
(7, 2, '2021-06-01', 22899, 1, 28353),
(8, 2, '2021-06-01', 22522, 2, 24522),
(9, 2, '2021-06-01', 24563, 3, 29563),
(10, 2, '2021-09-01', 26435, 5, 24350),
(11, 3, '2021-09-01', 23242, 4, 22785),
(12, 3, '2021-09-01', 22345, 1, 21345),
(13, 3, '2021-09-01', 21135, 2, 23135),
(14, 3, '2022-01-01', 24943, 3, 20943),
(15, 3, '2022-01-01', 30311, 5, 22311),
(16, 4, '2022-06-01', 24345, 4, 28345),
(17, 4, '2022-06-01', 26244, 1, 21244),
(18, 4, '2022-06-01', 20453, 2, 23453),
(19, 4, '2022-09-01', 19387, 3, 23412),
(20, 4, '2022-09-01', 22432, 5, 23432),
(21, 1, '2022-09-01', 24526, 1, 20526),
(22, 3, '2022-09-01', 19525, 1, 24525),
(23, 3, '2022-06-01', 24525, 2, 24525),
(24, 4, '2021-09-01', 23532, 3, 20532),
(25, 4, '2022-01-01', 21343, 4, 20543);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD CONSTRAINT `kategoriler_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `veriler` (`kategori_id`);

--
-- Tablo kısıtlamaları `veriler`
--
ALTER TABLE `veriler`
  ADD CONSTRAINT `veriler_ibfk_1` FOREIGN KEY (`bolge_id`) REFERENCES `bolgeler` (`bolge_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
